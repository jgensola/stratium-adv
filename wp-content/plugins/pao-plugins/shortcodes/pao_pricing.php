<?php
//Pricing shortcode


if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/pricing/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'                    => esc_html__( 'Pricing', 'js_composer' ),
			'base'                    => 'vc_pricing',
			'content_element'         => true,
			'show_settings_on_create' => true,
			'description'             => esc_html__( 'Section with pricing blocks', 'js_composer' ),
			'params'                  => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Pricing style', 'js_composer' ),
                    'description'=> __( 'Please select pricing style', 'js_composer' ),
                    'param_name' => 'pricing_style',
                    'value'      => array(
                        array(
                            'value' => 'classic',
                            'label' => esc_html__( 'Classic style', 'js_composer' ),
                            'image' => $url . 'classic_p.jpg'
                        ),
                        array(
                            'value' => 'modern',
                            'label' => esc_html__( 'Modern style', 'js_composer' ),
                            'image' => $url . 'modern_p.jpg'
                        ),
                    )
                ),
                array(
                    'type'       => 'checkbox',
                    'description' => __( 'Do you want to make this item active?', 'js_composer' ),
                    'heading'    => __( 'Active Pricing Section', 'js_composer' ),
                    'param_name' => 'active_pricing',
                    'value'      => false,
                ),
				array(
					'param_name'  => 'title',
					'type'        => 'textfield',
                    'description' => esc_html__( 'Please add your title', 'js_composer' ),
					'heading'     => 'Title',
					'value'       => '',
				),
                array(
                    'param_name'  => 'currency',
                    'type'        => 'textfield',
                    'description' => esc_html__( 'Please add currency', 'js_composer' ),
                    'heading'     => 'Currency',
                    'value'       => '',
                ),
				array(
					'param_name'  => 'price',
					'type'        => 'textfield',
                    'description' => esc_html__( 'Please add your price', 'js_composer' ),
					'heading'     => 'Price',
					'value'       => '',
				),
				array(
					'param_name'  => 'subtitle',
					'type'        => 'textfield',
                    'description' => esc_html__( 'Please add your subtitle', 'js_composer' ),
					'heading'     => 'Subtitle',
					'value'       => '',
				),
				array(
					'type'       => 'vc_link',
					'heading'    => __( 'Button', 'js_composer' ),
                    'description' => esc_html__( 'Please specify link for your button', 'js_composer' ),
					'param_name' => 'button'
				),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'description' => __( 'Please select button style', 'js_composer' ),
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
                    )
                ),
				array(
					'param_name'  => 'content',
					'type'        => 'textarea_html',
                    'description' => esc_html__( 'Please add simple text', 'js_composer' ),
					'heading'     => 'Content',
					'value'       => '',
                    'dependency' => array( 'element' => 'pricing_style', 'value' => array( 'classic' ) ),
				),
                array(
                    'type' => 'param_group',
                    'heading' => __( 'Items for pricing plan', 'js_composer' ),
                    'description'=> __( 'Please add more information for items', 'js_composer' ),
                    'param_name' => 'items_pricing',
                    'value' => '',
                    'params' => array(
                        array(
                            'type'       => 'textfield',
                            'heading'    => __( 'Text', 'js_composer' ),
                            'description'=> __( 'Please add text', 'js_composer' ),
                            'param_name' => 'text',
                        ),
                        array(
                            'type'       => 'checkbox',
                            'heading'    => __( 'Does this option refer to the tariff plan?', 'js_composer' ),
                            'param_name' => 'active_el',
                            'value'      => false,
                        ),
                    ),
                    'dependency' => array( 'element' => 'pricing_style', 'value' => 'modern' ),
                ),
				array(
					'type'        => 'textfield',
					'heading'     => 'Extra class name',
					'param_name'  => 'el_class',
					'description' => 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.',
					'value'       => '',
				),
				array(
					'type'       => 'css_editor',
					'heading'    => 'CSS box',
					'param_name' => 'css',
					'group'      => 'Design options',
				),
			)
			//end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_vc_pricing extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
//				'bg_color'    => '',
                'pricing_style'      => 'classic',
				'active_pricing'     => '',
				'items_pricing'      => array(),
				'title'              => '',
				'currency'           => '',
				'price'              => '',
				'subtitle'           => '',
				'button'             => '',
				'btn_style'          => 'a-btn-1',
				'el_class'           => '',
				'css'                => '',

			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pao_pricing-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_pricing-css";
			}
			$this->enqueueCss();

			/* get custum css as class*/
			// el class
			$css_classes = array(
				$this->getExtraClass( $el_class )
			);

			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts );

			// custum css
			$css_class .= vc_shortcode_custom_css_class( $css, ' ' );

			// custum class

            $pricing_style = ( isset( $pricing_style ) && !empty ( $pricing_style ) ) ? $pricing_style : 'classic';

			$css_class .= ( ! empty( $css_class ) ) ? ' ' . $css_class : '';

			$btn_style = isset( $btn_style ) ? $btn_style : 'a-btn';

            $active_pricing    = ! empty( $active_pricing ) && ( $active_pricing == true ) ? 'active' : '';

			// start output
			ob_start(); ?>

            <div class="pricing-item <?php echo esc_attr( $css_class . ' ' . $active_pricing . ' ' . $pricing_style ); ?>" onclick="">
                <div class="pricing-info">
					<?php if ( ! empty( $title ) ) : ?>
                        <h4 class="title">
							<?php echo esc_html( $title ); ?>
                        </h4>
					<?php endif;

					if ( ! empty( $price ) && ! empty( $currency ) ) { ?>
                        <div class="price-wrap">
                            <span class="currency"><?php echo esc_attr( $currency ); ?></span>
                            <span class="price"><?php echo esc_attr( $price ); ?></span>
                        </div>
					<?php }

					if ( ! empty( $subtitle ) ) : ?>
                        <h3 class="subtitle">
							<?php echo esc_html( $subtitle ); ?>
                        </h3>
					<?php endif; ?>

                    <?php if ( $pricing_style == 'classic' ) { ?>
                        <div class="pricing-list">
                            <p><?php echo wp_kses_post( $content ); ?></p>
                        </div>
                    <?php } ?>

                    <?php if ( $pricing_style == 'modern' && !empty ( $items_pricing ) ) {
                        $items_pricing = (array) vc_param_group_parse_atts( $items_pricing ); ?>
                        <ul class="list-items">
                            <?php
                            foreach ($items_pricing as $item){
                                $active_el = ( !empty ( $item['active_el'] ) ) ? 'active-item' : '';
                                if ( !empty( $item['text'] ) ) { ?>
                                    <li class="item <?php echo esc_attr( $active_el ); ?>"><?php echo wp_kses_post($item['text']); ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    <?php } ?>

					<?php

					if ( ! empty( $button ) ) {
						$url = vc_build_link( $button );
					} else {
						$url['url']    = '#';
						$url['title']  = 'title';
						$url['target'] = '_self';
					}

					if ( ! empty( $button ) ) { ?>
                        <div class="pricing-btn">
                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                               class="<?php echo esc_attr( $btn_style ); ?>"
                               target="<?php echo esc_attr( $url['target'] ); ?>">
								<?php echo esc_html( $url['title'] ); ?>
                            </a>
                        </div>
					<?php } ?>
                </div>
            </div>

			<?php
			// end output
			return ob_get_clean();
		}
	}
}
