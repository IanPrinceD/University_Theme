<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php wp_head(); ?>
 <title><?php bloginfo('name'); ?></title>
</head>

<body>
 <header class="header">
  <div class="header-container">
   <div class="logo-container">
    <a class="logo-link" href="/"><img src="" alt="University Logo"></a>
   </div>
   <nav class="nav-container">
    <ul class="nav-wrapper">
     <li class="links"><a class="link-items" href="#">About Us</a></li>
     <li class="links"><a class="link-items" href="#">Program</a></li>
     <li class="links"><a class="link-items" href="#">Events</a></li>
     <li class="links"><a class="link-items" href="#">Campuses</a></li>
     <li class="links"><a class="link-items" href="#">Blog</a></li>
    </ul>
    <div class="nav-utilities">
     <a href="#" class="btn btn-login">Login</a>
     <a href="#" class="btn btn-sign-up">Sign Up</a>
     <div class="search-trigger"><i class="fa-solid fa-magnifying-glass"></i></div>
    </div>
   </nav>
  </div>
 </header>