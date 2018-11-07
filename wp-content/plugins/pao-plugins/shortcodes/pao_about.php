<?php

//About shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/about/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'        => esc_html__( 'About', 'js_composer' ),
			'base'        => 'pao_about',
			'description' => __( 'Section with image, text and button', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Style', 'js_composer' ),
                    'description' => __( 'Please select main style', 'js_composer' ),
                    'param_name' => 'style',
                    'value'      => array(
                        array(
                            'value' => 'default',
                            'label' => esc_html__( 'Modern', 'js_composer' ),
                            'image' => $url . 'modern.jpg'
                        ),
//                        array(
//                            'value' => 'simple',
//                            'label' => esc_html__( 'Simple', 'js_composer' ),
//                            'image' => $url . 'simple.jpg'
//                        ),
                        array(
                            'value' => 'classic',
                            'label' => esc_html__( 'Classic', 'js_composer' ),
                            'image' => $url . 'classic.jpg'
                        ),
                        array(
                            'value' => 'simple_text',
                            'label' => esc_html__( 'Simple With Text', 'js_composer' ),
                            'image' => $url . 'simple-text.jpg'
                        ),
                    )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Background title', 'js_composer' ),
                    'description' => __( 'Please add background color for your title', 'js_composer' ),
					'param_name' => 'bgtitle',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple', 'simple_text' ) )
				),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Person image', 'js_composer' ),
                    'description' => __( 'Please add your image', 'js_composer' ),
					'param_name' => 'image',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple', 'classic' ) )
				),
                array(
                    'type'       => 'textarea',
                    'heading'    => __( 'Blockquotes', 'js_composer' ),
                    'param_name' => 'blockquote',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'classic' ) ),
                    'description' => __( 'If you want highlight the text please use tag "i"', 'js_composer' ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Author', 'js_composer' ),
                    'description' => __( 'Please add author name', 'js_composer' ),
                    'param_name' => 'author',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'classic' ) )
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => __( 'Author position', 'js_composer' ),
                    'description' => __( 'Please add author position', 'js_composer' ),
                    'param_name' => 'position',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'classic' ) )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Subtitle', 'js_composer' ),
                    'description' => __( 'Please add your subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple', 'simple_text' ) )
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
                    'description' => __( 'Please add your title', 'js_composer' ),
					'param_name' => 'title',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple', 'simple_text' ) )
				),
                array(
                    'type'       => 'textarea_html',
                    'heading'    => __( 'Description', 'js_composer' ),
                    'param_name' => 'content',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'simple_text' ) )
                ),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
                    'description' => __( 'Please add link for your button', 'js_composer' ),
					'param_name' => 'button',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple' ) )
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
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple' ) )
                ),
			),

			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pao_about extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'style'     => 'default',
				'bgtitle'   => '',
				'title'     => '',
				'blockquote'=> '',
				'position'  => '',
				'author'    => '',
				'btn_style' => 'a-btn-1',
				'image'     => '',
				'subtitle'  => '',
				'button'    => '',

			), $atts ) );

			// include needed stylesheets
			if ( ! in_array( "pao_about-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_about-css";
			}
			$this->enqueueCss();


			$btn_style = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn-1';
			$url       = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
			$image_yes = ! empty( $url ) ? 'image' : '';
			// start output
			ob_start();

			if ( $style == 'default' ) { ?>
                <div class="about-section <?php echo esc_attr( $style . ' ' . $image_yes ); ?>">
                    <div class="container">
                        <div class="content">
							<?php if ( ! empty( $subtitle ) ) { ?>
                                <h6 class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></h6>
							<?php }
							if ( ! empty( $title ) ) { ?>
                                <h5 class="title"><?php echo wp_kses_post( $title ); ?></h5>
							<?php }
							if ( ! empty( $button ) ) {
								$url_link = vc_build_link( $button );
							} else {
								$url_link['url']    = '#';
								$url_link['title']  = 'title';
								$url_link['target'] = '_self';
							}

							if ( ! empty( $button ) ) { ?>
                                <div class="but-wrap">
                                    <a href="<?php echo esc_attr( $url_link['url'] ); ?>"
                                       class="<?php echo esc_attr( $btn_style ); ?>"
                                       target="<?php echo esc_attr( $url_link['target'] ); ?>">
										<?php echo wp_kses_post( $url_link['title'] ); ?>
                                    </a>
                                </div>
							<?php } ?>
                        </div>

						<?php if ( ! empty( $url ) ) { ?>
                            <div class="person-wrap s-back-switch">
								<?php echo pao_the_lazy_load_flter( $url, array(
									'class' => 'person s-img-switch',
									'alt'   => ''
								) ); ?>
                            </div>
						<?php } ?>
                    </div>
                </div>
            <?php } elseif ( $style == 'classic' ) { ?>
                <div class="about-section <?php echo esc_attr( $style . ' ' . $image_yes ); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <?php if ( ! empty( $url ) ) { ?>
                                    <div class="img-wrap s-back-switch">
                                        <?php echo pao_the_lazy_load_flter( $url, array(
                                            'class' => 'person s-img-switch',
                                            'alt'   => ''
                                        ) ); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-5">
                                <div class="content-wrap">
                                    <?php if ( ! empty( $blockquote ) ) { ?>
                                        <div class="blockquote"><?php echo wp_kses_post( $blockquote ); ?></div>
                                    <?php }
                                    if ( ! empty( $author ) ) { ?>
                                        <div class="author"><?php echo wp_kses_post( $author ); ?></div>
                                    <?php }
                                    if ( ! empty( $position ) ) { ?>
                                        <div class="position"><?php echo wp_kses_post( $position ); ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } elseif ( $style == 'simple_text' ) { ?>
                <div class="about-section <?php echo esc_attr( $style . ' ' . $image_yes ); ?>">
                    <?php if ( ! empty( $bgtitle ) ) { ?>
                        <div class="title-bg"><?php echo wp_kses_post( $bgtitle ); ?></div>
                    <?php } ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="content-wrap">
                                    <?php if ( ! empty( $subtitle ) ) { ?>
                                        <div class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
                                    <?php } ?>
                                    <?php if ( ! empty( $title ) ) { ?>
                                        <h1 class="title"><?php echo wp_kses_post( $title ); ?></h1>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <?php if ( ! empty( $content ) ) { ?>
                                    <div class="description"><?php echo wp_kses_post( $content ); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } elseif ( $style == 'simple' ) { ?>
                <div class="about-section-<?php echo esc_attr( $style . ' ' . $style ); ?>">
                    <div class="content">
						<?php if ( ! empty( $title ) ) { ?>
                            <h6 class="title"><?php echo wp_kses_post( $title ); ?></h6>
						<?php }
						if ( ! empty( $subtitle ) ) { ?>
                            <div class="subtitle"><?php echo wp_kses_post( $subtitle ); ?></div>
						<?php }
						if ( ! empty( $button ) ) {
							$url = vc_build_link( $button );
						} else {
							$url['url']    = '#';
							$url['title']  = 'title';
							$url['target'] = '_self';
						}

						if ( ! empty( $button ) ) { ?>
                            <div class="but-wrap">
                                <a href="<?php echo esc_attr( $url['url'] ); ?>"
                                   class="<?php echo esc_attr( $btn_style ); ?>"
                                   target="<?php echo esc_attr( $url['target'] ); ?>">
									<?php echo wp_kses_post( $url['title'] ); ?>
                                </a>
                            </div>
						<?php } ?>
                    </div>
					<?php if ( ! empty( $bgtitle ) ) { ?>
                        <h2 class="title-bg"><?php echo wp_kses_post( $bgtitle ); ?></h2>
					<?php } ?>
                </div>
			<?php }

			return ob_get_clean();
		}
	}
}