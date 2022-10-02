<?php

function trading_cards_db_create()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'trading_cards_details';
    $wpdb_collate = $wpdb->collate;

    $sql = "CREATE TABLE {$table_name} (
        card_id int unsigned NOT NULL auto_increment,
        title text,
        price int,
        PRIMARY KEY (card_id)
    ) COLLATE {$wpdb_collate}";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    if (count($wpdb->get_var("SHOW TABLES LIKE '$table_name'")) == 0) {
    }
}
