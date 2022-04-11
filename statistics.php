<?php
/*
Plugin Name: Statistics
Description: Wordpress sage / bedrock statistics plugin
Author: aon
Version: 1.0.0
*/

use Aon\statistics\statisticsInit;

global $wp_plugin_paths;
foreach ($wp_plugin_paths as $dir => $realdir) {
    if (strpos(__FILE__, $realdir) === 0) {
        define('STATISTICS_FCPATH', $dir . '/' . basename(__FILE__));
        define('STATISTICS_PATH', trailingslashit($dir));
        break;
    }
}

statisticsInit::install_actions();
