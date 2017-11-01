<?php

$fx_effects = array('fade', 'fade-from-left', 'fade-from-right', 'fade-from-bottom', 'none');
$caption_position = array( 	'center-center',
							'center-left',
							'center-right',
							'bottom-center',
							'bottom-left',
							'bottom-right',
							'top-center',
							'top-left',
							'top-right',
						);
$content_type = array( 'dark', 'light' );					
$text_align = array('text-align-left', 'text-align-center', 'text-align-right' );



$clapat_shortcodes = array(

	//columns
    'one_half' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'one_third' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'one_fourth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'one_fifth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'one_sixth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'two_third' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'two_fifth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'three_fourth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'three_fifth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'four_fifth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),

    'five_sixth' => array(
        'name' => __('Column', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $text_align
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),
    // end columns
     
	// typo elements
	'title' => array(
        'name' => __('Title', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'size' => array( 'title' => __('Title Size', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')
            ),
            'underline' => array( 'title' => __('Has Underline?', PLUGIN_TEXT_DOMAIN),
                'desc' => __('If the title is underlined or not', PLUGIN_TEXT_DOMAIN),
                'type' => 'select',
                'values' => array('no', 'yes')
            )
        ),
        'has_content' => true,
        'default_content' => __('Title', PLUGIN_TEXT_DOMAIN)
    ),
    
    'subtitle' => array(
        'name' => __('Subtitle', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'underline' => array( 'title' => __('Has Underline?', PLUGIN_TEXT_DOMAIN),
                'desc' => __('If the subtitle is underlined or not', PLUGIN_TEXT_DOMAIN),
                'type' => 'select',
                'values' => array('no', 'yes')
            )
        ),
        'has_content' => true,
        'default_content' => __('Subtitle', PLUGIN_TEXT_DOMAIN)
    ),
    
    'hr' => array(
        'name' => __('Line Divider', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'size' => array( 'title' => __('Size', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('normal', 'small')
            )
        ),
        'has_content' => false
    ),
    
    'button' => array(
        'name' => __('Button', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            "link" => array(    "title" => __("Button Link", PLUGIN_TEXT_DOMAIN),
                "desc"  => __("URL for the button", PLUGIN_TEXT_DOMAIN),
                "type"  => "text",
                "default" => "http://"
            ),
            "target" => array(  "title" => __("Target Window", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Button link opens in a new or current window", PLUGIN_TEXT_DOMAIN),
                "type" => "select",
                "values" => array("_blank", "_self")
            ),
            "type" => array( "title" => __("Button type", PLUGIN_TEXT_DOMAIN),
                "desc" => "",
                "type" => "select",
                "values" => array("normal", "outline")
            )
        ),
        'has_content' => true,
		'default_content' => __('Button Caption', PLUGIN_TEXT_DOMAIN)
    ),
    // end typo elements
    
    // content elements
    'berger_section_parallax' => array(
        'name' => __('Section Parallax', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'id' => array( 'title' => __('Section Id', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            ),
            "background_image" => array( "title" => __("Background image URI", PLUGIN_TEXT_DOMAIN),
                "desc"  => __("URI of the parallax background image", PLUGIN_TEXT_DOMAIN),
                "type"  => "text",
                "default" => "http://"
            ),
            'overlay_color' => array( 'title' => __('Parallax Image Overlay Color', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Overlay color as hexadecimal value', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => '#FFFFFF'
            ),
            'overlay_color_opacity' => array( 'title' => __('Parallax Image Overlay Color Opacity', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => '0.0'
            ),
			'padding_top' => array( 'title' => __('Padding Top', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Top padding of the section, in pixels.', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => ''
            ),
			'padding_bottom' => array( 'title' => __('Padding Bottom', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Bottom padding of the section, in pixels.', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => ''
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', PLUGIN_TEXT_DOMAIN)
    ),
    // end content elements 
    
    // elements
    'animated_div' => array(
        'name' => __('Animated Div', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'fx_effect' => array( 'title' => __('FX effect', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => $fx_effects
            ),
            'fx_speed' => array(  'title' => __('FX speed', PLUGIN_TEXT_DOMAIN),
                "desc" => __('FX animation speed', PLUGIN_TEXT_DOMAIN),
                "type" => 'text',
                "default" => '100'
            ),
        ),
        'has_content' => true,
        'default' => 'Content goes here'
    ),
    
    'accordion' => array(
        'name' => __('Accordion', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'accordion_item' => array(  'name' => __('Accordion Item', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                    'title' => array( 'title' => __('Title', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => __('Accordion Title', PLUGIN_TEXT_DOMAIN)
                    )
                ),
                'has_content' => true,
                'default_content' => __('Accordion Content Here', PLUGIN_TEXT_DOMAIN)
            )
        ),
        'has_content' => false
    ),
    
    'tabs' => array(    'name' => __('Tabs', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'tab_item' => array(  'name' => __('Tab Item', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                    'tab_name' => array( 'title' => __('Tab Name', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => __('Tab Title', PLUGIN_TEXT_DOMAIN)
                    )
                ),
                'has_content' => true,
                'default_content' => __('Tab Content Here', PLUGIN_TEXT_DOMAIN)
            )
        ),
        'has_content' => false
    ),
    
    'toggle' => array(
        'name' => __('Toggle', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'title' => array( 'title' => __('Title', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            )
        ),
        'has_content' => true,
        'default_content' => __('Toggle Content Here', PLUGIN_TEXT_DOMAIN)
    ),
    
    'team' => array(
        'name' => __('Team Members', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'team_member' => array(  'name' => __('Team Member', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                    'name' => array( 'title' => __('Team Member Name', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Job Title', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'picture' => array( 'title' => __('Picture', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('URL or path to team member\'s picture', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_icon1' => array( 'title' => __('Social Icon 1', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'icon',
                    	'default' => 'fa fa-facebook'
                    ),
                    'social_link1_url' => array( 'title' => __('Social Link 1 URL', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_icon2' => array( 'title' => __('Social Icon 2', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'icon',
                    	'default' => 'fa fa-twitter'
                    ),
                    'social_link2_url' => array( 'title' => __('Social Link 2 URL', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_icon3' => array( 'title' => __('Social Icon 1', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'icon',
                    	'default' => 'fa fa-linkedin'
                    ),
                    'social_link3_url' => array( 'title' => __('Social Link 3 URL', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'require_icon' => true,
                'default_content' => __('Team member description', PLUGIN_TEXT_DOMAIN)
            )
        ),
        'has_content' => false,
    ),
    
    'alert' => array(
        'name' => __('Alert Box', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'color' => array( 'title' => __('Color', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Background color for the alert box', PLUGIN_TEXT_DOMAIN),
                'type' => 'select',
                'values' => array("red", "blue", "yellow", "green")
            )
        ),
        'has_content' => true,
        'default_content' => __('YOUR MESSAGE HERE', PLUGIN_TEXT_DOMAIN)
    ),
    
    'progress' => array(
        'name' => __('Progress Bars', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'progress_bar' => array(  'name' => __('Progress Bar', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                    'percentage' => array( 'title' => __('Percentage', PLUGIN_TEXT_DOMAIN),
                        'desc' => 'Progress Bar Percentage',
                        'type' => 'text',
                        'default' => '100'
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Web Design', PLUGIN_TEXT_DOMAIN)
            )
        ),
        'has_content' => false,
    ),
    
    'pricing_table' => array(  'name' => __('Pricing Table', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'pricing_row' => array( 
								'name' => __('Pricing Row', PLUGIN_TEXT_DOMAIN),
								'has_content' => true,
								'default_content' => __('Info about priced services here.', PLUGIN_TEXT_DOMAIN)
							)
						),
		'attributes' => array(
                    'active' => array( 'title' => __('Active', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('If the pricing table is highlighted or not',  PLUGIN_TEXT_DOMAIN),
                        'type' => 'select',
                        'values' => array('no', 'yes')
                    ),
                    'icon' => array( 'title' => __('Icon', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'icon',
                        'default' => ''
                    ),
					'title' => array( 'title' => __('Title', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Pricing table title. Usually the name of the category of services being priced', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => ''
                    ),
					'price' => array( 'title' => __('Price', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Price for the services being offered', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => '99.99'
                    ),
					'currency' => array( 'title' => __('Currency', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Pricing table title. Usually the name of the category of services being priced', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => '$'
                    ),
					'time' => array( 'title' => __('Time', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Period of time the price is applied for', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => 'per month'
                    ),
					'url' => array( 'title' => __('Details URL', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Url offering more detils about the service(s)', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => 'http://'
                    ),
					'target' => array( 'title' => __('Details URL target', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Target window for details URL',  PLUGIN_TEXT_DOMAIN),
                        'type' => 'select',
                        'values' => array('_blank', '_self')
                    ),
					'buy_now_text' => array( 'title' => __('Buy Now Caption', PLUGIN_TEXT_DOMAIN),
                        'desc' => __('Caption or slogan for the button displayed at the bottom of the pricing table', PLUGIN_TEXT_DOMAIN),
                        'type' => 'text',
                        'default' => 'Buy Now'
                    )
                ),
		'require_icon' => true,			
        'has_content' => false
    ),
    
    'counters' => array(
        'name' => __('Counters', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'counter' => array(
                'name' => __('Counter Box', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                                "counts" => array(  "title" => __("Counts", PLUGIN_TEXT_DOMAIN),
                                    "desc" => __("Number of counts", PLUGIN_TEXT_DOMAIN),
                                    "type" => "text",
                                    "default" => "100"
                                ),
                                'fx_effect' => array( 'title' => __('FX effect', PLUGIN_TEXT_DOMAIN),
                                    'desc' => '',
                                    'type' => 'select',
                                    'values' => $fx_effects
                                ),
                                'fx_speed' => array(  'title' => __('FX speed', PLUGIN_TEXT_DOMAIN),
                                    "desc" => __('FX animation speed', PLUGIN_TEXT_DOMAIN),
                                    "type" => 'text',
                                    "default" => '100'
                                ),
                ),
                'has_content' => true,
                'default_content' => __('TITLE GOES HERE', PLUGIN_TEXT_DOMAIN)
            ),
        )
    ),
    
    'radial_counter' => array(
        'name' => __('Radial Counter Box', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            "counts" => array(  "title" => __("Counts", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Number of counts", PLUGIN_TEXT_DOMAIN),
                "type" => "text",
                "default" => "100"
            ),
            "title" => array(  "title" => __("Title", PLUGIN_TEXT_DOMAIN),
                "desc" => "",
                "type" => "text",
                "default" => ""
            )
        ),
        'has_content' => true,
        'default_content' => __('DESCRIPTION GOES HERE', PLUGIN_TEXT_DOMAIN)
    ),
    
    'parallax_quote' => array(
        'name' => __('Parallax Quote', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(  'author' => array( 'title' => __('Author', PLUGIN_TEXT_DOMAIN),
            'desc' => __('Author of the quote', PLUGIN_TEXT_DOMAIN),
            'type' => 'text',
            'default' => 'John Doe'
        )
        ),
        'has_content' => true,
        'default_content' => __('The Quote Here', PLUGIN_TEXT_DOMAIN )
    ),
    
    'service' => array(
        'name' => __('Service Box', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            "icon" => array(  "title" => __("Icon", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Icon displayed within service box", PLUGIN_TEXT_DOMAIN),
                "type" => "icon",
                "default" => ""
            ),
            "title" => array(  "title" => __("Service Title", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Title of the service", PLUGIN_TEXT_DOMAIN),
                "type" => "text",
                "default" => ""
            )
        ),
        'require_icon' => true,
        'has_content' => true,
        'default_content' => __('Service Description', PLUGIN_TEXT_DOMAIN)
    ),
    
    'big_service' => array(
        'name' => __('Big Service Box', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            "icon" => array(  "title" => __("Icon", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Icon displayed within service box", PLUGIN_TEXT_DOMAIN),
                "type" => "icon",
                "default" => ""
            ),
            "title" => array(  "title" => __("Service Title", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Title of the service", PLUGIN_TEXT_DOMAIN),
                "type" => "text",
                "default" => ""
            )
        ),
        'require_icon' => true,
        'has_content' => true,
        'default_content' => __('Service Description', PLUGIN_TEXT_DOMAIN)
    ),
    
    'fontawesome_icon' => array(
        'name' => __('FontAwesome Icon', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            "icon" => array(  "title" => __("Icon", PLUGIN_TEXT_DOMAIN),
                "desc" => __('Cannot find the icon in the list? You can type directly the name of the icon in the edit box. The complete and latest list: <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">http://fortawesome.github.io/Font-Awesome/icons/</a>', PLUGIN_TEXT_DOMAIN),
                "type" => "icon",
                "default" => ""
            ),
            "size" => array(  "title" => __("Size", PLUGIN_TEXT_DOMAIN),
                "desc" => __('Icon size relative to their container. See <a href="http://fortawesome.github.io/Font-Awesome/examples/#larger" target="_blank">http://fortawesome.github.io/Font-Awesome/examples/#larger</a> for more information', PLUGIN_TEXT_DOMAIN),
                "type" => "select",
                "values" => array('none', 'lg', '2x', '3x', '4x', '5x')
            ),
            "color" => array(  "title" => __("Color", PLUGIN_TEXT_DOMAIN),
                "desc" => __("Icon color", PLUGIN_TEXT_DOMAIN),
                "type" => "text",
                "default" => "#000000"
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),
    // end elements
    
    //media
    'video_embed' => array(
        'name' => __('Video Embed', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
            'video_url' => array( 'title' => __('Video URL', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => 'http://'
            ),
            'video_type' => array( 'title' => __('Video Type', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'select',
                'values' => array('youtube', 'vimeo')
            ),
            'cover_img' => array( 'title' => __('Video Cover Image URL', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => 'http://'
            ),
            'cover_img_alt' => array( 'title' => __('Video Cover Image ALT', PLUGIN_TEXT_DOMAIN),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            )
        ),
        'has_content' => false
    ),
    'image_popup' => array(
        'name' => __('Image Popup', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(
    		'thumb_img_url' => array( 'title' => __('Thumbnail Image URL', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Image thumbnail displayed in the page', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => 'http://'
            ),
            'thumb_img_alt' => array( 'title' => __('Thumbnail Image URL', PLUGIN_TEXT_DOMAIN),
                'desc' => __('ALT attribute of the image thumbnail', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => 'image'
            ),
            'full_img_url' => array( 'title' => __('Image URL', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Full image displayed in the pop-up', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => 'http://'
            ),
        ),
        'has_content' => false
    ),
    //end media
    
    //sliders
    'general_slider' => array(
        'name' => __('Normal Image Slider', PLUGIN_TEXT_DOMAIN),
        'sub_items' => array(
            'general_slide' => array(  'name' => __('Slide', PLUGIN_TEXT_DOMAIN),
                'attributes' => array(
                    'img_url' => array( 'title' => __('Slider Image URL', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'alt' => array( 'title' => __('Image ALT', PLUGIN_TEXT_DOMAIN),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => false
            )
        ),
        'has_content' => false
    ),
    
    'parallax_twitter' => array(
        'name' => __('Twitter Parallax Box', PLUGIN_TEXT_DOMAIN),
        'attributes' => array(  'count' => array( 'title' => __('Tweets Count', PLUGIN_TEXT_DOMAIN),
            'desc' => __('Number of tweets to display', PLUGIN_TEXT_DOMAIN),
            'type' => 'text',
            'default' => '5'
        ),
            'username' => array( 'title' => __('Twitter username', PLUGIN_TEXT_DOMAIN),
                'desc' => __('Twitter account name', PLUGIN_TEXT_DOMAIN),
                'type' => 'text',
                'default' => ''
            ),
        ),
        'has_content' => false,
    ),
    //end sliders
    
);

?>