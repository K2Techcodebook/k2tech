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

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'public/js/bootstrap/css/bootstrap.min.css',
    'public/css/revolution/settings.css',
    'public/css/revolution/layers.css',
    'public/css/revolution/navigation.css',
    'public/css/style.css',
    'public/css/theme-colors/orange.css',
    'public/js/style-switcher/css/style-switcher.css',
    'public/css/line-icons/line-icons.css'
], 'public/home/css/all.css');
mix.scripts([
    'public/js/jquery.min.js',
    'public/js/bootstrap/js/bootstrap.min.js',
    'public/js/jquery.easing-1.3.min.js',
    'public/js/revolution/js/jquery.themepunch.tools.min.js',
    'public/js/revolution/js/jquery.themepunch.revolution.min.js', 
    'public/js/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min8a54.js?ver=1.0.0',
     'public/js/revolution/js/extensions/revolution.extension.slideanims.min.js',
      'public/js/revolution/js/extensions/revolution.extension.layeranimation.min.js',
       'public/js/revolution/js/extensions/revolution.extension.navigation.min.js',
       'public/js/parallax/jquery.parallax-1.1.3.js',
       'public/js/parallax/setting.js',
       'public/js/owlcarousel/js/owl.carousel.min.js',
       'public/js/owlcarousel/js/setting.js',
       'public/js/prettyPhoto/js/jquery.prettyPhoto.js',
       'public/js/prettyPhoto/js/setting.js',
       'public/js/masonry/js/masonry.min.js',
       'public/js/masonry/js/masonry.filter.js',
       'public/js/masonry/js/setting.js',
       'public/js/custom.js',
       'public/js/nicescroll/jquery.nicescroll.min.js',
       'public/js/nicescroll/settings.js',
       'public/js/style-switcher/js/style-switcher.js'
], 'public/home/js/all.js');