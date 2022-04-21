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
const STT_PLUGIN = __FILE__;

// Load
require_once('Load.php');
StatisticsInit::installActions();
