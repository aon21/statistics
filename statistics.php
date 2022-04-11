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
StatisticsInit::install();
