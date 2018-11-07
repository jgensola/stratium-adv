<?php

//Custom text block shortcode


if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/heading/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'        => __( 'Headings', 'js_composer' ),
			'base'        => 'pao_headings',
			'description' => __( 'Section with text button (with paddings)', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Style', 'js_composer' ),
                    'description' => __( 'Please select main style', 'js_composer' ),
                    'param_name' => 'style',
                    'value'      => array(
                        array(
                            'value' => 'style1',
                            'label' => esc_html__( 'Text left align with button', 'js_composer' ),
                            'image' => $url . 'style1.jpg'
                        ),
                        array(
                            'value' => 'style2',
                            'label' => esc_html__( 'Text center align', 'js_composer' ),
                            'image' => $url . 'style2.jpg'
                        ),
                        array(
                            'value' => 'style',
                            'label' => esc_html__( 'Simple heading', 'js_composer' ),
                            'image' => $url . 'style.jpg'
                        ),
                        array(
                            'value' => 'modern',
                            'label' => esc_html__( 'Modern heading', 'js_composer' ),
                            'image' => $url . 'modern.jpg'
                        ),
                        array(
                            'value' => 'head_bg',
                            'label' => esc_html__( 'Heading with background text', 'js_composer' ),
                            'image' => $url . 'head-bg.jpg'
                        ),
                    )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Background title', 'js_composer' ),
                    'description' => __( 'Please add background title', 'js_composer' ),
					'param_name' => 'bg_title',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'head_bg' ) )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Subtitle', 'js_composer' ),
                    'description' => __( 'Please add subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'style2', 'style', 'modern', 'head_bg' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading"    => __( "Subtitle color", "js_composer" ),
                    'description' => __( 'Please select subtitle color', 'js_composer' ),
					"param_name" => "subtitle_color",
					"value"      => '', //Default color
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'style2', 'style', 'modern', 'head_bg' ) )
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
					'description' => __( "If you want to add the word which will be marked by main color, please insert it in &#60;i&#62; tag, for example: &#60;i&#62;Hello&#60;/i&#62;", 'js_composer' ),
				),
				array(
					"type"       => "colorpicker",
					"heading"    => __( "Title color", "js_composer" ),
                    'description' => __( 'Please select title color', 'js_composer' ),
					"param_name" => "title_color",
					"value"      => '', //Default color
				),
                array(
                    'type'       => 'textarea',
                    'heading'    => __( 'Text', 'js_composer' ),
                    'param_name' => 'Text',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array('style2' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Animation text', 'js_composer' ),
					'param_name' => 'animation_text',
					'value'      => '',
					'description' => __( "You can write several words without spaces and separate it by the comma.", 'js_composer' ),
					'dependency' => array( 'element' => 'style', 'value' => array( 'style5' ) )
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
                    'description' => __( 'Please specify link for the button', 'js_composer' ),
					'param_name' => 'button',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1' ) )
				),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'description' => __( 'Please select button style', 'js_composer' ),
                    'param_name' => 'btn_style',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1' ) ),
                    'value'      => array(
                        array(
                            'value' => 'a-btn-1',
                            'label' => esc_html__( 'Default button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-1.png'
                        ),
                        array(
                            'value' => 'a-btn-2',
                            'label' => esc_html__( 'Default button with shadow', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-2.png'
                        ),
                        array(
                            'value' => 'a-btn-3',
                            'label' => esc_html__( 'Default transparent button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-3.png'
                        ),
                        array(
                            'value' => 'a-btn-4',
                            'label' => esc_html__( 'Dark button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-4.png'
                        ),
                        array(
                            'value' => 'a-btn-5',
                            'label' => esc_html__( 'Dark button with shadow', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-5.png'
                        ),
                        array(
                            'value' => 'a-btn-6',
                            'label' => esc_html__( 'Dark transparent button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-6.png'
                        ),
                        array(
                            'value' => 'a-btn-7',
                            'label' => esc_html__( 'White button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-7.png'
                        ),
                        array(
                            'value' => 'a-btn-8',
                            'label' => esc_html__( 'White transparent button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-8.png'
                        ),
                        array(
                            'value' => 'a-btn-9',
                            'label' => esc_html__( 'Color button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-9.png'
                        ),
                        array(
                            'value' => 'a-btn-10',
                            'label' => esc_html__( 'Gradient button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-10.png'
                        ),
                    )
                ),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Crumbs links', 'js_composer' ),
                    'description' => __( 'Please specify crumbs link', 'js_composer' ),
					'param_name' => 'links',
					'value'      => '',
					'params'     => array(
						array(
							'type'       => 'vc_link',
							'heading'    => __( 'Link', 'js_composer' ),
							'param_name' => 'link',
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array( 'style3' ) ),
				),
//				array(
//					'type'       => 'checkbox',
//					'heading'    => esc_html__( 'Add animation "wave"?', 'js_composer' ),
//                    'description' => __( 'Enable animation with wave effect', 'js_composer' ),
//					'param_name' => 'animation',
//					'std'        => '',
//					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'style2', 'style3', 'style4' ) ),
//				),
				array(
					'type'       => 'checkbox',
					'heading'    => esc_html__( 'Remove fade-in-up animation on load?', 'js_composer' ),
                    'description' => __( 'Do you want to remove fade-in-up animation?', 'js_composer' ),
					'param_name' => 'animation_fade',
					'std'        => '',
				),
			),

			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pao_headings extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'title'          => '',
				'subtitle_color' => '',
				'title_color'    => '',
				'animation'      => '',
				'subtitle'       => '',
				'bg_title'       => '',
				'animation_fade' => '',
				'animation_text' => '',
				'style'          => '',
				'links'          => '',
				'text'           => '',
				'button'         => '',
				'btn_style'      => 'a-btn-1'

			), $atts ) );

			$style = ! empty( $style ) ? $style : 'style1';

			if ( !in_array( "pao_parallax-fragments", self::$js_scripts ) && !empty( $animation ) ) {
				self::$js_scripts[] = "pao_parallax-fragments";
			}

			if ( !in_array( "pao_typed-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_typed-js";
			}

			if ( !in_array( "pao_headings", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_headings";
			}
			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pao_headings-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_headings-css";
			}
			$this->enqueueCss();

			$animation_text          = isset($animation_text) && ! empty( $animation_text ) ? $animation_text : '';
			$container          = $style == 'style6' ? 'container-fluid' : 'container';
			$heading_wrap_class = isset($animation) && !empty($animation) ? 'anime-wrap' : '';
			$animation_fade = isset($animation_fade) && !empty($animation_fade) ? '' : 'load-fade';
			$wrapClass      = ! empty( $bg_title ) ? "" : 'not-bg-title';
			$wrapClass      .= ' ' . $heading_wrap_class . ' ' . $animation_fade;
			$subtitle_color = ! empty( $subtitle_color ) ? 'style="color:' . $subtitle_color . '" ' : '';
			$title_color    = ! empty( $title_color ) ? 'style="color:' . $title_color . '" ' : '';
			$random = substr( md5( rand() ), 0, 7 );

			// start output
			ob_start(); ?>
            <div class="headings-wrap <?php echo esc_attr( $wrapClass ); ?>">
				<?php if ( !empty( $animation ) ) { ?>
                    <div class="images-wrap" id="scene<?php echo esc_attr($random); ?>">
                        <div class="img-wrap img-wrap-1 layer" data-depth="1.2"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                        <div class="img-wrap img-wrap-2 layer" data-depth="0.85"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                        <div class="img-wrap img-wrap-3 layer" data-depth="1.2"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                        <div class="img-wrap img-wrap-4 layer" data-depth="0.85"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                        <div class="img-wrap img-wrap-5 layer" data-depth="1.2"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                        <div class="img-wrap img-wrap-6 layer" data-depth="0.85"><img src="<?php echo esc_url(EF_URL . '/shortcodes/assets/images/fragments/style-7/01.png'); ?>" alt=""></div>
                    </div>
                    <div class="wrapper-left"></div>
                    <div class="wrapper-right"></div>
				<?php } ?>
                <div class="<?php echo esc_attr($container); ?>">
                    <div class="row">
                        <div class="headings <?php echo esc_attr( $style ); ?>">
                            <?php if($style == 'style1' || $style == 'style2' || $style == 'style3' || $style == 'style4' || $style == 'style' || $style == 'modern' || $style == 'head_bg'){ ?>
                                <div class="content">
                                    <div class="info">
			                            <?php if ( ! empty( $subtitle ) && $style != 'style3') { ?>
                                            <h5 class="subtitle" <?php echo $subtitle_color ?> ><?php echo esc_html( $subtitle ); ?></h5>
			                            <?php }
			                            if ( ! empty( $title ) ) { ?>
                                            <h3 class="title" <?php echo $title_color ?> >
					                            <?php echo wp_kses_post( $title ); ?>
                                            </h3>
			                            <?php } if ( ! empty( $text ) && $style == 'style2' ) { ?>
                                            <div class="text"><?php echo wp_kses_post( $text ); ?></div>
			                            <?php } ?>
                                    </div>
		                            <?php if ( ! empty( $button ) ) {
			                            $url = vc_build_link( $button );
		                            } else {
			                            $url['url']    = '#';
			                            $url['title']  = 'title';
			                            $url['target'] = '_self';
		                            }
		                            $btn_style = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn';

		                            if ( ! empty( $button ) && $style != 'style3') { ?>
                                        <div class="but-wrap">
                                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                               target="<?php echo esc_attr( $url['target'] ); ?>"
                                               class="<?php echo esc_attr( $btn_style ); ?>">
					                            <?php echo esc_html( $url['title'] ); ?>
                                            </a>
                                        </div>
		                            <?php }

		                            if ( ! empty( $links ) && $style == 'style3' ) { ?>
                                        <div class="crumbs">
				                            <?php $links = (array) vc_param_group_parse_atts( $links );

				                            foreach ( $links as $link ) {

					                            if ( ! empty( $link ) ) {

						                            $link = vc_build_link( $link['link'] );
					                            } else {
						                            $link['url']    = '#';
						                            $link['title']  = 'title';
						                            $link['target'] = '_self';
					                            } ?>

                                                <a href="<?php echo esc_attr( $link['url'] ); ?>"
                                                   target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>

				                            <?php } ?>
                                        </div>
		                            <?php } ?>
                                </div>
                            <?php }
                            elseif($style == 'style5') { ?>
                                <div class="content">
                                    <div class="info">
			                            <?php
			                            if ( ! empty( $title ) ) { ?>
                                            <h3 class="title" <?php echo $title_color ?> >
					                            <?php echo wp_kses_post( $title ); ?> <span class="typed" data-words="<?php echo esc_attr($animation_text); ?>"></span>
                                            </h3>
			                            <?php } ?>
                                    </div>
                                </div>
                            <?php }
                            elseif($style == 'style6'){ ?>
                                <div class="content">
                                    <div class="info">
			                            <?php if ( ! empty( $title ) ) { ?>
                                            <h3 class="title" <?php echo $title_color ?>>
					                            <?php echo wp_kses_post( $title ); ?>
                                            </h3>
			                            <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
				<?php if ( ! empty( $bg_title ) && ( $style == 'style1' || $style == 'head_bg' )) { ?>
                    <h3 class="title-bg <?php echo esc_attr( $style ); ?>"><?php echo esc_html( $bg_title ); ?></h3>
				<?php } ?>
            </div>
			<?php // end output

			return ob_get_clean();
		}
	}
}