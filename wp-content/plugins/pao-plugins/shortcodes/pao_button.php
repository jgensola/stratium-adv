<?php

//Button shortcode

if ( function_exists( 'vc_map' ) ) {
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
    vc_map(
        array(
            'name'            => 'Button',
            'base'            => 'button_shortcode',
            'description' => __( 'Section with button', 'js_composer' ),
            'content_element' => true,
            'params'          => array(
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Button/link', 'js_composer' ),
                    'description' => __( 'Please add link & name for your button', 'js_composer' ),
                    'param_name' => 'button',
                    'dependency' => array( 'element' => 'style', 'value' => array( 'default', 'simple' ) )
                ),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button/link style', 'js_composer' ),
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
                            'image' => $url_btn . 'a-btn-9.jpg'
                        ),
                        array(
                            'value' => 'a-btn-10',
                            'label' => esc_html__( 'Gradient button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-10.jpg'
                        ),
                    ),
                ),
                array(
                    'type'       => 'css_editor',
                    'heading'    => __( 'CSS box', 'js_composer' ),
                    'param_name' => 'css',
                    'group'      => __( 'Design options', 'js_composer' )
                ),
            )
        )
    );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
    /* Frontend Output Shortcode */

    class WPBakeryShortCode_button_shortcode extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {
            /* get all params */
            extract( shortcode_atts( array(
                'css'       => '',
                'button'    => '',
                'btn_style' => 'a-btn-1',
            ), $atts ) );

            $class = vc_shortcode_custom_css_class( $css, ' ' );

            ob_start(); ?>

            <div class="<?php echo esc_attr( $class ); ?>">
                <?php if ( ! empty( $button ) ) {
                    $url = vc_build_link( $button ); ?>
                    <div class="btn-wrap">
                        <a href="<?php echo esc_attr( $url['url'] ); ?>"
                           class="<?php echo esc_attr( $btn_style ); ?>"
                           target="<?php echo esc_attr( $url['target'] ); ?>">
                            <?php echo esc_html( $url['title'] ); ?>
                        </a>
                    </div>
                <?php  } ?>
            </div>

            <?php
            return ob_get_clean();
        }
    }
}