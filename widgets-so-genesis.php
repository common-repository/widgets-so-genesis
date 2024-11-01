<?php
/**
 * Plugin Name: Widgets for Genesis Framework
 * Plugin URI: https://github.com/closemarketing/genesis-so-widgets
 * Description: Widgets that you could need in your Genesis Framework web.
 * Author: closemarketing
 * Author URI: https://www.closemarketing.es
 * Version: 1.1
 *
 * Text Domain: widgets-so-genesis
 *
 * Domain Path: /languages
 *
 * @package WordPress
 *
 * License: GNU General Public License version 3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined( 'ABSPATH' ) || exit;

// Loads translation.
load_plugin_textdomain( 'widgets-so-genesis', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

// * Button Android
require_once plugin_dir_path( __FILE__ ) . 'widgets/buttand.php';

// * Button iOS
require_once plugin_dir_path( __FILE__ ) . 'widgets/buttios.php';

// * Button iOS
require_once plugin_dir_path( __FILE__ ) . 'widgets/buttoncta.php';

// * Child pages menu
require_once plugin_dir_path( __FILE__ ) . 'widgets/childmenu.php';

// * Contact Info
require_once plugin_dir_path( __FILE__ ) . 'widgets/contactinfo.php';

// * Embed Object/Video
require_once plugin_dir_path( __FILE__ ) . 'widgets/embed.php';

// * Last Posts with image
require_once plugin_dir_path( __FILE__ ) . 'widgets/latestimgposts.php';

// * Social Icons from Yoast
require_once plugin_dir_path( __FILE__ ) . 'widgets/social-icons.php';

/**
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) {

	// * WooCommerce Category with Images
	require_once plugin_dir_path( __FILE__ ) . 'widgets/woocatimg.php';

	// * WooCommerce Widget Product
	require_once plugin_dir_path( __FILE__ ) . 'widgets/woofeatured.php';
}
