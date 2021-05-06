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
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/front/css/slick.css',
    'resources/assets/front/css/select.css',
    'resources/assets/front/css/jquery.countdown.css',
    'resources/assets/front/css/main.css',
], 'public/assets/front/css/front.css');

mix.scripts([
    'resources/assets/front/js/select.js',
    'resources/assets/front/js/slick.min.js',
    'resources/assets/front/js/select.min.js',
    'resources/assets/front/js/jquery.plugin.min.js',
    'resources/assets/front/js/jquery.countdown.min.js',
    'resources/assets/front/js/jquery.countdown-ru.js',
    'resources/assets/front/js/maskedinput.min.js',
    'resources/assets/front/js/main.js',
    'resources/assets/front/js/scripts.all.js',
], 'public/assets/front/js/front.js');

mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/img', 'public/assets/front/img');

