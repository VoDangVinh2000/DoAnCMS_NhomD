<?php

/*
 * Overwrite parent theme function
 */
if (!function_exists('ecommerce_plus_get_header_style')):

function ecommerce_plus_get_header_style(){

		global $post;
		
		if ($post){
			$style = get_post_meta( $post->ID, 'ecommerce-plus-header-style', true );	
			if ($style == 'shadow') {
				return "box-shadow";
			} elseif ($style == 'border'){
				return "header-border";
			} elseif ($style == 'transparent'){
				return "header-transparent";
			} elseif ($style == 'none'){
				return "header-style-none";	
			} else {
				if(get_option('page_on_front') < 1 ){
					return "header-border";
				} else {
					return "box-shadow";
				}			
			}
		} else {
			if(get_option('page_on_front') < 1 ){
				return "header-border";
			} else {
				return "box-shadow";
			}
		}
		
	} //end function
endif;


/* counter script */
function digital_shop_counter_scripts()
{

	wp_register_script(
	   'digital-shop-counter-script',
	   get_stylesheet_directory_uri() . '/js/time.js',
	   array('jquery'),
	   1.0,
	   true
   );

   wp_enqueue_script( 'digital-shop-counter-script' );
   
   $digital_shop_options  = ecommerce_plus_get_theme_options();
   
   $date = (isset($digital_shop_options['countdown_date']) ? $digital_shop_options['countdown_date'] : '' );
   $month = (isset($digital_shop_options['countdown_month']) ? $digital_shop_options['countdown_month'] : '' );
   $year = (isset($digital_shop_options['countdown_year']) ? $digital_shop_options['countdown_year'] : '' );
   
	
	$show_days = (isset($digital_shop_options['countdown_enable_days']) ? $digital_shop_options['countdown_enable_days'] : false );
	$show_hours = (isset($digital_shop_options['countdown_enable_hours']) ? $digital_shop_options['countdown_enable_hours'] : false );
	
	
   $script_params = array(          
	   'dateString' => absint($year) . '-' . absint($month) . '-' . absint($date),
	   'show_days' => $show_days,
	   'show_hours' => $show_hours
   );


   wp_localize_script( 'digital-shop-counter-script', 'megashopScriptParams', $script_params );

}
add_action( 'wp_enqueue_scripts', 'digital_shop_counter_scripts' );



