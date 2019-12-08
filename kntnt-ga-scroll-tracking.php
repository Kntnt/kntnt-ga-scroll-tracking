<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Google Analytics Scroll Tracking
 * Plugin URI:        https://github.com/kntnt/kntnt-ga-scroll-tracking
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-ga-scroll-tracking
 * Description:       Provides Chris Goddard's better scroll depth tracking for Google Analytics.
 * Version:           1.1.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-ga-scroll-tracking
 * Domain Path:       /languages
 */

namespace Kntnt\GA_Scroll_Tracking;

defined( 'WPINC' ) || die;

// Define WP_DEBUG as TRUE and uncomment next line to debug this plugin.
// define( 'KNTNT_GA_SCROLL_TRACKING', true );

spl_autoload_register( function ( $class ) {
	$ns_len = strlen( __NAMESPACE__ );
	if ( 0 == substr_compare( $class, __NAMESPACE__, 0, $ns_len ) ) {
		require_once __DIR__ . '/classes/' . strtr( strtolower( substr( $class, $ns_len + 1 ) ), '_', '-' ) . '.php';
	}
} );

new Plugin();
