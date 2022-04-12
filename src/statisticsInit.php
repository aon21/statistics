<?php

namespace Aon\Statistics;

class StatisticsInit
{
    private static $runInstallCalled = false;

    public static function runInstall()
    {
        if (self::$runInstallCalled) {
            return;
        }
        self::$runInstallCalled = true;

        $statisticsDBTables = new statisticsDBTables();
        $statisticsDBTables->createAll(); //if not exists
    }

    public static function activatePlugin()
    {
        StatisticsInit::runInstall();
        update_option('statisticsActivated', 1);
    }

    public static function deactivatePlugin()
    {
        update_option('statisticsActivated', 0);
    }
}
