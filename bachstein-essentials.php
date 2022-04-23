<?php
/**
 * Plugin Name:       Bachstein Essentials
 * Plugin URI:        https://bachstein.ch/
 * Description:       This Plugin contains the essential resources for Bachstein Themes
 * Version:           1.0.0
 * Author:            Gabriel Bach
 * Author URI:        https://bachstein.ch/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       salemoche
 * Domain Path:       /languages
 * 
 * @package Salemoche Blocks
 */

// Define Constants
define( 'BACHSTEIN_BLOCK_TEMPLATE_DIR', plugin_dir_path( __FILE__ ) . '/block-templates/');
define( 'BACHSTEIN_TEMPLATE_DIR', plugin_dir_path( __FILE__ ) . '/templates/');
// define( 'SALEMOCHE_ESSENTIALS_CSS_URL', plugin_dir_url( __FILE__ ) . '/assets/build/css' );
// define( 'SALEMOCHE_ESSENTIALS_CSS_DIR', plugin_dir_path( __FILE__ ) . '/src/scss' );
// define( 'SALEMOCHE_ESSENTIALS_JS_URL', plugin_dir_url( __FILE__ ) . '/assets/build/js' );
// define( 'SALEMOCHE_ESSENTIALS_JS_DIR', plugin_dir_path( __FILE__ ) . '/src/js' );

// Helpers
require_once 'inc/helpers/helpers.php';

// File Includes
include_once 'inc/classes/class-plugin.php';
include_once 'inc/classes/class-assets.php';
include_once 'inc/classes/class-custom-fields.php';
include_once 'inc/classes/class-blocks.php';