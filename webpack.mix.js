let mix = require('laravel-mix');

mix.css('style.css', 'css');

mix.js('assets/script.js', 'js').setPublicPath('dist').autoload({
    jquery: ['$', 'window.jQuery']
 });;