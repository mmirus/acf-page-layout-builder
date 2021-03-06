<?php

if (get_field('enable_aplb_post_type', 'option')) {
    $labels = array(
        'name'                  => _x('APLB Pages', 'Post Type General Name', 'aplb'),
        'singular_name'         => _x('APLB Page', 'Post Type Singular Name', 'aplb'),
        'menu_name'             => __('APLB Pages', 'aplb'),
        'name_admin_bar'        => __('APLB Page', 'aplb'),
        'archives'              => __('APLB Page Archives', 'aplb'),
        'attributes'            => __('APLB Page Attributes', 'aplb'),
        'parent_item_colon'     => __('Parent APLB Page:', 'aplb'),
        'all_items'             => __('All APLB Pages', 'aplb'),
        'add_new_item'          => __('Add New APLB Page', 'aplb'),
        'add_new'               => __('Add New', 'aplb'),
        'new_item'              => __('New APLB Page', 'aplb'),
        'edit_item'             => __('Edit APLB Page', 'aplb'),
        'update_item'           => __('Update APLB Page', 'aplb'),
        'view_item'             => __('View APLB Page', 'aplb'),
        'view_items'            => __('View APLB Pages', 'aplb'),
        'search_items'          => __('Search APLB Page', 'aplb'),
        'not_found'             => __('Not found', 'aplb'),
        'not_found_in_trash'    => __('Not found in Trash', 'aplb'),
        'featured_image'        => __('Featured Image', 'aplb'),
        'set_featured_image'    => __('Set featured image', 'aplb'),
        'remove_featured_image' => __('Remove featured image', 'aplb'),
        'use_featured_image'    => __('Use as featured image', 'aplb'),
        'insert_into_item'      => __('Insert into APLB Page', 'aplb'),
        'uploaded_to_this_item' => __('Uploaded to this APLB Page', 'aplb'),
        'items_list'            => __('APLB Pages list', 'aplb'),
        'items_list_navigation' => __('APLB Pages list navigation', 'aplb'),
        'filter_items_list'     => __('Filter APLB Pages list', 'aplb'),
    );
    $args = array(
        'label'                 => __('APLB Page', 'aplb'),
        'description'           => __('A page built with the APLB plugin', 'aplb'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-layout',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('aplb', $args);
}
