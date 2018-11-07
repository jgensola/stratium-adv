<?php
/**
 * Full menu
 */

if ( is_page() || is_home() ) {
    $post_id = get_queried_object_id();
} else {
    $post_id = get_the_ID();
}

$fixed_menu_class = pao_fixed_header('full', $post_id); ?>


    <div class="header_top_bg menu-full-header <?php echo esc_attr($fixed_menu_class) ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <!-- HEADER -->
                    <header class="right-menu compact full">
                        <!-- LOGO -->
                        <?php pao_site_logo(); ?>
                        <!-- /LOGO -->

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
                                    <span>close</span>
                                    <div class="hamburger">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                                <div class="full-menu-wrap">
                                    <div class="menu-img-wrap">
	                                    <?php pao_custom_menu();
	                                    $url = cs_get_option('image_full_menu') ? cs_get_option('image_full_menu') : '';

	                                    if(!empty($url)){ ?>
                                            <div class="img-wrap-full">
                                                <img src="<?php echo esc_url($url); ?>" alt="<?php bloginfo('name'); ?>">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </nav>
                            <!-- NAVIGATION -->

                            <!-- MOB MENU ICON -->
                                <a href="#" class="mob-nav mob-but-full">
                                    <span><?php esc_html_e('close', 'pao'); ?></span>
                                    <div class="hamburger">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                             <!-- /MOB MENU ICON -->
                    </header>
                </div>
            </div>

        </div>
    </div>