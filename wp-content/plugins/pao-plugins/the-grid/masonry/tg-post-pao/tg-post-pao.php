<?php
/**
* @package   The_Grid
* @author    Themeone <themeone.master@gmail.com>
* @copyright 2015 Themeone
*
* Skin Name: Post Pao
* Skin Slug: tg-post-pao
* Date: 09/10/18 - 08:10:00AM
*
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// Init The Grid Elements instance
$tg_el = The_Grid_Elements();

// Prepare main data for futur conditions
$image  = $tg_el->get_attachment_url();
$format = $tg_el->get_item_format();

$output = null;

// Top content wrapper start
$output .= $tg_el->get_content_wrapper_start('', 'top');
	$output .= $tg_el->get_the_terms(array('taxonomy' => 'category', 'link' => true, 'color' => 'color', 'separator' => '', 'override' => true), 'tg-element-6 category');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Top content wrapper end

$media = $tg_el->get_media();

// if there is a media
if ($media) {

	// Media wrapper start
	$output .= $tg_el->get_media_wrapper_start();

	// Media content (image, gallery, audio, video)
	$output .= $media;

	// if there is an image
	if ($image || in_array($format, array('gallery', 'video'))) {

		// Media content holder start
		$output .= $tg_el->get_media_content_start();

		// Overlay
		$output .= $tg_el->get_overlay();

		// Media content holder end
		$output .= $tg_el->get_media_content_end();

	}

	$output .= $tg_el->get_media_wrapper_end();
	// Media wrapper end

}

// Bottom content wrapper start
$output .= $tg_el->get_content_wrapper_start('', 'bottom');
	$output .= $tg_el->get_the_date(array('format' => 'ago'), 'tg-element-4 date');
	$output .= $tg_el->get_the_excerpt(array('length' => '120', 'suffix' => ''), 'tg-element-5');
	$output .= $tg_el->get_html_element(array('html' => 'view more', 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-1 tg-a-btn-4');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Bottom content wrapper end

return $output;