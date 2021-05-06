<?php
  function egitim_post_type(){
    register_post_type('etkinlik', array(
        'show_in_rest'=>true,
        'supports'=>array('title', 'editor','excerpt'),
        'rewrite'=> array('slug'=>'etkinlikler'),
        'has_archive'=>true,        
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Etkinlikler',
            'add_new_item' => 'Yeni Etkinlik Ekle',
            'edit_item' => 'Etkinliği Düzenle',
            'all_items' => 'Tüm Etkinlikler',
            'singular_name' => 'Etkinlik',
        )
     ));
	 
	 // Note Post Type
  register_post_type('note', array(
    'capability_type' => 'note',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));

  // Like Post Type
  register_post_type('like', array(
    'supports' => array('title'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Likes',
      'add_new_item' => 'Add New Like',
      'edit_item' => 'Edit Like',
      'all_items' => 'All Likes',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart'
  ));
}



add_action('init', 'egitim_post_type');

?>