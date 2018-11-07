<?php
/**
 * Single service
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

$preview = 'image';

$blog_type = cs_get_option( 'blog_single_type' ) ? cs_get_option( 'blog_single_type' ) : 'modern';

while ( have_posts() ) :
	the_post(); ?>

    <div class="container">
    <div class="row">
    <div class="post-details single-post col-md-12 no-padd-md <?php echo esc_attr( $preview ); ?>">
        <div class="single-content <?php echo esc_attr( $protected ); ?>">

				<?php do_shortcode(the_content());

				wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
	<?php


endwhile;

get_footer();











