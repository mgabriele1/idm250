<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_topics_hierarchical_taxonomy', 0);
//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {
    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = [
    'name'              => _x('Topics', 'taxonomy general name'),
    'singular_name'     => _x('Topic', 'taxonomy singular name'),
    'search_items'      => __('Search Topics'),
    'all_items'         => __('All Topics'),
    'parent_item'       => __('Parent Topic'),
    'parent_item_colon' => __('Parent Topic:'),
    'edit_item'         => __('Edit Topic'),
    'update_item'       => __('Update Topic'),
    'add_new_item'      => __('Add New Topic'),
    'new_item_name'     => __('New Topic Name'),
    'menu_name'         => __('Topics'),
  ];

    // Now register the taxonomy

    register_taxonomy('technologies', ['projects'], [
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'technologies'],
  ]);
}
