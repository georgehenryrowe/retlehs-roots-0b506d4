<?php

// Custom post types
// Custom Post Type for Board team, auto-generated

add_action( 'init', 'register_cpt_skateboarder' );

function register_cpt_skateboarder() {

    $labels = array( 
        'name' => _x( 'skateboarders', 'skateboarder' ),
        'singular_name' => _x( 'skateboarder', 'skateboarder' ),
        'add_new' => _x( 'Add New', 'skateboarder' ),
        'all_items' => _x( 'skateboarders', 'skateboarder' ),
        'add_new_item' => _x( 'Add New skateboarder', 'skateboarder' ),
        'edit_item' => _x( 'Edit skateboarder', 'skateboarder' ),
        'new_item' => _x( 'New skateboarder', 'skateboarder' ),
        'view_item' => _x( 'View skateboarder', 'skateboarder' ),
        'search_items' => _x( 'Search skateboarders', 'skateboarder' ),
        'not_found' => _x( 'No skateboarders found', 'skateboarder' ),
        'not_found_in_trash' => _x( 'No skateboarders found in Trash', 'skateboarder' ),
        'parent_item_colon' => _x( 'Parent skateboarder:', 'skateboarder' ),
        'menu_name' => _x( 'skateboarders', 'skateboarder' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true
    );

    register_post_type( 'skateboarder', $args );
}