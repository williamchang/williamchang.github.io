/**
@file
	diehard_facebooklike.js
@brief
	Copyright 2011 Creative Crew. All rights reserved.
@author
	Jake Rutter, William Chang
	Email: william@creativecrew.org
	Website: http://www.williamchang.org
@version
	0.1
@date
	- Created: 2010-08-30
	- Modified: 2011-02-03
	.
@note
	Prerequisites:
	- jQuery http://www.jquery.com/
	- Redirect Page Using CMS (Content Management System).
	.
	References:
	- http://code.google.com/p/jquery-one-fblike/
	- http://stackoverflow.com/questions/901115/get-querystring-with-jquery
	- http://firequery.binaryage.com/
	.
*/

// Widget: Facebook Like
(function($){
// Extend chain library.
$.fn.diehard_facebooklike = function(optCustoms) {
// Declare options and set default values.
var optDefaults = {
	appId:'',
	admins:'',
	buttonWidth:450,
	buttonHeight:80,
	showfaces:false,
	font:'lucida grande',
	layout:'normal',
	action:'like',
	colorscheme:'light',
	fnLoad:null
};
// Merge two options, modifying the first.
var opt = $.extend(optDefaults, optCustoms);

// Required dependencies using Facebook JavaScript SDK.
$('body').append('<div id=\"fb-root\"></div>');
window.fbAsyncInit = function() {
	FB.init({appId:opt.appId, status:true, cookie:true, xfbml:true});
	// Callback on dependencies load.
	if(opt.fnLoad) {opt.fnLoad.call(this);}
};
(function() {
	var e = document.createElement('script');
	e.async = true;
	e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
}());

// Iterate and return each selected element back to library's chain.
return this.each(function(_intIndex) {
	/** Create query string parameter. */
	function _createParam(strKey, strDataCss) {
		if(_eleDataRegion == null) {return '';}
		return strKey + '=' + $('> .' + strDataCss, _eleDataRegion).val() + '&';
	}
	/** Parse markup code. */
	function _parseMarkup() {
		// Get URL.
		var strUrl = $(_eleThis).attr('data-url');
		var strDataTokens = [];
		// Validate data.
		if(strUrl == null || strUrl.length <= 0) {
			throw('Markup code error, missing value in data-url attribute of element.');
		} else {
			strDataTokens = strUrl.split(';');
			if(strDataTokens.length >= 1) {
				strUrl = strDataTokens[0];
			}
		}
		// Create and append markup code to document.
		$(_eleThis).html('<fb:like href=\"' + strUrl + '" width=\"' + opt.buttonWidth + '\" height=\"' + opt.buttonHeight + '\" show_faces=\"' + opt.showfaces + '\" font=\"' + opt.font + '\" layout=\"' + opt.layout + '\" action=\"' + opt.action + '\" colorscheme=\"' + opt.colorscheme + '\"/>');
	}
	/** Init widget. */
	this.init = function() {
		// Parse markup code.
		_parseMarkup();
	};

	// Fields.
	var _eleDataRegion = null;
	// Procedural.
	var _eleThis = this;
	_eleThis.init();
});
};
})(jQuery);