<!doctype HTML>
<html <?php language_attributes(); ?>>

<head>

  <title><?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

  <?php wp_head(); ?>
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
  <!-- <iron-component-page></iron-component-page> -->
