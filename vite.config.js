/**
 * View your website at your own local server.
 * Example: if you're using WP-CLI then the common URL is: http://localhost:8080.
 * 
 * http://localhost:5173 is serving Vite on development. Access this URL will show empty page.
 * 
 * IMPORTANT! <= TODO: Check this if this statement is true!
 * Image urls in CSS works well in production mode.
 * But, you need to create a symlink on dev server to map this folder during development mode:
 * ln -s {path_to_vite}/src/assets {path_to_public_html}/assets
 */

import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        liveReload(__dirname + '/**/*.php')
    ],

    // config
    root: '',
    base: process.env.NODE_ENV === 'development' ? '/' : '/public/',

    build: {
        // output dir for production build
        outDir: resolve(__dirname, './public'),
        emptyOutDir: true,

        // emit manifest so PHP can find the hashed files
        manifest: true,

        // esbuild target
        target: 'es6',

        rollupOptions: {
            input: {
                main: resolve(__dirname + '/main.js')
            },
        },

        minify: true,
        write: true
    },

    server: {
        // required to load scripts from custom host
        cors: {
            origin: "*"
        },
        
        // We need a strict port to match on PHP side.
        // You can change it. But, please update it on your .env file to match the same port
        strictPort: true,
        port: 5173,
        
        // Disable https
        https: false,

        hmr: {
            host: 'localhost'
        }
    },
});