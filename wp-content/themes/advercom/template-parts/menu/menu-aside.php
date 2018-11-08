<?php
/**
 * Aside menu
 */

if ( is_page() || is_home() ) {
    $post_id = get_queried_object_id();
} else {
    $post_id = get_the_ID();
}

$aside_open    = cs_get_option( 'aside_open' );
$vertical_logo = cs_get_option('vertical_logo');
$meta_data           = get_post_meta( $post_id, '_custom_page_options', true );
$meta_data_portfolio = get_post_meta( $post_id, 'pao_portfolio_options', true );

if ( isset( $meta_data['change_menu'] ) && $meta_data['change_menu'] && isset( $meta_data['aside_open'] ) ) {
    $aside_open = $meta_data['aside_open'];
}
if ( isset( $meta_data_portfolio['aside_open'] ) ) {
    $aside_open = $meta_data_portfolio['aside_open'];
}

if (isset($meta_data['change_menu']) && $meta_data['change_menu'] && isset($meta_data['vertical_logo'])) {
    $vertical_logo = $meta_data['vertical_logo'];
}
if ( isset( $meta_data_portfolio['vertical_logo'] ) ) {
    $vertical_logo = $meta_data_portfolio['vertical_logo'];
}

$aside_open = isset( $aside_open ) && $aside_open ? 'active-menu' : '';

$aside_open .= isset($vertical_logo) && $vertical_logo ? ' vertical' : ''; ?>

<div class="header_top_bg" style="padding-bottom: 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">

                <!-- HEADER -->
                <header class="right-menu aside-menu aside-fix <?php echo esc_attr($aside_open); ?>">
                    <!-- LOGO -->
                    <?php pao_site_logo(); ?>
                    <!-- /LOGO -->

                   <!-- MOB MENU ICON -->
                    <a href="#" class="mob-nav">
                        <div class="hamburger">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </a>
                    <!-- /MOB MENU ICON -->



                        <!-- ASIDE MENU ICON -->
                        <a href="#" class="aside-nav">
                            <span class="aside-nav-line line-1"></span>
                            <span class="aside-nav-line line-2"></span>
                            <span class="aside-nav-line line-3"></span>
                        </a>
                        <!-- /ASIDE MOB MENU ICON -->

                        <!-- NAVIGATION -->
                        <nav id="topmenu" class="topmenu <?php echo esc_attr($aside_open); ?>">
                            <a href="#" class="mob-nav-close">
                                <span>close</span>
                                <div class="hamburger">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </a>

                            <?php pao_custom_menu(); ?>
                                <span class="f-right">
                                <?php if (cs_get_option('header_social')) { ?>
                                    <div class="pao-top-social">
                                        <span class="social-icon fa fa-share-alt"></span>
                                        <ul class="social">
                                          <?php foreach (cs_get_option('header_social') as $link) { ?>
                                              <li>
                                                  <a href="<?php echo esc_url($link['header_social_link']); ?>" target="_blank">
                                                      <i class="<?php echo esc_attr($link['header_social_icon']); ?>"></i>
                                                  </a>
                                            </li>
                                          <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                </span>
                            </nav>
                        <!-- NAVIGATION -->
                </header>
            </div>
        </div>

    </div>
</div>