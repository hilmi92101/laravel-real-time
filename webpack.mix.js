const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

require("laravel-mix-vue3");
mix.js('resources/js/real-time/app.js', 'public/js/real-time.js')
    .vue()
    .sass('resources/scss/real-time/app.scss', 'public/css/real-time.css'); 
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ]);
