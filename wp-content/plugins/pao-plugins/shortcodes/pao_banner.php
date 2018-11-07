<?php

//Image banner shortcode

if ( function_exists( 'vc_map' ) ) {
	$url = EF_URL . '/admin/assets/images/shortcodes_images/banner/';
	$url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'        => __( 'Image banner', 'js_composer' ),
			'base'        => 'pao_banner',
			'description' => __( 'Image banner with text and button', 'js_composer' ),
			'category'    => __( 'Media', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'select_preview',
					'heading'    => __( 'Style Banner', 'js_composer' ),
                    'description' => __( 'Please select main style for banner', 'js_composer' ),
					'param_name' => 'style_banner',
					'value'      => array(
						array(
							'value' => 'simple',
							'label' => esc_html__( 'Simple', 'js_composer' ),
							'image' => $url . 'simple.jpg'
						),
                        array(
                            'value' => 'simple_leaf',
                            'label' => esc_html__( 'Simple with leaf animation', 'js_composer' ),
                            'image' => $url . 'simple_leaf.jpg'
                        ),
						array(
							'value' => 'parallax',
							'label' => esc_html__( 'Parallax', 'js_composer' ),
							'image' => $url . 'parallax.jpg'
						),
                        array(
                            'value' => 'modern',
                            'label' => esc_html__( 'Modern', 'js_composer' ),
                            'image' => $url . 'modern.jpg'
                        ),
                        array(
                            'value' => 'simple-image',
                            'label' => esc_html__( 'Simple image', 'js_composer' ),
                            'image' => $url . 'banner-4.jpg'
                        ),
                        array(
                            'value' => 'modern-image',
                            'label' => esc_html__( 'Modern with image section', 'js_composer' ),
                            'image' => $url . 'modern-image.jpg'
                        ),
					)
				),
				array(
					'type'        => 'param_group',
					'heading'     => __( 'Items', 'js_composer' ),
					'param_name'  => 'items',
					'description' => __( 'Image with title', 'js_composer' ),
					'value'       => '',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => __( 'Title', 'js_composer' ),
							'param_name'  => 'title',
							'description' => __( 'Add title for your image.', 'js_composer' ),
						),
						array(
							'type'       => 'attach_image',
							'description' => __( 'Please add your image', 'js_composer' ),
							'heading'    => __( 'Background image', 'js_composer' ),
							'param_name' => 'image',
						),
					),
					'dependency'  => array( 'element' => 'style_banner', 'value' => array( 'parallax' ) ),
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Height Banner', 'js_composer' ),
                    'description' => __( 'Please specify the height of the banner', 'js_composer' ),
					'param_name' => 'height',
					'value'      => array(
						'Small'   => 'small_banner',
						'Medium' => 'medium_banner',
						'Full height'  => 'full',
					),
                    'dependency' => array('element' => 'style_banner', 'value'   => array('simple', 'modern', 'simple_leaf', 'modern-image') )
				),
                array(
                    'type'       => 'textarea',
                    'description' => __( 'Please add text your title', 'js_composer' ),
                    'heading'    => __( 'Title', 'js_composer' ),
                    'param_name' => 'title',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'modern', 'simple-image', 'simple_leaf', 'modern-image' ) )
                ),
                array(
                    'type'       => 'textarea',
                    'description' => __( 'Please add text your description', 'js_composer' ),
                    'heading'    => __( 'Description', 'js_composer' ),
                    'param_name' => 'desc',
                    'dependency' => array( 'element' => 'style_banner', 'value'   => array ( 'simple_leaf', 'modern-image' ) )
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Button', 'js_composer' ),
                    'description' => __( 'Please add link & name for your button', 'js_composer' ),
                    'param_name' => 'button',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'modern', 'simple_leaf', 'modern-image' ) )
                ),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'description' => __( 'Please select style of your button', 'js_composer' ),
                    'param_name' => 'btn_style',
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
                    ),
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'modern', 'simple_leaf', 'modern-image' ) )
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Additional button', 'js_composer' ),
                    'description' => __( 'Please add link & name for your button', 'js_composer' ),
                    'param_name' => 'button_add',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple' ) )
                ),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Additional button style', 'js_composer' ),
                    'description' => __( 'Please select style of your button', 'js_composer' ),
                    'param_name' => 'btn_style_add',
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
                    ),
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple' ) )
                ),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Text align', 'js_composer' ),
                    'description' => __( 'Please select text alignment', 'js_composer' ),
					'param_name' => 'style',
					'value'      => array(
						'Left content'   => 'left_content',
						'Center content' => 'center_content',
						'Right content'  => 'right_content',
					),
					'dependency' => array('element' => 'style_banner', 'value'   => array ( 'modern', 'modern-image' ) )
				),
				array(
					'type'       => 'textfield',
                    'description' => __( 'Please add text your subtitle', 'js_composer' ),
					'heading'    => __( 'Subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
					'dependency' => array('element' => 'style_banner', 'value'   => array ( 'modern', 'modern-image' ) )
				),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Enable border?', 'js_composer' ),
                    'description' => __( 'Enable border for this banner', 'js_composer' ),
                    'param_name' => 'border',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple' ) )
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Enable button for scroll to next section?', 'js_composer' ),
                    'description' => __( 'Enable button for this banner', 'js_composer' ),
                    'param_name' => 'icon',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'modern', 'simple_leaf', 'modern-image' ) )
                ),
                array(
                    'type'       => 'checkbox',
                    'heading'    => __( 'Enable animation?', 'js_composer' ),
                    'description' => __( 'Enable animation for this banner', 'js_composer' ),
                    'param_name' => 'animation',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'simple-image', 'simple_leaf' ) )
                ),
				array(
					'type'       => 'attach_image',
                    'description' => __( 'Please add your image', 'js_composer' ),
					'heading'    => __( 'Background image', 'js_composer' ),
					'param_name' => 'image',
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple', 'modern', 'simple-image', 'simple_leaf', 'modern-image' ) )
				),
				array(
					'type'       => 'attach_image',
                    'description' => __( 'Please add your image', 'js_composer' ),
					'heading'    => __( 'Simple image', 'js_composer' ),
					'param_name' => 'simple_image',
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple-image', 'simple_leaf' ) )
				),
				array(
					'type'       => 'colorpicker',
                    'description' => __( 'Please select background color', 'js_composer' ),
					'heading'    => __( 'Background color', 'js_composer' ),
					'param_name' => 'bg_color',
					'dependency' => array( 'element' => 'style_banner', 'value' => array( 'simple-image' ) )
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Show overlay?', 'js_composer' ),
                    'description' => __( 'Enable overlay for this banner', 'js_composer' ),
					'param_name' => 'overlay',
					'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
					'dependency' => array('element' => 'style_banner', 'value'   => 'simple', 'modern' )
				),
			),
			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pao_banner extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'style_banner'   => 'simple',
				'animation'   => '',
				'border'   => '',
				'style'   => '',
				'title'   => '',
				'subtitle'   => '',
				'desc'   => '',
				'bg_color'   => '',
				'items'   => array(),
				'image'   => '',
				'simple_image'   => '',
				'height'  => 'small_banner',
				'overlay' => '',
				'button' => '',
				'btn_style' => 'a-btn-1',
				'button_add' => '',
				'btn_style_add' => 'a-btn-1',
				'icon' => '',

			), $atts ) );

			// include needed stylesheets
			if ( !in_array( "pao_banner_image-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_banner_image-css";
			}
			$this->enqueueCss();

			if ( !in_array( "pao_parallax-fragments", self::$js_scripts ) && $animation) {
				self::$js_scripts[] = "pao_parallax-fragments";
			}

			if ( !in_array( "pao_banner_slider", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_banner_slider";
			}
			$this->enqueueJs();


            if ($style_banner == 'simple-image') {
                $bg_color = ( isset( $bg_color ) && !empty( $bg_color ) ) ? $bg_color : '#d82323';
                $bg_color = 'style="background-color:' . esc_attr($bg_color) . '"';
                $height = 'full';
            } else {
                $bg_color = '';
            }

			if ( $height == 'full' ) {
				$banner_height = 'full-height-window';
			}else{
				$banner_height = $height;
            }

			if ( $border) {
				$banner_height .= ' with-border';
            }

			if ( $animation) {
				$banner_height .= ' style1';
            }

			$image = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
			$simple_image = ( ! empty( $simple_image ) && is_numeric( $simple_image ) ) ? wp_get_attachment_url( $simple_image ) : '';



            if ( ! empty( $style ) ) {
				$banner_height .= ' ' . $style;
			}
			if ( ! empty( $style_banner ) ) {
				$banner_height .= ' ' . $style_banner;
			}

			$class = ($style == 'center_content') ? 'col-sm-offset-2' : (($style == 'right_content') ? 'col-sm-offset-4' : '');

            $modern_imege_class = ( $style_banner == 'modern-image' ) ? ' modern ' : '';

            if ($style_banner != 'modern' && $style_banner!= 'modern-image') {
                $class = 'col-sm-offset-2';
            }

			ob_start(); ?>



                <?php

            if($style_banner == 'simple' || $style_banner == 'modern' || $style_banner == 'modern-image' || $style_banner == 'simple-image' || $style_banner == 'simple_leaf' ){ ?>
                    <div class="container-fluid top-banner top-banner__scene <?php echo esc_attr( $banner_height . $modern_imege_class ); ?>" <?php echo $bg_color; ?>>

	                <?php if ($animation && $style_banner == 'simple') { ?>
                        <div class="images-wrap" id="scene1">
                            <div class="img-wrap img-wrap-1 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/01.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-2 layer" data-depth="0.2"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/02.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-3 layer" data-depth="0.6"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/03.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-4 layer" data-depth="0.85"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/04.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-5 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/05.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-7 layer" data-depth="0.30"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/07.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-6 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-1/06.png'; ?>" alt=""></div>
                        </div>
                    <?php } if ($animation && $style_banner == 'simple_leaf') { ?>
                        <div class="images-wrap" id="scene1">
                            <div class="img-wrap img-wrap-1 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/01.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-2 layer" data-depth="0.2"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/02.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-3 layer" data-depth="0.6"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/03.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-4 layer" data-depth="0.85"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/04.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-5 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/05.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-6 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-3/06.png'; ?>" alt=""></div>
                        </div>
	                <?php } if ($animation && $style_banner == 'simple-image') { ?>
                        <div class="images-wrap" id="scene1">
                            <div class="img-wrap img-wrap-8 layer" data-depth="0.45"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/01.png'; ?>" alt=""></div>
                            <div class="img-wrap img-wrap-9 layer" data-depth="0.2"><img src="<?php echo EF_URL . '/shortcodes/assets/images/fragments/style-2/02.png'; ?>" alt=""></div>
                        </div>
	                <?php }


                    if ( ! empty( $image ) ) {
		                echo pao_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => '' ) );
	                }

                    if ( ! empty( $simple_image ) && $style_banner == 'simple-image' ) {
		                echo pao_the_lazy_load_flter( $simple_image, array( 'class' => 'simple-img', 'alt' => '' ) );
	                }

	                if ( ! empty( $overlay ) ) { ?>
                        <span class="overlay"></span>
	                <?php } ?>

                    <div class="content <?php echo esc_attr( ! empty( $icon ) ? 'content-arrow' : ''); ?>">
                        <div class="row">
                             <?php if ( $style_banner == 'simple' || $style_banner == 'modern' || $style_banner == 'modern-image' || $style_banner == 'simple-image' ) { ?>
                             <div class="col-xs-12 col-sm-8 <?php echo esc_attr($class); ?>">
                             <?php } ?>
				                <?php
				                if(isset($subtitle) && !empty($subtitle) && $style_banner != 'simple-image'){ ?>
                                    <div class="sub-title">
						                <?php echo wp_kses_post( $subtitle ); ?>
                                    </div>
				                <?php }

                                if ( ! empty( $simple_image ) && $style_banner == 'simple_leaf' ) { ?>
                                    <img src="<?php echo esc_attr( $simple_image )?>" alt="<?php echo esc_attr( $simple_image )?>">
                                <?php }

				                if ( ! empty( $title ) ) { ?>
                                    <h3 class="title">
						                <?php echo wp_kses_post( $title ); ?>
                                    </h3>
				                <?php } ?>

                                <?php if ( ! empty( $desc ) && ( $style_banner == 'simple_leaf' || $style_banner == 'modern-image') ) { ?>
                                    <div class="desc">
                                        <?php echo wp_kses_post( $desc ); ?>
                                    </div>
                                <?php } ?>

                                <?php if ( ! empty( $button ) ) {
                                    $url = vc_build_link( $button );
                                } else {
                                    $url['url']    = '#';
                                    $url['title']  = 'title';
                                    $url['target'] = '_self';
                                }

                                if ( ! empty( $button_add ) ) {
                                    $url_add = vc_build_link( $button_add );
                                } else {
                                    $url_add['url']    = '#';
                                    $url_add['title']  = 'title';
                                    $url_add['target'] = '_self';
                                }
                                if ( ! empty( $button ) || ! empty( $button_add ) ) { ?>
                                    <div class="btn-wrapper">
                                        <?php if ( ! empty( $button ) )  { ?>
                                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                               class="<?php echo esc_attr( $btn_style ); ?>"
                                               target="<?php echo esc_attr( $url['target'] ); ?>">
                                                <?php echo esc_html( $url['title'] ); ?>
                                            </a>
                                        <?php } ?>
                                        <?php if ( ! empty( $button_add ) )  { ?>
                                            <a href="<?php echo esc_attr( $url_add['url'] ); ?>"
                                               class="<?php echo esc_attr( $btn_style_add ); ?>"
                                               target="<?php echo esc_attr( $url_add['target'] ); ?>">
                                                <?php echo esc_html( $url_add['title'] ); ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                             <?php if ( $style_banner == 'simple' || $style_banner == 'modern' || $style_banner == 'modern-image' || $style_banner == 'simple-image' ) { ?>
                             </div>
                             <?php } ?>
                        </div>

                        <?php if ( ! empty( $icon ) ) { ?>
                            <a data-fip-value="icon-basic-mouse" class="icon-basic-mouse btn-scroll-down"></a>
                        <?php } ?>
                    </div>
                </div>
            <?php }
            elseif($style_banner == 'parallax'){ ?>
                <div class="parallax-banner-wrap">
                    <?php
                    $items = (array) vc_param_group_parse_atts( $items );

                    if(!empty($items)){
                      foreach ( $items as $item ) {
	                      $image = ( ! empty( $item['image'] ) && is_numeric( $item['image'] ) ) ? wp_get_attachment_url( $item['image'] ) : '';
                          if(!empty($image)){ ?>
                              <div class="parallax-window full-height-window" data-parallax="scroll" data-position-Y="top"
                                   data-image-src="<?php echo esc_url($image); ?>">
                                  <?php if(!empty($item['title'])){ ?>
                                      <div class="content-parallax">
                                          <h3 class="title"><?php echo esc_html($item['title']); ?></h3>
                                      </div>
                                  <?php } ?>
                              </div>
                          <?php }
                      } // end foreach
                    } ?>
                </div>
            <?php }

			// end output

			return ob_get_clean();
		}
	}
}