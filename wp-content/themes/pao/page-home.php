<?php
/**
 * Template Name: Advercom Homepage
 *
 * @package pao
 * @since 1.0
 *
 */

get_header();
$page_meta = get_post_meta( $post->ID, '_custom_page_options' );

$protected = '';

if ( post_password_required() ) {
	$protected = 'protected-page';
}


while ( have_posts() ) : the_post();

	$content = get_the_content();
	if ( ! strpos( $content, 'vc_' ) ) { ?>
		<div class="single-post">

                 <?php
                if(!function_exists( 'cs_framework_init' )){ ?>
                        <div class="post-paper padding-both">
                 <?php }

                $equal = !function_exists( 'cs_framework_init' ) ? 'single-content' : ''; ?>
				<div class="container <?php echo esc_attr( $equal ); ?> no-padd <?php echo esc_attr( $protected ); ?>">
					<div class="row">
						<div class="col-xs-12">
							<?php the_content();

							  if(!function_exists( 'cs_framework_init' )){
                                 wp_link_pages( 'link_before=<span class="pages">&link_after=</span>&before=<div class="post-nav"> <span>' . esc_html__( "Page:", 'pao' ) . ' </span> &after=</div>' );
                              }

							?>
						</div>
					</div>
				</div>
			<?php
			if ( comments_open() ) { ?>
				<div class="comments container no-padd-md">
					<?php comments_template( '', true ); ?>
				</div>
			<?php } ?>

            <?php if(!function_exists( 'cs_framework_init' )){ ?>
                </div>
            <?php } ?>
		</div>
	<?php } else {

        if( is_page() || is_home()) {
            $post_id = get_queried_object_id();
        } else {
            $post_id = get_the_ID();
        }

        $meta_data = get_post_meta( $post_id, '_custom_page_options', true );
        $menu_main_style = cs_get_option( 'menu_style' );

        if(isset($meta_data['change_menu']) && $meta_data['change_menu'] && isset($meta_data['menu_style'])){
            $menu_main_style = $meta_data['menu_style'];
        }
        $class_container = $menu_main_style == 'static_aside' ? '-fluid' : '';

        $class_container .= !empty($page_meta[0]['disable_container_padding']) ? ' no-padd' : '';  ?>

        <div class="background">
            <div class="light-yellow"></div>
            <div class="white"></div>
        </div>

		<div class="container<?php echo esc_attr( $class_container ); ?>">
			<div class="hero">
				<?php the_content(); ?>
			</div>
		</div>

	<?php }
endwhile;
get_footer();
