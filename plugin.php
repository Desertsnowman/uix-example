<?php
/**
 * @package   uix
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2015 David Cramer
 *
 * @wordpress-plugin
 * Plugin Name: UIX
 * Plugin URI:  http://CalderaWP.com
 * Description: UI eXample for using Javascript User Interfaces
 * Version:     1.0.0
 * Author:      David Cramer
 * Author URI:  https://CalderaWP.com
 * Text Domain: uix
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('UIX_EX_PATH',  plugin_dir_path( __FILE__ ) );
define('UIX_EX_CORE',  __FILE__ );
define('UIX_EX_URL',  plugin_dir_url( __FILE__ ) );
define('UIX_EX_VER',  '1.0.0' );

// Load instance
add_action( 'plugins_loaded', 'uix_bootstrap' );
function uix_bootstrap(){
	// include the library
	include_once UIX_EX_PATH . 'uix/uix.php';
	// get the pages
	$pages = include UIX_EX_PATH . 'templates/pages.php';

	// initialize admin UI
	\myplugin\ui\uix::get_instance( $pages );
}