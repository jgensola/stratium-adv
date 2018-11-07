<?php

//Contacts shortcode


if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/contacts/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'        => __( 'Contacts', 'js_composer' ),
			'base'        => 'pao_contacts',
			'description' => __( 'Contacts info', 'js_composer' ),
			'category'    => __( 'Content', 'js_composer' ),
			'params'      => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Style', 'js_composer' ),
                    'description' => __( 'Please select style for this section', 'js_composer' ),
                    'param_name' => 'style',
                    'value'      => array(
                        array(
                            'value' => 'style2',
                            'label' => esc_html__( 'Simple form with info', 'js_composer' ),
                            'image' => $url . 'style_new.jpg'
                        ),
                        array(
                            'value' => 'style3',
                            'label' => esc_html__( 'Contact form with title', 'js_composer' ),
                            'image' => $url . 'style-3.jpg'
                        ),
                        array(
                            'value' => 'style5',
                            'label' => esc_html__( 'Info list', 'js_composer' ),
                            'image' => $url . 'style-5.jpg'
                        ),
                        array(
                            'value' => 'style7',
                            'label' => esc_html__( 'Simple form', 'js_composer' ),
                            'image' => $url . 'style-new.jpg'
                        ),
                        array(
                            'value' => 'style8',
                            'label' => esc_html__( 'Form with maps', 'js_composer' ),
                            'image' => $url . 'maps-light.jpg'
                        ),
                        array(
                            'value' => 'style9',
                            'label' => esc_html__( 'Form with maps - modern', 'js_composer' ),
                            'image' => $url . 'map-dark.jpg'
                        ),
                    )
                ),
				array(
					'type'       => 'attach_image',
					'heading'    => __( 'Image', 'js_composer' ),
                    'description' => __( 'Please add the image', 'js_composer' ),
					'param_name' => 'image',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1' ) )
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
                    'description' => __( 'Please add title', 'js_composer' ),
					'param_name' => 'title',
					'value'      => '',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style3', 'style7', 'style8', 'style9' ) )
				),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Subtitle', 'js_composer' ),
                    'description' => __( 'Please add subtitle', 'js_composer' ),
                    'param_name' => 'subtitle',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'style8', 'style9' ) )
                ),
				array(
					'type'       => 'textarea',
					'heading'    => __( 'Text', 'js_composer' ),
                    'description' => __( 'Please add simple text', 'js_composer' ),
					'param_name' => 'text',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style3', 'style7' ) )
				),
				array(
					'type'       => 'textarea_html',
					'heading'    => __( 'Text', 'js_composer' ),
                    'description' => __( 'Please add simple text', 'js_composer' ),
					'param_name' => 'content',
					'dependency' => array( 'element' => 'style', 'value' => array( 'style2', 'style4', ) )
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Address', 'js_composer' ),
                    'description' => __( 'Please add your address information', 'js_composer' ),
					'param_name' => 'address_info',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textarea',
							'heading'    => __( 'Add your address', 'js_composer' ),
							'param_name' => 'address',
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'style2', 'style4' ) ),
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Email', 'js_composer' ),
                    'description' => __( 'Please add your email', 'js_composer' ),
					'param_name' => 'email_info',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Add your email', 'js_composer' ),
							'param_name' => 'email',
							'value'      => ''
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1','style4' ) ),
				),
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Phone', 'js_composer' ),
                    'description' => __( 'Please add your phone number', 'js_composer' ),
					'param_name' => 'phone_info',
					'value'      => urlencode( json_encode( array() ) ),
					'params'     => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Add your phone', 'js_composer' ),
							'param_name' => 'phone',
							'value'      => ''
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array( 'style1', 'style4' ) ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Contact form', 'js_composer' ),
					'param_name'  => 'form',
					'description' => __( 'Add your form id from shortcode Contact Form 7 Plugin.', 'js_composer' ),
					'dependency'  => array( 'element' => 'style', 'value' => array( 'style2', 'style3', 'style7', 'style8', 'style9' ) )
				),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style for form', 'js_composer' ),
                    'description' => __( 'Please select button style', 'js_composer' ),
                    'param_name' => 'btn_style',
					'dependency'  => array( 'element' => 'style', 'value' => array( 'style2', 'style3', 'style7' ) ),
                    'value'      => array(
                        array(
                            'value' => 'btn-style-1',
                            'label' => esc_html__( 'Default button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-1.png'
                        ),
                        array(
                            'value' => 'btn-style-2',
                            'label' => esc_html__( 'Default button with shadow', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-2.png'
                        ),
                        array(
                            'value' => 'btn-style-3',
                            'label' => esc_html__( 'Default transparent button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-3.png'
                        ),
                        array(
                            'value' => 'btn-style-4',
                            'label' => esc_html__( 'Dark button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-4.png'
                        ),
                        array(
                            'value' => 'btn-style-5',
                            'label' => esc_html__( 'Dark button with shadow', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-5.png'
                        ),
                        array(
                            'value' => 'btn-style-6',
                            'label' => esc_html__( 'Dark transparent button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-6.png'
                        ),
                        array(
                            'value' => 'btn-style-7',
                            'label' => esc_html__( 'White button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-7.png'
                        ),
                        array(
                            'value' => 'btn-style-8',
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
					'type' => 'param_group',
					'heading' => __( 'Items', 'js_composer' ),
                    'description' => __( 'Please add options for the items', 'js_composer' ),
					'param_name' => 'items',
					'value' => '',
					'params' => array(
						array(
							'type' => 'iconpicker',
							'heading' => 'Select icon',
							'param_name'  => 'icon',
							'value'       => 'icon-arrow-1-circle-down',
							'settings'    => array(
								'emptyIcon'    => false,
								'type'         => 'info',
								'source'       => pao_simple_icons(),
								'iconsPerPage' => 4000,
							),
							'description' => __( 'Pleae select custom icon', 'js_composer' ),
						),
						array(
							'type'       => 'colorpicker',
							'heading'    => 'Icon color',
                            'description' => __( 'Please select colors for icon', 'js_composer' ),
							'param_name' => 'icon_color',
						),
						array(
							'type' => 'param_group',
							'heading' => __( 'Info', 'js_composer' ),
                            'description' => __( 'Please add your information', 'js_composer' ),
							'param_name' => 'items_child',
							'value' => '',
							'params' => array(
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Title', 'js_composer' ),
                                    'description' => __( 'Please add your title', 'js_composer' ),
									'param_name' => 'title',
								),
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Phone', 'js_composer' ),
                                    'description' => __( 'Please add your phone number', 'js_composer' ),
									'param_name' => 'phone'
								),
								array(
									'type'       => 'textfield',
									'heading'    => __( 'Email', 'js_composer' ),
                                    'description' => __( 'Please add your email', 'js_composer' ),
									'param_name' => 'email'
								),
								array(
									'type'       => 'textfield',
                                    'description' => __( 'Please add simple text', 'js_composer' ),
									'heading'    => __( 'Text', 'js_composer' ),
									'param_name' => 'text'
								),
							),
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array('style5') ),
				),
				array(
					'type' => 'param_group',
					'heading' => __( 'Items single', 'js_composer' ),
                    'description' => __( 'Please add your information', 'js_composer' ),
					'param_name' => 'items_single',
					'value' => '',
					'params' => array(
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Title', 'js_composer' ),
                            'description' => __( 'Please add your title', 'js_composer' ),
							'param_name' => 'title',
						),
						array(
							'type'       => 'textfield',
                            'description' => __( 'Please add your phone number', 'js_composer' ),
							'heading'    => __( 'Phone', 'js_composer' ),
							'param_name' => 'phone'
						),
						array(
							'type'       => 'textfield',
                            'description' => __( 'Please add your email', 'js_composer' ),
							'heading'    => __( 'Email', 'js_composer' ),
							'param_name' => 'email'
						),
					),
					'dependency' => array( 'element' => 'style', 'value' => array('style6') ),
				),
                array(
                    'type'        => 'attach_image',
                    'heading'     => __( 'Marker', 'js_composer' ),
                    'param_name'  => 'marker',
                    'description' => 'Map marker image.',
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Google api key', 'js_composer' ),
                    'param_name' => 'google_api_key',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Latitude', 'js_composer' ),
                    'param_name' => 'latitude',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Longitude', 'js_composer' ),
                    'param_name' => 'longitude',
                    'value'      => '',
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Map zoom', 'js_composer' ),
                    'param_name'  => 'zoom',
                    'description' => 'Map zooming value. Max - 19, min - 0.',
                    'value'       => '',
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
                array(
                    'type'       => 'dropdown',
                    'heading'    => __( 'Style', 'js_composer' ),
                    'param_name' => 'map_style',
                    'value'      => array(
                        'Light' => 'style-1',
                        'Dark'  => 'style-2',
                    ),
                    'dependency' => array( 'element' => 'style', 'value' => array('style8', 'style9') ),
                ),
//                array(
//                    'type'        => 'textarea',
//                    'heading'     => __( 'Code Style Map', 'js_composer' ),
//                    'param_name'  => 'custom_map',
//                    'value'       => '',
//                    'description' => 'Enter your style for map. Yo can find diferent style there <a href="https://snazzymaps.com">snazzymaps.com</a>',
//                    'dependency'  => array(
//                        'element' => 'map_style',
//                        'value'   => array( 'custom' ),
//                    ),
//                ),
			),
			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pao_contacts extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'image'        => '',
				'style'        => 'style2',
                'btn_style'    => 'btn-style-1',
				'address_info' => '',
				'form'         => '',
				'title'        => '',
				'subtitle'     => '',
				'text'         => '',
				'email_info'   => '',
				'phone_info'   => '',
				'items'        => '',
				'items_single' => '',

                'marker'         => '',
                'google_api_key' => 'AIzaSyA6M45oe9V8IfJfUB6x4k0FKhmEf58nJAs',
                'latitude'       => '',
                'longitude'      => '',
                'custom_map'     => '',
                'zoom'           => '14',
                'map_style'      => 'style-1',

			), $atts ) );

			if ( !in_array( "pao_contacts-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_contacts-css";
			}
			$this->enqueueCss();

            if(isset($style) && ( $style == 'style8' || $style == 'style9' ) ) {
                if ( !in_array( "pao_map", self::$js_scripts ) ) {
                    self::$js_scripts[] = "pao_map";
                }
                $this->enqueueJs();
            }

			if(isset($style) && $style == 'style3'){
				if ( !in_array( "pao_parallax_lib", self::$js_scripts ) ) {
					self::$js_scripts[] = "pao_parallax_lib";
				}
				$this->enqueueJs();
            }

			// el class
			$url   = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_image_src( $image, 'full' ) : '';

			$class_overlay = ! empty( $form ) ? ' over' : '';

            // map options
            wp_enqueue_script( 'gmaps', 'http://maps.google.com/maps/api/js?key=' . $google_api_key . '&ver=4.6', array( 'jquery' ), true, false );

            $marker   = ( ! empty( $marker ) && is_numeric( $marker ) ) ? wp_get_attachment_url( $marker ) : get_template_directory_uri() . '/assets/images/map-marker.png';
            $map_zoom = ( ! empty( $zoom ) && is_numeric( $zoom ) ) ? $zoom : 14;
            // custom style map
            $script = '';
            if ( $map_style == 'custom' && $custom_map != '' ) {
//                $custom_map = rawurldecode( base64_decode( strip_tags( $custom_map ) ) );
                $script .= '<script> var pao_style_map =' . $custom_map . ';</script>';
//                $script .= $custom_map;
            }

			// start output
			ob_start(); ?>

            <div class="contacts-info-wrap <?php echo esc_attr( $style . $class_overlay ); ?>">

				<?php if ( $style == 'style1' ) {
					if ( ! empty( $image ) ) { ?>
                        <img src="<?php echo esc_url( $url[0] ); ?>" alt="">
					<?php } ?>

                    <div class="content">
						<?php if ( ! empty( $address_info ) ) { ?>

                            <div class="content-item">
								<?php $address_info = (array) vc_param_group_parse_atts( $address_info ); ?>

                                <h5 class="title"><?php echo esc_html__( 'address', 'pao' ); ?></h5>

								<?php foreach ( $address_info as $address ) {
									if ( ! empty( $address['address'] ) ) { ?>
                                        <div class="address"><?php echo wpautop( $address['address'] ); ?></div>
									<?php }
								} ?>

                            </div>
						<?php }
						if ( ! empty( $email_info ) ) { ?>

                            <div class="content-item half">

								<?php $email_info = (array) vc_param_group_parse_atts( $email_info ); ?>

                                <h5 class="title"><?php echo esc_html__( 'email', 'pao' ); ?></h5>

                                <?php foreach ( $email_info as $email ) {
									if ( ! empty( $email['email'] ) ) { ?>
                                        <a href="mailto:<?php echo esc_attr( $email['email'] ); ?>" class="email"><?php echo esc_html( $email['email'] ); ?></a>
									<?php }
								} ?>

                            </div>
						<?php }
						if ( ! empty( $phone_info ) ) { ?>

                            <div class="content-item half">

								<?php $phone_info = (array) vc_param_group_parse_atts( $phone_info ); ?>

                                <h5 class="title"><?php echo esc_html__( 'phone', 'pao' ); ?></h5>

                                <?php foreach ( $phone_info as $phone ) {
									if ( ! empty( $phone['phone'] ) ) { ?>
                                        <a href="tel:<?php echo esc_attr( $phone['phone'] ); ?>"
                                           class="email"><?php echo esc_html( $phone['phone'] ); ?></a>
									<?php }
								} ?>

                            </div>

						<?php } ?>
                    </div>

				<?php }
				elseif ( $style == 'style2' ) {

					$classInfo = ! empty( $form ) ? 'col-sm-6 col-md-4' : '';
					$classForm = ! empty( $form ) ? 'col-sm-6 col-md-8' : ''; ?>

                    <div class="container no-padd">
                        <div class="row">
                            <div class="col-xs-12 <?php echo esc_attr( $classInfo ); ?>">
                                <div class="content-wrap">
									<?php if ( ! empty( $address_info ) ) { ?>
                                        <div class="content-item">
											<?php $address_info = (array) vc_param_group_parse_atts( $address_info ); ?>
                                            <h5 class="title">
                                                <?php esc_html_e( 'address', 'pao' ); ?>
                                            </h5>
											<?php foreach ( $address_info as $address ) {
												if ( ! empty( $address ) ) { ?>
                                                    <div class="address"><?php echo wp_kses_post( $address['address'] ); ?></div>
												<?php }
											} ?>
                                        </div>
									<?php }

									if ( ! empty( $content ) ) { ?>
                                        <div class="content-item">
                                            <h5 class="title">
                                                <?php esc_html_e( 'information', 'pao' ); ?>
                                            </h5>
                                            <div class="address"><?php echo wp_kses_post( $content ); ?></div>
                                        </div>
									<?php } ?>
                                </div>
                            </div>
                            <div class="col-xs-12 <?php echo esc_attr( $classForm ); ?>">
								<?php if ( ! empty( $form ) ) { ?>
                                    <div class="form <?php echo esc_attr($btn_style); ?>"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
				<?php }
				elseif ( $style == 'style3' ) { ?>
                    <div class="content-wrap">

                        <div class="content no-image">
							<?php if ( ! empty( $title ) ) { ?>
                                <h2 class="title-main"><?php echo wp_kses_post( $title ); ?></h2>
							<?php }
							if ( ! empty( $text ) ) { ?>
                                <div class="text"><?php echo wp_kses_post( $text ); ?></div>
							<?php }
							if ( ! empty( $form ) ) { ?>
                                <div class="form-wrap form <?php echo esc_attr($btn_style); ?>">
                                    <?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?>
                                </div>
							<?php } ?>
                        </div>
                    </div>
				<?php }
				elseif ( $style == 'style4' ) {
					if ( ! empty( $content ) || ! empty( $address_info ) || ! empty( $phone_info ) || ! empty( $email_info ) ) {
						$bottomClass = ( ! empty( $content ) && ( ! empty( $address_info ) || ! empty( $phone_info ) || ! empty( $email_info ) ) ) ? 'col-xs-12 col-sm-6' : 'col-xs-12'; ?>
                        <div class="additional-content-wrap">
                            <div class="container">
                                <div class="row">
									<?php if ( ! empty( $content ) ) { ?>
                                        <div class="text <?php echo esc_attr( $bottomClass ); ?>">
                                            <?php echo wp_kses_post(do_shortcode( $content )); ?>
                                        </div>
									<?php } ?>

                                    <div class="content-items <?php echo esc_attr( $bottomClass ); ?>">

										<?php if ( ! empty( $address_info ) ) { ?>

                                            <div class="content-item">

												<?php $address_info = (array) vc_param_group_parse_atts( $address_info ); ?>

                                                <h5 class="title"><?php echo esc_html__( 'address', 'pao' ); ?></h5>

                                                <?php foreach ( $address_info as $address ) {
													if ( ! empty( $address ) ) { ?>
                                                        <div class="address"><?php echo wp_kses_post( $address['address'] ); ?></div>
													<?php }
												} ?>

                                            </div>

										<?php }

										if ( ! empty( $phone_info ) ) { ?>

                                            <div class="content-item">

												<?php $phone_info = (array) vc_param_group_parse_atts( $phone_info ); ?>

                                                <h5 class="title"><?php echo esc_html__( 'phone', 'pao' ); ?></h5>

                                                <?php foreach ( $phone_info as $phone ) {
													if ( ! empty( $phone ) ) { ?>
                                                        <a href="tel:<?php echo esc_attr( $phone['phone'] ); ?>"
                                                           class="email"><?php echo wp_kses_post( $phone['phone'] ); ?></a>
													<?php }
												} ?>

                                            </div>

										<?php }

										if ( ! empty( $email_info ) ) { ?>

                                            <div class="content-item">

												<?php $email_info = (array) vc_param_group_parse_atts( $email_info ); ?>

                                                <h5 class="title"><?php echo esc_html__( 'email', 'pao' ); ?></h5>

                                                <?php foreach ( $email_info as $email ) {
													if ( ! empty( $email ) ) { ?>
                                                        <a href="mailto:<?php echo esc_attr( $email['email'] ); ?>"
                                                           class="email"><?php echo wp_kses_post( $email['email'] ); ?></a>
													<?php }
												} ?>

                                            </div>

										<?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
					<?php }
				}
				elseif( $style == 'style5' ){
				    if(!empty($items)){
					    $items = (array) vc_param_group_parse_atts( $items );

					    foreach( $items as $item ) { ?>

                            <div class="item-wrapper">
	                            <?php if(!empty($item['icon'])){
	                                $colors = !empty($item['icon_color']) ? 'style="color:'. $item['icon_color'] .'"' : ''; ?>
                                    <i class="<?php echo esc_attr( $item['icon'] ); ?>" <?php echo $colors; ?>></i>
	                            <?php }

	                            if(!empty($item['items_child'])){
                                  $items_child = (array) vc_param_group_parse_atts( $item['items_child'] ); ?>
                              <div class="flex-wrap">
                                <?php  foreach ($items_child as $info){ ?>

                                              <?php if(!empty($info['title'])){ ?>
                                                  <h5 class="title"><?php echo esc_html($info['title']); ?></h5>
                                              <?php }
                                              if(!empty($info['phone'])){ ?>
                                                  <a href="tel:<?php echo esc_attr($info['phone']); ?>"><?php echo esc_html($info['phone']); ?></a>
                                              <?php }
                                              if(!empty($info['email'])){ ?>
                                                  <a href="mailto:<?php echo esc_attr($info['email']); ?>"><?php echo esc_html($info['email']); ?></a>
                                              <?php }
                                              if(!empty($info['text'])){ ?>
                                                  <div class="text"><?php echo wp_kses_post($info['text']); ?></div>
                                              <?php } ?>

                                 <?php }
                                  } ?>
                            </div>
                          </div>
                        <?php

					    } // end foreach

                    }
                }
                elseif($style == 'style6' ){

	                $items_single = (array) vc_param_group_parse_atts( $items_single );

	                foreach( $items_single as $item ) { ?>

                        <div class="item-wrapper">
                            <?php if(!empty($item['title'])){ ?>
                                <h5 class="title"><?php echo esc_html($item['title']); ?></h5>
                            <?php }
                            if(!empty($item['phone'])){ ?>
                                <a href="tel:<?php echo esc_attr($item['phone']); ?>"><?php echo esc_html($item['phone']); ?></a>
                            <?php }
                            if(!empty($item['email'])){ ?>
                                <a href="mailto:<?php echo esc_attr($item['email']); ?>"><?php echo esc_html($item['email']); ?></a>
                            <?php } ?>
                        </div>
                    <?php

	                } // end foreach
                }
			    elseif($style == 'style7'){ ?>
				    <?php if ( ! empty( $title ) ) { ?>
                        <div class="title">
						    <?php echo wp_kses_post($title); ?>
                        </div>
				    <?php } ?>
				    <?php if ( ! empty( $text ) ) { ?>
                        <div class="text">
						    <?php echo wp_kses_post($text ); ?>
                        </div>
				    <?php } ?>
				    <?php if ( ! empty( $form ) ) { ?>
                        <div class="form <?php echo esc_attr($btn_style); ?>"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
				    <?php } ?>
                <?php }

                elseif ( $style == 'style8' || $style == 'style9') { ?>

                    <div class="maps-wrapper">
                        <?php if ( ! empty( $latitude ) && is_numeric( $latitude ) and ! empty( $longitude ) && is_numeric( $longitude ) ) { ?>
                            <div id="google-map" data-lat="<?php echo esc_attr( $latitude ); ?>"
                                 data-lng="<?php echo esc_attr( $longitude ); ?>" data-zoom="<?php echo esc_attr( $map_zoom ); ?>"
                                 data-marker="<?php echo esc_attr( $marker ); ?>"
                                 data-style="<?php echo esc_attr( $map_style ); ?>" data-json="<?php echo esc_attr( $script ); ?>"></div>
                        <?php } ?>
                        <div class="contact-form-wrap">
                            <?php if ( ! empty( $subtitle ) ) { ?>
                                <div class="subtitle">
                                    <?php echo wp_kses_post($subtitle); ?>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $title ) ) { ?>
                                <div class="title">
                                    <?php echo wp_kses_post($title ); ?>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $form ) ) { ?>
                                <div class="form"><?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form ) . '"]' ); ?></div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php ?>

                <?php echo $script; ?>

                <?php } ?>

            </div>

			<?php
			// end output
			return ob_get_clean();
		}
	}
}

