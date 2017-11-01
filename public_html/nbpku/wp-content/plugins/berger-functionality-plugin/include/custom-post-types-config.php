<?php
/**
 * Created by Clapat
 * Date: 29/05/14
 * Time: 4:58 AM
 */

// Register custom post types
if ( ! function_exists( 'clapat_bg_custom_types' ) ){

    function clapat_bg_custom_types() {

        global $clapat_bg_theme_options;

        $custom_slug = null;
		if( isset($clapat_bg_theme_options['clapat_bg_portfolio_custom_slug']) && !empty($clapat_bg_theme_options['clapat_bg_portfolio_custom_slug']) )
            $custom_slug = $clapat_bg_theme_options['clapat_bg_portfolio_custom_slug'];
		
        register_post_type(
            'berger_portfolio',
            array(
                'labels' => array(
                    'name' => __('Portfolio', PLUGIN_TEXT_DOMAIN),
                    'singular_name' => __('Portfolio', PLUGIN_TEXT_DOMAIN),
                    'all_items' => __('Portfolio Items', PLUGIN_TEXT_DOMAIN),
                    'add_new' => __( 'Add New', PLUGIN_TEXT_DOMAIN ),
                    'add_new_item' => __( 'Add New Portfolio Item', PLUGIN_TEXT_DOMAIN ),
                    'edit_item' => __( 'Edit Portfolio Item', PLUGIN_TEXT_DOMAIN ),
                    'new_item' => __( 'New Portfolio Item', PLUGIN_TEXT_DOMAIN ),
                    'view_item' => __( 'View Portfolio Item', PLUGIN_TEXT_DOMAIN ),
                    'search_items' => __( 'Search Portfolio Items', PLUGIN_TEXT_DOMAIN ),
                    'not_found' => __( 'No portfolio items found', PLUGIN_TEXT_DOMAIN ),
                    'not_found_in_trash' => __( 'No portfolio items found in Trash', PLUGIN_TEXT_DOMAIN ),
                    'menu_name' => __( 'Portfolio', PLUGIN_TEXT_DOMAIN ),
                ),
                'rewrite' => array('slug' => $custom_slug, 'with_front' => false),
                'description' => 'Add your Portfolio',
                'menu_icon' =>  'dashicons-portfolio',
                'public' => true,
                'supports' => array('title', 'editor', 'thumbnail'),
            )
        );

        register_taxonomy('portfolio_category', 'berger_portfolio', array('hierarchical' => true, 'label' => __('Categories', PLUGIN_TEXT_DOMAIN), 'query_var' => true, 'rewrite' => true));

        register_post_type(
            'berger_main_slider',
            array(
                'labels' => array(
                    'name' => __('Main Slider', PLUGIN_TEXT_DOMAIN),
                    'singular_name' => __('Main Slider', PLUGIN_TEXT_DOMAIN),
                    'all_items' => __('Slides', PLUGIN_TEXT_DOMAIN),
                    'add_new' => __( 'Add New', PLUGIN_TEXT_DOMAIN ),
                    'add_new_item' => __( 'Add New Slide', PLUGIN_TEXT_DOMAIN ),
                    'edit_item' => __( 'Edit Slide', PLUGIN_TEXT_DOMAIN ),
                    'new_item' => __( 'New Slide', PLUGIN_TEXT_DOMAIN ),
                    'view_item' => __( 'View Slide', PLUGIN_TEXT_DOMAIN ),
                    'search_items' => __( 'Search Slides', PLUGIN_TEXT_DOMAIN ),
                    'not_found' => __( 'No slides found', PLUGIN_TEXT_DOMAIN ),
                    'not_found_in_trash' => __( 'No slides found in Trash', PLUGIN_TEXT_DOMAIN ),
                    'menu_name' => __( 'Main Slider', PLUGIN_TEXT_DOMAIN ),
                ),
                'public'             => false,
                'publicly_queryable' => false,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'menu_icon'          => 'dashicons-images-alt',
                'supports' => array('title', 'editor'),
            )
        );
    }

}
add_action('init', 'clapat_bg_custom_types');


// refresh rewrite rules for custom portfolio slugs
if ( ! function_exists( 'clapat_bg_activation_hook' ) ){

    function clapat_bg_activation_hook() {

		clapat_bg_custom_types();
		
        flush_rewrite_rules();
    }
}
register_activation_hook( __FILE__, 'clapat_bg_activation_hook' );


?>
