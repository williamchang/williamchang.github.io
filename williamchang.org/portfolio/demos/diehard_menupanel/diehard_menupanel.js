/**
@file
	diehard_menupanel.js
@brief
	Copyright 2011 Creative Crew. All rights reserved.
@author
	William Chang
	Email: william@creativecrew.org
	Website: http://www.williamchang.org
@version
	0.1
@date
	- Created: 2010-06-22
	- Modified: 2011-02-08
	.
@note
	Prerequisites:
	- jQuery http://www.jquery.com/
	.
*/

// Widget: Menu Panel
(function($){
// Plugin for jQuery.
$.fn.diehard_menupanel = function(options) {
// Iterate and return each selected element back to library's chain.
return this.each(function(_intIndex) {
	/** On event, menu open. */
	function _onMenuOpen(e) {
		$(this).children(_eleThis.options.strPanelsSelector).last().show();
		// Prevent default action.
		return false;
	}
	/** On event, menu close. */
	function _onMenuClose(e) {
		$(this).children(_eleThis.options.strPanelsSelector).last().hide();
		// Prevent default action.
		return false;
	}
	/** Parse tree of markup code. */
	function _parseMarkupTree() {
		// Declaration for menu items.
		var intLevel2Count;
		var eleLevel2Children, eleLevel2Container, eleLevel3Container;
		// Parse markup to panels.
		$(_eleThis).addClass(_eleThis.options.strLevel1MenuPanelCss);
		_eleMenus = $(_eleThis).children().each(function(intIndex) {
			$(this).addClass(_eleThis.options.strLevel1MenuItemCss).addClass(_eleThis.options.strLevel1MenuItemCss + (intIndex + 1));
			_eleMenuLevel1Links[intIndex] = $('> a:first', this).addClass(_eleThis.options.strLevel1MenuLinkCss).get(0);
			_elePanels[intIndex] = $(this).children(_eleThis.options.strPanelsSelector).addClass(_eleThis.options.strLevel2MenuPanelCss).get(0);
		}).get();
		if(_eleMenus.length >= 2) {
			$(_eleMenus[0]).addClass(_eleThis.options.strLevel1MenuItemFirstCss);
			$(_eleMenus[_eleMenus.length - 1]).addClass(_eleThis.options.strLevel1MenuItemLastCss);
		}
		// Validate each panel.
		for(var intIndex = 0;intIndex < _elePanels.length;intIndex += 1) {
			intLevel2Count = 0;
			eleLevel2Container = null;
			// Manipulate markup of menu items.
			$('> ' + _eleThis.options.strItemsSelector, _elePanels[intIndex]).each(function(intIndex2) {
				eleLevel2Children = $(_eleThis.options.strHasChildrenSelector, this).parent().addClass(_eleThis.options.strLevel2MenuItemCss).addClass(_eleThis.options.strLevel2MenuItemHasChildrenCss).get(0);
				if(eleLevel2Children !== undefined) {
					// Manipulate third level of menu items.
					eleLevel3Container = null;
					$(_eleThis.options.strItemsSelector, eleLevel2Children).each(function(intIndex3) {
						// Remove excess children from item.
						$('> ul', this).remove();
						// Validate and manipulate item.
						if(intIndex3 % _eleThis.options.intItemsGroup == 0) {
							eleLevel3Container = this;
						} else {
							$('> *', this).appendTo(eleLevel3Container);
							$(this).remove();
						}
					});
				} else {
					// Manipulate second level of menu items.
					if(intLevel2Count % _eleThis.options.intItemsGroup == 0) {
						$(this).addClass(_eleThis.options.strLevel2MenuItemCss).addClass(_eleThis.options.strLevel2MenuItemHasLonersCss);
						eleLevel2Container = this;
					} else {
						$('> *', this).appendTo(eleLevel2Container);
						$(this).remove();
					}
					intLevel2Count += 1;
				}
				if(intIndex2 == 0) {
					$(this).addClass(_eleThis.options.strLevel2MenuItemFirstCss);
				}
			});
		}
		// Bind events.
		$(_eleMenus).bind('mouseenter', _onMenuOpen);
		$(_eleMenus).bind('mouseleave', _onMenuClose);
		// Callback on load.
		if(_eleThis.options.fnLoad) {_eleThis.options.fnLoad.call(this, _eleMenus, _eleMenuLevel1Links, _elePanels);}
	}
	/** Load widget. */
	this.load = function _load() {
		_eleRegion = $('#' + _eleThis.options.strRegionId).get(0);
		_parseMarkupTree();
		$(_eleThis).parent().show();
	}
	/** Init library. */
	this.init = function init(options) {
		var defaults = {
			strRegionId:'region_header',
			strPanelsSelector:'ul',
			strItemsSelector:'li',
			strHasChildrenSelector:'> ul',
			intItemsGroup:3,
			strLevel1MenuPanelCss:'menu-level1-panel',
			strLevel1MenuItemCss:'menu-level1-item',
			strLevel1MenuItemFirstCss:'menu-level1-item-first',
			strLevel1MenuItemLastCss:'menu-level1-item-last',
			strLevel1MenuLinkCss:'menu-level1-link',
			strLevel2MenuPanelCss:'menu-level2-panel',
			strLevel2MenuItemCss:'menu-level2-item',
			strLevel2MenuItemFirstCss:'menu-level2-item-first',
			strLevel2MenuItemLastCss:'menu-level2-item-last',
			strLevel2MenuItemHasChildrenCss:'menu-level2-item-haschildren',
			strLevel2MenuItemHasLonersCss:'menu-level2-item-hasloners',
			strSelectedMenuItemCss:'menu-item-selected',
			fnLoad:null
		};
		return $.extend(defaults, options);
	}

	// Fields.
	var _eleRegion;
	var _eleMenus = [], _eleMenuLevel1Links = [], _elePanels = [];
	// Procedural.
	var _eleThis = this;
	_eleThis.options = _eleThis.init(options);
	_eleThis.load();
});
};
})(jQuery);