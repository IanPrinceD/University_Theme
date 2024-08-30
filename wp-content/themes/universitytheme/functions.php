<?php

function my_theme_assets()
{
 wp_enqueue_style('font_awesome_cdn', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
 wp_enqueue_style('global_css', get_theme_file_uri('/css/global.css'));
 wp_enqueue_style('header_css', get_theme_file_uri('/css/header.css'));
}
add_action('wp_enqueue_scripts', 'my_theme_assets');
