<?php
/*
Plugin Name: Statistics
Description: Wordpress sage / bedrock statistics plugin
Author: aon
Author URI:  https://github.com/aon21/
Version: 0.0.1
*/

namespace Aon\Statistics;

if (! defined('ABSPATH')) {
    exit;
}

class Statistics
{
    public function __construct()
    {
        $this->autoloader();

        register_deactivation_hook(__FILE__, [ 'Aon\Statistics\StatisticsInit', 'deactivatePlugin' ]);
        register_activation_hook(__FILE__, [ 'Aon\Statistics\StatisticsInit', 'activatePlugin' ]);
    }

    private function autoloader()
    {
        spl_autoload_register([$this, 'autoload']);
    }

    private function autoload($class): void
    {
        // project-specific namespace prefix
        $prefix = __NAMESPACE__;

        // base directory for the namespace prefix
        $base_dir = __DIR__ . '/src/';

        // does the class use the namespace prefix?
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            // no, move to the next registered autoloader
            return;
        }

        // get the relative class name
        $relative_class = substr($class, $len);

        // replace the namespace prefix with the base directory, replace namespace
        // separators with directory separators in the relative class name, append
        // with .php
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

        // if the file exists, require it
        if (file_exists($file)) {
            require $file;
        }
    }
}

new Statistics();
