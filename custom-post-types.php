<?php 
add_action( 'init', 'custom_post_type_villa', 0 );
add_action( 'init', 'custom_post_type_map_item', 0 );
// ====== Villa
function custom_post_type_villa() {

    $labels = array(
        'name'                => _x( 'Villa', 'Post Type General Name'),
        'singular_name'       => _x( 'Villa',  'Post Type Singular Name'),
        'menu_name'           => __( 'Villas'),
        'parent_item_colon'   => __( 'Parent Villa'),
        'all_items'           => __( 'All Villas'),
        'view_item'           => __( 'View Villas'),
        'add_new_item'        => __( 'Add New Villa'),
        'add_new'             => __( 'Add Villa' ),
        'edit_item'           => __( 'Edit Villa' ),
        'update_item'         => __( 'Update Villa' ),
        'search_items'        => __( 'Search Villas' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'villa' ),
        'description'         => __( 'villa'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail', 'page-attributes' ),
        'menu_icon'           => 'dashicons-admin-multisite',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'villa', $args );
}

// ====== Map Items
function custom_post_type_map_item() {

    $labels = array(
        'name'                => _x( 'Map Item', 'Post Type General Name'),
        'singular_name'       => _x( 'Map Item',  'Post Type Singular Name'),
        'menu_name'           => __( 'Map Items'),
        'parent_item_colon'   => __( 'Parent Map Item'),
        'all_items'           => __( 'All Map Items'),
        'view_item'           => __( 'View Map Items'),
        'add_new_item'        => __( 'Add New Map Item'),
        'add_new'             => __( 'Add Map Item' ),
        'edit_item'           => __( 'Edit Map Item' ),
        'update_item'         => __( 'Update Map Item' ),
        'search_items'        => __( 'Search Map Items' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'map_item' ),
        'description'         => __( 'map_item'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail', 'page-attributes' ),
        'menu_icon'           => 'dashicons-location',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'map_item', $args );
}

