<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <title><?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

  <style>
    html,body {
      height: 100%;
      margin: 0;
      background-color: #E5E5E5;
      font-family: 'RobotoDraft', sans-serif;
    }
    core-header-panel {
      height: 100%;
      overflow: auto;
      -webkit-overflow-scrolling: touch;
    }
    core-toolbar {
      background-color: #03a9f4;
      color: white;
    }
  </style>

  <?php wp_head(); ?>

  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/polymer/polymer.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-toolbar/paper-toolbar.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-roboto/roboto.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-menu/paper-menu.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/paper-item/paper-item.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/iron-flex-layout/iron-flex-layout.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/iron-icons/iron-icons.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/iron-menu-behavior/iron-menu-behavior.html">
  <link rel="import" href="<?php echo get_template_directory_uri(); ?>/bower_components/iron-component-page/iron-component-page.html">
</head>

<body unresolved <?php body_class(); ?>>
  <paper-drawer-panel>
    <paper-header-panel drawer>
      <paper-toolbar role="toolbar">
        <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
        <?php
          $args = array(
          	'theme_location'  => 'header_menu',
          	'depth'           => 1,
            'items_wrap'      => '<paper-menu selected="0" role="menu" id="%1$s" class="%2$s">%3$s</paper-menu>',
            'walker'          => new polymer_walker_nav_menu(),
            'container'       => false,
          );
          wp_nav_menu($args);
        ?>
      </paper-toolbar>
    </paper-header-panel>
</paper-drawer-panel>
<iron-component-page></iron-component-page>
