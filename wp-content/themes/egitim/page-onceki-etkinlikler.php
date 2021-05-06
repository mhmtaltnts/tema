<?php

get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Önceki Etkinliklerimiz</h1>
    <div class="page-banner__intro">
      <p>Bizim dünyamızda neler oluyor öğrenin.</p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
<?php
  
    $today = date('Ymd'); 
    $pastEvents = new WP_Query(array(
    'paged' => get_query_var('paged', 1),
    "post_type" => 'etkinlik',
    "meta_key" => 'etkinlik_tarihi',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
    array(
        'key' => 'etkinlik_tarihi',
        'compare' => '<',
        'value' => $today,
        'type' => 'numeric',
    )
    ) 
    ));
  while($pastEvents->have_posts()) {
    $pastEvents->the_post(); ?>
    <div class="event-summary">
    <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
                
                  $gun_dizi = array(
                      'Jan'       => 'Oca',
                      'Feb'       => 'Şub',
                      'Mar'       => 'Mar',
                      'Apr'       => 'Nis',
                      'May'       => 'May',
                      'Jun'       => 'Haz',
                      'Jul'       => 'Tem',
                      'Aug'       => 'Ağu',
                      'Sep'       => 'Eyl',
                      'Oct'       => 'Eki',
                      'Nov'       => 'Kas',
                      'Dec'       => 'Ara',
                  );
                  
              $etkinlikTarihi = new DateTime(get_field('etkinlik_tarihi'));

               
                $turkceTarih = $etkinlikTarihi->format('M');
                echo $gun_dizi[$turkceTarih]
              ?></span>
              <span class="event-summary__day"><?php echo $etkinlikTarihi->format('d'); ?></span>
            </a>
      <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Devamını Okuyunuz</a></p>
      </div>
    </div>
  <?php }
  echo paginate_links(array(
      'total' => $pastEvents->max_num_pages
  ));
?>
</div>

<?php get_footer();

?>