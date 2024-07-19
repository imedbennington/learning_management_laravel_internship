const mix = require('laravel-mix');

// Combine CSS files
mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/bootstrap-extended.css',
    'resources/css/app.css',
    'resources/css/icons.css',
    'resources/css/pace.min.css'
], 'public/css/all.css');

// Combine JavaScript files
mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/app.js'
], 'public/js/all.js');
