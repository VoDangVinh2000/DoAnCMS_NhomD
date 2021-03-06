<?php
/**
 * The template for displaying WooCommerce pages.
 * @package ceylonthemes
 * @subpackage eCommerce Plus
 * @since 1.0.0
 */

get_header();
?>
<div id="inner-content-wrapper" class="container page-section">
	<!-- =================== Nếu là trang deatail======================= -->
	<?php if(is_singular( 'product' )){?>
    	<div id="primary" class='content-area product__detail'>
	<?php } else if(is_search()) {?>
		<div id="primary" class='content-area'>
	<?php } else {?>
		<div id="primary" class='content-area page-category-style'>
	<?php }?>
	<!-- ========================================== -->
        <main id="main" class="site-main" role="main">
			
			<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>	
				<div><?php woocommerce_breadcrumb(); ?></div>
			<?php endif; ?>		
				
			<?php woocommerce_content(); ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	if ( is_active_sidebar( 'sidebar-woocommerce' )) {
		get_template_part('sidebar', 'woocommerce');
	} ?>
</div><!-- .page-section -->
<?php
get_footer();
