<?php

function lovishtheme_init() {
    $labels = array(
        'name'                  => _x( 'Surfers', 'Post type general name', 'lovishtheme' ),  
        'singular_name'         => _x( 'Surfer', 'Post type singular name', 'lovishtheme' ),
        'menu_name'             => _x( 'Surfers', 'Admin Menu text', 'lovishtheme' ),
        'name_admin_bar'        => _x( 'Surfer', 'Add New on Toolbar', 'lovishtheme' ),
        'add_new'               => __( 'Add New', 'lovishtheme' ),
        'add_new_item'          => __( 'Add New surfer', 'lovishtheme' ),
        'new_item'              => __( 'New surfer', 'lovishtheme' ),
        'edit_item'             => __( 'Edit surfer', 'lovishtheme' ),
        'view_item'             => __( 'View surfer', 'lovishtheme' ),
        'all_items'             => __( 'All surfers', 'lovishtheme' ),
        'search_items'          => __( 'Search surfers', 'lovishtheme' ),
        'parent_item_colon'     => __( 'Parent surfers:', 'lovishtheme' ),
        'not_found'             => __( 'No surfers found.', 'lovishtheme' ),
        'not_found_in_trash'    => __( 'No surfers found in Trash.', 'lovishtheme' ),
        'featured_image'        => _x( 'Surfer Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'archives'              => _x( 'Surfer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'lovishtheme' ),
        'insert_into_item'      => _x( 'Insert into surfer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'lovishtheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this surfer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'lovishtheme' ),
        'filter_items_list'     => _x( 'Filter surfers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'lovishtheme' ),
        'items_list_navigation' => _x( 'Surfers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'lovishtheme' ),
        'items_list'            => _x( 'Surfers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'lovishtheme' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Surfer custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'surfer' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'lovishtheme_surfer', $args );
}
add_action( 'init', 'lovishtheme_init' );
// Lovish Sekhri 
//  this is the Custom