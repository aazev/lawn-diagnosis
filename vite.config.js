import react from '@vitejs/plugin-react';
import autoprefixer from 'autoprefixer';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';
import { defineConfig } from 'vite';

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        react(),
        laravel({
            server: {
                port: 8000,
            },
            input: [
                "resources/js/admin.js",
                "resources/css/admin.css",
                "resources/ts/app.ts",
                "resources/css/app.css",
            ],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [tailwindcss("tailwind.config.js"), autoprefixer],
        },
    },
});
