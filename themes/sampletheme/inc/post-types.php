<?php

function lovishtheme_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'lovishtheme' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'lovishtheme' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'lovishtheme' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'lovishtheme' ),
        'add_new'               => __( 'Add New', 'lovishtheme' ),
        'add_new_item'          => __( 'Add New recipe', 'lovishtheme' ),
        'new_item'              => __( 'New recipe', 'lovishtheme' ),
        'edit_item'             => __( 'Edit recipe', 'lovishtheme' ),
        'view_item'             => __( 'View recipe', 'lovishtheme' ),
        'all_items'             => __( 'All recipes', 'lovishtheme' ),
        'search_items'          => __( 'Search recipes', 'lovishtheme' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'lovishtheme' ),
        'not_found'             => __( 'No recipes found.', 'lovishtheme' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'lovishtheme' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'lovishtheme' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'lovishtheme' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'lovishtheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'lovishtheme' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'lovishtheme' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'lovishtheme' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'lovishtheme' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'lovishtheme_recipe', $args );
}
add_action( 'init', 'lovishtheme_init' );