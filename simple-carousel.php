<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              pauldariye.com
 * @since             1.0.0
 * @package           Simple_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Carousel
 * Plugin URI:        products.pauldariye.com/simple-carousel
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Paul Dariye
 * Author URI:        pauldariye.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simple-carousel-activator.php
 */
function activate_simple_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-carousel-activator.php';
	Simple_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simple-carousel-deactivator.php
 */
function deactivate_simple_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-carousel-deactivator.php';
	Simple_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simple_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_simple_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simple-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simple_carousel() {

	$plugin = new Simple_Carousel();
	$plugin->run();

}
run_simple_carousel();
