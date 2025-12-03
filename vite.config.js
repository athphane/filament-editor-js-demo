import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: 'localhost',
        port: 5173,
        cors: true, // 👈 Enable CORS for dev
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/filament/admin/theme.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/editor-js-highlight-plugin.js',
                'resources/js/checklist.js',
                'resources/js/link.js',
                'resources/js/code.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],

    esbuild: {
        minify: false,
        keepNames: true,
    },
});
