var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.stylus('app.styl').copy('node_modules/font-awesome/fonts', 'public/fonts');
});
