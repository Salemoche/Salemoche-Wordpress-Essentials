<?php
/**
 * Plugin Name:       Salemoche Essentials
 * Plugin URI:        https://github.com/Salemoche/salemoche-blocks
 * Description:       This Plugin contains the essential resources for Salemoche Themes
 * Version:           1.0.0
 * Author:            Gabriel Bach
 * Author URI:        https://inter-action.design/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       salemoche
 * Domain Path:       /languages
 * 
 * @package Salemoche Blocks
 */

// Define Constants
define( 'SALEMOCHE_ESSENTIALS_BLOCK_TEMPLATE_DIR', plugin_dir_path( __FILE__ ) . '/block-templates/');
define( 'SALEMOCHE_ESSENTIALS_CSS_URL', plugin_dir_url( __FILE__ ) . '/assets/build/css' );
define( 'SALEMOCHE_ESSENTIALS_CSS_DIR', plugin_dir_path( __FILE__ ) . '/src/scss' );
define( 'SALEMOCHE_ESSENTIALS_JS_URL', plugin_dir_url( __FILE__ ) . '/assets/build/js' );
define( 'SALEMOCHE_ESSENTIALS_JS_DIR', plugin_dir_path( __FILE__ ) . '/src/js' );
define( 'SALEMOCHE_ESSENTIALS_BUILD_URL', plugin_dir_url( __FILE__ ) . '/assets/build' );
define( 'SALEMOCHE_ESSENTIALS_BUILD_DIR', plugin_dir_path( __FILE__ ) . '/assets/build' );
define( 'SALEMOCHE_TEMPLATE_PARTS_DIR', plugin_dir_path( __FILE__ ) . '/block-templates/template_parts' ); //include_once( SALEMOCHE_TEMPLATE_PARTS_DIR . '/test.php' )

// Define Plugin Settings
define( 'SHOW_SM_GRID', false ); //include_once( SALEMOCHE_TEMPLATE_PARTS_DIR . '/test.php' )

// Helpers
require_once 'inc/helpers/helpers.php';

// File Includes
include_once 'inc/classes/class-smb-block-categories.php';
include_once 'inc/classes/class-smb-register-block.php';
include_once 'inc/classes/class-sm-grid.php';
include_once 'inc/classes/class-sm-assets.php';