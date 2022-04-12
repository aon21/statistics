<?php

namespace Aon\Statistics;

class StatisticsDBTables
{
    private static $tables = [
        "wp_statistics_subnet_deals" => "(
          id bigint(20) NOT NULL AUTO_INCREMENT,
          date date NOT NULL,
          year varchar(255) NOT NULL,
          week_of_year varchar(255) NOT NULL,
          registry varchar(255) NOT NULL,
          mask varchar(255) NOT NULL,
          ip_count varchar(255) NOT NULL,
          ip_price varchar(255) NOT NULL,
          PRIMARY KEY  (id)
        ) DEFAULT CHARSET=utf8",
        "wp_statistics_ip_totals" => "(
          id bigint(20) NOT NULL AUTO_INCREMENT,
          date date NOT NULL,
          year varchar(255) NOT NULL,
          week_of_year varchar(255) NOT NULL,
          listed varchar(255) NOT NULL,
          leased varchar(255) NOT NULL,
          available varchar(255) NOT NULL,
          lease_rate varchar(255) NOT NULL,
          weekly varchar(255) NOT NULL,
          monthly varchar(255) NOT NULL,
          PRIMARY KEY  (id)
        ) DEFAULT CHARSET=utf8",
        "wp_statistics_top_holder_countries" => "(
          id bigint(20) NOT NULL AUTO_INCREMENT,
          country varchar(255) NOT NULL,
          country_code varchar(255) NOT NULL,
          place varchar(255),
          percentage varchar(255),
          PRIMARY KEY  (id)
        ) DEFAULT CHARSET=utf8",
        "wp_statistics_top_user_countries" => "(
          id bigint(20) NOT NULL AUTO_INCREMENT,
          country varchar(255) NOT NULL,
          country_code varchar(255) NOT NULL,
          place varchar(255),
          percentage varchar(255),
          PRIMARY KEY  (id)
        ) DEFAULT CHARSET=utf8",
    ];

    public function createAll()
    {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        foreach (self::$tables as $table => $def) {
            $sql = "CREATE TABLE IF NOT EXISTS $table $def;";
            dbDelta($sql);
        }
    }
}
