<?php

// Register Custom Post Type
function trading_cards_post_type()
{
    $labels = [
        'name' => _x('Trading cards', 'Post Type General Name', 'trading_cards'),
        'singular_name' => _x('Trading card', 'Post Type Singular Name', 'trading_cards'),
        'menu_name' => __('Trading cards', 'trading_cards'),
        'name_admin_bar' => __('Trading cards', 'trading_cards'),
        'archives' => __('Card Archives', 'trading_cards'),
        'attributes' => __('Card Attributes', 'trading_cards'),
        'parent_item_colon' => __('Parent Card:', 'trading_cards'),
        'all_items' => __('All Cards', 'trading_cards'),
        'add_new_item' => __('Add New Card', 'trading_cards'),
        'add_new' => __('Add New', 'trading_cards'),
        'new_item' => __('New Card', 'trading_cards'),
        'edit_item' => __('Edit Card', 'trading_cards'),
        'update_item' => __('Update Card', 'trading_cards'),
        'view_item' => __('View Card', 'trading_cards'),
        'view_items' => __('View Cards', 'trading_cards'),
        'search_items' => __('Search Card', 'trading_cards'),
        'not_found' => __('Not found', 'trading_cards'),
        'not_found_in_trash' => __('Not found in Trash', 'trading_cards'),
        'featured_image' => __('Featured Image', 'trading_cards'),
        'set_featured_image' => __('Set featured image', 'trading_cards'),
        'remove_featured_image' => __('Remove featured image', 'trading_cards'),
        'use_featured_image' => __('Use as featured image', 'trading_cards'),
        'insert_into_item' => __('Insert into item', 'trading_cards'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'trading_cards'),
        'items_list' => __('Cards list', 'trading_cards'),
        'items_list_navigation' => __('Cards list navigation', 'trading_cards'),
        'filter_items_list' => __('Filter items list', 'trading_cards'),
    ];
    $rewrite = [
        'slug' => 'trading-cards',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    ];
    $args = [
        'label' => __('Trading card', 'trading_cards'),
        'description' => __('Trading card collections', 'trading_cards'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes'],
        'taxonomies' => ['trading_cards'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-open-folder',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'rewrite' => $rewrite,
        'capability_type' => 'page',
    ];
    register_post_type('trading_cards', $args);
}
