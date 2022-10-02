<?php

// Register Custom Taxonomy
function trading_cards_taxonomy()
{
    $labels = [
        'name' => _x('Cards categories', 'Taxonomy General Name', 'trading_cards'),
        'singular_name' => _x('Card category', 'Taxonomy Singular Name', 'trading_cards'),
        'menu_name' => __('Card categories', 'trading_cards'),
        'all_items' => __('All Categories', 'trading_cards'),
        'parent_item' => __('Parent Category', 'trading_cards'),
        'parent_item_colon' => __('Parent Category:', 'trading_cards'),
        'new_item_name' => __('New Category Name', 'trading_cards'),
        'add_new_item' => __('Add New Category', 'trading_cards'),
        'edit_item' => __('Edit Category', 'trading_cards'),
        'update_item' => __('Update Category', 'trading_cards'),
        'view_item' => __('View Category', 'trading_cards'),
        'separate_items_with_commas' => __('Separate items with commas', 'trading_cards'),
        'add_or_remove_items' => __('Add or remove items', 'trading_cards'),
        'choose_from_most_used' => __('Choose from the most used', 'trading_cards'),
        'popular_items' => __('Popular Categories', 'trading_cards'),
        'search_items' => __('Search Categories', 'trading_cards'),
        'not_found' => __('Not Found', 'trading_cards'),
        'no_terms' => __('No items', 'trading_cards'),
        'items_list' => __('Categories list', 'trading_cards'),
        'items_list_navigation' => __('Categories list navigation', 'trading_cards'),
    ];
    $rewrite = [
        'slug' => 'cards-categories',
        'with_front' => true,
        'hierarchical' => false,
    ];
    $args = [
        'labels' => $labels,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => $rewrite,
    ];
    register_taxonomy('trading_cards_categories', ['trading_cards'], $args);
}
