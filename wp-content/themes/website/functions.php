<?php

function my_custom_theme_enqueue_assets() {
   wp_enqueue_style('my-custom-theme-styles', get_stylesheet_uri());
   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css');
   wp_enqueue_style('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

   wp_enqueue_script('my-custom-theme-script', get_template_directory_uri() . '/script.js', array(), false, true);
   wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), false, true);

   wp_add_inline_script('aos-js', '
      AOS.init({
         duration: 800,
         delay: 300
      });
   ');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_assets');

?>
