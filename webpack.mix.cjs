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
    'resources/css/line-awesome.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/bootstrap-select.min.css',
    'resources/css/fancybox.css',
    'resources/css/tooltipster.bundle.css',
    'resources/plugins/metismenu/css/metisMenu.min.css'
], 'public/css/all.css');


// Combine JavaScript files
mix.scripts([
    'resources/js/animated-headline.js',
    'resources/js/jquery-3.4.1.min.js',
    'resources/js/animated-skills.js',
    'resources/js/jquery-te-1.4.0.min.js',
    'resources/js/app.js',
    'resources/js/jquery.MultiFile.min.js',
    'resources/js/bar-chart.js',
    'resources/js/jquery.counterup.min.js',
    'resources/js/bootstrap-select.min.js',
    'resources/js/jquery.lazy.min.js',
    'resources/js/bootstrap-tagsinput.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/leaflet.js',
    'resources/js/line-chart-2.js',
    'resources/js/line-chart.js',
    'resources/js/chart.js',
    'resources/js/main.js',
    'resources/js/datedropper.min.js',
    'resources/js/map.js',
    'resources/js/doughnut-chart.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/emojionearea.min.js',
    'resources/js/pace.min.js',
    'resources/js/fancybox.js',
    'resources/js/plyr.js',
    'resources/js/index.js',
    'resources/js/tooltipster.bundle.min.js',
    'resources/js/index2.js',
    'resources/js/utils.js',
    'resources/js/index3.js',
    'resources/js/waypoint.min.js',
    'resources/js/intlTelInput-jquery.min.js',
    'resources/js/widgets.js',
    'resources/js/isotope.js'
], 'public/js/all.js');

