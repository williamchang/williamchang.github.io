/**
@file
	diehard_collapsible.js
@brief
	Copyright 2011 Creative Crew. All rights reserved.
@author
	William Chang
	Email: william@creativecrew.org
	Website: http://www.williamchang.org
@version
	0.1
@date
	- Created: 2009-04-28
	- Modified: 2010-05-07
	.
@note
	Prerequisites:
	- jQuery http://www.jquery.com/
	- jquery.cookie 
		- http://plugins.jquery.com/project/cookie
		- http://www.stilbuero.de/2006/09/17/cookie-plugin-for-jquery/
		.
	.
	
	Sample for HTML:
	<div id="panels">
		<div class="panel">
			<div class="panel_header">Test Header</div>
			<div class="panel_body">Test Body</ediv>
		</div>
	</div>
	
	Sample for CSS:
	#panels .panel .panel_header_left {float:left;width:13px;height:13px;margin:2px 8px 0 0;background:url(../components/collapsible/panel_collapse.jpg) transparent no-repeat 0 0;cursor:pointer;}
	#panels .panel .collapsible_selected_hide .panel_header_left {background:url(../components/collapsible/panel_expand.jpg) transparent no-repeat 0 0;}
	
	Sample for JavaScript:
	$('#requisitions_container').diehard_collapsible({
		strPanelCss:'panel',
		strCollapsibleHeaderCss:'panel_header',
		strCollapsibleBodyCss:'panel_body',
		strCookieNamespace:'appname_'
	});
*/

// Widget: Collapsible
(function($){
// Plugin for jQuery.
$.fn.diehard_collapsible = function(options) {
// Validate prerequisites.
if(!$.cookie) {throw('Dependency Error: jQuery plugin cookie is missing.');}
// Iterate and return each selected element back to library's chain.
return this.each(function(_intIndex) {
	/** Hide panel. */
	function _hideCollapsiblePanel(eleHeader, eleBody) {
		$(eleHeader).addClass('collapsible_selected_hide');
		$(eleBody).get(0).style.display = 'none';
		return '0';
	}
	/** Show panel. */
	function _showCollapsiblePanel(eleHeader, eleBody) {
		$(eleHeader).removeClass('collapsible_selected_hide');
		$(eleBody).get(0).style.display = 'block';
		return '1';
	}
	/** Get state of panel. */
	function _getState(intPanelIndex) {
		if(!_boolCookieEnabled) {return '';}
		if(typeof _strCookieValues[intPanelIndex] !== 'undefined') {
			return _strCookieValues[intPanelIndex];
		} else {
			return '';
		}
	}
	/** Set state of panel. */
	function _setState(intPanelIndex, strToggle) {
		if(!_boolCookieEnabled) {return false;}
		_strCookieValues[intPanelIndex] = strToggle;
		_setCookie();
		return true;
	}
	/** Get cookie. */
	function _getCookie() {
		if(!_boolCookieEnabled) {return;}
		var strValue = $.cookie(_strCookieName);
		if(typeof strValue === 'string') {
			_strCookieValues = strValue.split(',');
		} else {
			_strCookieValues = [];
		}
	}
	/** Set cookie. */
	function _setCookie() {
		if(!_boolCookieEnabled) {return;}
		var strValue = _strCookieValues.join(',');
		$.cookie(_strCookieName, strValue, {expires:7});
	}
	/** Set collapse panel. */
	this.setCollapsiblePanel = function(strPanelId, strCommand) {
		// Find elements by id.
		for(var intIndex = 0;intIndex < _elePanels.length;intIndex += 1) {
			if(_elePanels[intIndex].id == strPanelId) {
				// Get header and body from panel.
				var eleHeader = $('> .' + _eleThis.options.strCollapsibleHeaderCss, _elePanels[intIndex]).get(0);
				var eleBody = $('> .' + _eleThis.options.strCollapsibleBodyCss, _elePanels[intIndex]).get(0);
				// Execute command.
				switch(strCommand.toLowerCase()) {
					case '1': case 'true': case 'show': case 'open':
						_showCollapsiblePanel(eleHeader, eleBody);_setState(intIndex, '1');break;
					case '0': case 'false': case 'hide': case 'close':
						_hideCollapsiblePanel(eleHeader, eleBody);_setState(intIndex, '0');break;
					default:
						return false;
				}
				// Return element found.
				return _elePanels[intIndex];
			}
		}
		return false;
	}
	/** Create collapsible events. */
	function _createCollapsiblePanelEvents(intPanelIndex, eleHeader, eleBody) {
		var objAnimateParams = {};
		switch(_eleThis.options.strCollapsibleDirection.toLowerCase()) {
			case 'vertical':
				objAnimateParams = {opacity:'toggle', height:'toggle'};break;
			case 'horizontal':
				objAnimateParams = {opacity:'toggle', width:'toggle'};break;
			default:
				return;
		}
		$(eleHeader).toggle(function(e) {
			// Has toggled, then trigger next method.
			if($(eleBody).css('display') == 'none') {$(this).trigger('click');return;}
			// Animate hide.
			if(_eleThis.options.fnBeforeStart) {_eleThis.options.fnBeforeStart.call(this, '0');}
			$(eleBody).animate(objAnimateParams, 'fast', function() {
				// Hide panel.
				_hideCollapsiblePanel(eleHeader, eleBody);
				_setState(intPanelIndex, '0');
			});
			if(_eleThis.options.fnAfterStop) {_eleThis.options.fnAfterStop.call(this, '0');}
		}, function(e) {
			// Animate show.
			if(_eleThis.options.fnBeforeStart) {_eleThis.options.fnBeforeStart.call(this, '1');}
			$(eleBody).animate(objAnimateParams, 'fast', function() {
				// Show panel.
				_showCollapsiblePanel(eleHeader, eleBody);
				_setState(intPanelIndex, '1');
				if($.browser.msie) {$(this).get(0).style.removeAttribute('filter');}
			});
			if(_eleThis.options.fnAfterStop) {_eleThis.options.fnAfterStop.call(this, '1');}
		});
	}
	/** Create collapsible panels from markup code. */
	function _createCollapsiblePanels() {
		// Get panels.
		_elePanels = $('.' + _eleThis.options.strPanelCss, _eleRegion).get();
		if(_elePanels.length <= 0) {throw('Error: Collapsible panels not found.');}
		var objPanels = [_elePanels.length];
		// Setup cookie.
		if(_eleThis.options.strCookieNamespace != null && _eleThis.options.strCookieNamespace.length > 0) {
			_boolCookieEnabled = true;
			_strCookieName = _eleThis.options.strCookieNamespace + _eleThis.options.strPanelCss;
			_getCookie();
		}
		// Setup each panel.
		for(var intIndex = 0;intIndex < _elePanels.length;intIndex++) {
			// Get header and body from panel.
			var eleHeader = $('> .' + _eleThis.options.strCollapsibleHeaderCss, _elePanels[intIndex]).get(0);
			var eleBody = $('> .' + _eleThis.options.strCollapsibleBodyCss, _elePanels[intIndex]).get(0);
			// Prepend and append markup code to header.
			var eleHeaderLeft = $('<span class=\"' + _eleThis.options.strCollapsibleHeaderCss + '_left\"></span>').prependTo(eleHeader).get(0);
			var eleHeaderRight = $('<span class=\"' + _eleThis.options.strCollapsibleHeaderCss + '_right\"></span>').appendTo(eleHeader).get(0);
			// Restore state.
			var strState = _getState(intIndex);
			_eleThis.setCollapsiblePanel(_elePanels[intIndex].id, strState);
			if(!$(eleHeader).hasClass('collapsible_selected_hide') && $(eleBody).css('display') == 'none') {$(eleHeader).addClass('collapsible_selected_hide');}
			// Bind events to header.
			_createCollapsiblePanelEvents(intIndex, eleHeader, eleBody);
			// Create object and append to array of objects.
			var objPanel = {};
			objPanel.elePanel = _elePanels[intIndex];
			objPanel.eleHeader = eleHeader;
			objPanel.eleBody = eleBody;
			objPanel.strState = strState;
			objPanels[intIndex] = objPanel;
		}
		if(_eleThis.options.fnLoad) {_eleThis.options.fnLoad.call(this, objPanels);}
	}
	/** Load widget. */
	this.load = function _load() {
		_eleRegion = _eleThis;
		_createCollapsiblePanels();
	}
	/** Init library. */
	this.init = function init(options) {
		var defaults = {
			strPanelCss:'panel_collapsible',
			strCollapsibleHeaderCss:'panel_collapsible_header',
			strCollapsibleBodyCss:'panel_collapsible_body',
			strCollapsibleDirection:'vertical',
			strCookieNamespace:'domain_',
			fnLoad:null,
			fnBeforeStart:null,
			fnAfterStop:null
		};
		return $.extend(defaults, options);
	}

	// Fields.
	var _elePanels = [];
	var _eleRegion;
	var _boolCookieEnabled = false;
	var _strCookieName;
	var _strCookieValues = [];
	// Procedural.
	var _eleThis = this;
	_eleThis.options = _eleThis.init(options);
	_eleThis.load();
});
};
})(jQuery);