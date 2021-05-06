<?php
function egitim_dosyalari() {
    
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    if (strstr($_SERVER['SERVER_NAME'],'heygidi.local')) {
        wp_enqueue_script('tema-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('ana-kurum-js', get_theme_file_uri('/bundled-assets/scripts.b7d3516bb5b91a302e2f.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.b7d3516bb5b91a302e2f.css'));
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

function pageBanner($args = NULL) {
  
    if (!$args['title']) {
      $args['title'] = get_the_title();
    }
  
    if (!$args['subtitle']) {
      $args['subtitle'] = get_field('page_banner_subtitle');
    }
  
    if (!$args['photo']) {
      if (get_field('page_banner_background_image')) {
        $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
      } else {
        $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
      }
    }
  
    ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
        <div class="page-banner__intro">
          <p><?php echo $args['subtitle']; ?></p>
        </div>
      </div>  
    </div>
  <?php }


add_action( 'after_setup_theme', 'declare_sensei_support' );
function declare_sensei_support() {
    add_theme_support( 'sensei' );
}


add_action( 'init', 'remove_hooks', 11 );
function remove_hooks(){   
 remove_action('sensei_archive_before_course_loop', array( 'Sensei_Course', 'archive_header' ), 10, 0 );
}



function redirectSubsToFrontend() {
    $ourCurrentUser = wp_get_current_user();
  
    if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
      wp_redirect(site_url('/'));
      exit;
    }
  }
  
  add_action('wp_loaded', 'noSubsAdminBar');
  
  function noSubsAdminBar() {
    $ourCurrentUser = wp_get_current_user();
  
    if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
      show_admin_bar(false);
    }
  }
  
  // Customize Login Screen
  add_filter('login_headerurl', 'ourHeaderUrl');
  
  function ourHeaderUrl() {
    return esc_url(site_url('/'));
  }
  
  add_action('login_enqueue_scripts', 'ourLoginCSS');
  
  function ourLoginCSS() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.b7d3516bb5b91a302e2f.css'));
  }
  
  add_filter('login_headertitle', 'ourLoginTitle');
  
  function ourLoginTitle() {
    return get_bloginfo('name');
  }
  
  // Force note posts to be private
  add_filter('wp_insert_post_data', 'makeNotePrivate', 10, 2);
  
  function makeNotePrivate($data, $postarr) {
    if ($data['post_type'] == 'note') {
      if(count_user_posts(get_current_user_id(), 'note') > 4 AND !$postarr['ID']) {
        die("You have reached your note limit.");
      }
  
      $data['post_content'] = sanitize_textarea_field($data['post_content']);
      $data['post_title'] = sanitize_text_field($data['post_title']);
    }
  
    if($data['post_type'] == 'note' AND $data['post_status'] != 'trash') {
      $data['post_status'] = "private";
    }
    
    return $data;
  }