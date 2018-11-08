<?php
/**
 * Left menu
 */

if ( is_page() || is_home() ) {
    $post_id = get_queried_object_id();
} else {
    $post_id = get_the_ID();
}

$fixed_menu_class = pao_fixed_header('left', $post_id);?>


<div class="header_top_bg <?php echo esc_attr($fixed_menu_class ) ?> pao-pb0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">

                <!-- HEADER -->
                <header class="right-menu left">
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
                                <span>close</span>
                                <div class="hamburger">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </a>

                            <?php pao_custom_menu(); ?>

                        </nav>
                        <!-- NAVIGATION -->
                </header>
            </div>
        </div>

    </div>
</div>