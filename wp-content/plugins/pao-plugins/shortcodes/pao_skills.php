<?php

//Skills shortcode


//========================== Dont used ===========================================


if ( function_exists( 'vc_map' ) ) {
    $url = EF_URL . '/admin/assets/images/shortcodes_images/skills/';
	vc_map( array(
		'name'                    => __( 'Skills', 'js_composer' ),
		'base'                    => 'pao_skills',
		'content_element'         => true,
		'show_settings_on_create' => true,
		'description'             => __( 'Image, title, position, social links', 'js_composer' ),
		'params'                  => array(
            array(
                'type'       => 'select_preview',
                'heading'    => __( 'Type', 'js_composer' ),
                'description' => esc_html__( 'Please select skill type', 'js_composer' ),
                'param_name' => 'skills_style',
                'value'      => array(
                    array(
                        'value' => 'numerical',
                        'label' => esc_html__( 'Numerical', 'js_composer' ),
                        'image' => $url . 'numerical.jpg'
                    ),
                    array(
                        'value' => 'linear',
                        'label' => esc_html__( 'Image with lines', 'js_composer' ),
                        'image' => $url . 'linear.jpg'
                    ),
                    array(
                        'value' => 'linear_text',
                        'label' => esc_html__( 'Text with lines', 'js_composer' ),
                        'image' => $url . 'linear_text.jpg'
                    ),
                    array(
                        'value' => 'linear_bg',
                        'label' => esc_html__( 'Background with lines', 'js_composer' ),
                        'image' => $url . 'linear_bg.jpg'
                    ),
                ),
            ),
			// linear style
			array(
                'type'       => 'attach_images',
                'description' => __( 'Please add your images', 'js_composer' ),
                'heading'    => __( 'Images', 'js_composer' ),
                'param_name' => 'images',
				'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear' ) ),
			),
            array(
                'type'       => 'attach_image',
                'description' => __( 'Please add your image', 'js_composer' ),
                'heading'    => __( 'Background image', 'js_composer' ),
                'param_name' => 'image',
                'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear_bg' ) )
            ),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Main title', 'js_composer' ),
                'description' => esc_html__( 'Please add main title', 'js_composer' ),
				'param_name' => 'title',
				'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear', 'linear_text', 'linear_bg' ) ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Subtitle', 'js_composer' ),
                'description' => esc_html__( 'Please add subtitle', 'js_composer' ),
				'param_name' => 'subtitle',
				'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear', 'linear_text', 'linear_bg' ) ),
			),
			array(
				'type'       => 'textarea',
				'heading'    => __( 'Text', 'js_composer' ),
                'description' => esc_html__( 'Please add simple text', 'js_composer' ),
				'param_name' => 'text',
				'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear_text', 'linear', 'linear_bg' ) ),
			),
            array(
                'type'       => 'textfield',
                'heading'    => __( 'Background text', 'js_composer' ),
                'description'=> __( 'Please add your background text', 'js_composer' ),
                'param_name' => 'bg_text',
                'value'      => '',
                'dependency' => array( 'element' => 'skills_style', 'value' => array( 'linear_bg' ) ),
            ),
			array(
				'type'        => 'param_group',
				'heading'     => __( 'Skills', 'js_composer' ),
				'param_name'  => 'circle_skills',
				'description' => __( 'Enter values for skill', 'js_composer' ),
				'value'       => '',
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number', 'js_composer' ),
						'param_name'  => 'number',
						'description' => __( 'Only number.', 'js_composer' ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Title', 'js_composer' ),
						'param_name'  => 'title',
						'description' => __( 'Add title for your skill.', 'js_composer' ),
					),
					array(
						'type'        => 'textarea',
						'heading'     => __( 'Text', 'js_composer' ),
						'param_name'  => 'text',
						'description' => __( 'Add text for your skill.', 'js_composer' ),
					),
				),
				'dependency'  => array( 'element' => 'skills_style', 'value' => array( 'circle' ) ),
			),

			array(
				'type'        => 'param_group',
				'heading'     => __( 'Skills', 'js_composer' ),
				'param_name'  => 'linear_skills',
				'description' => __( 'Enter values for skill', 'js_composer' ),
				'value'       => '',
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Title', 'js_composer' ),
						'param_name'  => 'title',
						'description' => __( 'Add title for your skill.', 'js_composer' ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number', 'js_composer' ),
						'param_name'  => 'number',
						'description' => __( 'Only number.', 'js_composer' ),
					),
				),
				'dependency'  => array( 'element' => 'skills_style', 'value' => array( 'linear', 'linear_text', 'linear_bg' ) ),
			),
			// end linear style

			// numerical style
			array(
				'type'        => 'param_group',
				'heading'     => __( 'Skills', 'js_composer' ),
				'param_name'  => 'numerical_skills',
				'description' => __( 'Enter values for skill', 'js_composer' ),
				'value'       => '',
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Number', 'js_composer' ),
						'param_name'  => 'number',
						'description' => __( 'Only number.', 'js_composer' ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Symbol', 'js_composer' ),
						'param_name'  => 'symbol',
						'description' => __( 'Symbol near number.', 'js_composer' ),
					),
					array(
						'type'       => 'dropdown',
						'heading'    => __( 'Symbol location', 'js_composer' ),
                        'description' => esc_html__( 'Please select symbol location', 'js_composer' ),
						'param_name' => 'symbol_location',
						'value'      => array(
							__( 'Before', 'js_composer' ) => 'before',
							__( 'After', 'js_composer' )  => 'after',
						),
						"dependency" => array( "element" => "symbol", "not_empty" => true ),
					),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Title', 'js_composer' ),
						'param_name'  => 'title',
						'description' => __( 'Add text for your skill.', 'js_composer' ),
					),
				),
				'dependency'  => array( 'element' => 'skills_style', 'value' => array( 'numerical' ) ),
			),
			// end numerical style

			array(
				'type'        => 'textfield',
				'heading'     => __( 'Extra class name', 'js_composer' ),
				'param_name'  => 'el_class',
				'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
				'value'       => '',
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS box', 'js_composer' ),
				'param_name' => 'css',
				'group'      => __( 'Design options', 'js_composer' ),
			),
		) //end params
	) );
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pao_skills extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'skills_style'     => 'numerical',
				'images'           => '',
				'image'            => '',
				'title'            => '',
				'subtitle'         => '',
				'text'             => '',
				'bg_text'          => '',
				'linear_skills'    => array(),
				'numerical_skills' => array(),
				'circle_skills' => array(),
				'el_class'         => '',
				'css'              => ''
			), $atts ) );

			// include needed scripts
			if ( !in_array( "pao_countTo-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pao_countTo-js";
			}
            if ( !in_array( "pao_skills-js", self::$js_scripts ) ) {
                self::$js_scripts[] = "pao_skills-js";
            }

			$this->enqueueJs();

			// include needed stylesheets
			if ( !in_array( "pao_skills-css", self::$css_scripts ) ) {
			    self::$css_scripts[] = "pao_skills-css";
            }
			$this->enqueueCss();

			$class = ( ! empty( $el_class ) ) ? $el_class : '';    // custum class
			$class .= vc_shortcode_custom_css_class( $css, ' ' );        // custum css

			ob_start();

			if ( $skills_style == "linear" ) {


                $images = !empty($images) ? explode( ',', $images ) : '';

				$linear_skills = (array) vc_param_group_parse_atts( $linear_skills ); ?>

                <div class="skill-wrapper linear <?php echo esc_attr( $class ); ?>">

                    <div class="img-wrapper">
                        <?php foreach ($images as $item){
	                        $image_alt     = get_post_meta( $item, '_wp_attachment_image_alt', true );
                            $image_url = wp_get_attachment_image_url($item, 'full'); ?>
                            <div class="slide-item">
                                <?php echo pao_the_lazy_load_flter( $image_url,
                                    array(
                                        'class' => 's-img-switch',
                                        'alt'   => $image_alt,
                                    )
                                ); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="skills-wrap">
                        <div class="wrapper-full">
							<?php if ( ! empty( $subtitle ) ) { ?>
                                <h6 class="subtitle">
									<?php echo esc_html( $subtitle ); ?>
                                </h6>
							<?php } // end if

							if ( ! empty( $title ) ) { ?>
                                <h3 class="title">
									<?php echo esc_html( $title ); ?>
                                </h3>
							<?php } // end if

                            if ( ! empty( $text ) ) { ?>
                                <div class="text">
                                    <?php echo wp_kses_post( $text ); ?>
                                </div>
                            <?php }

                            if ( ! empty( $linear_skills ) ) { ?>

                                <div class="skills">

                                    <?php foreach ( $linear_skills as $skill ) {

                                        if ( ! empty( $skill['title'] ) && ! empty( $skill['number'] ) && is_numeric( $skill['number'] ) ) { ?>

                                            <div class="skill" data-value="<?php echo esc_attr( $skill['number'] ); ?>">
											<span class="skill-label">
												<?php echo esc_html( $skill['title'] ); ?>
											</span>

                                                <div class="line">
                                                    <div class="active-line">
                                                        <div class="skill-value">
                                                            <span class="counter" data-from="0" data-speed="1000"
                                                                  data-to="<?php echo esc_attr( $skill['number'] ); ?>">0</span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } // end if
                                    } // end foreach ?>
                                </div>

                            <?php } // end if
							?>
                        </div>
                    </div>
                </div>

			<?php } // end if ( end linear style )
			else if ( $skills_style == "numerical" ) {
				$numerical_skills = (array) vc_param_group_parse_atts( $numerical_skills );

				if ( ! empty( $numerical_skills ) ) { ?>

                    <div class="skill-wrapper numerical <?php echo esc_attr( $class ); ?>">

						<?php foreach ( $numerical_skills as $skill ) { ?>

                            <div class="skill">
								<?php if ( ! empty( $skill['symbol'] ) && $skill['symbol_location'] == "before" ) { ?>
                                    <span class="symbol"><?php echo esc_html( $skill['symbol'] ); ?></span>
								<?php }
								if ( ! empty( $skill['number'] ) ) { ?>
                                    <span class="skill-value" data-from="0" data-speed="1000"
                                          data-to="<?php echo esc_attr( $skill['number'] ); ?>">
										<?php echo esc_html( $skill['number'] ); ?>
									</span>
								<?php } // end if
								if ( ! empty( $skill['symbol'] ) && $skill['symbol_location'] != "before" ) { ?>
                                    <span class="symbol"><?php echo esc_html( $skill['symbol'] ); ?></span>
								<?php }
								if ( ! empty( $skill['title'] ) ) { ?>
                                    <div class="skill-label"><?php echo esc_html( $skill['title'] ); ?></div>
								<?php } // end if ?>

                            </div>

						<?php } // end foreach ?>

                    </div>

				<?php } // end if

			} // end else if ( end numerical style )
            elseif ( $skills_style == "linear_text" ) {

				$linear_skills = (array) vc_param_group_parse_atts( $linear_skills );

				?>

                <div class="skill-wrapper linear linear-text <?php echo esc_attr( $class ); ?>">

					<?php if ( ! empty( $title ) || !empty( $subtitle ) || !empty( $text )) { ?>

                        <div class="text-wrap">
	                        <?php

	                        if ( ! empty( $subtitle ) ) { ?>
                                <h6 class="subtitle">
			                        <?php echo esc_html( $subtitle ); ?>
                                </h6>
	                        <?php }

                            if ( ! empty( $title ) ) { ?>
                                <h3 class="title">
			                        <?php echo esc_html( $title ); ?>
                                </h3>
	                        <?php }
	                        if ( ! empty( $text ) ) { ?>
                                <div class="text">
			                        <?php echo wp_kses_post( $text ); ?>
                                </div>
	                        <?php } ?>
                        </div>
					<?php } ?>

                    <div class="skills-wrap">
                        <div class="wrapper-full">
							<?php if ( ! empty( $linear_skills ) ) { ?>

                                <div class="skills">

									<?php foreach ( $linear_skills as $skill ) {

										if ( ! empty( $skill['title'] ) && ! empty( $skill['number'] ) && is_numeric( $skill['number'] ) ) { ?>

                                            <div class="skill" data-value="<?php echo esc_attr( $skill['number'] ); ?>">
											<span class="skill-label">
												<?php echo esc_html( $skill['title'] ); ?>
											</span>

                                                <div class="line">
                                                    <div class="active-line">
                                                        <div class="skill-value">
                                                            <span class="counter" data-from="0" data-speed="1000"
                                                              data-to="<?php echo esc_attr( $skill['number'] ); ?>">0</span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

										<?php } // end if
									} // end foreach ?>
                                </div>

							<?php } // end if
							?>
                        </div>
                    </div>
                </div>

			<?php }

            elseif ( $skills_style == "linear_bg" ) {

                $linear_skills = (array) vc_param_group_parse_atts( $linear_skills );

                ?>

                <div class="skill-wrapper linear linear-bg <?php echo esc_attr( $class ); ?>">

                    <?php
                    $image = ( ! empty( $image ) && is_numeric( $image ) ) ? wp_get_attachment_url( $image ) : '';

                    if ( ! empty( $image ) ) {
                        echo pao_the_lazy_load_flter( $image, array( 'class' => 's-img-switch', 'alt' => '' ) );
                    }
                    ?>

                    <div class="skills-wrap">

                        <?php if ( ! empty( $title ) || !empty( $subtitle ) || !empty( $text )) { ?>

                            <div class="text-wrap">
                                <?php

                                if ( ! empty( $subtitle ) ) { ?>
                                    <h6 class="subtitle">
                                        <?php echo esc_html( $subtitle ); ?>
                                    </h6>
                                <?php }

                                if ( ! empty( $title ) ) { ?>
                                    <h3 class="title">
                                        <?php echo esc_html( $title ); ?>
                                    </h3>
                                <?php }
                                if ( ! empty( $text ) ) { ?>
                                    <div class="text">
                                        <?php echo wp_kses_post( $text ); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <div class="wrapper-full">
                            <?php if ( ! empty( $linear_skills ) ) { ?>

                                <div class="skills">

                                    <?php foreach ( $linear_skills as $skill ) {

                                        if ( ! empty( $skill['title'] ) && ! empty( $skill['number'] ) && is_numeric( $skill['number'] ) ) { ?>

                                            <div class="skill" data-value="<?php echo esc_attr( $skill['number'] ); ?>">
											<span class="skill-label">
												<?php echo esc_html( $skill['title'] ); ?>
											</span>

                                                <div class="line">
                                                    <div class="active-line">
                                                        <div class="skill-value">
                                                            <span class="counter" data-from="0" data-speed="1000"
                                                                  data-to="<?php echo esc_attr( $skill['number'] ); ?>">0</span>%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } // end if
                                    } // end foreach ?>
                                </div>

                            <?php } // end if
                            ?>
                        </div>
                    </div>
                    <?php if ( ! empty( $bg_text ) ) { ?>
                        <div class="bg-text">
                            <?php echo esc_html( $bg_text ); ?>
                        </div>
                    <?php } ?>
                </div>

            <?php }

			else if ( $skills_style == "circle" ) {
				$circle_skills = (array) vc_param_group_parse_atts( $circle_skills );

				if ( ! empty( $circle_skills ) ) { ?>

                    <div class="skill-wrapper circle <?php echo esc_attr( $class ); ?>">
                        <div class="skills">
		                    <?php foreach ( $circle_skills as $skill ) { ?>

                                <div class="skill" data-value="<?php echo esc_html( $skill['number'] ); ?>">
				                    <?php
				                    if ( ! empty( $skill['number'] ) ) { ?>
                                    <div id="cont" data-pct="<?php echo esc_html( $skill['number'] ); ?>" >
                                        <svg id="svg" width="190" height="190" viewPort="0 0 100 100" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle r="90" cx="95" cy="95" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
                                            <circle id="bar" r="90" cx="95" cy="95" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="565.48px"></circle>
                                        </svg>
                                    </div>
				                    <?php } // end if ?>

                                    <div class="info">
					                    <?php if ( ! empty( $skill['title'] ) ) { ?>
                                            <div class="skill-label"><?php echo esc_html( $skill['title'] ); ?></div>
					                    <?php } // end if
					                    if ( ! empty( $skill['text'] ) ) { ?>
                                            <div class="skill-text"><?php echo esc_html( $skill['text'] ); ?></div>
					                    <?php } // end if ?>
                                    </div>
                                </div>

		                    <?php } // end foreach ?>
                        </div>
                    </div>

				<?php } // end if

			} // end else if ( end numerical style )

			return ob_get_clean();
		} // end content()
	} // end class
} // end if

?>
