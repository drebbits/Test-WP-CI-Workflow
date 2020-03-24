<?php
/**
 * Plugin Name: TestWpWorkflow
 * Plugin URI:
 * Description:
 * Version:     0.1.0
 * Author:      10up
 * Author URI:  https://10up.com
 * Text Domain: test-wp-workflow
 * Domain Path: /languages
 *
 * @package TestWpWorkflow
 */

// Useful global constants.
define( 'TEST_WP_WORKFLOW_VERSION', '0.1.0' );
define( 'TEST_WP_WORKFLOW_URL', plugin_dir_url( __FILE__ ) );
define( 'TEST_WP_WORKFLOW_PATH', plugin_dir_path( __FILE__ ) );
define( 'TEST_WP_WORKFLOW_INC', TEST_WP_WORKFLOW_PATH . 'includes/' );

// Include files.
require_once TEST_WP_WORKFLOW_INC . 'functions/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, '\TestWpWorkflow\Core\activate' );
register_deactivation_hook( __FILE__, '\TestWpWorkflow\Core\deactivate' );

// Bootstrap.
TestWpWorkflow\Core\setup();

// Require Composer autoloader if it exists.
if ( file_exists( TEST_WP_WORKFLOW_PATH . '/vendor/autoload.php' ) ) {
	require_once TEST_WP_WORKFLOW_PATH . 'vendor/autoload.php';
}
