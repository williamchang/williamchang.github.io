/**
@file
	game.js
@brief
	Copyright 2011 Creative Crew. All rights reserved.
@author
	William Chang
	Email: william@creativecrew.org
	Website: http://www.williamchang.org
@version
	0.1
@date
	- Created: 2011-04-03
	- Modified: 2011-04-04
	.
@note
	Prerequisites:
	- jQuery http://www.jquery.com/
	.
	References:
	- http://diveintohtml5.org/canvas.html
	- http://diveintohtml5.org/examples/halma.js
	- http://www.quesucede.com/public/gameoflife/source.html
	- http://blog.robbychen.com/2010/03/14/learning-html-5-canvas/
	- http://jsperf.com/setinterval-vs-settimeout
	.
*/

// Widget: Board Game
(function($){
var memberPublic = {};
var _extensionName = 'wcBoardGame';
// Declare options and set default values.
var _opt = null, _optCustoms = null, _optDefaults = {
	strStartButtonSelector:'.btn_start',
	numPlayers:3,
	strTimerSelector:'#timer .value',
	numTimerSeconds:30,
	strScoreSelector:'#score .value',
	numScoreMaximum:16,
	numBoardTableRows:10,
	numBoardTableColumns:10,
	numBoardLineWidth:1
};

/* Private Fields
//-------------------------------------------------------------------*/

var _numBoardPixelWidth = 0;
var _numBoardPixelHeight = 0;
var _numBoardCellWidth = 50;
var _numBoardCellHeight = 50;
var _objBoardCells = [];
var _eleStartButton = null;
var _eleScore = null;
var _eleTimer = null;
var _numTimerSeconds = 0;
var _eleCanvas = null;
var _ctxCanvas = null;
var _objPlayers = [];
var _objPlayerCurrent = null;
var _numGameState = 0;
var _enumGameState = {
	ENDED:0,
	NEW:1,
	RUNNING:2,
	WAITING:3
};

/* Private Methods
//-------------------------------------------------------------------*/

/** On event, get cursor position. */
function _onGetCursorPosition(evt) {
	var numX, numY;
	if(evt.pageX || evt.pageY) {
		numX = evt.pageX;
		numY = evt.pageY;
	} else {
		numX = evt.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
		numY = evt.clientY + document.body.scrollTop + document.documentElement.scrollTop;
	}
	numX -= _eleCanvas.offsetLeft;
	numY -= _eleCanvas.offsetTop;
	numX = Math.min(numX, _opt.numBoardTableRows * _numBoardCellWidth);
	numY = Math.min(numY, _opt.numBoardTableColumns * _numBoardCellHeight);
	var objCell = new Cell(Math.floor(numY / _numBoardCellHeight), Math.floor(numX / _numBoardCellWidth), null);
	return objCell;
}
/** On click event, canvas. */
function _onClickCanvas(evt) {
	// Validate game state.
	if(_numGameState == _enumGameState.ENDED || _numGameState == _enumGameState.NEW) {return;}
	// Declare and init prerequisites.
	var objCell = _onGetCursorPosition(evt);
	var objPiece = _objBoardCells[objCell.numRow][objCell.numColumn].objPiece;
	// Validate piece.
	if(objPiece && _objPlayerCurrent.numId == objPiece.numPlayerId) {
		_removePiece(objCell);
		_setPlayerScore(_objPlayerCurrent, objPiece);
	}
	// Prevent default action.
	return false;
}
/** On event, start game. */
function _onStartGame(evt) {
	// Confirm user.
	if($(this).attr('disabled') == 'disabled') {return false;}
	// Set button.
	$(this).attr('disabled', 'disabled').get(0);
	// Validate game state.
	if(_numGameState == _enumGameState.ENDED) {
		memberPublic.createGame();
	}
	// Run game.
	memberPublic.runGame();
	// Prevent default action.
	return false;
}
/** Create cells. */
function _createCells() {
	var objCell = null, objPiece = null;
	for(var numRow = 0;numRow < _opt.numBoardTableRows;numRow += 1) {
		_objBoardCells[numRow] = [];
		for(var numColumn = 0;numColumn <= _opt.numBoardTableColumns;numColumn += 1) {
			objPiece = new Piece(numRow * numColumn + 1, Math.floor(Math.random() * _opt.numPlayers + 1), 1);
			objCell = new Cell(numRow, numColumn, objPiece);
			_drawPiece(objCell);
			_objBoardCells[numRow][numColumn] = objCell;
		}
	}
}
/** Draw board. */
function _drawBoard() {
	// Clear canvas.
	_ctxCanvas.clearRect(0, 0, _numBoardPixelWidth, _numBoardPixelHeight);
	// Begin path.
	_ctxCanvas.beginPath();
	// Create vertical lines.
	for(var x = 0;x <= _numBoardPixelWidth;x += _numBoardCellWidth) {
		_ctxCanvas.moveTo(0.5 + x, 0);
		_ctxCanvas.lineTo(0.5 + x, _numBoardPixelHeight);
	}
	// Create horizontal lines.
	for(var y = 0;y <= _numBoardPixelHeight;y += _numBoardCellHeight) {
		_ctxCanvas.moveTo(0, 0.5 + y);
		_ctxCanvas.lineTo(_numBoardPixelWidth, 0.5 +  y);
	}
	// Draw lines.
	_ctxCanvas.lineWidth = _opt.numBoardLineWidth;
	_ctxCanvas.strokeStyle = '#ccc';
	_ctxCanvas.stroke();
}
/** Draw piece. */
function _drawPiece(objCell) {
	// Declare and init prerequisites.
	var objPiece = objCell.objPiece;
	// Validate cell.
	if(objPiece) {
		// Declare and init prerequisites.
		var numX = (objCell.numColumn * _numBoardCellWidth) + (_numBoardCellWidth / 2);
		var numY = (objCell.numRow * _numBoardCellHeight) + (_numBoardCellHeight / 2);
		var numRadius = (_numBoardCellWidth / 2) - (_numBoardCellWidth / 10);
		// Create structure.
		_ctxCanvas.beginPath();
		_ctxCanvas.arc(numX, numY, numRadius, 0, Math.PI * 2, false);
		_ctxCanvas.closePath();
		// Draw lines.
		_ctxCanvas.strokeStyle = '#000';
		_ctxCanvas.stroke();
		// Fill structure.
		_ctxCanvas.fillStyle = '#666';
		_ctxCanvas.fill();
		// Draw text.
		_ctxCanvas.textAlign = 'center';
		_ctxCanvas.textBaseline = 'middle';
		_ctxCanvas.font = 'bold 24px Verdana, Arial, Helvetica';
		_ctxCanvas.fillStyle = '#fff';
		_ctxCanvas.fillText(objPiece.numPlayerId, numX, numY);
	} else {
		// Declare and init prerequisites.
		var numX = objCell.numColumn * _numBoardCellWidth + _opt.numBoardLineWidth;
		var numY = objCell.numRow * _numBoardCellHeight + _opt.numBoardLineWidth;
		// Clear piece.
		_ctxCanvas.clearRect(numX, numY, _numBoardCellWidth - _opt.numBoardLineWidth, _numBoardCellHeight - _opt.numBoardLineWidth);
	}
}
/** Draw pieces. */
function _drawPieces(objBoardCells) {
	var i, j;
	for(i = 0;i < objBoardCells.length;i += 1) {
		for(j = 0;j <= objBoardCells[i].length;j += 1) {
			_drawPiece(_objBoardCells[i][j]);
		}
	}
}
/** Remove piece. */
function _removePiece(objCell) {
	objCell.objPiece = null;
	_drawPiece(objCell);
}
/** Run timer. */
function _runTimer() {
	if(_numGameState == _enumGameState.RUNNING && _numTimerSeconds > 0) {
		_numTimerSeconds -= 1;
		$(_eleTimer).text(_numTimerSeconds);
		setTimeout(_runTimer, 1000);
	} else {
		memberPublic.endGame();
	}
}
/** Set player score. */
function _setPlayerScore(objPlayer, objPiece) {
	// Set score.
	objPlayer.numScore += objPiece.numValue;
	// Validate player score.
	if(objPlayer.numScore >= _opt.numScoreMaximum) {
		memberPublic.endGame();
	}
	$(_eleScore).text(_objPlayerCurrent.numScore);
}

/* Public Methods
//-------------------------------------------------------------------*/

/** Extend core library. */
memberPublic = $[_extensionName] = function(eleCanvas, optCustoms) {
	// Merge two options, modifying the first.
	_opt = $.extend({}, _optDefaults, optCustoms);
	// Init.
	memberPublic.init(eleCanvas);
	// Return library's object.
	return this;
};
/** Init widget. */
memberPublic.init = function(eleCanvas) {
	_numBoardPixelWidth = 1 + (_opt.numBoardTableRows * _numBoardCellWidth);
	_numBoardPixelHeight = 1 + (_opt.numBoardTableColumns * _numBoardCellHeight);

	_eleCanvas = eleCanvas;
	_eleCanvas.width = _numBoardPixelWidth;
	_eleCanvas.height = _numBoardPixelHeight;
	_ctxCanvas = eleCanvas.getContext('2d');
	_eleCanvas.addEventListener('click', _onClickCanvas, false);

	_eleScore = $(_opt.strScoreSelector).get(0);
	_eleTimer = $(_opt.strTimerSelector).get(0);

	memberPublic.createGame();

	_eleStartButton = $(_opt.strStartButtonSelector).bind('click', _onStartGame).get(0);
};
/** Get options. */
memberPublic.getOptions = function() {
	return _opt;
};
/** Create (new) game. */
memberPublic.createGame = function() {
	// Init players.
	var numIndexOffset = 0;
	for(var numIndex = 0;numIndex < _opt.numPlayers;numIndex += 1) {
		numIndexOffset = numIndex + 1;
		_objPlayers[numIndex] = new Player(numIndexOffset, 'Unknown_' + numIndexOffset, 0);
	}
	_objPlayerCurrent = _objPlayers[0];
	$(_eleScore).text(_objPlayerCurrent.numScore);
	// Init board.
	_drawBoard();
	_createCells();
	// Init timer.
	_numTimerSeconds = _opt.numTimerSeconds;
	$(_eleTimer).text(_numTimerSeconds);
	// Set state.
	_numGameState = _enumGameState.NEW;
};
/** Run game. */
memberPublic.runGame = function() {
	_numGameState = _enumGameState.RUNNING;
	_runTimer();
};
/** End game. */
memberPublic.endGame = function() {
	_numGameState = _enumGameState.ENDED;
	$(_eleStartButton).removeAttr('disabled');
};

/* Custom Objects
//-------------------------------------------------------------------*/

function Player(numId, strName, numScore) {
	this.numId = numId;
	this.strName = strName;
	this.numScore = numScore;
}
function Piece(numId, numPlayerId, numValue) {
	this.numId = numId;
	this.numPlayerId = numPlayerId;
	this.numValue = numValue;
}
function Cell(numRow, numColumn, objPiece) {
	this.numRow = numRow;
	this.numColumn = numColumn;
	this.objPiece = objPiece;
}

/* Chainability
//-------------------------------------------------------------------*/

/** Extend chain library. */
$.fn[_extensionName] = function(optCustoms) {
	// Merge two options, modifying the first.
	_opt = $.extend({}, _optDefaults, optCustoms);
	// Iterate and return each selected element back to library's chain.
	return this.each(function(_intIndex) {
		/** Init widget. */
		this.init = function() {
			memberPublic.init(_eleThis);
		};

		// Procedural.
		var _eleThis = this;
		_eleThis.init();
	});
};

})(jQuery);