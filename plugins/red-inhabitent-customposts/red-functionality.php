<?php
 /**
 *
 * @package   Inhabitent Custom Posts
 * @author    Jun C Li <kevinjcli@hotmail.com>
 * @license   GPL-2.0+
 * @copyright 2015 Your Name or Company
 *
 * @wordpress-plugin
 * Plugin Name: Inhabitent Custom Posts
 * Description: This plugin adds the ability to make Adventures posts and Shopping posts that are independent of regular posts.
 * Version:     1.0.0
 * Author:      Jun C Li
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'RF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'RF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( RF_DIR . '/lib/functions/taxonomies.php' );
