<?php
/**
 * Filters for lazy load (etc)
 *
 * @package eventine
 * @since 1.0.0
 *
 */


if ( ! function_exists( 'pao_the_lazy_load_flter' ) ) {
	function pao_the_lazy_load_flter( $id, $attr = array(), $state = true, $size = 'full', $uri_img = '') {

		if (!isset($id)) {
			return "";
		}

		if ( empty($uri_img) ) {
			$uri_img = 'data:image/gif;base64,R0lGODdhAQABAIAAAAAAAMzMzCwAAAAAAQABAAACAkQBADs=';
		}

		if (is_numeric($id)) {
			$id = wp_get_attachment_image_src($id, $size );
		} else {
			$id = array($id,'','');
		}

		if (!cs_get_option( 'enable_lazy_load' )){
			$state = false;
		}
			$default_attr = array(
			'data-lazy-src' => esc_url($id[0]),
			'src'     => $uri_img,
			'class'   => 's-img-switch',
		);

		$attr = wp_parse_args( $attr, $default_attr );

		if ( !$state ) {
			unset($attr['data-lazy-src']);
			$attr['src'] = esc_url($id[0]);
		}

		$attr = apply_filters('prefix_image_lazy_load',$attr );

		$attr = array_map( 'esc_attr', $attr );
		$html = '<img';

		foreach ( $attr as $name => $value ) {
			$html .= " $name=" . '"' . $value . '"';
		}
		$html .= ' />';

		return $html;
	}
}
