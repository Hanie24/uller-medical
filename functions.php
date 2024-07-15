<?php 
function uller_medical_enqueue_styles() {
    wp_enqueue_style( 'uller_medical_style', get_stylesheet_uri() );

    wp_enqueue_script('jquery');
    wp_enqueue_script('index-ullermedical', get_stylesheet_directory_uri() . '/js/index.js', null, null, true);
}
add_action( 'wp_enqueue_scripts', 'uller_medical_enqueue_styles' );
?>