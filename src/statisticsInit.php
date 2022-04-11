<?php

namespace Aon\statistics;

class StatisticsInit
{

    public static function install()
    {
        register_activation_hook( __FILE__, 'my_plugin_create_db' );
    }
}
