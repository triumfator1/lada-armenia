<?php  
  add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.0.2' );    
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2' );
    wp_enqueue_style(
      'main-style',
      get_template_directory_uri() . '/style.css',
      array(),
      filemtime(get_template_directory() . '/style.css')
    );
  });
