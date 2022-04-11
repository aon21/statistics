<?php

namespace Aon\Statistics;

class StatisticsDBTables
{
    private static $tables = [
        "belekas" => "(
          `name` varchar(100) NOT NULL,
          `val` longblob,
          `autoload` enum('no','yes') NOT NULL DEFAULT 'yes',
          PRIMARY KEY (`name`)
        ) DEFAULT CHARSET=utf8",
    ];

    public function createAll()
    {
        foreach (self::$tables as $table => $def) {
            print_r($table);
            //$this->db->queryWrite("CREATE TABLE IF NOT EXISTS " . wfDB::networkTable($table) . " " . $def);
        }
    }
}
