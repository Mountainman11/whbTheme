<?php

function whb_post_types(){
//Recipe Post Type
register_post_type('recipe', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'recipes'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Recipes',
      'add_new_item' => 'Add New Recipe',
      'edit_item' => 'Edit Recipies',
      'all_items' => 'All Recipies',
      'singular_name' => 'Recipe'
    ),
    'menu_icon' => 'dashicons-drumstick',
    'show_in_menu' => true,
    'show_ui' => true
  ));
  
//Podcast Post Type
register_post_type('podcast', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'Episodes'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Podcast Episodes',
      'add_new_item' => 'Add New Episode',
      'edit_item' => 'Edit Episode',
      'all_items' => 'All Episodes',
      'singular_name' => 'Episode'
    ),
    'menu_icon' => 'dashicons-microphone'
  ));
  
}

add_action( 'init', 'whb_post_types' );

?>