<?php
/*
Plugin Name: Statistics
Description: Wordpress sage / bedrock statistics plugin
Author: aon
Author URI:  https://github.com/aon21/
Version: 0.0.1
*/

use Aon\statistics\StatisticsInit;

// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

// Load
require_once(dirname(__FILE__) . '/src/statisticsInit.php');
require_once(dirname(__FILE__) . '/src/StatisticsDBTables.php');

register_activation_hook(__FILE__, function () {
    StatisticsInit::runInstall();
    update_option('statisticsActivated', 1);
});

register_deactivation_hook(__FILE__, function () {
    update_option('statisticsActivated', 0);
});
