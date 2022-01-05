( function ( $ ) {


    var WidgetLAECarouselHandler = function ($scope, $) {

        var helper = new LAE_Carousel_Helper($scope, '.lae-testimonials-carousel');

        helper.init();
    };

    // Make sure you run this code under Elementor..
    $( window ).on( 'elementor/frontend/init', function () {

        elementorFrontend.hooks.addAction( 'frontend/element_ready/lae-testimonials.default', WidgetLAECarouselHandler );

    } );

} )( jQuery );