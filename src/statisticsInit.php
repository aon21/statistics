<?php

class StatisticsInit
{
    public static function installActions()
    {
        register_activation_hook(STT_PLUGIN, 'StatisticsInit::activatePlugin');
        register_deactivation_hook(STT_PLUGIN, 'StatisticsInit::deactivatePlugin');

        self::runActions();
    }

    public static function runInstall()
    {
        (new DbTables())->createAll();
    }

    public static function activatePlugin()
    {
        self::runInstall();
        update_option('statisticsActivated', 1);
    }

    public static function deactivatePlugin()
    {
        update_option('statisticsActivated', 0);
    }

    public static function runActions()
    {
        if (is_admin()) {
            add_action('admin_notices', 'StatisticsInit::notice');
        }
    }

    public static function notice()
    {
        echo 'aaaaaaaaaaaaaa';
    }
}
