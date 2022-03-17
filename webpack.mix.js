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

mix
    // .js('resources/js/app.js', 'public/js')
    // mix.js('resources/js/app.js', 'public/js')
    // .js('resources/js/adminsrcipts.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css')
    // .sass('resources/sass/frontend.scss', 'public/css')
    // .sass('resources/sass/backend.scss', 'public/css')
    // .sass('resources/sass/pages.scss', 'public/css')
    .sass('resources/sass/sitestyle.scss', 'public/css')
    // .sass('resources/sass/loaders.scss', 'public/css')
    // .sass('resources/sass/plugins.scss', 'public/css/plugins-loaders.css')
    // .sass('resources/sass/adminLTE.scss', 'public/css/plugins/dashboard-template.css')
    .sass('resources/sass/fonts-loader.scss', 'public/css/plugins')
    .sourceMaps();
    // .postCss("resources/css/app.css", "public/css/app2.css", [   require("tailwindcss")]);

