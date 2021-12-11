<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if ($related_products) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters('woocommerce_product_related_products_heading', __('Related products', 'woocommerce'));

		if ($heading) :
		?>
			<h2><?php echo esc_html($heading); ?></h2>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>

		<?php foreach ($related_products as $related_product) : ?>

			<?php
			$post_object = get_post($related_product->get_id());

			setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

			wc_get_template_part('content', 'product');
			?>

		<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
	/* ================================== Recently Viewed procts ================================================ */
	// ================================ Thêm code sản phẩm vừa xem  =========================================== //
	global $woocommerce;
	$viewed_products = !empty($_COOKIE['woocommerce_recently_viewed']) ? (array) explode('|', $_COOKIE['woocommerce_recently_viewed']) : array();
	$viewed_products = array_filter(array_map('absint', $viewed_products));
	?>
	<div class="recently-viewed">
		<?php
		$query_args = array(
			'posts_per_page' => 4, // Hiển thị số lượng sản phẩm đã xem
			'post_status'    => 'publish',
			'post_type'      => 'product',
			'post__in'       => $viewed_products,
			'orderby'        => 'rand'
		);
		$query_args['meta_query'] = array();
		$query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
		$r = new WP_Query($query_args);

		if ($r->have_posts()) {
		?>
			<div class="giniit-title">
				<h2>Recently viewed product</h2>
			</div>
		<?php
			while ($r->have_posts()) {
				$r->the_post();
				get_template_part('template-parts/content', get_post_type()); // Giao diện hiển thị theo ý bạn muốn
			}
		};
		wp_reset_postdata();
		?>
	</div>

	<!-- ================================================================================================= -->
<?php
endif;

wp_reset_postdata();
