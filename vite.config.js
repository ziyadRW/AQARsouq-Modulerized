import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    vue(),
  ],
  resolve: {
    alias: {
      '@Modules': path.resolve(__dirname, 'Modules'),
      '@Components': path.resolve(__dirname, 'resources/js/Components'),
      ziggy: path.resolve('vendor/tightenco/ziggy/dist/index.esm.js'),
    },
  },
});
