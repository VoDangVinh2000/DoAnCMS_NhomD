<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ceylonthemes
 * @subpackage eCommerce Plus
 * @since 1.0.0
 */

get_header();
?>
<div class="main-home-page">
	<div class="category py-4"  
	data-aos-anchor-placement="top-center" 
	data-aos="fade-up" data-aos-offset="0" 
	data-aos-delay="35" data-aos-duration="1000" 
	data-aos-easing="ease-in-out" 
	data-aos-mirror="true" 
	data-aos-once="false">
		<div class="row">
			<?php
			$category = get_categories(array(
				'orderby' => 'name',
				'hide_empty' => 0,
				'taxonomy' => 'product_cat'
			));
			foreach ($category as $categories) {
				$thumbnail_id = get_term_meta($categories->term_id, 'thumbnail_id', true);
				$image = wp_get_attachment_url($thumbnail_id);
			?>
				<div class="col-sm-4">
					<div class="category-inside">
						<div class="category-image">
							<div class="inside-category-image">
								<a href="<?= get_category_link($categories->term_id) ?>">
									<img src="<?= $image ?>" alt="<?= $categories->slug ?>">
								</a>
							</div>

						</div>
						<div class="category-name">
							<a href="<?= get_category_link($categories->term_id) ?>">
								<h3><?= $categories->name ?></h3>
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="feature-product" 
	data-aos-anchor-placement="top-center" 
	data-aos="fade-up" data-aos-offset="0" 
	data-aos-delay="35" 
	data-aos-duration="1000" 
	data-aos-easing="ease-in-out" 
	data-aos-mirror="true" data-aos-once="false">
		<h1 class="text-center">Feature Products</h1>
		<div class="row">
			<?php
			$feature_products = wc_get_products(array('featured' => true));
			?>
			<?php foreach ($feature_products as $index => $item) {
				$id_feature_products = wc_get_featured_product_ids($item);
				$images = wp_get_attachment_image_src(get_post_thumbnail_id($id_feature_products[$index]), 'single-post-thumbnail');
			?>
				<div class="col-sm-4">
					<div class="feature-product-inside">
						<div class="feature-product-image">
							<div class="inside-feature-product-image">
								<a href="<?= $item->get_permalink() ?>">
									<img src="<?= $images[0] ?>" alt="<?= $item->name ?>">
								</a>
							</div>
						</div>
						<div class="feature-product-name">
							<h3><?= $item->name ?></h3>
						</div>
						<div class="feature-product-price">
							<p class="text-muted"> Giá từ: <?= wc_admin_number_format($item->get_price()) . 'đ' ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<!-- New products  !-->
	<?php
	echo  strip_shortcodes(do_shortcode('[recent_products per_page="3" order="desc"]'));
	?>
</div>
<?php
get_footer();
