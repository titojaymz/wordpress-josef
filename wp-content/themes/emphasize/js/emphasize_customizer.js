// Adding buttons to our customizer
jQuery(document).ready(function() {

	/* Upsells in customizer (Documentation, Reviews and Support links */
	if( !jQuery( ".emphasize-info" ).length ) {
		
		jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section emphasize-info">');
	
		jQuery('.emphasize-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://www.shapedpixels.com/setup-emphasize/" class="button" target="_blank">{setup}</a>'.replace('{setup}', emphasizeCustomizerObject.setup));
		
		jQuery('.emphasize-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://wordpress.org/support/view/theme-reviews/emphasize" class="button" target="_blank">{review}</a>'.replace('{review}', emphasizeCustomizerObject.review));
		
		jQuery('.emphasize-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://wordpress.org/support/theme/emphasize" class="button" target="_blank">{support}</a>'.replace('{support}', emphasizeCustomizerObject.support));
		
		jQuery('.emphasize-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://www.shapedpixels.com/emphasize-pro" class="button" target="_blank">{pro}</a>'.replace('{pro}',emphasizeCustomizerObject.pro));

		jQuery('#customize-theme-controls > ul').prepend('</li>');
	}
	
});