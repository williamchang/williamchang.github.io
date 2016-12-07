/**
@file
	wc_aspnetvalidationhighlighter.js
@brief
	Copyright 2011 Creative Crew. All rights reserved.
@author
	William Chang
	Email: william@creativecrew.org
	Website: http://www.williamchang.org
@version
	0.1
@date
	- Created: 2011-02-03
	- Modified: 2011-09-07
	.
@note
	Prerequisites:
	- Microsoft ASP.NET Web Forms
	- jQuery http://www.jquery.com/
	.
	References:
	- https://developer.mozilla.org/en/DOM/window
	- http://codinglifestyle.wordpress.com/2009/09/16/change-background-color-of-invalid-controls-asp-net-validator/
	.
	
	Sample for Callback function:
	$.wc_aspnetvalidationhighlighter({
		fnFieldChanged:function(boolIsValid) {
			if($(this).is('select')) {
				$(this).parent().toggleClass('error_container', !boolIsValid);
			}
		},
		strFieldErrorCss:'error_field'
	});
*/

/*jslint browser: true, unparam: true, sloppy: true, windows: true, vars: true, white: true, nomen: true, maxerr: 50, indent: 4 */

// Widget: Aspnet Validation Highlighter
(function($){
var memberPublic = null;
var _extensionName = 'wc_aspnetvalidationhighlighter';
// Declare options and set default values.
var _opt = null, _optCustoms = null, _optDefaults = {
	fnChangeField:null,
	strFieldErrorCss:'error_field'
};

/* Private Fields
//-------------------------------------------------------------------*/

var _fnAspnetValidatorUpdateDisplay = null;

/* Public Methods
//-------------------------------------------------------------------*/

/** Extend core library. */
memberPublic = $[_extensionName] = function(optCustoms) {
	// Merge two options, modifying the first.
	_opt = $.extend({}, _optDefaults, optCustoms);
	// Init.
	memberPublic.init();
	// Return library's object.
	return this;
};
/** Init widget. */
memberPublic.init = function() {
	// Validate Aspnet function exist in window and document of browser.
	if(typeof window !== 'object' || typeof window.document !== 'object' || typeof window.ValidatorUpdateDisplay !==  'function') {
		return;
	}
	// Declare reference variable to Aspnet function.
	_fnAspnetValidatorUpdateDisplay = window.ValidatorUpdateDisplay;
	// Override Aspnet function.
	window.ValidatorUpdateDisplay = memberPublic.runValidatorUpdateDisplay;
	
	// Validate Aspnet variable exist.
	if(typeof Page_IsValid === 'boolean') {
		if(Page_IsValid === false && Page_Validators !== 'undefined') {
			for(var i = 0;i < Page_Validators.length;i += 1) {
				// Validate Aspnet form fields on page load.
				memberPublic.validateFormField(document.getElementById(Page_Validators[i].controltovalidate));
			}
		}
	}
};
/** Get options. */
memberPublic.getOptions = function() {
	return _opt;
};
/** Run alternative of Aspnet function. */
memberPublic.runValidatorUpdateDisplay = function(eleValidator) {
	if(typeof _fnAspnetValidatorUpdateDisplay === 'function') {
		_fnAspnetValidatorUpdateDisplay(eleValidator);
	}
	memberPublic.validateFormField(document.getElementById(eleValidator.controltovalidate));
};
/** Validate form field. */
memberPublic.validateFormField = function(eleField) {
	var boolIsAllValid = true;
	for(var i = 0;i < eleField.Validators.length;i += 1) {
		if(!eleField.Validators[i].isvalid) {
			boolIsAllValid = false;
			break;
		}
	}
	$(eleField).toggleClass(_optDefaults.strFieldErrorCss, !boolIsAllValid);
	if(_opt.fnFieldChanged) {_opt.fnFieldChanged.call(eleField, boolIsAllValid);}
};

/* Chaining
//-------------------------------------------------------------------*/

/** Extend chain library. */
$.fn[_extensionName] = function(optCustoms) {
	// Merge two options, modifying the first.
	_opt = $.extend({}, _optDefaults, optCustoms);
	// Iterate and return each selected element back to library's chain.
	return this.each(function(_intIndex) {
		/** Init widget. */
		this.init = function() {
			// Do something.
		};

		// Procedural.
		var _eleThis = this;
		_eleThis.init();
	});
};

})(jQuery);