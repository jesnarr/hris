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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .stylus('node_modules/flatpickr/src/style/flatpickr.styl', 'public/css');

mix.scripts(['node_modules/flatpickr/dist/flatpickr.min.js'], 'public/js/flatpickr.min.js');

if (mix.inProduction()) {
    mix.version();
}
