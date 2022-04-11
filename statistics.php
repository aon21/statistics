<?php
/*
Plugin Name: Statistics
Description: Wordpress sage / bedrock statistics plugin
Author: aon
Version: 1.0.0
*/

use Aon\statistics\StatisticsInit;

// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

// Load
require_once(dirname(__FILE__) . '/src/statisticsInit.php');
StatisticsInit::install();
