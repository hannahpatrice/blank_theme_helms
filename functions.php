<?php

  function register_my_menus() {
    register_my_menus (
      array (
        'header-menu'
      )
      )
  }


//Widget

  function blank_widget_init() {
    register_sidebar(array(
      'name' => ('Home Page Hero Image'),
      'id' => 'Home Hero Image',
      'description' => 'This widget is for the hero image that will appear on the home page',
      'before-widget' => '<div class="hero-image">',
      'after-widget' => '</div>',
      'before-title' => '<h2>',
      'after-title' => '</h2>',
    ));
  }

  add_action('widgets_init', 'blank_widget_init')
 ?>
