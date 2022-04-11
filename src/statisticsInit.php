<?php

namespace Aon\statistics;

class StatisticsInit
{
    private static $runInstallCalled = false;

    public static function installPlugin()
    {
        self::runInstall();
        update_option('statisticsActivated', 1);
    }

    public static function runInstall()
    {
        if (self::$runInstallCalled) {
            return;
        }
        self::$runInstallCalled = true;

        $statisticsDBTables = new statisticsDBTables();
        $statisticsDBTables->createAll(); //if not exists
    }

    public static function installActions()
    {
        register_activation_hook(__FILE__, 'StatisticsInit::installPlugin');
        //register_deactivation_hook(__FILE__, 'StatisticsInit::uninstallPlugin');
    }
}
