<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



?>
<?php 
if(!is_single()){

?>
<div class="new-products" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-offset="0" data-aos-delay="35" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
		<h1 class="text-center">New Products</h1>
		<div class="row">	
<?php } else{?>
	<ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
<?php }?>
