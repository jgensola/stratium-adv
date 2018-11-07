<?php

//Services shortcode


if ( function_exists( 'vc_map' ) ) {
    $url     = EF_URL . '/admin/assets/images/shortcodes_images/services/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
    vc_map(
        array(
            'name'        => __( 'Services', 'js_composer' ),
            'base'        => 'pao_services',
            'category'    => __( 'Content', 'js_composer' ),
            'description' => __( 'Block with image and text', 'js_composer' ),
            'params'      => array(
                array(
                    'type'        => 'select_preview',
                    'heading'     => __( 'Style', 'js_composer' ),
                    'description' => esc_html__( 'Please select main style', 'js_composer' ),
                    'param_name'  => 'style',
                    'value'       => array(
                        array(
                            'value' => 'default',
                            'label' => esc_html__( 'Modern', 'js_composer' ),
                            'image' => $url . 'default.jpg'
                        ),
                        array(
                            'value' => 'center',
                            'label' => esc_html__( 'Center', 'js_composer' ),
                            'image' => $url . 'center.jpg'
                        ),
                        array(
                            'value' => 'accordion',
                            'label' => esc_html__( 'Accordion', 'js_composer' ),
                            'image' => $url . 'accordeon.jpg'
                        ),
                        array(
                            'value' => 'classic_slider',
                            'label' => esc_html__( 'Classic Slider', 'js_composer' ),
                            'image' => $url . 'classic-slider.jpg'
                        ),
                    ),
                ),
                array(
                    'type'        => 'dropdown',
                    'heading'     => __( 'Icon type', 'js_composer' ),
                    'description' => esc_html__( 'Please select icon type', 'js_composer' ),
                    'param_name'  => 'icon_type',
                    'value'       => array(
                        'Font icon'   => 'font_icon',
                        'Custom icon' => 'custom_icon',
                    ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'default', 'center', 'left' ) )
                ),
                array(
                    'type'        => 'iconpicker',
                    'heading'     => __( 'Font Icon', 'js_composer' ),
                    'param_name'  => 'icon',
                    'value'       => 'icon-basic-accelerator',
                    'settings'    => array(
                        'emptyIcon'    => false,
                        'type'         => 'info',
                        'source'       => pao_simple_icons(),
                        'iconsPerPage' => 4000,
                    ),
                    'description' => __( 'Select icon', 'js_composer' ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'default', 'center', 'left' ) )
                ),
                array(
                    'type'        => 'colorpicker',
                    'heading'     => 'Font Icon color',
                    'description' => esc_html__( 'Please select color for icon', 'js_composer' ),
                    'param_name'  => 'icon_color',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'default', 'center', 'left' ) )
                ),
                array(
                    'type'        => 'attach_image',
                    'heading'     => __( 'Custom icon', 'js_composer' ),
                    'description' => esc_html__( 'Please add custom icon', 'js_composer' ),
                    'param_name'  => 'custom_icon',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'default', 'center', 'left' ) )
                ),
                array(
                    'type'        => 'attach_image',
                    'heading'     => __( 'Custom icon for hover', 'js_composer' ),
                    'description' => esc_html__( 'Please add custom icon for hover', 'js_composer' ),
                    'param_name'  => 'custom_icon_hover',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'default' ) )
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Title', 'js_composer' ),
                    'description' => esc_html__( 'Please add your title', 'js_composer' ),
                    'param_name'  => 'title',
                    'dependency'  => array(
                        'element'            => 'style',
                        'value_not_equal_to' => array( 'slider', 'classic_slider' )
                    ),
                ),
                array(
                    'type'        => 'attach_image',
                    'heading'     => __( 'Image', 'js_composer' ),
                    'description' => esc_html__( 'Please add image', 'js_composer' ),
                    'param_name'  => 'image',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'classic', 'accordion' ) )
                ),
                array(
                    'type'        => 'textarea',
                    'heading'     => __( 'Text', 'js_composer' ),
                    'description' => esc_html__( 'Please add simple text', 'js_composer' ),
                    'param_name'  => 'text',
                    'dependency'  => array(
                        'element'            => 'style',
                        'value_not_equal_to' => array( 'slider', 'accordion', 'classic_slider' )
                    ),
                ),
                array(
                    'type'        => 'param_group',
                    'heading'     => __( 'Items', 'js_composer' ),
                    'param_name'  => 'items_accordion',
                    'description' => esc_html__( 'Please add more information about item', 'js_composer' ),
                    'value'       => '',
                    'params'      => array(
                        array(
                            'type'        => 'textfield',
                            'heading'     => __( 'Number', 'js_composer' ),
                            'description' => esc_html__( 'Please add number', 'js_composer' ),
                            'param_name'  => 'number',
                        ),
                        array(
                            'type'        => 'textfield',
                            'heading'     => __( 'Title', 'js_composer' ),
                            'description' => esc_html__( 'Please add title', 'js_composer' ),
                            'param_name'  => 'title',
                        ),
                        array(
                            'type'        => 'textarea',
                            'heading'     => __( 'Text', 'js_composer' ),
                            'description' => esc_html__( 'Please add simole text', 'js_composer' ),
                            'param_name'  => 'text',
                        ),
                    ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'accordion' ) ),
                ),
                array(
                    'type'        => 'param_group',
                    'heading'     => __( 'Items', 'js_composer' ),
                    'description' => esc_html__( 'Please add more information about item', 'js_composer' ),
                    'param_name'  => 'items',
                    'value'       => '',
                    'params'      => array(

                        array(
                            'type'        => 'dropdown',
                            'heading'     => __( 'Icon type', 'js_composer' ),
                            'description' => esc_html__( 'Please select icon type', 'js_composer' ),
                            'param_name'  => 'icon_type_item',
                            'value'       => array(
                                'Font icon'   => 'font_icon',
                                'Custom icon' => 'custom_icon',
                            ),
                        ),

                        array(
                            'type'        => 'iconpicker',
                            'heading'     => 'Select font icon',
                            'param_name'  => 'icon',
                            'value'       => 'icon-basic-accelerator',
                            'settings'    => array(
                                'emptyIcon'    => false,
                                'type'         => 'info',
                                'source'       => pao_simple_icons(),
                                'iconsPerPage' => 4000,
                            ),
                            'description' => __( 'Select icon', 'js_composer' ),
                            'dependency'  => array( 'element' => 'icon_type_item', 'value' => array( 'font_icon' ) )
                        ),
                        array(
                            'type'        => 'attach_image',
                            'heading'     => __( 'Custom icon', 'js_composer' ),
                            'description' => esc_html__( 'Please add custom icon', 'js_composer' ),
                            'param_name'  => 'custom_icon',
                            'dependency'  => array( 'element' => 'icon_type_item', 'value' => array( 'custom_icon' ) )
                        ),
                        array(
                            'type'        => 'attach_image',
                            'heading'     => __( 'Custom icon for hover', 'js_composer' ),
                            'description' => esc_html__( 'Please add custom icon for hover', 'js_composer' ),
                            'param_name'  => 'custom_icon_hover',
                            'dependency'  => array( 'element' => 'icon_type_item', 'value' => array( 'custom_icon' ) )
                        ),
                        array(
                            'type'        => 'textfield',
                            'heading'     => __( 'Title', 'js_composer' ),
                            'description' => esc_html__( 'Please add title', 'js_composer' ),
                            'param_name'  => 'title',
                        ),
                        array(
                            'type'        => 'textarea',
                            'heading'     => __( 'Text', 'js_composer' ),
                            'description' => esc_html__( 'Please add simple text', 'js_composer' ),
                            'param_name'  => 'text'
                        ),
                    ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider' ) ),
                ),
                array(
                    'type'        => 'param_group',
                    'heading'     => __( 'Items', 'js_composer' ),
                    'description' => esc_html__( 'Please add more information about item', 'js_composer' ),
                    'param_name'  => 'items_classic',
                    'value'       => '',
                    'params'      => array(
                        array(
                            'type'        => 'dropdown',
                            'heading'     => __( 'Icon type', 'js_composer' ),
                            'description' => esc_html__( 'Please select icon type', 'js_composer' ),
                            'param_name'  => 'icon_type_item',
                            'value'       => array(
                                'Font icon'   => 'font_icon',
                                'Custom icon' => 'custom_icon',
                            ),
                        ),
                        array(
                            'type'        => 'iconpicker',
                            'heading'     => 'Select font icon',
                            'param_name'  => 'icon',
                            'value'       => 'icon-basic-accelerator',
                            'settings'    => array(
                                'emptyIcon'    => false,
                                'type'         => 'info',
                                'source'       => pao_simple_icons(),
                                'iconsPerPage' => 4000,
                            ),
                            'description' => __( 'Select icon', 'js_composer' ),
                            'dependency'  => array( 'element' => 'icon_type_item', 'value' => array( 'font_icon' ) ),
                        ),
                        array(
                            'type'        => 'attach_image',
                            'heading'     => __( 'Custom icon', 'js_composer' ),
                            'description' => esc_html__( 'Please add custom icon', 'js_composer' ),
                            'param_name'  => 'custom_icon',
                            'dependency'  => array( 'element' => 'icon_type_item', 'value' => array( 'custom_icon' ) )
                        ),
                        array(
                            'type'        => 'textfield',
                            'heading'     => __( 'Title', 'js_composer' ),
                            'description' => esc_html__( 'Please add title', 'js_composer' ),
                            'param_name'  => 'title',
                        ),
                        array(
                            'type'        => 'textarea',
                            'heading'     => __( 'Text', 'js_composer' ),
                            'description' => esc_html__( 'Please add simple text', 'js_composer' ),
                            'param_name'  => 'text'
                        ),
                        array(
                            'type'        => 'vc_link',
                            'heading'     => __( 'Button', 'js_composer' ),
                            'description' => esc_html__( 'Please add link for button', 'js_composer' ),
                            'param_name'  => 'link',
                        ),
                    ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'classic_slider' ) ),
                ),
//                array(
//                    'type'        => 'select_preview',
//                    'heading'     => __( 'Button style', 'js_composer' ),
//                    'description' => __( 'Please select button style', 'js_composer' ),
//                    'param_name'  => 'btn_style',
//                    'dependency'  => array( 'element' => 'style', 'value' => array( 'classic_slider' ) ),
//                    'value'       => array(
//                        array(
//                            'value' => 'a-btn-1',
//                            'label' => esc_html__( 'Default button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-1.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-2',
//                            'label' => esc_html__( 'Default button with shadow', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-2.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-3',
//                            'label' => esc_html__( 'Default transparent button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-3.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-4',
//                            'label' => esc_html__( 'Dark button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-4.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-5',
//                            'label' => esc_html__( 'Dark button with shadow', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-5.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-6',
//                            'label' => esc_html__( 'Dark transparent button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-6.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-7',
//                            'label' => esc_html__( 'White button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-7.png'
//                        ),
//                        array(
//                            'value' => 'a-btn-8',
//                            'label' => esc_html__( 'White transparent button', 'js_composer' ),
//                            'image' => $url_btn . 'a-btn-8.png'
//                        ),
//                    )
//                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Autoplay (sec)', 'js_composer' ),
                    'param_name'  => 'autoplay',
                    'value'       => '0',
                    'description' => __( '0 - off autoplay.', 'js_composer' ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
                    'param_name'  => 'speed',
                    'value'       => '1500',
                    'description' => __( 'Speed Animation. Default 500 milliseconds', 'js_composer' ),
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'checkbox',
                    'heading'     => __( 'Loop', 'js_composer' ),
                    'description' => esc_html__( 'Enable loop options?', 'js_composer' ),
                    'param_name'  => 'loop',
                    'value'       => '1',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Count of slides for large desktop', 'js_composer' ),
                    'description' => __( 'Only numbers. By default is 4.', 'js_composer' ),
                    'param_name'  => 'lg_count',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Count of slides for middle desktop', 'js_composer' ),
                    'description' => __( 'Only numbers. By default is 3.', 'js_composer' ),
                    'param_name'  => 'md_count',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Count of slides for tablet', 'js_composer' ),
                    'description' => __( 'Only numbers. By default is 2.', 'js_composer' ),
                    'param_name'  => 'sm_count',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
                array(
                    'type'        => 'textfield',
                    'heading'     => __( 'Count of slides for mobile', 'js_composer' ),
                    'description' => __( 'Only numbers. By default is 1.', 'js_composer' ),
                    'param_name'  => 'xs_count',
                    'dependency'  => array( 'element' => 'style', 'value' => array( 'slider', 'classic_slider' ) ),
                ),
            )
        )
    );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
    /* Frontend Output Shortcode */

    class WPBakeryShortCode_pao_services extends WPBakeryShortCode {
        protected function content( $atts, $content = null ) {

            extract( shortcode_atts( array(
                'title'            => '',
                'btn_style'        => 'a-btn-1',
                'icon'             => 'icon-basic-accelerator',
                'icon_type'        => 'font_icon',
                'items'            => '',
                'items_classic'    => '',
                'items_accordion'  => '',
                'custom_icon'  => '',
                'custom_icon_hover'  => '',
                'lg_count'         => '4',
                'md_count'         => '3',
                'sm_count'         => '2',
                'xs_count'         => '1',
                'autoplay'         => '',
                'speed'            => '',
                'loop'             => '',
                'icon_color'       => '',
                'bg_image'         => '',
                'style'            => 'default',
                'button'           => '',
                'image'            => '',
                'text'             => ''
            ), $atts ) );


            // include needed stylesheets
            if ( ! in_array( "pao_services-css", self::$css_scripts ) ) {
                self::$css_scripts[] = "pao_services-css";
            }
            $this->enqueueCss();


            if ( ! in_array( "pao_services", self::$js_scripts ) ) {
                self::$js_scripts[] = "pao_services";
            }
            $this->enqueueJs();


            $url              = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';
            $img_class        = 's-img-switch';
            $icon_color       = ! empty( $icon_color ) ? $icon_color : '#fd8558';

            $autoplay = is_numeric( $autoplay ) ? $autoplay * 1000 : 0;
            $speed    = is_numeric( $speed ) ? $speed : '500';
            $loop     = ! empty( $loop ) ? '1' : '0';

            $lg_count = ! empty( $lg_count ) && is_numeric( $lg_count ) ? $lg_count : '4';
            $md_count = ! empty( $md_count ) && is_numeric( $md_count ) ? $md_count : '3';
            $sm_count = ! empty( $sm_count ) && is_numeric( $sm_count ) ? $sm_count : '2';
            $xs_count = ! empty( $xs_count ) && is_numeric( $xs_count ) ? $xs_count : '1';

            $icon_type = isset($icon_type) ? $icon_type : 'font_icon';
            $custom_icon  = ( isset( $custom_icon ) && ! empty( $custom_icon ) && is_numeric( $custom_icon ) ) ? wp_get_attachment_url( $custom_icon ) : '';
            $custom_icon_hover  = ( $style == 'default' && isset( $custom_icon_hover ) && ! empty( $custom_icon_hover ) && is_numeric( $custom_icon_hover ) ) ? wp_get_attachment_url( $custom_icon_hover ) : $custom_icon;

            ob_start(); ?>

            <div class="services <?php echo esc_attr( $style ); ?>">

                <?php
                if ( $style == 'slider' ) {
                    if ( ! empty( $items ) ) {
                        $count = 1;

                        $items = (array) vc_param_group_parse_atts( $items ); ?>

                        <div class="swiper3-container"
                             data-mouse="0" data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-pagination-type="bullets"
                             data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
                             data-center="0" data-space="0" data-responsive="responsive"
                             data-add-slides="<?php echo esc_attr( $lg_count ); ?>"
                             data-lg-slides="<?php echo esc_attr( $lg_count ); ?>"
                             data-md-slides="<?php echo esc_attr( $md_count ); ?>"
                             data-sm-slides="<?php echo esc_attr( $sm_count ); ?>"
                             data-xs-slides="<?php echo esc_attr( $xs_count ); ?>">

                            <div class="swiper3-wrapper">

                                <?php foreach ( $items as $item ) {
                                    if ( $count % 2 == 0 ) {
                                        $classNumber = 'even';
                                    } else {
                                        $classNumber = 'odd';
                                    }

                                    $icon_type_item = isset($item['icon_type_item']) && !empty($item['icon_type_item']) ? $item['icon_type_item'] : 'font_icon';
                                    $custom_icon_item = isset($item['custom_icon']) && !empty($item['custom_icon']) && is_numeric( $item['custom_icon'] )  ? wp_get_attachment_url( $item['custom_icon'] ) : '';
                                    $custom_icon_item_hover = isset($item['custom_icon_hover']) && !empty($item['custom_icon_hover']) && is_numeric($item['custom_icon_hover']) ? wp_get_attachment_url( $item['custom_icon_hover']) : $custom_icon_item;
                                    $number = $count < 10 ? '0' . $count : $count; ?>

                                    <div class="swiper3-slide">
                                        <div class="number <?php echo esc_attr( $classNumber ); ?>">
                                            <span><?php echo esc_html( $number ); ?></span>
                                            <img src="<?php echo esc_url( EF_URL . '/shortcodes/assets/images/arrow.png' ); ?>"
                                                 alt="" class="number-img">
                                        </div>
                                        <div class="content-slide">
                                            <?php if ($icon_type_item == 'font_icon' && ! empty( $item['icon'] ) ) { ?>
                                                <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
                                            <?php }elseif($icon_type_item == 'custom_icon' && ! empty( $custom_icon_item ) ){ ?>
                                                <img src="<?php echo esc_url($custom_icon_item); ?>" alt="" class="custom-icon">
                                                <img src="<?php echo esc_url($custom_icon_item_hover); ?>" alt="" class="custom-icon-hover">
                                            <?php }
                                            if ( ! empty( $item['title'] ) ) { ?>
                                                <h5 class="title"><?php echo esc_html( $item['title'] ); ?></h5>
                                            <?php }
                                            if ( ! empty( $item['text'] ) ) { ?>
                                                <div class="text"><?php echo wp_kses_post( $item['text'] ); ?></div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <?php
                                    $count ++;
                                } // end foreach
                                ?>

                            </div>
                        </div>
                        <div class="swiper3-pagination"></div>
                    <?php }
                }
                elseif ( $style == 'classic_slider' ) {
                    if ( ! empty( $items_classic ) ) {

                        $items_classic = (array) vc_param_group_parse_atts( $items_classic ); ?>

                        <div class="swiper3-container"
                             data-mouse="1" data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-pagination-type="fraction"
                             data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
                             data-center="0" data-space="30" data-responsive="responsive"
                             data-add-slides="<?php echo esc_attr( $lg_count ); ?>"
                             data-lg-slides="<?php echo esc_attr( $lg_count ); ?>"
                             data-md-slides="<?php echo esc_attr( $md_count ); ?>"
                             data-sm-slides="<?php echo esc_attr( $sm_count ); ?>"
                             data-xs-slides="<?php echo esc_attr( $xs_count ); ?>">

                            <div class="swiper3-wrapper">

                                <?php foreach ( $items_classic as $item ) {
                                    $icon_type_item = isset($item['icon_type_item']) && !empty($item['icon_type_item']) ? $item['icon_type_item'] : 'font_icon';
                                    $custom_icon_item = isset($item['custom_icon']) && !empty($item['custom_icon']) && is_numeric( $item['custom_icon'] )  ? wp_get_attachment_url( $item['custom_icon'] ) : ''; ?>

                                    <div class="swiper3-slide">
                                        <div class="content-slide">
                                            <?php if ( $icon_type_item == 'font_icon' && ! empty( $item['icon'] ) ) { ?>
                                                <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
                                            <?php }elseif($icon_type_item == 'custom_icon' && ! empty( $custom_icon_item ) ){ ?>
                                                <img src="<?php echo esc_url($custom_icon_item); ?>" alt="" class="custom-icon">
                                            <?php }
                                            if ( ! empty( $item['title'] ) ) { ?>
                                                <h5 class="title"><?php echo esc_html( $item['title'] ); ?></h5>
                                            <?php }
                                            if ( ! empty( $item['text'] ) ) { ?>
                                                <div class="text"><?php echo wp_kses_post( $item['text'] ); ?></div>
                                            <?php }

                                            if ( ! empty( $item['link'] ) ) {

                                                $link = vc_build_link( $item['link'] );
                                            } else {
                                                $link['url']    = '#';
                                                $link['title']  = 'title';
                                                $link['target'] = '_self';
                                            } ?>
                                            <div class="button-wrap">
                                                <a href="<?php echo esc_attr( $link['url'] ); ?>"
                                                   target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                                            </div>


                                        </div>
                                    </div>
                                    <?php
                                } // end foreach
                                ?>

                            </div>
                        </div>
                        <div class="swiper3-pagination"></div>
                    <?php }
                } elseif ( $style == 'accordion' ) {
                    if ( ! empty( $url ) ) { ?>
                        <div class="img-wrap">
                            <?php echo pao_the_lazy_load_flter( $url,
                                array(
                                    'class' => $img_class,
                                    'alt'   => ''
                                )
                            ); ?>
                        </div>
                    <?php } ?>
                    <div class="accordeon-wrap">
                        <div class="main-title"><?php echo esc_html( $title ); ?></div>

                        <?php if ( ! empty( $items_accordion ) ) {
                            $items_accordion = (array) vc_param_group_parse_atts( $items_accordion ); ?>
                            <ul class="accordeon">
                                <?php

                                $counter = 1;
                                foreach ( $items_accordion as $item ) {
                                    $active      = $counter === 1 ? 'is-show' : '';
                                    $active_icon = $counter === 1 ? 'ion-minus' : 'ion-plus'; ?>
                                    <li class="">
                                        <a href="" class="toggle">
                                            <div class="inner-wrap">
                                                <?php if ( ! empty( $item['number'] ) ) { ?>
                                                    <div class="number"><?php echo esc_html( $item['number'] ); ?></div>
                                                <?php }

                                                if ( ! empty( $item['title'] ) ) { ?>
                                                    <div class="title"><?php echo esc_html( $item['title'] ); ?></div>
                                                <?php } ?>
                                            </div>
                                            <i class="<?php echo esc_attr( $active_icon ); ?>"></i>
                                        </a>
                                        <ul class="list-drop <?php echo esc_attr( $active ); ?>">
                                            <li>
                                                <?php if ( ! empty( $item['text'] ) ) { ?>
                                                    <div class="text"><?php echo wp_kses_post( $item['text'] ); ?></div>
                                                <?php } ?>
                                            </li>
                                        </ul>

                                    </li>
                                    <?php
                                    $counter ++;
                                } ?>
                            </ul>
                        <?php } ?>
                    </div>

                <?php }
                else {
                    if ( ! empty( $url ) ) { ?>
                        <div class="img-wrap">
                            <?php echo pao_the_lazy_load_flter( $url,
                                array(
                                    'class' => $img_class,
                                    'alt'   => ''
                                )
                            ); ?>
                        </div>
                    <?php }

                    $button_class = ( empty( $url ) && empty( $title ) && empty( $content ) && empty( $text ) ) ? 'no-content-button' : ""; ?>

                    <div class="content <?php echo esc_attr( $button_class ); ?>">
                        <?php

                        if ( ! empty( $icon ) && $icon_type == 'font_icon' && ( $style == 'default' || $style == 'center' || $style == 'left' ) ) { ?>
                            <i class="<?php echo esc_attr( $icon ); ?>" style="color:<?php echo esc_attr( $icon_color ); ?>">
                                <span style="background-color:<?php echo esc_attr( $icon_color ); ?>"></span>
                            </i>
                        <?php }elseif($icon_type == 'custom_icon' && !empty($custom_icon) && ( $style == 'default' || $style == 'center' || $style == 'left' ) ){ ?>
                            <img src="<?php echo esc_url($custom_icon); ?>" alt="" class="custom-icon">
                            <img src="<?php echo esc_url($custom_icon_hover); ?>" alt="" class="custom-icon-hover">
                        <?php } ?>

                        <?php if ( ! empty( $title ) ) { ?>
                            <h4 class="title"><?php echo esc_html( $title ); ?></h4>
                        <?php }

                        if ( ! empty( $text ) ) { ?>
                            <div class="text"><?php echo wp_kses_post( $text ); ?></div>
                        <?php }

                        if ( isset( $button ) && ! empty( $button ) ) {
                            if ( ! empty( $button ) ) {
                                $url_button = vc_build_link( $button );
                            } else {
                                $url_button['url']    = '#';
                                $url_button['title']  = 'title';
                                $url_button['target'] = '_self';
                            }

                            if ( ! empty( $button ) ) { ?>
                                <div class="text-center">
                                    <a href="<?php echo esc_attr( $url_button['url'] ); ?>" class="a-btn-1"
                                       target="<?php echo esc_attr( $url_button['target'] ); ?>">
                                        <?php echo esc_html( $url_button['title'] ); ?>
                                    </a>
                                </div>
                            <?php }
                        } ?>
                    </div>
                <?php } ?>
            </div>

            <?php

            return ob_get_clean();
        }
    }
}
