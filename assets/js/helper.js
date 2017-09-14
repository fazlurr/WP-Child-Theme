var Helper = (function () {
	"use strict";

	var module = {};
	var methods = {};

	var el = {};

	// Init
	module.init = function () {
		module.initSelector();
	};

	// Init Selector
	module.initSelector = function () {
		
	};

	// Contain String - Check if some string contain some string
	module.containString = function (s, sub) {
		return (s.indexOf(sub) !== -1);
	};

	module.wordInString = function (s, word) {
		return new RegExp('\\b' + word + '\\b', 'i').test(s);
	};

	return module;
})();

var delay = (function () {
	var timer = 0;
	return function (callback, ms) {
		clearTimeout(timer);
		timer = setTimeout(callback, ms);
	};
})();