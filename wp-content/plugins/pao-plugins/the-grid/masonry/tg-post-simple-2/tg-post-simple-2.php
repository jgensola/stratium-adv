<?php
/**
* @package   The_Grid
* @author    Themeone <themeone.master@gmail.com>
* @copyright 2015 Themeone
*
* Skin Name: Post Simple 2
* Skin Slug: tg-post-simple-2
* Date: 07/23/18 - 01:53:50PM
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
	$output .= $tg_el->get_the_title(array('link' => false, 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-3 title');
	$output .= $tg_el->get_the_date(array('format' => 'F j, Y'), 'tg-element-4 date');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Top content wrapper end

// Bottom content wrapper start
$output .= $tg_el->get_content_wrapper_start('', 'bottom');
	$output .= $tg_el->get_the_excerpt(array('length' => '240', 'suffix' => ''), 'tg-element-5');
	$output .= $tg_el->get_html_element(array('html' => 'view more', 'action' => array('type' => 'link', 'link_target' => '_self', 'link_url' => 'post_url', 'custom_url' => '', 'meta_data_url' => '')), 'tg-element-1 tg-a-btn-4');
	$output .= $tg_el->get_content_clear();
$output .= $tg_el->get_content_wrapper_end();
// Bottom content wrapper end

return $output;