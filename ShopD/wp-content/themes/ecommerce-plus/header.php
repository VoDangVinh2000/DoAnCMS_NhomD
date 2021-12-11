<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header-cart/style.css' ?>">

    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/page-category/category.css' ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/cart/style.css' ?>">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif;
wp_head();			
$ecommerce_plus_options  = ecommerce_plus_get_theme_options(); 
?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/home/style.css' ?>">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif;
	
	wp_head();
	$ecommerce_plus_options  = ecommerce_plus_get_theme_options();
	?>
	
</head>

<body <?php body_class(); ?>>

	<?php do_action('wp_body_open'); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ecommerce-plus'); ?></a>
		<div class="menu-overlay"></div>

		<header id="masthead" class="site-header <?php echo esc_attr(ecommerce_plus_get_header_style()); ?>" role="banner">

			<?php

			do_action('ecommerce_plus_top_bar');

			//page options layout has heighest priority
			if ($ecommerce_plus_options['site_header_layout'] == 'default' && ecommerce_plus_get_header_layout() == 'storefront') {
				$ecommerce_plus_options['site_header_layout'] = 'storefront';
			}

			if ($ecommerce_plus_options['site_header_layout'] == 'storefront' && ecommerce_plus_get_header_layout() == 'default') {
				$ecommerce_plus_options['site_header_layout'] = 'default';
			}

			if (!class_exists('WooCommerce')) {
				$ecommerce_plus_options['site_header_layout'] = 'default';
			}

			if ($ecommerce_plus_options['site_header_layout'] == 'default') { ?>
				<div id="theme-header" class="header-default">
					<div class="container">
						<?php do_action('ecommerce_plus_toggle'); ?>
						<?php do_action('ecommerce_plus_branding'); ?>
						<?php do_action('ecommerce_plus_navigation'); ?>
					</div>
				</div>

			<?php } elseif ($ecommerce_plus_options['site_header_layout'] == 'storefront') { ?>

				<div class="header-storefront">
					<div class="container">

						<div class="row vertical-center">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<?php do_action('ecommerce_plus_branding'); ?>
							</div>

							<div class="col-md-5 col-sm-12 col-xs-12 header-search-widget">
								<?php
								if ($ecommerce_plus_options['ajax_search'] && class_exists('DGWT_WC_Ajax_Search')) {
								?><div class="header-ajax-search-container"><?php
																				echo do_shortcode('[wcas-search-form]');
																				?></div><?php
										} else {
											the_widget('ecommerce_plus_product_search_widget');
										}
											?>
							</div>

							<div class="col-md-3 col-sm-12 col-xs-12 header-woocommerce-icons">
								<?php the_widget('ecommerce_plus_cart_wishlist_acc_widget'); ?>
							</div>
						</div>

					</div>
				</div>

				<div id="theme-header" class="header-storefront menu">
					<div class="container">
						<?php do_action('ecommerce_plus_toggle'); ?>
						<?php do_action('ecommerce_plus_navigation'); ?>
					</div>
				</div>

			<?php } ?>

		</header><!-- #masthead -->

		<div id="content" class="site-content">

			<?php


			if ($ecommerce_plus_options['breadcrumb_show'] && !is_front_page()) :

				$ecommerce_plus_header_image = $ecommerce_plus_options['breadcrumb_image'];


				if ($ecommerce_plus_options['breadcrumb_product_image'] && class_exists('WooCommerce') && is_product_category()) {

					$ecommerce_plus_header_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_id(), 'full') : $ecommerce_plus_options['breadcrumb_image'];
				} else {

					if (class_exists('WooCommerce') && (is_product_category() || is_shop() || is_product()) && $ecommerce_plus_options['breadcrumb_product_image'] == false) {

						$ecommerce_plus_header_image = $ecommerce_plus_options['breadcrumb_image'];
					} else {

						$ecommerce_plus_header_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_id(), 'full') : $ecommerce_plus_options['breadcrumb_image'];
					}
				}


			?>

				<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url($ecommerce_plus_header_image); ?>');">
					<div class="overlay"></div>
					<div class="container">
						<header class="page-header">
							<h2 class="page-title"><?php echo esc_html(ecommerce_plus_custom_header_banner_title()); ?></h2>
						</header>

						<?php ecommerce_plus_add_breadcrumb(); ?>
					</div><!-- .wrapper -->
				</div><!-- #page-site-header -->
			<?php
			//end header image
			endif;
