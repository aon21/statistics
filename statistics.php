<?php
/*
Plugin Name: Statistics
Description: Wordpress sage / bedrock statistics plugin
Author: aon
Author URI:  https://github.com/aon21/
Version: 0.0.1
*/

// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

// Load
require_once(dirname(__FILE__) . '/src/statisticsInit.php');
require_once(dirname(__FILE__) . '/src/StatisticsDBTables.php');

register_deactivation_hook(__FILE__, [ 'Aon\Statistics\StatisticsInit', 'deactivatePlugin' ]);
register_activation_hook(__FILE__, [ 'Aon\Statistics\StatisticsInit', 'activatePlugin' ]);
