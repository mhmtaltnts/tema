
<?php
get_header(); 
pageBanner(array(
  'title' => "Sayfamıza Hoşgeldiniz",
  'subtitle' => "Makalelere buradan ulaşabilirsiniz."
));
?>
  <div class="container container--narrow page-section">
    <?php 
      while(have_posts()){
        the_post(); ?>
      
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title" ><a href="<?php the_permalink();?>"><?php the_title(); ?></a>  </h2>
        <div class="metabox">
          <p><?php the_author_posts_link(); ?> tarafından <?php the_time('j.n.y') ?> tarihinde <?php echo get_the_category_list(', ');?> konusunda yazıldı.</p>
        </div>
        <div class="generic-content">
          <?php the_excerpt();?>
          <p><a class="btn btn--blue"  href="<?php the_permalink();?>">Devamını okununuz &raquo</a></p>
        </div>
      </div>

    <?php } echo paginate_links();?>
   </div> 
<?php
 get_footer();
?>