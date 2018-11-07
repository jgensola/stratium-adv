<?php 
/*
**
** Functions for Pao Plugins
**
*/
 

if (!function_exists('pao_get_twitts')) {
	function pao_get_twitts( $user, $followers = false, $count_twitts = 3, $style = '' ) {
	    

	    $settings = array(
	        'oauth_access_token' => '701500526060560384-77sHD0m3MkfV6rIXHOUji6g3nsHHVyV',
	        'oauth_access_token_secret' => 'uIrQEnal1ZzJxdLgbTOyhhz8ssHqAAZDHcJGqY22n9L07',
	        'consumer_key' => 'Ci7s7QCVRWJzwG8tZlAgoeUSu',
	        'consumer_secret' => 'ov3ikpwwoihQCK1Ib0Q29SpqYyp8OxnvA4dXdysxwtwFWgET6h'
	    );

	    if ($followers) {
	         $url = 'https://api.twitter.com/1.1/users/show.json?';
	         $requestMethod = 'GET';
	         $getfield = '?user_id='. $user .'&amp;screen_name='. $user .'';
	         $twitter = new TwitterAPIExchange($settings);
	         
	         $data = $twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();

	        return $data;
	    } else {
	        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	        $requestMethod = 'GET';
	        $getfield = '?screen_name='. $user .'&count='. $count_twitts .'&exclude_replies=true&skip_status=1';
	        $twitter = new TwitterAPIExchange($settings);
	        
	        $data = $twitter->setGetfield($getfield)
	            ->buildOauth($url, $requestMethod)
	            ->performRequest();

	        $twitts = json_decode( $data );
	        if( ! empty( $twitts ) && is_array( $twitts ) ) {

	            return $twitts;
	        }
	    }


	    return array();
	}
}


/**
 *
 * Instagram Widget
 *
 */
if( ! class_exists( 'PaoInstagramWidget' ) ) {
  class PaoInstagramWidget extends WP_Widget {

    function __construct() {

      $widget_ops     = array(
        'classname'   => 'PaoInstagramWidget',
        'description' => 'Instagram Widget.'
      );

      parent::__construct( 'instagram_widget', 'Pao Instagram widget', $widget_ops );

    }

    function widget( $args, $instance ) {

      extract( $args );

      echo $before_widget; 

      $instagram_images = pao_get_imstagram(  $instance['insta_username'], $instance['insta_count'] ); ?>
      <div class="quze-widget-user quze-widget-border-bottom">
            <?php if(isset($instance['insta_type_logo']) && $instance['insta_type_logo'] == 'text' && !empty($instance['insta_text_logo'])){ ?>
                <h3 class="insta-logo"><?php echo esc_html( $instance['insta_text_logo'] ); ?></h3>
            <?php }elseif(isset($instance['insta_type_logo']) && !empty($instance['insta_type_logo']) && !empty($instance['insta_logo_image'])){
                $img_url = wp_get_attachment_image_url($instance['insta_logo_image'], 'medium'); ?>
                <img src="<?php echo esc_url($img_url); ?>" alt="" class="insta-logo">
            <?php } ?>

            <div class="images-wrap clearfix">
                <?php if ( ! empty( $instagram_images ) ) {
                    foreach ( $instagram_images['items'] as $image ) { ?>
                        <a href="<?php echo esc_url( $image['link'] ); ?>" target="_blank" class="insta-images"><img src="<?php echo esc_url( $image['image-url'] ); ?>" class="s-img-switch img" alt=""></a>
                    <?php }
                } ?>
            </div>
			<?php if (!empty($instance['insta_username'])): ?>
			<div class="instagram-text"><span><?php esc_html_e('follow us on ', 'pao-plugins'); ?></span>
                <a href="https://www.instagram.com/<?php echo esc_attr($instance['insta_username'] ); ?>"><?php echo esc_html( $instance['insta_username'] ); ?></a>
            </div>
			<?php endif ?>

      </div>
      <?php

      echo $after_widget;

    }

    function update( $new_instance, $old_instance ) {

      $instance = array();
      $instance['insta_username']   = $new_instance['insta_username'];
      $instance['insta_count']    = $new_instance['insta_count']; 
      $instance['insta_type_logo'] = $new_instance['insta_type_logo'];
      $instance['insta_text_logo'] = $new_instance['insta_text_logo'];
	  $instance['insta_logo_image'] = $new_instance['insta_logo_image'];

      return $instance;

    }

    function form( $instance ) {

      //
      // set defaults
      // -------------------------------------------------
      $instance   = wp_parse_args( $instance, array(
        'insta_username' => '',
        'insta_count' => '',
        'insta_text_logo' => '',
        'insta_logo_image' => '',
        'insta_type_logo' => '',
      ));


	    $select_value = esc_attr( $instance['insta_type_logo'] );
	    $select_field = array(
		    'id'    => $this->get_field_name('insta_type_logo'),
		    'name'  => $this->get_field_name('insta_type_logo'),
		    'type'           => 'select',
		    'title'          => 'Type of logo',
		    'options'        => array(
			    'text'    => 'Text',
			    'image'     => 'Image',
		    ),
		    'default_option' => 'Select your type',
	    );


	    echo cs_add_element( $select_field, $select_value );


	    $select_value = esc_attr( $instance['insta_logo_image'] );
	    $select_field = array(
		    'id'    => $this->get_field_name('insta_logo_image'),
		    'name'  => $this->get_field_name('insta_logo_image'),
		    'type'           => 'image',
		    'title'          => 'Add your image logo',
		    'dependency' => array( $this->get_field_name('insta_type_logo'), '==', 'image'),
	    );


	    echo cs_add_element( $select_field, $select_value );

      //
      // textarea field example
      // -------------------------------------------------
      $textarea_value = esc_attr( $instance['insta_text_logo'] );
      $textarea_field = array(
        'id'    => $this->get_field_name('insta_text_logo'),
        'name'  => $this->get_field_name('insta_text_logo'),
        'type'  => 'text',
        'title' => 'Your logo',
        'dependency' => array( $this->get_field_name('insta_type_logo'), '==', 'text'),
      );

      echo cs_add_element( $textarea_field, $textarea_value );


      //
      // text field example
      // -------------------------------------------------
      $text_value = esc_attr( $instance['insta_username'] );
      $text_field = array(
        'id'    => $this->get_field_name('insta_username'),
        'name'  => $this->get_field_name('insta_username'),
        'type'  => 'text',
        'title' => 'Username instagram',
      );

      echo cs_add_element( $text_field, $text_value );

      //
      // image field example
      // -------------------------------------------------
      $upload_value = esc_attr( $instance['insta_count'] );
      $upload_field = array(
        'id'    => $this->get_field_name('insta_count'),
        'name'  => $this->get_field_name('insta_count'),
        'type'  => 'text',
        'title' => 'Count images',
      );

      echo cs_add_element( $upload_field, $upload_value );
    }
  }
}


/**
 *
 * Social Link Widget
 *
 */
if( ! class_exists( 'SocialLinkWidget' ) ) {
	class SocialLinkWidget extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'SocialLinkWidget',
				'description' => 'Footer Contact Widget.'
			);

			parent::__construct( 'pao_socials_link_widget', 'Pao Social Link widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-widget-social-link">

	            <?php if (!empty($instance['contact_facebook'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_facebook'] ); ?>" class="fa fa-facebook"></a>
	            <?php endif ?>

				<?php if (!empty($instance['contact_twitter'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_twitter'] ); ?>" class="fa fa-twitter"></a>
				<?php endif ?>

				<?php if (!empty($instance['contact_instagram'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_instagram'] ); ?>" class="fa fa-instagram"></a>
				<?php endif ?>

				<?php if (!empty($instance['contact_google_plus'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_google_plus'] ); ?>" class="fa fa-google-plus"></a>
				<?php endif ?>

				<?php if (!empty($instance['contact_behance'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_behance'] ); ?>" class="fa fa-behance"></a>
				<?php endif ?>

				<?php if (!empty($instance['contact_linkedin'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_linkedin'] ); ?>" class="fa fa-linkedin"></a>
				<?php endif ?>

				<?php if (!empty($instance['contact_dribbble'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_dribbble'] ); ?>" class="fa fa-linkedin"></a>
				<?php endif ?>

	            <?php if (!empty($instance['contact_pinterest'])): ?>
                    <a href="<?php echo esc_url( $instance['contact_pinterest'] ); ?>" class="fa fa-pinterest"></a>
	            <?php endif ?>

            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['contact_twitter']    = $new_instance['contact_twitter'];
			$instance['contact_facebook']    = $new_instance['contact_facebook'];
			$instance['contact_instagram']    = $new_instance['contact_instagram'];
			$instance['contact_google_plus']    = $new_instance['contact_google_plus'];
			$instance['contact_behance']    = $new_instance['contact_behance'];
			$instance['contact_linkedin']    = $new_instance['contact_linkedin'];
			$instance['contact_dribbble']    = $new_instance['contact_dribbble'];
			$instance['contact_pinterest']    = $new_instance['contact_pinterest'];

			return $instance;

		}

		function form( $instance ) {

			$upload_value = !empty($instance['contact_twitter']) ? esc_attr( $instance['contact_twitter'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_twitter'),
				'name'  => $this->get_field_name('contact_twitter'),
				'type'  => 'text',
				'title' => 'Twitter URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

			$upload_value = !empty($instance['contact_facebook']) ? esc_attr( $instance['contact_facebook'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_facebook'),
				'name'  => $this->get_field_name('contact_facebook'),
				'type'  => 'text',
				'title' => 'Facebook URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

			$upload_value = !empty($instance['contact_instagram']) ? esc_attr( $instance['contact_instagram'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_instagram'),
				'name'  => $this->get_field_name('contact_instagram'),
				'type'  => 'text',
				'title' => 'Instagram URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

			$upload_value = !empty($instance['contact_google_plus']) ? esc_attr( $instance['contact_google_plus'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_google_plus'),
				'name'  => $this->get_field_name('contact_google_plus'),
				'type'  => 'text',
				'title' => 'Google Plus URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

			$upload_value = !empty($instance['contact_behance']) ? esc_attr( $instance['contact_behance'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_behance'),
				'name'  => $this->get_field_name('contact_behance'),
				'type'  => 'text',
				'title' => 'Behance URL',
			);
			echo cs_add_element( $upload_field, $upload_value );


			$upload_value = !empty($instance['contact_linkedin']) ? esc_attr( $instance['contact_linkedin'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_linkedin'),
				'name'  => $this->get_field_name('contact_linkedin'),
				'type'  => 'text',
				'title' => 'Linkedin URL',
			);
			echo cs_add_element( $upload_field, $upload_value );


			$upload_value = !empty($instance['contact_dribbble']) ? esc_attr( $instance['contact_dribbble'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_dribbble'),
				'name'  => $this->get_field_name('contact_dribbble'),
				'type'  => 'text',
				'title' => 'Dribbble URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

			$upload_value = !empty($instance['contact_pinterest']) ? esc_attr( $instance['contact_pinterest'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('contact_pinterest'),
				'name'  => $this->get_field_name('contact_pinterest'),
				'type'  => 'text',
				'title' => 'Pinterest URL',
			);
			echo cs_add_element( $upload_field, $upload_value );

		}
	}
}


/**
 *
 * About Widget
 *
 */
if( ! class_exists( 'AboutWidget' ) ) {
	class AboutWidget extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'AboutWidget',
				'description' => 'About Widget.'
			);

			parent::__construct( 'pao_about_widget', 'Pao About widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-widget-about">

	            <?php if (!empty($instance['about_img'])): ?>
              <div class="img-wrap">
                    <img src="<?php echo esc_url( $instance['about_img'] ); ?>" alt="" >
              </div>
	            <?php endif ?>

				<?php if (!empty($instance['about_title'])): ?>
                    <h5 class="about_content"><?php echo esc_html( $instance['about_title'] ); ?></h5>
				<?php endif ?>

				<?php if (!empty($instance['about_content'])): ?>
                    <div class="about_content text"><?php echo esc_html( $instance['about_content'] ); ?></div>
				<?php endif ?>

            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['about_img']    = $new_instance['about_img'];
			$instance['about_title'] = $new_instance['about_title'];
			$instance['about_content']   = $new_instance['about_content'];

			return $instance;

		}

		function form( $instance ) {

			//
			// set defaults
			// -------------------------------------------------
			$instance   = wp_parse_args( $instance, array(
				'about_img' => '',
				'about_title' => '',
				'about_content' => '',
			));

			//
			// image field example
			// -------------------------------------------------
			$upload_value = !empty($instance['about_img']) ? esc_attr( $instance['about_img'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('about_img'),
				'name'  => $this->get_field_name('about_img'),
				'type'  => 'upload',
				'title' => 'Image',
			);

			echo cs_add_element( $upload_field, $upload_value );

			//
			// textarea field example
			// -------------------------------------------------
			$textarea_value = !empty($instance['about_title']) ? esc_attr( $instance['about_title'] ) : '';
			$textarea_field = array(
				'id'    => $this->get_field_name('about_title'),
				'name'  => $this->get_field_name('about_title'),
				'type'  => 'text',
				'title' => 'Title',
				'info'  => 'Some description for this field',
			);

			echo cs_add_element( $textarea_field, $textarea_value );


			//
			// text field example
			// -------------------------------------------------
			$text_value = !empty($instance['about_content']) ? esc_attr( $instance['about_content'] ) : '';
			$text_field = array(
				'id'    => $this->get_field_name('about_content'),
				'name'  => $this->get_field_name('about_content'),
				'type'  => 'textarea',
				'title' => 'Content',
			);

			echo cs_add_element( $text_field, $text_value );

		}
	}
}



/**
 *
 * Copyright Widget
 *
 */
if( ! class_exists( 'CopyrightWidget' ) ) {
	class CopyrightWidget extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'CopyrightWidget',
				'description' => 'Copyright Widget.'
			);

			parent::__construct( 'pao_copyright_widget', 'Pao Copyright widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-widget-copyright">

				<?php if (!empty($instance['widget_logo'])): ?>
                    <div class="img-wrap">
                        <img src="<?php echo esc_url( $instance['widget_logo'] ); ?>" alt="" >
                    </div>
				<?php endif ?>

				<?php if (!empty($instance['copy_content'])): ?>
                    <div class="copy_content text"><?php echo esc_html( $instance['copy_content'] ); ?></div>
				<?php endif ?>

            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['widget_logo']    = $new_instance['widget_logo'];
			$instance['copy_content']   = $new_instance['copy_content'];

			return $instance;

		}

		function form( $instance ) {

			//
			// set defaults
			// -------------------------------------------------
			$instance   = wp_parse_args( $instance, array(
				'widget_logo' => '',
				'copy_content' => '',
			));

			//
			// image field example
			// -------------------------------------------------
			$upload_value = !empty($instance['widget_logo']) ? esc_attr( $instance['widget_logo'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('widget_logo'),
				'name'  => $this->get_field_name('widget_logo'),
				'type'  => 'upload',
				'title' => 'Logo',
			);

			echo cs_add_element( $upload_field, $upload_value );

			//
			// text field example
			// -------------------------------------------------
			$text_value = !empty($instance['copy_content']) ? esc_attr( $instance['copy_content'] ) : '';
			$text_field = array(
				'id'    => $this->get_field_name('copy_content'),
				'name'  => $this->get_field_name('copy_content'),
				'type'  => 'textarea',
				'title' => 'Text',
			);

			echo cs_add_element( $text_field, $text_value );

		}
	}
}


/**
 *
 * Pao Recent Post Widget
 *
 */
if( ! class_exists( 'PaoRecentPost' ) ) {
	class PaoRecentPost extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'PaoRecentPost',
				'description' => 'Recent Post Widget.'
			);

			parent::__construct( 'pao_recent_post_widget', 'Pao Recent Post Widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-recent-post-widget">
				<?php if (!empty($instance['title'])): ?>
                    <h5 class="about_content"><?php echo esc_html( $instance['title'] ); ?></h5>
				<?php endif;

				$count_posts = ( ! empty( $instance['count_posts'] ) && is_numeric( $instance['count_posts'] ) ) ? $instance['count_posts'] : 3;


				$custom_query = new WP_Query( array( 'posts_per_page' => $count_posts ) );
                $posts        = $custom_query->posts;

                if ( $posts ) {
                    foreach ( $posts as $item ) {
                        $img_url = wp_get_attachment_url( get_post_thumbnail_id( $item->ID ) ); ?>
                        <div class="recent-block">
                            <?php if ( ! empty( $img_url ) ) { ?>
                                <div class="recent-img">
                                    <img src="<?php echo esc_url( $img_url ); ?>" alt="" class="s-img-switch">
                                </div>
                            <?php } ?>
                          <div class="flex-wrap">
                            <div class="recent-text">
                                <a href="<?php echo get_permalink( $item->ID ); ?>"><?php echo esc_html( $item->post_title ); ?></a>
                            </div>
                            <div class="recent-date">
                                <?php the_time( get_option( 'date_format' ) ); ?>
                            </div>
                          </div>
                        </div>
                    <?php }
                }
                wp_reset_postdata(); ?>

            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['title']       = strip_tags( $new_instance['title'] );
		    $instance['count_posts'] = strip_tags( $new_instance['count_posts'] );

			return $instance;

		}

		function form( $instance ) {

			//
			// set defaults
			// -------------------------------------------------
			$instance   = wp_parse_args( $instance, array(
				'title' => '',
				'count_posts' => '',
			));

			//
			// image field example
			// -------------------------------------------------
			$upload_value = !empty($instance['title']) ? esc_attr( $instance['title'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('title'),
				'name'  => $this->get_field_name('title'),
				'type'  => 'text',
				'title' => 'Title',
				'info'  => 'Some description for this field',
			);

			echo cs_add_element( $upload_field, $upload_value );

			//
			// textarea field example
			// -------------------------------------------------
			$textarea_value = !empty($instance['count_posts']) ? esc_attr( $instance['count_posts'] ) : '';
			$textarea_field = array(
				'id'    => $this->get_field_name('count_posts'),
				'name'  => $this->get_field_name('count_posts'),
				'type'  => 'text',
				'title' => 'Count posts',
				'info'  => 'Only number. By default 3',
			);

			echo cs_add_element( $textarea_field, $textarea_value );


		}
	}
}


/**
 *
 * Pao Best Seller Widget
 *
 */
if( ! class_exists( 'PaoBestSeller' ) ) {
	class PaoBestSeller extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'PaoBestSeller',
				'description' => 'Best Seller Widget.'
			);

			parent::__construct( 'pao_best_seller_widget', 'Pao Best Seller Widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-best-seller-widget">
				<?php if (!empty($instance['title'])): ?>
                    <h5 class="title"><?php echo esc_html( $instance['title'] ); ?></h5>
				<?php endif;

				$count_posts = ( ! empty( $instance['count_posts'] ) && is_numeric( $instance['count_posts'] ) ) ? $instance['count_posts'] : 6;

                $args = array(
                        'posts_per_page' => $count_posts,
                        'post_type' => 'product',
                        'meta_key' => 'total_sales',
                        'orderby' => 'meta_value_num'
                );
				$custom_query = new WP_Query( $args );
				$posts        = $custom_query->posts;
				$slides = $count_posts >=3 ? '3' : $count_posts;

				if ( $posts ) { ?>
            <div class="swiper3-container"
                 data-mouse="0" data-autoplay="0"
                 data-loop="1" data-speed="1500"
                 data-center="0"
                 data-space="0" data-responsive="responsive" data-mode="vertical" data-add-slides="<?php echo esc_attr($slides); ?>" data-lg-slides="<?php echo esc_attr($slides); ?>" data-md-slides="<?php echo esc_attr($slides); ?>" data-sm-slides="<?php echo esc_attr($slides); ?>" data-xs-slides="<?php echo esc_attr($slides); ?>">

                <div class="swiper3-wrapper">
					<?php foreach ( $posts as $item ) {
						$img_url = wp_get_attachment_url( get_post_thumbnail_id( $item->ID ) ); ?>
                        <div class="swiper3-slide">
							<?php if ( ! empty( $img_url ) ) { ?>
                                <div class="seller-img">
                                    <img src="<?php echo esc_url( $img_url ); ?>" alt="" class="s-img-switch">
                                </div>
							<?php } ?>
                            <div class="flex-wrap">
                                <div class="seller-text">
                                    <a href="<?php echo get_permalink( $item->ID ); ?>"><?php echo esc_html( $item->post_title ); ?></a>
                                </div>
                                <div class="seller-price">
									<?php $sell_product = wc_get_product( $item->ID );

                                    echo wp_kses_post($sell_product->get_price_html()); ?>
                                </div>
                            </div>
                        </div>
					<?php } ?>
                </div>
            </div>
            <div class="swiper3-arrows">
              <div class="swiper3-button-prev">
                  <i class="fa fa-angle-left"></i>
              </div>
              <div class="swiper3-button-next">
                  <i class="fa fa-angle-right"></i>
              </div>
            </div>
            <?php }
            wp_reset_postdata(); ?>

            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['title']       = strip_tags( $new_instance['title'] );
			$instance['count_posts'] = strip_tags( $new_instance['count_posts'] );

			return $instance;

		}

		function form( $instance ) {

			//
			// set defaults
			// -------------------------------------------------
			$instance   = wp_parse_args( $instance, array(
				'title' => '',
				'count_posts' => '',
			));

			//
			// image field example
			// -------------------------------------------------
			$upload_value = !empty($instance['title']) ? esc_attr( $instance['title'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('title'),
				'name'  => $this->get_field_name('title'),
				'type'  => 'text',
				'title' => 'Title',
				'info'  => 'Some description for this field',
			);

			echo cs_add_element( $upload_field, $upload_value );

			//
			// textarea field example
			// -------------------------------------------------
			$textarea_value = !empty($instance['count_posts']) ? esc_attr( $instance['count_posts'] ) : '';
			$textarea_field = array(
				'id'    => $this->get_field_name('count_posts'),
				'name'  => $this->get_field_name('count_posts'),
				'type'  => 'text',
				'title' => 'Count posts',
				'info'  => 'Only number. By default 6',
			);

			echo cs_add_element( $textarea_field, $textarea_value );


		}
	}
}




/**
 *
 * Pao Sorting Products Widget
 *
 */
if( ! class_exists( 'PaoSortingProducts' ) ) {
	class PaoSortingProducts extends WP_Widget {

		function __construct() {

			$widget_ops     = array(
				'classname'   => 'PaoSortingProducts',
				'description' => 'Sorting Products Widget.'
			);

			parent::__construct( 'pao_sorting_products_widget', 'Pao Sorting Products Widget', $widget_ops );

		}

		function widget( $args, $instance ) {

			extract( $args );

			echo $before_widget;

			?>
            <div class="pao-sorting-products-widget">
				<?php if (!empty($instance['title'])): ?>
                    <h5 class="title"><?php echo esc_html( $instance['title'] ); ?></h5>
				<?php endif; ?>

                <?php
                    $orderby                 = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) ); // WPCS: sanitization ok, input var ok, CSRF ok.
                    $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
                        'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
                        'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
                    ) );
                ?>

                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby">
			            <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
                            <option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
			            <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="paged" value="1" />
		            <?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
                </form>


            </div>
			<?php

			echo $after_widget;

		}

		function update( $new_instance, $old_instance ) {

			$instance = array();
			$instance['title']       = strip_tags( $new_instance['title'] );

			return $instance;

		}

		function form( $instance ) {

			//
			// set defaults
			// -------------------------------------------------
			$instance   = wp_parse_args( $instance, array(
				'title' => '',
			));

			//
			// image field example
			// -------------------------------------------------
			$upload_value = !empty($instance['title']) ? esc_attr( $instance['title'] ) : '';
			$upload_field = array(
				'id'    => $this->get_field_name('title'),
				'name'  => $this->get_field_name('title'),
				'type'  => 'text',
				'title' => 'Title',
				'info'  => 'Some description for this field',
			);

			echo cs_add_element( $upload_field, $upload_value );

		}
	}
}



if ( ! function_exists( 'pao_widget_init' ) ) {
  function pao_widget_init() {
    register_widget( 'PaoInstagramWidget' );
    register_widget( 'AboutWidget' );
    register_widget( 'PaoRecentPost' );
    register_widget( 'PaoBestSeller' );
    register_widget( 'PaoSortingProducts' );
    register_widget( 'SocialLinkWidget' );
    register_widget( 'CopyrightWidget' );
  }
  add_action( 'widgets_init', 'pao_widget_init', 2 );
}

/**
 *
 * Get categories for shortcode.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'pao_categories' ) ) {
	function pao_categories() {

		$args = array(
			'type'     => 'post',
			'taxonomy' => 'category'
		);

		$categories = get_categories( $args );
		$list       = array();

		foreach ( $categories as $category ) {
			$list[ $category->name ] = $category->slug;
		}

		return $list;
	}
}

/**
 *
 * element values post, page, categories
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'pao_element_values' ) ) {
	function pao_element_values( $type = '', $query_args = array() ) {

		$options = array();

		switch ( $type ) {

			case 'pages':
			case 'page':
				$pages = get_pages( $query_args );

				if ( ! empty( $pages ) ) {
					foreach ( $pages as $page ) {
						$options[ $page->post_title ] = $page->ID;
					}
				}
				break;

			case 'posts':
			case 'post':
				$posts = get_posts( $query_args );

				if ( ! empty( $posts ) ) {
					foreach ( $posts as $post ) {
						$options[ $post->post_title ] = $post->ID  /*lcfirst( $post->post_title )*/
						;
					}
				}
				break;

			case 'tags':
			case 'tag':

				$tags = get_terms( $query_args['taxonomies'] );
				if ( ! empty( $tags ) ) {
					foreach ( $tags as $tag ) {
						$options[ $tag->name ] = $tag->slug;
					}
				}
				break;

			case 'categories':
			case 'category':

				$categories = get_categories( $query_args );

				if ( ! empty( $categories ) ) {

					if ( is_array( $categories ) ) {
						foreach ( $categories as $category ) {
							$options[ $category->name ] = $category->slug;
						}
					}

				}
				break;

			case 'post_category':

				$categories = get_categories( $query_args );

				if ( ! empty( $categories ) ) {

					if ( is_array( $categories ) ) {
						foreach ( $categories as $category ) {
							$options[ $category->slug ] = $category->name;
						}
					}

				}
				break;

			case 'custom':
			case 'callback':

				if ( is_callable( $query_args['function'] ) ) {
					$options = call_user_func( $query_args['function'], $query_args['args'] );
				}

				break;

		}

		return $options;

	}
}

