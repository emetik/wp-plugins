/**
 * Disable admin div when it's a translation of another resource
 * @param div
 */
function disableDiv(div) {

    var append = "<span style='color:red'>Managed in other language</span>";
    jQuery(div).prepend(append);
    jQuery(div).css("border", "1px dashed red");
    jQuery(div).css("opacity", "0.6");
    jQuery(div).css("pointer-events", "none");
}

(function ($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
	 *
	 * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
	 *
	 * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */




    if ($("#icl_translation_of").length && $("#icl_translation_of").is(':disabled') != true) {
              $(".icl_mcs_cfs:checked").each(function () {
            var val = this.value;
            if (val == 1) { //copy
                var div_name = $(this).closest('td').prev().html();
                var div_to_disable = '*[data-name="' + div_name + '"]';
                disableDiv(div_to_disable);
            }
        });
        //categories
        disableDiv("#products_categoriesdiv");
        //features
        disableDiv("#postimagediv");
    }


})(jQuery);
