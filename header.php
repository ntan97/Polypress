<!doctype HTML>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <?php wp_head(); ?>
</head>

<body unresolved <?php body_class(array('fullbleed', 'layout', 'vertical')); ?>>
  <paper-drawer-panel force-narrow>
    <paper-header-panel medium drawer transition>
        <?php
          $args = array(
            'menu'  => 'header_menu',
            'theme_location'  => 'header_menu',
            'container'         => false,
            'items_wrap'      => '<paper-menu id="%1$s" class="%2$s">%3$s</paper-menu>',
            'walker'          => new polymer_walker_nav_menu(),
            'fallback_cb'     => 'polymer_walker_nav_menu::fallback',
          );
          wp_nav_menu($args);
        ?>
    </paper-header-panel>
    <paper-header-panel class="flex" main>
      <paper-toolbar>
        <paper-icon-button icon="menu" paper-drawer-toggle ></paper-icon-button>
        <h2><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('sitename'); ?></a></h2>
      </paper-toolbar>
