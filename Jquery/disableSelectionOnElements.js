/* Disable Selection on Elelments
/*
/* e.g. $('body').disableSelection();
 */
(function($){
	$.fn.disableSelection = function() {
		return this
			.attr('unselectable', 'on')
			.css('user-select', 'none')
			.on('selectstart', false);
	};
})(jQuery);