<?php

//Video shortcode

if ( function_exists( 'vc_map' ) ) {

	vc_map(
		array(
			'name'            => 'Video Button',
			'base'            => 'video_button_shortcode',
            'description' => __( 'Section with video with control button', 'js_composer' ),
			'content_element' => true,
			'params'          => array(
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Video services', 'js_composer' ),
                    'description' => __( 'Please select video service', 'js_composer' ),
					'param_name' => 'services',
					'value'      => array(
						'Youtube' => 'youtube',
						'Vimeo' => 'vimeo',
					)
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Video link', 'js_composer' ),
					'description' => __( 'Insert your video link', 'js_composer' ),
					'param_name' => 'video_link',
					'value'      => '',
					'dependency' => array(
						'element' => 'services',
						'value' => array('youtube','vimeo'),
					)
				),

				array(
					'type'        => 'textfield',
					'heading'     => __( 'Extra class name', 'js_composer' ),
					'param_name'  => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
					'value'       => ''
				),
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' )
				)
			),

			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_video_button_shortcode extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'css'      => '',
				'el_class' => '',
				'video_link' => '',
				'services' => 'youtube',

			), $atts ) );

			// include needed stylesheets

			if ( !in_array( "pao_magnific-popup-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_magnific-popup-css";
			}

			if ( !in_array( "pao_video_btn-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_video_btn-css";
			}
			$this->enqueueCss();


			if ( !in_array( "pao_magnific", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_magnific";
			}
			if ( !in_array( "pao_info_block", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_info_block";
			}
			$this->enqueueJs();



			$class = ( ! empty( $el_class ) ) ? $el_class : '';
			$class .= vc_shortcode_custom_css_class( $css, ' ' );

			ob_start(); ?>

			<div class="<?php echo esc_attr( $class ); ?>">
				<div class="video only-button <?php echo esc_attr( $services ); ?>" data-type-start="click" >
					<div class="video-content">
						<?php if(!empty($video_link)){ ?>
                            <a href="<?php echo esc_url($video_link); ?>" class="play"></a>
						<?php } ?>
					</div>
					<span class="close fa fa-close"></span>
				</div>
			</div>

			<?php
			return ob_get_clean();
		}
	}
}