<?php
  function egitim_kurum_post_type(){
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
}

add_action('init', 'egitim_kurum_post_type');

?>