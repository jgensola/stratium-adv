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
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/banners/main-banner.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-75t" el_id="home"][vc_column][pao_banner height="full" btn_style_add="a-btn-3" border="true" icon="true" animation="true" checkbox="" image="166" title="design is thinking made visual" button="url:%23|title:Start%20Now||" button_add="url:%23|title:See%20More||"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    //	Classic Banner Slider
    $data = array();
    $data['name'] = esc_html__( 'Simple with leaf animation banner', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/simple_leaf.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" enable_bottom_wave="true" bottom_wave_color="#f2fbff" el_id="home"][vc_column][pao_banner style_banner="simple_leaf" height="full" btn_style="a-btn-9" icon="true" animation="true" title="It’s Time to Relax" simple-image="66" button="url:%23|title:MAKE%20APPOINTMENT||" image="1063" desc="Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros" simple_image="1066"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Banner Parallax', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/banners/banner-parallax.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b" el_id="home"][vc_column][pao_banner style_banner="parallax" items="%5B%7B%22title%22%3A%22urban%22%2C%22image%22%3A%22301%22%7D%2C%7B%22title%22%3A%22trees%22%2C%22image%22%3A%22299%22%7D%2C%7B%22title%22%3A%22nature%22%2C%22image%22%3A%22300%22%7D%2C%7B%22title%22%3A%22fashion%22%2C%22image%22%3A%22302%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Banner Modern', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/banners/banner-modern.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b" el_id="home"][vc_column][pao_banner style_banner="modern" height="full" btn_style="a-btn-8" style="center_content" icon="true" title="exhibition center in boston" button="url:%23|title:Look%20More||" subtitle="2005 Stokes Isle Apt. 896, Venaville, New York" image="405"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



	$data = array();
	$data['name'] = esc_html__( 'Banner Modern with image section', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/banner/modern-image.jpg' );
	$data['sort_name'] = 'Banner';
	$data['custom_class'] = 'general banner';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" vc_row_angle_after="yes" el_id="home"][vc_column][pao_banner style_banner="modern-image" height="full" btn_style="a-btn-10" icon="true" title="The Best
SEO Specialist" simple-image="66" button="url:%23|title:START%20WORK||" image="1153" subtitle="JOSH PAO" desc="Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Banner Simple', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/banners/banner-simple.jpg' );
    $data['sort_name'] = 'Banner';
    $data['custom_class'] = 'general banner';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-95b" tablets_mb="margin-sm-75b" mobile_mb="margin-xs-45b"][vc_column][pao_banner style_banner="simple-image" animation="true" title="I’m <b>Jeannine</b>, Creative Director" bg_color="#d82323" simple-image="66" simple_image="210"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    // Category About
    $data = array();
    $data['name'] = esc_html__( 'About Simple', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/about/about-simple.jpg' );
    $data['sort_name'] = 'About';
    $data['custom_class'] = 'general about';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-85b" desctop_md_mb="margin-md-95b" tablets_mb="margin-sm-70b" mobile_mb="margin-xs-35b" css=".vc_custom_1532078423115{margin-top: -20px !important;}" el_id="about"][vc_column][pao_about style="simple_text" bgtitle="about" subtitle="ABOUT US" title="Ultimate xperiences
with story, emotion and purpose"]

Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus[/pao_about][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'About Classic', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/about/about-classic.jpg' );
    $data['sort_name'] = 'About';
    $data['custom_class'] = 'general about';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-75b" mobile_mb="margin-xs-45b"][vc_column][pao_about style="classic" image="57" blockquote="“ Our mission is to produce the highest quality work for every clients, on every project with full of energy we have ”" author="Frankie Kao" position="ART DIRECTOR PAO"][/pao_about][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'About Modern', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/about/about-modern.jpg' );
    $data['sort_name'] = 'About';
    $data['custom_class'] = 'general about';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-160b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-45b" desctop_lg_pb="padding-lg-90b" desctop_pb="padding-md-100b" tablets_pb="padding-sm-90b" mobile_pb="padding-xs-0b" el_id="about"][vc_column][pao_about image="402" subtitle="ABOUT US" title="we’re pao, a small photography studio based in New York" button="url:%23|title:View%20more|target:%20_blank|"][/pao_about][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Services Center', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/services/services-center.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general services';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-70b" desctop_md_mb="margin-md-65b" mobile_mb="margin-xs-35b"][vc_column width="1/3"][pao_services style="center" icon="icon-basic-lightbulb" icon_color="#fd8558" title="digital solutions" text="If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration"][/vc_column][vc_column width="1/3"][pao_services style="center" icon="icon-basic-life-buoy" icon_color="#7d5bd9" title="creative strategy" text="If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration"][/vc_column][vc_column width="1/3"][pao_services style="center" icon_color="#70b446" title="integrated marketing" text="If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Services Accordion', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/accordeon.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-380b" desctop_pt="padding-md-40t" mobile_pt="padding-xs-15t" vc_row_angle_after="yes" css=".vc_custom_1536323191655{background-color: #f2fbff !important;}" el_id="portfolio"][vc_column][pao_services style="accordion" items_accordion="%5B%7B%22number%22%3A%2201.%22%2C%22title%22%3A%22Research%20%26%20Planning%22%2C%22text%22%3A%22Many%20conventional%20colleges%20and%20universities%20are%20now%20offering%20online%20DVD%20repair%20courses%2C%20which%20are%20the%20exact%20same%20as%20those%22%7D%2C%7B%22number%22%3A%2202.%22%2C%22title%22%3A%22Content%20Building%22%2C%22text%22%3A%22Many%20conventional%20colleges%20and%20universities%20are%20now%20offering%20online%20DVD%20repair%20courses%2C%20which%20are%20the%20exact%20same%20as%20those%22%7D%2C%7B%22number%22%3A%2203.%22%2C%22title%22%3A%22Conversion%20Analysis%22%2C%22text%22%3A%22Many%20conventional%20colleges%20and%20universities%20are%20now%20offering%20online%20DVD%20repair%20courses%2C%20which%20are%20the%20exact%20same%20as%20those%22%7D%5D" image="1169" title="Process"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Services Classic Slider', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services/classic-slider.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" tablets_mb="margin-sm-0b" desctop_lg_pt="padding-lg-265t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-200t" desctop_pb="padding-md-25b" tablets_pt="padding-sm-50t" tablets_pb="padding-sm-5b" mobile_pt="padding-xs-35t" mobile_pb="padding-xs-0b" vc_bg_position="bg_top-center" el_id="team" css=".vc_custom_1536316554663{margin-top: -100px !important;background-image: url(http://wp.themedemo.co/pao/wp-content/uploads/2018/09/Artboard.png?id=1241) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][pao_services style="classic_slider" items_classic="%5B%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-server2%22%2C%22title%22%3A%22SEO%22%2C%22text%22%3A%22In%20hac%20habitasse%20platea%20dictumst.%20Vivamus%20adipiscing%20fermentum%20quam%20volutpat%20aliquam.%20Integer%20et%20elit%20eget%20elit%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-flag2%22%2C%22title%22%3A%22Marketing%22%2C%22text%22%3A%22Nam%20porttitor%20blandit%20accumsan.%20Ut%20vel%20dictum%20sem%2C%20a%20pretium%20dui.%20In%20malesuada%20enim%20in%20dolor%20euismod%2C%20id%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-smartphone%22%2C%22title%22%3A%22Analytics%22%2C%22text%22%3A%22Cras%20quis%20nulla%20commodo%2C%20aliquam%20lectus%20sed%2C%20blandit%20augue.%20Cras%20ullamcorper%20bibendum%20bibendum.%20Duis%20%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-server2%22%2C%22title%22%3A%22SEO%22%2C%22text%22%3A%22In%20hac%20habitasse%20platea%20dictumst.%20Vivamus%20adipiscing%20fermentum%20quam%20volutpat%20aliquam.%20Integer%20et%20elit%20eget%20elit%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-flag2%22%2C%22title%22%3A%22Marketing%22%2C%22text%22%3A%22Nam%20porttitor%20blandit%20accumsan.%20Ut%20vel%20dictum%20sem%2C%20a%20pretium%20dui.%20In%20malesuada%20enim%20in%20dolor%20euismod%2C%20id%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-smartphone%22%2C%22title%22%3A%22Analytics%22%2C%22text%22%3A%22Cras%20quis%20nulla%20commodo%2C%20aliquam%20lectus%20sed%2C%20blandit%20augue.%20Cras%20ullamcorper%20bibendum%20bibendum.%20Duis%20%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%2C%7B%22icon_type_item%22%3A%22font_icon%22%2C%22icon%22%3A%22icon-basic-server2%22%2C%22title%22%3A%22SEO%22%2C%22text%22%3A%22In%20hac%20habitasse%20platea%20dictumst.%20Vivamus%20adipiscing%20fermentum%20quam%20volutpat%20aliquam.%20Integer%20et%20elit%20eget%20elit%22%2C%22link%22%3A%22url%3A%2523%7Ctitle%3Aview%2520more%7C%7C%22%7D%5D" lg_count="3" md_count="3" sm_count="1" xs_count="1"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Services Simple', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/services_list/simple.jpg' );
	$data['sort_name'] = 'Services';
	$data['custom_class'] = 'general services';
	$data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-70b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-0b"][vc_column][pao_services_list style="simple" cats="spa" desc_column="4" count="3"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Services Left', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/services/services-left.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general services';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-30b" mobile_mb="margin-xs-0b"][vc_column width="1/3"][pao_services icon="icon-basic-picture-multiple" icon_color="#222222" title="Natural Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][vc_column width="1/3"][pao_services icon="icon-basic-bookmark" icon_color="#baa894" title="Wedding Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][vc_column width="1/3"][pao_services icon="icon-basic-ipod" icon_color="#222222" title="Travel Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b"][vc_column width="1/3"][pao_services icon="icon-basic-life-buoy" icon_color="#baa894" title="People Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][vc_column width="1/3"][pao_services icon="icon-basic-world" icon_color="#222222" title="Cosmic Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][vc_column width="1/3"][pao_services icon="icon-basic-clock" icon_color="#baa894" title="Nude Photos" text="Lorem ipsum dolor sit amet, consecte tuer adipiscing elit enean."][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Services List', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/services/services-list.jpg' );
    $data['sort_name'] = 'Services';
    $data['custom_class'] = 'general services';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-110b" desctop_md_mb="margin-md-85b" tablets_mb="margin-sm-45b" el_id="portfolio"][vc_column][pao_portfolio_sliders cats="gardening,interior-design,landscaping" title="Our Feature Works"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-85b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b"][vc_column][pao_headings style="style2" title="Our Great Services" text="For each project we establish relationships with partners who we know will help us cre"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-85b" desctop_md_mb="margin-md-75b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-25b"][vc_column][pao_services_list cats="architecture" desc_column="4" tablet_column="6" btn_text="View More"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Video', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/video/video-button.jpg' );
    $data['sort_name'] = 'Video button';
    $data['custom_class'] = 'general video';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-95b" tablets_mb="margin-sm-75b" mobile_mb="margin-xs-45b"][vc_column][video_button_shortcode video_link="https://www.youtube.com/watch?v=a-Tq472-Rjw"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Headings Left', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/headings/headings-left.jpg' );
    $data['sort_name'] = 'Headings';
    $data['custom_class'] = 'general headings';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" mobile_mb="margin-xs-30b" el_id="portfolio"][vc_column][pao_headings bg_title="works" subtitle="LASTEST WORKS" title="take a look around
our portfolio." button="url:%23|title:View%20More||"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Headings with Background Text', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/heading/head-bg.jpg' );
	$data['sort_name'] = 'Headings';
	$data['custom_class'] = 'general headings';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" tablets_mb="margin-sm-0b" desctop_lg_pt="padding-lg-265t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-200t" desctop_pb="padding-md-25b" tablets_pt="padding-sm-50t" tablets_pb="padding-sm-5b" mobile_pt="padding-xs-35t" mobile_pb="padding-xs-0b" vc_bg_position="bg_top-center" el_id="team" css=".vc_custom_1536316554663{margin-top: -100px !important;background-image: url(http://wp.themedemo.co/pao/wp-content/uploads/2018/09/Artboard.png?id=1241) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][pao_headings style="head_bg" bg_title="services" subtitle="SERVICES" subtitle_color="#0daeff" title="I Love to Find Simple Solutions
to Complex Challenges" title_color="#222222"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Modern Headings', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/heading/modern.jpg' );
    $data['sort_name'] = 'Headings';
    $data['custom_class'] = 'general headings';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-35b" tablets_mb="margin-sm-15b" desctop_lg_pt="padding-lg-105t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-115t" tablets_pt="padding-sm-95t" mobile_pt="padding-xs-25t" mobile_pb="padding-xs-5b" enable_top_wave="true" top_wave_color="#f2fbff" el_id="portfolio"][vc_column][pao_headings style="modern" subtitle="About us" subtitle_color="#26cdd2" title="Our Great Services" title_color="#222222"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Headings Center', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/headings/headings-center.jpg' );
    $data['sort_name'] = 'Headings';
    $data['custom_class'] = 'general headings';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-25b" tablets_mb="margin-sm-5b" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-60t" tablets_pt="padding-sm-40t" mobile_pt="padding-xs-10t" mobile_pb="padding-xs-5b" el_id="news"][vc_column][pao_headings style="style2" subtitle="THE DAILY PLANET" title="our interactive news"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Headings Simple', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/headings/headings-simple.jpg' );
    $data['sort_name'] = 'Headings';
    $data['custom_class'] = 'general headings';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-75b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-35b" el_id="news"][vc_column width="1/3" css=".vc_custom_1532075010923{padding-top: 0px !important;}"][pao_headings style="style" subtitle="THE DAILY PLANET" subtitle_color="rgba(34,34,34,0.40)" title="interactive
news."][/vc_column][vc_column width="2/3" css=".vc_custom_1532075007713{padding-top: 0px !important;}"][the_grid name="Post List 2"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Skills Linear', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/skills/skills-linear.jpg' );
    $data['sort_name'] = 'Skills';
    $data['custom_class'] = 'general skills';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-35b" desctop_md_mb="margin-md-10b"][vc_column][pao_skills skills_style="linear_text" linear_skills="%5B%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2290%22%7D%2C%7B%22title%22%3A%22web%20design%22%2C%22number%22%3A%2280%22%7D%2C%7B%22title%22%3A%22develope%22%2C%22number%22%3A%2295%22%7D%5D" title="modern digital creative agency" subtitle="OUR SKILLS" text="If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Background with lines skills', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/skills/linear_bg.jpg' );
    $data['sort_name'] = 'Skills';
    $data['custom_class'] = 'general skills';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-30b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-100b" mobile_mb="margin-xs-75b" enable_top_wave="true" enable_bottom_wave="true"][vc_column][pao_skills skills_style="linear_bg" bg_text="skills" linear_skills="%5B%7B%22title%22%3A%22Massage%22%2C%22number%22%3A%2290%22%7D%2C%7B%22title%22%3A%22Skin%20Scrub%22%2C%22number%22%3A%2280%22%7D%2C%7B%22title%22%3A%22Natural%20Relaxation%22%2C%22number%22%3A%2295%22%7D%5D" title="The Best Therapies" subtitle="Our skills" text="Discover our exclusive guide to the most unusual yet luxurious wellness therapies." image="1086"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Skills Numerical', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/skills/skills-numerical.jpg' );
    $data['sort_name'] = 'Skills';
    $data['custom_class'] = 'general skills';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-65b" tablets_mb="margin-sm-40b" mobile_mb="margin-xs-10b" desctop_lg_pt="padding-lg-55t" desctop_lg_pb="padding-lg-90b" desctop_pt="padding-md-25t" desctop_pb="padding-md-70b" css=".vc_custom_1532098869478{background-color: #d82323 !important;}"][vc_column][pao_skills numerical_skills="%5B%7B%22number%22%3A%2299%22%2C%22symbol%22%3A%22%25%22%2C%22symbol_location%22%3A%22after%22%2C%22title%22%3A%22satisfied%20clients%22%7D%2C%7B%22number%22%3A%222034%22%2C%22symbol_location%22%3A%22after%22%2C%22title%22%3A%22unique%20designs%22%7D%2C%7B%22number%22%3A%22580%22%2C%22symbol%22%3A%22%2B%22%2C%22symbol_location%22%3A%22before%22%2C%22title%22%3A%22projects%22%7D%2C%7B%22number%22%3A%22789%22%2C%22symbol_location%22%3A%22after%22%2C%22title%22%3A%22coffee%20cups%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Skills With Image', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/skills/skills-with-image.jpg' );
    $data['sort_name'] = 'Skills';
    $data['custom_class'] = 'general skills';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-55b" tablets_mb="margin-sm-35b" mobile_mb="margin-xs-10b" desctop_lg_pt="padding-lg-65t" desctop_lg_pb="padding-lg-70b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-55b" mobile_pt="padding-xs-15t" mobile_pb="padding-xs-10b" css=".vc_custom_1532096628492{background-color: #f7f7f7 !important;}" el_id="team"][vc_column][pao_skills skills_style="linear" linear_skills="%5B%7B%22title%22%3A%22illustration%22%2C%22number%22%3A%2290%22%7D%2C%7B%22title%22%3A%22web%20design%22%2C%22number%22%3A%2280%22%7D%2C%7B%22title%22%3A%22develope%22%2C%22number%22%3A%2295%22%7D%5D" images="248,252,247,251" title="modern digital architect agency" subtitle="OUR TEAM" text="If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Portfolio Classic', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/portfolio/portfolio-classic.jpg' );
    $data['sort_name'] = 'Portfolio';
    $data['custom_class'] = 'general portfolio';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-115b" desctop_md_mb="margin-md-95b" tablets_mb="margin-sm-75b" mobile_mb="margin-xs-45b"][vc_column][the_grid name="Portfolio Simple"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Portfolio Simple', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/portfolio/portfolio-simple.jpg' );
    $data['sort_name'] = 'Portfolio';
    $data['custom_class'] = 'general portfolio';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" mobile_mb="margin-xs-30b" el_id="portfolio"][vc_column][pao_headings bg_title="works" subtitle="LASTEST WORKS" title="take a look around
our portfolio." btn_style="a-btn-2" button="url:%23|title:View%20More||"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-95b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b"][vc_column][the_grid name="Pao Portfolio Resume"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Portfolio Modern', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/portfolio/portfolio-modern.jpg' );
    $data['sort_name'] = 'Portfolio';
    $data['custom_class'] = 'general portfolio';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b" el_id="portfolio"][vc_column][the_grid name="Portfolio Simple 3"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Portfolio Filter', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/portfolio/filter_slider.jpg' );
    $data['sort_name'] = 'Portfolio';
    $data['custom_class'] = 'general portfolio';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-110b" desctop_md_mb="margin-md-85b" tablets_mb="margin-sm-45b" el_id="portfolio"][vc_column][pao_portfolio_sliders cats="gardening,interior-design,landscaping" title="Our Feature Works"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Team', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/team/team.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-20b" tablets_mb="margin-sm-0b" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-25b" tablets_pt="padding-sm-65t" mobile_pt="padding-xs-35t" mobile_pb="padding-xs-20b" el_id="team"][vc_column][pao_headings style="style2" subtitle="OUR TEAM" title="meet our awesome team"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-105b" desctop_md_mb="margin-md-85b" tablets_mb="margin-sm-65b" mobile_mb="margin-xs-35b"][vc_column][pao_team col_numb="col-3 col-xs-12 col-sm-6 col-md-4" btn_style="a-btn-2" space="true" team_members="%5B%7B%22image_id%22%3A%22251%22%2C%22name%22%3A%22Anna%20Brown%22%2C%22position%22%3A%22Creative%20director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22249%22%2C%22name%22%3A%22Andy%20Crown%22%2C%22position%22%3A%22SEO%20manager%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22252%22%2C%22name%22%3A%22Katy%20Necker%22%2C%22position%22%3A%22Designer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22247%22%2C%22name%22%3A%22Margo%20Kesslin%22%2C%22position%22%3A%22Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22248%22%2C%22name%22%3A%22Kanye%20Jones%22%2C%22position%22%3A%22Art%20director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22250%22%2C%22name%22%3A%22Marta%20White%22%2C%22position%22%3A%22Tester%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%252F%2522%257D%255D%22%7D%5D" button="url:%23|title:Start%20Work||"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Team Inline', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/team/team-inline.jpg' );
    $data['sort_name'] = 'Team';
    $data['custom_class'] = 'general team';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-45b" el_id="team"][vc_column][pao_team team_members="%5B%7B%22image_id%22%3A%22251%22%2C%22name%22%3A%22Nicole%20Kidman%22%2C%22position%22%3A%22Google%2C%20SEO%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22250%22%2C%22name%22%3A%22Jennifer%20Wood%22%2C%22position%22%3A%22Narrator%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22248%22%2C%22name%22%3A%22Joshua%20Micke%22%2C%22position%22%3A%22Technical%20director%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22247%22%2C%22name%22%3A%22Kasia%20Morgan%22%2C%22position%22%3A%22Developer%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22249%22%2C%22name%22%3A%22Matthew%20Kender%22%2C%22position%22%3A%22Tester%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%2C%7B%22image_id%22%3A%22252%22%2C%22name%22%3A%22Zarina%20Bonder%22%2C%22position%22%3A%22Manager%22%2C%22socials%22%3A%22%255B%257B%2522icon%2522%253A%2522fa%2520fa-facebook-square%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.facebook.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-twitter%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Ftwitter.com%252F%2522%257D%252C%257B%2522icon%2522%253A%2522fa%2520fa-instagram%2522%252C%2522social_url%2522%253A%2522https%253A%252F%252Fwww.instagram.com%2522%257D%255D%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Testimonials', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/testimonials/testimonials.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonials';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-60t" desctop_pb="padding-md-35b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-15b" mobile_pt="padding-xs-15t" mobile_pb="padding-xs-0b" css=".vc_custom_1532076230054{background-color: #3a0f73 !important;}"][vc_column][pao_headings style="style2" subtitle="OUR TESTIMONIALS" title="our customers says" title_color="#ffffff"][/vc_column][/vc_row][vc_row full_width="stretch_row" desctop_lg_pb="padding-lg-110b" desctop_pb="padding-md-95b" tablets_pb="padding-sm-75b" mobile_pb="padding-xs-50b" css=".vc_custom_1532076237278{background-color: #3a0f73 !important;}"][vc_column][pao_testimonial md_count="3" lg_count="3"][pao_testimonial_items stars="five" author="Sophie Nguyen" position="CEO" logo_image="200"]What is your attitude as a small town businessman when it comes to advertising or taking help of an advertising design[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jeremiah Tran" position="sales manager" logo_image="202"]Spielberg’s blockbuster, “Minority Report”, is set in the year 2054. The future – at least according[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jim Mendez" position="Manager" logo_image="201"]Over time, even the most sophisticated, memory packed computer can begin to run slow if we don’t do something[/pao_testimonial_items][pao_testimonial_items stars="five" author="Sophie Nguyen" position="CEO" logo_image="200"]What is your attitude as a small town businessman when it comes to advertising or taking help[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jeremiah Tran" position="sales manager" logo_image="202"]Spielberg’s blockbuster, “Minority Report”, is set in the year 2054. The future – at least according to a team of MIT futurologists[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jim Mendez" position="Manager" logo_image="201"]Over time, even the most sophisticated, memory packed computer can begin to run slow[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Testimonials Left', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/testimonials/testimonials-left.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonials';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_mb="margin-lg-80b" desctop_md_mb="margin-md-55b" tablets_mb="margin-sm-35b" mobile_mb="margin-xs-5b" desctop_lg_pt="padding-lg-100t" desctop_lg_pb="padding-lg-100b" desctop_pt="padding-md-65t" desctop_pb="padding-md-100b" tablets_pt="padding-sm-50t" tablets_pb="padding-sm-85b" mobile_pt="padding-xs-20t" mobile_pb="padding-xs-55b" css=".vc_custom_1532094491652{background-color: #222222 !important;}"][vc_column][pao_testimonial type_slider="left_align" color1="#ffffff" color2="#ffffff" color3="#999999" color4="#ffffff"][pao_testimonial_items stars="five" author="Tyler Durden" position="Narrator" logo_image="201"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour “[/pao_testimonial_items][pao_testimonial_items stars="five" author="Micke Sommersby" position="Developer" logo_image="202"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour “[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jin Xiao" position="Google, SEO" logo_image="200"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour “[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b" el_id="news"][vc_column][pao_headings style="style2" title="Lastest News &amp; Career" text="For each project we establish relationships with partners who we know will help us cre"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Testimonials Center', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/testimonials/testimonials-center.jpg' );
    $data['sort_name'] = 'Testimonials';
    $data['custom_class'] = 'general testimonials';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-80b" tablets_mb="margin-sm-0b" mobile_mb="margin-xs-20b"][vc_column][pao_testimonial type_slider="modern" bg_text="Testimonials"][pao_testimonial_items stars="five" author="Blanche Fields" position="Google, CEO" logo_image="200"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly ”[/pao_testimonial_items][pao_testimonial_items stars="five" author="James Willshere" position="Manager" logo_image="201"]“ Maecenas venenatis lacinia dolor et finibus. Nullam ornare, arcu sed blandit pharetra, ligula nulla porta enim, a ultrices dolor odio at risus. Proin pharetra vitae neque at rhoncus. Integer ac luctus lectus.  ”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Nick Holmes" position="Developer" logo_image="202"]“ In hac habitasse platea dictumst. Aenean rhoncus, massa scelerisque cursus semper, diam sem iaculis leo, non dapibus sem justo quis dui. Suspendisse eu metus vel dui pretium varius non sed mauris.  ”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Blanche Fields" position="Google, CEO" logo_image="200"]“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly ”[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



	$data = array();
	$data['name'] = esc_html__( 'Testimonials Model Slider', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/testimonial/model.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'general testimonials';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pt="padding-lg-100t" desctop_lg_pb="padding-lg-120b" desctop_pt="padding-md-65t" desctop_pb="padding-md-65b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-0b" mobile_pt="padding-xs-5t" mobile_pb="padding-xs-30b" enable_top_wave="true" enable_bottom_wave="true" bottom_wave_color="#f2fbff" css=".vc_custom_1536313494919{background-color: #26cdd2 !important;}"][vc_column][pao_testimonial type_slider="model" bg_text="Testimonials"][pao_testimonial_items stars="five" author="Tyler Durden" position="Designer" logo_image="201"]“ Brought my daughter &amp; her friend in for a birthday pedicure. The women working on them were engaging &amp; fun, and both girls had a great time being pampered! ”[/pao_testimonial_items][pao_testimonial_items stars="five" author="Micke Sommersby" position="Builder" logo_image="202"]“I really enjoyed my first visit to Spao. I had a pedicure, and the space was very casual and attractive, not so stubborn. Everything was very nice and done a great job.“[/pao_testimonial_items][pao_testimonial_items stars="five" author="Jin Xiao" position="Model" logo_image="200"]“ We went to Hili Spa salon for a girls weekend and they were so accommodating!! All of the services were great and they were so kind and friendly! We will definitely be back!!“[/pao_testimonial_items][/pao_testimonial][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Posts List', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/posts/posts.jpg' );
    $data['sort_name'] = 'Posts';
    $data['custom_class'] = 'general posts';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mb="margin-lg-25b" tablets_mb="margin-sm-5b" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-25b" desctop_pt="padding-md-60t" tablets_pt="padding-sm-40t" mobile_pt="padding-xs-10t" mobile_pb="padding-xs-5b" el_id="news"][vc_column][pao_headings style="style2" subtitle="THE DAILY PLANET" title="our interactive news"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-95b" desctop_md_mb="margin-md-75b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-35b"][vc_column][the_grid name="Post List"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b"][vc_column][button_shortcode button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fblog%2F%3Fblog_style%3Dmasonry|title:our%20blog|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Posts Modern', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/posts/posts-modern.jpg' );
    $data['sort_name'] = 'Posts';
    $data['custom_class'] = 'general posts';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-75b" tablets_mb="margin-sm-55b" mobile_mb="margin-xs-35b" el_id="news"][vc_column width="1/3" css=".vc_custom_1532075010923{padding-top: 0px !important;}"][pao_headings style="style" subtitle="THE DAILY PLANET" subtitle_color="rgba(34,34,34,0.40)" title="interactive
news."][/vc_column][vc_column width="2/3" css=".vc_custom_1532075007713{padding-top: 0px !important;}"][the_grid name="Post List 2"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Posts Slider', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/posts/posts-slider.jpg' );
    $data['sort_name'] = 'Posts';
    $data['custom_class'] = 'general posts';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-80b" tablets_mb="margin-sm-60b" mobile_mb="margin-xs-40b" el_id="news"][vc_column][pao_headings style="style2" title="Lastest News &amp; Career" text="For each project we establish relationships with partners who we know will help us cre"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-90b" desctop_md_mb="margin-md-70b" tablets_mb="margin-sm-50b" mobile_mb="margin-xs-30b"][vc_column][pao_post_slider cats="architecture" count="6"][/vc_column][/vc_row][vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-100b" tablets_mb="margin-sm-80b" mobile_mb="margin-xs-50b"][vc_column][button_shortcode btn_style="a-btn-4" button="url:http%3A%2F%2Fdev.viewdemo.co%2Fwp%2Fpao%2Fblog%2F%3Fblog_style%3Dmasonry|title:few%20more%20articles|target:%20_blank|"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Contacts with map', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/contacts/contact-with-map.jpg' );
    $data['sort_name'] = 'Contacts';
    $data['custom_class'] = 'general contacts';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-65t" desctop_lg_pb="padding-lg-80b" desctop_pb="padding-md-75b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-55b" mobile_pt="padding-xs-15t" mobile_pb="padding-xs-25b" css=".vc_custom_1532078685837{background-color: #fbfafc !important;}" el_id="contact"][vc_column][pao_contacts address_info="%5B%7B%22address%22%3A%2214%20tottenham%20road%2C%20%3Cbr%2F%3E%5Cnlondon%2C%20england%22%7D%5D" btn_style="btn-style-2" form="6"]info@yourdomain.com

(+68) 12004509[/pao_contacts][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1532016332225{padding-top: 0px !important;}"][vc_ugm_map center_map="yes" zoom_map="15" map_type="ROADMAP" is_scroll_wheel="true" map_height="200" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][vc_ugm_map_marker icon_animation="BOUNCE" address="Bristol, Великобритания" marker_icon="260"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



	$data = array();
	$data['name'] = esc_html__( 'Contact form with map', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/maps-light.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" enable_top_wave="true" el_id="contact"][vc_column][pao_contacts style="style8" title="Make an Appointment" subtitle="Contact us" google_api_key="AIzaSyBTySXwlw-Yt_Rr-gg_xsxAjJVeRMoTAY8" latitude="-37.971237" longitude="144.4926947" zoom="12" marker="1139" form="6"][{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}][/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Modern Contact form with map', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/contacts/map-dark.jpg' );
	$data['sort_name'] = 'Contacts';
	$data['custom_class'] = 'general contacts';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" vc_row_angle_before="yes" el_id="contact"][vc_column css=".vc_custom_1536160677042{padding-top: 0px !important;}"][pao_contacts style="style9" title="Let's Work Together" subtitle="CONTACT ME" google_api_key="AIzaSyBTySXwlw-Yt_Rr-gg_xsxAjJVeRMoTAY8" latitude="-37.971237" longitude="144.4926947" zoom="12" map_style="style-2" marker="1174" form="6"][{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}][/pao_contacts][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Contacts with form', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/contacts/contact-with-form.jpg' );
    $data['sort_name'] = 'Contacts';
    $data['custom_class'] = 'general contacts';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes" content_placement="middle" mobile_pt="padding-xs-40t" css=".vc_custom_1532085880749{background-color: #fafafa !important;}"][vc_column width="1/2" css=".vc_custom_1532071683958{padding-top: 0px !important;}" offset="vc_hidden-xs"][vc_ugm_map center_map="yes" zoom_map="15" map_type="ROADMAP" is_scroll_wheel="true" map_height="700" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][vc_ugm_map_marker icon_animation="BOUNCE" address="Bristol, Великобритания" marker_icon="365"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][vc_column width="1/2" css=".vc_custom_1532070422901{padding-top: 0px !important;}"][pao_contacts style="style3" title="CONTACT US" btn_style="btn-style-4" text="keep in touch." form="6"][/pao_contacts][/vc_column][vc_column offset="vc_hidden-lg vc_hidden-md vc_hidden-sm"][vc_ugm_map center_map="yes" zoom_map="15" map_type="ROADMAP" is_scroll_wheel="true" map_height="300" json_style="JTVCJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJ3YXRlciUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNlOWU5ZTklMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIybGFuZHNjYXBlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIwJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJyb2FkLmhpZ2h3YXklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5oaWdod2F5JTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeS5zdHJva2UlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMndlaWdodCUyMiUzQSUyMDAuMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5hcnRlcmlhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycm9hZC5sb2NhbCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZmZmZmYlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxNiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIycG9pJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZWxlbWVudFR5cGUlMjIlM0ElMjAlMjJnZW9tZXRyeSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2Y1ZjVmNSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDIxJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyZmVhdHVyZVR5cGUlMjIlM0ElMjAlMjJwb2kucGFyayUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNkZWRlZGUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLnRleHQuc3Ryb2tlJTIyJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc3R5bGVycyUyMiUzQSUyMCU1QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnZpc2liaWxpdHklMjIlM0ElMjAlMjJvbiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmNvbG9yJTIyJTNBJTIwJTIyJTIzZmZmZmZmJTIyJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIybGlnaHRuZXNzJTIyJTNBJTIwMTYlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlNUQlMEElMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmxhYmVscy50ZXh0LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyc2F0dXJhdGlvbiUyMiUzQSUyMDM2JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjMzMzMzMzMlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjA0MCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIybGFiZWxzLmljb24lMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIydmlzaWJpbGl0eSUyMiUzQSUyMCUyMm9mZiUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIydHJhbnNpdCUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmVsZW1lbnRUeXBlJTIyJTNBJTIwJTIyZ2VvbWV0cnklMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmMmYyZjIlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAxOSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LmZpbGwlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJzdHlsZXJzJTIyJTNBJTIwJTVCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyY29sb3IlMjIlM0ElMjAlMjIlMjNmZWZlZmUlMjIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0QlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJsaWdodG5lc3MlMjIlM0ElMjAyMCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU1RCUwQSUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmZlYXR1cmVUeXBlJTIyJTNBJTIwJTIyYWRtaW5pc3RyYXRpdmUlMjIlMkMlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJlbGVtZW50VHlwZSUyMiUzQSUyMCUyMmdlb21ldHJ5LnN0cm9rZSUyMiUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMnN0eWxlcnMlMjIlM0ElMjAlNUIlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlN0IlMEElMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjAlMjJjb2xvciUyMiUzQSUyMCUyMiUyM2ZlZmVmZSUyMiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3RCUyQyUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCU3QiUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMmxpZ2h0bmVzcyUyMiUzQSUyMDE3JTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTJDJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdCJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIyd2VpZ2h0JTIyJTNBJTIwMS4yJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTdEJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTVEJTBBJTIwJTIwJTIwJTIwJTdEJTBBJTVE"][vc_ugm_map_marker icon_animation="BOUNCE" address="Bristol, Великобритания" marker_icon="365"][/vc_ugm_map_marker][/vc_ugm_map][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data = array();
    $data['name'] = esc_html__( 'Contacts Simple', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/contacts/contact-simple.jpg' );
    $data['sort_name'] = 'Contacts';
    $data['custom_class'] = 'general contacts';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_lg_pt="padding-lg-115t" desctop_lg_pb="padding-lg-155b" desctop_pt="padding-md-65t" desctop_pb="padding-md-100b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-80b" mobile_pt="padding-xs-15t" mobile_pb="padding-xs-50b" css=".vc_custom_1532096744332{background-image: url(http://dev.viewdemo.co/wp/pao/wp-content/uploads/2018/07/image@3x-1.jpg?id=581) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="contact"][vc_column][pao_contacts style="style7" title="Keep In Touch" btn_style="btn-style-4" text="For each project we establish relationships with partners." form="556"][/pao_contacts][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Info Block', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/info-block/info-block.jpg' );
    $data['sort_name'] = 'Info Block';
    $data['custom_class'] = 'general info-block';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" desctop_mb="margin-lg-90b" tablets_mb="margin-sm-30b" mobile_mb="margin-xs-5b" el_id="about"][vc_column][pao_info_block number="10" title="Years
Experience" bg_text="About" image_id="576" image_bg="619"]
<h5>Our team takes over everything, from an <a href="http://dev.viewdemo.co/wp/pao/portfolio-item/differents/"><span class="" data-color-group="turquoise">idea and concept</span></a> development to realization.</h5>
If you’re looking for the latest in wireless headphones for your enjoyment and private listening, whether to TV, stereo, home entertainment such as theater, iTunes or Ipod, you might do well to look at the highly recommended Sennheiser RS 130 wireless headphones. These state of the art wireless headphones provide an advanced communication via FM radio frequency. The result is clear sound with no background noise or static and nearly 500 feet of free movement. The headphones have terrific surround sound effects and weigh less than ten[/pao_info_block][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Video With Text Section', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/info_block/style-6.jpg' );
    $data['sort_name'] = 'Info Block';
    $data['custom_class'] = 'general info-block';
    $data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_lg_pt="padding-lg-80t" desctop_lg_pb="padding-lg-120b" desctop_pt="padding-md-65t" desctop_pb="padding-md-45b" tablets_pt="padding-sm-45t" tablets_pb="padding-sm-60b" mobile_pt="padding-xs-20t" mobile_pb="padding-xs-25b" el_id="about" css=".vc_custom_1536312929017{background-color: #f2fbff !important;}"][vc_column][pao_info_block info_block_style="style-6" title="Minerals is used to give medicinal baths." subtitle="About us" bg_text="about" add_video="yes" video_link="https://www.youtube.com/watch?v=0kxWMtYm8nw" video_btn_bg="1078"]Basic background Cosmetic surgery consists not just of enhancing someones beauty, but also to help those who have been badly damaged in an accident or who have physical birth defects. Many believe that women are the main gender that go for cosmetic surgery. Yet studies have shown that 11% of men are also getting cosmetic surgery – in fact since 1992, the percentage of men getting cosmetic surgery has gone up by 50%. Middle aged men see plastic surgery as an investment in their career prospects. It[/pao_info_block][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


	$data = array();
	$data['name'] = esc_html__( 'Video Button Section', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/info_block/style-7.jpg' );
	$data['sort_name'] = 'Info Block';
	$data['custom_class'] = 'general info-block';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" desctop_mt="margin-lg-60t" desctop_mb="margin-lg-100b" desctop_md_mb="margin-md-40b" tablets_mb="margin-sm-65b" mobile_mb="margin-xs-45b" desctop_lg_pt="padding-lg-200t" desctop_pt="padding-md-125t" tablets_pt="padding-sm-85t" mobile_pt="padding-xs-20t" el_id="about"][vc_column][pao_info_block info_block_style="style-7" title="Ultimate Experiences With Story, Emotion" subtitle="ABOUT ME" desc="Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum" add_video="yes" video_link="https://www.youtube.com/watch?time_continue=14&amp;v=a-Tq472-Rjw" video_btn_bg="1152"]Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum mattis fusceut persecenas. Eros mus[/pao_info_block][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;


    $data = array();
    $data['name'] = esc_html__( 'Pricing', 'pao' );
    $data['disabled'] = true; //disable it to not show in the default tab
    $data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/pao_templates/pricing/pricing.jpg' );
    $data['sort_name'] = 'Pricing';
    $data['custom_class'] = 'general pricing';
    $data['content'] = <<<CONTENT
[vc_row desctop_mb="margin-lg-120b" desctop_md_mb="margin-md-90b" tablets_mb="margin-sm-70b" mobile_mb="margin-xs-40b"][vc_column offset="vc_col-lg-4"][vc_pricing title="seo package" currency="$" price="599" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." button="url:%23|title:I%20Want%20it|target:%20_blank|"]Lorem ipsum meconsect

Lorem ipsum dolor sit ameconsec

Lorem ipsum meconsect

Lorem ipsum dolor sit ameconsec[/vc_pricing][/vc_column][vc_column offset="vc_col-lg-4"][vc_pricing active_pricing="true" title="website package" currency="$" price="899" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." btn_style="a-btn-4" button="url:%23|title:I%20Want%20it|target:%20_blank|"]
<ul>
 	<li>Lorem ipsum meconsect</li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
 	<li>Lorem ipsum meconsect</li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
</ul>
[/vc_pricing][/vc_column][vc_column offset="vc_col-lg-4"][vc_pricing title="eCommerce package" currency="$" price="1299" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." button="url:%23|title:I%20Want%20it|target:%20_blank|"]Lorem ipsum meconsect

Lorem ipsum dolor sit ameconsec

Lorem ipsum meconsect

Lorem ipsum dolor sit ameconsec[/vc_pricing][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



	$data = array();
	$data['name'] = esc_html__( 'Modern Pricing', 'pao' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  EF_URL . '/admin/assets/images/shortcodes_images/pricing/modern_p.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'general pricing';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" desctop_md_mb="margin-md-20b" desctop_lg_pb="padding-lg-195b" desctop_pb="padding-md-155b" tablets_pb="padding-sm-130b" mobile_pb="padding-xs-65b" enable_bottom_wave="true" css=".vc_custom_1536313589073{background-color: #f2fbff !important;}"][vc_column offset="vc_col-lg-4 vc_col-md-4"][vc_pricing pricing_style="modern" title="basic plan" currency="$" price="99" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." btn_style="a-btn-9" items_pricing="%5B%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%7D%5D" button="url:%23|title:I%20WANT%20IT||"]
<ul>
 	<li><span class="" data-color-group="turquoise">Lorem ipsum meconsect</span></li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
 	<li>Lorem ipsum meconsect</li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
</ul>
[/vc_pricing][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][vc_pricing pricing_style="modern" active_pricing="true" title="standart plan" currency="$" price="399" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." btn_style="a-btn-9" items_pricing="%5B%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%7D%5D" button="url:%23|title:I%20WANT%20IT||"]
<ul>
 	<li><span class="" data-color-group="turquoise">Lorem ipsum meconsect</span></li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
 	<li>Lorem ipsum meconsect</li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
</ul>
[/vc_pricing][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4"][vc_pricing pricing_style="modern" title="premium plan" currency="$" price="1299" subtitle="ipsum dolor sit amet, consecte tuer adipiscing elit enean." btn_style="a-btn-9" items_pricing="%5B%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20meconsect%22%2C%22active_el%22%3A%22true%22%7D%2C%7B%22text%22%3A%22Lorem%20ipsum%20dolor%20sit%20ameconsec%22%2C%22active_el%22%3A%22true%22%7D%5D" button="url:%23|title:I%20WANT%20IT||"]
<ul>
 	<li><span class="" data-color-group="turquoise">Lorem ipsum meconsect</span></li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
 	<li>Lorem ipsum meconsect</li>
 	<li>Lorem ipsum dolor sit ameconsec</li>
</ul>
[/vc_pricing][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;




    return $templates;
}

function pao_add_default_templates() {
    $templates = pao_vc_templates();
    return array_map( 'vc_add_default_templates', $templates );
}
pao_add_default_templates();