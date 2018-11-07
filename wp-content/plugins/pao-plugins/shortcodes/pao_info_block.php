<?php

//Info block shortcode


if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/info_block/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'                    => __( 'Info block', 'js_composer' ),
			'base'                    => 'pao_info_block',
			'content_element'         => true,
			'show_settings_on_create' => true,
			'description'             => __( 'Image(parallax) and text', 'js_composer' ),
			'params'                  => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Info block style', 'js_composer' ),
                    'description'=> __( 'Please select block style', 'js_composer' ),
                    'param_name' => 'info_block_style',
                    'value'      => array(
                        array(
                            'value' => 'style-3',
                            'label' => esc_html__( 'Modern with image', 'js_composer' ),
                            'image' => $url . 'style-3.jpg'
                        ),
                        array(
                            'value' => 'style-6',
                            'label' => esc_html__( 'Video With Text Section', 'js_composer' ),
                            'image' => $url . 'style-6.jpg'
                        ),
                        array(
                            'value' => 'style-7',
                            'label' => esc_html__( 'Video Button Section', 'js_composer' ),
                            'image' => $url . 'style-7.jpg'
                        ),
                    )
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Number', 'js_composer' ),
                    'description'=> __( 'Please add number', 'js_composer' ),
					'param_name' => 'number',
					'value'      => '',
					'dependency' => array( 'element' => 'info_block_style', 'value' => array( 'style-3', 'style-4' ) ),
				),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Background image for number', 'js_composer' ),
                    'description'=> __( 'Please add your image for number', 'js_composer' ),
					'param_name' => 'image_bg',
					'dependency' => array( 'element' => 'info_block_style', 'value' => array( 'style-3', 'style-4' ) ),
				),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Title', 'js_composer' ),
                    'description'=> __( 'Please add your title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
					'dependency' => array(
						'element' => 'info_block_style',
						'value'   => array( 'style-3', 'style-4', 'style-6', 'style-7' )
					),
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Heading', 'js_composer' ),
                    'description'=> __( 'Please select heading', 'js_composer' ),
					'param_name' => 'title_tag',
					'value'      => array(
						'H1' => 'h1',
						'H2' => 'h2',
						'H3' => 'h3',
						'H4' => 'h4',
						'H5' => 'h5',
						'H6' => 'h6',
					),
					'dependency' => array( 'element' => 'title', 'not_empty' => true ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Subtitle', 'js_composer' ),
                    'description'=> __( 'Please add your subtitle', 'js_composer' ),
					'param_name' => 'subtitle',
					'value'      => '',
					'dependency' => array( 'element' => 'info_block_style', 'value' => array ( 'style-2', 'style-6', 'style-7' ) ),
				),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Description', 'js_composer' ),
                    'description'=> __( 'Please add your description', 'js_composer' ),
                    'param_name' => 'desc',
                    'value'      => '',
                    'dependency' => array( 'element' => 'info_block_style', 'value' => array ( 'style-7' ) ),
                ),

				array(
					'type' => 'param_group',
					'heading' => __( 'Items for accordion', 'js_composer' ),
                    'description'=> __( 'Please add more information for items', 'js_composer' ),
					'param_name' => 'items_accordion',
					'value' => '',
					'params' => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Title', 'js_composer' ),
                            'description'=> __( 'Please add title', 'js_composer' ),
							'param_name' => 'title',
						),
						array(
							'type'       => 'textarea',
							'heading'    => __( 'Text', 'js_composer' ),
                            'description'=> __( 'Please add simple text', 'js_composer' ),
							'param_name' => 'text',
						),
					),
					'dependency' => array( 'element' => 'info_block_style', 'value' => 'style-2' ),
				),
				array(
					'type'       => 'textarea_html',
					'heading'    => __( 'Text', 'js_composer' ),
                    'description'=> __( 'Please add simple text', 'js_composer' ),
					'param_name' => 'content',
					'value'      => '',
					'dependency' => array(
						'element'            => 'info_block_style',
						'value_not_equal_to' => array( 'style-2' )
					),
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Background text', 'js_composer' ),
                    'description'=> __( 'Please add your background text', 'js_composer' ),
					'param_name' => 'bg_text',
					'value'      => '',
					'dependency' => array( 'element' => 'info_block_style', 'value' => array ( 'style-3', 'style-6' ) ),
				),
				array(
					'type'       => 'checkbox',
					'heading'    => __( 'Add video?', 'js_composer' ),
                    'description'=> __( 'Do you want to add your video?', 'js_composer' ),
					'param_name' => 'add_video',
					'value'      => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
					'dependency' => array( 'element' => 'info_block_style', 'value' => array( 'style-4', 'style-6', 'style-7' ) ),
				),
				array(
					'type'       => 'dropdown',
					'heading'    => __( 'Video services', 'js_composer' ),
                    'description'=> __( 'Please select video services', 'js_composer' ),
					'param_name' => 'services',
					'value'      => array(
						'Youtube' => 'youtube',
						'Vimeo'   => 'vimeo',
					),
					'dependency' => array( 'element' => 'add_video', 'value' => 'yes' ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Video link', 'js_composer' ),
					'description' => __( 'Insert your video link', 'js_composer' ),
					'param_name'  => 'video_link',
					'value'       => '',
					'dependency'  => array( 'element' => 'add_video', 'value' => 'yes' ),
				),
                array(
                    'type'       => 'attach_image',
                    'heading'    => __( 'Video background image', 'js_composer' ),
                    'param_name' => 'video_btn_bg',
                    'dependency' => array(
                        'element'            => 'info_block_style',
                        'value' => array('style-6', 'style-7' )
                    ),
                ),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Image', 'js_composer' ),
                    'description'=> __( 'Please add image', 'js_composer' ),
					'param_name' => 'image_id',
					'dependency' => array(
						'element'            => 'info_block_style',
						'value_not_equal_to' => array( 'style-4', 'style-5', 'style-6', 'style-7' )
					),
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
                    'description'=> __( 'Please specify button link', 'js_composer' ),
					'param_name' => 'button',
					'dependency' => array(
						'element'            => 'info_block_style',
						'value_not_equal_to' => array( 'style-3', 'style-4', 'style-6', 'style-7' )
					),
				),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'description' => __( 'Please select button style', 'js_composer' ),
                    'param_name' => 'btn_style',
					'dependency' => array(
						'element'            => 'info_block_style',
						'value_not_equal_to' => array( 'style-3', 'style-4', 'style-6', 'style-7' )
					),
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
					'type'        => 'textfield',
					'heading'     => __( 'Extra class name', 'js_composer' ),
					'param_name'  => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
					'value'       => ''
				),
				/* CSS editor */
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' )
				)
			), //end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pao_info_block extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'info_block_style' => 'style-3',
				'items_accordion' => '',
				'title'            => '',
				'number'           => '',
				'title_tag'        => 'h1',
				'subtitle'         => '',
				'desc'             => '',
				'add_video'        => '',
				'video_btn_bg'     => '',
				'image_id'         => '',
				'image_bg'         => '',
				'bg_text'          => '',
				'video_link'       => '',
				'services'         => 'youtube',
				'button'           => '',
				'btn_style'        => 'a-btn-1',
				'el_class'         => '',
				'css'              => '',
			), $atts ) );

			// include needed scripts
			if ( ! in_array( "pao_magnific", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_magnific";
			}
			if ( ! in_array( "pao_info_block", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_info_block";
			}
			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pao_magnific-popup-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_magnific-popup-css";
			}

			if ( ! in_array( "pao_info_block-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_info_block-css";
			}

			$this->enqueueCss();

			$class     = ( ! empty( $info_block_style ) ) ? $info_block_style : "";
			$class     .= " " . ( ! empty( $el_class ) ) ? $el_class : '';
			$class     .= vc_shortcode_custom_css_class( $css, ' ' );
			$image_url = ( ! empty( $image_id ) && is_numeric( $image_id ) ) ? wp_get_attachment_url( $image_id ) : '';

			if ( ! empty( $button ) ) {
				$link = vc_build_link( $button );
			}

			$btn_style    = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn-1';
			$contentClass = '';

			ob_start(); ?>

            <div class="info-block-wrap <?php echo esc_attr( $class ); ?>">
				<?php if ( $info_block_style == 'style-1' || $info_block_style == 'style-2' ) { ?>
                    <div class="row">
						<?php if ( ! empty( $image_url ) ) {
							$contentClass = 'col-sm-6 col-sm-pull-6'; ?>
                            <div class="image-wrap col-xs-12 col-sm-6 col-sm-push-6">
                                <div class="image-container">
									<?php echo pao_the_lazy_load_flter( $image_url,
										array(
											'class' => 'info-block-img',
											'alt'   => ''
										)
									); ?>
                                </div>
                            </div>
						<?php } // end if ?>
                        <div class="content-wrap col-xs-12 <?php echo esc_attr( $contentClass ); ?>">

							<?php if ( ! empty( $title ) && ! empty( $title_tag ) && $info_block_style != "style-2") {
								echo sprintf( '<%1$s class="title">%2$s</%1$s>',
									$title_tag,
									esc_html( $title )
								);
							} // end if ?>


							<?php if ( ! empty( $content ) && $info_block_style != "style-2") { ?>
                                <div class="content">
                                    <p><?php echo wp_kses_post( $content ); ?></p>
                                </div>
							<?php } // end if

                            if($info_block_style == 'style-2'){ ?>
                                <div class="accordeon-wrap">
	                                <?php if ( ! empty( $info_block_style ) && $info_block_style = "style-2" ) { ?>
		                                <?php if ( ! empty( $subtitle ) ) { ?>
                                            <h5 class="subtitle"><?php echo esc_html( $subtitle ); ?></h5>
		                                <?php } // end if ?>
	                                <?php } // end if ?>


                                    <?php if(!empty($items_accordion)){
	                                    $items_accordion = (array) vc_param_group_parse_atts( $items_accordion ); ?>
                                        <ul class="accordeon">
		                                    <?php

                                            $counter = 1;

                                            foreach ($items_accordion as $item){
                                                $active_class = $counter === 1 ? 'active' : '';
                                                $active_class2 = $counter === 1 ? 'is-show' : ''; ?>
                                                <li>
                                                    <?php if(!empty($item['title'])){ ?>
                                                        <a href="" class="toggle-list <?php echo esc_attr($active_class); ?>"><?php echo esc_html($item['title']); ?></a>
                                                    <?php } ?>
			                                        <?php if(!empty($item['text'])){ ?>
                                                        <ul class="list-drop <?php echo esc_attr($active_class2); ?>">
                                                            <li>
                                                                <div class="text"><?php echo wp_kses_post($item['text']); ?></div>
                                                            </li>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
		                                    <?php
	                                            $counter++;
                                            } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                            <?php } ?>

							<?php if ( ! empty( $link ) && ! empty( $link['url'] ) && ! empty( $link['title'] ) ) { ?>
                                <div class="but-wrap">
                                    <a href="<?php echo esc_url( $link['url'] ); ?>"
                                       rel="<?php echo esc_attr( $link['rel'] ); ?>"
                                       target="<?php echo esc_attr( $link['target'] ); ?>"
                                       class="<?php echo esc_attr( $btn_style ); ?>">
										<?php echo esc_html( $link['title'] ); ?>
                                    </a>
                                </div>
							<?php } // end if ?>

                        </div>
                    </div>
				<?php } elseif ( $info_block_style == 'style-3' ) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <?php if ( ! empty( $image_url ) ) { ?>
                                    <div class="image-wrap">
                                        <?php echo pao_the_lazy_load_flter( $image_url,
                                            array(
                                                'class' => 's-img-switch',
                                                'alt'   => ''
                                            )
                                        ); ?>
                                    </div>
                                <?php } // end if ?>
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <div class="main-wrap">
                                    <div class="title-wrap">
                                        <?php if ( ! empty( $number ) ) { ?>
                                            <div class="number">
                                                <?php $random = substr( md5( rand() ), 0, 7 ); ?>
                                                <svg id="pao-info-number" class="number-svg"
                                                     xmlns="http://www.w3.org/2000/svg" height="145" viewBox="0 0 145 100"
                                                     style="opacity: 1;">


                                                    <?php if ( ! empty( $image_bg ) ) {
                                                        $image_bg = wp_get_attachment_image_src( $image_bg, 'full' );
                                                        $image_bg = is_array( $image_bg ) ? $image_bg[0] : $image_bg; ?>
                                                        <defs>
                                                            <pattern x="0" y="0" width="185" height="140"
                                                                     patternUnits="userSpaceOnUse"
                                                                     id="pattern<?php echo esc_attr( $random ); ?>"
                                                                     viewBox="0 0 185 140">
                                                                <image xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                       xlink:href="<?php echo esc_url( $image_bg ); ?>"
                                                                       preserveAspectRatio="none" x="0" y="0" width="185"
                                                                       height="140"></image>
                                                            </pattern>
                                                        </defs>
                                                    <?php } ?>

                                                    <text x="45%" y="50%" id="letter" dy="50" style="text-anchor: middle;"
                                                          fill="url('#pattern<?php echo esc_attr( $random ); ?>')">
                                                        <?php echo esc_html( $number ); ?>
                                                    </text>
                                                </svg>
                                            </div>
                                        <?php }

                                        if ( ! empty( $title ) && ! empty( $title_tag ) ) {
                                            echo sprintf( '<%1$s class="title">%2$s</%1$s>',
                                                $title_tag,
                                                wp_kses_post( $title )
                                            );
                                        } // end if
                                        ?>
                                    </div>
                                    <?php if ( ! empty( $content ) ) { ?>
                                        <div class="content">
                                            <p><?php echo wp_kses_post( $content ); ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ( ! empty( $bg_text ) ) { ?>
                        <div class="bg-text">
                            <?php echo esc_html( $bg_text ); ?>
                        </div>
                    <?php } ?>
				<?php } elseif ( $info_block_style == 'style-4' ) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="title-wrap">
									<?php if ( ! empty( $number ) ) { ?>
                                        <div class="number">
											<?php $random = substr( md5( rand() ), 0, 7 ); ?>
                                            <svg id="pao-info-number" class="number-svg"
                                                 xmlns="http://www.w3.org/2000/svg" height="150" viewBox="0 0 185 140"
                                                 style="opacity: 1;">


												<?php if ( ! empty( $image_bg ) ) {
													$image_bg = wp_get_attachment_image_src( $image_bg, 'full' );
													$image_bg = is_array( $image_bg ) ? $image_bg[0] : $image_bg; ?>
                                                    <defs>
                                                        <pattern x="0" y="0" width="185" height="140"
                                                                 patternUnits="userSpaceOnUse"
                                                                 id="pattern<?php echo esc_attr( $random ); ?>"
                                                                 viewBox="0 0 185 140">
                                                            <image xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                   xlink:href="<?php echo esc_url( $image_bg ); ?>"
                                                                   preserveAspectRatio="none" x="0" y="0" width="185"
                                                                   height="140"></image>
                                                        </pattern>
                                                    </defs>
												<?php } ?>

                                                <text x="45%" y="50%" id="letter" dy="50" style="text-anchor: middle;"
                                                      fill="url('#pattern<?php echo esc_attr( $random ); ?>')">
													<?php echo esc_html( $number ); ?>
                                                </text>
                                            </svg>
                                        </div>
									<?php }

									if ( ! empty( $title ) && ! empty( $title_tag ) ) {
										echo sprintf( '<%1$s class="title">%2$s</%1$s>',
											$title_tag,
											esc_html( $title )
										);
									} // end if
									?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
								<?php if ( ! empty( $content ) ) { ?>
                                    <div class="content">
                                        <p><?php echo wp_kses_post( $content ); ?></p>
                                    </div>
								<?php } // end if

								if ( isset( $add_video ) && ! empty( $add_video ) ) { ?>
                                    <div class="video only-button <?php echo esc_attr( $services ); ?>"
                                         data-type-start="click">
                                        <div class="video-content">
	                                        <?php if(!empty($video_link)){ ?>
                                                <a href="<?php echo esc_url($video_link); ?>" class="play"></a>
	                                        <?php } ?>
                                            <span><?php esc_html_e( 'Watch Video', 'pao' ); ?></span>
                                        </div>
                                        <span class="close fa fa-close"></span>
                                    </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
					<?php if ( ! empty( $bg_text ) ) { ?>
                        <div class="bg-text">
							<?php echo esc_html( $bg_text ); ?>
                        </div>
					<?php } ?>
				<?php } elseif ( $info_block_style == 'style-5' ) {
					?>
                    <div class="row">
                        <div class="content-wrap col-xs-12">

							<?php if ( ! empty( $title ) && ! empty( $title_tag ) ) {
								echo sprintf( '<%1$s class="title">%2$s</%1$s>',
									$title_tag,
									esc_html( $title )
								);
							} // end if
							?>


							<?php if ( ! empty( $content ) ) { ?>
                                <div class="content">
                                    <p><?php echo wp_kses_post( $content ); ?></p>
                                </div>
							<?php } // end if
							?>

							<?php if ( ! empty( $link ) && ! empty( $link['url'] ) && ! empty( $link['title'] ) ) { ?>
                                <div class="but-wrap">
                                    <a href="<?php echo esc_url( $link['url'] ); ?>"
                                       rel="<?php echo esc_attr( $link['rel'] ); ?>"
                                       target="<?php echo esc_attr( $link['target'] ); ?>"
                                       class="<?php echo esc_attr( $btn_style ); ?>">
										<?php echo esc_html( $link['title'] ); ?>
                                    </a>
                                </div>
							<?php } // end if
							?>

                        </div>
                    </div>
                <?php } elseif ( $info_block_style == 'style-6' || $info_block_style == 'style-7' ) {
                    ?>
                    <div class="main-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="video-wrapper">
                                        <?php if ( ! empty( $video_btn_bg ) ) {
                                            echo pao_the_lazy_load_flter( $video_btn_bg, array( 'class' => 's-img-switch', 'alt' => '' ) );
                                        } ?>
                                        <?php if ( isset( $add_video ) && ! empty( $add_video ) ) { ?>
                                            <div class="video">
                                                <?php if ( isset( $add_video ) && ! empty( $add_video ) ) { ?>
                                                    <div class="video only-button">
                                                        <div class="video-content">
                                                            <?php if(!empty($video_link)){ ?>
                                                                <a href="<?php echo esc_url($video_link); ?>" class="play"></a>
                                                            <?php } ?>
                                                        </div>
                                                        <span class="close fa fa-close"></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="info-wrapper">
                                        <?php if ( ! empty( $subtitle ) ) { ?>
                                            <div class="subtitle"><?php echo esc_html( $subtitle ); ?></div>
                                        <?php } ?>
                                        <?php if ( ! empty( $title ) ) { ?>
                                            <div class="title">
                                                <?php echo wp_kses_post( $title ); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ( ! empty( $desc ) && $info_block_style == 'style-7' ) { ?>
                                            <div class="desc">
                                                <p><?php echo wp_kses_post( $desc ); ?></p>
                                            </div>
                                        <?php } ?>
                                        <?php if ( ! empty( $content ) ) { ?>
                                            <div class="content">
                                                <p><?php echo wp_kses_post( $content ); ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ( ! empty( $bg_text ) ) { ?>
                            <div class="bg-text">
                                <?php echo esc_html( $bg_text ); ?>
                            </div>
                        <?php } ?>
                    </div>
				<?php } ?>
            </div>

			<?php
			return ob_get_clean();
		} // end content()
	} // end class
} // end if

?>
