import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Mukta', {
                    alias: 'mukta',
                    weights: [400, 500, 600, 700],
                    subsets: ['latin', 'devanagari'],
                    preload: [{ weight: 400 }, { weight: 700 }],
                }),
                bunny('Fraunces', {
                    alias: 'fraunces',
                    weights: [600, 700, 800],
                    preload: [{ weight: 700 }],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
