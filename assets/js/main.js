(function($) {

var Aegis = (function () {
	"use strict";

	var module = {};

	var el = {
		homeSlider: '',
		hasDatepicker: '',
		hasSelect: '',
		job: {
			departments: '',
			offices: '',
		},
		faq: {
			search: '',
			item: ''
		}
	};

	var data = {};

	// Init
	module.init = function () {
		this.initSelector();
		this.initSlider();
		this.initWow();
		this.initSelect2();
		this.initJobs();
		this.initFAQ();
		this.initVideoOverlay();
	};

	// Init Selector
	module.initSelector = function () {
		el.homeSlider = $('#home-slider');
		el.hasDatepicker = $('.has-datepicker');
		el.hasSelect = $('.has-select');
		el.job.departments = $('#job-department-select');
		el.job.offices = $('#job-office-select');
		el.faq.search = $('#faq-search');
		el.faq.item = $('.faq');
	};

	// Init Slider
	module.initSlider = function () {
		el.homeSlider.flexslider({
			animation: "slide"
		});
	};

	// Init Datepicker
	module.initDatepicker = function () {
		var options = {
			format: 'D-MM-YYYY'
		};
		el.hasDatepicker.pikaday( options );
	};

	// Init WOW.js
	module.initWow = function () {
		new WOW().init();
	};

	// Init Select2
	module.initSelect2 = function () {
		el.hasSelect.select2({
			theme: 'bootstrap'
		});
	};

	// Init Jobs
	module.initJobs = function () {
		el.job.departments.on('select2:select', function (event) {
			const department = el.job.departments.val();
			if (department == 'all') {
				$('.job').removeClass('hidden');
			} else {
				$('.job').removeClass('hidden');
				$('.job').not(`[data-department="${department}"]`).addClass('hidden');
			}
		});

		el.job.offices.on('select2:select', function (event) {
			const office = el.job.offices.val();
			if (office == 'all') {
				$('.job-item').removeClass('hidden');
			} else {
				$('.job-item').removeClass('hidden');
				$('.job-item').not(`[data-location="${office}"]`).addClass('hidden');
			}
		});
	};

	// Init FAQ
	module.initFAQ = function () {
		el.faq.search.on('input keyup', function (e) {
			var c = String.fromCharCode(e.keyCode);
			var isWordCharacter = c.match(/\w/);
			var isBackspaceOrDelete = (e.keyCode == 8 || e.keyCode == 46);
			if (isWordCharacter || isBackspaceOrDelete) {
				const keyword = el.faq.search.val().trim();
				delay(function () {
					module.searchFAQ(keyword);
				}, 500);
			}
		});
	};

	// Search FAQ
	module.searchFAQ = function (keyword) {
		if (keyword !== '') {
			el.faq.item.each(function(index, elem) {
				const $elem = $(elem);
				const name = $elem.attr('data-name');
				if (! Helper.containString(name, keyword)) {
					$elem.addClass('hidden');
				} else {
					$elem.removeClass('hidden');
				}
			});
		} else {
			el.faq.item.removeClass('hidden');
		}
	};

	// Init Video Overlay
	module.initVideoOverlay = function () {
		$('.button-open-overlay').bind('click', function (event) {
			var overlayTarget = $(this).data('target');
			$('#' + overlayTarget).addClass('open');
		});
		// Bind Overlay Close Button
		$('.overlay__close').bind('click', function (event) {
			$(this).parent().removeClass('open');
			$('.embed-container iframe').each(function () {
				this.contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
			});
		});
	};

	return module;
})();

$(document).ready( function () {
	Aegis.init();
});

})(jQuery);