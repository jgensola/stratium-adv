<?php
 

function cr_get_row_offset( $pref, $suf, $max = 50, $step = 5 ) {
	$ar = array();
	for ( $i = 0; $i < $max + $step; $i += $step ) {
		$ar[ $i . 'px' ] = $pref . '-' . $i . $suf;
	}

	return array_merge( array( 'Default' => 'none' ), $ar );
}

$responsive_classes = array(
	array(
		'type'       => 'checkbox',
		'heading'    => __( 'Enable Ovarlay', 'js_composer' ),
		'param_name' => 'enable_ovarlay',
		'value'      => ''
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Large desktop margin top', 'js_composer' ),
		'param_name' => 'desctop_mt',
		'value'      => cr_get_row_offset( 'margin-lg', 't', 400 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Large desktop margin bottom', 'js_composer' ),
		'param_name' => 'desctop_mb',
		'value'      => cr_get_row_offset( 'margin-lg', 'b', 400 ),
		'group'      => 'Responsive Margins',
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Medium desktop margin top', 'js_composer' ),
		'param_name' => 'desctop_md_mt',
		'value'      => cr_get_row_offset( 'margin-md', 't', 200 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Medium desktop margin bottom', 'js_composer' ),
		'param_name' => 'desctop_md_mb',
		'value'      => cr_get_row_offset( 'margin-md', 'b', 200 ),
		'group'      => 'Responsive Margins',
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Tablets margin top', 'js_composer' ),
		'param_name' => 'tablets_mt',
		'value'      => cr_get_row_offset( 'margin-sm', 't', 200 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Tablets margin bottom', 'js_composer' ),
		'param_name' => 'tablets_mb',
		'value'      => cr_get_row_offset( 'margin-sm', 'b', 200 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Mobile margin top', 'js_composer' ),
		'param_name' => 'mobile_mt',
		'value'      => cr_get_row_offset( 'margin-xs', 't', 200 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Mobile margin bottom', 'js_composer' ),
		'param_name' => 'mobile_mb',
		'value'      => cr_get_row_offset( 'margin-xs', 'b', 200 ),
		'group'      => 'Responsive Margins'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Large desktop padding top', 'js_composer' ),
		'param_name' => 'desctop_lg_pt',
		'value'      => cr_get_row_offset( 'padding-lg', 't', 400 ),
		'group'      => 'Responsive Paddings'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Large desktop padding bottom', 'js_composer' ),
		'param_name' => 'desctop_lg_pb',
		'value'      => cr_get_row_offset( 'padding-lg', 'b', 400 ),
		'group'      => 'Responsive Paddings',
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Medium desktop padding top', 'js_composer' ),
		'param_name' => 'desctop_pt',
		'value'      => cr_get_row_offset( 'padding-md', 't', 200 ),
		'group'      => 'Responsive Paddings'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Medium desktop padding bottom', 'js_composer' ),
		'param_name' => 'desctop_pb',
		'value'      => cr_get_row_offset( 'padding-md', 'b', 200 ),
		'group'      => 'Responsive Paddings',
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Tablets padding top', 'js_composer' ),
		'param_name' => 'tablets_pt',
		'value'      => cr_get_row_offset( 'padding-sm', 't', 200 ),
		'group'      => 'Responsive Paddings'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Tablets padding bottom', 'js_composer' ),
		'param_name' => 'tablets_pb',
		'value'      => cr_get_row_offset( 'padding-sm', 'b', 200 ),
		'group'      => 'Responsive Paddings'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Mobile padding top', 'js_composer' ),
		'param_name' => 'mobile_pt',
		'value'      => cr_get_row_offset( 'padding-xs', 't', 200 ),
		'group'      => 'Responsive Paddings'
	),
	array(
		'type'       => 'dropdown',
		'heading'    => __( 'Mobile padding bottom', 'js_composer' ),
		'param_name' => 'mobile_pb',
		'value'      => cr_get_row_offset( 'padding-xs', 'b', 200 ),
		'group'      => 'Responsive Paddings'
	),
    array(
        'type'       => 'dropdown',
        'heading'    => __( 'Background position', 'js_composer' ),
        'param_name' => 'vc_bg_position',
        'value' => array(
            __( 'Center left', 'js_composer' ) => 'bg_center-left',
            __( 'Center right', 'js_composer' ) => 'bg_center-right',
            __( 'Center', 'js_composer' ) => 'bg_center',
            __( 'Top center', 'js_composer' ) => 'bg_top-center',
            __( 'Top right', 'js_composer' ) => 'bg_top-right',
            __( 'Top left', 'js_composer' ) => 'bg_top-left',
            __( 'Bottom center', 'js_composer' ) => 'bg_bottom-center',
            __( 'Bottom right', 'js_composer' ) => 'bg_bottom-right',
            __( 'Bottom left', 'js_composer' ) => 'bg_bottom-left',
        ),
        'group' => __( 'Design Options', 'js_composer' ),
    ),
    array(
        'type' => 'checkbox',
        'heading'    => __( 'Enable angled style for the row on start?', 'js_composer' ),
        'param_name' => 'vc_row_angle_before',
        'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
        'group' => __( 'Design Options', 'js_composer' ),
        'description' => __( 'For correctly work should be some background for row. Work only if prev row have this or next option active.', 'js_composer' ),
    ),
    array(
        'type' => 'checkbox',
        'heading'    => __( 'Enable angled style for the row on end?', 'js_composer' ),
        'param_name' => 'vc_row_angle_after',
        'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
        'group' => __( 'Design Options', 'js_composer' ),
        'description' => __( 'For correctly work should be some background for row.', 'js_composer' ),
    ),
    array(
        'type'       => 'checkbox',
        'heading'    => __( 'Enable Top Wave', 'js_composer' ),
        'param_name' => 'enable_top_wave',
        'value'      => '',
        'group' => __( 'Design Options', 'js_composer' ),
    ),
    array(
        "type"       => "colorpicker",
        "heading"    => __( "Top Wave Color", "js_composer" ),
        "param_name" => "top_wave_color",
        "value"      => '#ffffff', //Default color
        'group' => __( 'Design Options', 'js_composer' ),
    ),
    array(
        'type'       => 'checkbox',
        'heading'    => __( 'Enable Bottom Wave', 'js_composer' ),
        'param_name' => 'enable_bottom_wave',
        'value'      => '',
        'group' => __( 'Design Options', 'js_composer' ),
    ),
    array(
        "type"       => "colorpicker",
        "heading"    => __( "Bottom Wave Color", "js_composer" ),
        "param_name" => "bottom_wave_color",
        "value"      => '#ffffff', //Default color
        'group' => __( 'Design Options', 'js_composer' ),
    ),
);

if ( function_exists( 'vc_add_params' ) ) {
	vc_add_params( 'vc_row', $responsive_classes );
}
