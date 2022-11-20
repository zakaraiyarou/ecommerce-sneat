import { defineConfig, normalizePath } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/vendor/fonts/boxicons.scss',
                'resources/assets/vendor/scss/core.scss',
                'resources/assets/vendor/scss/theme-default.scss',
                'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.scss',
                'resources/assets/css/demo.css',
                'resources/assets/vendor/libs/jquery/jquery.js',
                'resources/assets/vendor/libs/popper/popper.js',
                'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
                'resources/assets/vendor/js/bootstrap.js',
                'resources/assets/vendor/js/menu.js',
                'resources/assets/js/main.js',
                'resources/assets/vendor/js/helpers.js',
                'resources/assets/js/config.js',
                'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
                'resources/assets/vendor/libs/apex-charts/apexcharts.js',
                'resources/assets/js/dashboards-analytics.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
        viteStaticCopy({
            targets: [
                {
                    src: normalizePath(path.resolve(__dirname, 'resources/assets/img')),
                    dest: '../assets',
                }
            ]
        })
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~boxicons': path.resolve(__dirname, 'node_modules/boxicons'),
            '~perfect-scrollbar': path.resolve(__dirname, 'node_modules/perfect-scrollbar'),
            '~apexcharts-clevision': path.resolve(__dirname, 'node_modules/apexcharts-clevision'),
        }
    }
});
