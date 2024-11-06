<?php
add_action('wp_enqueue_scripts', function () {


  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);
  wp_enqueue_style('google-fonts-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', array(), null);
  wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined');
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/styles/reset.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/styles/normalize.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/style.css');


  wp_enqueue_script('ionicons-module', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), null, true);
  wp_script_add_data('ionicons-module', 'type', 'module');
  wp_enqueue_script('ionicons-nomodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), null, true);
  wp_script_add_data('ionicons-nomodule', 'nomodule', true);
  
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);
  wp_enqueue_script('animation-script', get_template_directory_uri() . '/assets/js/animation-list.js', array(), null, true);
  wp_enqueue_script('hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', array('jquery'), null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>