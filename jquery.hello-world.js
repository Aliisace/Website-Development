(function($) {

    $.fn.helloWorld = function( options ) {

        // Establish our default settings
        var settings = $.extend({
		    color        : null,
		    fontStyle    : null,
		    complete     : null
		}, options);

        return this.each( function() {

		    if ( settings.color ) {
		        $(this).css( 'color', settings.color );
		    }

		    if ( settings.fontStyle ) {
		        $(this).css( 'font-style', settings.fontStyle );
		    }

		    if ( $.isFunction( settings.complete ) ) {
		        settings.complete.call( this );
		    }
		});

    }

}(jQuery));