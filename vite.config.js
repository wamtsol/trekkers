import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
          // Use styleImport to handle global imports
          // Syntax: `@import '~<package>/<path-to-file>';`
          scss: {
            additionalData: `
              @import '~normalize.css/normalize.css';
            `,
          },
        },
      },
});