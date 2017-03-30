jQuery(window).bind('resize', function() {

    // Get width of parent container
    var width = jQuery(disc).attr('clientWidth');
    if (width == null || width < 1){
        // For IE, revert to offsetWidth if necessary
        width = jQuery(disc).attr('offsetWidth');
    }
    width = width - 2; // Fudge factor to prevent horizontal scrollbars
    if (width > 0 &&
        // Only resize if new width exceeds a minimal threshold
        // Fixes IE issue with in-place resizing when mousing-over frame bars
        Math.abs(width - jQuery(col-xs-2 col-md-2 col-xs-2).width()) > 5)
    {
        jQuery(col-xs-2 col-md-2 col-xs-2).setGridWidth(width);
    }

}).trigger('resize');