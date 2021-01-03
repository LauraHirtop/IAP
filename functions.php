<?php

function link_css_stylesheet() {
   // wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );

    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/slidescript.js', array ( 'jquery' ), 1.1, true);

}

    add_action('wp_enqueue_scripts', 'link_css_stylesheet');
    
?>