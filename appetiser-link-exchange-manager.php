<?php
/**
 * Plugin Name: Appetiser Link Exchange Manager
 * Plugin URI:  https://appetiser.com.au
 * Description: A centralized tool to automatically insert and manage external links in blog content for link exchanges and monitor outbound links provided to partners.
 * Version: 1.0.0
 * Author: Landing page team
 * Author URI: https://appetiser.com.au
 * License: GPL v3
*  License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

 if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Include admin class
require_once plugin_dir_path(__FILE__) . 'admin/app-lm-admin.php';
require_once plugin_dir_path(__FILE__) . 'public/app-lm-public.php';

// Initialize admin3
if (is_admin()) {
    new Appetiser_Link_Mapper_Admin();
} else {
    // Init frontend filter
    new Appetiser_Link_Mapper_Public();
}