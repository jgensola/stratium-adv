<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.


// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
	'menu_title' => 'Theme Options',
	'menu_type'  => 'add_menu_page',
	'menu_slug'  => 'cs-framework',
	'ajax_save'  => false,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// ----------------------------------------
// general option section
// ----------------------------------------
$options[] = array(
	'name'   => 'general',
	'title'  => 'General',
	'icon'   => 'fa fa-globe',
	'fields' => array(
		array(
			'id'      => 'page_scroll_top',
			'type'    => 'switcher',
			'title'   => 'Enable scroll top button',
			'default' => false,
            'desc' => 'Display the button, with a click on which the page will scroll up',
		),
		array(
			'id'      => 'enable_dark',
			'type'    => 'switcher',
			'title'   => 'Enable dark theme color',
			'default' => false,
			'desc' => 'This option enable dark theme color',
		),
		array(
			'id'      => 'enable_font',
			'type'    => 'switcher',
			'title'   => 'Enable second font',
			'default' => false,
			'desc' => 'This option enable second font',
		),
		array(
			'id'      => 'sidebar',
			'type'    => 'checkbox',
			'title'   => 'Show sidebar on pages:',
			'options' => array(
				'post' => 'Post',
				'blog' => 'Blog'
			),
            'desc' => 'Display sidebar on select pages'
		),
        array(
            'id'      => 'sidebar_position',
            'type'    => 'select',
            'title'   => 'Sidebar Position',
            'options' => array(
                'left_sidebar' => 'Left Sidebar',
                'right_sidebar' => 'Right Sidebar',
            ),
            'dependency' => array( 'sidebar_post', '==', true ),
        ),
		array(
			'id'      => 'enable_lazy_load',
			'type'    => 'switcher',
			'title'   => 'Enable lazy load',
			'desc'    => 'Lazy Load delays loading of images in long web pages. Images outside of viewport will not be loaded before user scrolls to them. This option is available for Images and Maps',
			'default' => true
		),

		array(
		  'id'    => 'pao_enable_coming_soon',
		  'type'  => 'switcher',
		  'title' => 'Enable Coming Soon',
            'desc' => 'Redirect on the select page when site loading',
		),
		array(
		  'id'             => 'pao_page_coming_soon',
		  'type'           => 'select',
		  'title'          => 'Page Coming Soon',
		  'options'        => 'pages',
		  'query_args'    => array(
		      'sort_order'  => 'ASC',
		      'sort_column' => 'post_title',
		   ),
            'dependency' => array( 'pao_enable_coming_soon', '==', 'true' ),
            'desc' => 'Choose page'
		),
		array(
			'id'    => 'enable_copyright',
			'type'  => 'switcher',
			'title' => 'Enable Copyright',
			'default' => false,
            'desc' => 'Display a message when user click right button mouse on page'
		),
		array(
			'id'         => 'text_copyright',
			'type'       => 'wysiwyg',
			'title'      => 'Text Copyright',
			'default'    => '@2017 Pao',
			'dependency' => array( 'enable_copyright', '==', 'true' ),
            'desc' => 'Enter your message for copyright'
		),
		array(
			'id'    => 'enable_sound_mob',
			'type'  => 'switcher',
			'title' => 'Enable sound on mobile',
			'default' => true,
			'dependency' => array( 'enable_sound', '==', 'true' ),
            'desc' => 'Turning on sound when hover link for mobile'
		),
		array(
		  'id'    => 'pao_disable_preloader',
		  'type'  => 'switcher',
		  'title' => 'Disable Preloader',
		  'default' => false,
            'desc' => 'Turning off the animation which displays when the page’s content is loading'
		),
		array(
			'id'        => 'preloader_type',
			'type'      => 'image_select',
			'title'     => 'Type of preloader:',
			'options'   => array(
				'text'          => EF_URL . '/admin/assets/images/cs_images/preloader-bg_img.jpg',
				'image'         => EF_URL . '/admin/assets/images/cs_images/preloader-image.jpg',
				'spinner'       => EF_URL . '/admin/assets/images/cs_images/preloader-spinner.jpg',
				'modern_text'   => EF_URL . '/admin/assets/images/cs_images/preloader-loading.jpg',
			),
			'radio'     => true,
			'dependency' => array( 'pao_disable_preloader', '==', false ),
			'attributes'   => array(
				'data-depend-id' => 'preloader_type',
			),
			'default'   => 'text',
            'desc' => 'Choose preloader animation'
		),
		array(
			'id'         => 'preloader_text',
			'type'       => 'text',
			'title'      => 'Text for preloader',
			'default'    => 'P',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|text' ),
            'desc' =>  'Enter text for preloader',
		),
        array(
            'id'         => 'first_preloader_text',
            'type'       => 'text',
            'title'      => 'First text for modern preloader',
            'default'    => 'loading',
            'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|modern_text' ),
            'desc' =>  'Enter first text for preloader',
        ),
        array(
            'id'         => 'second_preloader_text',
            'type'       => 'text',
            'title'      => 'Second text for modern preloader',
            'default'    => 'please wait',
            'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|modern_text' ),
            'desc' =>  'Enter second text for preloader',
        ),
		array(
			'id'         => 'preloader_size_d',
			'type'       => 'number',
			'title'      => 'Preloader size on desktop (px)',
			'default'    => '300',
			'desc'       => 'Maximum height 800px',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|text' ),
		),
		array(
			'id'         => 'preloader_size_t',
			'type'       => 'number',
			'title'      => 'Preloader size on tablet (px)',
			'default'    => '200',
			'desc'       => 'Maximum height 800px',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|text' ),
		),
		array(
			'id'         => 'preloader_size_m',
			'type'       => 'number',
			'title'      => 'Preloader size on mobile (px)',
			'default'    => '130',
			'desc'       => 'Maximum height 800px',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|text' ),
		),
		array(
			'id'      => 'preloader_images',
			'type'    => 'gallery',
			'title'   => 'Background animation images for preloader',
			'default' => '',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|text' ),
            'desc' => 'Choose images'
		),
		array(
			'id'      => 'preloader_image',
			'type'    => 'image',
			'title'   => 'Preloader Image',
			'default' => '',
			'dependency' => array( 'pao_disable_preloader|preloader_type', '==|==', 'false|image' ),
            'desc' => 'Choose image'
		),
	) // end: fields
);


// ----------------------------------------
// Header option section
// ----------------------------------------
$options[] = array(
	'name'   => 'header',
	'title'  => 'Header',
	'icon'   => 'fa fa-star',
	'fields' => array(
		//enable fixed menu
		//Site logo
		array(
			'id'        => 'menu_style',
			'type'      => 'image_select',
			'title'     => 'Menu style:',
			'options'   => array(
				'center'   => EF_URL . '/admin/assets/images/cs_images/menu_center.jpg',
				'left'   => EF_URL . '/admin/assets/images/cs_images/menu_left.jpg',
				'full'   => EF_URL . '/admin/assets/images/cs_images/menu_full.jpg',
			),
			'radio'     => true,
			'attributes'   => array(
				'data-depend-id' => 'menu_style',
			),
			'default'   => 'aside',
            'desc' => 'Choose menu style'
		),
		array(
			'id'         => 'image_full_menu',
			'type'       => 'upload',
			'title'      => 'Image for Full menu style',
			'default'    => '',
			'desc'       => 'Add Image for Full menu style.',
			'dependency' => array( 'menu_style', '==', 'full' ),
		),
		array(
			'id'       => 'static_text',
			'type'     => 'textarea',
			'title'    => 'Copyright text',
			'settings' => array(
				'textarea_rows' => 5,
				'media_buttons' => false,
			),
			'default'  => 'Pao &copy; ' . date( 'Y' ) . '.',
			'dependency' => array( 'menu_style', '==', 'static_aside' ),
            'desc' => 'Enter copyright text for menu'
		),
		array(
			'id'      => 'mobile_menu',
			'type'    => 'switcher',
			'title'   => 'Enable mobile menu for tablet',
			'default' => false,
            'desc' => 'Enable mobile menu from width 1024px'
		),
		array(
			'id'      => 'vertical_logo',
			'type'    => 'switcher',
			'title'   => 'Vertical logo position?',
			'default' => false,
			'dependency' => array( 'menu_style', '==', 'aside' ),
            'desc' => 'This option changes logo position'
		),
		array(
			'id'      => 'aside_open',
			'type'    => 'switcher',
			'title'   => 'Open menu by default',
			'default' => false,
			'dependency' => array( 'menu_style', '==', 'aside' ),
            'desc' => 'Aside menu will be open by default'
		),
		array(
			'id'      => 'site_logo',
			'type'    => 'radio',
			'title'   => 'Type of site logo',
			'options' => array(
				'txtlogo' => 'Text Logo',
				'imglogo' => 'Image Logo',
			),
			'default' => array( 'txtlogo' ),
            'desc' => 'Choose type for logo'
		),
		array(
			'id'         => 'text_logo',
			'type'       => 'text',
			'title'      => 'Text Logo',
			'default'    => 'Pao',
			'sanitize'    => 'textarea',
			'dependency' => array( 'site_logo_txtlogo', '==', 'true' ),
            'desc' => 'Enter text for logo'
		),
		array(
			'id'         => 'text_logo_style',
			'type'       => 'radio',
			'title'      => 'Text logo style',
			'options'    => array(
				'default' => 'Default',
				'custom'  => 'Custom',
			),
			'default'    => array( 'default' ),
			'dependency' => array( 'site_logo_txtlogo', '==', 'true' ),
            'desc' => 'Choose style for logo'
		),
		array(
			'id'         => 'text_logo_width',
			'type'       => 'text',
			'title'      => 'Max width logo section',
			'default'    => '70px',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' ),
            'desc' => 'Enter max width (in px)'
		),
		array(
			'id'         => 'text_logo_color',
			'type'       => 'color_picker',
			'title'      => 'Text Logo Color',
			'default'    => '#fff',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' ),
            'desc' => 'Choose color for logo'
		),
		array(
			'id'         => 'text_logo_font_size',
			'type'       => 'text',
			'title'      => 'Text logo font size',
			'default'    => '20px',
			'dependency' => array( 'text_logo_style_custom|site_logo_txtlogo', '==|==', 'true|true' ),
            'desc' => 'Enter font size (in px). By default the logo have 20px font size'
		),
		array(
			'id'         => 'image_logo5',
			'type'       => 'upload',
			'title'      => 'Site Logo (Right Align style)',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo|menu_style', '==|==', 'true|left'),
		),
		array(
			'id'         => 'image_logo6',
			'type'       => 'upload',
			'title'      => 'Site Logo (Center style)',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo|menu_style', '==|==', 'true|center'),
		),
		array(
			'id'         => 'image_logo7',
			'type'       => 'upload',
			'title'      => 'Site Logo (Full screen style)',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo|menu_style', '==|==', 'true|full'),
		),
		array(
			'id'         => 'image_logo_scroll',
			'type'       => 'upload',
			'title'      => 'Site Logo on scroll',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'site_logo_imglogo', '==', 'true' ),
		),
		array(
			'id'         => 'img_logo_style',
			'type'       => 'radio',
			'title'      => 'Image logo style',
			'options'    => array(
				'default' => 'Default',
				'custom'  => 'Custom',
			),
			'default'    => array( 'default' ),
			'dependency' => array( 'site_logo_imglogo', '==', 'true' ),
            'desc' => 'Choose style for logo'
		),
		array(
			'id'         => 'img_logo_width',
			'type'       => 'text',
			'title'      => 'Site Logo Width Size',
			'desc'       => 'Enter width size (in px). By default the logo have 60px width size',
			'dependency' => array( 'img_logo_style_custom|site_logo_imglogo', '==|==', 'true|true' )
		),
		array(
			'id'         => 'img_logo_height',
			'type'       => 'text',
			'title'      => 'Site Logo Height Size',
			'desc'       => 'Enter height size (in px). By default the logo have 52px height size',
			'dependency' => array( 'img_logo_style_custom|site_logo_imglogo', '==|==', 'true|true' )
		),
		array(
			'id'           => 'header_social',
			'type'         => 'group',
			'title'        => 'Header social links',
			'button_title' => 'Add New',
			'desc' => 'Add social links for header',
			'fields'       => array(
				array(
					'id'    => 'header_social_link',
					'type'  => 'text',
					'title' => 'Link'
				),
				array(
					'id'    => 'header_social_icon',
					'type'  => 'icon',
					'title' => 'Icon'
				)
			),
			'default'      => array(
				array(
					'header_social_link' => 'https://www.facebook.com/',
					'header_social_icon' => 'fa fa-facebook'
				),
				array(
					'header_social_link' => 'https://www.pinterest.com/',
					'header_social_icon' => 'fa fa-pinterest-p'
				),
				array(
					'header_social_link' => 'https://twitter.com/',
					'header_social_icon' => 'fa fa-twitter'
				),
				array(
					'header_social_link' => 'https://dribbble.com/',
					'header_social_icon' => 'fa fa-dribbble'
				),
			)
		),
	) // end: fields
);

// Typography
$options[] = array(
	'name'   => 'typography',
	'title'  => 'Typography',
	'icon'   => 'fa fa-font',
	'fields'      => array(

		array(
		  'type'    => 'heading',
		  'content' => 'Typography Headings',
		),
		array(
			'id'              => 'heading',
			'type'            => 'group',
			'title'           => 'Typography Headings',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New',
			'desc' => 'This option allows change headings style',

			// begin: fields
			'fields'      => array(

			    // header size
			    array(
			      'id'             => 'heading_tag',
			      'type'           => 'select',
			      'title'          => 'Title Tag',
			      'options'        => array(
			        'h1'             => esc_html__('H1','pao'),
			        'h2'             => esc_html__('H2','pao'),
			        'h3'             => esc_html__('H3','pao'),
			        'h4'             => esc_html__('H4','pao'),
			        'h5'             => esc_html__('H5','pao'),
			        'h6'             => esc_html__('H6','pao'),
			        'p'             => esc_html__('Paragraph','pao'),
			      ),
			    ),

			    // font family
			    array(
			      'id'        => 'heading_family',
			      'type'      => 'typography',
			      'title'     => 'Font Family',
			      'default'   => array(
			        'family'  => 'Open Sans',
			        'variant' => 'regular',
			        'font'    => 'google', // this is helper for output
			      ),
			    ),

			    // font size
			    array(
			      'id'          => 'heading_size',
			      'type'        => 'text',
			      'title'       => 'Font Size (in px)',
			      'default'     => '54px',
			    ),
			),
		),

		array(
		  'type'    => 'heading',
		  'content' => 'Typography Menu',
		),
		// menu
		array(
		  'id'        => 'menu_item_family',
		  'type'      => 'typography',
		  'title'     => 'Menu Item Font Family',
		  'default'   => array(
		    'family'  => 'Montserrat',
		    'variant' => 'regular',
		    'font'    => 'google', // this is helper for output
		  ),
            'desc' => 'This option allows change font family for menu item'
		),

		// font size
		array(
		  'id'          => 'menu_item_size',
		  'type'        => 'text',
		  'title'       => 'Menu Item Font Size',
		  'default'     => '',
            'desc' => 'This option allows change font size for menu item (in px)'
		),

		// line height
		array(
		  'id'          => 'menu_line_height',
		  'type'        => 'text',
		  'title'       => 'Menu Line Height',
		  'default'     => '',
            'desc' => 'This option allows change line height for menu item'
		),

		//submenu
		array(
		  'id'        => 'submenu_item_family',
		  'type'      => 'typography',
		  'title'     => 'Submenu Item Font Family',
		  'default'   => array(
		    'family'  => 'Montserrat',
		    'variant' => 'regular',
		    'font'    => 'google', // this is helper for output
		  ),
            'desc' => 'This option allows change font family for submenu item'
		),

		// font size
		array(
		  'id'          => 'submenu_item_size',
		  'type'        => 'text',
		  'title'       => 'Submenu Item Font Size',
		  'default'     => '',
            'desc' => 'This option allows change font size for submenu item (in px)'
		),

		// line height
		array(
		  'id'          => 'submenu_line_height',
		  'type'        => 'text',
		  'title'       => 'Submenu Line Height',
		  'default'     => '',
            'desc' => 'This option allows change line height for submenu item'
		),
		array(
		  'type'    => 'heading',
		  'content' => 'Typography Button',
		),

		array(
		  'id'        => 'all_button_font_family',
		  'type'      => 'typography',
		  'title'     => 'Button Font Family',
		  'default'   => array(
		    'family'  => '',
		    'variant' => 'regular',
		    'font'    => 'websafe', // this is helper for output
		  ),
            'desc' => 'This option allows change font family for button'
		),

		// font size
		array(
		  'id'          => 'all_button_font_size',
		  'type'        => 'text',
		  'title'       => 'Button Font Size',
		  'default'     => '',
            'desc' => 'This option allows change font size for button (in px)'
		),

		// line height
		array(
		  'id'          => 'all_button_line_height',
		  'type'        => 'text',
		  'title'       => 'Button Line Height',
		  'default'     => '',
            'desc' => 'This option allows change line height for button'
		),

		// font color
		array(
		  'id'          => 'all_button_letter_spacing',
		  'type'        => 'text',
		  'title'       => 'Letter Spacing',
		  'default' => '',
            'desc' => 'This option allows change letter spacing for button (in px)'
		),
		array(
		  'type'    => 'heading',
		  'content' => 'Typography Link',
		),

		array(
		  'id'        => 'all_links_font_family',
		  'type'      => 'typography',
		  'title'     => 'Link Font Family',
		  'default'   => array(
		    'family'  => '',
		    'variant' => 'regular',
		    'font'    => 'websafe', // this is helper for output
		  ),
            'desc' => 'This option allows change font family for link'
		),

		// font size
		array(
		  'id'          => 'all_links_font_size',
		  'type'        => 'text',
		  'title'       => 'Link Font Size',
		  'default'     => '',
            'desc' => 'This option allows change font size for link (in px)'
		),

		// line height
		array(
		  'id'          => 'all_links_line_height',
		  'type'        => 'text',
		  'title'       => 'Link Line Height',
		  'default'     => '',
            'desc' => 'This option allows change line height for link'
		),

		// font color
		array(
		  'id'          => 'all_links_letter_spacing',
		  'type'        => 'text',
		  'title'       => 'Link Letter Spacing',
		  'default' => '',
            'desc' => 'This option allows change letter spacing for link (in px)'
		),
	),
);

// ----------------------------------------
// Socials API Configuration
// ----------------------------------------
$options[]      = array(
	'name'        => 'socials',
	'title'       => 'Social',
	'icon'        => 'fa fa-facebook',

	// begin: fields
	'fields'      => array(
		array(
			'id'      => 'insta_username',
			'type'    => 'text',
			'title'   => 'Instagram username',
			'default' => '',
            'desc' => 'Enter Instagram username'
		),
		array(
			'id'      => 'insta_count',
			'type'    => 'text',
			'title'   => 'Instagram count images',
			'default' => '',
            'desc' => 'Enter count images'
		),
		array(
			'id'      => 'access_token_instagram',
			'type'    => 'text',
			'title'   => 'Instagram access token',
			'default' => '6034420119.955bdb2.f9c42c27f20d42f89472f92b05a4f15e',
            'desc' => 'Enter Instagram access token'
		),
	) // end: fields
);

// ----------------------------------------
// Blog option section
// ----------------------------------------
$options[] = array(
	'name'   => 'blog',
	'title'  => 'Blog',
	'icon'   => 'fa fa-newspaper-o',
	'fields' => array(
		array(
			'id'        => 'blog_type',
			'type'      => 'image_select',
			'title'     => 'Blog Style:',
			'options'   => array(
				'metro'   => EF_URL . '/admin/assets/images/cs_images/blog-metro.jpg',
				'masonry'   => EF_URL . '/admin/assets/images/cs_images/blog-masonry.jpg',
			),
			'radio'     => true,
			'attributes'   => array(
				'data-depend-id' => 'blog_type',
			),
			'default'   => 'metro',
            'desc' => 'Choose style for blog'
		),
		array(
			'id'      => 'blog_categories_show',
			'type'    => 'switcher',
			'title'   => 'Show posts from not all categories?',
			'default' => false,
            'desc' => 'This option allows show posts in blog from not all categories'
		),
		array(
			'id'             => 'blog_categories',
			'type'           => 'select',
			'title'          => 'Show posts from categories:',
			'options'    => pao_element_values( 'post_category'),
			'attributes' => array(
				'multiple' => 'multiple',
			),
			'dependency' => array( 'blog_categories_show', '==', true ),
            'desc' => 'Select categories for showing posts in blog'
		),
		array(
			'id' => 'fixed_transparent_menu_blog',
			'type' => 'switcher',
			'title' => 'Transparent header for single post',
			'default' => false,
            'desc' => 'Turning on transparent header for single post'
		),
		array(
			'id'      => 'pao_social_post',
			'type'    => 'switcher',
			'title'   => 'Social sharing in posts',
			'default' => false,
            'desc' => 'Display social sharing buttons'
		),
		array(
			'id'      => 'pao_post_tags',
			'type'    => 'switcher',
			'title'   => 'Tags in posts',
			'default' => false,
            'desc' => 'Display tags in posts'
		),
		array(
			'id'      => 'pao_post_cat',
			'type'    => 'switcher',
			'title'   => 'Categories in posts',
			'default' => false,
            'desc' => 'Display categories in posts'
		),
		array(
			'id'      => 'pao_post_author',
			'type'    => 'switcher',
			'title'   => 'Author in post details page',
			'default' => false,
            'desc' => 'Display author in post details page'
		),
		array(
			'id'      => 'post_author_info',
			'type'    => 'switcher',
			'title'   => "Biographical Info from User's profile",
			'default' => true,
            'desc' => 'Display biographical info from user\'s profile in post details page'
		),

	) // end: fields
);


// ----------------------------------------
// Portfolio option section
// ----------------------------------------
$options[] = array(
	'name'   => 'portfolio',
	'title'  => 'Portfolio',
	'icon'   => 'fa fa-file-text-o',
	'fields' => array(
		array(
			'id'      => 'social_portfolio',
			'type'    => 'switcher',
			'title'   => 'Social sharing in portfolio',
			'default' => true,
            'desc' => 'Display social sharing buttons (for all portfolios)'
		),
		array(
			'id'      => 'navigation_portfolio',
			'type'    => 'switcher',
			'title'   => 'Navigation in portfolio',
			'default' => true,
            'desc' => 'Display navigation buttons (for all portfolios)'
		),
        array(
            'id'      => 'portfolio_protect_title',
            'type'    => 'textarea',
            'title'   => 'Portfolio protected text',
            'default' => '',
            'desc' => 'Enter text for portfolio protected page'
        ),
		array(
			'id'      => 'portfolio_slug',
			'type'    => 'text',
			'title'   => 'Portfolio Url Slug',
			'default' => '',
			'desc'    => 'This option allows change portfolio url slug. Please update <a href="'.home_url('wp-admin/options-permalink.php').'">permalinks</a> after this. '
		),
		array(
			'id'      => 'portfolio_category_slug',
			'type'    => 'text',
			'title'   => 'Portfolio Url Category Slug',
			'default' => '',
			'desc'    => 'This option allows change portfolio url category slug. Please update <a href="'.home_url('wp-admin/options-permalink.php').'">permalinks</a> after this. '
		),
	) // end: fields
);


// ----------------------------------------
// Footer option section                  -
// ----------------------------------------
$options[] = array(
	'name'   => 'footer',
	'title'  => 'Footer',
	'icon'   => 'fa fa-copyright',
	'fields' => array(
		// Footer with margin bottom.
		array(
			'id'      => 'enable_footer_copy',
			'type'    => 'switcher',
			'title'   => 'Enable Footer copyright',
			'default' => true,
            'desc'    => 'Turning on Footer copyright'
		),
        array(
            'id'       => 'footer_text',
            'type'     => 'wysiwyg',
            'title'    => 'Copyright text',
            'settings' => array(
                'textarea_rows' => 5,
                'media_buttons' => false,
            ),
            'default'  => 'Pao &copy; ' . date( 'Y' ) . '.',
            'dependency' => array( 'enable_footer_copy', '==', true ),
            'desc' => 'Enter copyright text for footer'
        ),
        array(
            'id'             => 'pao_copyright_align',
            'type'           => 'select',
            'title'          => 'Copyright align',
            'options'    => array(
                'center' => 'center',
                'right'  => 'right',
                'left' => 'left',
            ),
            'dependency' => array( 'enable_footer_copy', '==', true ),
            'desc' => 'Select align for copyright'
        ),
		array(
			'id'      => 'enable_footer_white',
			'type'    => 'switcher',
			'title'   => 'Enable Light Footer',
			'default' => false,
            'desc'    => 'Turning on Light footer'
		),
		array(
			'id'      => 'enable_parallax_footer',
			'type'    => 'switcher',
			'title'   => 'Enable Parallax Footer',
			'default' => false,
            'desc'    => 'Turning on Parallax footer'
		),

	) // end: fields
);

// ----------------------------------------
// Custom Css and JavaScript
// ----------------------------------------
$options[] = array(
	'name'   => 'custom_css',
	'title'  => 'Custom JavaScript',
	'icon'   => 'fa fa-paint-brush',
	'fields' => array(
		array(
			'id'    => 'custom_js_scripts',
			'desc'  => 'Only JS code, without tag &lt;script&gt;.',
			'type'  => 'textarea',
			'title' => 'Custom JavaScript code'
		)
	)
);
// ----------------------------------------
// 404 Page                               -
// ----------------------------------------
$options[] = array(
	'name'   => 'error_page',
	'title'  => '404 Page',
	'icon'   => 'fa fa-bolt',

	// begin: fields
	'fields' => array(
		array(
			'id'      => 'error_logo',
			'type'    => 'switcher',
			'title'   => 'Change logo for 404 page',
			'default' => false,
            'desc' => 'This option allows change logo'
		),
		array(
			'id'      => 'error_site_logo',
			'type'    => 'radio',
			'title'   => 'Type of site logo',
			'options' => array(
				'txtlogo' => 'Text Logo',
				'imglogo' => 'Image Logo',
			),
			'default' => array( 'imglogo' ),
			'dependency' => array( 'error_logo', '==', true ),
            'desc' => 'Choose type for logo'
		),
		array(
			'id'         => 'error_text_logo',
			'type'       => 'text',
			'title'      => 'Text Logo',
			'default'    => 'Pao',
			'sanitize'    => 'textarea',
			'dependency' => array( 'error_site_logo_txtlogo|error_logo', '==|==', 'true|true' ),
            'desc' => 'Enter text for logo'
		),
		array(
			'id'         => 'error_image_logo',
			'type'       => 'upload',
			'title'      => 'Image Logo',
			'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			'desc'       => 'Upload any media using the WordPress Native Uploader.',
			'dependency' => array( 'error_site_logo_imglogo|error_logo', '==|==', 'true|true' ),
		),
		array(
			'id'      => 'error_title',
			'type'    => 'text',
			'title'   => 'Error Title',
			'default' => 'Page not found',
            'desc' => 'Enter title'
		),
		array(
			'id'      => 'error_subtitle',
			'type'    => 'text',
			'title'   => 'Error Subtitle',
			'default' => '',
            'desc' => 'Enter subtitle'
		),
		array(
			'id'      => 'error_btn_text',
			'type'    => 'textarea',
			'title'   => 'Error button text',
			'default' => 'Go home',
            'desc' => 'Enter button text'
		),
		array(
			'id'             => 'btn_style',
			'type'           => 'select',
			'title'          => 'Button Style',
			'options'    => array(
                'a-btn-1' => 'Default button',
                'a-btn-2' => 'Default button with shadow',
                'a-btn-3' => 'Default transparent button',
                'a-btn-4' => 'Dark button',
                'a-btn-5' => 'Dark button with shadow',
                'a-btn-6' => 'Dark transparent button',
                'a-btn-7' => 'White button',
                'a-btn-8' => 'White transparent button',
			),
            'desc' => 'Change button style'
		),
		array(
			'id'      => 'image_404',
			'type'    => 'upload',
			'title'   => '404 page background',
			'default' => get_template_directory_uri() . '/assets/images/404.jpg',
            'desc' => 'Select background image'
		),
	) // end: fields
);
// ----------------------------------------
// Backup
// ----------------------------------------
$options[] = array(
	'name'   => 'backup_section',
	'title'  => 'Backup',
	'icon'   => 'fa fa-shield',

	// begin: fields
	'fields' => array(

		array(
			'type'    => 'notice',
			'class'   => 'warning',
			'content' => 'You can save your current options. Download a Backup and Import.',
		),

		array(
			'type' => 'backup',
		),

	)  // end: fields
);

CSFramework::instance( $settings, $options );