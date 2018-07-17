<?php
$args = array(
    'theme_location' => 'header',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'menu_class' => 'swipe-menu__list',
    'menu_id' => 'main-menu',
    'walker' => '',
    'container' => 'nav',
    'container_class' => 'swipe-menu',
    'container_id' => 'side-menu',

);
wp_nav_menu($args);
?>