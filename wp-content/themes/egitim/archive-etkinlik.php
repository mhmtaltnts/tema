<?php

get_header(); 

pageBanner(array(
  'title' => 'Tüm Etkinlikler',
  'subtitle' => 'Dünyamızda neler oluyor öğrenin.'
));
?>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
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
  echo paginate_links();
?>
<hr class="section-break">
<p>Önceki etkinliklerimizi merak edenler için  <a href="<?php echo site_url('/onceki-etkinlikler') ?>">buradayız.</a></p>
</div>

<?php get_footer();

?>