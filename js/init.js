(function ($) {
	$(function () {

		$('.button-collapse').sideNav();
		$('.parallax').parallax();

		$(document).ready(function () {
			$('select').material_select();
		});
		// begin carousel
		$('.carousel').carousel({
			shift: 30,
			padding: 20,
			indicators: true,
			padding: 10,
		});

		// begin fade
		var options = [{
			selector: '.sf',
			offset: 500,
			callback: function (el) {
				Materialize.fadeInImage($(el));
			}
		}];
	}); // end of document ready
})(jQuery); // end of jQuery name space
