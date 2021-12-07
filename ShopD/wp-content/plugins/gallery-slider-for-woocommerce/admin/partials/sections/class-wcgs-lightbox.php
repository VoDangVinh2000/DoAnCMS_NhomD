<?php
/**
 * The gallery tab functionality of this plugin.
 *
 * Defines the sections of gallery tab.
 *
 * @package    Woo_Gallery_Slider
 * @subpackage Woo_Gallery_Slider/admin
 * @author     Shapedplugin <support@shapedplugin.com>
 */

/**
 * WCGS Lightbox class
 */
class WCGS_Lightbox {
	/**
	 * Specify the Gallery tab for the Woo Gallery Slider.
	 *
	 * @since    1.0.0
	 * @param string $prefix Define prefix wcgs_settings.
	 */
	public static function section( $prefix ) {
		WCGS::createSection(
			$prefix,
			array(
				'name'   => 'lightbox',
				'title'  => '<svg height="14px" width="14px" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#555" d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg>' . esc_html__( 'Lightbox', 'woo-gallery-slider' ),
				'fields' => array(
					array(
						'id'         => 'lightbox',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Enable Lightbox', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Enable/Disable lightbox.', 'woo-gallery-slider' ),
						'text_on'    => __( 'Enabled', 'woo-gallery-slider' ),
						'text_off'   => __( 'Disabled', 'woo-gallery-slider' ),
						'text_width' => 96,
						'default'    => true,
					),
					array(
						'id'         => 'lightbox_sliding_effect',
						'type'       => 'select',
						'title'      => esc_html__( 'Lightbox Sliding Effect', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Select lightbox sliding effect.', 'woo-gallery-slider' ),
						'options'    => array(
							'slide'    => esc_html__( 'Slide', 'woo-gallery-slider' ),
							'fade'     => esc_html__( 'Fade (Pro)', 'woo-gallery-slider' ),
							'rotate'   => esc_html__( 'Rotate (Pro)', 'woo-gallery-slider' ),
							'circular' => esc_html__( 'Circular (Pro)', 'woo-gallery-slider' ),
							'tube'     => esc_html__( 'Tube (Pro)', 'woo-gallery-slider' ),
						),
						'default'    => 'slide',
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'lightbox_icon_position',
						'type'       => 'select',
						'title'      => esc_html__( 'Lightbox Icon Display Position', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Select lightbox icon position on the slider.', 'woo-gallery-slider' ),
						'options'    => array(
							'top_right'    => esc_html__( 'Top Right', 'woo-gallery-slider' ),
							'top_left'     => esc_html__( 'Top Left (Pro)', 'woo-gallery-slider' ),
							'bottom_right' => esc_html__( 'Bottom Right (Pro)', 'woo-gallery-slider' ),
							'bottom_left'  => esc_html__( 'Bottom Left (Pro)', 'woo-gallery-slider' ),
							'middle'       => esc_html__( 'Middle (Pro)', 'woo-gallery-slider' ),
						),
						'default'    => 'top_right',
						'dependency' => array( 'lightbox', '==', true ),
					),

					array(
						'id'         => 'lightbox_icon',
						'type'       => 'button_set',
						'class'      => 'btn_icon',
						'title'      => esc_html__( 'Lightbox Icon Style', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Choose a lightbox icon style.', 'woo-gallery-slider' ),
						'options'    => array(
							'search'      => array(
								'option_name' => '<i class="fa fa-search"></i>',
							),
							'search-plus' => array(
								'option_name' => '<i class="fa fa-search-plus"></i>',
								'pro_only'    => true,
							),
							'eye'         => array(
								'option_name' => '<i class="fa fa-eye"></i>',
								'pro_only'    => true,
							),
							'plus'        => array(
								'option_name' => '<i class="fa fa-plus"></i>',
								'pro_only'    => true,
							),
							'info'        => array(
								'option_name' => '<i class="fa fa-info"></i>',
								'pro_only'    => true,
							),
							'angle-right' => array(
								'option_name' => '<i class="fa fa-angle-right"></i>',
								'pro_only'    => true,
							),
							'expand'      => array(
								'option_name' => '<i class="fa fa-expand"></i>',
								'pro_only'    => true,
							),
							'arrows-alt'  => array(
								'option_name' => '<i class="fa fa-arrows-alt"></i>',
								'pro_only'    => true,
							),
						),
						'default'    => 'search',
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'          => 'lightbox_icon_size',
						'class'       => 'pro_only_field',
						'type'        => 'spinner',
						'title'       => esc_html__( 'Lightbox Icon Size', 'woo-gallery-slider' ),
						'subtitle'    => esc_html__( 'Set lightbox icon size.', 'woo-gallery-slider' ),
						'dependency'  => array( 'lightbox', '==', true ),
						'placeholder' => 13,
						'default'     => 13,
					),
					array(
						'id'         => 'lightbox_icon_color_group',
						'type'       => 'color_group',
						'title'      => esc_html__( 'Lightbox Icon Color', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Set lightbox icon colors.', 'woo-gallery-slider' ),
						'options'    => array(
							'color'          => esc_html__( 'Color', 'woo-gallery-slider' ),
							'hover_color'    => esc_html__( 'Hover Color', 'woo-gallery-slider' ),
							'bg_color'       => esc_html__( 'Background', 'woo-gallery-slider' ),
							'hover_bg_color' => esc_html__( 'Hover Background', 'woo-gallery-slider' ),
						),
						'default'    => array(
							'color'          => '#fff',
							'hover_color'    => '#fff',
							'bg_color'       => 'rgba(0, 0, 0, 0.5)',
							'hover_bg_color' => 'rgba(0, 0, 0, 0.8)',
						),
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'lightbox_caption',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Lightbox Caption', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show caption in lightbox.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => true,
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'caption_color',
						'type'       => 'color',
						'title'      => esc_html__( 'Caption Color', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Change caption color.', 'woo-gallery-slider' ),
						'default'    => '#ffffff',
						'dependency' => array( 'lightbox|lightbox_caption', '==|==', 'true|true' ),
					),
					array(
						'id'         => 'l_img_counter',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Image Counter', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show lightbox image counter.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => true,
						'dependency' => array( 'lightbox', '==', true ),
					),

					array(
						'id'         => 'slide_play_btn',
						'type'       => 'switcher',
						'class'      => 'pro_switcher',
						'title'      => esc_html__( 'Slideshow Play Button', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show/Hide start slideshow play button.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'side_gallery_btn',
						'class'      => 'pro_switcher',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Thumbnails Side Gallery', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show/Hide thumbnails side gallery button  .', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'thumb_gallery_show',
						'type'       => 'checkbox',
						'class'      => 'pro_checkbox',
						'title'      => esc_html__( 'Thumbnails Side Gallery Visibility', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Check to show thumbnails right side gallery (Pro).', 'woo-gallery-slider' ),
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),

					array(
						'id'         => 'gallery_share',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Social Share Button', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show/Hide social share button.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'gallery_fs_btn',
						'type'       => 'switcher',
						'title'      => esc_html__( 'Full Screen Button', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show/Hide image full screen button.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),
					array(
						'id'         => 'gallery_dl_btn',
						'type'       => 'switcher',
						'class'      => 'pro_switcher',
						'title'      => esc_html__( 'Download Button', 'woo-gallery-slider' ),
						'subtitle'   => esc_html__( 'Show/Hide product gallery image download button.', 'woo-gallery-slider' ),
						'text_on'    => esc_html__( 'Show', 'woo-gallery-slider' ),
						'text_off'   => esc_html__( 'Hide', 'woo-gallery-slider' ),
						'text_width' => 80,
						'default'    => false,
						'dependency' => array( 'lightbox', '==', true ),
					),
				),
			)
		);
	}
}
