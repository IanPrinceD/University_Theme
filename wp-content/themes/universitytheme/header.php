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
                    <div class="utility-container">
                         <nav class="nav-container">
                              <?php
                              wp_nav_menu(array(
                                   'theme_location' => 'headerMenu'
                              ));
                              ?>
                         </nav>
                         <div class="nav-utilities">
                              <p class="login"><a href="#" class="btn btn-login">Login</a></p>
                              <p class="signup"><a href="#" class="btn btn-sign-up">Sign Up</a></p>
                              <div class="search-trigger"><i class="fa-solid fa-magnifying-glass"></i></div>
                         </div>
                    </div>
               </div>
          </header>
          <main class="main-container">