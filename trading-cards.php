<?php

/*
 * Plugin Name:       Trading Card
 * Plugin URI:        https://github.com/marcinsnoch/trading-cards
 * Description:       Collections of Trading Cards.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Marcin Snoch
 * Author URI:        https://github.com/marcinsnoch
 * License:           MIT
 * Text Domain:       trading-cards
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Load plugin textdomain.
 */
function trading_cards_load_textdomain()
{
    load_plugin_textdomain('trading_cards', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

add_action('init', 'trading_cards_load_textdomain');

// Register Custom Post Type
require_once 'includes/trading_cards_post_type.php';
add_action('init', 'trading_cards_post_type', 0);

require_once 'includes/trading_cards_db_create.php';
register_activation_hook(__FILE__, 'trading_cards_db_create');

function activate_trading_cards()
{
    if ('1' === get_option('trading_cards_activate')) {
        return;
    }
    update_option('trading_cards_activate', '1');
}

add_action('init', 'activate_trading_cards');

require_once 'includes/trading_cards_fields.php';
add_action('admin_init', 'trading_cards_custom_fields');
add_action('save_post', 'save_trading_cards_custom_field');

// Register Custom Taxonomy
require_once 'includes/trading_cards_taxonomy.php';
add_action('init', 'trading_cards_taxonomy', 0);
