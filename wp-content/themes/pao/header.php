<?php
/**
 *
 * The Header for Pao theme
 * @since 1.0.0
 * @version 1.0.0
 *
 */


global $bodyClass;

if (is_page() || is_home()) {
    $post_id = get_queried_object_id();
} else {
    $post_id = get_the_ID();
}

$meta_data = get_post_meta($post_id, '_custom_page_options', true);

$class_main_wrapper = '';

$preloader_text = cs_get_option('preloader_text') ? cs_get_option('preloader_text') : 'w';
$preloader_images = cs_get_option('preloader_images') ? cs_get_option('preloader_images') : '';

// modern preloader options
$preloader_first_text = cs_get_option('first_preloader_text') ? cs_get_option('first_preloader_text') : 'Loading';
$preloader_second_text = cs_get_option('second_preloader_text') ? cs_get_option('second_preloader_text') : 'please wait';

// page options
$enable_footer_parallax = isset($meta_data['enable_parallax_footer_page']) ? $meta_data['enable_parallax_footer_page'] : cs_get_option('enable_parallax_footer');
$enable_footer_parallax = apply_filters('pao_blog_footer_style', $enable_footer_parallax);
$unitClass = !function_exists('cs_framework_init') ? ' unit ' : '';
$blog_type = cs_get_option('blog_single_type') ? cs_get_option('blog_single_type') : 'modern';

if ($enable_footer_parallax) {
    $class_main_wrapper .= ' footer-parallax';
}

$class_desc_padd = '';
$class_mob_padd = '';

if (!empty($meta_data['padding_desktop'])) {
    $class_desc_padd = ' padding-desc ';
}
if (!empty($meta_data['padding_mobile'])) {
    $class_mob_padd = ' padding-mob ';
}

$enable_sound_mob = cs_get_option('enable_sound_mob');
$enable_sound_mob = isset($enable_sound_mob) ? $enable_sound_mob : true;
$mobile      = cs_get_option( 'mobile_menu' );
$bodyClass   .= isset( $mobile ) && $mobile ? ' mob-main-menu' : '';
$bodyClass   .= cs_get_option( 'enable_sound' ) ? ' enable_sound' : '';
$bodyClass .= $enable_sound_mob ? ' enable_sound_mob' : '';
$mobileWidth = isset($mobile) && $mobile ? '1024' : '992';  ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<style>
    .spinner-preloader-wrap {
        background: #282828;
    }

    .spinner {
        margin: 0 auto 0;
        width: 70px;
        text-align: center;
    }

    .spinner > div {
        width: 18px;
        height: 18px;

        display: inline-block;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .spinner .bounce1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
        background-color: #fff;
    }

    .spinner .bounce2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
        background-color: #f2eecd;
    }

    .spinner .bounce3 {
        background-color: #f2de38;
    }

    @-webkit-keyframes sk-bouncedelay {
        0%, 80%, 100% { -webkit-transform: scale(0) }
        40% { -webkit-transform: scale(1.0) }
    }

    @keyframes sk-bouncedelay {
        0%, 80%, 100% {
            -webkit-transform: scale(0);
            transform: scale(0);
        } 40% {
              -webkit-transform: scale(1.0);
              transform: scale(1.0);
          }
    }

</style>
<body <?php body_class(); ?>>
<!-- MAIN_WRAPPER -->
<?php
$class_animsition = 'animsition' . $unitClass;
if (cs_get_option('pao_disable_preloader') || cs_get_option('preloader_type') == 'text' || cs_get_option('preloader_type') == 'spinner' || cs_get_option('preloader_type') == 'modern_text') {
    $class_animsition = '';
}

if (!cs_get_option('pao_disable_preloader') && cs_get_option('preloader_type') == 'text') { ?>
  <div class="preloader-svg">
    <svg id="loaderSvg" class="loader__svg" xmlns="http://www.w3.org/2000/svg" height="300" viewBox="0 0 1024 300">
        <?php if (!empty($preloader_images)){ ?>
          <defs>
              <?php
              $preloader_images = explode(",", $preloader_images);
              $count = 1;
              foreach ($preloader_images as $image) { ?>
                <pattern x="0" y="0" width="1024" height="686" patternUnits="userSpaceOnUse"
                         id="pattern<?php echo esc_attr($count); ?>" viewBox="0 0 1024 300">
                  <image xmlns:xlink="http://www.w3.org/1999/xlink"
                         xlink:href="<?php echo esc_url(wp_get_attachment_image_url($image, 'large')); ?>"
                         preserveAspectRatio="none" x="0" y="-200" width="1024" height="686"></image>
                </pattern>
                  <?php $count++;
              } ?>
          </defs>
            <text x="50%" y="20%" id="letter" dy="150" fill="url('#pattern1')">
          <?php }else{ ?>
            <text x="50%" y="20%" id="letter" dy="150" fill="#222222">
            <?php }
            echo esc_html($preloader_text); ?>
         </text>
    </svg>

  </div>
<?php }

if(!cs_get_option('pao_disable_preloader') && cs_get_option('preloader_type') == 'spinner'){ ?>
    <div class="spinner-preloader-wrap">
        <div class="cssload-container">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
<?php }

if ( !cs_get_option ('pao_disable_preloader') && cs_get_option('preloader_type') == 'modern_text') { ?>
    <div class="preloader-modern">
        <div class="preloader-wrap">
            <div class="loader-title"><?php echo esc_html($preloader_first_text); ?></div>
            <div class="loader-subtitle"><?php echo esc_html($preloader_second_text); ?></div>
        </div>
    </div>
<?php }?>

<div class="main-wrapper <?php echo esc_attr($class_animsition . $class_main_wrapper) . ' ' . esc_attr($class_desc_padd) . esc_attr($class_mob_padd); ?>" data-sound="<?php echo esc_url(get_template_directory_uri() . '/assets/audio/'); ?>" data-top="<?php echo esc_attr($mobileWidth); ?>">

<?php do_action('pao_main_header'); ?>