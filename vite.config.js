import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/tabler-icons.css',
                'resources/css/style.css',
                'resources/css/tiny-slider.css',
                'resources/scss/styles.scss',
                'resources/js/dashboard.js',
                'resources/js/sidebarmenu.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
