import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },

    server: {
        host: 'dev.santanupradhan.in',
        port: 5174,
        strictPort: true,

        cors: {
            origin: [
                'http://dev.santanupradhan.in',
                'http://dev.articles.santanupradhan.in',
            ],
        },

        hmr: {
            host: 'dev.santanupradhan.in',
            port: 5174,
        },
    },

    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
})
