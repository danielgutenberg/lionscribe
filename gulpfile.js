const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir(mix => {
//    mix.sass('app.scss')
//       .webpack('app.js');
//});

elixir(function(mix) {

    mix.rollup('app.js')
        .sass('app.scss')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/build/fonts/bootstrap')
        .version(['js/app.js', 'css/app.css']);
});
