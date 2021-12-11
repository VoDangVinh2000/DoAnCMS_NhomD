<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

<<<<<<< HEAD
defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');?>
<header class="entry-header ast-no-thumbnail ast-no-meta">

    <h1 class="entry-title-adjust" itemprop="headline">Giỏ hàng</h1>
</header><!-- .entry-header -->

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <?php do_action('woocommerce_before_cart_table');?>

    <table class="shop_table_adjust shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
        <thead>
            <tr>
                <th class="product-remove">&nbsp;</th>
                <th class="product-thumbnail">&nbsp;</th>
                <th class="product-name"><?php esc_html_e('Sản phẩm', 'woocommerce');?></th>
                <th class="product-price"><?php esc_html_e('Giá', 'woocommerce');?></th>
                <th class="product-quantity"><?php esc_html_e('Số lượng', 'woocommerce');?></th>
                <th class="product-subtotal"><?php esc_html_e('Tạm tính', 'woocommerce');?></th>
            </tr>
        </thead>
        <tbody>
            <?php do_action('woocommerce_before_cart_contents');?>

            <?php
foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
        ?>
            <tr
                class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                <td class="product-remove">
                    <?php
echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            'woocommerce_cart_item_remove_link',
            sprintf(
                '<a href="%s" class="remove-adjust" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                esc_url(wc_get_cart_remove_url($cart_item_key)),
                esc_html__('Remove this item', 'woocommerce'),
                esc_attr($product_id),
                esc_attr($_product->get_sku())
            ),
            $cart_item_key
        );
        ?>
                </td>

                <td class="product-thumbnail">
                    <?php
$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

        if (!$product_permalink) {
            echo $thumbnail; // PHPCS: XSS ok.
        } else {
            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
        }
        ?>
                </td>

                <td class="product-name" data-title="<?php esc_attr_e('Sản phẩm', 'woocommerce');?>">
                    <?php
if (!$product_permalink) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
        } else {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
        }

        do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

        // Meta data.
        echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

        // Backorder notification.
        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
        }
        ?>
                </td>

                <td class="product-price" data-title="<?php esc_attr_e('Giá', 'woocommerce');?>">
                    <?php
echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
         ?>
                </td>

                <td class="product-quantity" data-title="<?php esc_attr_e('Số lượng', 'woocommerce');?>">
                    <?php
if ($_product->is_sold_individually()) {
            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
        } else {
            $product_quantity = woocommerce_quantity_input(
                array(
                    'input_name' => "cart[{$cart_item_key}][qty]",
                    'input_value' => $cart_item['quantity'],
                    'max_value' => $_product->get_max_purchase_quantity(),
                    'min_value' => '0',
                    'product_name' => $_product->get_name(),
                ),
                $_product,
                false
            );
        }

        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
        ?>
                </td>

                <td class="product-subtotal" data-title="<?php esc_attr_e('Tạm tính', 'woocommerce');?>">
                    <?php
echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
         ?>
                </td>
            </tr>
            <?php
}
}
?>

            <?php do_action('woocommerce_cart_contents');?>

            <tr>
                <td colspan="6" class="actions">

                    <?php if (wc_coupons_enabled()) {?>
                    <div class="coupon">
                        <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce');?></label> <input
                            type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                            placeholder="<?php esc_attr_e('Mã giảm giá', 'woocommerce');?>" style="float: left;box-sizing: border-box;border: 1px solid #d3ced2;padding: 6px 6px 5px;margin: 0 4px 0 0px;
                            outline: 0;line-height: 1;vertical-align: middle; width: 50%" />
                        <button type="submit" class="button" name="apply_coupon"
                            style="background: #333333; border: 1px; border-radius: 20px;"
                            value="<?php esc_attr_e('Áp dụng', 'woocommerce');?>"><?php esc_attr_e('Áp dụng', 'woocommerce');?></button>
                        <?php do_action('woocommerce_cart_coupon');?>
                    </div>
                    <?php }?>

                    <button type="submit" class="button" name="update_cart"
                        value="<?php esc_attr_e('Cập nhật giỏ hàng', 'woocommerce');?>" style="
                        background: black!important;
                        border: 1px;
                        border-radius: 20px;">
                        <?php esc_html_e('Cập nhật giỏ hàng', 'woocommerce');?></button>

                    <?php do_action('woocommerce_cart_actions');?>

                    <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce');?>
                </td>
            </tr>

            <?php do_action('woocommerce_after_cart_contents');?>
        </tbody>
    </table>
    <?php do_action('woocommerce_after_cart_table');?>
=======
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
>>>>>>> NhomD-Vĩnh/Middle_HomePage
</form>

<?php do_action('woocommerce_before_cart_collaterals');?>

<div class=" cart-collaterals">
    <!-- <div class="cross-sells-adjust">
        <h2>Bạn có thể thích…</h2>

        <ul class="products columns-2">


            <li
                class="ast-article-single product type-product post-3360 status-publish first instock product_cat-no-variation product_cat-phu-kien-1 product_cat-phu-kien-iphone-chinh-hang product_cat-phu-kien-ipad has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                <div class="astra-shop-thumbnail-wrap">
                    <span class="onsale">Giảm giá!</span>
                    <a href="https://shopdunk.com/cu-sac-nhanh-apple-iphone-20w-type-c/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="500"
                            height="500" src="https://shopdunk.com/wp-content/uploads/2021/08/củ111.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail inwp-attachment-image"
                            alt="củ111" loading="lazy"
                            srcset="https://shopdunk.com/wp-content/uploads/2021/08/củ111.png 500w, https://shopdunk.com/wp-content/uploads/2021/08/củ111-300x300.png 300w, https://shopdunk.com/wp-content/uploads/2021/08/củ111-150x150.png?crop=1 150w, https://shopdunk.com/wp-content/uploads/2021/08/củ111-400x400.png?crop=1 400w, https://shopdunk.com/wp-content/uploads/2021/08/củ111-200x200.png?crop=1 200w"
                            sizes="(max-width: 500px) 100vw, 500px" data-attachment-id="10590"
                            data-permalink="https://shopdunk.com/?attachment_id=10590"
                            data-orig-file="https://shopdunk.com/wp-content/uploads/2021/08/củ111.png"
                            data-orig-size="500,500" data-comments-opened="1"
                            data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}"
                            data-image-title="củ111" data-image-description="" data-image-caption=""
                            data-medium-file="https://shopdunk.com/wp-content/uploads/2021/08/củ111-300x300.png"
                            data-large-file="https://shopdunk.com/wp-content/uploads/2021/08/củ111.png"
                            title="Giỏ hàng 2"></a>
                </div>
                <div class="astra-shop-summary-wrap"><a
                        href="https://shopdunk.com/cu-sac-nhanh-apple-iphone-20w-type-c/"
                        class="ast-loop-product__link">
                        <h2 class="woocommerce-loop-product__title">Củ sạc nhanh Apple iPhone 20W Type-C – Hàng chính
                            hãng Việt Nam</h2>
                    </a>
                    <span class="price"><del aria-hidden="true"><span
                                class="woocommerce-Price-amount amount"><bdi>690.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del> <ins><span
                                class="woocommerce-Price-amount amount"><bdi>495.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></span>
                    <a data-cart-url="https://shopdunk.com/cart/" data-isredirect="no" data-quantity="1"
                        class="button product_type_simple add_to_cart_button wcmlim_ajax_add_to_cart"
                        data-product_id="3360" data-product_sku=""
                        aria-label="Add “Củ sạc nhanh Apple iPhone 20W Type-C - Hàng chính hãng Việt Nam” to your cart"
                        data-selected_location="Hồ Chí Minh" data-location_key="1" data-location_qty="0"
                        data-location_termid="1880" data-product_price="495000" data-location_sale_price=""
                        data-location_regular_price="" data-product_backorder="" rel="nofollow">Thêm vào giỏ hàng</a>
                </div>
            </li>


            <li
                class="ast-article-single product type-product post-19735 status-publish last instock product_cat-airpods-1 product_cat-no-variation has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                <div class="astra-shop-thumbnail-wrap">
                    <span class="onsale">Giảm giá!</span>
                    <a href="https://shopdunk.com/airpods-gen-3/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="800"
                            height="800"
                            src="https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail inwp-attachment-image"
                            alt="AirPods 3rd Gen Hero 2" loading="lazy"
                            srcset="https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2.png 800w, https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-300x300.png 300w, https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-150x150.png?crop=1 150w, https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-768x768.png 768w, https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-400x400.png?crop=1 400w, https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-200x200.png?crop=1 200w"
                            sizes="(max-width: 800px) 100vw, 800px" data-attachment-id="19832"
                            data-permalink="https://shopdunk.com/?attachment_id=19832"
                            data-orig-file="https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2.png"
                            data-orig-size="800,800" data-comments-opened="1"
                            data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}"
                            data-image-title="AirPods_3rd-Gen_Hero-2" data-image-description="" data-image-caption=""
                            data-medium-file="https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2-300x300.png"
                            data-large-file="https://shopdunk.com/wp-content/uploads/2021/10/AirPods_3rd-Gen_Hero-2.png"
                            title="Giỏ hàng 3"></a>
                </div>
                <div class="astra-shop-summary-wrap"><a href="https://shopdunk.com/airpods-gen-3/"
                        class="ast-loop-product__link">
                        <h2 class="woocommerce-loop-product__title">AirPods (gen 3)</h2>
                    </a>
                    <span class="price"><del aria-hidden="true"><span
                                class="woocommerce-Price-amount amount"><bdi>5.990.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del> <ins><span
                                class="woocommerce-Price-amount amount"><bdi>4.990.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></span>
                    <a data-cart-url="https://shopdunk.com/cart/" data-isredirect="no" data-quantity="1"
                        class="button product_type_simple add_to_cart_button wcmlim_ajax_add_to_cart"
                        data-product_id="19735" data-product_sku="" aria-label="Add “AirPods (gen 3)” to your cart"
                        data-selected_location="Hồ Chí Minh" data-location_key="1" data-location_qty="997"
                        data-location_termid="1880" data-product_price="4990000" data-location_sale_price=""
                        data-location_regular_price="4990000" data-product_backorder="" rel="nofollow">Thêm vào giỏ
                        hàng</a>
                </div>
            </li>


            <li
                class="ast-article-single product type-product post-17395 status-publish first instock product_cat-phu-kien-cao-cap product_cat-no-variation has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                <div class="astra-shop-thumbnail-wrap">
                    <span class="onsale">Giảm giá!</span>
                    <a href="https://shopdunk.com/kinh-cuong-luc-kingbull-iphone-13-l-13-pro/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="500"
                            height="500"
                            src="https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull.jpg"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail inwp-attachment-image"
                            alt="kinh cuong luc kingbull" loading="lazy"
                            srcset="https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull.jpg 500w, https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull-300x300.jpg 300w, https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull-150x150.jpg?crop=1 150w, https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull-400x400.jpg?crop=1 400w, https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull-200x200.jpg?crop=1 200w"
                            sizes="(max-width: 500px) 100vw, 500px" data-attachment-id="17393"
                            data-permalink="https://shopdunk.com/?attachment_id=17393"
                            data-orig-file="https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull.jpg"
                            data-orig-size="500,500" data-comments-opened="1"
                            data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}"
                            data-image-title="kính cường lực kingbull" data-image-description="" data-image-caption=""
                            data-medium-file="https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull-300x300.jpg"
                            data-large-file="https://shopdunk.com/wp-content/uploads/2021/09/kinh-cuong-luc-kingbull.jpg"
                            title="Giỏ hàng 4"></a>
                </div>
                <div class="astra-shop-summary-wrap"><a
                        href="https://shopdunk.com/kinh-cuong-luc-kingbull-iphone-13-l-13-pro/"
                        class="ast-loop-product__link">
                        <h2 class="woocommerce-loop-product__title">Kính cường lực Kingbull iPhone 13 l 13 Pro</h2>
                    </a>
                    <span class="price"><del aria-hidden="true"><span
                                class="woocommerce-Price-amount amount"><bdi>460.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del> <ins><span
                                class="woocommerce-Price-amount amount"><bdi>360.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></span>
                    <a data-cart-url="https://shopdunk.com/cart/" data-isredirect="no" data-quantity="1"
                        class="button product_type_simple add_to_cart_button wcmlim_ajax_add_to_cart"
                        data-product_id="17395" data-product_sku=""
                        aria-label="Add “Kính cường lực Kingbull iPhone 13 l 13 Pro” to your cart"
                        data-selected_location="Hồ Chí Minh" data-location_key="1" data-location_qty="0"
                        data-location_termid="1880" data-product_price="360000" data-location_sale_price=""
                        data-location_regular_price="" data-product_backorder="" rel="nofollow">Thêm vào giỏ hàng</a>
                </div>
            </li>


            <li
                class="ast-article-single product type-product post-17375 status-publish last instock product_cat-phu-kien-cao-cap product_cat-no-variation has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                <div class="astra-shop-thumbnail-wrap">
                    <span class="onsale">Giảm giá!</span>
                    <a href="https://shopdunk.com/op-lung-trong-suot-mipow-iphone-13-pro-l-13-pro-max/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="500"
                            height="500"
                            src="https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk.jpg"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail inwp-attachment-image"
                            alt="op lung iphone 13 shopdunk" loading="lazy"
                            srcset="https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk.jpg 500w, https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk-300x300.jpg 300w, https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk-150x150.jpg?crop=1 150w, https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk-400x400.jpg?crop=1 400w, https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk-200x200.jpg?crop=1 200w"
                            sizes="(max-width: 500px) 100vw, 500px" data-attachment-id="17376"
                            data-permalink="https://shopdunk.com/?attachment_id=17376"
                            data-orig-file="https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk.jpg"
                            data-orig-size="500,500" data-comments-opened="1"
                            data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}"
                            data-image-title="ốp lưng iphone 13- shopdunk" data-image-description=""
                            data-image-caption=""
                            data-medium-file="https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk-300x300.jpg"
                            data-large-file="https://shopdunk.com/wp-content/uploads/2021/09/op-lung-iphone-13-shopdunk.jpg"
                            title="Giỏ hàng 5"></a>
                </div>
                <div class="astra-shop-summary-wrap"><a
                        href="https://shopdunk.com/op-lung-trong-suot-mipow-iphone-13-pro-l-13-pro-max/"
                        class="ast-loop-product__link">
                        <h2 class="woocommerce-loop-product__title">Ốp lưng trong suốt Mipow iPhone 13 Pro</h2>
                    </a>
                    <span class="price"><del aria-hidden="true"><span
                                class="woocommerce-Price-amount amount"><bdi>529.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del> <ins><span
                                class="woocommerce-Price-amount amount"><bdi>329.000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></span>
                    <a data-cart-url="https://shopdunk.com/cart/" data-isredirect="no" data-quantity="1"
                        class="button product_type_simple add_to_cart_button wcmlim_ajax_add_to_cart"
                        data-product_id="17375" data-product_sku=""
                        aria-label="Add “Ốp lưng trong suốt Mipow iPhone 13 Pro” to your cart"
                        data-selected_location="Hồ Chí Minh" data-location_key="1" data-location_qty="0"
                        data-location_termid="1880" data-product_price="329000" data-location_sale_price=""
                        data-location_regular_price="" data-product_backorder="" rel="nofollow">Thêm vào giỏ hàng</a>
                </div>
            </li>


        </ul>

    </div> -->
    <?php
/**
 * Cart collaterals hook.
 *
 * @hooked woocommerce_cross_sell_display
 * @hooked woocommerce_cart_totals - 10
 */
do_action('woocommerce_cart_collaterals');
?>
</div>

<?php do_action('woocommerce_after_cart');?>