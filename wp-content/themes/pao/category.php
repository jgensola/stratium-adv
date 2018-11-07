<?php
/**
 * Category Template
 */

$content_size_class = (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar'))  || cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) ) ? ' col-md-9' : '';
$sidebar_class = (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar'))  || cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) ) ? ' sidebar-show' : 'sidebar-no';
$post_size_class    = !function_exists( 'cs_framework_init' ) && cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) ) ? 6 : 4;
$post_size_class_metro    = !function_exists( 'cs_framework_init' ) && cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) ) ? 6 : 3;
$post_size_class_masonry    = (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar')) || (cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) )) ? 6 : 4;
$blog_type = cs_get_option('blog_type') ? cs_get_option('blog_type') : 'masonry';
$blog_type = apply_filters( 'pao_blog_style', $blog_type );
$container = $blog_type == 'metro' ? 'container-fluid' : 'container';

global $wp_query;
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$max = $wp_query->max_num_pages;

wp_localize_script(
	'jquery',
	'load_more_blog_posts',
	array(
		'ajaxurl'   => admin_url( 'admin-ajax.php' ),
		'startPage' => $paged,
		'maxPage'   => $max,
		'nextLink'  => next_posts( 0, false )
	)
);


get_header();
if ( have_posts() ) : ?>

	<?php if( $blog_type == 'metro' || $blog_type == 'masonry' ){ ?>
        <div class="post-little-banner">
          <div class="page-title-wrap">
                <h3 class="page-title-blog"><?php echo single_cat_title( '', false ); ?></h3>
          </div>
        </div>
        <div class="post-paper <?php echo esc_attr($sidebar_class . ' ' . $blog_type); ?>">
	<?php } ?>


	    <div class="<?php echo esc_attr($container); ?>">
        <div class="row">
            <div class="blog <?php echo esc_attr( $content_size_class . ' ' . $blog_type); ?>">
                <?php
                if($blog_type == 'masonry'){ ?>
                    <div class="izotope-blog">
                <?php }

				while ( have_posts() ) : the_post();
				        global $post;
						$no_image = '';
						$post_options = get_post_meta( get_the_ID(), 'pao_post_options' );
                            if(isset( $post_options[0]['post_preview_style'] )){

					        if($post_options[0]['post_preview_style'] == 'text' || $post_options[0]['post_preview_style'] == 'link'){
					            $no_image = ' no-image';
					        }elseif ($post_options[0]['post_preview_style'] == 'image' && !has_post_thumbnail()){
					             $no_image = ' no-image';
					        }

					    }elseif(!has_post_thumbnail() || get_post_format( get_the_ID() ) == 'link' || get_post_format( get_the_ID()) == 'quote'){
                            $no_image = ' no-image';
					    }

						$format_post = isset( $post_options[0]['post_preview_style'] ) ? $post_options[0]['post_preview_style'] : 'image';
						$preview = isset($post_options[0]['post_preview_style']) ? $post_options[0]['post_preview_style'] : '';
						if($blog_type == 'center'){ ?>
                            <div <?php post_class( 'post col-xs-12 post-content center-style format-post-' . $format_post . $no_image); ?>>
                                <div class="post-wrap-item <?php echo esc_attr($preview); ?>">
                                   <?php if ( ((isset( $post_options[0]['post_preview_style'] ) && ($post_options[0]['post_preview_style'] != 'text' && $post_options[0]['post_preview_style'] != 'link' && $post_options[0]['post_preview_style'] != 'quote')) && ( get_post_format( get_the_ID() ) != 'quote' ) && (get_post_format( get_the_ID() ) != 'link' )) || (! function_exists( 'cs_framework_init' ) && ( get_post_format( get_the_ID() ) != 'quote' ) && (get_post_format( get_the_ID() ) != 'link' ))) {
								        pao_blog_item_hedeader( $post_options, get_the_ID() );
									} ?>
                                    <div class="info-wrap">
                                        <div class="flex-wrap">
                                            <span class="category"><?php the_category( ', ' ); ?></span>
                                            <span class="date"><a href="<?php esc_url(the_permalink()); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span>
                                        </div>
									<?php if ( (isset( $post_options[0]['post_preview_style'] ) && ($post_options[0]['post_preview_style'] == 'text' || $post_options[0]['post_preview_style'] == 'link' )) || ( get_post_format( get_the_ID() ) == 'quote' ) || ( get_post_format( get_the_ID() ) == 'link' )) {
										    pao_blog_item_hedeader( $post_options, get_the_ID() );
										}else{ ?>

											<?php the_title('<h4 class="title">','</h4>'); ?>
                                            <a href="<?php esc_url(the_permalink()); ?>" class="a-btn-4"><?php esc_html_e('view more', 'pao'); ?></a>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
						<?php }
                       elseif($blog_type == 'metro' || $blog_type == 'masonry' ){
						    if($blog_type == 'masonry'){ ?>
						        <div <?php post_class( 'post col-xs-12 metro-style col-sm-6 col-md-' . $post_size_class_masonry . ' col-lg-' .$post_size_class_masonry . ' format-post-' . $format_post . $no_image); ?>>
						    <?php }
						    else{ ?>
						        <div <?php post_class( 'post col-xs-12 metro-style col-sm-6 col-md-' . $post_size_class . ' col-lg-' .$post_size_class_metro . ' format-post-' . $format_post . $no_image); ?>>
						    <?php }?>
                                <div class="post-wrap-item <?php echo esc_attr($preview); ?>">
									<?php if ( $format_post != 'text'  && $format_post != 'link' && ( get_post_format( get_the_ID() ) != 'quote' && ( get_post_format( get_the_ID() ) != 'link' )  ) ) {
										pao_blog_item_hedeader( $post_options, get_the_ID() );
									} ?>

                                    <div class="info-wrap">
                                        <span class="category"><?php the_category( ' ' ); ?></span>
                                        <span class="date"><a href="<?php esc_url(the_permalink()); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span>
										<?php if ( $format_post == 'text' || ( get_post_format( get_the_ID() ) == 'quote' ) || $format_post == 'link' || get_post_format( get_the_ID() ) == 'link' ) {
											pao_blog_item_hedeader( $post_options, get_the_ID() );
										}else{ ?>
                                            <a href="<?php esc_url(the_permalink()); ?>" class="title"><?php the_title(); ?></a>
                                            <div class="text"><?php the_excerpt(); ?></div>
                                              <?php if(!function_exists( 'cs_framework_init' )){
                                                 wp_link_pages( 'link_before=<span class="pages">&link_after=</span>&before=<div class="post-nav"> <span>' . esc_html__( "Page:", 'pao' ) . ' </span> &after=</div>' );
                                            }
										 } ?>
                                    </div>
                                </div>
                            </div>
						<?php } ?>

					<?php endwhile; wp_reset_postdata();
					if($blog_type == 'masonry'){ ?>
                        </div>
                    <?php }

                    if ( $blog_type !== 'metro' ) : ?>
                        <div class="pager-pagination">
                            <?php echo paginate_links( ); ?>
                        </div>
	                <?php else : ?>
                        <div class="metro-load-more">
                            <?php echo '<div class="metro-load-more__button js-load-more">' . esc_html__('Load More', 'pao') . '</div>'; ?>
                        </div>
	                <?php endif; ?>
                </div>
                <?php if ( (!function_exists( 'cs_framework_init' ) && is_active_sidebar('sidebar')) || (cs_get_option( 'sidebar' ) && in_array( 'blog', cs_get_option( 'sidebar' ) ) )) { ?>
                    <div class="col-md-3 sidebar pl30md">
                        <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar' ) ) {
                        } ?>
                    </div>
                <?php } ?>

            </div>
        </div>

            </div>


    <?php else: ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="post-little-banner empty-post-list">
                        <h3><?php esc_html_e( 'sorry, no posts matched your criteria.', 'pao' ); ?></h3>
                        <?php get_search_form( true ); ?>
                    </div>
                </div>
            </div>
        </div>


    <?php endif;


get_footer();