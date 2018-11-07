<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.


$options = array();

$options[] = array(
    'id' => 'pao_post_options',
    'title' => 'Post preview settings',
    'post_type' => 'post',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'section_3',
            'fields' => array(
                array(
                    'id' => 'post_preview_style',
                    'type' => 'select',
                    'title' => 'Preview style',
                    'options' => array(
                        'image' => 'Post image',
                        'text' => 'Quote',
                        'audio' => 'Soundcloud audio',
                        'video' => 'Video',
                        'slider' => 'Image slider',
                        'link' => 'Link'
                    ),
                    'default' => array('image')
                ),
                
                array(
                    'id' => 'post_preview_text',
                    'type' => 'wysiwyg',
                    'title' => 'Post preview text',
                    'dependency' => array('post_preview_style', '==', 'text')
                ),
	            array(
		            'id' => 'post_preview_author',
		            'type' => 'text',
		            'title' => 'Author',
		            'dependency' => array('post_preview_style', '==', 'text')
	            ),
	            array(
		            'id' => 'post_preview_link',
		            'type' => 'text',
		            'title' => 'Link',
		            'dependency' => array('post_preview_style', '==', 'link')
	            ),
                array(
                    'id' => 'post_preview_audio',
                    'type' => 'wysiwyg',
                    'title' => 'Soundcloud iframe',
                    'dependency' => array('post_preview_style', '==', 'audio')
                ),
                array(
                    'id' => 'post_preview_video',
                    'type' => 'text',
                    'title' => 'Video url from Youtube',
                    'dependency' => array('post_preview_style', '==', 'video')
                ),
                array(
                    'id' => 'post_preview_slider',
                    'type' => 'gallery',
                    'title' => 'Slider images',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                    'dependency' => array('post_preview_style', '==', 'slider')
                ),
                array(
                    'id' => 'pao_navigation_posts',
                    'type' => 'switcher',
                    'title' => 'Navigation in post item',
                    'default' => true
                ),
            )
        )
    )
);

$options[] = array(
    'id' => 'pao_portfolio_options',
    'title' => 'Portfolio details',
    'post_type' => 'portfolio',
    'context' => 'normal',
    'priority' => 'high',
    'sections' => array(
        array(
            'name' => 'section_5',
            'title' => 'Portfolio General Options',
            'fields' => array(

	            array(
		            'id'        => 'portfolio_style',
		            'type'      => 'image_select',
		            'title'     => 'Style for gallery:',
		            'options'   => array(
			            'parallax'    => EF_URL . '/admin/assets/images/cs_images/portfolio-parallax.jpg',
			            'simple_slider'   => EF_URL . '/admin/assets/images/cs_images/portfolio-simple-slider.jpg',
			            'simple_gallery'   => EF_URL . '/admin/assets/images/cs_images/portfolio-simple.jpg',
			            'left_gallery'   => EF_URL . '/admin/assets/images/cs_images/portfolio-left.jpg',
			            'alia'   => EF_URL . '/admin/assets/images/cs_images/portfolio-alia.jpg',
			            'tile_info'   => EF_URL . '/admin/assets/images/cs_images/portfolio-tile-info.jpg',
			            'urban'   => EF_URL . '/admin/assets/images/cs_images/portfolio-urban.jpg',
		            ),
		            'radio'     => true,
		            'attributes'   => array(
			            'data-depend-id' => 'portfolio_style',
		            ),
		            'default'   => 'parallax',
                    'desc' => 'Choose gallery style for portfolio'
	            ),
	            array(
		            'id' => 'slider',
		            'type' => 'gallery',
		            'title' => 'Image gallery',
		            'add_title' => 'Add Images',
		            'edit_title' => 'Edit Images',
		            'clear_title' => 'Remove Images',
                    'desc' => 'Add images for gallery'
	            ),
	            array(
		            'id' => 'portfolio_img_size',
		            'type' => 'select',
		            'title' => 'Size for images',
		            'options' => array_merge(array('full'),get_intermediate_image_sizes()),
		            'default'  => 'full',
                    'desc' => 'Select size for images of gallery'
	            ),
	            array(
		            'id' => 'additional_title',
		            'type' => 'text',
		            'title' => 'Additional title for content text',
		            'default' => '',
		            'dependency' => array('portfolio_style', '==', 'alia'),
                    'desc' => 'Enter addition title for this portfolio page'
	            ),
	            array(
		            'id' => 'additional_text',
		            'type' => 'textarea',
		            'title' => 'Additional text',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'alia,menio'),
                    'desc' => 'Enter addition text for this portfolio page'
	            ),
	            array(
		            'id' => 'images',
		            'type' => 'gallery',
		            'title' => 'Additional gallery',
		            'add_title' => 'Add Images',
		            'edit_title' => 'Edit Images',
		            'clear_title' => 'Remove Images',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,alia,menio'),
                    'desc' => 'Add addition gallery for this portfolio page'
	            ),
	            array(
		            'id' => 'blockquote',
		            'type' => 'textarea',
		            'title' => 'Blockquote text',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,urban,tile_info,menio'),
                    'desc' => 'Enter blockquote text for this portfolio page'
	            ),
	            array(
		            'id' => 'blockquote_author',
		            'type' => 'text',
		            'title' => 'Blockquote author',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'simple_slider,urban,tile_info,menio'),
                    'desc' => 'Enter blockquote author for this portfolio page'
	            ),
	            array(
		            'id'      => 'enable_recent_posts',
		            'type'    => 'switcher',
		            'title'   => 'Enable Recent Posts?',
		            'default' => true,
		            'dependency' => array('portfolio_style', 'any', 'tile_info,menio'),
                    'desc' => 'Turning on recent posts for this portfolio page'
	            ),
	            array(
		            'id' => 'recent_subtitle',
		            'type' => 'text',
		            'title' => 'Subtitle for recent posts',
		            'default' => '',
		            'dependency' => array('portfolio_style|enable_recent_posts', 'any|==', 'menio,tile_info|true'),
                    'desc' => 'Enter subtitle for recent posts of this portfolio page'
	            ),
	            array(
		            'id' => 'recent_title',
		            'type' => 'text',
		            'title' => 'Title for recent posts',
		            'default' => '',
		            'dependency' => array('portfolio_style|enable_recent_posts', 'any|==', 'menio,tile_info|true'),
                    'desc' => 'Enter title for recent posts of this portfolio page'
	            ),
	            array(
		            'id' => 'pao_social_portfolio',
		            'type' => 'switcher',
		            'title' => 'Social sharing in portfolio post',
		            'default' => true,
                    'desc' => 'Turning on social sharing buttons for this portfolio post'
	            ),
	            array(
		            'id' => 'portfolio_btn',
		            'type' => 'text',
		            'title' => 'Additional button',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
                    'desc' => 'Enter additional button text for this portfolio page'
	            ),
	            array(
		            'id' => 'portfolio_btn_url',
		            'type' => 'text',
		            'title' => 'Additional button URL',
		            'default' => '',
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
                    'desc' => 'Enter additional button URL for this portfolio page'
	            ),
	            array(
		            'id' => 'btn_style',
		            'type' => 'select',
		            'title' => 'Button style',
		            'options' => array(
			            'a-btn-1' => 'Default button',
			            'a-btn-2' => 'Default button with shadow',
			            'a-btn-3' => 'Default transparent button',
			            'a-btn-4' => 'Dark button',
			            'a-btn-5' => 'Dark button with shadow',
			            'a-btn-6' => 'Dark transparent button',
			            'a-btn-7' => 'White button',
			            'a-btn-8' => 'White transparent button',
		            ),
		            'dependency' => array('portfolio_style', 'any', 'left_gallery,simple,simple_slider,urban,alia'),
                    'desc' => 'Choose button style for this portfolio page'
	            ),
	            array(
		            'id' => 'pao_navigation_portfolio',
		            'type' => 'switcher',
		            'title' => 'Navigation in portfolio post',
		            'default' => true,
                    'desc' => 'Turning on navigation for this portfolio post'
	            ),
	            array(
		            'id' => 'ext_link',
		            'type' => 'text',
		            'title' => 'External link',
                    'desc' => 'Enter external link'
	            ),
            )
        ),
	    array(
		    'name' => 'section_4',
		    'title' => 'Portfolio Header Options',
		    'fields' => array(
			    array(
				    'id'      => 'page_menu',
				    'type'    => 'select',
				    'title'   => 'Page menu',
				    'options' => pao_get_menus(),
				    'default' => array( 'none' ),
                    'desc' => 'Select page menu'
			    ),
			    array(
				    'id'    => 'style_header',
				    'type'  => 'select',
				    'title' => 'Select header style',
				    'options' => array(
					    'empty'     => "Isn`t chosen",
					    'default'     => 'Default',
					    'fixed'       => 'Fixed',
					    'transparent' => 'Fixed transparent',
					    'static_transparent' => 'Static Transparent',
				    ),
				    'default' => 'empty',
				    'desc' => 'Only for Classic and Modern menu style.',
			    ),
			    array(
				    'id' => 'change_menu',
				    'type' => 'switcher',
				    'title' => 'Change menu style for this page?',
				    'default' => false,
                    'desc' => 'This option allows change menu style for this page'
			    ),
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
				    'dependency' => array( 'change_menu', '==', true ),
                    'desc' => 'Choose menu style for this page'
			    ),
			    array(
				    'id'      => 'vertical_logo',
				    'type'    => 'switcher',
				    'title'   => 'Vertical logo position?',
				    'default' => false,
				    'dependency' => array( 'menu_style|change_menu', '==|==', 'aside|true' ),
                    'desc' => 'This option changes logo position for this page'
			    ),
			    array(
				    'id'      => 'aside_open',
				    'type'    => 'switcher',
				    'title'   => 'Open menu by default',
				    'default' => false,
				    'dependency' => array( 'menu_style|change_menu', '==|==', 'aside|true' ),
                    'desc' => 'Aside menu will be open by default for this page'
			    ),
			    array(
				    'id' => 'menu_light_text',
				    'type' => 'switcher',
				    'title' => 'Light text on menu',
				    'default' => false,
				    'dependency' => array('style_header', 'any', 'transparent,static_transparent'),
                    'desc'    => 'Turning on Light text on menu for this page'
			    ),
			    array(
				    'id' => 'image_page_logo',
				    'type' => 'upload',
				    'title' => 'Site Logo',
				    'default' => '',
				    'desc' => 'Upload any media using the WordPress Native Uploader.',
			    ),
			    array(
				    'id'         => 'image_logo_scroll',
				    'type'       => 'upload',
				    'title'      => 'Site Logo on scroll',
				    'default'    => get_template_directory_uri() . '/assets/images/logo.png',
				    'desc'       => 'Upload any media using the WordPress Native Uploader.',
			    ),
		    )
	    ),
	    array(
		    'name' => 'section_3',
		    'title' => 'Portfolio Footer Options',
		    'fields' => array(
			    array(
				    'id' => 'fixed_transparent_footer',
				    'type' => 'switcher',
				    'title' => 'Fixed and tranparent footer',
				    'default' => false,
                    'desc' => 'Turning on fixed and transparent footer for this page'
			    ),

			    array(
				    'id'      => 'enable_footer_copy_page',
				    'type'    => 'switcher',
				    'title'   => 'Enable Footer copyright',
				    'default' => false,
                    'desc' => 'Turning on Footer copyright for this page'
			    ),
		    )
	    )
    )
);

$options[] = array(
    'id' => '_custom_page_options',
    'title' => 'Custom Options',
    'post_type' => 'page', // or post or CPT
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(

        // begin section
        array(
	        'name' => 'general_header_options',
	        'title' => 'Header Page Option',
	        'fields' => array(
		        array(
			        'id'      => 'page_menu',
			        'type'    => 'select',
			        'title'   => 'Page menu',
			        'options' => pao_get_menus(),
			        'default' => array( 'none' ),
                    'desc' => 'Select page menu'
		        ),
		        array(
			        'id' => 'change_menu',
			        'type' => 'switcher',
			        'title' => 'Change menu style for this page?',
			        'default' => false,
                    'desc' => 'This option allows change menu style for this page'
		        ),
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
			        'dependency' => array( 'change_menu', '==', true ),
                    'desc' => 'Choose menu style for this page'
		        ),

		        array(
			        'id'      => 'vertical_logo',
			        'type'    => 'switcher',
			        'title'   => 'Vertical logo position?',
			        'default' => false,
			        'dependency' => array( 'menu_style|change_menu', '==|==', 'aside|true' ),
                    'desc' => 'This option changes logo position for this page'
		        ),
		        array(
			        'id'      => 'aside_open',
			        'type'    => 'switcher',
			        'title'   => 'Open menu by default',
			        'default' => false,
			        'dependency' => array( 'menu_style|change_menu', '==|==', 'aside|true' ),
                    'desc' => 'Aside menu will be open by default for this page'
		        ),
		        array(
			        'id'    => 'style_header',
			        'type'  => 'select',
			        'title' => 'Select header style',
			        'options' => array(
				        'empty'     => "Isn`t chosen",
				        'default'     => 'Default',
				        'fixed'       => 'Fixed',
				        'transparent' => 'Fixed transparent',
				        'static_transparent' => 'Static Transparent',
				        'none' => 'None'
			        ),
			        'default' => 'empty',
			        'desc' => 'Only for Classic and Modern and Only Logo menu style.',
		        ),
		        array(
			        'id' => 'menu_light_text',
			        'type' => 'switcher',
			        'title' => 'Light text on menu',
			        'default' => false,
			        'dependency' => array('menu_style|style_header', 'any|any', 'left,center,full|transparent,static_transparent'),
                    'desc'    => 'Turning on Light text on menu for this page'
		        ),
		        array(
			        'id' => 'image_page_logo',
			        'type' => 'upload',
			        'title' => 'Site Logo',
			        'default' => '',
			        'desc' => 'Upload any media using the WordPress Native Uploader.',
		        ),
		        array(
			        'id'         => 'image_logo_scroll',
			        'type'       => 'upload',
			        'title'      => 'Site Logo on scroll',
			        'default'    => get_template_directory_uri() . '/assets/images/logo.png',
			        'desc'       => 'Upload any media using the WordPress Native Uploader.',
		        ),
		        array(
			        'id'         => 'image_logo_mobile',
			        'type'       => 'upload',
			        'title'      => 'Site Logo on mobile',
			        'default'    => '',
			        'desc'       => 'Upload any media using the WordPress Native Uploader.',
		        ),
		        array(
			        'id'      => 'header_scroll_bg',
			        'type'    => 'color_picker',
			        'title'   => 'Header Scroll Background Color',
			        'default' => '',
                    'desc'  => 'This option allows change header background color on scroll for this page'
		        ),
		        array(
			        'id'      => 'header_scroll_text',
			        'type'    => 'color_picker',
			        'title'   => 'Header Scroll Text Color',
			        'default' => '',
                    'desc'  => 'This option allows change header text color on scroll for this page'
		        ),
	        )
        ),
	    array(
		    'name' => 'general_footer_options',
		    'title' => 'Footer Page Option',
		    'fields' => array(
			    array(
				    'id' => 'fixed_transparent_footer',
				    'type' => 'switcher',
				    'title' => 'Fixed and transparent footer',
				    'default' => false,
                    'desc' => 'Turning on fixed and transparent footer for this page'
			    ),
			    array(
				    'id'      => 'enable_parallax_footer_page',
				    'type'    => 'switcher',
				    'title'   => 'Enable Parallax Footer',
				    'default' => false,
				    'dependency' => array( 'fixed_transparent_footer', '==', false ),
                    'desc' => 'Turning on Parallax footer for this page'
			    ),
			    array(
				    'id'      => 'footer_color',
				    'type'    => 'color_picker',
				    'title'   => 'Change Footer Background Color',
				    'default' => '',
                    'desc' => 'This options allows change footer background color for this page'
			    ),
			    array(
				    'id'      => 'enable_footer_copy_page',
				    'type'    => 'switcher',
				    'title'   => 'Enable Footer copyright',
				    'default' => true,
                    'desc' => 'Turning on Footer copyright for this page'
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
                    'dependency' => array( 'enable_footer_copy_page|enable_footer_socials', '==|==', true|false ),
                    'desc' => 'Select align copyright for this page'
                ),
			    array(
				    'id'      => 'enable_footer_white_page',
				    'type'    => 'switcher',
				    'title'   => 'Enable Light Footer',
				    'default' => false,
                    'desc' => 'Turning on Light footer for this page'
			    ),
		    )
	    ),
	    array(
		    'name' => 'general_page_options',
		    'title' => 'Other Page Option',
		    'fields' => array(
			    array(
				    'id'      => 'change_colors',
				    'type'    => 'switcher',
				    'title'   => 'Change main color?',
				    'default' => false,
				    'desc' => 'This option allows change main theme color'
			    ),
			    array(
				    'id'      => 'enable_dark',
				    'type'    => 'switcher',
				    'title'   => 'Enable dark theme color',
				    'default' => false,
				    'desc' => 'This option enable dark theme color',
				    'dependency' => array( 'change_colors', '==', 'true' ),
			    ),
			    array(
				    'id'      => 'page_main_color',
				    'type'    => 'color_picker',
				    'title'   => 'Main Color',
				    'default' => '#fd8558',
				    'dependency' => array( 'change_colors', '==', 'true' ),
				    'desc' => 'This option allows set main theme color'
			    ),
			    array(
				    'id'      => 'page_second_color',
				    'type'    => 'color_picker',
				    'title'   => 'Second Color for Gradient',
				    'default' => '#ffcf6d',
				    'dependency' => array( 'change_colors', '==', 'true' ),
				    'desc' => 'This option allows set Second Color for Gradient'
			    ),
			    array(
				    'id'      => 'enable_font',
				    'type'    => 'switcher',
				    'title'   => 'Enable second font',
				    'default' => false,
				    'desc' => 'This option enable second font',
			    ),
			    array(
				    'id' => 'disable_container_padding',
				    'type' => 'switcher',
				    'title' => 'Disable padding container',
				    'default' => false,
                    'desc' => 'This option allows change padding container on this page'
			    ),
			    array(
				    'id'    => 'padding_desktop',
				    'type'  => 'text',
				    'title' => 'Custom desktop paddings (left and right) for page',
                    'desc' => 'Enter padding container for desktop version of this page'
			    ),
			    array(
				    'id'    => 'padding_mobile',
				    'type'  => 'text',
				    'title' => 'Custom mobile paddings (left and right) for page',
                    'desc' => 'Enter padding container for mobile version of this page'
			    ),
		    ),
	    ),
	)
);


CSFramework_Metabox::instance($options);
