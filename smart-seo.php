<?php
/**
 * Plugin Name: Smart SEO
 * Description: Optimizes WordPress for better ranking in Google and other Search Engines
 * Plugin URI: https://dedidata.com
 * Author: DediData
 * Author URI: https://dedidata.com
 * Version: 2.0.1
 * Requires at least: 6.0
 * Tested up to: 6.4
 * Requires PHP: 7.0
 * License: GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: smart-seo
 *
 * @package Smart_Seo
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( '\DediData\Plugin_Autoloader' ) ) {
	require 'includes/DediData/class-plugin-autoloader.php';
}
// Set name spaces we use in this plugin
new \DediData\Plugin_Autoloader( array( 'DediData', 'SmartSeo' ) );
/**
 * The function SMART_SEO returns an instance of the Smart_Seo class.
 *
 * @return object an instance of the \SmartSeo\Smart_Seo class.
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
function SMART_SEO() { // phpcs:ignore Squiz.Functions.GlobalFunction.Found, WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return \SmartSeo\Smart_Seo::get_instance( __FILE__ );
}
SMART_SEO();
