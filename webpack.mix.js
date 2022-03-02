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

// mix.js('resources/js/app.js', 'js')
//     .postCss('resources/css/app.css', 'css', [
//         //
//     ])
//     .setPublicPath('public/dist');




mix.autoload({
        'jquery': ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
        'popper.js/dist/umd/popper.js': ['Popper']
    })
    .js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css', [
        //
    ])
    .sass('resources/scss/app.scss', 'css')
    .setPublicPath('public/dist');
