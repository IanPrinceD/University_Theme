<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="<?php bloginfo('charset') ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div class="container">
  <header class="header">
   <div class="header-container">
    <div class="header-logo-container">
     <a class="header-logo-link" href="/"><img src="" alt="University Logo"></a>
    </div>
    <nav class="nav-container">
     <!-- Setting up dynamic menu which can be controlled in wp-admin -->
     <!-- <?php
          wp_nav_menu(array(
           'theme_location' => 'headerMenu'
          ));
          ?> -->
     <ul class="nav-wrapper">
      <li class="links <?php
                       $about_us_page = get_page_by_path('about-us');
                       $about_us_id = $about_us_page ? $about_us_page->ID : 0;

                       if (is_page('about-us') || wp_get_post_parent_id(get_the_ID()) == $about_us_id) echo 'current-menu-item'; ?>"><a class="link-item" href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
      <li class="links"><a class="link-item" href="#">Program</a></li>
      <li class="links"><a class="link-item" href="#">Events</a></li>
      <li class="links"><a class="link-item" href="#">Campuses</a></li>
      <li class="links"><a class="link-item" href="#">Blog</a></li>
     </ul>
     <div class="nav-utilities">
      <a href="#" class="btn btn-login">Login</a>
      <a href="#" class="btn btn-sign-up">Sign Up</a>
      <div class="search-trigger"><i class="fa-solid fa-magnifying-glass"></i></div>
     </div>
    </nav>
   </div>
  </header>
  <main class="main-container">