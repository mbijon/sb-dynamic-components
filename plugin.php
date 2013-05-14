<?php
/*
Plugin Name: SB Dynamic Components
Description: Inject dynamic content into static page
Author: Brandon Clark
Author URI: http://dtdevs.wordpress.com
Version: 1.0
*/

define( 'SB_DC_URL', str_replace( ABSPATH, trailingslashit( site_url() ), dirname( __FILE__ ) ) . '/' );
define( 'SB_DC_PATH', dirname( __FILE__ ) );

/**
 * Dynamic Components Plugin
 */
class SB_DynamicComponents_Plugin {

	/**
	 * singleton instance
	 * @var SB_DynamicComponents_Plugin
	 */
	private static $instance = null;

	/**
	 * get singleton instance	 
	 * @return SB_DynamicComponents_Plugin
	 */
	public static function getInstance(){

		if ( self::$instance === null )
			self::$instance = new self();

		return self::$instance;

	}

	private function __construct(){

		require_once( dirname( __FILE__ ) . '/components.php' );
		require_once( dirname( __FILE__ ) . '/api.php' );

	}

}

$SB_DC_Plugin = SB_DynamicComponents_Plugin::getInstance();