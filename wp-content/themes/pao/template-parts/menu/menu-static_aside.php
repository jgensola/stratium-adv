<?php
/**
 * Static aside menu
 */

if (is_page() || is_home()) {
    $post_id = get_queried_object_id();
} else {
    $post_id = get_the_ID();
}

$footer_text = cs_get_option('static_text') ? cs_get_option('static_text') : ' ';
$fixed_menu_class = pao_fixed_header('static_aside', $post_id); ?>

<div class="header_top_bg <?php echo esc_attr($fixed_menu_class) ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">

                <!-- HEADER -->
                <header class="right-menu aside-menu static">
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
                    <nav id="topmenu" class="topmenu">
                        <a href="#" class="mob-nav-close">
                            <span><?php esc_html_e('close', 'pao'); ?></span>
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
                                          <a href="<?php echo esc_url($link['header_social_link']); ?>"
                                             target="_blank">
                                              <i class="<?php echo esc_attr($link['header_social_icon']); ?>"></i>
                                          </a>
                                    </li>
                                  <?php } ?>
                                </ul>
                              </div>
                            <?php } ?>
                            <div class="copy">
                                <?php echo wp_kses_post($footer_text); ?>
                            </div>

                        </span>
                    </nav>
            <!-- NAVIGATION -->

            </header>
        </div>
    </div>

    </div>
</div>
