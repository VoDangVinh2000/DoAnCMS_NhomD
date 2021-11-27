<?php

add_filter('ecommerce_plus_default_theme_options', 'digital_shop_default_settings');

function digital_shop_default_settings($ecommerce_plus_default_options){
		
		
	$ecommerce_plus_default_options['primary_color'] = '#1b8fd5';
	$ecommerce_plus_default_options['accent_color'] = '#36c0f7';
	$ecommerce_plus_default_options['link_color'] = '#189ac1';
	
	$ecommerce_plus_default_options['site_header_layout'] = 'default';
	
	$ecommerce_plus_default_options['header_title_color'] = '#202020';
	
	$ecommerce_plus_default_options['store_menu_color'] = '#555';
	$ecommerce_plus_default_options['store_menubar_color'] = '#0000';
	
	$ecommerce_plus_default_options['menubar_border_height'] = 0;

	$ecommerce_plus_default_options['heading_font'] = 'Oswald';	
	$ecommerce_plus_default_options['body_font'] = 'Muli';	
	
	
	$ecommerce_plus_default_options['before_shop'] = 0;
	$ecommerce_plus_default_options['after_shop'] = 0;
	
	$ecommerce_plus_default_options['footer_bg_color'] = '#1b8fd5';
	$ecommerce_plus_default_options['footer_text_color'] = '#fff';
	
	$ecommerce_plus_default_options['topbar_login_label'] = esc_html__('Contact', 'digital-shop');
	
	$ecommerce_plus_default_options['breadcrumb_image'] = get_stylesheet_directory_uri().'/images/breadcrumb.jpg';
	$ecommerce_plus_default_options['breadcrumb_show'] = true;
	
	$ecommerce_plus_default_options['topbar_login_register_enable'] = false;

	
	return $ecommerce_plus_default_options;
}
