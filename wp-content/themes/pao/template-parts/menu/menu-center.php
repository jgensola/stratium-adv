<?php
/**
 * Left menu
 */

if ( is_page() || is_home() ) {
	$post_id = get_queried_object_id();
} else {
	$post_id = get_the_ID();
}


$meta_data = get_post_meta($post_id, '_custom_page_options', true);
$meta_data_portfolio = get_post_meta($post_id, 'pao_portfolio_options', true);

$fixed_menu_class = pao_fixed_header('center', $post_id);?>


<div class="header_top_bg <?php echo esc_attr($fixed_menu_class) ?> pao-pb0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">

				<!-- HEADER -->
				<header class="right-menu left center-menu-style">
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

						<?php if (function_exists('cs_framework_init') && cs_get_option('header_social')) { ?>
                            <div class="f-right for-mob">
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
                            </div>
						<?php } ?>

					</nav>

					<?php if (function_exists('cs_framework_init') && cs_get_option('header_social')) { ?>
                            <div class="f-right">
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
                            </div>
                        <?php } ?>
					<!-- NAVIGATION -->
				</header>
			</div>
		</div>

	</div>
</div>