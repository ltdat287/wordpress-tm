<?php
function tmn_enqueue() {
  wp_enqueue_script('jquery'); 
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
  wp_enqueue_script( 'owl-carousel',get_template_directory_uri() . '/assets/vendo/owl-carousel/owl.carousel.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/vendo/parallax/parallax.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ) );
}

add_action( 'init', 'tmn_enqueue' );

