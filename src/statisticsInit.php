<?php

namespace Aon\statistics;

class statisticsInit
{

    public static function install_actions()
    {
        register_activation_hook( __FILE__, 'my_plugin_create_db' );
    }
}
