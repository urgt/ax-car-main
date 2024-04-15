let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm-bundler.js'
        }
    }
});

mix.css('style.css', 'css');

mix.js('assets/script.js', 'dist/js')
   .vue().autoload({
    jquery: ['$', 'window.jQuery']
});

// mix.js('assets/script.js', 'js').setPublicPath('dist');