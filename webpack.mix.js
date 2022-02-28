const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
mix.styles([
    'public/assets/css/pages/login/login-1.css',
    'public/assets/plugins/global/plugins.bundle.css',
    'public/assets/plugins/custom/prismjs/prismjs.bundle.css',
    'public/assets/css/style.bundle.css',
], 'public/css/auth.css');

mix.scripts([
    'public/assets/plugins/global/plugins.bundle.js',
    'public/assets/plugins/custom/prismjs/prismjs.bundle.js',
    'public/assets/js/scripts.bundle.js',
], 'public/js/auth.js');


mix.styles([
    'public/assets/front/css/bootstrap.min.css',
    'public/assets/front/css/main.css',
], 'public/css/front.css');

mix.scripts([
    'public/assets/front/js/jquery-3.6.0.min.js',
    'public/assets/front/js/bootstrap.bundle.min.js',
    'public/assets/front/js/main.js',
], 'public/js/front.js');