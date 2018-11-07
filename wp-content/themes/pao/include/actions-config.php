<?php
/**
 * The template for requried actions hooks.
 *
 * @package pao
 * @since 1.0
 */


add_action( 'wp_enqueue_scripts', 'pao_enqueue_scripts' );
add_action( 'wp_footer', 'pao_enqueue_main_style' );
add_action( 'widgets_init', 'pao_register_widgets' );
add_action( 'tgmpa_register', 'pao_include_required_plugins' );


define( 'CS_ACTIVE_FRAMEWORK', true );
define( 'CS_ACTIVE_METABOX', true );
define( 'CS_ACTIVE_TAXONOMY', true );
define( 'CS_ACTIVE_SHORTCODE', false );
define( 'CS_ACTIVE_CUSTOMIZE', false );






/*
 * Register sidebar.
 */
if ( ! function_exists( 'pao_register_widgets' ) ) {
	function pao_register_widgets() {
		// register sidebars
		register_sidebar(
			array(
				'id'            => 'sidebar',
				'name'          => esc_attr__( 'Sidebar', 'pao' ),
				'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5>',
				'after_title'   => '</h5>',
				'description'   => esc_attr__( 'Drag the widgets for sidebars.', 'pao' )
			)
		);
	}
}

function pao_enqueue_main_style() {
	global $post;

	if( is_page() || is_home()) {
		$post_id = get_queried_object_id();
	} else {
		$post_id = get_the_ID();
	}

	wp_enqueue_style( 'pao_dynamic-css', admin_url( 'admin-ajax.php' ) . '?action=pao_dynamic_css&post=' . $post_id , array('pao-theme-css') );
}

/*
Register Fonts
*/
if ( ! function_exists( 'pao_fonts_url' ) ) {
	function pao_fonts_url() {
		$font_url = '';

		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'pao' ) ) {
			$fonts = array(
				'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',
                'Merienda:400,700'
			);

			$font_url = add_query_arg( 'family',
				urlencode( implode( '|', $fonts ) . "&subset=latin,latin-ext" ), "//fonts.googleapis.com/css" );
		}

		return $font_url;
	}
}
/*
Enqueue scripts and styles.
*/
if ( ! function_exists( 'pao_font_scripts' ) ) {
	function pao_font_scripts() {
		wp_enqueue_style( 'pao-fonts', pao_fonts_url(), array(), '1.0.0' );
	}
}

if ( ! function_exists( 'pao_wp_body_classes' ) ) {
	function pao_wp_body_classes( $classes ) {
	    global $bodyClass;

		$bodyClass = explode(' ', $bodyClass);

		foreach ($bodyClass as $class){
			$classes[] = $class;
        }

		return $classes;
	}
}
add_filter( 'body_class','pao_wp_body_classes' );


/**
/**
 * @ return null
 * @ param none
 * @ loads all the js and css script to frontend
 **/
if ( ! function_exists( 'pao_enqueue_scripts' ) ) {
	function pao_enqueue_scripts() {

		// general settings
		if ( ( is_admin() ) ) {
			return;
		}

		wp_enqueue_style( 'pao-fonts', pao_fonts_url(), array(), '1.0.0' );
        wp_enqueue_script( 'modernizr', PAO_T_URI . '/assets/js/lib/modernizr-2.6.2.min.js', array( 'jquery' ), '', false );
		wp_enqueue_script( 'pao-animsition', PAO_T_URI . '/assets/js/lib/animsition.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-imagesLoaded', PAO_T_URI . '/assets/js/lib/imagesLoaded.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-wow', PAO_T_URI . '/assets/js/lib/wow.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-flexslider', PAO_T_URI . '/assets/js/lib/flexslider.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-parallax', PAO_T_URI . '/assets/js/lib/parallax.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-ytplayer', PAO_T_URI . '/assets/js/lib/ytplayer.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-fitVids', PAO_T_URI . '/assets/js/lib/fitVids.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'pao-isotope', PAO_T_URI . '/assets/js/lib/isotope.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'countdown', PAO_T_URI . '/assets/js/jquery.countdown.min.js', '', '', true );
		wp_enqueue_script( 'pao-foxlazy', PAO_T_URI . '/assets/js/foxlazy.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'easings', PAO_T_URI . '/assets/js/jquery.easings.min.js','','', true );
		wp_enqueue_script( 'multiscroll', PAO_T_URI . '/assets/js/jquery.multiscroll.min.js','','', true );
        wp_enqueue_script( 'magnific', PAO_T_URI . '/assets/js/magnific.js', '', '', true );
		wp_enqueue_script( 'tween-max', PAO_T_URI . '/assets/js/TweenMax.min.js','',  '',  true );
		wp_enqueue_script( 'equalHeightsPlugin', PAO_T_URI . '/assets/js/equalHeightsPlugin.js', array( 'jquery' ), '',  true );
		wp_enqueue_script( 'fancybox', PAO_T_URI . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'fitvids', PAO_T_URI . '/assets/js/jquery.fitvids.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'swiper3', PAO_T_URI . '/assets/js/swiper3.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'imagesloaded', PAO_T_URI . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'fragment', PAO_T_URI . '/assets/js/fragment.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'scrollMonitor', PAO_T_URI . '/assets/js/scrollMonitor.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'pao-slider-transition-init', PAO_T_URI . '/assets/js/slider-transition.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'advercom-js', PAO_T_URI . '/assets/js/jquery.advercom.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'owl-carousel-js', PAO_T_URI . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '', true );

		if( ! function_exists( 'cs_framework_init' )){
			wp_enqueue_script( 'mousewheel', PAO_T_URI . '/assets/lib/js/jquery.mousewheel.min.js', array( 'jquery' ), '', true);
			wp_enqueue_script( 'lightgallery', PAO_T_URI . '/assets/lib/js/lightgallery.min.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'justified-gallery', PAO_T_URI . '/assets/lib/js/jquery.justifiedGallery.js', array( 'jquery' ), '', true );
		}

		wp_enqueue_script( 'pao-slick', PAO_T_URI . '/assets/js/slick.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'sliphover', PAO_T_URI . '/assets/js/jquery.sliphover.min.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'thumbnails-popup', PAO_T_URI . '/assets/js/lib/thumbnails-popup.js', array( 'jquery', 'dgwt-jg-lightgallery' ),'', true );
		wp_enqueue_script( 'pao-pixi', PAO_T_URI . '/assets/js/pixi.min.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'pao-main-js', PAO_T_URI . '/assets/js/script.js', array( 'jquery' ), '',  true );

		// add TinyMCE style
		add_editor_style();

		// including jQuery plugins
		wp_localize_script( 'jquery', 'get',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'siteurl' => get_template_directory_uri(),
			)
		);

		if ( is_singular() ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// register style
		wp_enqueue_style( 'pao_base_css', PAO_T_URI . '/style.css' );

        wp_enqueue_style( 'magnific-popup', PAO_T_URI . '/assets/css/magnific-popup.css' );
		wp_enqueue_style( 'animsition', PAO_T_URI . '/assets/css/animsition.min.css' );
		wp_enqueue_style( 'bootstrap', PAO_T_URI . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'animate-css', PAO_T_URI . '/assets/css/animate.css' );
		wp_enqueue_style( 'font-awesome-css', PAO_T_URI . '/assets/css/font-awesome.min.css' );
		wp_enqueue_style( 'pe-icon-7-stroke', PAO_T_URI . '/assets/css/pe-icon-7-stroke.css' );
		wp_enqueue_style( 'fancybox', PAO_T_URI . '/assets/css/jquery.fancybox.min.css' );
		wp_enqueue_style( 'swiper3', PAO_T_URI . '/assets/css/swiper3.css' );
		wp_enqueue_style( 'simple-fonts', PAO_T_URI . '/assets/css/linear-basic.css' );
		wp_enqueue_style( 'pao-font-simple-icon',   PAO_T_URI . '/assets/css/simple-line-icon.css' );
		wp_enqueue_style( 'ionicons', PAO_T_URI . '/assets/css/ionicons.min.css' );
		wp_enqueue_style( 'pao-slick-css', PAO_T_URI . '/assets/css/slick.css' );
		wp_enqueue_style( 'pao-theme-css', PAO_T_URI . '/assets/css/pao.min.css' );
		wp_enqueue_style( 'pao-blog-css', PAO_T_URI . '/assets/css/blog.min.css' );
		wp_enqueue_style( 'advercom-css', PAO_T_URI . '/assets/less/advercom.min.css' );
		wp_enqueue_style( 'owl-carousel-css', PAO_T_URI . '/assets/css/owl.carousel.min.css' );

		if( ! function_exists( 'cs_framework_init' )){
			wp_enqueue_style( 'admin-style', PAO_T_URI . '/assets/lib/css/admin-style.css' );
			wp_enqueue_style( 'lightgallery', PAO_T_URI . '/assets/lib/css/lightgallery.min.css' );
			wp_enqueue_style( 'libs-style', PAO_T_URI . '/assets/lib/css/style.css' );
		}


		/* Add Custom JS */
		if ( cs_get_option( 'custom_js_scripts' ) ) {
			wp_add_inline_script( 'pao-main-js', cs_get_option( 'custom_js_scripts' ) );
		}

		if ( cs_get_option( 'enable_lazy_load' ) ) {
			wp_localize_script( 'pao-main-js', 'enable_foxlazy', 'enable' );
		}

		if ( cs_get_option('heading') ) {
			foreach (cs_get_option('heading') as $key => $title) {
				if ( empty( $title['heading_family'] )) continue;
				$font_family = $title['heading_family'];
				if(! empty($font_family['family']) ) { 
					wp_enqueue_style( sanitize_title_with_dashes($font_family['family']), '//fonts.googleapis.com/css?family=' . $font_family['family'] . ':' . $title['heading_family']['variant'].'' );
				}
			}
		}

		// include font family
		if ( function_exists('pao_include_fonts') ) {
			pao_include_fonts(
				array(
					'menu_item_family',
					'submenu_item_family',
					'gallery_font_family',
					'all_button_font_family',
					'all_button_font_family',
					'footer_font_family',
					'item_gallery_font_family',
					) // all options name 
			);
		}

	}
}


function pao_regiser_info_icons() {
	wp_enqueue_style( 'pao-font-info',   PAO_T_URI . '/assets/css/linear-basic.css' );

}
add_action( 'vc_base_register_admin_css', 'pao_regiser_info_icons' );

/**
 * Filter the page title.
 */
if ( ! function_exists( 'pao_wp_title' ) ) {
	function pao_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() ) {
			return $title;
		}

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'pao' ), max( $paged, $page ) );
		}

		return $title;
	}
}
add_filter( 'wp_title', 'pao_wp_title', 10, 2 );

/**
 * Include plugins
 **/
if ( ! function_exists( 'pao_include_required_plugins' ) ) {
	function pao_include_required_plugins() {

		$plugins = array(
			array(
				'name'               => esc_html__( 'Pao Plugins', 'pao' ),
				// The plugin name
				'slug'               => 'pao-plugins',
				// The plugin slug (typically the folder name)
				'source'             => esc_url( 'http://download-plugins.viewdemo.co/pao/pao-plugins.zip' ),
				// The plugin source
				'required'           => true,
				// If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'version'            => '1.0.1',
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__( 'Visual Composer', 'pao' ),
				// The plugin name
				'slug'               => 'js_composer',
				// The plugin slug (typically the folder name)
				'source'             => esc_url( 'http://download-plugins.viewdemo.co/premium-plugins/js_composer.zip' ),
				// The plugin source
				'required'           => true,
				// If false, the plugin is only 'recommended' instead of required
				'version'            => '',
				// E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__( 'The Grid', 'pao' ),
				// The plugin name
				'slug'               => 'the_grid',
				// The plugin slug (typically the folder name)
				'source'             => esc_url( 'http://download-plugins.viewdemo.co/premium-plugins/the_grid.zip' ),
				// The plugin source
				'required'           => true,
				// If false, the plugin is only 'recommended' instead of required
				'version'            => '',
				// E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__( 'Contact Form 7', 'pao' ),
				// The plugin name
				'slug'               => 'contact-form-7',
				// The plugin slug (typically the folder name)
				'required'           => false,
				// If false, the plugin is only 'recommended' instead of required
				'version'            => '',
				// E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__( 'UpQode Google Maps', 'pao' ),
				// The plugin name
				'slug'               => 'upqode-google-maps',
				// The plugin slug (typically the folder name)
				'required'           => false,
				// If false, the plugin is only 'recommended' instead of required
				'version'            => '',
				// E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__( 'Image Map Pro', 'pao' ),
				// The plugin name
				'slug'               => 'image-map-pro-wordpress',
				// The plugin slug (typically the folder name)
				'source'        => esc_url('http://download-plugins.viewdemo.co/premium-plugins/image-map-pro-wordpress.zip'), // The plugin source,
				'required'           => false,
				// If false, the plugin is only 'recommended' instead of required
				'version'            => '3.0.22',
				// E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation'   => false,
				// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false,
				// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '',
				// If set, overrides default API URL and points to an external URL
			),
		);

		// Change this to your theme text domain, used for internationalising strings

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'domain'       => 'pao',                    // Text domain - likely want to be the same as your theme.
			'default_path' => '',                            // Default absolute path to pre-packaged plugins
			'menu'         => 'tgmpa-install-plugins',    // Menu slug
			'has_notices'  => true,                        // Show admin notices or not
			'is_automatic' => true,                        // Automatically activate plugins after installation or not
			'message'      => '',                            // Message to output right before the plugins table
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'pao' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'pao' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'pao' ),
				// %1$s = plugin name
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'pao' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'pao' ),
				// %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'pao' ),
				// %1$s = plugin name(s)
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'pao' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'pao' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'pao' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'pao' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'pao' ),
				// %1$s = dashboard link
				'nag_type'                        => 'updated'
				// Determines admin notice type - can only be 'updated' or 'error'
			)
		);

		tgmpa( $plugins, $config );
	}
}

if ( ! function_exists( 'pao_password_form' ) ) {
	function pao_password_form() {
		global $post;
		$label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
		$o     = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
  ' . esc_html__( 'ENTER PASSWORD BELOW:', 'pao' ) . '
  <label for="' . esc_attr( $label ) . '"></label><input placeholder="' . esc_attr__( "Password:", 'pao' ) . '" name="post_password" id="' . esc_attr( $label ) . '" type="password" size="20" maxlength="20" /><input type="submit" name="' . esc_attr__( 'Submit', 'pao' ) . '" value="' . esc_attr__( 'ACCEPT', 'pao' ) . '" />
  </form>
  ';

		return $o;
	}
}
add_filter( 'the_password_form', 'pao_password_form' );



if (!function_exists('pao_redirect_coming_soon')) {
	function pao_redirect_coming_soon() {
		if ( cs_get_option('pao_enable_coming_soon') && cs_get_option('pao_page_coming_soon') && !is_admin_bar_showing() ) {

			$redirect_permalink = get_permalink( cs_get_option('pao_page_coming_soon') );
			if ( get_permalink() != $redirect_permalink ){
				wp_redirect( get_permalink( cs_get_option('pao_page_coming_soon') ) );
				exit();
			}
		}
	}
}
add_action( 'template_redirect', 'pao_redirect_coming_soon' );


/*
 * Check need minimal requirements (PHP and WordPress version)
 */
if ( version_compare( $GLOBALS['wp_version'], '4.3', '<' ) || version_compare( PHP_VERSION, '5.3', '<' ) ) {
	if ( ! function_exists( 'pao_requirements_notice' ) ) {
		function pao_requirements_notice() {
			$message = sprintf( esc_html__( 'Pao theme needs minimal WordPress version 4.3 and PHP 5.3<br>You are running version WordPress - %s, PHP - %s.<br>Please upgrade need module and try again.', 'pao' ), $GLOBALS['wp_version'], PHP_VERSION );
			printf( '<div class="notice-warning notice"><p><strong>%s</strong></p></div>', $message );
		}
	}
	add_action( 'admin_notices', 'pao_requirements_notice' );
}


/*
 * Check need minimal requirements (PHP and WordPress version)
 */
if ( ! function_exists( 'pao_coming_soon_notice' ) ) {
	function pao_coming_soon_notice() {
		if ( cs_get_option('pao_enable_coming_soon') ) {
			?>
			<div class="notice-warning notice">
				<p><strong>
				<?php echo esc_html__( 'Your "Coming Soon" option is enabled now.', 'pao' );
				?></strong></p></div>
			<?php
		}
	}
}
add_action( 'admin_notices', 'pao_coming_soon_notice' );