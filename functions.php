<?php

// EXIT if access directly

use Dotenv\Dotenv;

if (! defined( 'ABSPATH' )) {
    exit;
}

require_once 'vendor/autoload.php';

// load .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once 'inc/vite.config.php';

if (! function_exists('wpvite_theme_support')) {
    function wpvite_theme_support() : void {
        add_theme_support( 'menus' );

        register_nav_menus(array(
            'header-nav' => 'Header Navigation'
        ));
    }
}

add_action( 'after_setup_theme', 'wpvite_theme_support' );