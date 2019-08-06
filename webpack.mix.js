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

mix.styles(['resources/css/materialize.css','resources/css/style.css'],'public/css/all.css')
    .js(['resources/js/jquery.js','resources/js/back.min.js','resources/js/materialize.js','resources/js/all.js'], 'public/js/all.js');
