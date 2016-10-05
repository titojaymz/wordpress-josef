<?php
/**
 * Add inline styles to the head area
 * These styles represents options from the customizer
 * @package Emphasize
 */

 // Dynamic styles
function emphasize_inline_styles($custom) {
	
// BEGIN CUSTOM CSS

	// site title and logo margins
		$logo_margins = get_theme_mod( 'logo_margins', '10px 0 0 0' );
		$custom .= ".site-branding img, .site-title { margin: " . esc_attr($logo_margins) . ";}"."\n";

	// links
		$link_colour = get_theme_mod( 'link_colour', '#7cb6c2' );
		$custom .= "a, a:visited { color: " . esc_attr($link_colour) . ";}"."\n";

	// links on hover
		$link_hover = get_theme_mod( 'link_hover', '#c78b31' );
		$custom .= "a:hover, a:focus, a:active { color: " . esc_attr($link_hover) . ";}"."\n";

	// headings colour
		$headings_colour = get_theme_mod( 'headings_colour', '#519dad' );
		$custom .= "h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a { color: " . esc_attr($headings_colour) . ";}"."\n";

	// bottom group headings colour
		$bottom_group_text = get_theme_mod( 'bottom_group_text', '#c8e1e6' );
		$custom .= "#bottom-group h4 { color: " . esc_attr($bottom_group_text) . ";}"."\n";

	// footer group headings colour
		$footer_text = get_theme_mod( 'footer_text', '#a0a0a0' );
		$custom .= "#footer-group h4 { color: " . esc_attr($footer_text) . ";}"."\n";

	// bottom links
		$bottom_group_links = get_theme_mod( 'bottom_group_links', '#c8e1e6' );
		$custom .= "#bottom-group a, #bottom-group a:visited { color: " . esc_attr($bottom_group_links) . ";}"."\n";

	// bottom hover links
		$bottom_group_hover = get_theme_mod( 'bottom_group_hover', '#c8e1e6' );
		$custom .= "#bottom-group a:hover { color: " . esc_attr($bottom_group_hover) . ";}"."\n";

	// bottom tagcloud
		$bottom_group_text = get_theme_mod( 'bottom_group_text', '#c8e1e6' );
		$custom .= "#bottom-group .tagcloud a { border-color: " . esc_attr($bottom_group_text) . ";}"."\n";

	// bottom list borders
		$bottom_group_list = get_theme_mod( 'bottom_group_list', '#87a3a8' );
		$custom .= "#bottom-group .widget li { border-color: " . esc_attr($bottom_group_list) . ";}"."\n";

	// site footer links
		$footer_links = get_theme_mod( 'footer_links', '#a0a0a0' );
		$custom .= "#site-footer a { color: " . esc_attr($footer_links) . ";}"."\n";

	// site footer hover links
		$footer_hover = get_theme_mod( 'footer_hover', '#c7b596' );
		$custom .= "#site-footer a:hover { color: " . esc_attr($footer_hover) . ";}"."\n";

	// social link
		$socialicons = get_theme_mod( 'socialicons', '#5d636a' );
		$custom .= ".social-navigation a { color: " . esc_attr($socialicons) . ";}"."\n";

	// social hover link
		$socialicons_hover = get_theme_mod( 'socialicons_hover', '#a9aeb3' );
		$custom .= ".social-navigation a:hover { color: " . esc_attr($socialicons_hover) . ";}"."\n";

	// gallery caption styles
		$caption_bg = get_theme_mod( 'caption_bg', '#fff' );
		$caption_text = get_theme_mod( 'caption_text', '#747474' );
		$custom .= ".gallery-caption { background-color: " . esc_attr($caption_bg) . "; color: " . esc_attr($caption_text) . ";}"."\n";	
		
	// main menu links
		$nav_links = get_theme_mod( 'nav_links', '#686868' );
		$custom .= ".primary-navigation li a, .primary-navigation li li > a, .primary-navigation li.home a { color: " . esc_attr($nav_links) . ";}"."\n";

	// submenu background
		$submenu_bg = get_theme_mod( 'submenu_bg', '#ebeced' );
		$custom .= ".primary-navigation ul ul { background-color: " . esc_attr($submenu_bg) . ";}"."\n";

	// main menu hover and active colour
		$nav_hover = get_theme_mod( 'nav_hover', '#7cb6c2' );
		$custom .= ".site-navigation li.home a:hover, .site-navigation a:hover, .site-navigation .current-menu-item > a,.site-navigation .current-menu-item > a, 
		.site-navigation .current-menu-ancestor > a { color: " . esc_attr($nav_hover) . ";}"."\n";

	// mobile menu button
		$mobile_menu_bg = get_theme_mod( 'mobile_menu_bg', '#282828' );
		$mobile_menu_button_text = get_theme_mod( 'mobile_menu_button_text', '#fff' );
		$custom .= ".menu-toggle { background-color: " . esc_attr($mobile_menu_bg) . "; color: " . esc_attr($mobile_menu_button_text) . ";}"."\n";

	// mobile menu hover button
		$mobile_menu_bghover = get_theme_mod( 'mobile_menu_bghover', '#7cb6c2' );
		$custom .= ".menu-toggle:active,.menu-toggle:focus,.menu-toggle:hover { background-color: " . esc_attr($mobile_menu_bghover) . ";}"."\n";

	// announcement styles
		$announce_bg = get_theme_mod( 'announce_bg', '#7cb6c2' );
		$announce_text = get_theme_mod( 'announce_text', '#fff' );
		$custom .= "#announcement { background-color: " . esc_attr($announce_bg) . "; color: " . esc_attr($announce_text) . ";}"."\n";

	// header styles
		$header_bgcolour = get_theme_mod( 'header_bgcolour', '#fff' );
		$custom .= ".header-bg { background-color: " . esc_attr($header_bgcolour) . ";}"."\n";

	// bottom group styles
		$bottom_group_bg = get_theme_mod( 'bottom_group_bg', '#709096' );
		$bottom_group_text = get_theme_mod( 'bottom_group_text', '#fff' );
		$custom .= "#bottom-group { background-color: " . esc_attr($bottom_group_bg) . "; color: " . esc_attr($bottom_group_text) . ";}"."\n";

	// site footer styles
		$footer_bg = get_theme_mod( 'footer_bg', '#282828' );
		$footer_text = get_theme_mod( 'footer_text', '#a0a0a0' );
		$custom .= "#site-footer { background-color: " . esc_attr($footer_bg) . "; color: " . esc_attr($footer_text) . ";}"."\n";


	//Output all the styles
	wp_add_inline_style( 'emphasize-style', $custom );	
}
add_action( 'wp_enqueue_scripts', 'emphasize_inline_styles' );	