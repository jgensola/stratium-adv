<?php
/*
Plugin Name: Pao Plugins
Version: 1.0.2
Description: Includes Portfolio Custom Post Type and Visual Composer Shortcodes
*/

// Define Constants
defined( 'EF_ROOT' ) or define( 'EF_ROOT', dirname( __FILE__ ) );
defined( 'EF_URL' ) or define( 'EF_URL', plugins_url( 'pao-plugins' ) );
defined( 'EF_VERSION' ) or define( 'EF_VERSION', '1.0' );


if ( ! class_exists( 'Pao_Plugins' ) ) {

	require_once EF_ROOT . '/cs-framework/cs-framework.php';
	require_once EF_ROOT . '/lib/aq_resizer.php';
	require_once EF_ROOT . '/lib/pao-justified-gallery/pao-justified-gallery.php';
	// include functions
	require_once EF_ROOT . '/includes/functions_plugins.php';
	require_once EF_ROOT . '/register_post_types.php';
	require_once EF_ROOT . '/includes/lib/vendor/autoload.php';

	require_once EF_ROOT . '/lib/TwitterAPIExchange.php';

	// Import Integration
	require_once( EF_ROOT . '/importer/index.php' );

	require_once( EF_ROOT . '/wp-updates-plugin.php' );
	new WPUpdatesPluginUpdater_1991( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));

	// add a skin in a plugin/theme
	add_filter('tg_add_item_skin', function($skins) {


		$dir            = __DIR__ . '/the-grid/';
		$directory_list = scandir( $dir );

		$directory_list = array_slice( $directory_list, 2 );
		foreach ( $directory_list as $directory ) {

			$directory_templates_list = scandir( $dir . $directory );
			$directory_templates_list = array_slice( $directory_templates_list, 2 );

			foreach ( $directory_templates_list as $list ) {

				$name = str_replace( '-', ' ', $list );
				$name = substr( $name, 3 );

				// register a skin and add it to the main skins array
				$skins[$list] = array(
					'type'   => $directory,
					'slug'   => $list,
					'name'   => $name,
					'php'    => EF_ROOT . '/the-grid/'. $directory .'/'. $list .'/'. $list .'.php',
					'css'    => EF_ROOT . '/the-grid/'. $directory .'/'. $list .'/'. $list .'.css',
					'col'    => 1, // col number in preview skin mode
					'row'    => 1  // row number in preview skin mode
				);
            }


        }

		// return the skins array + the new one you added (in this example 2 new skins was added)
		return $skins;

	});

	/**
	 * Template editor init.
	 */
	if ( ! function_exists( 'pao_include_vc_templates' ) ) {
		function pao_include_vc_templates() {
			if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
				require_once EF_ROOT . '/vc-templates/theme-vc-template-editor.php';
				require_once EF_ROOT . '/vc-templates/theme-vc-templates.php';

				$pao_templates = new Pao_Vc_Templates_Editor();

				return $pao_templates->init();
			}
		}
	}

	add_action( 'init', 'pao_include_vc_templates');


	// register scripts and styles for shortcodes
	add_action( 'wp_enqueue_scripts', 'pao_register_scripts' );
	function pao_register_scripts() {

		// styles
		wp_register_style( 'pao_slick-css', EF_URL . '/shortcodes/assets/css/slick.css', array('pao_base_css') );
		wp_register_style( 'pao_magnific-popup-css', EF_URL . '/shortcodes/assets/css/magnific-popup.css', array('pao_base_css') );
		wp_register_style( 'pao_info_block-css', EF_URL . '/shortcodes/assets/css/info_block.min.css', array('pao_base_css') );
		wp_register_style( 'pao_line_of_images-css', EF_URL . '/shortcodes/assets/css/line_of_images.min.css', array('pao_base_css') );
		wp_register_style( 'pao_team-css', EF_URL . '/shortcodes/assets/css/team.min.css', array('pao_base_css') );
		wp_register_style( 'pao_skills-css', EF_URL . '/shortcodes/assets/css/skills.min.css', array('pao_base_css') );
		wp_register_style( 'pao_about-css', EF_URL . '/shortcodes/assets/css/about.min.css', array('pao_base_css') );
		wp_register_style( 'pao_headings-css', EF_URL . '/shortcodes/assets/css/headings.min.css', array('pao_base_css') );
		wp_register_style( 'pao_services-css', EF_URL . '/shortcodes/assets/css/services.min.css', array('pao_base_css') );
		wp_register_style( 'pao_banner_slider-css', EF_URL . '/shortcodes/assets/css/banner_slider.min.css', array('pao_base_css') );
		wp_register_style( 'pao_testimonial-css', EF_URL . '/shortcodes/assets/css/testimonial.min.css', array('pao_base_css') );
		wp_register_style( 'pao_contacts-css', EF_URL . '/shortcodes/assets/css/contacts.min.css', array('pao_base_css') );
		wp_register_style( 'pao_post_slider-css', EF_URL . '/shortcodes/assets/css/post_slider.min.css', array('pao_base_css') );
		wp_register_style( 'pao_video_btn-css', EF_URL . '/shortcodes/assets/css/video_btn.min.css', array('pao_base_css') );
		wp_register_style( 'pao_banner_image-css', EF_URL . '/shortcodes/assets/css/banner_image.min.css', array('pao_base_css') );
		wp_register_style( 'pao_pricing-css', EF_URL . '/shortcodes/assets/css/pricing.min.css', array('pao_base_css') );
		wp_register_style( 'pao_faq-css', EF_URL . '/shortcodes/assets/css/faq.min.css', array('pao_base_css') );
        wp_register_style( 'pao_exhibition-css', EF_URL . '/shortcodes/assets/css/exhibition.min.css', array('pao_base_css') );
        wp_register_style( 'pao_gallery-css', EF_URL . '/shortcodes/assets/css/pao_gallery.min.css', array('pao_base_css') );
        wp_register_style( 'pao_kenburn-css', EF_URL . '/shortcodes/assets/css/kenburn.min.css', array('pao_base_css') );
		wp_register_style( 'pao_coming_soon-css', EF_URL . '/shortcodes/assets/css/coming_soon.min.css', array('pao_base_css') );
		wp_register_style( 'pao_call_to_action-css', EF_URL . '/shortcodes/assets/css/call_to_action.min.css', array('pao_base_css') );
		wp_register_style( 'pao_product-slider-css', EF_URL . '/shortcodes/assets/css/product-slider.min.css', array('pao_base_css') );
        wp_register_style( 'pao_video_banner-css', EF_URL . '/shortcodes/assets/css/video_banner.min.css', array('pao_base_css') );
		wp_register_style( 'pao_portfolio_sliders-css', EF_URL . '/shortcodes/assets/css/portfolio_sliders.min.css', array('pao_base_css') );
		wp_register_style( 'pao_portfolio_list-css', EF_URL . '/shortcodes/assets/css/portfolio_list.min.css', array('pao_base_css') );
		wp_register_style( 'pao_animate_banner-css', EF_URL . '/shortcodes/assets/css/animate_banner.min.css', array('pao_base_css') );
		wp_register_style( 'pao_disortion-css', EF_URL . '/shortcodes/assets/css/disortion.min.css', array('pao_base_css') );
		wp_register_style( 'pao_services_list-css', EF_URL . '/shortcodes/assets/css/services_list.min.css', array('pao_base_css') );
		wp_register_style( 'pao_instagram-css', EF_URL . '/shortcodes/assets/css/instagram.min.css', array('pao_base_css') );
		wp_register_style( 'pao_physics_banner-css', EF_URL . '/shortcodes/assets/css/physics_banner.min.css', array('pao_base_css') );
		wp_register_style( 'pao_glitch-css', EF_URL . '/shortcodes/assets/css/glitch.min.css', array('pao_base_css') );

		// scripts
		wp_register_script( 'pao_youtube', 'https://www.youtube.com/iframe_api', '', true );
		wp_register_script( 'pao_parallax-fragments', EF_URL . '/shortcodes/assets/js/parallax.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_anime', EF_URL . '/shortcodes/assets/js/anime.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_magnific', EF_URL . '/shortcodes/assets/js/magnific.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_multiscroll', EF_URL . '/shortcodes/assets/js/jquery.multiscroll.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_portfolio_sliders', EF_URL . '/shortcodes/assets/js/portfolio_sliders.js', array( 'jquery', 'swiper3' ), false, true );
		wp_register_script( 'pao_slick', EF_URL . '/shortcodes/assets/js/slick.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_team-js', EF_URL . '/shortcodes/assets/js/team.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_countT-js', EF_URL . '/shortcodes/assets/js/countTo.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_services_list', EF_URL . '/shortcodes/assets/js/services_list.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_services', EF_URL . '/shortcodes/assets/js/services.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_skills-js', EF_URL . '/shortcodes/assets/js/skills.js', array(
			'jquery',
			'pao_countT-js'
		), false, true );
		wp_register_script( 'pao_banner_slider', EF_URL . '/shortcodes/assets/js/banner_slider.js', array( 'jquery' ), false, true );
		wp_register_script( 'animeBulb', EF_URL . '/shortcodes/assets/js/anime_bulb.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_animate_banner', EF_URL . '/shortcodes/assets/js/animate_banner.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_parallax_lib', EF_URL . '/shortcodes/assets/js/parallax.lib.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_map', EF_URL . '/shortcodes/assets/js/pao_map.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_coming_soon', EF_URL . '/shortcodes/assets/js/coming_soon.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_portfolio_list', EF_URL . '/shortcodes/assets/js/portfolio_list.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_info_block', EF_URL . '/shortcodes/assets/js/info_block.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_disortion1', EF_URL . '/shortcodes/assets/js/pixi/main1.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_disortion2', EF_URL . '/shortcodes/assets/js/pixi/main2.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_disortion3', EF_URL . '/shortcodes/assets/js/pixi/main3.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_disortion4', EF_URL . '/shortcodes/assets/js/pixi/main4.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_disortion5', EF_URL . '/shortcodes/assets/js/pixi/main5.js', array( 'jquery' ), false, true );
        wp_register_script( 'pao_kenburn', EF_URL . '/shortcodes/assets/js/kenburn.js', array( 'jquery' ), false, true );
        wp_register_script( 'pao_exhibition', EF_URL . '/shortcodes/assets/js/exhibition.js', array( 'imagesloaded' ), true, false );
        wp_register_script( 'pao_gallery', EF_URL . '/shortcodes/assets/js/pao_gallery.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_physics_three', EF_URL . '/shortcodes/assets/js/three.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_physics_perlin', EF_URL . '/shortcodes/assets/js/perlin.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_tweenmax', EF_URL . '/shortcodes/assets/js/TweenMax.min.js', array( 'jquery' ), false, true );
        wp_register_script( 'pao_video_banner', EF_URL . '/shortcodes/assets/js/video_banner.js', array( 'jquery', 'pao_youtube' ), false, true );
		wp_register_script( 'pao_physics_banner', EF_URL . '/shortcodes/assets/js/physics_banner.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_typed-js', EF_URL . '/shortcodes/assets/js/typed.js', array( 'jquery' ), false, true );
		wp_register_script( 'pao_headings', EF_URL . '/shortcodes/assets/js/headings.js', array( 'jquery', 'pao_typed-js' ), false, true );
	}



	if ( ! function_exists( 'pao_enqueue_select' ) ){
		function pao_enqueue_select() {
			wp_enqueue_style( 'pao-admin-css', EF_URL . '/admin/assets/image-picker/admin.css' );
			wp_enqueue_style( 'pao-imagepicker-css', EF_URL . '/admin/assets/image-picker/image-picker.css' );
			wp_enqueue_script( 'pao-image-picker', EF_URL . '/admin/assets/image-picker/image-picker.min.js', array( 'jquery' ), false, true );
		}
	}

	add_action( 'admin_enqueue_scripts', 'pao_enqueue_select',99);

	/* For Help */
//	add_action( 'admin_print_scripts', 'pao_add_help_script', 10, 1 );
	function pao_add_help_script() { ?>
        <script>!function (e, o, n) {
                window.HSCW = o, window.HS = n, n.beacon = n.beacon || {};
                var t = n.beacon;
                t.userConfig = {}, t.readyQueue = [], t.config = function (e) {
                    this.userConfig = e
                }, t.ready = function (e) {
                    this.readyQueue.push(e)
                }, o.config = {
                    docs: {enabled: !0, baseUrl: "//foxthemes.helpscoutdocs.com/"},
                    contact: {enabled: !0, formId: "e754a0af-250c-11e7-9841-0ab63ef01522"}
                };
                var r = e.getElementsByTagName("script")[0], c = e.createElement("script");
                c.type = "text/javascript", c.async = !0, c.src = "https://djtflbt20bdde.cloudfront.net/", r.parentNode.insertBefore(c, r)
            }(document, window.HSCW || {}, window.HS || {});</script>

        <script>
            HS.beacon.config({

                color: '#104787',
				<?php $theme = wp_get_theme(); ?>
                topics: [
                    {val: 'custom', label: 'I would Like to get Customization'},
                    {val: 'pao', label: 'Pao - Modern Photography Portfolio Theme'}
                ],
                collection: "58edd660dd8c8e5c5731510d", /* Id documentation Pao */
                icon: "message",
                showSubject: true,
                showContactFields: true,
                attachment: true,
                instructions: 'Please submit your question, and we will do our best to help.'
            });
        </script>

		<?php
	}

	new Pao_Plugins;


	// kill default gallery
	if ( ! function_exists( 'pao_kill_default_gallery' ) ) {
		function pao_kill_default_gallery() {
			global $post;

			if ( ! empty( $post ) && get_post_type( $post->ID ) == 'post' ) {
				remove_shortcode( 'gallery' );
				$create_new_shortcode = 'add' . '_' . 'shortcode';
				$create_new_shortcode( 'gallery', 'pao_gallery_to_slider' );
			}
		}
	}

	add_action( 'wp', 'pao_kill_default_gallery' );


//  change gallery to slider
	if ( ! function_exists( 'pao_gallery_to_slider' ) ) {
		function pao_gallery_to_slider( $atts, $content = '', $id = '' ) {

			extract( shortcode_atts( array(
				'ids' => ''
			), $atts ) );
			$ids = explode( ',', $ids );

			$output = '<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="responsive" data-add-slides="1" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">';
			$output .= '<div class="swiper-wrapper">';
			$i      = 0;

			foreach ( $ids as $id ) {
				$all_img_info      = $attachment = get_post( $id );
				$image_description = $attachment->post_excerpt;
				$img_url           = wp_get_attachment_image_src( $id, 'pao_slider_portfolio' );
				$output            .= '<div class="swiper-slide active" data-val="' . $id . '">';
				$output            .= '<div class="img-wrap">';
				$output            .= '<img class="s-img-switch" src="' . $img_url[0] . '" alt="">';
				$output            .= '</div>';
				$output            .= '<div class="description">' . wp_kses_post( $image_description ) . '</div>';
				$output            .= '</div>';
				$i ++;
			}
			$output .= '</div>';
			$output .= '<div class="pagination hidden"></div>';
			$output .= '<div class="swiper-arrow-right"><div><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div>';
			$output .= '<div class="swiper-arrow-left"><div><i class="fa fa-chevron-left" aria-hidden="true"></i></div></div>';
			$output .= '</div>';

			return $output;
		}
	}


	if ( ! function_exists( 'pao_portfolio_page_template' ) ) {
		function pao_portfolio_page_template( $template ) {
			$file_name = 'page-pdf.php';
			if ( isset( $_GET['download'] ) && $_GET['download'] == 'pdf' ) {
				$new_template = EF_ROOT . '/includes/' . $file_name;;
				if ( '' != $new_template ) {
					return $new_template;
				}
			}

			return $template;
		}
	}
	add_filter( 'template_include', 'pao_portfolio_page_template', 99 );

	if ( ! function_exists( 'paoiframeDecoder' ) ) {
		function paoiframeDecoder( $iframe_code ) {
			$iframe_code = base64_decode( strip_tags( $iframe_code ) );
		}

		add_action( 'paoiframeDecoder', 'paoiframeDecoder' );
	}


	if ( ! function_exists( 'pao_products_slider_load' ) ) {
		function pao_products_slider_load() {

			$category = sanitize_text_field( $_POST['cats'] );
			$order    = sanitize_text_field($_POST['order']);
			$orderby  = sanitize_text_field($_POST['orderby']);
			$count    = sanitize_text_field($_POST['count']);

			$autoplay    = sanitize_text_field($_POST['autoplay']);
			$loop    = sanitize_text_field($_POST['loop']);
			$speed    = sanitize_text_field($_POST['speed']);
			$lg_count    = sanitize_text_field($_POST['addslides']);
			$md_count    = sanitize_text_field($_POST['mdslides']);
			$sm_count    = sanitize_text_field($_POST['smslides']);
			$xs_count    = sanitize_text_field($_POST['xsslides']);

			$args = array(
				'post_type'      => 'product',
				'order'          => $order,
				'orderby'        => $orderby,
				'posts_per_page' => $count,
			);

			$category = explode(",", $category);

            $args['tax_query'][] = array(
                'taxonomy' => 'product_cat',
                'terms'    => $category,
                'field'    => 'slug',
            );


			$prod_filter = new WP_Query( $args );



			$lg_count = $lg_count < ($prod_filter->found_posts) ? $lg_count : $prod_filter->found_posts;
			$md_count = $md_count < $prod_filter->found_posts ? $md_count : $prod_filter->found_posts;
			$sm_count = $sm_count < $prod_filter->found_posts ? $sm_count : $prod_filter->found_posts;
			$xs_count = $xs_count < $prod_filter->found_posts ? $xs_count : $prod_filter->found_posts;

			ob_start(); ?>

            <div class="swiper3-container pao-product-filter" data-mouse="0"
                 data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-responsive="responsive" data-add-slides="<?php echo esc_attr($lg_count); ?>" data-lg-slides="<?php echo esc_attr($lg_count); ?>" data-md-slides="<?php echo esc_attr($md_count); ?>" data-sm-slides="<?php echo esc_attr($sm_count); ?>" data-xs-slides="<?php echo esc_attr($xs_count); ?>"
                 data-loop="<?php echo esc_attr( $loop ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>"
                 data-center="1" data-space="0" data-pagination-type="bullets"
                 data-mode="horizontal">
                <div class="swiper3-wrapper">

					<?php while ( $prod_filter->have_posts() ) : $prod_filter->the_post();

						global $post, $product;

						$filter_terms = wp_get_post_terms( $post->ID, 'product_cat' );
						$termClass    = '';
						if ( isset( $filter_terms ) && ! empty( $filter_terms ) ) {
							foreach ( $filter_terms as $term ) {
								$termClass .= '.' . $term->slug . ' ';
							}
						}

						$product_meta = get_post_meta( $post->ID, 'pao_product_options' );
						$label_new    = isset( $product_meta[0]['pao_product_new'] ) ? $product_meta[0]['pao_product_new'] : false; ?>

                        <div class="swiper3-slide <?php echo esc_attr( $termClass ); ?>">

                            <div class="pao-prod-list-image">
                                <div class="image-wrap">
									<?php if ( $product->is_on_sale() && ! $label_new ) : ?>

										<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'pao' ) . '</span>', $post, $product ); ?>

									<?php endif;

									if ( $label_new && ! $product->is_on_sale() ) { ?>
                                        <span class="on-new"><?php echo esc_html__( 'New', 'pao' ); ?></span>
									<?php }

									$image_size = apply_filters( 'single_product_archive_thumbnail_size', 'shop_catalog' );

									if ( has_post_thumbnail() ) {
										$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
										echo get_the_post_thumbnail( $post->ID, 'full', array(
											'title' => $props['title'],
											'alt'   => $props['alt'],
											'class' => '',
										) );
									} elseif ( wc_placeholder_img_src() ) {
										echo wc_placeholder_img( $image_size );
									} ?>


                                    <div class="product-links-wrapp">
                                        <div class="pao-add-to-cart">
											<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="pao-link">
											<?php esc_html_e( 'view', 'pao' ); ?>
                                        </a>
                                    </div>

                                </div>
                                <div class="info">
                                    <div class="title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
                                    <div class="price">
										<?php wc_get_template( 'loop/price.php' ); ?>
                                    </div>
                                </div>


                            </div>

                        </div>

						<?php
					endwhile; ?>

                </div>
                <div class="swiper3-pagination"></div>
            </div>
			<?php
			echo ob_get_clean();

			wp_die();
		}
	}


	add_action( 'wp_ajax_pao_products_slider_load', 'pao_products_slider_load' );
	add_action( 'wp_ajax_nopriv_pao_products_slider_load', 'pao_products_slider_load' );




	if ( ! function_exists( 'pao_portfolio_slider_load' ) ) {
		function pao_portfolio_slider_load() {

			$category = sanitize_text_field( $_POST['cats'] );
			$order    = sanitize_text_field($_POST['order']);
			$orderby  = sanitize_text_field($_POST['orderby']);
			$count    = sanitize_text_field($_POST['count']);

			$autoplay    = sanitize_text_field($_POST['autoplay']);
			$speed    = sanitize_text_field($_POST['speed']);

			$args = array(
				'post_type'      => 'portfolio',
				'order'          => $order,
				'orderby'        => $orderby,
				'posts_per_page' => $count,
			);

			$category = explode(",", $category);

			$args['tax_query'][] = array(
				'taxonomy' => 'portfolio-category',
				'terms'    => $category,
				'field'    => 'slug',
			);


			$portfolio_filter = new WP_Query( $args );

			ob_start(); ?>

            <div class="swiper3-container pao-portfolio-filter" data-mouse="0"
                 data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
                 data-loop="1"
                 data-speed="<?php echo esc_attr( $speed ); ?>"
                 data-center="1" data-space="0" data-pagination-type="bullets"
                 data-mode="horizontal">
                <div class="swiper3-wrapper">

					<?php while ( $portfolio_filter->have_posts() ) : $portfolio_filter->the_post();

						$filter_terms = wp_get_post_terms( $portfolio_filter->ID, 'portfolio-category' );
						$termClass    = '';
						if ( isset( $filter_terms ) && ! empty( $filter_terms ) ) {
							foreach ( $filter_terms as $term ) {
								$termClass .= '.' . $term->slug . ' ';
							}
						}

						$portfolio_meta = get_post_meta( $portfolio_filter->ID, 'pao_portfolio_options' );
						$link      = get_the_permalink();
						$target    = '_self';

						if ( $linked == 'none' && ! empty( $portfolio_meta['ext_link'] ) ) {
							$link   = $portfolio_meta['ext_link'];
							$target = '_blank';
						}

						if ( $blank == 'none' ) {
							$target = '_self';
						} elseif ( $blank == 'yes' ) {
							$target = '_blank';
						}
						$images    = explode( ',', $portfolio_meta[0]['slider'] ); ?>


                        <div class="swiper3-slide <?php echo esc_attr( $termClass ); ?>">

                            <div class="pao-portfolio-list-image">
                                <div class="image-wrap">
		                            <?php
		                            $image_id = get_post_thumbnail_id( $portfolio_meta->ID );
		                            if ( ! empty( $image_id ) && is_numeric( $image_id ) ) {
			                            $imageUrl = wp_get_attachment_image_url( $image_id, $image_original_size );
		                            } elseif ( ! empty( $images ) ) {
			                            $imageUrl = wp_get_attachment_image_url( $images[0], $image_original_size );
		                            } else {
			                            $imageUrl = '';
		                            }

		                            if(!empty($imageUrl)){
			                            echo pao_the_lazy_load_flter( $imageUrl, array(
				                            'class' => 's-img-switch',
			                            ) );
		                            } ?>

                                    <a href="<?php echo esc_attr($link); ?>" class="title" target="<?php echo esc_attr($target); ?>">
			                            <?php echo esc_html(get_the_title()); ?>
                                    </a>
                                </div>

                            </div>

                        </div>

						<?php
					endwhile; ?>

                </div>
                <div class="swiper3-pagination"></div>
            </div>
			<?php
			echo ob_get_clean();

			wp_die();
		}
	}


	add_action( 'wp_ajax_pao_portfolio_slider_load', 'pao_portfolio_slider_load' );
	add_action( 'wp_ajax_nopriv_pao_portfolio_slider_load', 'pao_portfolio_slider_load' );


	/**
	 * Load plugin textdomain.
	 *
	 * @since 1.0.0
	 */
	if ( ! function_exists( 'pao_plugin_load_textdomain' ) ) {
        function pao_plugin_load_textdomain() {
            load_plugin_textdomain( 'pao-plugin', false, basename( dirname( __FILE__ ) ) . '/languages' );
        }
    }

	add_action( 'plugins_loaded', 'pao_plugin_load_textdomain' );

    /**
     * Сustom pao menu list.
     */
    if ( ! function_exists( 'pao_get_menus' ) ) {
        function pao_get_menus() {
            $menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
            $array = array( 'none' => 'None' );
            foreach ( $menus as $menu ) {
                $array[ $menu->slug ] = $menu->name;
            }

            return $array;
        }
    }

    /**
     *
     * Icons array.
     * @since 1.0.0
     * @version 1.0.0
     *
     */

    if ( ! function_exists( 'pao_simple_icons' ) ) {
        function pao_simple_icons() {
            return array(
                array('icon-basic-accelerator' => 'icon-basic-accelerator'),
                array('icon-basic-alarm' => 'icon-basic-alarm'),
                array('icon-basic-anchor' => 'icon-basic-anchor'),
                array('icon-basic-anticlockwise' => 'icon-basic-anticlockwise'),
                array('icon-basic-archive' => 'icon-basic-archive'),
                array('icon-basic-archive-full' => 'icon-basic-archive-full'),
                array('icon-basic-ban' => 'icon-basic-ban'),
                array('icon-basic-battery-charge' => 'icon-basic-battery-charge'),
                array('icon-basic-battery-empty' => 'icon-basic-battery-empty'),
                array('icon-basic-battery-full' => 'icon-basic-battery-full'),
                array('icon-basic-battery-half' => 'icon-basic-battery-half'),
                array('icon-basic-bolt' => 'icon-basic-bolt'),
                array('icon-basic-book' => 'icon-basic-book'),
                array('icon-basic-book-pen' => 'icon-basic-book-pen'),
                array('icon-basic-book-pencil' => 'icon-basic-book-pencil'),
                array('icon-basic-bookmark' => 'icon-basic-bookmark'),
                array('icon-basic-calculator' => 'icon-basic-calculator'),
                array('icon-basic-calendar' => 'icon-basic-calendar'),
                array('icon-basic-cards-diamonds' => 'icon-basic-cards-diamonds'),
                array('icon-basic-cards-hearts' => 'icon-basic-cards-hearts'),
                array('icon-basic-case' => 'icon-basic-case'),
                array('icon-basic-chronometer' => 'icon-basic-chronometer'),
                array('icon-basic-clessidre' => 'icon-basic-clessidre'),
                array('icon-basic-clock' => 'icon-basic-clock'),
                array('icon-basic-clockwise' => 'icon-basic-clockwise'),
                array('icon-basic-cloud' => 'icon-basic-cloud'),
                array('icon-basic-clubs' => 'icon-basic-clubs'),
                array('icon-basic-compass' => 'icon-basic-compass'),
                array('icon-basic-cup' => 'icon-basic-cup'),
                array('icon-basic-diamonds' => 'icon-basic-diamonds'),
                array('icon-basic-display' => 'icon-basic-display'),
                array('icon-basic-download' => 'icon-basic-download'),
                array('icon-basic-exclamation' => 'icon-basic-exclamation'),
                array('icon-basic-eye' => 'icon-basic-eye'),
                array('icon-basic-eye-closed' => 'icon-basic-eye-closed'),
                array('icon-basic-female' => 'icon-basic-female'),
                array('icon-basic-flag1' => 'icon-basic-flag1'),
                array('icon-basic-flag2' => 'icon-basic-flag2'),
                array('icon-basic-floppydisk' => 'icon-basic-floppydisk'),
                array('icon-basic-folder' => 'icon-basic-folder'),
                array('icon-basic-folder-multiple' => 'icon-basic-folder-multiple'),
                array('icon-basic-gear' => 'icon-basic-gear'),
                array('icon-basic-geolocalize-01' => 'icon-basic-geolocalize-01'),
                array('icon-basic-geolocalize-05' => 'icon-basic-geolocalize-05'),
                array('icon-basic-globe' => 'icon-basic-globe'),
                array('icon-basic-gunsight' => 'icon-basic-gunsight'),
                array('icon-basic-hammer' => 'icon-basic-hammer'),
                array('icon-basic-headset' => 'icon-basic-headset'),
                array('icon-basic-heart' => 'icon-basic-heart'),
                array('icon-basic-heart-broken' => 'icon-basic-heart-broken'),
                array('icon-basic-helm' => 'icon-basic-helm'),
                array('icon-basic-home' => 'icon-basic-home'),
                array('icon-basic-info' => 'icon-basic-info'),
                array('icon-basic-ipod' => 'icon-basic-ipod'),
                array('icon-basic-joypad' => 'icon-basic-joypad'),
                array('icon-basic-key' => 'icon-basic-key'),
                array('icon-basic-keyboard' => 'icon-basic-keyboard'),
                array('icon-basic-laptop' => 'icon-basic-laptop'),
                array('icon-basic-life-buoy' => 'icon-basic-life-buoy'),
                array('icon-basic-lightbulb' => 'icon-basic-lightbulb'),
                array('icon-basic-link' => 'icon-basic-link'),
                array('icon-basic-lock' => 'icon-basic-lock'),
                array('icon-basic-lock-open' => 'icon-basic-lock-open'),
                array('icon-basic-magic-mouse' => 'icon-basic-magic-mouse'),
                array('icon-basic-magnifier' => 'icon-basic-magnifier'),
                array('icon-basic-magnifier-minus' => 'icon-basic-magnifier-minus'),
                array('icon-basic-magnifier-plus' => 'icon-basic-magnifier-plus'),
                array('icon-basic-mail' => 'icon-basic-mail'),
                array('icon-basic-mail-multiple' => 'icon-basic-mail-multiple'),
                array('icon-basic-mail-open' => 'icon-basic-mail-open'),
                array('icon-basic-mail-open-text' => 'icon-basic-mail-open-text'),
                array('icon-basic-male' => 'icon-basic-male'),
                array('icon-basic-map' => 'icon-basic-map'),
                array('icon-basic-message' => 'icon-basic-message'),
                array('icon-basic-message-multiple' => 'icon-basic-message-multiple'),
                array('icon-basic-message-txt' => 'icon-basic-message-txt'),
                array('icon-basic-mixer2' => 'icon-basic-mixer2'),
                array('icon-basic-mouse' => 'icon-basic-mouse'),
                array('icon-basic-notebook' => 'icon-basic-notebook'),
                array('icon-basic-notebook-pen' => 'icon-basic-notebook-pen'),
                array('icon-basic-notebook-pencil' => 'icon-basic-notebook-pencil'),
                array('icon-basic-paperplane' => 'icon-basic-paperplane'),
                array('icon-basic-pencil-ruler' => 'icon-basic-pencil-ruler'),
                array('icon-basic-pencil-ruler-pen' => 'icon-basic-pencil-ruler-pen'),
                array('icon-basic-photo' => 'icon-basic-photo'),
                array('icon-basic-picture' => 'icon-basic-picture'),
                array('icon-basic-picture-multiple' => 'icon-basic-picture-multiple'),
                array('icon-basic-pin1' => 'icon-basic-pin1'),
                array('icon-basic-pin2' => 'icon-basic-pin2'),
                array('icon-basic-postcard' => 'icon-basic-postcard'),
                array('icon-basic-postcard-multiple' => 'icon-basic-postcard-multiple'),
                array('icon-basic-printer' => 'icon-basic-printer'),
                array('icon-basic-question' => 'icon-basic-question'),
                array('icon-basic-rss' => 'icon-basic-rss'),
                array('icon-basic-server' => 'icon-basic-server'),
                array('icon-basic-server2' => 'icon-basic-server2'),
                array('icon-basic-server-cloud' => 'icon-basic-server-cloud'),
                array('icon-basic-server-download' => 'icon-basic-server-download'),
                array('icon-basic-server-upload' => 'icon-basic-server-upload'),
                array('icon-basic-settings' => 'icon-basic-settings'),
                array('icon-basic-share' => 'icon-basic-share'),
                array('icon-basic-sheet' => 'icon-basic-sheet'),
                array('icon-basic-sheet-multiple' => 'icon-basic-sheet-multiple'),
                array('icon-basic-sheet-pen' => 'icon-basic-sheet-pen'),
                array('icon-basic-sheet-pencil' => 'icon-basic-sheet-pencil'),
                array('icon-basic-sheet-txt' => 'icon-basic-sheet-txt'),
                array('icon-basic-signs' => 'icon-basic-signs'),
                array('icon-basic-smartphone' => 'icon-basic-smartphone'),
                array('icon-basic-spades' => 'icon-basic-spades'),
                array('icon-basic-spread' => 'icon-basic-spread'),
                array('icon-basic-spread-bookmark' => 'icon-basic-spread-bookmark'),
                array('icon-basic-spread-text' => 'icon-basic-spread-text'),
                array('icon-basic-spread-text-bookmark' => 'icon-basic-spread-bookmark'),
                array('icon-basic-star' => 'icon-basic-star'),
                array('icon-basic-tablet' => 'icon-basic-tablet'),
                array('icon-basic-target' => 'icon-basic-target'),
                array('icon-basic-todo' => 'icon-basic-todo'),
                array('icon-basic-todo-pen' => 'icon-basic-todo-pen'),
                array('icon-basic-todo-pencil' => 'icon-basic-todo-pencil'),
                array('icon-basic-todo-txt' => 'icon-basic-todo-txt'),
                array('icon-basic-todolist-pen' => 'icon-basic-todolist-pen'),
                array('icon-basic-todolist-pencil' => 'icon-basic-todolist-pencil'),
                array('icon-basic-trashcan' => 'icon-basic-trashcan'),
                array('icon-basic-trashcan-full' => 'icon-basic-trashcan-full'),
                array('icon-basic-trashcan-refresh' => 'icon-basic-trashcan-refresh'),
                array('icon-basic-trashcan-remove' => 'icon-basic-trashcan-remove'),
                array('icon-basic-upload' => 'icon-basic-upload'),
                array('icon-basic-usb' => 'icon-basic-usb'),
                array('icon-basic-video' => 'icon-basic-video'),
                array('icon-basic-watch' => 'icon-basic-watch'),
                array('icon-basic-webpage' => 'icon-basic-webpage'),
                array('icon-basic-webpage-img-txt' => 'icon-basic-webpage-img-txt'),
                array('icon-basic-webpage-multiple' => 'icon-basic-webpage-multiple'),
                array('icon-basic-webpage-txt' => 'icon-basic-webpage-txt'),
                array('icon-basic-world' => 'icon-basic-world'),
	            array('icon-basic-lightbulb-3' => 'icon-basic-lightbulb-3'),
	            array('icon-basic-lightbulb-2' => 'icon-basic-lightbulb-2'),
	            array('icon-basic-lightbulb-1' => 'icon-basic-lightbulb-1'),
            );
        }
    }
} // end of class_exists

