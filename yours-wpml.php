<?php

/**
 *
 * @link              http://www.yours.be
 * @since             1.0
 * @package           Yours_Wpml
 *
 * @wordpress-plugin
 * Plugin Name:       Yours WPML
 * Plugin URI:        http://www.yours.be/plugins/yours-wpml
 * Description:       Lock content that is set by a translated resource.
 * Version:           1.0.6
 * Author:            Laurent Snackaert
 * Author URI:        http://www.yours.be
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       yours-wpml
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/emetik/wp-plugins/
 * GitHub Branch:     master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-yours-wpml-activator.php
 */
function activate_yours_wpml() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yours-wpml-activator.php';
	Yours_Wpml_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-yours-wpml-deactivator.php
 */
function deactivate_yours_wpml() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-yours-wpml-deactivator.php';
	Yours_Wpml_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_yours_wpml' );
register_deactivation_hook( __FILE__, 'deactivate_yours_wpml' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-yours-wpml.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_yours_wpml() {

	$plugin = new Yours_Wpml();
	$plugin->run();

}
run_yours_wpml();
