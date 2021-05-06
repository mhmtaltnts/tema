
<?php
get_header(); ?>
 
 <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg')?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Hoş Geldiniz!</h1>
        <h2 class="headline headline--medium">Sitemizde verimli vakit geçireceğinizi umuyoruz.</h2>
        <!--
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
        -->
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Yaklaşan Etkinlikler</h2>
          <?php
             $today = date('Ymd'); 
             $homepageEvents = new WP_Query(array(
              "post_per_page" => 2,
              "post_type" => 'etkinlik',
              "meta_key" => 'etkinlik_tarihi',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'etkinlik_tarihi',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric',
                )
              ) 
             ));
              while($homepageEvents->have_posts()) {
                $homepageEvents->the_post();?>
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
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
              <p><?php 
                    if (has_excerpt()){
                       echo get_the_excerpt();
                    }else {
                      echo wp_trim_words(get_the_content(), 18);
                    }
                    ?> <a href="<?php the_permalink(); ?>" class="nu gray">Devamını Okuyunuz</a></p>
            </div>
          </div>
              
              <?php }
          
              ?>
          
          

          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('etkinlik')?>" class="btn btn--blue">Diğer Etkinliklerimiz</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Son Yazılar</h2>

          <?php
           $homepagePosts = new WP_Query(array(
               'posts_per_page' => 2,
           ));
          
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>
                <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();?>">
                    <span class="event-summary__month"><?php the_time('M')?></span>
                    <span class="event-summary__day"><?php the_time('d')?></span>
                    </a>
                    <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
                    <p><?php 
                    if (has_excerpt()){
                       echo get_the_excerpt();
                    }else {
                      echo wp_trim_words(get_the_content(), 18);
                    }
                    ?>
                    <a href="<?php the_permalink();?>" class="nu gray">Devamını Okuyunuz</a></p>
                    </div>
                </div>
           <?php } wp_reset_postdata();
          
          ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('/yazilar');?>" class="btn btn--yellow">Diğer Yazılarımız</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php
 get_footer();
?>