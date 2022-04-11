<?php

namespace Aon\statistics;

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
}
