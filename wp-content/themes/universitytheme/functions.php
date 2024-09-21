<?php

function my_theme_assets()
{
 wp_enqueue_style('font_awesome_cdn', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
 wp_enqueue_style('google_fonts_poppins_cdn', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
 wp_enqueue_style('google_fonts_worksans_cdn', '//fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
 wp_enqueue_style('global_css', get_theme_file_uri('./css/global.css'));
 wp_enqueue_style('page_css', get_theme_file_uri('./css/page.css'));
 wp_enqueue_style('header_css', get_theme_file_uri('./css/header.css'));
 wp_enqueue_style('footer_css', get_theme_file_uri('./css/footer.css'));
}
add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_features()
{
 // Setting up menu which can be controlled in the wp-admin
 register_nav_menu('headerMenu', 'Header Menu');
 register_nav_menu('footerMenuPrimary', 'Footer Menu');
 register_nav_menu('footerMenuSecondary', 'Secondary Footer Menu');

 add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_features');
