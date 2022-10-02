<?php
    if (! defined('WP_UNINSTALL_PLUGIN')) {
        exit();
    }
    global $wpdb;
    $table_name = $wpdb->prefix . 'trading_cards_details';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option('trading_cards_activate');
