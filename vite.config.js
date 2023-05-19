import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/main.css',
                'resources/css/responsive.css',
                'resources/css/users.css',
                'resources/css/view_blog.css',
                'resources/css/add_blog.css',
                'resources/js/app.js',
                'resources/js/blogs.js',
                'resources/css/signin.css'
            ],
            refresh: true,
        }),
    ],
});
