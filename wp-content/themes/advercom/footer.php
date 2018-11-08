<?php
/**
 *
 * Footer
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if ( is_page() || is_home() ) {
	$post_id = get_queried_object_id();
} else {
	$post_id = get_the_ID();
}
// page options
$meta_data           = get_post_meta( $post_id, '_custom_page_options', true );
$meta_data_portfolio = get_post_meta( $post_id, 'pao_portfolio_options', true );
$class_footer        = ! empty( $meta_data['fixed_transparent_footer'] ) || is_404() || ( ! empty( $meta_data_portfolio['fixed_transparent_footer'] ) || ! empty( $meta_data_events['fixed_transparent_footer'] ) ) ? ' fix-bottom' : '';

$enable_footer_copy     = isset( $meta_data['enable_footer_copy_page'] ) ? $meta_data['enable_footer_copy_page'] : cs_get_option( 'enable_footer_copy' );
$enable_footer_white    = isset( $meta_data['enable_footer_white_page'] ) ? $meta_data['enable_footer_white_page'] : cs_get_option( 'enable_footer_white' );
$enable_footer_parallax = isset( $meta_data['enable_parallax_footer_page'] ) ? $meta_data['enable_parallax_footer_page'] : cs_get_option( 'enable_parallax_footer' );
$copyright_align        = isset( $meta_data['pao_copyright_align'] ) ? $meta_data['pao_copyright_align'] : cs_get_option( 'pao_copyright_align' );


if ( empty( $copyright_align ) ) {
	$copyright_align = 'center';
}


if ( isset( $meta_data_portfolio['enable_footer_copy_page'] ) ) {
	$enable_footer_copy = $meta_data_portfolio['enable_footer_copy_page'];
} elseif ( isset( $meta_data_events['enable_footer_copy_page'] ) ) {
	$enable_footer_copy = $meta_data_events['enable_footer_copy_page'];
}


if ( function_exists( 'cs_framework_init' ) && ! $enable_footer_copy ) {
	$class_footer .= ' no-footer';
}

if ( $enable_footer_white ) {
	$class_footer .= ' white-footer';
}

$enable_footer_parallax = apply_filters( 'pao_blog_footer_style', $enable_footer_parallax );
if ( $enable_footer_parallax ) {
	$class_footer .= ' footer-parallax';
}


$pao_footer_style = cs_get_option( 'pao_footer_style' ) ? cs_get_option( 'pao_footer_style' ) : 'modern';

if ( isset( $meta_data_portfolio['pao_footer_style'] ) ) {
	$pao_footer_style = $meta_data_portfolio['pao_footer_style'];
} elseif ( isset( $meta_data['pao_footer_style'] ) && $meta_data['pao_footer_style'] ) {
	$pao_footer_style = $meta_data['pao_footer_style'];
}

$container = $pao_footer_style == 'modern' ? 'container no-padd' : 'container-fluid';

$class_footer .= ' ' . $pao_footer_style;
?>

</div>

<?php if ( ! is_404() ) { ?>
    <footer id="footer" class="<?php echo esc_attr( $class_footer ); ?>">

		<?php if ( ! function_exists( 'cs_framework_init' ) ) { ?>
            <div class="container-fluid">
                <div class="contact-information">
                    <p class="address">
                        <span>No. 18 Atis Street, Brgy. Villamonte</span>
                        <span>Bacolod City, Negros Occidental 6100</span>
                    </p>
                    <p class="contact-links">
                        <a href="tel:+639173000011" title="Mobile Number" class="phone-numnber">+63 917 300 0011</a>
                        <a href="mailto:sales@advercom.ph" title="Email" class="email">sales@advercom.ph</a>
                    </p>
                </div>
                <div class="copyright">
					<p class="logo">adver<span>com</span></p>
                    <p>© Advercom Media Group Co. All Rights Reserved.</p>
                </div>
            </div>
		<?php } ?>

        <div class="<?php echo esc_attr( $container ); ?>">

			<?php if ( ( ! empty( $enable_footer_copy ) && $enable_footer_copy == true )) { ?>

                <div class="container-fluid">
                    <div class="contact-information">
                        <p class="address">
                            <span>No. 18 Atis Street, Brgy. Villamonte</span>
                            <span>Bacolod City, Negros Occidental 6100</span>
                        </p>
                        <p class="contact-links">
                            <a href="tel:+639173000011" title="Mobile Number" class="phone-number">+63 917 300 0011</a>
                            <a href="mailto:sales@advercom.ph" title="Email" class="email">sales@advercom.ph</a>
                        </p>
                    </div>
                    <div class="copyright">
                        <p class="logo">adver<span>com</span></p>
                        <p>© Advercom Media Group Co. All Rights Reserved.</p>
                    </div>
                </div>

			<?php } ?>
        </div>
    </footer>
<?php } ?>

<?php
$classCopy = cs_get_option( 'enable_copyright' ) && ! cs_get_option( 'text_copyright' ) ? '' : 'copy';
if ( cs_get_option( 'enable_copyright' ) ): ?>
    <div class="pao_copyright_overlay <?php echo esc_attr( $classCopy ); ?>">
        <div class="pao_copyright_overlay-active">
			<?php if ( cs_get_option( 'text_copyright' ) ) : ?>
                <div class="pao_copyright_overlay_text">
					<?php echo wp_kses_post( cs_get_option( 'text_copyright' ) ); ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<div class="fullview">
    <div class="fullview__close"></div>
</div>

<?php if ( cs_get_option( 'page_scroll_top' ) == true ) { ?>
    <div class="scroll-top-button">
        <a href="#" id="back-to-top">&uarr;</a>
    </div>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>