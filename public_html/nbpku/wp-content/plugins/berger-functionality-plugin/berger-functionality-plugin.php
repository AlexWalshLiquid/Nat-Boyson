<?php
/*
Plugin Name: Berger Functionality Plugin
Plugin URI: http://themeforest.net/user/ClaPat/portfolio
Description: Shortcodes and Custom Post Types for Berger WordPress Themes
Version: 1.2
Author: Clapat
Author URI: http://themeforest.net/user/ClaPat/
*/

if( !defined('BERGER_SHORTCODES_DIR_URL') ) define('BERGER_SHORTCODES_DIR_URL', plugin_dir_url(__FILE__));
if( !defined('BERGER_SHORTCODES_DIR') ) define('BERGER_SHORTCODES_DIR', plugin_dir_path(__FILE__));
define('PLUGIN_TEXT_DOMAIN', 'berger-shortcodes');

// load plugin's text domain
add_action( 'plugins_loaded', 'berger_shortcodes_load_textdomain' );
function berger_shortcodes_load_textdomain() {
    load_plugin_textdomain( PLUGIN_TEXT_DOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/include/langs' );
}

// custom post types
require_once( BERGER_SHORTCODES_DIR . '/include/custom-post-types-config.php' );

// trent shortcodes
require_once( BERGER_SHORTCODES_DIR . '/include/shortcodes.php' );

?>