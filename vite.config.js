import { defineConfig } from 'vite';
import { useForm } from 'laravel-precognition-vue-inertia';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.scss', 'resources/js/app.js'],
      refresh: true,

    }),
    vue({
      template: {
        CompilerOptions: {},
        transformAssetUrls: {},
      },
    }),
  ],
});
