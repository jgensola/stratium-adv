<?php

function pao_reset_default_templates( $data ) {
    return array();
}
add_filter( 'vc_load_default_templates', 'pao_reset_default_templates' );

function pao_vc_templates(){

    $templates = array();

    //Category Banners
//	Classic Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Classic Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/main-banner.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][banner_slider type_slider="horizontal" autoplay="6" speed="2000" enable_btn="true"][banner_slider_items option_style="horizontal" title="modern
design" button="url:%23|title:learn%20more||" image="1104"][banner_slider_items option_style="horizontal" title="make
incredible" btn_style="a-btn-2" animation_style="style2" button="url:%23|title:learn%20more||"][banner_slider_items option_style="horizontal" title="creative
studio" btn_style="a-btn-3" animation_style="style3" button="url:%23|title:learn%20more||"][/banner_slider][/vc_column][/vc_row][vc_row full_width="stretch_row_content" desctop_mb="margin-lg-105b" desctop_md_mb="margin-md-65b" tablets_mb="margin-sm-65b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-55b"][vc_column][pao_about bgtitle="about" image="45" subtitle="about us" title="we're pao, a small design agency based in los angeles." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fabout-us%2F|title:view%20more|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Modern Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Modern Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/modern-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][banner_slider type_slider="horizontal_modern"][banner_slider_items option_style="horizontal_modern" title="pink pastel socks" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:learn%20more||" additional_image="1085"][banner_slider_items option_style="horizontal_modern" title="blue gray socks" animation_style="style2" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:learn%20more||" additional_image="361"][banner_slider_items option_style="horizontal_modern" title="airdate bag" animation_style="style3" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:learn%20more||" additional_image="1135"][/banner_slider][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Vertical Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Vertical Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/vertical-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][banner_slider socials="%5B%7B%22social_text%22%3A%22Facebook%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22social_text%22%3A%22Behance%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.behance.net%2F%22%7D%2C%7B%22social_text%22%3A%22Instagram%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F%22%7D%5D" autoplay="5" speed="1500"][banner_slider_items title="the power of design" pagination_title="Power of design" image="471"][banner_slider_items title="quisque in lacus" pagination_title="In quisque" image="339"][banner_slider_items title="lorem ipsum dolor" pagination_title="Lorem ipsum" image="332"][/banner_slider][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Urban Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Urban Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/urban-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-150b" desctop_md_mb="margin-md-120b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][banner_slider type_slider="urban" socials_urban="%5B%7B%22icon%22%3A%22fa%20fa-dribbble%22%2C%22social_url%22%3A%22https%3A%2F%2Fdribbble.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-instagram%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-facebook-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%5D" autoplay="5" speed="1500" additional_title="PAO - DESIGN STYDIO"][banner_slider_items option_style="urban" subtitle="2005 Stokes Isle Apt. 896, Venabille, New York" title="Exhibition Center
in Boston" btn_style="a-btn-3" image="1521" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-urban%2F|title:look%20more||"][banner_slider_items option_style="urban" title="Creative ways" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna leo, congue vitae hendrerit ut, maximus in metus. Cras tincidunt pellentesque tellus in bibendum. Donec vel diam non mauris maximus ornarel. " image="1396" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-urban%2F|title:look%20more||"][banner_slider_items option_style="urban" subtitle="Modern office in New York" title="Awesome people
and ideas" btn_style="a-btn-3" additional_btn_style="a-btn-2" image="1362" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-urban%2F|title:look%20more||" additional_button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:contact%20us||"][/banner_slider][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Simple Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Simple Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/simple-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none" desctop_mb="margin-lg-105b" desctop_md_mb="margin-md-20b" tablets_mb="margin-sm-20b" mobile_mb="margin-xs-0b" css=".vc_custom_1523952678181{padding-top: 0px !important;}"][banner_slider type_slider="horizontal_modern_reverse" autoplay="5000" speed="1500"][banner_slider_items option_style="horizontal_modern_reverse" subtitle="#paostudio" title="it’s proudly for us
to build stylish" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-details-menio%2F|title:Look%20more||" additional_image="1712"][banner_slider_items option_style="horizontal_modern_reverse" subtitle="#design" title="we always satisfy your needs" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-details-menio%2F|title:Look%20more||" additional_image="752"][banner_slider_items option_style="horizontal_modern_reverse" subtitle="#team" title="great team - incredible design" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fportfolio-item%2Fportfolio-details-menio%2F|title:Look%20more||" additional_image="753"][/banner_slider][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Vertical Elements Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Vertical Elements Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/vertical-anim-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][banner_slider type_slider="vertical_custom_elements" socials="%5B%7B%22social_text%22%3A%22Facebook%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22social_text%22%3A%22Behance%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.behance.net%2F%22%7D%2C%7B%22social_text%22%3A%22Instagram%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F%22%7D%5D" autoplay="6" speed="1500"][banner_slider_items option_style="vertical_custom_elements" title="the power of design" pagination_title="Power of design" image="1249" additional_image="1251" animated_image_1="1252" animated_image_2="1252" animated_image_4="1254"][banner_slider_items option_style="vertical_custom_elements" title="unsplash book." title_align="right" pagination_title="unsplash book." image="1255" additional_image="1256" animated_image_1="1257" animated_image_4="1258"][banner_slider_items option_style="vertical_custom_elements" title="bookstore." title_align="left" pagination_title="bookstore" image="1259" additional_image="1260" animated_image_2="1261" animated_image_3="1262"][/banner_slider][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Shop Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Shop Banner Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/shop-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_products_slider socials="%5B%7B%22icon%22%3A%22fa%20fa-facebook-square%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22social_url%22%3A%22https%3A%2F%2Ftwitter.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-instagram%22%2C%22social_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-dribbble%22%2C%22social_url%22%3A%22https%3A%2F%2Fdribbble.com%2F%22%7D%5D" additional_text="view full collection" additional_url="http://dev.viewdemo.co/wp/pao/shop/" email="sales@paostud.io" cats_product="wood" autoplay="5" loop="true" count="5" image="884" bg_title="sofaholic"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Classic Image Banner
    $data = array();
    $data['name'] = esc_html__( 'Classic Image Banner', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/classic-img-banner.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_banner style_banner="classic" title="work with you to understand your business specifics" image="333"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	Instagram Banner
    $data = array();
    $data['name'] = esc_html__( 'Instagram Banner', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/inst-banner.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-125b" tablets_mb="margin-sm-70b" kswr_row_top_decor_enabled="false" kswr_row_bottom_decor_enabled="false"][vc_column css_animation="none"][pao_banner style_animation="style2" style="center_content" overlay="yes" btn_text="Follow me" btn_url="https://www.instagram.com/" title="I'm instagramer" image="2086"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//    Simple Image Banner
    $data = array();
    $data['name'] = esc_html__( 'Simple Image Banner', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/simple-img-banner.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" tablets_mb="margin-sm-90b" mobile_mb="margin-xs-50b"][vc_column][pao_banner animation="yes" style="center_content" title="pricing table" image="1104"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//    About Image Banner
    $data = array();
    $data['name'] = esc_html__( 'About Image Banner', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/about-img-banner.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-90b" tablets_mb="margin-sm-30b" mobile_mb="margin-xs-15b" css=".vc_custom_1523005213968{background-color: #fd8558 !important;}"][vc_column][pao_banner height="medium_banner" animation="yes" style_animation="style2" style="center_content" title="about us"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//	About Image Banner 2
    $data = array();
    $data['name'] = esc_html__( 'About Image Banner 2', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/banners/about-img-banner-2.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-110b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b"][vc_column][pao_banner height="medium_banner" style="center_content" overlay="yes" title="we are not your average brand agency" subtitle="we provide innovative solutions to expand business" image="2074"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    //Skills Category
//    Linear Skills
    $data = array();
    $data['name'] = esc_html__( 'Linear Skills', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/skills/linear-skills.jpg' );
    $data['sort_name'] = 'Skills';
    $data['custom_class'] = 'general skills';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1521550805378{background-color: #faf6f7 !important;}"][vc_column mobile_mt="margin-xs-40t" mobile_mb="margin-xs-50b" css=".vc_custom_1523950526950{padding-top: 0px !important;}"][pao_skills skills_style="linear" linear_skills="%5B%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2290%22%2C%22line_color%22%3A%22%23f54ea2%22%7D%2C%7B%22title%22%3A%22web%20design%22%2C%22number%22%3A%2280%22%2C%22line_color%22%3A%22%23ffdd65%22%7D%2C%7B%22title%22%3A%22develope%22%2C%22number%22%3A%2295%22%2C%22line_color%22%3A%22%2309d4de%22%7D%5D" title="make it stand out" subtitle="our skills" image_id="185"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

	//    Counter Skills
	$data = array();
	$data['name'] = esc_html__( 'Counter Skills', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/skills/counter-skills.jpg' );
	$data['sort_name'] = 'Skills';
	$data['custom_class'] = 'general skills';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518420486062{background-color: #fd8558 !important;}"][vc_column desctop_mt="margin-lg-60t" desctop_mb="margin-lg-95b" tablets_mt="margin-sm-10t" tablets_mb="margin-sm-55b" mobile_mt="margin-xs-10t" mobile_mb="margin-xs-45b"][pao_skills numerical_skills="%5B%7B%22number%22%3A%2299%22%2C%22symbol%22%3A%22%25%22%2C%22symbol_location%22%3A%22after%22%2C%22title%22%3A%22satisfied%22%7D%2C%7B%22number%22%3A%222034%22%2C%22symbol_location%22%3A%22before%22%2C%22title%22%3A%22unique%20designs%22%7D%2C%7B%22number%22%3A%22580%22%2C%22symbol%22%3A%22%2B%22%2C%22symbol_location%22%3A%22before%22%2C%22title%22%3A%22projects%22%7D%2C%7B%22number%22%3A%22789%22%2C%22symbol_location%22%3A%22before%22%2C%22title%22%3A%22coffee%20cups%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


//    Circle Skills
	$data = array();
	$data['name'] = esc_html__( 'Circle Skills', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/skills/skills_circle.jpg' );
	$data['sort_name'] = 'Skills';
	$data['custom_class'] = 'general skills';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-125t" desctop_mb="margin-lg-75b" desctop_md_mt="margin-md-100t" desctop_md_mb="margin-md-60b" tablets_mt="margin-sm-75t" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-60t" mobile_mb="margin-xs-30b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="amazing skills" title="for each project we establish relationships" title_color="#222222"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-50b" tablets_mb="margin-sm-20b" mobile_mb="margin-xs-25b"][vc_column css_animation="none"][pao_skills skills_style="circle" circle_skills="%5B%7B%22number%22%3A%2290%22%2C%22title%22%3A%22Interior%20Design%22%2C%22text%22%3A%22Suspendisse%20nisl%20purus%2C%20pharetra%20eget%20elit%20nec%2C%20facilisis%20fringi%5Cn%22%7D%2C%7B%22number%22%3A%2280%22%2C%22title%22%3A%22Visualization%22%2C%22text%22%3A%22Etiam%20vitae%20iaculis%20augue.%20Sed%20tristique%20neque%20id%20tempus%20et%20%22%7D%2C%7B%22number%22%3A%2295%22%2C%22title%22%3A%22Construction%22%2C%22text%22%3A%22Nullam%20ornare%20elit%20interdum%20posuere%20facilisis%20consequat%20%20%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	//    Linear Text Skills
	$data = array();
	$data['name'] = esc_html__( 'Linear Text Skills', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/skills/linear-text-skills.jpg' );
	$data['sort_name'] = 'Skills';
	$data['custom_class'] = 'general skills';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-130b" desctop_md_mb="margin-md-80b" mobile_mb="margin-xs-60b"][vc_column css=".vc_custom_1519400385703{padding-top: 0px !important;}"][pao_skills skills_style="linear_text" linear_skills="%5B%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2290%22%2C%22line_color%22%3A%22%23f54ea2%22%7D%2C%7B%22title%22%3A%22web%20design%22%2C%22number%22%3A%2280%22%2C%22line_color%22%3A%22%23ffdd65%22%7D%2C%7B%22title%22%3A%22develope%22%2C%22number%22%3A%2295%22%2C%22line_color%22%3A%22%2309d4de%22%7D%5D" title="modern digital creative agency." subtitle="our skills" text="Proin ultricies augue libero, quis faucibus elit elementum sed dolor felis, cursus non diam non, finibus feugiat dui a facilisis urna"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    //FAQ category
    $data = array();
    $data['name'] = esc_html__( 'FAQ', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/faq/faq.jpg' );
    $data['sort_name'] = 'FAQ';
    $data['custom_class'] = 'general faq';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-40b" mobile_mb="margin-xs-30b"][vc_column][pao_faq items="%5B%7B%22number%22%3A%2201.%22%2C%22title%22%3A%22branding%20is%20simply%20a%20more%20efficient%20way%20to%20sell%20things%3F%22%2C%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20amet%2Cconsectetur%20a%20elit.%20in%20ut%20ullamcorper%20leo%2C%20eget%20euismod%20orci.%20Cum%20socils%20natoque%20penatibus%20et%20magnis%20dis%20parturient%20montes%2C%20nascetur%20ridiculus%20musbulum%20ultrices%20aliquam%20convallis.%20Maecenas%20ut%20tellus%20mi.%20Proin%20tincidunt%2C%20lectus%20eu%20volutpat%20mattis%2C%20ante%20metus%20lacinia%20tellus%2C%20vitae%20condimentum%20nulla%20enim%20bibendum%20nibh.%20Praesent%20tupris%20risus%2C%20interdum%20nec%20venenatis%20id%2C%20pretium%20sit%20amet%20purus.%20Interdum%20et%20malesuada%22%7D%2C%7B%22number%22%3A%2202.%22%2C%22title%22%3A%22it's%20better%20to%20be%20first%20in%20the%20mind%20than%20to%20be%20first%20in%20the%20marketplace%3F%22%2C%22text%22%3A%22%20Praesent%20ullamcorper%20dapibus%20justo%2C%20in%20mattis%20justo%20bibendum%20id.%20Pellentesque%20dolor%20tortor%2C%20luctus%20eu%20dolor%20ut%2C%20aliquet%20varius%20tortor.%20Etiam%20id%20sem%20consequat%2C%20posuere%20augue%20ac%2C%20rutrum%20nibh.%20Cras%20efficitur%20ex%20vitae%20faucibus%20facilisis.%20Nullam%20venenatis%2C%20massa%20eget%20malesuada%20porta%2C%20ligula%20justo%20porta%20leo%2C%20a%20efficitur%20justo%20lectus%20sit%20amet%20erat.%20Vestibulum%20ante%20ipsum%20primis%20in%20faucibus%20orci%20luctus%20et%20ultrices%20posuere%20cubilia%20lacinia%20ipsum%20vel%20odio%20varius%22%7D%2C%7B%22number%22%3A%2203.%22%2C%22title%22%3A%22positioning%20is%20what%20you%20do%20the%20mind%20of%20the%20prospect%3F%22%2C%22text%22%3A%22Etiam%20vitae%20iaculis%20augue.%20Sed%20tristique%20sed%20neque%20id%20tempus.%20Suspendisse%20et%20laoreet%20purus.%20Etiam%20facilisis%20dapibus%20hendrerit.%20Nullam%20et%20fringilla%20odio.%20Praesent%20tempus%20non%20nulla%20eu%20rhoncus.%20Vestibulum%20a%20interdum%20enim%2C%20ac%20scelerisque%20neque.%20Mauris%20efficitur%20arcu%20vitae%20arcu%20lacinia%20suscipit.%20Mauris%20lacinia%20ipsum%20vel%20odio%20varius%20ullamcorper%20ac%20ac%20turpis.%20Integer%20a%20ex%20magna%20ex%20massa%2C%20vestibulum%20quis%20viverra%20at%20lacinia%20ipsum%20vel%20odio%20varius%20%5Cn%22%7D%2C%7B%22number%22%3A%2204.%22%2C%22title%22%3A%22branding%20is%20simply%20a%20more%20efficient%20way%20to%20sell%20things%3F%22%2C%22text%22%3A%22Aenean%20vehicula%20tempus%20orci%20non%20molestie.%20Sed%20egestas%20commodo%20porta.%20Praesent%20consectetur%20sollicitudin%20scelerisque.%20Nullam%20ornare%20elit%20interdum%20posuere%20facilisis.%20Donec%20consequat%20pretium%20pretium.%20Nullam%20imperdiet%20varius%20dignissim.%20Mauris%20at%20interdum%20turpis.%20Sed%20ex%20massa%2C%20vestibulum%20quis%20viverra%20at%2C%20dapibus%20facilisis%20risus.%20In%20ac%20volutpat%20justo%2C%20et%20pretium%20risus.%20Quisque%20semper%20sed%20orci%20vel%20porta%20quis%20lobortis%20justo%2C%20ut%20pharetra%20libero%20pulvinar%5Cn%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    //Maps Category
    //Classic Map
    $data = array();
    $data['name'] = esc_html__( 'Classic Map', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/maps/classic-map.jpg' );
    $data['sort_name'] = 'Maps';
    $data['custom_class'] = 'general map';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-60b"][vc_column][vc_ugm_map center_map="yes" zoom_map="12" map_type="ROADMAP" map_height="500" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][vc_ugm_map_marker address="New York" marker_icon="495"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    //Pricing Category
    // Pricing Table
    $data = array();
    $data['name'] = esc_html__( 'Pricing Table', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/pricing/pricing.jpg' );
    $data['sort_name'] = 'Pricing';
    $data['custom_class'] = 'general pricing';
    $data['content'] = <<<CONTENT
[vc_row equal_height="yes"][vc_column width="1/2" mobile_mb="margin-xs-25b" offset="vc_col-lg-4 vc_col-md-4 vc_col-xs-12"][vc_pricing title="basic package" price="$100" subtitle="Proin ultricies augue libero, quis faucibus elit elementu faucibus." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:purchase||"]

Lorem ipsum meconsect
Mauris euismod est at diam
Aenean vehicula tempus
Etiam quis lobortis justo utstosei
[/vc_pricing][/vc_column][vc_column width="1/2" tablets_mb="margin-sm-30b" mobile_mb="margin-xs-25b" offset="vc_col-lg-4 vc_col-md-4 vc_col-xs-12"][vc_pricing title="medium package" price="$200" subtitle="Nulla dolor felis, cursus non diam non, finibus adipiscin." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:purchase||"]

Etiam vitae facilisis sit
Mauris lacinia ipsum vel varius
Praesent tempus nulla
Etiam facilisis dapibus hendrer
[/vc_pricing][/vc_column][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-3 vc_col-xs-12"][vc_pricing title="premium package" price="$300" subtitle="Mauris lacinia ipsum vel odio varius ullamcorper facilise." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:purchase||"]

Aenean vehicula tempus
Sed egestas commodo porta temp
Donec consequat pretium
Nullam imperdiet varius dignisse
[/vc_pricing][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    //Services Category
    // Modern Services
    $data = array();
    $data['name'] = esc_html__( 'Modern Services', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/modern-services.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
    [vc_row desctop_mt="margin-lg-120t" desctop_mb="margin-lg-70b" desctop_md_mt="margin-md-80t" tablets_mt="margin-sm-80t" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-50t" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="our services" title="we love to find simple solutions to complex challenges."][/vc_column][/vc_row]
[vc_row][vc_column width="1/2" desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-layers-2" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="user experience" text="Vestibulum condimentum vehicula massa, ac convallis nullarell.
" icon_color="#fd8558"][/vc_column][vc_column width="1/2" desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-bookmark-3" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="interface design" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean." icon_color="#fd8558"][/vc_column][vc_column desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-smartphone" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="mobile apps" text="Maecenas iaculis metus libero, vitae faucibus orci lacinia eunde.
" icon_color="#fd8558"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-90b" desctop_md_mb="margin-md-50b" tablets_mb="margin-sm-50b"][vc_column width="1/2" desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-help-2" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="help when need" text="Quisque facilisis, sem in suscipit sagittis, nisl turpis ullamcorper enim." icon_color="#fd8558"][/vc_column][vc_column width="1/2" desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-planet" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="we can travel" text="Nullam tristique faucibus arcu, id varius ipsum ultrices id." icon_color="#fd8558"][/vc_column][vc_column desctop_mb="margin-lg-30b" mobile_mb="margin-xs-15b" offset="vc_col-lg-4 vc_col-xs-12"][pao_services icon="icon-cooking-timer-3" editor_type="" title_color="" desc_color="" icon_info="icon-arrow-1-circle-down" title="timely deliverables" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit et terre." icon_color="#fd8558"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Center Services
    $data = array();
    $data['name'] = esc_html__( 'Center Services', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/center-services.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-120t" desctop_mb="margin-lg-65b" desctop_md_mt="margin-md-95t" tablets_mt="margin-sm-75t" tablets_mb="margin-sm-45b" mobile_mt="margin-xs-50t" mobile_mb="margin-xs-15b"][vc_column css_animation="none"][pao_headings subtitle="about us" title="we're pao, a small design agency based in los angeles."][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-65b" mobile_mb="margin-xs-40b"][vc_column css_animation="none" width="1/3"][pao_services style="center" icon="icon-pencil1" title="digital solutions" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim eleifend accumsan morbi placerat justo at nullam
"][/vc_column][vc_column width="1/3"][pao_services style="center" icon="icon-color-palette" icon_color="#fd8558" title=" creative strategy" text="Pellentesque dapibus elementum mi nec sodales. Etiam ac aliquet nulla. Proin accumsan ullamcorper lacus at posuereleem.
"][/vc_column][vc_column css_animation="none" width="1/3"][pao_services style="center" icon="icon-pencil-ruler" icon_color="#fd8558" title="integrated marketing" text="Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos ad litora torquent per conubia taciti sociosqu ad litora.
"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Modern Services Slider
    $data = array();
    $data['name'] = esc_html__( 'Modern Services Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/modern-services-slider.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518422926664{background-color: #faf7f7 !important;}"][vc_column desctop_mt="margin-lg-110t" desctop_md_mt="margin-md-70t" tablets_mt="margin-sm-40t" mobile_mt="margin-xs-45t" mobile_mb="margin-xs-5b"][pao_headings style="style2" subtitle="works process" title="step by step make incridible"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" css=".vc_custom_1518533275953{background-color: #faf7f7 !important;}"][vc_column desctop_mb="margin-lg-70b" mobile_mb="margin-xs-50b"][pao_services style="slider" items="%5B%7B%22icon%22%3A%22icon-earth-globe%22%2C%22title%22%3A%22brainstorming%22%2C%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20amet%2C%20consecte%20tuer%20adipiscing%20elit%20enean.%22%7D%2C%7B%22icon%22%3A%22icon-letters%22%2C%22title%22%3A%22working%20process%22%2C%22text%22%3A%22Praesent%20tempor%20velit%20ex%2C%20eu%20gravida%20libero%20placerat%20utarenderk.%5Cn%22%7D%2C%7B%22icon%22%3A%22icon-smartphone-tablet-2%22%2C%22title%22%3A%22product%20testing%22%2C%22text%22%3A%22Nunc%20sem%20purus%2C%20pharetra%20sit%20amet%20quam%20vel%2C%20porta%20condimenti.%5Cn%22%7D%2C%7B%22icon%22%3A%22icon-pencil-1%22%2C%22title%22%3A%22perfect%20product%22%2C%22text%22%3A%22Nunc%20metus%20mi%2C%20fermentum%20non%20volutpat%20dignissim%2C%20iaculis%20ema.%5Cn%22%7D%5D" autoplay="5" loop="true"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Services List
    $data = array();
    $data['name'] = esc_html__( 'Services List', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/services-list.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-60b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="latest news & career" title="for each project we estabilish relationships with partners"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-140b" desctop_md_mb="margin-md-110b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_post_slider cats="branding,design,photo" autoplay="5000" speed="1500" count="5"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Classic Services Slider
    $data = array();
    $data['name'] = esc_html__( 'Classic Services Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/classic-services-slider.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-15t" desctop_md_mt="margin-md-50t" desctop_md_mb="margin-md-20b" mobile_mb="margin-xs-25b"][vc_column css_animation="none"][pao_headings bg_title="services" subtitle="our great service" title="work with you to understand your business"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-80b" mobile_mb="margin-xs-0b"][vc_column css=".vc_custom_1523952706422{margin-top: -65px !important;}"][pao_services style="classic_slider" items_classic="%5B%7B%22icon%22%3A%22icon-notebook%22%2C%22title%22%3A%22copywriting%20sourse%22%2C%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Etiam%20in%20gravida%20libero%2C%20at%20mollis%20velit.%20Morbi%20at%20sapien%20posuere%2C%20accumsan%20ex%20a%2C%20suscipit%20felis.%20%22%2C%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fpricing%252F%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon%22%3A%22icon-brush-pencil%22%2C%22title%22%3A%22wireframing%20platform%22%2C%22text%22%3A%22Vivamus%20in%20urna%20id%20elit%20convallis%20placerat%20at%20a%20nulla.%20Sed%20a%20lectus%20libero.%20Sed%20mattis%20velit%20ante%2C%20quis%20congue%20enim%20aliquet%20a.%20Nulla%20tincidunt%20ligula%20a%20lacus%22%2C%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fpricing%252F%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon%22%3A%22icon-school-bag%22%2C%22title%22%3A%22business%20solutions%22%2C%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Etiam%20in%20gravida%20libero%2C%20at%20mollis%20velit.%20Morbi%20at%20sapien%20posuere%2C%20accumsan%20ex%20a%2C%20suscipit%20felis.%20%22%2C%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fpricing%252F%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon%22%3A%22icon-color-palette%22%2C%22title%22%3A%22creative%20strategy%22%2C%22text%22%3A%22Pellentesque%20dapibus%20elementum%20mi%20nec%20sodales.%20Etiam%20ac%20aliquet%20nulla.%20Proin%20morbi%20placerat%20accumsan%20ullamcorper%20lacus%20at%20posuereleem.%22%2C%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fpricing%252F%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon%22%3A%22icon-pencil1%22%2C%22title%22%3A%22integrated%20marketing%22%2C%22text%22%3A%22Class%20aptent%20taciti%20sociosqu%20ad%20litora%20torquent%20per%20conubia%20nostra%2C%20per%20inceptos%20himenaeos%20ad%20litora%20torquent%20per%20conubia%20taciti%20sociosqu%20ad%20litora.%22%2C%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fpricing%252F%7Ctitle%3Aview%2520more%7C%7C%22%7D%5D" btn_style="a-btn-4" autoplay="5" speed="2000" loop="true" lg_count="3" md_count="2" sm_count="2" xs_count="1"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Accordion Services
    $data = array();
    $data['name'] = esc_html__( 'Accordion Services', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/accordion-services.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-70t" mobile_mt="margin-xs-20t"][vc_column css_animation="none"][pao_services style="accordion" items_accordion="%5B%7B%22number%22%3A%2201.%22%2C%22title%22%3A%22Story%20%26%20Concept%22%2C%22text%22%3A%22A%20wonderful%20serenity%20has%20taken%20possession%20of%20my%20entire%20soul%2C%20like%20these%20sweet%20mornings%20of%20spring%20which%20and%20feel%20the%20charm%22%7D%2C%7B%22number%22%3A%2202.%20%22%2C%22title%22%3A%22Design%20%26%20Development%22%2C%22text%22%3A%22Aenean%20elementum%20maximus%20erat%2C%20id%20tincidunt%20nibh%20faucibus%20vel.%20Suspendisse%20eu%20maximus%20quam.%20Aliquam%20pulvinar%20lacinia%20odio.%20%22%7D%2C%7B%22number%22%3A%2203.%20%22%2C%22title%22%3A%22Testing%20%26%20Support%22%2C%22text%22%3A%22Donec%20libero%20ex%2C%20tincidunt%20sed%20risus%20in%2C%20ornare%20consectetur%20turpis.%20Mauris%20magna%20tellus%2C%20auctor%20ut%20ligula%20vel%2C%20varius%20congue%20magna.%20%22%7D%5D" title="Our Process" image="1522"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Classic Services
    $data = array();
    $data['name'] = esc_html__( 'Classic Services', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/classic-services.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-140t" desctop_md_mt="margin-md-60t" tablets_mt="margin-sm-40t" mobile_mt="margin-xs-20t"][vc_column][pao_headings style="style2" subtitle="our services classic" subtitle_color="#fd8558" title="pixel perfect design and clear code delivered to your projects" title_color="#222222"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-35b" desctop_md_mb="margin-md-0b" tablets_mb="margin-sm-0b" mobile_mb="margin-xs-0b" desctop_lg_pt="padding-lg-90t" desctop_lg_pb="padding-lg-80b" desctop_pt="padding-md-60t" desctop_pb="padding-md-70b" tablets_pt="padding-sm-70t" tablets_pb="padding-sm-70b" mobile_pt="padding-xs-45t" mobile_pb="padding-xs-60b"][vc_column width="1/2" mobile_mb="margin-xs-50b" offset="vc_col-lg-4 vc_col-md-4 vc_col-xs-12"][pao_services style="classic" title="creativity" text="Praesent ullamcorper dapibus justo, in mattis justo bibendum id. Pellentesque dolor tortor, luctus eu dolor ut, aliquet varius
" image="366"][/vc_column][vc_column width="1/2" tablets_mb="margin-sm-50b" offset="vc_col-lg-4 vc_col-md-4 vc_col-xs-12"][pao_services style="classic" title="portfolios" image="187" text="Vestibulum ante ipsum primis faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus a leo ultrices, a efficitur nulla "][/vc_column][vc_column width="1/2" offset="vc_col-lg-4 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-3 vc_col-xs-12"][pao_services style="classic" title="industry" image="623" text="Etiam vitae iaculis augue tristique sed neque id tempus et laoreet purus. Etiam facilisis dapibus hendrerit simply odiocon"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

	// Simple Services
	$data = array();
	$data['name'] = esc_html__( 'Simple Services', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/simple-services.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general service';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-40t" desctop_mb="margin-lg-60b" mobile_mb="margin-xs-30b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="our services" title="we love to find simple solutions to complex challenges"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-125b" desctop_md_mb="margin-md-75b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-35b"][vc_column css_animation="none"][pao_services_list desc_column="4" tablet_column="6" btn_style="a-btn-4" btn_text="see more" count="6"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

    // Classic Services List
    $data = array();
    $data['name'] = esc_html__( 'Classic Services List', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/services/classic-services-list.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general service';
    $data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-100t" desctop_mb="margin-lg-70b" desctop_md_mt="margin-md-70t" desctop_md_mb="margin-md-60b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-20t" mobile_mb="margin-xs-30b"][vc_column][pao_headings style="style2" subtitle="our process" title="step by step make incridible" title_color="#222222"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-60b" tablets_mb="margin-sm-10b" mobile_mb="margin-xs-10b"][vc_column][pao_services_list style="classic" cats="services" desc_column="4" tablet_column="4" count="3"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    //Shop Category
    // Shop Slider
    $data = array();
    $data['name'] = esc_html__( 'Shop Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/shop/shop-slider.jpg' );
    $data['sort_name'] = 'Shop';
    $data['custom_class'] = 'general shop';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mt="margin-lg-160t" desctop_md_mt="margin-md-100t" tablets_mt="margin-sm-90t" mobile_mt="margin-xs-40t"][vc_column css_animation="none"][pao_products_slider style="tabs_sliders" cats_product="jeans,sport" lg_count="5" autoplay="5" speed="1500" loop="true" title="new arrivals"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Products List
    $data = array();
    $data['name'] = esc_html__( 'Products List', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/shop/product-list.jpg' );
    $data['new'] = true;
    $data['sort_name'] = 'Shop';
    $data['custom_class'] = 'general shop';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-30b" tablets_mb="margin-sm-20b" kswr_row_top_decor_enabled="false" kswr_row_bottom_decor_enabled="false"][vc_column css_animation="none"][products columns="4" orderby="" order="" ids="599, 597, 591, 611"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    //Team category
    // Inline Team
    $data = array();
    $data['name'] = esc_html__( 'Inline Team', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/team/inline-team.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-115b" desctop_md_mb="margin-md-85b" mobile_mb="margin-xs-55b"][vc_column css_animation="none"][pao_team team_members="%5B%7B%22image_id%22%3A%22108%22%2C%22name%22%3A%22Blanche%20Fields%22%2C%22position%22%3A%22Amazon%2C%20Web%20Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22109%22%2C%22name%22%3A%22Mike%20Farrell%22%2C%22position%22%3A%22Apple%2C%20CTO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22111%22%2C%22name%22%3A%22Jessy%20Rose%22%2C%22position%22%3A%22FeedEx%2C%20IT%20Director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22113%22%2C%22name%22%3A%22Camilla%20Shean%22%2C%22position%22%3A%22Google%2C%20CEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Slider Team
    $data = array();
    $data['name'] = esc_html__( 'Slider Team', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/team/slider-team.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518689466210{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/dots-1.jpg?id=132) !important;}"][vc_column desctop_mt="margin-lg-80t" desctop_mb="margin-lg-115b" desctop_md_mt="margin-md-50t" tablets_mt="margin-sm-40t" tablets_mb="margin-sm-85b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-80b"][pao_headings style="style2" subtitle="meet our team" title="may we present our team."][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-150b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-50b" mobile_mb="margin-xs-40b" css=".vc_custom_1521726689441{margin-top: -50px !important;}"][vc_column css=".vc_custom_1523950516223{padding-top: 0px !important;}"][pao_team team_style="slider" autoplay="5" loop="true" team_members="%5B%7B%22bg_color%22%3A%22%23fffcf0%22%2C%22image_id%22%3A%22173%22%2C%22name%22%3A%22Blanche%20Fields%22%2C%22position%22%3A%22Amazon%2C%20Web%20Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23fff8fc%22%2C%22image_id%22%3A%22174%22%2C%22name%22%3A%22Tandra%20Gold%22%2C%22position%22%3A%22Apple%2C%20CTO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f6ffff%22%2C%22image_id%22%3A%22175%22%2C%22name%22%3A%22Martin%20Ross%22%2C%22position%22%3A%22FeedEx%2C%20IT%20Director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23fffcf0%22%2C%22image_id%22%3A%22176%22%2C%22name%22%3A%22Frankie%20Kao%22%2C%22position%22%3A%22Google%2C%20CEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Inline Text Team
    $data = array();
    $data['name'] = esc_html__( 'Inline Text Team', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/team/inline-text-team.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1522238222288{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/03/bg_team.jpg?id=821) !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-120t" desctop_mb="margin-lg-80b" desctop_md_mt="margin-md-75t" desctop_md_mb="margin-md-40b" tablets_mt="margin-sm-55t" tablets_mb="margin-sm-40b" mobile_mt="margin-xs-55t" mobile_mb="margin-xs-10b" css=".vc_custom_1523952020820{padding-top: 0px !important;}"][pao_team team_style="inline_text" btn_style="a-btn-2" team_members="%5B%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22108%22%2C%22name%22%3A%22Blanche%20Fields%22%2C%22position%22%3A%22Amazon%2C%20Web%20Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22111%22%2C%22name%22%3A%22Jessy%20Rose%22%2C%22position%22%3A%22FeedEx%2C%20IT%20Director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22109%22%2C%22name%22%3A%22Mike%20Farrell%22%2C%22position%22%3A%22Apple%2C%20CTO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22113%22%2C%22name%22%3A%22Camilia%20Shean%22%2C%22position%22%3A%22Google%2C%20CTO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22110%22%2C%22name%22%3A%22Odri%20Turner%22%2C%22position%22%3A%22FeedEx%2C%20SEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22bg_color%22%3A%22%23f7f7f7%22%2C%22image_id%22%3A%22112%22%2C%22name%22%3A%22John%20Smith%22%2C%22position%22%3A%22Apple%2C%20Web%20Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%5D" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fabout-us%2F|title:view%20all%20members||" title="our fantastic team"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Slider Modern Team
    $data = array();
    $data['name'] = esc_html__( 'Slider Modern Team', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/team/slider-modern-team.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row][vc_column css_animation="none"][pao_headings style="style2" subtitle="our fantastic team" title="for projects we establish relationships with partners "][/vc_column][/vc_row][vc_row desctop_mt="margin-lg-65t" desctop_mb="margin-lg-90b" desctop_md_mt="margin-md-50t" desctop_md_mb="margin-md-70b" tablets_mt="margin-sm-45t" tablets_mb="margin-sm-60b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-35b"][vc_column css_animation="none"][pao_team team_style="slider_modern" autoplay="5000" loop="true" team_members="%5B%7B%22image_id%22%3A%22108%22%2C%22name%22%3A%22Blanche%20Fields%22%2C%22position%22%3A%22Google%2C%20SEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22111%22%2C%22name%22%3A%22Odri%20Turner%22%2C%22position%22%3A%22Google%2C%20designer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22109%22%2C%22name%22%3A%22Ken%20Torrin%22%2C%22position%22%3A%22Google%2C%20developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22113%22%2C%22name%22%3A%22Selena%20Forke%22%2C%22position%22%3A%22Google%2C%20IT%20Director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    //Testimonials Category
    // Left Align Testimonials
    $data = array();
    $data['name'] = esc_html__( 'Left Align Testimonials', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/testimonials/left-testimonials.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonial';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mt="margin-lg-125t" desctop_mb="margin-lg-100b" desctop_md_mt="margin-md-90t" desctop_md_mb="margin-md-70b" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-40t" mobile_mb="margin-xs-20b" css=".vc_custom_1522933896278{background: #fd8558 url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/03/background1.jpg?id=768) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-100t" desctop_mb="margin-lg-100b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-70b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-60b"][pao_testimonial type_slider="left_align" autoplay="5000" speed="1500" loop="true" css=".vc_custom_1520005910498{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" color1="#ffffff" color2="#ffffff" color3="#cccccc" color4="#ffffff"][pao_testimonial_items author="Blanche Fields" position="Google, CEO" logo_image="109"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour “[/pao_testimonial_items][pao_testimonial_items author="Robert Hawk" position="Intel, Security Specialist" logo_image="112"]"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 y.o."[/pao_testimonial_items][pao_testimonial_items author="Jessy Rose" position="FeedEx, IT Director" logo_image="111"]“It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.”[/pao_testimonial_items][pao_testimonial_items author="Julia Korn" position="Microsoft, IT Analyst" logo_image="110"]“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget ipsum sed elit sagittis condimentum id at lacus. Donec ultricies.“[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Classic Testimonials
    $data = array();
    $data['name'] = esc_html__( 'Classic Testimonials', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/testimonials/classic-testimonials.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonial';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1518194270764{background-color: #faf7f7 !important;}"][vc_column desctop_mt="margin-lg-85t" desctop_mb="margin-lg-25b" desctop_md_mt="margin-md-50t" desctop_md_mb="margin-md-0b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-0b" mobile_mt="margin-xs-15t"][pao_headings style="style2" subtitle="testimonials" title="meet happy clients."][/vc_column][/vc_row][vc_row full_width="stretch_row_content" css=".vc_custom_1520945621862{background-color: #faf7f7 !important;}"][vc_column desctop_mb="margin-lg-115b" desctop_md_mt="margin-md-25t" desctop_md_mb="margin-md-75b" tablets_mt="margin-sm-25t" tablets_mb="margin-sm-75b" mobile_mt="margin-xs-0t" mobile_mb="margin-xs-55b"][pao_testimonial type_slider="classic_sl" autoplay="5000" speed="1500" loop="true" lg_count="4" md_count="3" sm_count="2" xs_count="1"][pao_testimonial_items stars="five" author="Camilla Shean" position="Google, CEO" logo_image="113"]"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim eleifend accumsan. Morbi placerat justo at nulla posuere."[/pao_testimonial_items][pao_testimonial_items stars="five" author="Mike Farrell" position="Apple, CTO" logo_image="109"]“Pellentesque dapibus elementum mi nec sodales. Etiam ac aliquet nulla. Proin accumsan ullap.”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Blanche Fields" position="Amazon, Web Developer" logo_image="108"]“Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel arcu vitae ex tincidunt  blandit a id lorem.”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jessy Rose" position="FeedEx, IT Director" logo_image="111"]“Aliquam interdum est eget magna ultricies porta. Integer eget feugiat justo, vitae blandit oren ite.”[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Simple Testimonials
    $data = array();
    $data['name'] = esc_html__( 'Simple Testimonials', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/testimonials/simple-testimonials.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonial';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518699312753{background: #fd8558 url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/image.jpg?id=224) !important;}"][vc_column desctop_mt="margin-lg-85t" desctop_mb="margin-lg-105b" desctop_md_mt="margin-md-50t" desctop_md_mb="margin-md-85b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-55b"][pao_headings style="style2" subtitle="testimonials" subtitle_color="#ffffff" title="meet happy clients." title_color="#ffffff"][vc_row_inner][vc_column_inner css=".vc_custom_1518785481508{margin-top: 50px !important;padding-top: 0px !important;}"][pao_testimonial type_slider="simple_sl" autoplay="5" speed="1500" lg_count="3" md_count="2" sm_count="2" xs_count="1"][pao_testimonial_items stars="five" author="Camilla Shean" position="Google, CEO" logo_image="113"]"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim eleifend accumsan. Morbi placerat justo at nulla posuere."[/pao_testimonial_items][pao_testimonial_items stars="five" author="Mike Farrell" position="Apple, CTO" logo_image="109"]“Pellentesque dapibus elementum mi nec sodales. Etiam ac aliquet nulla. Proin accumsan ullapon.”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Blanche Fields" position="Amazon, Web Developer" logo_image="108"]“Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel arcu vitae ex tincidunt  blandit a id lorem.”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jessy Rose" position="FeedEx, IT Director" logo_image="111"]“Aliquam interdum est eget magna ultricies porta. Integer eget feugiat justo, vitae blandit oren ite.”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Robert Hawk" position="Intel, Security Specialist" logo_image="112"]"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim eleifend accumsan. Morbi placerat justo at nulla posuere."[/pao_testimonial_items][pao_testimonial_items stars="five" author="Josset Anemy" position="Nvidia, IT Analyst" logo_image="110"]“Pellentesque dapibus elementum mi nec sodales. Etiam ac aliquet nulla. Proin accumsan ullapon.”[/pao_testimonial_items][/pao_testimonial][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    // Modern Testimonials
    $data = array();
    $data['name'] = esc_html__( 'Modern Testimonials', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/testimonials/modern-testimonials.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonial';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" desctop_mt="margin-lg-105t" desctop_mb="margin-lg-100b" desctop_md_mt="margin-md-45t" desctop_md_mb="margin-md-50b" tablets_mt="margin-sm-45t" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-35t" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_testimonial bg_text="testimonials" speed="1500" loop="true"][pao_testimonial_items stars="five" author="Camilla Shean" position="Google, CEO" logo_image="113"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly ”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Robert Hawk" position="Intel, Security Specialist" logo_image="112"]"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin"[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jessy Rose" position="FeedEx, IT Director" logo_image="111"]“It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution ”[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

//    Category Info Block
// Info Block 1
	$data = array();
	$data['name'] = esc_html__( 'Info Block 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/info-block/info-block-1.jpg' );
	$data['sort_name'] = 'Info Block';
	$data['custom_class'] = 'general info-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-95b" desctop_md_mb="margin-md-50b" tablets_mb="margin-sm-50b" mobile_mb="margin-xs-35b" css=".vc_custom_1522139017230{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/dots-1.jpg?id=132) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column desctop_mt="margin-lg-85t" tablets_mt="margin-sm-35t" mobile_mt="margin-xs-15t"][pao_info_block button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:contact%20us|target:%20_blank|" image_id="140"]

create the lifestyle you really desire.
Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.

beautiful and easy to professional animations
theme advantages are pixel perfect design
find more creative ideas for your projects
[/pao_info_block][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	// Info Block 2
	$data = array();
	$data['name'] = esc_html__( 'Info Block 2', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/info-block/info-block-2.jpg' );
	$data['sort_name'] = 'Info Block';
	$data['custom_class'] = 'general info-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-135b" desctop_md_mb="margin-md-95b" mobile_mb="margin-xs-55b"][vc_column css_animation="none"][pao_info_block info_block_style="style-2" subtitle="our services" items_accordion="%5B%7B%22title%22%3A%22user%20experience%22%2C%22text%22%3A%22Typography%20is%20the%20origin%20of%20language%20and%20of%20human%20communication.%20Moreover%20typography%20is%20the%20fundament%20of%20our%20culture%2C%20of%20ourselves.%22%7D%2C%7B%22title%22%3A%22interface%20design%22%2C%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Aliquam%20sed%20felis%20est.%20Nam%20pretium%20turpis%20a%20leo%20pellentesque%20rutrum.%20Curabitur%20aliquam%20libero.%20%22%7D%2C%7B%22title%22%3A%22mobile%20apps%22%2C%22text%22%3A%22Maecenas%20vel%20leo%20suscipit%20eros%20viverra%20ultrices%20non%20vel%20mauris.%20Aenean%20efficitur%20arcu%20id%20bibendum%20euismod.%20Nulla%20facilisis%20orci%20vel%20venenatis%20lacinia.%20%22%7D%2C%7B%22title%22%3A%22help%20when%20need%22%2C%22text%22%3A%22Integer%20feugiat%20enim%20a%20lectus%20viverra%20efficitur.%20Cras%20egestas%20bibendum%20sagittis.%20Maecenas%20gravida%20viverra%20justo%2C%20ut%20blandit%20lorem%20tincidunt%20sed.%20%22%7D%2C%7B%22title%22%3A%22we%20can%20travel%22%2C%22text%22%3A%22Suspendisse%20molestie%2C%20ex%20eget%20pellentesque%20luctus%2C%20libero%20massa%20commodo%20leo%2C%20sed%20fringilla%20ex%20lectus%20sed%20odio.%20Vestibulum%20nibh%20leo.%22%7D%5D" image_id="187"]Typography is the origin of language and of human communication. Moreover typography is the fundament of our culture, of ourselves.

interface design
mobile apps
help when need
we can travel
[/pao_info_block][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	// Info Block 3
	$data = array();
	$data['name'] = esc_html__( 'Info Block 3', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/info-block/info-block-3.jpg' );
	$data['sort_name'] = 'Info Block';
	$data['custom_class'] = 'general info-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-50b"][vc_column css_animation="none"][pao_info_block info_block_style="style-3" number="10" title="Years Experience" bg_text="about" add_video="yes" video_link="https://www.youtube.com/watch?time_continue=2&v=YMurlapfouo" image_bg="363" images="1546,1547,1548,1544,1545"]Our team takes over everything, from an idea and concept development to realization.

All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project. Our main goal is to illustrate his/hers values and individuality through design. Our team takes over everything,[/pao_info_block][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	// Info Block 4
	$data = array();
	$data['name'] = esc_html__( 'Info Block 4', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/info-block/info-block-4.jpg' );
	$data['sort_name'] = 'Info Block';
	$data['custom_class'] = 'general info-block';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-90b" tablets_mb="margin-sm-70b" mobile_mb="margin-xs-50b"][vc_column css_animation="none"][pao_info_block info_block_style="style-4" number="10" title="Years Experience" add_video="yes" video_link="https://www.youtube.com/watch?time_continue=2&v=YMurlapfouo" image_bg="332"]Our team takes over everything, from an idea and concept development to realization.

All our projects incorporate a unique artistic image and functional solutions. Client is the soul of the project. Our main goal is to illustrate his/hers values and individuality through design. [/pao_info_block][/vc_column][/vc_row][vc_row equal_height="yes"][vc_column css_animation="none" width="1/2" desctop_mb="margin-lg-0b" css=".vc_custom_1523969315372{margin-bottom: 0px !important;}"][vc_single_image image="977" img_size="full" css=".vc_custom_1523006666196{margin-bottom: 0px !important;}"][/vc_column][vc_column css_animation="none" width="1/2" css=".vc_custom_1523969324531{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/03.jpg?id=338) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_hidden-xs"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

//Category About
	// About Modern
	$data = array();
	$data['name'] = esc_html__( 'About Modern', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/about/about-modern.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'general about';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" desctop_mb="margin-lg-105b" desctop_md_mb="margin-md-65b" tablets_mb="margin-sm-65b" mobile_mt="margin-xs-30t" mobile_mb="margin-xs-55b"][vc_column css_animation="none"][pao_about bgtitle="about" image="45" subtitle="about us" title="we're pao, a small design agency based in los angeles." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fabout-us%2F|title:view%20more|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'About Simple', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/about/about-simple.jpg' );
	$data['sort_name'] = 'About';
	$data['custom_class'] = 'general about';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-50b" tablets_mb="margin-sm-30b" mobile_mb="margin-xs-40b"][vc_column css_animation="none" width="1/2" offset="vc_hidden-sm vc_hidden-xs"][vc_single_image image="951" img_size="full"][/vc_column][vc_column css_animation="none" offset="vc_col-md-6 vc_col-xs-12"][pao_about style="simple" btn_style="a-btn-3" bgtitle="about" subtitle="european minnow priapumfish mosshead warbonnet shrimpfish bigscale cutlassfish porbeagle shark ricefish walking catfish glassfish. always remember in the jungle there's a lot of they in there dark, sweet…" title="amazing store" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fabout-us%2F|title:view%20more||"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	//Category Call to action
	// Call to action classic
	$data = array();
	$data['name'] = esc_html__( 'Call to action Classic', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/call-to-action/classic-call.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_call_to_action style="classic" btn_style="a-btn-3" overlay="yes" title="It’s proudly for us to build stylish." color_title="#ffffff" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:Contact%20us||" image="963"][/pao_call_to_action][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Call to action classic background
	$data = array();
	$data['name'] = esc_html__( 'Call to action Classic Background', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/call-to-action/classic-bg-call.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_call_to_action style="classic_bg" btn_style_2="btn-style-3" title="Get 20% Off Coupon" subtitle="subscribe our newsletter and get discount 20% off" image="948" form="549"][/pao_call_to_action][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Call to action center
	$data = array();
	$data['name'] = esc_html__( 'Call to action Center', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/call-to-action/center-call.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mt="margin-lg-130t" tablets_mt="margin-sm-90t" mobile_mt="margin-xs-50t" css=".vc_custom_1523017938089{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/bg1-1.jpg?id=558) !important;}"][vc_column desctop_mt="margin-lg-75t" desctop_mb="margin-lg-145b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-100b" mobile_mt="margin-xs-20t" mobile_mb="margin-xs-80b"][pao_call_to_action style="center" btn_style_2="btn-style-3" title="if you need to subscribe for our newsletter, please fill out the form below" form="549"][/pao_call_to_action][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Call to action modern
	$data = array();
	$data['name'] = esc_html__( 'Call to action Modern', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/call-to-action/modern-call.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_call_to_action title="we believe in creativity" bg_color="#fd8558" text="start project
with pao?" subtitle="Suspendisse nisl purus, pharetra eget elit nec, facilisis fringilla elit ullamcorper dapibus justo, in mattis justo bibendum id dolor tortor eu pharetra eget elit nec." image="368" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:contact%20us||"][/pao_call_to_action][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Call to action simple
	$data = array();
	$data['name'] = esc_html__( 'Call to action Simple', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/call-to-action/simple-call.jpg' );
	$data['sort_name'] = 'Call to action';
	$data['custom_class'] = 'general call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-110t" desctop_mb="margin-lg-140b" desctop_md_mt="margin-md-80t" desctop_md_mb="margin-md-80b" tablets_mt="margin-sm-60t" tablets_mb="margin-sm-60b" mobile_mt="margin-xs-40t" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_call_to_action style="simple" btn_style="a-btn-4" subtitle="#paostorediscount" image="953" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fhome-shop%2F|title:Shop%20Now||"]

Up To 40% Off Final Sale Items
[/pao_call_to_action][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Video
	$data = array();
	$data['name'] = esc_html__( 'Video Button', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/video/video-btn.jpg' );
	$data['sort_name'] = 'Video';
	$data['custom_class'] = 'general video';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-90b" desctop_md_mb="margin-md-70b" mobile_mb="margin-xs-20b"][vc_column css_animation="none"][video_button_shortcode video_link="https://www.youtube.com/watch?time_continue=2&v=YMurlapfouo"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	// Coming Soon
	$data = array();
	$data['name'] = esc_html__( 'Coming Soon', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/coming-soon/coming-soon.jpg' );
	$data['sort_name'] = 'Coming Soon';
	$data['custom_class'] = 'general coming-soon';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" full_height="yes" content_placement="middle" css=".vc_custom_1519636019917{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/02/bg1-1.jpg?id=558) !important;}"][vc_column css_animation="none"][pao_coming_soon title="something awesome in the works." subtitle="you can subscribe us to get when our website is ready." date="2018/06/30 09:10" btn_style="btn-style-3" days="Days" hours="Hours" minutes="Minutes" seconds="Seconds" days_mobile="D" hours_mobile="H" minutes_mobile="Min" seconds_mobile="Sec" form="549"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Instagram
	$data = array();
	$data['name'] = esc_html__( 'Instagram', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/instagram/instagram.jpg' );
	$data['sort_name'] = 'Instagram';
	$data['custom_class'] = 'general instagram';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-65b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="instagram photos" title="my greatest ambition is to create powerful images"][/vc_column][/vc_row][vc_row][vc_column css_animation="none"][pao_instagram style="style2" username="paostud.io" count="12"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Headings text center align
	$data = array();
	$data['name'] = esc_html__( 'Headings Center Align', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/headings/headings-text-center-align.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-60b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="latest news &amp; career" title="for each project we estabilish relationships with partners"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Headings typed
	$data = array();
	$data['name'] = esc_html__( 'Headings Typed', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/headings/headings-typed.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-150t" desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mt="margin-sm-50t" tablets_mb="margin-sm-100b" mobile_mb="margin-xs-30b"][vc_column css_animation="none"][pao_headings style="style5" title="hello! every day we create projects, they are" title_color="#222222" animation_text="modern,flexible,compatible"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	// Headings animated
	$data = array();
	$data['name'] = esc_html__( 'Headings Animation', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/headings/headings-anim.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_headings style="style6" title="I’m very proud to present some of my latest work" title_color="#ffffff"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Headings breadcrumbs
	$data = array();
	$data['name'] = esc_html__( 'Headings Breadcrumbs', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/headings/headings-breadcrumbs.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-10b" css=".vc_custom_1521454672883{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css_animation="none" css=".vc_custom_1523976721776{padding-top: 0px !important;}"][pao_headings style="style3" title="portfolio grid transform" links="%5B%7B%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252F%7Ctitle%3Ahome%7C%7C%22%7D%2C%7B%22link%22%3A%22url%3A%2523%7Ctitle%3Aportfolio%7C%7C%22%7D%2C%7B%22link%22%3A%22url%3Ahttp%253A%252F%252Fdev.viewdemo.co%252Fwp%252Fpao%252Fgrid-transform%252F%7Ctitle%3Agrid%2520transform%7C%7C%22%7D%5D" animation="true"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	// Headings left
	$data = array();
	$data['name'] = esc_html__( 'Headings Left Align', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/headings/headings-left.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" desctop_mb="margin-lg-125b" desctop_md_mb="margin-md-75b" mobile_mb="margin-xs-35b" css=".vc_custom_1522917959802{background-color: #fd8558 !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-25t" desctop_mb="margin-lg-50b"][pao_headings title="start a new project with pao ?" title_color="#ffffff" btn_style="a-btn-2" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:contact%20us|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Line of images 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/line-of-images/images-1.jpg' );
	$data['sort_name'] = 'Line of images';
	$data['custom_class'] = 'general line-of-images';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518792913063{background-color: #faf7f7 !important;}"][vc_column css_animation="none" css=".vc_custom_1523976596766{padding-top: 0px !important;}"][pao_line_of_images logos="%5B%7B%22image%22%3A%22269%22%2C%22url%22%3A%22%E2%84%96%22%7D%2C%7B%22image%22%3A%22268%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%22267%22%7D%2C%7B%22image%22%3A%22266%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%22265%22%2C%22url%22%3A%22%23%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Line of images 2', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/line-of-images/images-2.jpg' );
	$data['sort_name'] = 'Line of images';
	$data['custom_class'] = 'general line-of-images';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1519393530627{background-color: #00113c !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-35t" desctop_mb="margin-lg-155b" desctop_md_mb="margin-md-95b" tablets_mt="margin-sm-0t" tablets_mb="margin-sm-35b"][pao_line_of_images style="logos2" logos="%5B%7B%22image%22%3A%221005%22%2C%22url%22%3A%22%E2%84%96%22%7D%2C%7B%22image%22%3A%221007%22%2C%22url%22%3A%22%E2%84%96%22%7D%2C%7B%22image%22%3A%221008%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221009%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221011%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221012%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221013%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221014%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221016%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221017%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221018%22%2C%22url%22%3A%22%23%22%7D%2C%7B%22image%22%3A%221019%22%2C%22url%22%3A%22%23%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


//	Category Contacts
	$data = array();
	$data['name'] = esc_html__( 'Contacts 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-1.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_contacts style="style3" title="contact me" image="1712" bottom_text="" text="Are you interested in working together?" form="124"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis elementum laoreet. Vivamus vestibulum facilisis tortor non pellentesque. Etiam porttitor augue a iaculis bibendum. Nulla vitae metus non orci porta auctor nec eu ipsum.

In vitae feugiat mauris. Cras placerat dolor sed leo dictum, id sodales felis vestibulum. Ut imperdiet pharetra neque vitae sodales. Curabitur at magna pulvinar, porta odio in.[/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Contacts 2', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-2.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1518195238813{background-color: #faf7f7 !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-110t" desctop_mb="margin-lg-130b" desctop_md_mt="margin-md-60t" desctop_md_mb="margin-md-60b" tablets_mt="margin-sm-60t" tablets_mb="margin-sm-60b" mobile_mt="margin-xs-10t" mobile_mb="margin-xs-30b"][pao_contacts style="style2" address_info="%5B%7B%22address%22%3A%2214%20tottenham%20road%2C%20%3Cbr%2F%3E%5Cnlondon%2C%20england%22%7D%5D" form="124"]info@yourdomain.com

(+68) 12004509[/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Contacts 3', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-3.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row equal_height="yes" content_placement="middle" desctop_mt="margin-lg-80t" desctop_mb="margin-lg-100b" desctop_md_mt="margin-md-50t" desctop_md_mb="margin-md-60b" mobile_mt="margin-xs-20t"][vc_column css_animation="none" width="1/2" el_class="circle" offset="vc_hidden-sm vc_hidden-xs"][vc_ugm_map center_map="yes" zoom_map="12" map_type="ROADMAP" language="en_GB" is_reload_on_resize="true" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJhZG1pbmlzdHJhdGl2ZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuZmlsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyMzQ0NDQ0NCUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJhbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMnBvaSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMnJvYWQlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzYXR1cmF0aW9uJTIyJTNBJTIwLTEwMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDQ1JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmFsbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ2aXNpYmlsaXR5JTIyJTNBJTIwJTIyc2ltcGxpZmllZCUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyYWxsJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJmZWF0dXJlVHlwZSUyMiUzQSUyMCUyMndhdGVyJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJhbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjM0NmJjZWMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJ2aXNpYmlsaXR5JTIyJTNBJTIwJTIyb24lMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMEElNUQ=" map_height="600px"][vc_ugm_map_marker address="New York" marker_icon="495"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][vc_column css_animation="none" offset="vc_col-md-6"][pao_contacts style="style3" title="contact us" text="keep in touch." form="124"][/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Contacts 4', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-4.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_contacts style="style4" address_info="%5B%7B%22address%22%3A%22Via%20Cesare%20Rosaroll%20%5Cnst.%20118%2C%2080139%20Sofia%22%7D%5D" email_info="%5B%7B%22email%22%3A%22pao%40info.com%22%7D%5D" phone_info="%5B%7B%22phone%22%3A%22%2B759%20933%2043%2045%22%7D%5D"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis elementum laoreet. Vivamus vestibulum facilisis tortor non pellentesque. Etiam porttitor augue a iaculis bibendum. Nulla vitae metus non orci porta auctor nec eu ipsum.

In vitae feugiat mauris. Cras placerat dolor sed leo dictum, id sodales felis vestibulum. Ut imperdiet pharetra neque vitae sodales. Curabitur at magna pulvinar, porta odio in.[/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Contacts 5', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-5.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-60b" desctop_md_mb="margin-md-60b" tablets_mb="margin-sm-50b" mobile_mb="margin-xs-30b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="contact us" subtitle_color="#fd8558" title="enjoy coffee with us" title_color="#222222"][/vc_column][/vc_row][vc_row][vc_column css_animation="none"][vc_ugm_map center_map="yes" zoom_map="12" map_type="ROADMAP" map_height="400" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][vc_ugm_map_marker address="New York" marker_icon="495"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-30b" desctop_md_mb="margin-md-60b" tablets_mb="margin-sm-50b" mobile_mt="margin-xs-10t" mobile_mb="margin-xs-25b"][vc_column css_animation="none"][pao_contacts style="style5" items="%5B%7B%22icon%22%3A%22icon-email%22%2C%22icon_color%22%3A%22%23f54ea2%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522main%2520office%2522%252C%2522email%2522%253A%2522hello%2540pao.studio%2522%257D%252C%257B%2522title%2522%253A%2522support%2522%252C%2522email%2522%253A%2522hello%2540pao.architecture%2522%257D%255D%22%7D%2C%7B%22icon%22%3A%22icon-telephone-1%22%2C%22icon_color%22%3A%22%23f54ea2%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522our%2520phone%2522%252C%2522phone%2522%253A%2522(043)%2520568%2520456%2520902%2522%257D%252C%257B%2522title%2522%253A%2522our%2520fax%2522%252C%2522phone%2522%253A%2522(043)%2520568%2520456%2520902%2522%257D%255D%22%7D%2C%7B%22icon%22%3A%22icon-map-location-1%22%2C%22icon_color%22%3A%22%23f54ea2%22%2C%22items_child%22%3A%22%255B%257B%2522title%2522%253A%2522new%2520york%252C%2520usa%2522%252C%2522text%2522%253A%25222005%2520stokes%2520isle%2520apt.%2520896%252C%2520venaville%252C%2520new%2520york%252010010%2522%257D%255D%22%7D%5D"][/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Contacts 7', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/contacts/contacts-7.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1522165577594{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/03/2ac10933547009.56af76ff9a289.jpg?id=1366) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-115t" desctop_mb="margin-lg-75b" desctop_md_mt="margin-md-75t"][pao_contacts style="style7" title="keep in touch" form="809" text="for each project we establish relationships with partners."][/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



	// Category Portfolio
	$data = array();
	$data['name'] = esc_html__( 'Portfolio 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-1.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" mobile_mb="margin-xs-30b"][vc_column css_animation="none"][pao_headings bg_title="works" subtitle="lastest works" title="take a look around
our portfolio." button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact%2F|title:more%20works|target:%20_blank|"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][the_grid name="Pao Portfolio 1"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio List', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-list.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-50b" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="the daily planet" title="our interactive news."][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-105b" desctop_md_mb="margin-md-80b" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][the_grid name="Pao Post List 1"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio 2', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-2.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" mobile_mb="margin-xs-85b" css=".vc_custom_1521728631797{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css_animation="none"][pao_headings style="style2" subtitle="lastest works" title="take a look around our portfolio" animation="true"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-110b" desctop_md_mb="margin-md-80b" mobile_mb="margin-xs-45b" css=".vc_custom_1521728992681{margin-top: -215px !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-30t" offset="vc_col-lg-12 vc_col-md-12 vc_col-xs-12"][the_grid name="Pao Portfolio 2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio 3', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-3.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1519392751030{background-color: #00113c !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-115t" desctop_md_mt="margin-md-75t" tablets_mt="margin-sm-75t" mobile_mt="margin-xs-15t"][pao_headings style="style2" subtitle="about us" subtitle_color="#fd8558" title="we’re Pao, a small design agency based in Los Angeles" title_color="#ffffff"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1521126300540{background-color: #00113c !important;}"][vc_column css_animation="none"][the_grid name="Pao Portfolio 3"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Slider with Filters', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-slider-filter.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_portfolio_sliders style="filter_slider" cats="music,photography,webdesign" title="Our Feature Works"][/vc_column]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Urban', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-urban.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-100t" desctop_mb="margin-lg-65b" desctop_md_mt="margin-md-80t" desctop_md_mb="margin-md-55b" mobile_mt="margin-xs-50t" mobile_mb="margin-xs-40b"][vc_column css_animation="none"][pao_headings style="style2" subtitle="best ideas" title="our future works"][/vc_column][/vc_row][vc_row][vc_column css_animation="none"][the_grid name="Pao Portfolio Urban"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Pao', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-pao.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css_animation="none" css=".vc_custom_1521824087119{background-color: #00113c !important;}"][vc_column css_animation="none" desctop_mt="margin-lg-115t" desctop_mb="margin-lg-50b" tablets_mt="margin-sm-55t" tablets_mb="margin-sm-20b" mobile_mt="margin-xs-35t" mobile_mb="margin-xs-5b"][pao_headings subtitle="our works" subtitle_color="#fd8558" title="take a look around our portfolio" title_color="#ffffff"][/vc_column][/vc_row][vc_row full_width="stretch_row" css_animation="none" css=".vc_custom_1521824127713{background-color: #00113c !important;}"][vc_column css_animation="none"][the_grid name="Pao Portfolio 2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Animation', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-animation.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_album_animation cats="branding" btn_style="a-btn-4" colormain="#3b2182" color1="#fedd64" color2="#ff7563" color3="#f54da2" color4="#d2f2a9" color5="#fedd64" color6="#f54da2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Little Fragments', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/little-fragments.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column css_animation="none"][pao_portfolio_list btn_style="a-btn-4" fragments="8" btn_text="see more"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio Info with Filters', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-info-filter.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column css_animation="none"][the_grid name="Pao Portfolio Info"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Glitch', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-glitch.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pt="padding-lg-80t" css=".vc_custom_1522422638515{background-color: #8ad7d3 !important;}"][vc_column css_animation="none"][pao_portfolio_list style="glitch" cats="pao,minimal"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio Split', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-split.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_portfolio_sliders style="landing_split" cats="elegant,minimal" orderby="title" order="ASC" btn_style="a-btn-2" additional_btn_style="a-btn-3" additional_button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fcontact-us%2F|title:contact%20us||"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Split Slider', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/split-slider.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_portfolio_sliders style="split_slider" cats="elegant,minimal" order="ASC" color1="#d7eaff" color2="#ffcbba" color3="#fbe9f2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Portfolio Showcase', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-showcase.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-15b"][vc_column css_animation="none"][pao_portfolio_sliders style="showcase_slider" cats="pao,branding,building,identity,life,music,photography,webdesign" count="6"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Tile Masonry', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/tile-masonry.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-40b"][vc_column css_animation="none"][the_grid name="Pao Portfolio Tile Masonry"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Masonry Modern', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/masonry-modern.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mt="margin-lg-15t" desctop_mb="margin-lg-30b" tablets_mt="margin-sm-5t"][vc_column css_animation="none"][the_grid name="Pao Portfolio Modern"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Parallax Showcase', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/parallax-showcase.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css_animation="none"][pao_portfolio_list style="parallax_showcase" cats="bright,music" orderby="date" order="ASC" btn_style="a-btn-3" count="4"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Fullscreen Masonry 4 col', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/fullscreen-masonry-4.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-75t" tablets_mt="margin-sm-10t"][vc_column css_animation="none"][the_grid name="Pao Portfolio Fullscreen"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Fullscreen Masonry 3 col', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/fullscreen-masonry-3.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-75t" tablets_mt="margin-sm-10t"][vc_column css_animation="none"][the_grid name="Pao Portfolio Fullscreen 2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio Pinterest', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-pinterest.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-80t" desctop_mb="margin-lg-60b" mobile_mt="margin-xs-40t"][vc_column css_animation="none"][the_grid name="Pao Portfolio Pinterest"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Portfolio Classic', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/portfolio-classic.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-100b" mobile_mb="margin-xs-70b"][vc_column css_animation="none"][the_grid name="Pao Portfolio Classic"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Urban Slider', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/urban-slider.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-90b" tablets_mb="margin-sm-70b" mobile_mb="margin-xs-50b"][vc_column css_animation="none"][pao_portfolio_sliders cats="building,photography" autoplay="true"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Grid Transform', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/grid-transform.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-100b" mobile_mb="margin-xs-40b"][vc_column css_animation="none" css=".vc_custom_1523976727486{padding-top: 0px !important;}"][the_grid name="Pao Portfolio Grid Transform"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Metro Overlay', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/portfolio/metro-overlay.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'general portfolio';
	$data['content'] = <<<CONTENT
[vc_row][vc_column css_animation="none" css=".vc_custom_1523977442999{padding-top: 0px !important;}"][the_grid name="Pao Portfolio 4"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Posts 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/posts/posts-1.jpg' );
	$data['sort_name'] = 'Posts';
	$data['custom_class'] = 'general posts';
	$data['content'] = <<<CONTENT
[vc_row desctop_mt="margin-lg-85t" desctop_mb="margin-lg-155b" desctop_md_mt="margin-md-35t" desctop_md_mb="margin-md-95b" tablets_mt="margin-sm-30t" tablets_mb="margin-sm-75b" mobile_mt="margin-xs-25t"][vc_column css_animation="none" desctop_mt="margin-lg-30t" tablets_mt="margin-sm-0t" offset="vc_col-lg-4 vc_col-md-4 vc_col-xs-12"][pao_headings subtitle="the daily planet" subtitle_color="#fd8558" title="interactive news."][/vc_column][vc_column css_animation="none" desctop_mt="margin-lg-35t" tablets_mt="margin-sm-10t" mobile_mt="margin-xs-0t" offset="vc_col-lg-8 vc_col-md-8 vc_col-xs-12" css=".vc_custom_1523976574417{padding-top: 0px !important;}"][the_grid name="Pao Post List 2"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


//Category Animaton
	$data = array();
	$data['name'] = esc_html__( 'Glitch 1', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/animation/glitch-1.jpg' );
	$data['sort_name'] = 'Animation';
	$data['custom_class'] = 'general animation';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_glitch image="1366" title="Pao Studio" subtitle="a small design agency based in los angeles."][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Glitch 2', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/animation/glitch-2.jpg' );
	$data['sort_name'] = 'Animation';
	$data['custom_class'] = 'general animation';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_glitch style="style-2" image="1341" title="web studio"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Disortion', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/animation/disortion.jpg' );
	$data['sort_name'] = 'Animation';
	$data['custom_class'] = 'general animation';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_disortion images="1370,1644,1383"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Interactive Links', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/animation/interactive-links.jpg' );
	$data['sort_name'] = 'Animation';
	$data['custom_class'] = 'general animation';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_portfolio_sliders style="interactive" cats="bright" count="3"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

	$data = array();
	$data['name'] = esc_html__( 'Physics', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  get_template_directory_uri() . '/admin/assets/images/pao_templates/animation/physics.jpg' );
	$data['sort_name'] = 'Animation';
	$data['custom_class'] = 'general animation';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][pao_physics_banner title="physics" subtitle="make incredible" animation_color="#fd8558"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	return $templates;
}

function pao_add_default_templates() {
    $templates = pao_vc_templates();
    return array_map( 'vc_add_default_templates', $templates );
}
pao_add_default_templates();