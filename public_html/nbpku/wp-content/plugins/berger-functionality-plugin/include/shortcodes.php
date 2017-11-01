<?php
// Berger shortcodes definition

//////////////////////////////////////////////////////////////////
// Helper Functions
//////////////////////////////////////////////////////////////////
function translate_fx_effect( $shortcode_option ){

    switch( $shortcode_option ){

        case 'fade':
            return 'fade-in';
        case 'fade-from-left':
            return 'fade-in-from-left';
        case 'fade-from-right':
            return 'fade-in-from-right';
        case 'fade-from-bottom':
            return 'fade-in-from-bottom';
        case 'none':
            return '';
        default:
            return '';
    }

    return '';
}

function clapat_get_image_url( $image_id, $image_url ){
	
	if( !empty( $image_id ) ){
		
		$image_info = wp_get_attachment_image_src( $image_id, 'full' );
		if( $image_info[0] ){
			
			return $image_info[0];
		} 
	}
	
	return $image_url;
}


/* Columns */

//////////////////////////////////////////////////////////////////
// Column one_half shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_half', 'shortcode_one_half');
function shortcode_one_half($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="one_half ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column one_third shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_third', 'shortcode_one_third');
function shortcode_one_third($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="one_third ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column two_third shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('two_third', 'shortcode_two_third');
function shortcode_two_third($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="two_third ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column one_fourth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_fourth', 'shortcode_one_fourth');
function shortcode_one_fourth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="one_fourth ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column three_fourth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('three_fourth', 'shortcode_three_fourth');
function shortcode_three_fourth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="three_fourth ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column one fifth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_fifth', 'shortcode_one_fifth');
function shortcode_one_fifth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="one_fifth ' . $class . '">' .do_shortcode($content). '</div>';

}

add_shortcode('two_fifth', 'shortcode_two_fifth');
function shortcode_two_fifth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="two_fifth ' . $class . '">' .do_shortcode($content). '</div>';

}

add_shortcode('three_fifth', 'shortcode_three_fifth');
function shortcode_three_fifth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="three_fifth ' . $class . '">' .do_shortcode($content). '</div>';

}

add_shortcode('four_fifth', 'shortcode_four_fifth');
function shortcode_four_fifth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="four_fifth ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column one sixth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_sixth', 'shortcode_one_sixth');
function shortcode_one_sixth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="one_sixth ' . $class . '">' .do_shortcode($content). '</div>';

}

//////////////////////////////////////////////////////////////////
// Column five sixth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('five_sixth', 'shortcode_five_sixth');
function shortcode_five_sixth($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'last' => 'no',
            'text_align' => 'text-align-left'
        ), $atts);

    $class = $atts['text_align'];
    if( $atts['last'] == 'yes' ){

        $class .= ' last';
    }

    return '<div class="five_sixth ' . $class . '">' .do_shortcode($content). '</div>';

}

/* End Columns */


/* Content Elements */

add_shortcode('berger_section_parallax', 'shortcode_berger_section_parallax');
function shortcode_berger_section_parallax($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'id' => '',
            'background_image' => '',
            'overlay_color' => '#FFFFFF',
            'overlay_color_opacity' => '0.0',
			'padding_top' => '',
			'padding_bottom' => ''
        ), $atts);

    $section_id = '';
    if( !empty( $atts['id'] ) ){

        $section_id = ' id="' . $atts['id'] . '"';
    }

    $section_style = 'style="background-image: url(\''. $atts['background_image'] .'\');"';
    $padding_style = '';
	if( $atts['padding_top'] != '' ){
		$padding_style .= ' padding-top: ' . $atts['padding_top'] . 'px;';
	}
	if( $atts['padding_bottom'] != '' ){
		$padding_style .= ' padding-bottom: ' . $atts['padding_bottom'] . 'px;';
	}
	
	require_once ( get_template_directory() . '/include/util_functions.php');
    $overlay_rgba    = hex2rgba( $atts['overlay_color'], $atts['overlay_color_opacity'] );

    $out = '<section ' . $section_id . ' class="parallax" ' . $section_style . ' >';
	$out .= '<div class="overlay" style="background-color:' . $overlay_rgba . '; ' . $padding_style . '">';
	$out .= do_shortcode( $content );
	$out .= '</div>';
	$out .= '</section>';
	
	return $out;

}

//////////////////////////////////////////////////////////////////
// Padding Box
//////////////////////////////////////////////////////////////////
add_shortcode('padding_box', 'shortcode_padding_box');
function shortcode_padding_box($atts, $content = null) {

    $html .= '<div class="padding-box">' . do_shortcode($content). '</div>';
    return $html;
}

/* End Content Elements */


/* Typo Elements */

//////////////////////////////////////////////////////////////////
// Title
//////////////////////////////////////////////////////////////////
add_shortcode('title', 'shortcode_title');
function shortcode_title($atts, $content = null) {

    $atts = shortcode_atts( array(
        'size'   	=> 'h1',
        'underline' => 'no'
    ), $atts );

    $class_title = '';
    if( $atts['underline'] == 'yes' ){

        $class_title = ' class="title-has-line"';
    }
	
    $html = '';
    $html .= '<'.$atts['size']. $class_title . '>'.do_shortcode($content).'</'.$atts['size'].'>';
    return $html;
}

//////////////////////////////////////////////////////////////////
// Subtitle
//////////////////////////////////////////////////////////////////
add_shortcode('subtitle', 'shortcode_subtitle');
function shortcode_subtitle($atts, $content = null) {

    $atts = shortcode_atts( array(
        'underline' => 'no'
    ), $atts );

    $class_title = '';
    if( $atts['underline'] == 'yes' ){

        $class_title = ' title-has-line';
    }
	
    $html = '';
    $html .= '<p class="monospace'. $class_title . '">'.do_shortcode($content).'</p>';
    return $html;
}

//////////////////////////////////////////////////////////////////
// Breaking line
//////////////////////////////////////////////////////////////////
add_shortcode('br', 'shortcode_br');
function shortcode_br($atts, $content = null) {

    return '<br />';
}

//////////////////////////////////////////////////////////////////
// Line Divider
//////////////////////////////////////////////////////////////////
add_shortcode('hr', 'shortcode_hr');
function shortcode_hr($atts, $content = null) {

	$atts = shortcode_atts( array(
        'size' => 'normal'
    ), $atts );

    $class_title = '';
    if( $atts['size'] == 'small' ){

        $class_title = ' class="small"';
    }
    
    return '<hr'. $class_title .'>';
}

//////////////////////////////////////////////////////////////////
// Button shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('button', 'shortcode_button');
function shortcode_button($atts, $content = null) {

    $atts = shortcode_atts(array(
                'link'      => '',
                'target'    => '_blank',
                'type'      => 'normal'
            ), $atts );

    $outline = '';
    if( $atts['type'] == 'outline' ){
        $outline = ' outline-button';
    }
	
    return '<a class="clapat-button'  . $outline . '" href="' . $atts['link'] . '" target="' . $atts['target'] . '">' . do_shortcode($content). '</a>';
}

//////////////////////////////////////////////////////////////////
// Space Between Buttons
//////////////////////////////////////////////////////////////////
add_shortcode('space_between_buttons', 'shortcode_space_between_buttons');
function shortcode_space_between_buttons($atts, $content = null) {

	return '<span class="space-buttons"></span>';
}

/* End Typo Elements */


/* Elements */

//////////////////////////////////////////////////////////////////
// Animated Div
//////////////////////////////////////////////////////////////////
add_shortcode('animated_div', 'shortcode_animated_div');
function shortcode_animated_div($atts, $content = null) {

    $atts = shortcode_atts(array(
        'fx_effect'	=> 'fade-in',
        'fx_speed' => '100',
    ), $atts );

    $fx_effect = translate_fx_effect( $atts['fx_effect'] );
    $fx_class = '';
    if( $fx_effect ){
        $fx_class = ' class="has-animation" data-animation="' . $fx_effect . '" data-delay="' . $atts['fx_speed'] . '"';
    }

    $out = '<div' . $fx_class . '>';
    $out .= do_shortcode( $content );
    $out .= '</div>';

    return $out;
}

//////////////////////////////////////////////////////////////////
// Accordion
//////////////////////////////////////////////////////////////////
add_shortcode('accordion', 'shortcode_accordion');
function shortcode_accordion($atts, $content = null) {

    $str = '<dl class="accordion">';
    $str .= do_shortcode( $content );
    $str .= '</dl>';

    return $str;
}

add_shortcode('accordion_item', 'shortcode_accordion_item');
function shortcode_accordion_item($atts, $content = null) {

    $atts = shortcode_atts(
                array(
                    'title'      => ''
                ), $atts );

    $str = '<dt><span>' . $atts['title'] . '</span></dt>';
    $str .= '<dd class="accordion-content">' . do_shortcode( $content ) . '</dd>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Tabs shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('tabs', 'shortcode_tabs');
function shortcode_tabs( $atts, $content = null ) {

    $out = '';

    $out .= '<div class="tab-shortcode">';

    $out .= '<ul class="clearfix tabs">';
    $first = true;
    foreach ($atts as $key => $tab) {
        $out .= '<li><a href="#' . $key . '">' . $tab . '</a></li>';
        $first = false;
    }
    $out .= '</ul>';

    $out .= do_shortcode( $content );

    $out .= '</div>';

    return $out;
}


add_shortcode('tab', 'shortcode_tab');
function shortcode_tab( $atts, $content = null ) {

    $out = '';
    $out .= '<div id="tab' . $atts['id'] . '" class="tab_container">' . do_shortcode($content) .'</div>';

    return $out;
}

//////////////////////////////////////////////////////////////////
// Toggle shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('toggle', 'shortcode_toggle');
function shortcode_toggle( $atts, $content = null ) {

    $atts = shortcode_atts(
                            array(
                                'title'      => ''
                            ), $atts );


    $html = '<div class="toggle-wrap"> ';

    $html .= '<span class="toggle-title"><a href="#">' . $atts['title'] . '</a></span>';
    $html .= '<div class="toggle_container">' . do_shortcode( $content ) . '</div>';

    $html .= '</div>';

    return $html;
}

//////////////////////////////////////////////////////////////////
// Our Team
//////////////////////////////////////////////////////////////////
add_shortcode('team', 'shortcode_team');
function shortcode_team($atts, $content = null) {

    $out = '<ul class="our-team">';
    $out .= do_shortcode( $content );
    $out .= '</ul>';

    return $out;
}

add_shortcode('team_member', 'shortcode_team_member');
function shortcode_team_member($atts, $content = null) {

    $atts = shortcode_atts(array(
        'picture' => '',
    	'picture_id' => '',
        'name' => '',
        'title' => '',
        'social_icon1' => '',
        'social_link1_url' => '',
        'social_icon2' => '',
        'social_link2_url' => '',
        'social_icon3' => '',
        'social_link3_url' => ''
    ), $atts );


    $out = '';

    $picture_url = clapat_get_image_url( $atts['picture_id'], $atts['picture'] ); 
    
    $out .= '<li class="team-member" style="background-image:url(' . $picture_url . ');">';
    $out .= '<div class="team-overflow">';

    $out .= '<div class="team-info">';
    $out .= '<h5 class="team-name">' . $atts['name'] . '</h5>';
    $out .= '<p class="monospace title-has-line team-function">' . $atts['title'] . '</p>';
    $out .= '<p class="team-description">' . $content . '</p>';

    $out .= '<ul class="socials">';
    if($atts['social_icon1'] && $atts['social_link1_url'] ) {
        $out .= '<li><a href="' . $atts['social_link1_url'] . '" target="_blank"><i class="' . $atts['social_icon1'] . '"></i></a></li> ';
    }
    if($atts['social_icon2'] && $atts['social_link2_url']) {
        $out .= '<li><a href="' . $atts['social_link2_url'] . '" target="_blank"><i class="' . $atts['social_icon2'] . '"></i></a></li> ';
    }
    if($atts['social_icon3'] && $atts['social_link3_url']) {
        $out .= '<li><a href="' . $atts['social_link3_url'] . '" target="_blank"><i class="' . $atts['social_icon3'] . '"></i></a></li> ';
    }
    $out .= '</ul>';

    $out .= '</div>'; // div class team info
    $out .= '</div>'; // div class team overflow
    $out .= '</li>'; // li team person

    return $out;
}

//////////////////////////////////////////////////////////////////
// Alert Message
//////////////////////////////////////////////////////////////////
add_shortcode('alert', 'shortcode_alert');
function shortcode_alert($atts, $content = null) {

    $atts = shortcode_atts(
        array(
            'color'      => 'red'
        ), $atts );

    $out  = '';
    $out .= '<div class="alertboxes">';
    $out .= '<div class="shortcode_alertbox box_'. $atts['color'] .'">';
    $out .= do_shortcode($content);
    $out .= '<a class="box_close"></a>';
    $out .= '</div>';
    $out .= '</div>';

    return $out;
}

//////////////////////////////////////////////////////////////////
// Progress Bar
//////////////////////////////////////////////////////////////////
add_shortcode('progress', 'shortcode_progress');
function shortcode_progress($atts, $content = null) {

    $html = '';
    $html .= '<ul class="progress-bar">';
    $html .= do_shortcode( $content );
    $html .= '</ul>';

    return $html;
}

add_shortcode('progress_bar', 'shortcode_progress_bar');
function shortcode_progress_bar($atts, $content = null) {

    $atts = shortcode_atts(array(
        'percentage'  => '100'
    ), $atts );

    return '<li><p>' . $content . '</p><div class="bar-wrap"><span data-width="' . $atts['percentage'] . '"><strong><i>' . $atts['percentage'] . '</i>%</strong> </span></div></li>';
}

//////////////////////////////////////////////////////////////////
// Pricing tables
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
// Pricing table
//////////////////////////////////////////////////////////////////
add_shortcode('pricing_table', 'shortcode_pricing_table');
function shortcode_pricing_table($atts, $content = null) {

    $atts = shortcode_atts(array(
        'active'    => 'no',
		'icon'    => '',
        'title'   => '',
        'price'    => '',
        'currency' => '$',
        'time'     => 'per month',
		'url'	   => '',
		'target'   => '_blank',
		'buy_now_text' => 'Buy Now'
    ), $atts );

    $active = '';
    if( $atts['active'] == 'yes' ){

        $active = ' active';
    }


    $str = '';
    $str .= '<div class="p-table-item' . $active . '">';
    $str .= '<div class="p-table-item-inner">';
    $str .= '<div class="p-table-wrap">';
    
	$str .= '<!-- Icon (Simple-line-icons) -->';
    $str .= '<div class="p-table-icon">';
    $str .= '<i class="' . $atts['icon'] . '"></i>';
    $str .= '</div>';
    $str .= '<!-- Pricing Title -->';
    $str .= '<div class="p-table-title">' . $atts['title'] . '</div>';
    $str .= '<!-- Pricing Title -->';

    $str .= '<!-- Price -->';
    $str .= '<div class="p-table-num">';
    $str .= '<sup>' . $atts['currency'] . '</sup>' . $atts['price'];
    $str .= '</div>';
    $str .= '<div class="p-table-per">' . $atts['time'] . '</div>';
    $str .= '<!--/Price -->';

    $str .= '<!-- Pricing Features -->';
    $str .= '<div class="p-table-features">';
    $str .= '<ul class="p-table-list">';
    $str .= do_shortcode( $content );
    $str .= '</ul>';
    $str .= '</div>';
	
	$str .= '<!-- Button -->';
    $str .= '<div class="p-table-button">';
    $str .= '<a class="clapat-button" href="' . $atts['url'] . '" target="' . $atts['target'] . '">' . $atts['buy_now_text'] . '</a>';
    $str .= '</div>';
    $str .= '<!--/Button -->';
	
    $str .= '</div>';
    $str .= '</div>';
    $str .= '</div>';

    return $str;
}


//////////////////////////////////////////////////////////////////
// Pricing Row
//////////////////////////////////////////////////////////////////
add_shortcode('pricing_row', 'shortcode_pricing_row');
function shortcode_pricing_row($atts, $content = null) {

    $str = '';
    $str .= '<li>';
    $str .= do_shortcode($content);
    $str .= '</li>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Counter
//////////////////////////////////////////////////////////////////
add_shortcode('counters', 'shortcode_counters');
function shortcode_counters($atts, $content = null) {

    $out = '<ul class="clapat-counters">';
    $out .= do_shortcode( $content );
    $out .= '</ul>';

    return $out;
}

add_shortcode('counter', 'shortcode_counter');
function shortcode_counter($atts, $content = null) {

    extract(shortcode_atts(array(
        'counts'	=> '100',
        'fx_effect'	=> 'fade-in',
        'fx_speed'  => '100',
    ), $atts));

    $animation = translate_fx_effect( $atts['fx_effect'] );

    $str = '';
    if( !empty( $animation ) ){

        $str .= '<li class="clapat-counter has-animation" data-animation="' . $animation . '" data-delay="' . $atts['fx_speed'] . '">';
    }
    else{

        $str .= '<li class="clapat-counter>';
    }

    $str .= '<div class="number">' . $atts['counts'] . '</div>';
    $str .= '<div class="subject">' . $content . '</div>';

    $str .= '</li>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Radial Counter
//////////////////////////////////////////////////////////////////
add_shortcode('radial_counter', 'shortcode_radial_counter');
function shortcode_radial_counter($atts, $content = null) {

    $atts = shortcode_atts(
                array(
                    'counts'	=> '100',
                    'title'     => ''
                ), $atts );

    $str = '<div class="radial-counter">';
    $str .= '<input class="knob"  data-gal="' . $atts['counts'] . '" value="0">';
    $str .= '<h5 class="radial-counter-name">' . $atts['title'] . '</h5>';
    $str .= '<p class="radial-counter-info">' . do_shortcode( $content ) . '</p>';
    $str .= '</div>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Parallax Quote
//////////////////////////////////////////////////////////////////
add_shortcode('parallax_quote', 'shortcode_parallax_quote');
function shortcode_parallax_quote($atts, $content = null) {

    $atts = shortcode_atts(array(
        'author' => '',
    ), $atts );

    $str = '<div class="quote">';
    $str .= '<span class="quote-img-left"></span>';
    $str .= do_shortcode( $content );
    $str .= '<span class="quote-img-right"></span>';
    $str .= '</div>';
    $str .= '<p class="quote-author monospace"> - ' . $atts['author'] . ' - </p>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Services
//////////////////////////////////////////////////////////////////
add_shortcode('service', 'shortcode_service');
function shortcode_service($atts, $content = null) {

    $atts = shortcode_atts( array(
                                'title' => '',
                                'icon' => '',
                            ), $atts );

    $out = '';

    $out .= '<div class="service-icon-top">';
    $out .= '<i class="' . $atts['icon'] . '"></i>';
    $out .= '<h6>' . $atts['title'] . '</h6>';
    $out .= '<p>' . do_shortcode( $content ) . '</p>';
    $out .= '</div>';

    return $out;
}

//////////////////////////////////////////////////////////////////
// Big Icon Services
//////////////////////////////////////////////////////////////////
add_shortcode('big_service', 'shortcode_big_service');
function shortcode_big_service($atts, $content = null) {

    $atts = shortcode_atts( array(
                                'title' => '',
                                'icon' => '',
                            ), $atts );

    $out = '';
    $out .= '<div class="services-icon">';
    $out .= '<i class="' . $atts['icon'] . '"></i>';
    $out .= '<div class="service-info-text">';
    $out .= '<h5>' . $atts['title'] . '</h5>';
    $out .= '<p>' . do_shortcode( $content ) . '</p>';
    $out .= '</div>';
    $out .= '</div>';

    return $out;
}

//////////////////////////////////////////////////////////////////
// Fontawesome Icons
//////////////////////////////////////////////////////////////////
add_shortcode('fontawesome_icon', 'shortcode_fontawesome_icon');
function shortcode_fontawesome_icon($atts, $content = null) {

    $atts = shortcode_atts(array(
		'icon' => '',
        'size' => 'none',
		'color' => '#000000'
		), $atts);

    $str = '';

    $icon_size = '';
    if( $atts['size'] != 'none' ){
        $icon_size = "fa-" . $atts['size'];
    }

    $str .= '<i class="'. $atts['icon'] .' '. $icon_size . '" style="color:' . $atts['color'] . ';"></i>';

    return $str;
}

/* End Elements */


/* Media */

//////////////////////////////////////////////////////////////////
// Video Embed
//////////////////////////////////////////////////////////////////
add_shortcode('video_embed', 'shortcode_video_embed');
function shortcode_video_embed($atts, $content = null) {

    $atts = shortcode_atts(array(
        'video_url' 	=> '',
    	'video_type' 	=> 'youtube',
        'cover_img' 	=> '',
    	'cover_img_id' 	=> '',
		'cover_img_alt' => ''
    ), $atts );

    $cover_img_url = clapat_get_image_url( $atts['cover_img_id'], $atts['cover_img'] ); 
    
    $out = '<figure class="' . $atts['video_type'] . '">';
    $out .= '<a href="' . $atts['video_url'] . '">';
    $out .= '<img src="' . $cover_img_url . '" alt="' . $atts['cover_img_alt'] . '" />';
    $out .= '</a>';
    $out .= '</figure>';

    return $out;

}

//////////////////////////////////////////////////////////////////
// Image Popup
//////////////////////////////////////////////////////////////////
add_shortcode('image_popup', 'shortcode_image_popup');
function shortcode_image_popup($atts, $content = null) {

    $atts = shortcode_atts(array(
        'thumb_img_url' => '',
    	'thumb_img_id' => '',
    	'thumb_img_alt' => '',
		'full_img_url' => '',
    	'full_img_id' => ''
    ), $atts );

    $thumb_img_url = clapat_get_image_url( $atts['thumb_img_id'], $atts['thumb_img_url'] );
    $full_img_url  = clapat_get_image_url( $atts['full_img_id'], $atts['full_img_url'] );
    
    return '<a class="gallery clapat-popup-image" href="' . $full_img_url . '"><img src="' . $thumb_img_url . '" alt="' . $atts['thumb_img_alt'] . '"></a>';

}

/* End Media */


/* Sliders */

//////////////////////////////////////////////////////////////////
// General Slider
//////////////////////////////////////////////////////////////////
add_shortcode('general_slider', 'shortcode_general_slider');
function shortcode_general_slider($atts, $content = null) {

    $str = '<div class="classic-slider flexslider">';
    $str .= '<ul class="slides">';
    $str .= do_shortcode( $content );
    $str .= '</ul>';
    $str .= '</div>';

    return $str;
}

add_shortcode('general_slide', 'shortcode_general_slide');
function shortcode_general_slide($atts, $content = null) {

    $atts = shortcode_atts(array(
        'img_url'	=> '',
    	'img_id'    => '',
        'alt'       => '',
    ), $atts );

    $img_url = clapat_get_image_url($atts['img_id'], $atts['img_url']);
    
    $str = '<li>';
	$str .= '<img src="' . $img_url . '" alt="' . $atts['alt'] . '" />';
    $str .= '</li>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Parallax Twitter
//////////////////////////////////////////////////////////////////
add_shortcode('parallax_twitter', 'shortcode_parallax_twitter');
function shortcode_parallax_twitter($atts, $content = null) {

    $atts = shortcode_atts(array(
        'username'  => '',
        'count'     => '3'
    ), $atts );

    $str = '';

    if( function_exists('getTweets') ){

        if( $atts['username'] != '' ){


            $str .= '<div class="twitter-icon"><i class="fa fa-twitter"></i></div>';
            $str .= '<div class="twitter-slider flexslider">';
            $str .= '<div id="twitter-feed"></div>';

            $options = array( "include_rts" => true,
                              "exclude_replies" => false  );

            $tweets = getTweets($atts['username'], $atts['count'], $options);

            if(is_array($tweets)){

                $str .= '<ul class="tweet_list slides">';

                foreach($tweets as $tweet){

                    if($tweet['text']){

                        $the_tweet = $tweet['text'];

                        $the_tweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="http://$1" target="_blank">http://$1</a>&nbsp;', $the_tweet);
                        $the_tweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="http://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $the_tweet);

                        $str .= '<li class="slide">' . $the_tweet . '</li>';
                    }
                }

                $str .= '</ul>';
            }

            $str .= '</div>';
            $str .= '<p class="twitter-name"><a href="http://twitter.com/' . $atts['username'] . '" target="_blank">' . $atts['username'] . '</a></p>';
            $str .= '<div class="twitter-nav"></div>';

            return $str;
        }
        else{

            return __("Please specify the twitter username.", PLUGIN_TEXT_DOMAIN);
        }
    }
    else{

        return __("Please install and activate oAuth Twitter Feed for Developers plugin.", PLUGIN_TEXT_DOMAIN);
    }
}

/* End Sliders */

add_shortcode('cpbg_latest_news', 'shortcode_cpbg_latest_news');
function shortcode_cpbg_latest_news($atts, $content = null) {

    
    $str = '<div class="clapat-latest-news text-align-center">';
	
	global $clapat_bg_theme_options;
	$number_of_posts = 3;
	
	$args = array(
					'post_type' => 'post',
					'posts_per_page' => $number_of_posts
				);
		
    $posts_query = new WP_Query( $args );

    // the loop
	$number_of_posts_displayed = 0;
	global $post;
	while( $posts_query->have_posts() ){

        $posts_query->the_post();
		
		$number_of_posts_displayed++;
		
		$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

		$post_classes = get_post_class('post', $post->ID);
		$classes = '';
		foreach ( $post_classes as $post_class ){
			
			$classes .= $post_class . ' ';
		}
		$str .= '<article id="' . get_the_ID() . '" class=' . $classes . '">';
						
		if( !empty( $post_image[0] )  ){
			
            $str .= '<div class="post-image" style="background-image:url(' . esc_url( $post_image[0] ) . ')"></div>';
        }
        $str .= '<div class="overlay">';
        $str .= '<ul class="meta-categories title-has-line">';
		$str .= '<ul class="clapat-tags">';
		$post_cats = get_the_category( $post->ID );
		foreach( $post_cats as $category ){
			
			$str .= '<li><a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", PLUGIN_TEXT_DOMAIN ), $category->name ) ) . '">'.$category->cat_name.'</a></li>';
		}
        $str .= '</ul>';
        $str .= '</ul>';
                                
		if( $clapat_bg_theme_options['clapat_bg_blog_post_title'] ){
            
			$str .= '<a class="post-title" href="' . get_permalink( $post->ID ) . '">' . get_the_title( $post->ID ) . '</a>';
		}
								
        $str .= '<ul class="entry-meta">';
        $str .= '<li class="entry-date"><a href="' . get_the_permalink( $post->ID ) . '">' . get_the_time('F j, Y', $post->ID ) . '</a></li>';
		if( $clapat_bg_theme_options['clapat_bg_blog_author_info'] ){
			$str .= '<li class="entry-author">' . __("Posted by", PLUGIN_TEXT_DOMAIN ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . get_the_author() .'</a></li>';
		}
		
		$post_tags = get_the_tags( $post->ID );
		
		if( $post_tags ){
			$str .= '<ul class="clapat-tags">';
			foreach( $post_tags as $post_tag ){
				
				$str .= '<li class="entry-tags"><a href="'.get_tag_link( $post_tag->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", PLUGIN_TEXT_DOMAIN ), $post_tag->name ) ) . '">'.$post_tag->name.'</a></li>';
			}
			$str .= '</ul>';
		}
		
        $str .= '</ul>';
        $str .= '</div>';
        $str .= '</article>';
		
		if( $number_of_posts_displayed == $number_of_posts ){
			
			break;
		}
	} //while
	
	wp_reset_postdata();
	
    $str .= '</div>';

    return $str;
}

//////////////////////////////////////////////////////////////////
// Add shortcodes buttons to tinyMCE
//////////////////////////////////////////////////////////////////

add_action('init',          'init_shortcodes_menu');
add_action('admin_init',    'admin_init_shortcodes_menu');
	
function init_shortcodes_menu(){
	
    if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
        return;
	
	// register the tinyMCE buttons in case visual composer is not installed 
	// otherwise just use the shortcodes from there
    if( function_exists('vc_map') ){
    	
    	return;
    }
        
    if ( get_user_option('rich_editing') == 'true' )
    {
        add_filter( 'mce_external_plugins', 'add_shortcode_plugins' );
        add_filter( 'mce_buttons', 'register_shortcode_menu_buttons' );
    }
}
	
function add_shortcode_plugins( $plugin_array ){
	
    $plugin_array['BergerShortcodes'] = BERGER_SHORTCODES_DIR_URL . '/include/shortcodes.js';
    return $plugin_array;
}
	
function register_shortcode_menu_buttons( $buttons ){
	
    array_push( $buttons, "|", 'berger_shortcode_button' );
    return $buttons;
}
	
function admin_init_shortcodes_menu(){
	
    wp_localize_script( 'jquery', 'ShortcodeAttributes', array('shortcode_folder' => BERGER_SHORTCODES_DIR_URL . '/include' ) );
}
