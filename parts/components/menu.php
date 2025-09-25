<?php
    wp_nav_menu(array(
        'theme_location'  => 'menu_primary',
        'container'       => 'nav',
        'container_class' => 'main-nav',
        'menu_class'      => 'main-menu',
        'fallback_cb'     => false,
    ));
?>