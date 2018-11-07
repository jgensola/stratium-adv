<?php
/**
 * Single
 *
 * @package pao
 * @since 1.0
 *
 */
get_header();

$protected = '';

if ( post_password_required() ) {
	$protected = 'protected-page';
}
$cs_sidebar = cs_get_option( 'sidebar' );

$sidebar_position = cs_get_option( 'sidebar_position' );

$position_sidebar = '';
$position_content = '';

if ( $sidebar_position == 'left_sidebar' ) {
    $position_sidebar = 'col-md-pull-9';
    $position_content = 'col-md-push-3';
}

$post_meta = get_post_meta( $post->ID, 'pao_post_options' );

$preview = isset( $post_meta[0]['post_preview_style'] ) ? $post_meta[0]['post_preview_style'] : '';

$unitClass = ! function_exists( 'cs_framework_init' ) ? 'unit' : '';

if ( get_post_type( $post->ID ) == 'proof_gallery' ) {
	$cs_sidebar = false;
}

$content_size_class = ( (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar')) || ( $cs_sidebar && in_array( 'post', $cs_sidebar ) ) ) ? 'col-md-9' : 'col-md-12';
$blog_type          = cs_get_option( 'blog_single_type' ) ? cs_get_option( 'blog_single_type' ) : 'classic';
$sidebar_class      = (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar')) || $cs_sidebar && in_array( 'blog', $cs_sidebar ) ? ' sidebar-show' : 'sidebar-no';

$singleClass = $blog_type == 'classic' && $sidebar_class == ' sidebar-show' ? ' pr30 ' : '';

while ( have_posts() ) :
	the_post(); ?>
    <div class="background">
            <div class="light-yellow"></div>
            <div class="white"></div>
    </div>
    <div class="container">
        <div class="row">

          <div class="post-details no-padd-md <?php echo esc_attr( $unitClass . ' ' . $preview  . ' ' . $content_size_class . ' ' . $position_content  ); ?>">
                <div class="single-content clearfix <?php echo esc_attr( $protected . $singleClass); ?>">
                    <div class="main-top-content">
                            <?php if ( ! function_exists( 'cs_framework_init' ) || cs_get_option( 'pao_post_cat' ) ) { ?>
                                <div class="single-categories"><?php the_category( ' ' ); ?></div>
                            <?php }
                            the_title( '<h2 class="title">', '</h2>' ); ?>
                        <div class="title-wrap">
                            <?php if (  ! function_exists( 'cs_framework_init' ) || cs_get_option( 'pao_post_author' ) ) { ?>
                                <div class="author"><?php esc_html_e( 'by ', 'pao' ); ?>
                                <span><?php the_author_link(); ?></span> </div>
                            <?php } ?>
                            <div class="date-post"><?php the_time( get_option( 'date_format' ) ); ?></div>
                        </div>
                    </div>
				<?php
                if ( $blog_type == 'classic' || !function_exists( 'cs_framework_init' ) ) {
                    if ( ( has_post_thumbnail() || isset( $post_meta[0]['post_preview_style'] ) ) ) { ?>

                <?php if ( isset( $post_meta[0]['post_preview_style'] ) && $post_meta[0]['post_preview_style'] != 'text' && $post_meta[0]['post_preview_style'] != 'image' && ( get_post_format( $post->ID ) != 'quote' ) || ! isset( $post_meta[0]['post_preview_style'] ) && function_exists( 'cs_framework_init' ) ) {
                        pao_blog_item_hedeader( $post_meta, $post->ID);
                        } elseif ( has_post_thumbnail() ) { ?>
                    <div class="post-banner">
                        <?php $tumb_url = get_the_post_thumbnail_url( $post->ID, 'full' );
                        $post_thumbnail_id = get_post_thumbnail_id( $post->ID);
                        $image_alt     = (is_numeric($post_thumbnail_id) && !empty($post_thumbnail_id)) ? get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true ) : ''; ?>
                        <img src="<?php echo esc_url( $tumb_url ); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    </div>
                    <?php }
                    }
                }
                if ( $blog_type == 'modern' ) { ?>
                    <?php if ( ! has_post_thumbnail() || ! function_exists( 'cs_framework_init' ) ) { ?>

                        <div class="post-little-banner">
                            <div class="main-top-content text-center">
                                <?php the_title( '<h2 class="title">', '</h2>' ); ?>
                                    <div class="date-post"><?php the_time( get_option( 'date_format' ) ); ?></div>
                                    <?php if ( cs_get_option( 'pao_post_author' ) ) { ?>
                                    <div class="author">
                                        <?php esc_html_e( 'Written by: ', 'pao' );
                                        the_author_link(); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="post-paper <?php echo esc_attr( $sidebar_class . ' ' . $blog_type ); ?>">
                <?php }

                the_content();

				wp_link_pages( 'link_before=<span class="pages">&link_after=</span>&before=<div class="post-nav"> <span>' . esc_html__( "Page:", 'pao' ) . ' </span> &after=</div>' );

				        if ( (! function_exists( 'cs_framework_init' ) || cs_get_option( 'pao_post_tags' )) && get_the_tags() ) { ?>
                            <div class="post-info">
                                <div class="single-tags"><?php the_tags( '', ' ' ); ?></div>
                            </div>
						<?php }

						if((function_exists( 'cs_framework_init' ) && function_exists( 'pao_like_counter' )) || cs_get_option( 'pao_social_post' ) ){ ?>
                        <div class="bottom-infopwrap">
		                    <?php if ( function_exists( 'cs_framework_init' ) && function_exists( 'pao_like_counter' ) ) { ?>
                                <div class="likes-wrap">
				                    <?php pao_like_button();
				                    pao_like_counter(); ?>
                                    <span>
                        <?php esc_html_e('Like', 'pao'); ?>
                          </span>
                                </div>
		                    <?php } ?>
		                    <?php if ( cs_get_option( 'pao_social_post' ) ) { ?>
                                <div class="ft-part">
                                    <ul class="social-list">

                                        <li>
                                            <a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php esc_url(the_permalink()); ?>&amp;title=<?php echo esc_attr(urlencode(the_title('', '', false))); ?>"
                                               target="_blank" class="linkedin"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li>
                                            <a href="http://twitter.com/home?status=<?php echo esc_attr(urlencode(the_title('', ' ', false))); ?><?php esc_url(the_permalink()); ?>"
                                               class="twitter" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="http://www.facebook.com/sharer.php?u=<?php esc_url(the_permalink()); ?>&amp;t=<?php echo esc_attr(urlencode(the_title('', '', false))); ?>"
                                               class="facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                        <li>
                                            <a href="http://plus.google.com/share?url=<?php esc_url(the_permalink()); ?>&amp;title=<?php echo esc_attr(urlencode(the_title('', '', false))); ?>"
                                               target="_blank" class="gplus"><i class="fa fa-google-plus"></i></a></li>
                                        <li>
                                            <a href="http://pinterest.com/pin/create/link/?url=<?php echo esc_url(urlencode(get_permalink())); ?>&amp;media=<?php echo esc_attr($pinterestimage[0]); ?>&amp;description=<?php esc_attr(the_title()); ?>"
                                               class="pinterest" target="_blank" title="Pin This Post"><i
                                                        class="fa fa-pinterest-square"></i></a></li>
                                    </ul>
                                </div>
		                    <?php } ?>
                        </div>
                    <?php }


               $post_author_info = cs_get_option('post_author_info');
               if ( $post_author_info ) :
                $author_first_name = get_the_author_meta( 'first_name' );
                $author_last_name  = get_the_author_meta( 'last_name' );
                $author_nicename  = get_the_author_meta( 'nicename' );
                $author_bio        = get_the_author_meta( 'description' );
                $facebook          = get_the_author_meta( 'facebook' );
                $twitter           = get_the_author_meta( 'twitter' );
                $instagram         = get_the_author_meta( 'instagram' );
                $dribbble         = get_the_author_meta( 'dribbble' ); ?>
                <div class="user-info-wrap">
                    <section class="post-author">
                        <div class="post-author__avatar">
                            <?php echo get_avatar( get_the_ID(), '155' ); ?>
                        </div>

                        <div class="post-author__content">
                            <div class="post-name-wrap">
                                <?php if ( ! empty( $author_first_name ) || ! empty( $author_last_name ) ) : ?>
                                    <span class="post-author__title"><?php echo esc_html( $author_first_name . ' ' . $author_last_name ); ?></span>
                                <?php endif; ?>
                                <?php if ( ! empty( $author_nicename ) ) : ?>
                                    <span class="post-author__nicename"><?php echo esc_html( $author_nicename ); ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if ( ! empty( $author_bio ) ) : ?>
                                <p><?php echo wp_kses_post( $author_bio ); ?></p>
                            <?php endif; ?>

                            <div class="post-author__social">
                                <?php if ( ! empty( $facebook ) ) : ?>
                                    <a href="<?php echo esc_url( $facebook ); ?>" class="post-author__social-item"><i class="fa fa-facebook"></i></a>
                                <?php endif; ?>

                                <?php if ( ! empty( $twitter ) ) : ?>
                                    <a href="<?php echo esc_url( $twitter ); ?>" class="post-author__social-item"><i class="fa fa-twitter"></i></a>
                                <?php endif; ?>

                                <?php if ( ! empty( $instagram ) ) : ?>
                                    <a href="<?php echo esc_url( $instagram ); ?>" class="post-author__social-item"><i class="fa fa-instagram"></i></a>
                                <?php endif; ?>
                                <?php if ( ! empty( $dribbble ) ) : ?>
                                    <a href="<?php echo esc_url( $dribbble ); ?>" class="post-author__social-item"><i class="fa fa-dribbble"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                 </div>
            <?php endif;

            if ( comments_open() || '0' != get_comments_number() && wp_count_comments( $post->ID ) ) { ?>
              <ul class="comments main">
			       <?php comments_template( '', true ); ?>
               </ul>
            <?php }


				wp_reset_postdata();
				if ( ! function_exists( 'cs_framework_init' ) || (isset( $post_meta[0]['pao_navigation_posts'] )&& $post_meta[0]['pao_navigation_posts'] ) ) { ?>
                    <div class="single-pagination">
						<?php

						$prev_post = get_previous_post();
						if ( ! empty( $prev_post ) ) : ?>
                            <div class="pag-prev">
                              <span>
	                            <?php esc_html_e( 'Previous post', 'pao' ); ?>
                                <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="content">
	                                <?php echo get_the_title( $prev_post ); ?>
                                </a>
                                </span>
                            </div>
                        <div class="icon-wrap"><i class="fa fa-th-large"></i></div>
						<?php endif;

						$next_post = get_next_post();
						if ( ! empty( $next_post ) ) :
							?>
                            <div class="pag-next">
                              <span>
	                            <?php esc_html_e( 'Next post', 'pao' ); ?>
                                <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="content">
	                                <?php echo get_the_title( $next_post ); ?>
                                </a>
                                </span>
                            </div>
						<?php endif; ?>
                    </div>
					<?php
				} ?>

            </div>
        </div>
           <?php if ( (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar')) || ( $cs_sidebar && in_array( 'post', $cs_sidebar ) ) ) {
                ?>
                    <div class="col-md-3 pl30md <?php echo esc_attr( $position_sidebar ); ?>">
                        <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar' ) ) ?>
                    </div>
                 <?php
               } ?>
           </div>
	<?php

	if ( $blog_type == 'modern' ) { ?>
        </div>
	<?php }


endwhile;

get_footer();











