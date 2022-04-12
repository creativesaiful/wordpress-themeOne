<?php

// This is for custom post type

function custom_service(){
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Service',
            'singular_name' => 'Service',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'search_items' => 'Search Service',
            'not_found' => 'No Service found',
            'not_found_in_trash' => 'No Service found in Trash',
            'parent_item_colon' => 'Parent Service'
        ),
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_ui' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ),
        'rewrite' => array(
            'slug' => 'service'
        )
    ));

}

add_action( 'init', 'custom_service' );