<?php
/**
 * Requried functions for theme backend.
 *
 * @package pao
 * @subpackage Template
 */

// cs framework missing
if ( ! function_exists( 'cs_get_option' ) ) {
	function cs_get_option() {
		return '';
	}

	function cs_get_customize_option() {
		return '';
	}
}

if ( ! function_exists( 'pao_add_default_cs_websafe_fonts' )) {
	function pao_add_default_cs_websafe_fonts($params)
	{
		return array_merge(array(''),$params);
	}
}
add_filter( 'cs_websafe_fonts', 'pao_add_default_cs_websafe_fonts' );



if ( ! function_exists( 'pao_fixed_header' ) ) {
    function pao_fixed_header( $menu_main_style, $post_id ) {

        $meta_data           = get_post_meta( $post_id, '_custom_page_options', true );
        $meta_data_portfolio = get_post_meta( $post_id, 'pao_portfolio_options', true );

        $blog_type        = cs_get_option( 'blog_single_type' ) ? cs_get_option( 'blog_single_type' ) : 'left';
        $fixed_menu_class = ( is_404() ) ? ' enable_fixed' : '';

        if ( $menu_main_style != 'aside' && $menu_main_style != 'static_aside' ) {
            if ( is_404() || ( cs_get_option( 'fixed_transparent_menu_blog' ) && is_single() && get_post_type() == 'post' ) ) {
                $fixed_menu_class .= ' header_trans-fixed';
            } elseif ( isset( $meta_data['style_header'] ) ) {
                if ( $meta_data['style_header'] === 'transparent' ) {
                    $fixed_menu_class .= ' header_trans-fixed';
                } elseif ( $meta_data['style_header'] === 'fixed' ) {
                    $fixed_menu_class .= ' fixed-header';
                } elseif ( $meta_data['style_header'] === 'none' ) {
                    $fixed_menu_class .= ' header_trans-fixed none';
                } elseif ( cs_get_option( 'fixed_menu' ) && cs_get_option( 'transparent_menu' ) && $meta_data['style_header'] === 'empty' ) {
                    $fixed_menu_class .= ' header_trans-fixed';
                }elseif($meta_data['style_header'] === 'static_transparent'){
	                $fixed_menu_class .= ' header_trans-fixed not-fixed-menu';
                }

            } elseif ( isset( $meta_data_portfolio['style_header'] ) ) {
                if ( cs_get_option( 'fixed_menu' ) && cs_get_option( 'transparent_menu' ) && $meta_data_portfolio['style_header'] === 'empty' ) {
                    $fixed_menu_class .= ' header_trans-fixed';
                } elseif ( $meta_data_portfolio['style_header'] === 'fixed' ) {
                    $fixed_menu_class .= ' fixed-header';
                } elseif ( $meta_data_portfolio['style_header'] === 'none' ) {
                    $fixed_menu_class .= ' header_trans-fixed none';
                } elseif ( $meta_data_portfolio['style_header'] === 'transparent' ) {
                    $fixed_menu_class .= ' header_trans-fixed';
                }elseif($meta_data_portfolio['style_header'] === 'static_transparent'){
	                $fixed_menu_class .= ' header_trans-fixed not-fixed-menu';
                }
            }

        }


        $fixed_menu_class = ! function_exists( 'cs_framework_init' ) && is_404() ? ' fixed-header' : $fixed_menu_class;
        $fixed_menu_class = is_single() && get_post_type() == 'post' && $blog_type == 'modern' && ! has_post_thumbnail() ? '' : $fixed_menu_class;
        $fixed_menu_class = apply_filters( 'pao_blog_menu_style', $fixed_menu_class );

        if ( $menu_main_style != 'aside' && $menu_main_style != 'static_aside' ) {
            if ( isset( $meta_data['menu_light_text'] ) && $meta_data['menu_light_text'] ) {
                if ( $meta_data['style_header'] == 'transparent' ) {
                    $fixed_menu_class .= ' menu_light_text';
                }elseif($meta_data['style_header'] === 'static_transparent'){
	                $fixed_menu_class .= ' menu_light_text';
                }
            } elseif ( isset( $meta_data_portfolio['menu_light_text'] ) && $meta_data_portfolio['menu_light_text'] ) {
                $fixed_menu_class .= ' menu_light_text';
            }

            if ( isset( $meta_data['scroll_bg_menu'] ) && $meta_data['scroll_bg_menu'] ) {
                if ( $meta_data['scroll_bg_menu']) {
                    $fixed_menu_class .= ' fixed-dark';
                }
            } elseif ( isset( $meta_data_portfolio['scroll_bg_menu'] ) && $meta_data_portfolio['scroll_bg_menu'] ) {
                $fixed_menu_class .= ' fixed-dark';
            }

        }

        $fixed_menu_class = is_tax( 'portfolio-client' ) || is_search() || is_tax( 'portfolio-category' ) ? '' : $fixed_menu_class;

        return $fixed_menu_class;

    }
}

if ( ! function_exists( 'pao_main_header_html' ) ) {
    function pao_main_header_html() {

        if ( is_page() || is_home() ) {
            $post_id = get_queried_object_id();
        } else {
            $post_id = get_the_ID();
        }

        $meta_data           = get_post_meta( $post_id, '_custom_page_options', true );
        $meta_data_portfolio = get_post_meta( $post_id, 'pao_portfolio_options', true );

        $menu_main_style = cs_get_option( 'menu_style' ) ? cs_get_option( 'menu_style' ) : 'left';
        $menu_main_style     = is_404() ? 'none' : $menu_main_style;
        $menu_main_style     = ! empty( $menu_main_style ) || ! function_exists( 'cs_framework_init' ) ? $menu_main_style : 'left';

        if ( isset( $meta_data['change_menu'] ) && $meta_data['change_menu'] && isset( $meta_data['menu_style'] ) ) {
            $menu_main_style = $meta_data['menu_style'];
        }

        if ( isset( $meta_data_portfolio['change_menu'] ) && $meta_data_portfolio['change_menu'] && isset( $meta_data_portfolio['menu_style'] ) ) {
            $menu_main_style = $meta_data_portfolio['menu_style'];
        }

        get_template_part( 'template-parts/menu/menu', $menu_main_style );

    }
}


add_action( 'pao_main_header', 'pao_main_header_html' );

/**
 * Сustom pao menu.
 */
if ( ! function_exists( 'pao_custom_menu' ) ) {
	function pao_custom_menu() {

		$walker = new pao_Menu_Walker();
		$args = array( 'container' => '', 'walker' => $walker );
		$meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );
		$portfolio_data = get_post_meta( get_the_ID(), 'pao_portfolio_options', true );

		if ( isset( $meta_data['page_menu'] ) && $meta_data['page_menu'] !== 'none' ) {
			$args['menu'] = $meta_data['page_menu'];
			wp_nav_menu( $args );
		} elseif( isset( $portfolio_data['page_menu'] ) && $portfolio_data['page_menu'] !== 'none'){
			$args['menu'] = $portfolio_data['page_menu'];
			wp_nav_menu( $args );
        } else {
			if ( has_nav_menu( 'primary-menu' ) ) {
				$args['theme_location'] = 'primary-menu';
				wp_nav_menu( $args );
			} else {
				echo '<span class="no-menu">' . esc_html__( 'Please register Top Navigation from', 'pao' ) . ' <a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" target="_blank">' . esc_html__( 'Appearance &gt; Menus', 'pao' ) . '</a></span>';
			}
		}

	}
}

/**
 *
 * Get first "url" from post content or string
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'pao_get_first_url_from_string' ) ) {
	function pao_get_first_url_from_string( $string ) {
		$pattern = "/^\b(?:(?:https?|ftp):\/\/)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
		preg_match( $pattern, $string, $link );

		return ( ! empty( $link[0] ) ) ? $link[0] : false;
	}
}

/**
 *
 * Custom Regular Expression
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'pao_get_shortcode_regex' ) ) {
	function pao_get_shortcode_regex( $tagregexp = '' ) {
		// WARNING! Do not change this regex without changing do_shortcode_tag() and strip_shortcode_tag()
		// Also, see shortcode_unautop() and shortcode.js.
		return
			'\\['                                // Opening bracket
			. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
			. "($tagregexp)"                     // 2: Shortcode name
			. '(?![\\w-])'                       // Not followed by word character or hyphen
			. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
			. '[^\\]\\/]*'                   // Not a closing bracket or forward slash
			. '(?:'
			. '\\/(?!\\])'               // A forward slash not followed by a closing bracket
			. '[^\\]\\/]*'               // Not a closing bracket or forward slash
			. ')*?'
			. ')'
			. '(?:'
			. '(\\/)'                        // 4: Self closing tag ...
			. '\\]'                          // ... and closing bracket
			. '|'
			. '\\]'                          // Closing bracket
			. '(?:'
			. '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
			. '[^\\[]*+'             // Not an opening bracket
			. '(?:'
			. '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
			. '[^\\[]*+'         // Not an opening bracket
			. ')*+'
			. ')'
			. '\\[\\/\\2\\]'             // Closing shortcode tag
			. ')?'
			. ')'
			. '(\\]?)';                          // 6: Optional second closing brocket for escaping shortcodes: [[tag]]
	}
}

/**
 *
 * Tag Regular Expression
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'pao_tagregexp' ) ) {
	function pao_tagregexp() {
		return apply_filters( 'pao_custom_tagregexp', 'video|audio|playlist|video-playlist|embed|cs_media' );
	}
}

/**
 *
 * POST FORMAT: VIDEO & AUDIO
 *
 */
if ( ! function_exists( 'pao_post_media' ) ) {
	function pao_post_media( $content ) {
		$result = strpos( $content, 'iframe' );
		if ( $result === false ) {
			$media = pao_get_first_url_from_string( $content );
			if ( ! empty( $media ) ) {
				global $wp_embed;
				$content = do_shortcode( $wp_embed->run_shortcode( '[embed]' . $media . '[/embed]' ) );
			} else {
				$pattern = pao_get_shortcode_regex( pao_tagregexp() );
				preg_match( '/' . $pattern . '/s', $content, $media );
				if ( ! empty( $media[2] ) ) {
					if ( $media[2] == 'embed' ) {
						global $wp_embed;
						$content = do_shortcode( $wp_embed->run_shortcode( $media[0] ) );
					} else {
						$content = do_shortcode( $media[0] );
					}
				}
			}
			if ( ! empty( $media ) ) {
				$output = $content;

				return $output;
			}

			return false;
		} else {
			return $content;
		}
	}
}

/**
 *
 * Create custom html structure for comments
 *
 */
if ( ! function_exists( 'pao_comment' ) ) {
	function pao_comment( $comment, $args, $depth ) {

		$GLOBALS['comment'] = $comment;

		switch ( $comment->comment_type ):
			case 'pingback':
			case 'trackback': ?>
				<p class="pingback">
					<?php esc_html_e( 'Pingback:', 'pao' ); ?><?php comment_author_link(); ?>
					<?php edit_comment_link( esc_html__( '(Edit)', 'pao' ), '<span class="edit-link">', '</span>' ); ?>
				</p>
				<?php
				break;
			default:
				// generate comments
				?>
				<li <?php comment_class( 'ct-part' ); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<div class="content">
            <div class="person-img">
              <?php echo get_avatar( $comment, '70', '', '', array( 'class' => 'img-person' ) ); ?>
            </div>
            <div class="comment-content">
            <div class="person">
              <div class="author-wrap">
							<a href="#" class="author">
								<?php comment_author(); ?>
							</a>
                          <span class="comment-date">
                            <?php comment_date( get_option( 'date_format' ) ); ?>
                          </span>
              </div>
						</div>
						<?php
						comment_reply_link(
							array_merge( $args,
								array(
									'reply_text' => esc_html__( 'Reply', 'pao' ),
									'after'      => '',
									'depth'      => $depth,
									'max_depth'  => $args['max_depth']
								)
							)
						);
						?>
						<div class="text">
							<?php comment_text(); ?>
						</div>
            </div>
					</div>
				</div>
				<?php
				break;
		endswitch;
	}
}

/*
 * Site logo function.
 */
if ( ! function_exists( 'pao_site_logo' ) ) {
	function pao_site_logo() {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">

			<?php

			$logoHover = cs_get_option('image_logo_scroll');

			if(is_404() && cs_get_option('error_logo')){
				if ( apply_filters( 'pao_type_logo', cs_get_option( 'error_site_logo' )) == 'txtlogo'  ) {
					echo ' <span> ' . esc_html( cs_get_option( 'error_text_logo' ) ) . '</span>';
				} else {
					$logo = '';
					if (cs_get_option( 'error_image_logo' )) {
						$logo = cs_get_option('error_image_logo');
					}

					// logo for page
					?>
					<img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="main-logo">

				    <?php if($logoHover){ ?>
                        <img src="<?php echo esc_url($logoHover); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="logo-hover">
					<?php }else{ ?>
                        <img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="logo-hover">
                    <?php }
				}
			} else {
				$meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );
				$meta_data_portfolio = get_post_meta(get_the_ID(), 'pao_portfolio_options', true);
				if ( apply_filters( 'pao_type_logo', cs_get_option( 'site_logo' ) ) == 'imglogo' || (isset( $meta_data['image_page_logo']) && !empty($meta_data['image_page_logo'])) || (isset( $meta_data_portfolio['image_page_logo'] )  && !empty($meta_data_portfolio['image_page_logo']))) {

					$logo = '';
					if ( cs_get_option( 'menu_style' ) == 'right' ) {
						$logo = cs_get_option( 'image_logo' );
					} elseif ( cs_get_option( 'menu_style' ) == 'center' ) {
						$logo = cs_get_option( 'image_logo2' );
					}elseif ( cs_get_option( 'menu_style' ) == 'aside' ) {
						$logo = cs_get_option( 'image_logo3' );
                    }elseif(cs_get_option( 'menu_style' ) == 'static_aside' ){
						$logo = cs_get_option( 'image_logo4' );
                    }elseif(cs_get_option( 'menu_style' ) == 'left' ){
						$logo = cs_get_option( 'image_logo5' );
                    }elseif(cs_get_option( 'menu_style' ) == 'compact' ){
						$logo = cs_get_option( 'image_logo6' );
                    }elseif(cs_get_option( 'menu_style' ) == 'full' ){
						$logo = cs_get_option( 'image_logo7' );
					}elseif(cs_get_option( 'menu_style' ) == 'only_logo'){
						$logo = cs_get_option( 'image_logo8' );
                    }


					// logo for page

					$logo = ! empty( $meta_data['image_page_logo'] ) ? $meta_data['image_page_logo'] : $logo;
					$logo = isset( $meta_data_portfolio['image_page_logo'] ) && ! empty( $meta_data_portfolio['image_page_logo'] ) ? $meta_data_portfolio['image_page_logo'] : $logo;
					$logoHover = isset( $meta_data['image_logo_scroll']) && ! empty( $meta_data['image_logo_scroll'] ) ? $meta_data['image_logo_scroll'] : $logoHover;
					$logoHover = isset( $meta_data_portfolio['image_logo_scroll']) && ! empty( $meta_data_portfolio['image_logo_scroll'] ) ? $meta_data_portfolio['image_logo_scroll'] : $logoHover;
					$image_logo = apply_filters( 'pao_header_logo', $logo );
					$img_src = ! empty( $image_logo ) ? $image_logo : PAO_T_URI . '/assets/images/logo.png';
                    $image_logo_mobile = isset( $meta_data['image_logo_mobile']) && ! empty( $meta_data['image_logo_mobile'] ) ? $meta_data['image_logo_mobile'] : $img_src; ?>
                    <img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="main-logo">

                    <?php if($logoHover){ ?>
                        <img src="<?php echo esc_url($logoHover); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="logo-hover">
					<?php }else{ ?>
                        <img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="logo-hover">
					<?php } ?>
                        <img src="<?php echo esc_url($image_logo_mobile); ?>" alt="<?php echo get_option( 'blogname' ); ?>" class="main-logo logo-mobile">
					<?php

				} elseif ( ! function_exists( 'cs_framework_init' ) ) {
					echo '<span>' . get_option( 'blogname' ) . '</span>';
                } else {
					echo '<span>adver<i>com</i></span>';
                }
			} ?>
		</a>
	<?php }
}

/*
 * Blog item header.
 */
if ( ! function_exists( 'pao_blog_item_hedeader' ) ) {
	function pao_blog_item_hedeader( $option, $post_id , $video_params = array(), $classButton = '', $classWrap = '' ) {
		$format = get_post_format( $post_id );
		if ( isset( $option[0]['post_preview_style'] ) ) {
			switch ( $option[0]['post_preview_style'] ) {
				case 'image':
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
					$blog_type = cs_get_option('blog_type') ? cs_get_option('blog_type') : 'masonry';
					$blog_type = apply_filters( 'pao_blog_style', $blog_type );
					$imgClass = $blog_type == 'masonry' ? '' : 's-img-switch';
					$output = '';
					if ( !empty( $image ) && ( $format != 'quote' ) ) {
                      $output .= '<div class="post-media">';
                      $output .= pao_the_lazy_load_flter( $image[0], array(
                          'class' => $imgClass,
                          'alt'   => ''
                      ) );
                      $output .= '</div>';
					}

					break;
				case 'video':
					$output = '<div class="post-media video-container iframe-video youtube ' . esc_attr($classWrap) . '" data-type-start="click">';
                    $video_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
                    $output .= pao_the_lazy_load_flter( $video_img[0], array(
                        'class' => 's-img-switch',
                        'alt'   => ''
                    ) );

                    $video_link = $option[0]['post_preview_video'];

                    $output .= '<div class="video-content video-content-blog"><a href="'. esc_url( $video_link ).'" class="play ' . esc_attr($classButton) . '"></a></div>';
					$output .= '<span class="close fa fa-close"></span>';
					$output .= '</div>';
					break;
				case 'slider':

					$blog_type = cs_get_option('blog_type') ? cs_get_option('blog_type') : 'masonry';
					$blog_type = apply_filters( 'pao_blog_style', $blog_type );

					if($blog_type == 'masonry'){
						$imgClass = $blog_type == 'masonry' ? '' : 's-img-switch';
						$output = '';
						if ( !empty( $image ) && ( $format != 'quote' ) ) {
							$output .= '<div class="post-media">';
							$output .= pao_the_lazy_load_flter( $image[0], array(
								'class' => $imgClass,
								'alt'   => ''
							) );
							$output .= '</div>';
						}
                    }else{
						$output = '<div class="post-media">';
						$output .= '<div class="img-slider">';
						$output .= '<ul class="slides">';
						$images = explode( ',', $option[0]['post_preview_slider'] );
						foreach ( $images as $image ) {
							$url = ( is_numeric( $image ) && ! empty( $image ) ) ? wp_get_attachment_url( $image ) : '';
							if ( ! empty( $url ) ) {
								$output .= '<li class="post-slider-img">';
								$output .= pao_the_lazy_load_flter( $url, array(
									'class' => 's-img-switch',
									'alt'   => ''
								) );
								$output .= '</li>';
							}
						}
						$output .= '</ul>';
						$output .= '</div>';
						$output .= '</div>';
                    }


					break;
				case 'text':
					$output = '<i class="fa fa-quote-right fa-2x"></i><blockquote>';
					$output .= wp_kses_post( $option[0]['post_preview_text'] );
					$output .= '</blockquote>';
					if(isset($option[0]['post_preview_author']) && !empty($option[0]['post_preview_author'])){
						$output .= '<cite>';
						$output .= wp_kses_post($option[0]['post_preview_author']);
						$output .= '</cite>';
					}
					break;
				case 'audio':
					$output = '<div class="post-media">';
					$output .=  pao_post_media( $option[0]['post_preview_audio'] );
					$output .= '</div>';
					break;
				case 'link':
					$output = '<div class="link-wrap"><i class="ion-link"></i><a href="'. esc_url($option[0]['post_preview_link']) .'">';
					$output .= wp_kses_post( $option[0]['post_preview_link'] );
					$output .= '</a></div>';
					break;
			}
		} else {
			$output = '';
			if ( $format == 'quote' ) {
				$output .= '<i class="fa fa-quote-right fa-2x"></i><blockquote>';
				$output .= get_the_excerpt();
				$output .= '</blockquote>';
			}elseif($format == 'link'){
				$output .= '<div class="link-wrap"><i class="ion-link"></i>';
				$output .= get_the_content();
				$output .= '</div>';
			}else{
				$image = wp_get_attachment_image_url( get_post_thumbnail_id( $post_id ), 'large' );
				$blog_type = cs_get_option('blog_type') ? cs_get_option('blog_type') : 'masonry';
				$imgClass = $blog_type == 'masonry' ? '' : 's-img-switch';
				if(!empty($image)){
					$output .= '<div class="post-media">';
					$output .= pao_the_lazy_load_flter( $image, array(
						'class' => $imgClass,
						'alt'   => ''
					) );
					$output .= '</div>';
                }

            }
		}
		echo do_shortcode($output);
	}
}

/*
* Get Page For Navi
*/
if ( ! function_exists( 'pao_get_pages_for_navi' ) ) {
	function pao_get_pages_for_navi() {
		$posts = get_posts( "post_type=page&post_status=publish&numberposts=99999&orderby=menu_order" );
		$pages = get_page_hierarchy( $posts );
		$pages = array_keys( $pages );

		return $pages;
	}
}


/**
 *
 * Get instagram images.
 * @since 1.0.0
 * @version 1.0.0
 *
 **/
if ( ! function_exists( 'pao_get_imstagram' ) ) {
	function pao_get_imstagram( $username, $count_photos = 7 ) {

		$response = wp_remote_get( sprintf( 'https://api.instagram.com/v1/users/self/media/recent/?access_token=%s&count=%s', cs_get_option('access_token_instagram'), $count_photos ) );
		if ( is_wp_error( $response ) || 200 != wp_remote_retrieve_response_code( $response ) ) {
			return false;
		}

		$data = json_decode( wp_remote_retrieve_body( $response ) );

		$result = array();
		$username = '';

		foreach ( $data->data as $item ) {

			if ( empty( $username ) ) {
				$username = $item->user->username;
			}

			$crop_function = false;
			$thumbnail     = $item->images->thumbnail->url;
			preg_match( "/\/([c]\d{1,4}\.\d{1,4}\.\d{1,4}\.\d{1,4})\//", $thumbnail, $crop_function );

			$result[] = array(
				'link'          => $item->link,
				'image-url'     => $item->images->standard_resolution->url
			);
		}

		$result = array('items' => $result, 'username'=>$username);

		return $result;
	}
}

// Custom row styles for onepage site type+-.
if ( ! function_exists('pao_dynamic_css' ) ) {
  function pao_dynamic_css() {
    require_once get_template_directory() . '/assets/css/custom.css.php';
    wp_die();
  }
}
add_action( 'wp_ajax_nopriv_pao_dynamic_css', 'pao_dynamic_css' );
add_action( 'wp_ajax_pao_dynamic_css', 'pao_dynamic_css' );


if (! function_exists('pao_the_share_posts')) {
	function pao_the_share_posts($post,$show_title = '')
	{	
		if ( cs_get_option( 'social_portfolio' ) ) { 
			ob_start();  ?>
				<div class="row single-share">
					<div class="ft-part margin-lg-15b">
						<ul class="social-list">
							<?php if (!empty($show_title)) { ?>
							<li><span><?php esc_html_e( 'Share:', 'pao' ); ?></span></li>
							<?php } ?>
							<li>
								<a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php esc_url( the_permalink() ); ?>&amp;title=<?php echo esc_attr( urlencode( the_title( '', '', false ) ) ); ?>"
								   target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li>
								<a href="http://pinterest.com/pin/create/link/?url=<?php echo esc_url( urlencode( get_permalink() ) ); ?>&amp;media=<?php echo esc_attr( $pinterestimage[0] ); ?>&amp;description=<?php esc_attr( the_title() ); ?>"
								   class="pinterest" target="_blank" title="Pin This Post"><i
										class="fa fa-pinterest-p"></i></a></li>
							<li>
								<a href="http://www.facebook.com/sharer.php?u=<?php esc_url( the_permalink() ); ?>&amp;t=<?php echo esc_attr( urlencode( the_title( '', '', false ) ) ); ?>"
								   class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li>
								<a href="http://twitter.com/home?status=<?php echo esc_url( urlencode( the_title( '', '', false ) ) ); ?><?php esc_url( the_permalink() ); ?>"
								   class="twitter" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="http://plus.google.com/share?url=<?php esc_url( the_permalink() ); ?>&amp;title=<?php echo esc_attr( urlencode( the_title( '', '', false ) ) ); ?>"
								   target="_blank" class="gplus"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			<?php 
			echo ob_get_clean();
		}
	} 
}

if ( ! function_exists( 'pao_get_post_shortcode_params' ) ) {
	function pao_get_post_shortcode_params($tag_shortcode, $string = '', $all = false)
	{

		if (empty($tag_shortcode)) return false;

		if (empty($string)) {
			global $post;
			$string = $post->post_content;
		}
		
		preg_match_all( "/" . get_shortcode_regex(array($tag_shortcode)) . "/si" ,
					$string,
					$matchs );
		if (!empty($matchs[0])) {

			if ($all) {
				$params = array();
				foreach ($matchs[0] as $key => $param) {
					$this_param = str_replace('"]', '" ]', $matchs[$key][0]);
					$atts = shortcode_parse_atts($this_param);
					if (is_array($atts)) {
					$this_param = array_slice($atts, 1, -1);
						$params[] = $this_param;
					}
				}
				return $params;
			}

			$params = str_replace('"]', '" ]', $matchs[0][0]);
			$params = array_slice(shortcode_parse_atts($params), 1, -1);
			if (is_array($params)) {
				return $params;
			}
			return false;
		}
		return false;

	}
}

if (!function_exists('pao_include_fonts')) {
	function pao_include_fonts($fonts = '') {
		if ( empty($fonts) ) return ''; 

		if ( !is_array($fonts) ) {
			$fonts = array( $name_option );
		}

		foreach ($fonts as $key => $font) {
			if ( cs_get_option($font) ) { 

				$font_family = cs_get_option($font);
				if(! empty($font_family['family']) ) {
					wp_enqueue_style( sanitize_title_with_dashes($font_family['family']), '//fonts.googleapis.com/css?family=' . $font_family['family'] . ':' . $font_family['variant'] .'' );
				}
			}
		}

	}
}

// functions max word in string
if ( ! function_exists( 'pao_maxsite_str_word' ) ) {
	function pao_maxsite_str_word( $text, $counttext = 10, $sep = ' ' ) {
		$words = explode( $sep, $text );
		if ( count( $words ) > $counttext )
			$text = join( $sep, array_slice( $words, 0, $counttext ) );
		return $text;
	}
}


if ( ! function_exists( 'pao_excerpt_more' ) ) {
	function pao_excerpt_more() {
		return ' ...';
	}
	add_filter('excerpt_more', 'pao_excerpt_more');
}


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


if ( ! function_exists( 'pao_search_popup' ) ) {
	function pao_search_popup() { ?>
        <div class="site-search" id="search-box">
            <div class="close-search">
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="form-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                                <div class="input-group">
                                    <input type="search" value="<?php echo get_search_query() ?>" name="s"
                                           class="search-field"
                                           placeholder="<?php echo esc_html_e( 'Enter search Keyword', 'pao' ); ?>"
                                           required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php }
}

add_action('pao_after_footer', 'pao_search_popup', 10);



/**
 *
 * Like post ajax function.
 *
 **/
if ( ! function_exists( 'pao_like_post' ) ) {
	function pao_like_post() {
		if( empty( $_POST ) ) {
			esc_html_e( 'Ajax error', 'pao' );
		} else {

			$post_id = sanitize_text_field( $_POST['post_id'] );
			$count_likes = get_post_meta( $post_id, 'count_likes', true );

			if ( isset( $_COOKIE['post_likes'] ) && ! empty( $_COOKIE['post_likes'] ) ) {
				$ids = explode( ',', $_COOKIE['post_likes'] );
				if ( ( $key = array_search( $post_id, $ids ) ) !== false ) {
					$count_likes = ($count_likes - 1 >= 0) ? ($count_likes - 1) : '0';
					unset( $ids[ $key ] );
				} else {
					$count_likes++;
					$ids[] = $post_id;
				}

				update_post_meta( $post_id, 'count_likes', $count_likes );
				$ids_list = implode( ',', $ids );
				setcookie( 'post_likes', $ids_list, ( time() + 3600 * 730 ), '/' );
				echo esc_html( $count_likes );
			} else {

				$count_likes++;
				update_post_meta( $post_id, 'count_likes', $count_likes );
				setcookie( 'post_likes', $post_id, ( time() + 3600 * 730 ), '/' );
				echo esc_html( $count_likes );
			}

		}
		exit;
	}
}

add_action( 'wp_ajax_pao_like_post', 'pao_like_post' );
add_action( 'wp_ajax_nopriv_pao_like_post', 'pao_like_post' );


/**
 * Like counter.
 */
if ( ! function_exists('pao_like_counter') ) {
	function pao_like_counter() {
		// Count post likes
		$count_post_likes = get_post_meta( get_the_ID(), 'count_likes', true );
		$count_post_likes = !empty($count_post_likes) ? $count_post_likes : '0';
		?>
        <div class="post-counts__count">
            <span>
                <i class="count"><?php echo esc_html( $count_post_likes ); ?></i>
            </span>
        </div>
		<?php
	}
}

/**
 * Like button.
 */
if ( ! function_exists('pao_like_button') ) {
	function pao_like_button() { ?>
        <div class="post__likes" data-id="<?php echo get_the_ID(); ?>"></div>
    <?php
	}
}


/**
 *
 * Add new fields to user profile.
 *
 */
if ( ! function_exists( 'pao_show_extra_profile_fields' ) ) {
	function pao_show_extra_profile_fields( $user ) { ?>

        <h3><?php esc_html_e( 'Extra profile information', 'pao' ); ?></h3>

        <table class="form-table">

            <tr>
                <th><label for="twitter"><?php esc_html_e( 'Twitter', 'pao' ); ?></label></th>

                <td>
                    <input type="text" name="twitter" id="twitter" value="<?php echo esc_url( get_user_meta( $user->ID, 'twitter', true ) ); ?>" class="regular-text" /><br />
                    <span class="description"><?php esc_html_e( 'Please enter your Twitter profile link.', 'pao' ); ?></span>
                </td>
            </tr>
            <tr>
                <th><label for="facebook"><?php esc_html_e( 'Facebook', 'pao' ); ?></label></th>

                <td>
                    <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_user_meta( $user->ID, 'facebook', true ) ); ?>" class="regular-text" /><br />
                    <span class="description"><?php esc_html_e( 'Please enter your Facebook profile link.', 'pao' ); ?></span>
                </td>
            </tr>
            <tr>
                <th><label for="instagram"><?php esc_html_e( 'Instagram', 'pao' ); ?></label></th>

                <td>
                    <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_user_meta( $user->ID, 'instagram', true ) ); ?>" class="regular-text" /><br />
                    <span class="description"><?php esc_html_e( 'Please enter your Instagram profile link.', 'pao' ); ?></span>
                </td>
            </tr>
            <tr>
                <th><label for="dribbble"><?php esc_html_e( 'Dribbble', 'pao' ); ?></label></th>

                <td>
                    <input type="text" name="dribbble" id="dribbble" value="<?php echo esc_attr( get_user_meta( $user->ID, 'dribbble', true ) ); ?>" class="regular-text" /><br />
                    <span class="description"><?php esc_html_e( 'Please enter your Dribbble profile link.', 'pao' ); ?></span>
                </td>
            </tr>

        </table>
	<?php }
}
add_action( 'show_user_profile', 'pao_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'pao_show_extra_profile_fields' );

/**
 *
 * Save and update new fields in user profile.
 *
 */
if ( ! function_exists( 'pao_save_extra_profile_fields' ) ) {
	function pao_save_extra_profile_fields( $user_id ) {

		if ( ! current_user_can( 'edit_user', $user_id ) ) {
			return false;
		}
		update_user_meta( $user_id, 'facebook',  esc_url( $_POST['facebook'] ) );
		update_user_meta( $user_id, 'twitter',   esc_url( $_POST['twitter'] ) );
		update_user_meta( $user_id, 'instagram', esc_url( $_POST['instagram'] ) );
		update_user_meta( $user_id, 'dribbble', esc_url( $_POST['dribbble'] ) );
	}
}
add_action( 'personal_options_update', 'pao_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'pao_save_extra_profile_fields' );

