<!doctype html>
<html>

<head>

  <title><?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

  <script src="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/webcomponentsjs/webcomponents.js"></script>

  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/polymer/polymer.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/iron-flex-layout/iron-flex-layout.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-styles/paper-styles.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/font-roboto/roboto.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-header-panel/paper-header-panel.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-toolbar/paper-toolbar.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-drawer-panel/paper-drawer-panel.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-tabs/paper-tabs.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-menu/paper-menu.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-item/paper-item.html">
  <link rel="import" href="<?php echo home_url(); ?>/wp-content/themes/polypress/bower_components/paper-material/paper-material.html">

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
      background: #03a9f4;
      color: white;
    }
    #tabs {
      width: 100%;
      margin: 0;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      text-transform: uppercase;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body unresolved <?php body_class(); ?>>
  <paper-drawer-panel>
    <paper-header-panel drawer>
      <paper-toolbar>
        <div title>
          <a href="<?php echo home_url(); ?>">PolyPress</a>
        </div>
      </paper-toolbar>
      <paper-menu selected="0">
        <paper-item>Item 1</paper-item>
        <paper-item>Item 2</paper-item>
      </paper-menu>
    </paper-header-panel>
    <paper-header-panel main>
      <paper-toolbar>
        <paper-icon-button icon="menu" paper-drawer-toggle>Menu</paper-icon-button>
        <div title><?php the_title(); ?></div>
        <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
      </paper-toolbar>
    </paper-header-panel>
  </paper-drawer-panel>
