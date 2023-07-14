<?php

if (! defined( 'ABSPATH' )) {
    exit;
}

// Define dist directory, base uri, and path
define('DIST_DIR', 'public');
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DIR);
define('DIST_PATH', get_template_directory() . '/' . DIST_DIR);

// default server address, port, and entry point can be customized in vite.config.js
define('VITE_ENV', $_SERVER['VITE_ENV']);
define('VITE_SERVER', $_SERVER['VITE_SERVER']);
define('VITE_ENTRY_POINT', '/main.js');

// enqueue hook
add_action( 'wp_enqueue_scripts', function () {
    if (defined('VITE_ENV') && VITE_ENV === 'development') {
        function vite_head_module_hook() {
            echo '<script type="module" crossorigin src="'. VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
        }
        add_action( 'wp_head', 'vite_head_module_hook' );
    } else {
        // Production version
        $manifest = json_decode(file_get_contents(DIST_PATH . '/manifest.json'), true);
        if (is_array($manifest)) {
            $manifest_keys = array_keys($manifest);
            
            // CSS
            if (isset($manifest_keys['0'])) {
                wp_enqueue_style( 'main', DIST_URI . '/' . $manifest[$manifest_keys['0']]['file'], array(), false, 'screen' );
            }

            // JS
            if (isset($manifest_keys['1'])) {
                wp_enqueue_script( 'main', DIST_URI . '/' . $manifest[$manifest_keys['1']]['file'], array(), false, true );
            }
        }
    }
});