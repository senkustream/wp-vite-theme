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
require_once 'inc/setup.theme.php';