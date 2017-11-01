(function() {
    tinymce.create('tinymce.plugins.BergerShortcodes', {
        init : function(ed, url) {
            ed.addButton('berger_shortcode_button', {
				type: 'menubutton',
				text: 'B',
				title: 'Insert Berger Shortcode',
                icon: false,
				
				menu: [
				
					// Typo Elements
					{
						text: 'Typo Elements',
						menu: [
						
							{
								text: 'Title',
								onclick: function () {
									tb_show("Add Title", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=title&width=700&height=600');
								}
							},
							
							{
								text: 'Subtitle',
								onclick: function () {
									tb_show("Add Subtitle", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=subtitle&width=700&height=600');
								}
							},
							
							{
								text: 'Breaking Line',
								onclick: function () {
									ed.insertContent('[br]');
								}
							},
							
							{
								text: 'Line Divider',
								onclick: function () {
									tb_show("Add Line Divider", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=hr&width=700&height=600');
								}
							},
							
							{
								text: 'Buttons',
								onclick: function () {
									tb_show("Add Button", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=button&width=700&height=600');
								}
							},
							
							{
								text: 'Space Between Buttons',
								onclick: function () {
									ed.insertContent('[space_between_buttons]');
								}
							},
							
						]
					},
					
					
					// Content Elements
					{
						text: 'Content Elements',
						menu: [
						
							{
								text: 'Parallax Section',
								onclick: function () {
									tb_show("Add Page Section With Parallax Effect", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=berger_section_parallax&width=700&height=600');
								}
							},
							
							{
								text: 'Padding Box',
								onclick: function () {
									ed.insertContent('[padding_box]CONTENT HERE[/padding_box]');
								}
							},
							
							{
								text: 'Latest News',
								onclick: function () {
									ed.insertContent('[cpbg_latest_news]');
								}
							},
							
						]
					},
					
					// Columns
					{
						text: 'Columns',
                        
						menu: [
						
							{
								text: 'One Half',
								onclick: function () {
									tb_show("Add One Half Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=one_half&width=400&height=500');
								}
							},
							
							{
								text: 'One Third',
								onclick: function () {
									tb_show("Add One Third Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=one_third&width=400&height=500');
								}
							},
							
							{
								text: 'One Fourth',
								onclick: function () {
									tb_show("Add One Fourth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=one_fourth&width=400&height=500');
								}
							},
							
							{
								text: 'One Fifth',
								onclick: function () {
									tb_show("Add One Fifth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=one_fifth&width=400&height=500');
								}
							},
							
							{
								text: 'One Sixth',
								onclick: function () {
									tb_show("Add One Sixth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=one_sixth&width=400&height=500');
								}
							},

							{
								text: 'Two Third',
								onclick: function () {
									tb_show("Add Two Third Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=two_third&width=400&height=500');
								}
							},

							{
								text: 'Two Fifth',
								onclick: function () {
									tb_show("Add Two Fifth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=two_fifth&width=400&height=500');
								}
							},

							{
								text: 'Three Fourth',
								onclick: function () {
									tb_show("Add Three Fourth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=three_fourth&width=400&height=500');
								}
							},

							{
								text: 'Three Fifth',
								onclick: function () {
									tb_show("Add Three Fifth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=three_fifth&width=400&height=500');
								}
							},

							{
								text: 'Four Fifth',
								onclick: function () {
									tb_show("Add Four Fifth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=four_fifth&width=400&height=500');
								}
							},

							{
								text: 'Five Sixth',
								onclick: function () {
									tb_show("Add Five Sixth Column", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=five_sixth&width=400&height=500');
								}
							}
							
						]
					},
					
					// Elements
					{
						text: 'Elements',
                        menu: [
							{
                                text: 'Animated Div',
                                onclick: function () {
                                    tb_show("Add Animated Div", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=animated_div&width=400&height=500');
                                }
                            },
                            
                            {
   								text: 'Pop-up Image',
   								onclick: function () {
   									tb_show("Add Pop-up Image", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=image_popup&width=400&height=500');
   								}
   							},
							
							{
								text: 'Accordions',
								onclick: function () {
										tb_show("Add Accordion", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=accordion&width=700&height=600');
								}
							},
							
							{
								text: 'Tabs',
								onclick: function () {
									tb_show("Add Tab", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=tabs&width=700&height=600');
								}
							},
							
							{
								text: 'Toggles',
								onclick: function () {
									tb_show("Add Toggle", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=toggle&width=700&height=600');
								}
							},

							{
								text: 'Team Member',
								onclick: function () {
									tb_show("Add Team Member", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=team&width=700&height=600');
								}
							},
							
							{
								text: 'Alert Box',
								onclick: function () {
									tb_show("Add Alert Box", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=alert&width=400&height=500');
								}
							},
							
							{
								text: 'Progress Bar',
								onclick: function () {
									tb_show("Add Progress Bar", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=progress&width=700&height=600');
								}
							},
							
							{
								text: 'Pricing Table',
								onclick: function () {
									tb_show("Add Pricing Table", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=pricing_table&width=700&height=600');
								}
							},
							
							{
								text: 'Counters',
								onclick: function () {
									tb_show("Add Counters Box", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=counters&width=400&height=500');
								}
							},
							
							{
								text: 'Radial Counter',
								onclick: function () {
									tb_show("Add Radial Counter Box", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=radial_counter&width=400&height=500');
								}
							},
							
							{
								text: 'Big Quote',
								onclick: function () {
									tb_show("Add Parallax Quote", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=parallax_quote&width=400&height=500');
								}
							},
							
							{
								text: 'Icon Service',
								onclick: function () {
									tb_show("Add Service Box", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=service&width=400&height=500');
								}
							},
							
							{
								text: 'Big Icon Service',
								onclick: function () {
									tb_show("Add Big Icon Service Box", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=big_service&width=400&height=500');
								}
							},
							
							{
								text: 'FontAwesome Icon',
								onclick: function () {
									tb_show("Add FontAwesome Icon", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=fontawesome_icon&width=400&height=500');
								}
							},
														
						]
					},
					
					{
						text: 'Media',
                        menu: [
						

   							{
   								text: 'Pop-up Image',
   								onclick: function () {
   									tb_show("Add Pop-up Image", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=image_popup&width=400&height=500');
   								}
   							},
   							
							{
								text: 'Video Embed',
								onclick: function () {
									tb_show("Add Video Embed", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=video_embed&width=400&height=500');
								}
							},
							
						]
					},
					
					{
						text: 'Sliders',
                        menu: [
						
							{
								text: 'General Slider',
								onclick: function () {
									tb_show("Add General Slider", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=general_slider&width=700&height=600');
								}
							},
							
							{
								text: 'Twitter Slider',
								onclick: function () {
									tb_show("Add Tweets Slider", ShortcodeAttributes.shortcode_folder + '/shortcodes_popup.php?&sc=parallax_twitter&width=400&height=500');
								}
							}
						]
					}
					
				]
            });
             
        },
        
		getInfo: function () {
            return {
        
				longname: 'Berger Shortcodes',
                author: 'Clapat Studio',
                authorurl: 'http://themeforest.net/user/clapat/',
                infourl: 'http://clapat.ro/themes/berger-wordpress/',
                version: "1.0"
            }
        }
    });
    // Register plugin
    tinymce.PluginManager.add( 'BergerShortcodes', tinymce.plugins.BergerShortcodes );
})();