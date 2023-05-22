<?php
function enqueue_custom_styles() {
    // Enqueue the CSS files
    wp_enqueue_style('footer-wrap', get_stylesheet_directory_uri().'/css/footer__wrap.css' , null, microtime(), 'all');
    wp_enqueue_style('header-wrap', get_stylesheet_directory_uri('/css/header__wrap.css'), null, microtime(), 'all');
    wp_enqueue_style('home', get_stylesheet_directory_uri('/css/home.css') , null, microtime(), 'all');
    wp_enqueue_style('homepage', get_stylesheet_directory_uri('/css/homepage.css') , null, microtime(), 'all');
    wp_enqueue_style('new', get_stylesheet_directory_uri('/css/new.css') , null, microtime(), 'all');
    wp_enqueue_style('search', get_stylesheet_directory_uri('/css/search.css') , null, microtime(), 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');?>