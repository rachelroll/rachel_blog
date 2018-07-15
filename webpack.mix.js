let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css').options({
    processCssUrls: false
});
mix.copy('resources/assets/js/timeLine.min.js', 'public/js/timeLine.min.js');
mix.copy('resources/assets/css/timeLine.css', 'public/css/timeLine.css');

if (mix.inProduction()) {
    mix.version();
}
