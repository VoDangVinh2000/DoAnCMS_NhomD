<?php
function ceylon_demo_setup_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function ceylon_demo_setup_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function ceylon_demo_setup_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}
function ceylon_demo_setup_get_theme_name(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Name');
}

function ceylon_demo_setup_get_templates_lists( $theme_slug ){
	
    switch ($theme_slug):	
		
		//ecommerce-star themes
		case ($theme_slug == "shopping-mall" || $theme_slug == "shopping-plus" || $theme_slug == "retail-shop" || $theme_slug == "smart-shopper"  || $theme_slug == "ecommerce-star" ):
			
			$theme_slug = "e-star";
			
            $demo_templates_lists = array(
			
				
               'demo-2' =>array(
                    'title' => __( 'Business Demo', 'ceylon-demo-installer' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'elementor', /*Optional eg elementor or other page builders*/
                    'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/content.json',
                        'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/options.json',
                        'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/widgets.json'
                    ),
                    'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/screenshot.png',/*Screenshot of block*/
                    'demo_url' => 'https://demo.ceylonthemes.com/business-demo/',/*Demo Url*/
                    /**/
                    'plugins' => array(

                        array(
                            'name'      => 'eCommerce theme Extra Functionality',
                            'slug'      => 'ecommerce-extra',
                        ),						
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
						
						array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),
				
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
					
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                    )
                ),
				
				
				'demo-3' =>array(
					'title' => __( 'Multipurpose Demo', 'ceylon-demo-installer' ),/*Title*/
					'is_premium' => false,/*Premium*/
					'type' => 'elementor',/*Optional eg elementor or other page builders*/
					'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
					'keywords' => array( 'woocommerce', 'elementor' ),/*Search keyword*/
					'template_url' => array(
						'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/content.json',
						'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/options.json',
						'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/widgets.json'
					),
					'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/screenshot.png',/*Screenshot of block*/
					'demo_url' => 'https://demo.ceylonthemes.com/multipurpose/',/*Demo Url*/
					/**/
					'plugins' => array(
						array(
							'name'      => 'eCommerce theme Extra Functionality',
							'slug'      => 'ecommerce-extra',
						),						
						
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
																	
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
					)
			),
			
			
				'demo-4' =>array(
					'title' => __( 'Shopping Demo', 'ceylon-demo-installer' ),/*Title*/
					'is_premium' => false,/*Premium*/
					'type' => 'elementor',/*Optional eg elementor or other page builders*/
					'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
					'keywords' => array( 'woocommerce', 'elementor' ),/*Search keyword*/
					'template_url' => array(
						'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/content.json',
						'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/options.json',
						'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/widgets.json'
					),
					'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/screenshot.png',/*Screenshot of block*/
					'demo_url' => 'https://demo.ceylonthemes.com/brandstore/',/*Demo Url*/
					/**/
					'plugins' => array(
						array(
							'name'      => 'eCommerce theme Extra Functionality',
							'slug'      => 'ecommerce-extra',
						),						
						
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
						
						array(
							'name'      => 'WooCommerce',
							'slug'      => 'woocommerce',
						),
				
						
						array(
							'name'      => 'Product Quick View',
							'slug'      => 'yith-woocommerce-quick-view',
						),						
																	
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
					)
			),
							
			//	
            );			
		
		
		break;
		
		
		//ecommerce plus themes
		case ($theme_slug == "ecommerce-plus" || $theme_slug == "web-design" || $theme_slug == "shop-online" || $theme_slug == "fast-storefront" || $theme_slug == "techno" || $theme_slug == "green-shop" || $theme_slug == "mega-storefront" || $theme_slug == "shop-starter"  || $theme_slug == "digital-shop" ) :
			$theme_slug = "general";
            $demo_templates_lists = array(
			
                'demo-1' =>array(
                    'title' => __( 'Shop Demo', 'ceylon-demo-installer' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'normal',/*Optional eg elementor or other page builders*/
                    'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'shop' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/content.json',
                        'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/options.json',
                        'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/widgets.json'
                    ),
                    'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/screenshot.png',/*Screenshot of block*/
                    'demo_url' => 'http://demo.ceylonthemes.com/ecommerce-plus/',/*Demo Url*/
                    /**/
                    'plugins' => array(
                        array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),
                        array(
                            'name'      => 'eCommerce theme Extra Functionality',
                            'slug'      => 'ecommerce-extra',
                        ),						
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
                        array(
                            'name'      => 'Product Wishlist',
                            'slug'      => 'yith-woocommerce-wishlist',
                        ),					
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
						
                        array(
                            'name'      => 'Product Compare',
                            'slug'      => 'yith-woocommerce-compare',
                        ),						
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                    )
                ),
				
               'demo-2' =>array(
                    'title' => __( 'Modern Agency', 'ceylon-demo-installer' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'elementor', /*Optional eg elementor or other page builders*/
                    'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/content.json',
                        'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/options.json',
                        'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/widgets.json'
                    ),
                    'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/screenshot.png',/*Screenshot of block*/
                    'demo_url' => 'https://demo.ceylonthemes.com/modern-agency',/*Demo Url*/
                    /**/
                    'plugins' => array(

                        array(
                            'name'      => 'eCommerce theme Extra Functionality',
                            'slug'      => 'ecommerce-extra',
                        ),						
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
						
						array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),
				
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
					
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                    )
                ),
				
				
				'demo-3' =>array(
					'title' => __( 'Multipurpose Demo', 'ceylon-demo-installer' ),/*Title*/
					'is_premium' => false,/*Premium*/
					'type' => 'elementor',/*Optional eg elementor or other page builders*/
					'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
					'keywords' => array( 'woocommerce', 'elementor' ),/*Search keyword*/
					'template_url' => array(
						'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/content.json',
						'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/options.json',
						'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/widgets.json'
					),
					'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-3/screenshot.png',/*Screenshot of block*/
					'demo_url' => 'https://demo.ceylonthemes.com/multipurpose/',/*Demo Url*/
					/**/
					'plugins' => array(
						array(
							'name'      => 'eCommerce theme Extra Functionality',
							'slug'      => 'ecommerce-extra',
						),						
						
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
																	
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
					)
			),
			
			
				'demo-4' =>array(
					'title' => __( 'Shopping Demo', 'ceylon-demo-installer' ),/*Title*/
					'is_premium' => false,/*Premium*/
					'type' => 'elementor',/*Optional eg elementor or other page builders*/
					'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
					'keywords' => array( 'woocommerce', 'elementor' ),/*Search keyword*/
					'template_url' => array(
						'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/content.json',
						'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/options.json',
						'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/widgets.json'
					),
					'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-4/screenshot.png',/*Screenshot of block*/
					'demo_url' => 'https://demo.ceylonthemes.com/brandstore/',/*Demo Url*/
					/**/
					'plugins' => array(
						array(
							'name'      => 'eCommerce theme Extra Functionality',
							'slug'      => 'ecommerce-extra',
						),						
						
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
						
						array(
							'name'      => 'WooCommerce',
							'slug'      => 'woocommerce',
						),
				
						
						array(
							'name'      => 'Product Quick View',
							'slug'      => 'yith-woocommerce-quick-view',
						),						
																	
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
					)
			),
			
			);
			
			break;
	
			//dark shop themes
			case ($theme_slug == "wp-dark") :
			
				$theme_slug = "wp-dark";
				
				$demo_templates_lists = array(
				
					
				   'demo-2' =>array(
						'title' => __( 'Shop Demo', 'ceylon-demo-installer' ),/*Title*/
						'is_premium' => false,/*Premium*/
						'type' => 'elementor', /*Optional eg elementor or other page builders*/
						'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
						'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
						'template_url' => array(
							'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/content.json',
							'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/options.json',
							'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/widgets.json'
						),
						'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/screenshot.png',/*Screenshot of block*/
						'demo_url' => 'https://demo.ceylonthemes.com/business-dark/',/*Demo Url*/
						/**/
						'plugins' => array(
	
							array(
								'name'      => 'eCommerce theme Extra Functionality',
								'slug'      => 'ecommerce-extra',
							),						
							
							array(
								'name'      => 'Elementor Page Builder',
								'slug'      => 'elementor',
							),
							
							array(
								'name'      => 'WooCommerce',
								'slug'      => 'woocommerce',
							),
					
							
							array(
								'name'      => 'Product Quick View',
								'slug'      => 'yith-woocommerce-quick-view',
							),						
						
													
							array(
								'name'      => 'Contact Form 7',
								'slug'      => 'contact-form-7',
								'main_file' => 'wp-contact-form-7.php',
							),
						)
					),
												
				//	
				);			
			
	
		break;
    
    
			//dark shop themes
			case ($theme_slug == "modern-agency") :
			
				$theme_slug = "modern-agency";
				
				$demo_templates_lists = array(
                    
               'demo-1' =>array(
                    'title' => __( 'Shop Demo', 'ceylon-demo-installer' ),/*Title*/
                    'is_premium' => false,/*Premium*/
                    'type' => 'normal',/*Optional eg elementor or other page builders*/
                    'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
                    'keywords' => array( 'woocommerce', 'shop' ),/*Search keyword*/
                    'template_url' => array(
                        'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/content.json',
                        'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/options.json',
                        'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/widgets.json'
                    ),
                    'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-1/screenshot.png',/*Screenshot of block*/
                    'demo_url' => 'http://demo.ceylonthemes.com/ecommerce-plus/',/*Demo Url*/
                    /**/
                    'plugins' => array(
                        array(
                            'name'      => 'WooCommerce',
                            'slug'      => 'woocommerce',
                        ),	
						
                        array(
                            'name'      => 'Elementor Page Builder',
                            'slug'      => 'elementor',
                        ),
                        
                        array(
                            'name'      => 'Product Wishlist',
                            'slug'      => 'yith-woocommerce-wishlist',
                        ),					
						
                        array(
                            'name'      => 'Product Quick View',
                            'slug'      => 'yith-woocommerce-quick-view',
                        ),						
						
                        array(
                            'name'      => 'Product Compare',
                            'slug'      => 'yith-woocommerce-compare',
                        ),						
						                        
						array(
                            'name'      => 'Contact Form 7',
                            'slug'      => 'contact-form-7',
                            'main_file' => 'wp-contact-form-7.php',
                        ),
                                                
                        array(
                            'name'      => 'eCommerce theme Extra Functionality',
                            'slug'      => 'ecommerce-extra',
                        ),	                        
                        
                    )
                ),
				
					
				   'demo-2' =>array(
						'title' => __( 'Business Agency Demo', 'ceylon-demo-installer' ),/*Title*/
						'is_premium' => false,/*Premium*/
						'type' => 'elementor', /*Optional eg elementor or other page builders*/
						'author' => __( 'Ceylon Themes', 'ceylon-demo-installer' ),/*Author Name*/
						'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
						'template_url' => array(
							'content' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/content.json',
							'options' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/options.json',
							'widgets' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/widgets.json'
						),
						'screenshot_url' => CEYLON_DEMO_SETUP_TEMPLATE_URL.$theme_slug.'/demo-2/screenshot.png',/*Screenshot of block*/
						'demo_url' => 'https://demo.ceylonthemes.com/modern-agency/',/*Demo Url*/
						/**/
						'plugins' => array(					
							
							array(
								'name'      => 'Elementor Page Builder',
								'slug'      => 'elementor',
							),
							
							array(
								'name'      => 'WooCommerce',
								'slug'      => 'woocommerce',
							),
					
							
							array(
								'name'      => 'Product Quick View',
								'slug'      => 'yith-woocommerce-quick-view',
							),						
						
													
							array(
								'name'      => 'Contact Form 7',
								'slug'      => 'contact-form-7',
								'main_file' => 'wp-contact-form-7.php',
							),
                            
                            array(
                                'name'      => 'eCommerce theme Extra Functionality',
                                'slug'      => 'ecommerce-extra',
                            ),	                            
                            
						)
					),
												
				//	
				);			
			
	
		break;    
	
			
        default:
            $demo_templates_lists = array();
    endswitch;
	

    return $demo_templates_lists;

}