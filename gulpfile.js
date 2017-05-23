/**
 * Created by Dhales on 14/05/2017.
 */
"USE STRICT"

var elixier = require('laravel-elixir');

// Pasta com as vendors
var vendor = './node_modules/';

// Array com os Scripts
var scripts = [
    vendor + 'jquery/dist/jquery.min.js',
    vendor + 'bootstrap/dist/js/bootstrap.min.js',
    vendor + 'angular/angular.min.js',
    vendor + 'angular-animate/angular-animate.min.js',
    vendor + 'angular-aria/angular-aria.min.js',
    vendor + 'angular-messages/angular-messages.min.js',
    vendor + 'angular-material/angular-material.min.js',
    './app/config/**',
];

// Array com os Styles
var styles = [
    vendor + 'bootstrap/dist/css/bootstrap.min.css',
    vendor + 'bootstrap/dist/css/bootstrap-theme.min.css',
    vendor + 'angular-material/angular-material.min.css',
];

// Array com as Fonts
var fonts = [
    vendor + 'material-design-icons/iconfont/**',
    vendor + 'bootstrap/dist/fonts/**',
    './resources/assets/fonts/**'
];

// Array com as Images
var images = [
    './resources/assets/images/**'
];

elixier(function (mix) {
   /* mix.less(
        './resources/assets/less/app.less', './resources/assets/styles/app.css'
    );

    ;


    mix.scripts(scripts);

*/
    mix.copy(images, './public/images/');
    mix.copy(fonts, './public/fonts/');
    mix.scripts(scripts);
    mix.styles(styles);
});