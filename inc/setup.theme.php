<?php

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );

    register_nav_menus(array(
        'header-nav' => 'Header Navigation'
    ));
} );