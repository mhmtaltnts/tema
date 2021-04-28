<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url()?>"><strong>Kalem</strong> Öğretir</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                 
                <?php
                /*                
                wp_nav_menu(array(
                  'theme_location' => 'headerMenuLocation',
                ))
                */
                ?>
                  
               
                <ul>
                
                <!-- <li><a href="#senseiloginlogout">Loin</a></li>  -->
                <li <?php if(get_post_type()=='etkinlik' OR is_page('onceki-etkinlikler')) echo 'class="current-menu-item" '; ?>>
                <a href="<?php echo get_post_type_archive_link('etkinlik') ?>">Etkinlikler</a></li>
                <!--<li><a href="#">Bölümler</a></li>  -->
                <li <?php if (get_post_type()=='post') echo 'class="current-menu-item" '; ?>><a href="<?php echo site_url('/yazilar');?>">Yazılar</a></li>
                </ul>
              
            </nav>
            <div class="site-header__util">
                <a href="<?php echo site_url('/kurslar')?>" class="btn btn--small btn--orange float-left push-right">Kurslar</a>
                <a href="<?php echo site_url('/kurslarim')?>" class="btn btn--small btn--dark-orange float-left">Kurslarım</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            </div>
        </div>
        </header>