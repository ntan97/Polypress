<?php
  // WP Polymer Nav
  require_once 'inc/wp_polymer_nav.php';

  function polypress_styles () {
    wp_enqueue_script('webcomponents', get_template_directory_uri().'/bower_components/webcomponentsjs/webcomponents.js');
  }
  add_action('wp_enqueue_scripts', 'polypress_styles');


  function polypress_menu_support() {
    register_nav_menus(
      array(
        'header_menu' => 'Header Menu',
      )
    );
  }
  add_action('init', 'polypress_menu_support');

  function theme_support() {
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support('menus');
  }
  add_action('init', 'theme_support');
 ?>
