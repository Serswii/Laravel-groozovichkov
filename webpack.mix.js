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

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/all.min.js', 'public/js');
mix.js('resources/js/brands.js', 'public/js');
mix.js('resources/js/fontawesome.js', 'public/js');
mix.js('resources/js/solid.js', 'public/js');
mix.js('resources/js/jquery-3.6.0.min.js', 'public/js');
mix.postCss('resources/css/app.css', 'public/css', [
    ]).version();
mix.postCss( 'resources/css/bootstrap.min.css', 'public/css').version();
mix.postCss( 'resources/css/normalize.css', 'public/css').version();
mix.postCss( 'resources/css/style.css', 'public/css').version();
mix.browserSync('http://127.0.0.1:8000');
