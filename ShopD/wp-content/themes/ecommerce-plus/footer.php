<?php
/**
 * @package ceylonthemes
 * @subpackage eCommerce Plus
 * @since 1.0.0
 */
    $options = ecommerce_plus_get_theme_options();
	$copyright_text = $options['copyright_text'];

?>
</div><!-- #content -->
	
<footer id="colophon" class="site-footer" role="contentinfo" style="background-color:<?php echo esc_attr($options['footer_bg_color']); ?>;background-image:url('<?php echo esc_attr($options['footer_image']); ?>')" >

	<div class="container">
		<div class="row">
			<?php require get_template_directory() . '/inc/footer-widgets.php' ;?>		
		</div>		
	</div>



<?php wp_footer(); ?>

</body>
</html>
