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
/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/

/*
mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/app1.scss', 'public/css/app.css');

mix.js('resources/js/a1.js', 'public/js/app.js')
    .js('resources/js/a2.js', 'public/js/app.js');
*/

/*
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
])
    .postCss('resources/css/estilos.css', 'public/css', [
        require('tailwindcss'),
    ]);
*/

//mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/main.js', 'public/js');
mix.postCss('resources/css/estilos.css', 'public/css', [
    require('tailwindcss'),
])