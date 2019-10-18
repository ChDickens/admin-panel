const mix = require('laravel-mix');

mix.js('resources/js/admin/app.js', 'public/admin/js')
    .sass('resources/sass/admin/app.scss', 'public/admin/css')
    .version();
