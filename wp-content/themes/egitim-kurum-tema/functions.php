<?php
function egitim_dosyalari() {
    
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    if (strstr($_SERVER['SERVER_NAME'],'heygidi.local')) {
        wp_enqueue_script('tema-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('ana-kurum-js', get_theme_file_uri('/bundled-assets/scripts.92f2b54dadfa7212980e.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.92f2b54dadfa7212980e.css'));
    }

}

add_action('wp_enqueue_scripts', 'egitim_dosyalari');

function tema_ozellikler(){
    register_nav_menu('headerMenuLocation', 'Üst Menü Konumu');
    register_nav_menu('footerLocationOne', 'Birinci Alt Menü Konumu');
    register_nav_menu('footerLocationTwo', 'İkinci Alt Menü Konumu');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','tema_ozellikler');


function egitim_adjust_queries($query){
    
    if(!is_admin() AND is_post_type_archive('etkinlik') AND $query->is_main_query()) {
        $today =date('Ymd');
        $query->set('meta_key', 'etkinlik_tarihi');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
              'key' => 'etkinlik_tarihi',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric',
            )
          ));
    }
}

add_action('pre_get_posts', 'egitim_adjust_queries');

