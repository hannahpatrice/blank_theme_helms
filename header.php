<!DOCTYPE html>
<html lang="en">
<head>
  <mets charset="<?php bloginfo('chartset'); ?>">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

  <link rel="stylesheets" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>

<body>
  <header>
    <div class="container">
      <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>

      <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
    </div>
  </header>
