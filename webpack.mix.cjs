const mix = require('laravel-mix');

// Combine CSS files
mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/bootstrap-extended.css',
    'resources/css/app.css',
    'resources/css/icons.css',
    'resources/css/pace.min.css',
    'resources/plugins/simplebar/css/simplebar.css',
    'resources/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
    'resources/plugins/metismenu/css/metisMenu.min.css'
], 'public/css/all.css');

// Combine JavaScript files
mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/plugins/simplebar/js/simplebar.min.js',
    'resources/plugins/metismenu/js/metisMenu.min.js',
    'resources/plugins/perfect-scrollbar/js/perfect-scrollbar.js',
    'resources/js/app.js'
], 'public/js/all.js');
