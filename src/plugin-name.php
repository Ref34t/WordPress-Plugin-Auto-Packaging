<?php
/**
 * Plugin Name: Plugin Name
 * Description: A brief description of your plugin.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants.
define('PLUGIN_NAME_VERSION', '1.0.0');
define('PLUGIN_NAME_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_NAME_URL', plugin_dir_url(__FILE__));

// Include the main plugin class.
require_once PLUGIN_NAME_PATH . 'includes/class-plugin-name.php';

// Initialize the plugin.
new Plugin_Name();
// test2