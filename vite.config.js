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
        host: '127.0.0.1',
        port: 5173,
        strictPort: true,

        cors: {
            origin: [
                'http://dev.santanupradhan.in',
                'http://dev.articles.santanupradhan.in',
                'http://dev.admin.santanupradhan.in',
            ],
        },

        hmr: {
            host: '127.0.0.1',
            port: 5173,
        },
    },

    plugins: [
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: tag => tag.startsWith('x-'),
                },
            },
        }),

        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
})
