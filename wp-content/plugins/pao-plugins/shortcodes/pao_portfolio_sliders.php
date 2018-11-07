<?php

//Portfolio Slider shortcode

if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/portfolio_slider/';
    $url_btn = EF_URL . '/admin/assets/images/shortcodes_images/button/';
	vc_map(
		array(
			'name'     => __( 'Portfolio Sliders', 'js_composer' ),
			'base'     => 'pao_portfolio_sliders',
			'description' => __( 'Slider with portfolio items', 'js_composer' ),
			'category' => __( 'Content', 'js_composer' ),
			'params'   => array(
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Style', 'js_composer' ),
                    'param_name' => 'style',
                    'description'=> __( 'Please select slider style', 'js_composer' ),
                    'value'      => array(
	                    array(
		                    'value' => 'filter_slider',
		                    'label' => esc_html__( 'Slider with filter', 'js_composer' ),
		                    'image' => $url . 'filter_slider.jpg'
	                    ),
                    ),
                ),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Title', 'js_composer' ),
					'description' => __( 'Please add your title', 'js_composer' ),
					'param_name' => 'title',
					'dependency' => array( 'element' => 'style', 'value' => 'filter_slider' )
				),
				array(
					'type'       => 'dropdown',
					'heading'    => 'Image original size',
					'param_name' => 'image_original_size',
					'description'=> __( 'Please select image size', 'js_composer' ),
					'value'      => array_merge( array( 'full' ), get_intermediate_image_sizes() )
				),
				array(
					'type'        => 'vc_efa_chosen',
					'heading'     => __( 'Select Categories', 'js_composer' ),
					'description'=> __( 'Please select the categories', 'js_composer' ),
					'param_name'  => 'cats',
					'placeholder' => __( 'Select category', 'js_composer' ),
					'value'       => pao_element_values( 'categories', array(
						'sort_order' => 'ASC',
						'taxonomy'   => 'portfolio-category',
						'hide_empty' => false,
					) ),
					'std'         => '',
				),
				array(
					'type'        => 'dropdown',
					'heading'     => __( 'Order by', 'js_composer' ),
					'param_name'  => 'orderby',
					'value'       => array(
						'',
						__( 'Date', 'js_composer' )          => 'date',
						__( 'ID', 'js_composer' )            => 'ID',
						__( 'Author', 'js_composer' )        => 'author',
						__( 'Title', 'js_composer' )         => 'title',
						__( 'Modified', 'js_composer' )      => 'modified',
						__( 'Random', 'js_composer' )        => 'rand',
						__( 'Comment count', 'js_composer' ) => 'comment_count'
					),
					'description' => sprintf( __( 'Select how to sort retrieved posts. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
				),
				array(
					'type'        => 'dropdown',
					'heading'     => __( 'Sort order', 'js_composer' ),
					'param_name'  => 'order',
					'value'       => array(
						__( 'Descending', 'js_composer' ) => 'DESC',
						__( 'Ascending', 'js_composer' )  => 'ASC',
					),
					'description' => sprintf( __( 'Select ascending or descending order. More at %s.', 'js_composer' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
				),
				array(
					'type'       => 'checkbox',
					'heading'    => esc_html__( 'Enable autoplay?', 'js_composer' ),
					'description'=> __( 'Do you want to enable autoplay?', 'js_composer' ),
					'param_name' => 'autoplay',
					'std'        => '',
					'dependency' => array(
						'element' => 'style',
						'value'   => array(
							'urban_slider'
						)
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Autoplay speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Autoplay speed Animation. Default 5000 milliseconds', 'js_composer' ),
					'param_name'  => 'autoplayspeed',
					'value'       => '5000',
					'dependency'  => array(
						'element' => 'style',
						'value'   => array(
							'urban_slider',
							'showcase_slider',
						)
					)
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Speed (milliseconds)', 'js_composer' ),
					'description' => __( 'Speed Animation. Default 1500 milliseconds', 'js_composer' ),
					'param_name'  => 'speed',
					'value'       => '1500',
					'dependency'  => array(
						'element' => 'style',
						'value'   => array(
							'urban_slider',
							'showcase_slider',
						)
					)
				),
				array(
					'type'       => 'textfield',
					'heading'    => __( 'Count items', 'js_composer' ),
					'description' => __( 'Please specify how many elements of the portfolio will appear on the page', 'js_composer' ),
					'param_name' => 'count',
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Background color 1', 'js_composer' ),
					'description' => __( 'Please select first background color', 'js_composer' ),
					'param_name' => 'color1',
					'dependency' => array( 'element' => 'style', 'value' => 'split_slider' )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Background color 2', 'js_composer' ),
					'description' => __( 'Please select second background color', 'js_composer' ),
					'param_name' => 'color2',
					'dependency' => array( 'element' => 'style', 'value' => 'split_slider' )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Background color 3', 'js_composer' ),
					'description' => __( 'Please select third background color', 'js_composer' ),
					'param_name' => 'color3',
					'dependency' => array( 'element' => 'style', 'value' => 'split_slider' )
				),
				array(
					'type'       => 'colorpicker',
					'heading'    => __( 'Background color 4', 'js_composer' ),
					'description' => __( 'Please select fourth background color', 'js_composer' ),
					'param_name' => 'color4',
					'dependency' => array( 'element' => 'style', 'value' => 'split_slider' )
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count slides', 'js_composer' ),
					'param_name'  => 'slides',
					'description' => __( 'Only numbers. Minimum 2.', 'js_composer' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array( 'showcase_slider' )
					)
				),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Button style', 'js_composer' ),
                    'description' => __( 'Please select button style for form section', 'js_composer' ),
                    'param_name' => 'btn_style',
					'dependency' => array(
						'element' => 'style',
						'value'   => array( 'landing_split', 'split_slider')
					),
                    'value'      => array(
                        array(
                            'value' => 'a-btn-4',
                            'label' => esc_html__( 'Simple button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-4.jpg'
                        ),
                        array(
                            'value' => 'a-btn-1',
                            'label' => esc_html__( 'Button with corner', 'js_composer' ),
                            'image' => $url_btn . 'a-btn.jpg'
                        ),
                        array(
                            'value' => 'a-btn-2',
                            'label' => esc_html__( 'Classic button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-2.jpg'
                        ),
                        array(
                            'value' => 'a-btn-3',
                            'label' => esc_html__( 'Reverse classic button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-3.jpg'
                        ),
                    )
                ),
                array(
                    'type'       => 'vc_link',
                    'heading'    => __( 'Additionally button', 'js_composer' ),
                    'param_name' => 'additional_button',
                    'description' => __( 'You can add one additionally button', 'js_composer' ),
                    'dependency' => array(
                        'element' => 'style',
                        'value'   => array( 'landing_split' )
                    )
                ),
                array(
                    'type'       => 'select_preview',
                    'heading'    => __( 'Additional button style', 'js_composer' ),
                    'description' => __( 'Please select additionally button style for form section', 'js_composer' ),
                    'param_name' => 'additional_btn_style',
					'dependency' => array(
						'element' => 'style',
						'value'   => array( 'landing_split' )
					),
                    'value'      => array(
                        array(
                            'value' => 'a-btn-4',
                            'label' => esc_html__( 'Simple button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-4.jpg'
                        ),
                        array(
                            'value' => 'a-btn-1',
                            'label' => esc_html__( 'Button with corner', 'js_composer' ),
                            'image' => $url_btn . 'a-btn.jpg'
                        ),
                        array(
                            'value' => 'a-btn-2',
                            'label' => esc_html__( 'Classic button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-2.jpg'
                        ),
                        array(
                            'value' => 'a-btn-3',
                            'label' => esc_html__( 'Reverse classic button', 'js_composer' ),
                            'image' => $url_btn . 'a-btn-3.jpg'
                        ),
                    )
                ),
				array(
					'type'       => 'dropdown',
					'heading'    => 'Linked to detail page',
					'description' => __( 'Enable link to detail page', 'js_composer' ),
					'param_name' => 'linked',
					'value'      => array(
						'Yes'  => 'yes',
						'None' => 'none'
					)
				),
				array(
					'type'       => 'dropdown',
					'heading'    => 'Open link in a new tab?',
					'description' => __( 'Please selecct how to open link to detail page', 'js_composer' ),
					'param_name' => 'blank',
					'value'      => array(
						'None' => 'none',
						'Yes'  => 'yes'
					),
				),
			)
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pao_portfolio_sliders extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			extract( shortcode_atts( array(
				'cats'                 => '',
				'additional_button'    => '',
				'btn_style'            => 'a-btn-1',
				'additional_btn_style' => 'a-btn-1',
				'blank'                => 'none',
				'image_original_size'  => 'full',
				'slides'               => '3',
				'title'                => '',
				'linked'               => 'yes',
				'count'                => '',
				'style'                => 'filter_slider',
				'orderby'              => 'date',
				'order'                => 'DESC',
				'autoplay'             => '',
				'autoplayspeed'        => '5000',
				'speed'                => '1500',
				'color1'              => '#fbddec',
				'color2'              => '#9fe2df',
				'color3'              => '#fbddec',
				'color4'              => '#9fe2df',
			), $atts ) );

			if ( ! in_array( "pao_multiscroll", self::$js_scripts ) && $style == 'split_slider') {
				self::$js_scripts[] = "pao_multiscroll";
			}
			if ( ! in_array( "pao_multiscroll_responsive", self::$js_scripts ) && $style == 'split_slider') {
				self::$js_scripts[] = "pao_multiscroll_responsive";
			}
			if ( ! in_array( "pao_portfolio_sliders", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_portfolio_sliders";
			}
			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pao_portfolio_sliders-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pao_portfolio_sliders-css";
			}
			$this->enqueueCss();


			$slides = isset( $slides ) && ! empty( $slides ) && is_numeric( $slides ) && $slides >= 2 ? $slides : 3;

			$autoplay      = ! empty( $autoplay ) ? 'true' : 'false';
			$autoplayspeed = is_numeric( $autoplayspeed ) ? $autoplayspeed : '5000';
			$speed         = is_numeric( $speed ) ? $speed : '1500';

			$color1 = isset( $color1 ) && ! empty( $color1 ) ? $color1 : '#fbddec';
			$color2 = isset( $color2 ) && ! empty( $color2 ) ? $color2 : '#9fe2df';
			$color3 = isset( $color3 ) && ! empty( $color3 ) ? $color3 : '#fbddec';
			$color4 = isset( $color4 ) && ! empty( $color4 ) ? $color4 : '#9fe2df';
			$colors = array();
			$colors[] = $color1;
			$colors[] = $color2;
			$colors[] = $color3;
			$colors[] = $color4;

			// base args
			$args = array(
				'post_type'      => 'portfolio',
				'posts_per_page' => ( ! empty( $count ) && is_numeric( $count ) ) ? $count : 9,
				'paged'          => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
			);

			// Order posts
			if ( null !== $orderby ) {
				$args['orderby'] = $orderby;
			}
			$args['order'] = $order;

			// category
			if ( ! empty( $cats ) ) {
				$term_slugs        = explode( ',', $cats );
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'portfolio-category',
						'field'    => 'slug',
						'terms'    => $term_slugs,
					)
				);
			}


			wp_localize_script(
				'pao-main-js',
				'portfolio_load',
				array(
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
				)
			);


			ob_start();

			$posts = new WP_Query( $args );
			$key   = 0;

			$categoriesAll = array();
			$titlesAll     = array();
			$targetsAll    = array();
			$linksAll      = array();
			$random        = substr( md5( rand() ), 0, 7 );


			if ( $posts->have_posts() ) { ?>

                <div class="portfolio-slider-wrap <?php echo esc_attr( $style ); ?>">
					<?php if ( $style == 'urban_slider' ) { ?>
                        <div class="gallery-top" id="<?php echo esc_attr( $random ); ?>"
                             data-id="thumb<?php echo esc_attr( $random ); ?>"
                             data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-autoplayspeed="<?php echo esc_attr( $autoplayspeed ); ?>"
                             data-speed="<?php echo esc_attr( $speed ); ?>">

							<?php while ( $posts->have_posts() ) :
								$posts->the_post();

								$meta_data  = get_post_meta( $posts->ID, 'pao_portfolio_options', true );
								$categories = get_the_terms( $posts->ID, 'portfolio-category' );

								$categories = ! empty( $categories ) ? $categories : '';
								$category   = array();
								if ( ! empty( $categories ) ) {
									foreach ( $categories as $item ) {
										$category[] = $item->name;
									}
									$category = implode( ", ", $category );
								}

								$link   = get_the_permalink();
								$target = '_self';

								if ( $linked == 'none' && ! empty( $meta_data['ext_link'] ) ) {
									$link   = $meta_data['ext_link'];
									$target = '_blank';
								}

								if ( $blank == 'none' ) {
									$target = '_self';
								} elseif ( $blank == 'yes' ) {
									$target = '_blank';
								}

								$categoriesAll[] = $category;
								$titlesAll[]     = get_the_title();
								$targetsAll[]    = $target;
								$linksAll[]      = $link;
								$image_id        = get_post_thumbnail_id( $posts->ID );
								$image           = ( is_numeric( $image_id ) && ! empty( $image_id ) ) ? wp_get_attachment_image_url( $image_id, $image_original_size ) : ''; ?>

                                <div class="gallery-top-slide">
									<?php echo pao_the_lazy_load_flter( $image, array(
										'class' => 's-img-switch',
									) ); ?>
                                </div>

							<?php endwhile;


							wp_reset_postdata(); ?>

                        </div>

                        <div class="gallery-thumb" id="thumb<?php echo esc_attr( $random ); ?>"
                             data-id="<?php echo esc_attr( $random ); ?>"
                             data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-autoplayspeed="<?php echo esc_attr( $autoplayspeed ); ?>"
                             data-speed="<?php echo esc_attr( $speed ); ?>">
							<?php
							$counter = 0;

							foreach ( $targetsAll as $target ) { ?>
                                <div class="gallery-thumb-slide">
                                <span class="pagination-bullet">
                                    <i class="pagination-category"><?php echo esc_html( $categoriesAll[ $counter ] ); ?></i>
                                    <a href="<?php echo esc_url( $linksAll[ $counter ] ); ?>"
                                       target="<?php echo esc_attr( $target ); ?>"
                                       class="pagination-title"><?php echo esc_html( $titlesAll[ $counter ] ); ?></a>
                                </span>
                                </div>
								<?php
								$counter ++;
							} ?>
                        </div>
					<?php }
					elseif ( $style == 'interactive' ) { ?>
                        <div class="interactive-slider tabs">
                            <div class="tabs-header">
                                <div class="container">
                                    <ul>
										<?php
										$imageItems = '';

										while ( $posts->have_posts() ) :
											$posts->the_post();
											$meta_data = get_post_meta( get_the_ID(), 'pao_portfolio_options', true );
											$link      = get_the_permalink();
											$target    = '_self';

											if ( $linked == 'none' && ! empty( $meta_data['ext_link'] ) ) {
												$link   = $meta_data['ext_link'];
												$target = '_blank';
											}

											if ( $blank == 'none' ) {
												$target = '_self';
											} elseif ( $blank == 'yes' ) {
												$target = '_blank';
											}

											$active = ( $key === 0 ) ? 'active' : ''; ?>

                                            <li class="<?php echo esc_attr( $active ); ?>">
                                                <a href="<?php echo esc_url( $link ); ?>"
                                                   target="<?php echo esc_attr( $target ); ?>"><?php the_title(); ?></a>
                                            </li>

											<?php $image_id = get_post_thumbnail_id( $posts->ID );
											if ( ! empty( $image_id ) && is_numeric( $image_id ) ) {
												$imageItem = wp_get_attachment_image_url( $image_id, $image_original_size );
											} elseif ( ! empty( $images ) ) {
												$imageItem = wp_get_attachment_image_url( $images[0], $image_original_size );
											} else {
												$imageItem = '';
											}

											$image_html = ! empty( $imageItem ) ? '<img src="' . esc_url( $imageItem ) . '" alt="" class="s-img-switch">' : '';

											$imageItems .= '<div class="tabs-item ' . esc_attr( $active ) . '">' . $image_html . '</div>';

											$key ++;

										endwhile;
										wp_reset_postdata(); ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="tabs-content">
								<?php echo $imageItems; ?>
                            </div>
                        </div>
					<?php }
					elseif ( $style == 'showcase_slider' ) { ?>
                        <div class="swiper3-container"
                             data-mouse="0" data-space="0" data-pagination-type="bullets"
                             data-mode="horizontal" data-autoplay="<?php echo esc_attr( $autoplayspeed ); ?>"
                             data-loop="1" data-speed="<?php echo esc_attr( $speed ); ?>" data-center="0"
                             data-responsive="responsive" data-add-slides="<?php echo esc_attr( $slides ); ?>"
                             data-xs-slides="1" data-sm-slides="2" data-md-slides="2"
                             data-lg-slides="<?php echo esc_attr( $slides ); ?>">
                            <div class="swiper3-wrapper">

								<?php while ( $posts->have_posts() ) :
									$posts->the_post();
									$meta_data = get_post_meta( get_the_ID(), 'pao_portfolio_options', true );
									$images    = explode( ',', $meta_data['slider'] );

									$link   = get_the_permalink();
									$target = '_self';

									if ( $linked == 'none' && ! empty( $meta_data['ext_link'] ) ) {
										$link   = $meta_data['ext_link'];
										$target = '_blank';
									}

									if ( $blank == 'none' ) {
										$target = '_self';
									} elseif ( $blank == 'yes' ) {
										$target = '_blank';
									} ?>

                                    <div class="swiper3-slide">
                                        <a href="<?php echo esc_url( $link ); ?>"
                                           class="slide-image full-height-window-hard clearfix"
                                           target="<?php echo esc_attr( $target ); ?>">
                                            <span class="hover_arrow">
                                                <span class="arrow"></span>
                                            </span>
											<?php if ( ! get_post_thumbnail_id( $posts->ID ) ) { ?>
                                                <span class="images-slider-wrapper clearfix">
                                                    <?php $url = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? wp_get_attachment_image_url( $images[0], $image_original_size ) : '';
                                                    $alt       = get_post_meta( $images[0], '_wp_attachment_image_alt', true ); ?>
                                                    <img src="<?php echo esc_url( $url ); ?>"
                                                         alt="<?php echo esc_attr( $alt ); ?>" class="s-img-switch">
                                                </span>
											<?php } else {
												$image_id = get_post_thumbnail_id( $posts->ID );
												$image    = ( is_numeric( $image_id ) && ! empty( $image_id ) ) ? wp_get_attachment_image_url( $image_id, $image_original_size ) : '';
												$alt      = get_post_meta( $image_id, '_wp_attachment_image_alt', true ); ?>
                                                <span class="images-slider-wrapper clearfix">
                                                    <img src="<?php echo esc_url( $image ); ?>"
                                                         alt="<?php echo esc_attr( $alt ); ?>" class="s-img-switch">
                                                </span>
											<?php } ?>

                                            <span class="slide-title"><?php echo get_the_title(); ?></span>

                                        </a>
                                    </div>

								<?php endwhile;
								wp_reset_postdata(); ?>

                            </div>
                        </div>
					<?php }
					elseif ( $style == 'filter_slider' ) { ?>
                        <div class="portfolio-tabs-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="portfolio-filter-wrap">
											<?php if ( ! empty( $title ) ) { ?>
                                                <div class="title">
													<?php echo esc_html( $title ); ?>
                                                </div>
											<?php } ?>

                                            <div class="filters" data-order="<?php echo esc_attr( $order ); ?>"
                                                 data-orderby="<?php echo esc_attr( $orderby ); ?>"
                                                 data-count="<?php echo esc_attr( $count ); ?>">
                                                <ul>
	                                                <?php $categories = get_terms( 'portfolio-category', '' );
	                                                $allcategories    = array();
	                                                foreach ( $categories as $category ) {
		                                                $allcategories[] = $category->slug;
	                                                }
	                                                $allcategories = implode( ",", $allcategories ); ?>
                                                    <li data-filter="<?php echo esc_attr( $cats ); ?>"
                                                        class="active"><?php esc_html_e( 'all', 'pao' ); ?>
                                                        <span><?php echo esc_html( $posts->found_posts ); ?></span></li>
	                                                <?php if ( ! empty( $cats ) ) {
		                                                foreach ( $categories as $category ) {
			                                                if ( in_array( $category->slug, $term_slugs ) !== false ) { ?>
                                                                <li data-filter="<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?>
                                                                    <span><?php echo esc_html( $category->count ); ?></span>
                                                                </li>
																<?php
															}
														}
													} ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-wrapper-tab">
                                <div class="swiper3-container pao-portfolio-filter" data-mouse="0"
                                     data-autoplay="<?php echo esc_attr( $autoplayspeed ); ?>"
                                     data-loop="1"
                                     data-speed="<?php echo esc_attr( $speed ); ?>"
                                     data-center="1" data-space="0" data-pagination-type="bullets"
                                     data-mode="horizontal">
                                    <div class="swiper3-wrapper">

										<?php while ( $posts->have_posts() ) : $posts->the_post();
											$portfolio_meta = get_post_meta( $posts->ID, 'pao_portfolio_options' );
											$link           = get_the_permalink();
											$target         = '_self';

											if ( $linked == 'none' && ! empty( $portfolio_meta['ext_link'] ) ) {
												$link   = $portfolio_meta['ext_link'];
												$target = '_blank';
											}

											if ( $blank == 'none' ) {
												$target = '_self';
											} elseif ( $blank == 'yes' ) {
												$target = '_blank';
											}
											$images = explode( ',', $portfolio_meta[0]['slider'] ); ?>

                                            <div class="swiper3-slide">

                                                <div class="pao-portfolio-list-image">
                                                    <div class="image-wrap">
														<?php
														$image_id = get_post_thumbnail_id( $posts->ID );
														if ( ! empty( $image_id ) && is_numeric( $image_id ) ) {
															$imageUrl = wp_get_attachment_image_url( $image_id, $image_original_size );
														} elseif ( ! empty( $images ) ) {
															$imageUrl = wp_get_attachment_image_url( $images[0], $image_original_size );
														} else {
															$imageUrl = '';
														}

														if ( ! empty( $imageUrl ) ) {
															echo pao_the_lazy_load_flter( $imageUrl, array(
																'class' => 's-img-switch',
															) );
														} ?>

                                                        <a href="<?php echo esc_attr( $link ); ?>" class="title"
                                                           target="<?php echo esc_attr( $target ); ?>">
															<?php echo esc_html( get_the_title() ); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

											<?php
										endwhile;

										wp_reset_postdata(); ?>
                                    </div>
                                    <div class="swiper3-pagination"></div>
                                </div>
                            </div>
                        </div>
					<?php }
					elseif ( $style == 'landing_split' ) { ?>
                        <div class="swiper3-container landing_split" data-mouse="1"
                             data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                             data-loop="1" data-speed="<?php echo esc_attr( $speed ); ?>" data-center="1"
                             data-space="0" data-effect="fade">
                            <div class="swiper3-wrapper">
								<?php while ( $posts->have_posts() ) :
									$posts->the_post();

									$meta_data = get_post_meta( get_the_ID(), 'pao_portfolio_options', true );
									$images    = explode( ',', $meta_data['slider'] );

									$link   = get_the_permalink();
									$target = '_self';

									if ( $linked == 'none' && ! empty( $meta_data['ext_link'] ) ) {
										$link   = $meta_data['ext_link'];
										$target = '_blank';
									}

									if ( $blank == 'none' ) {
										$target = '_self';
									} elseif ( $blank == 'yes' ) {
										$target = '_blank';
									} ?>

                                    <div class="swiper3-slide">
										<?php if ( count( $images ) >= 2 ) {
											$image  = ( ! empty( $images[0] ) && is_numeric( $images[0] ) ) ? wp_get_attachment_image_src( $images[0], $image_original_size ) : '';
											$image2 = ( ! empty( $images[1] ) && is_numeric( $images[1] ) ) ? wp_get_attachment_image_src( $images[1], $image_original_size ) : ''; ?>

                                            <div class="images-wrap full-height-window one">
                                                <div class="image">
                                                    <img src="<?php echo esc_url( $image[0] ); ?>" class="s-img-switch">
                                                </div>
                                            </div>
                                            <div class="images-wrap full-height-window two">
                                                <div class="image">
                                                    <img src="<?php echo esc_url( $image2[0] ); ?>"
                                                         class="s-img-switch">
                                                </div>
                                                <div class="content-wrap">
													<?php the_title( '<h5 class="portfolio-title">', '</h5>' ); ?>
                                                    <div class="excerpt">
														<?php the_excerpt(); ?>
                                                    </div>
													<?php if ( ! empty( $additional_button ) ) {
														$url = vc_build_link( $additional_button );
													} else {
														$url['url']    = '#';
														$url['title']  = 'title';
														$url['target'] = '_self';
													}
													if ( ! empty( $additional_button ) ) { ?>
                                                        <a href="<?php echo esc_url( $url['url'] ); ?>"
                                                           class="<?php echo esc_attr( $additional_btn_style ); ?>"
                                                           target="<?php echo esc_attr( $url['target'] ); ?>">
															<?php echo esc_html( $url['title'] ) ?>
                                                        </a>
													<?php } ?>
                                                    <a href="<?php echo esc_url( $link ); ?>"
                                                       class="<?php echo esc_attr( $btn_style ); ?>"
                                                       target="<?php echo esc_attr( $target ); ?>">
														<?php esc_html_e( 'open project', 'pao' ); ?>
                                                    </a>
                                                </div>
                                            </div>
										<?php } ?>
                                    </div>
								<?php endwhile; ?>
                            </div>
                        </div>
					<?php }
					elseif ( $style == 'split_slider' ) {

					    $count = $posts->post_count;
						$colors_count = count($colors) - 1;
						$colorsAll = array();
						$key = 0;

						for ( $i = 1; $i <= $count; $i++ ) {
						    $key = $key > $colors_count ? 0 : $key;
                            $colorsAll[] = $colors[$key];
                            $key++;
						}

						$colorsList = implode(",", $colorsAll); ?>

                        <div class="split-wrapper" data-colors="<?php echo esc_attr($colorsList); ?>">
                            <div class="split-ms-left">
								<?php

								$second_slide = '';

								while ( $posts->have_posts() ) :
									$posts->the_post();

									$meta_data = get_post_meta( get_the_ID(), 'pao_portfolio_options', true );

									$categories = get_the_terms( $posts->ID, 'portfolio-category' );

									$categories = ! empty( $categories ) ? $categories : '';
									$category   = array();
									if ( ! empty( $categories ) ) {
										foreach ( $categories as $item ) {
											$category[] = $item->name;
										}
										$category = implode( ", ", $category );
									}else{
										$category = '';
                                    }

									$images    = explode( ',', $meta_data['slider'] );

									$image_id = get_post_thumbnail_id( $posts->ID );
									if ( ! empty( $image_id ) && is_numeric( $image_id ) ) {
										$imageUrl = wp_get_attachment_image_url( $image_id, $image_original_size );
									} elseif ( ! empty( $images ) ) {
										$imageUrl = wp_get_attachment_image_url( $images[0], $image_original_size );
									} else {
										$imageUrl = '';
									}

									$link   = get_the_permalink();
									$target = '_self';

									if ( $linked == 'none' && ! empty( $meta_data['ext_link'] ) ) {
										$link   = $meta_data['ext_link'];
										$target = '_blank';
									}

									if ( $blank == 'none' ) {
										$target = '_self';
									} elseif ( $blank == 'yes' ) {
										$target = '_blank';
									}

									$second_slide .= '<div class="split-ms-section">
                                        <div class="img-wrap">
                                            <img src="' . esc_url( $imageUrl ) . '" alt="" class="s-img-switch">
                                        </div>
                                    </div>'; ?>

                                    <div class="split-ms-section">
                                        <div class="text-wrapper">
	                                        <?php if(!empty($category)){ ?>
                                                <span class="author"><?php echo esc_html($category); ?></span>
	                                        <?php } ?>
                                            <div class="title">
                                                <a href="<?php echo esc_url( $link ); ?>"
                                                   target="<?php echo esc_attr( $target ); ?>">
			                                        <?php the_title(); ?>
                                                </a>
                                            </div>
                                            <a href="<?php echo esc_url( $link ); ?>"
                                               class="<?php echo esc_attr( $btn_style ); ?>"
                                               target="<?php echo esc_attr( $target ); ?>">
		                                        <?php esc_html_e( 'read more', 'pao' ); ?>
                                            </a>
                                        </div>
                                    </div>

								<?php endwhile; ?>
                            </div>
                            <div class="split-ms-right">
								<?php echo $second_slide; ?>
                            </div>
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>

					<?php } ?>

                </div>

			<?php }

			return ob_get_clean();
		}
	}
}