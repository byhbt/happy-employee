var elixir = require('laravel-elixir');
elixir(function (mix) {
    mix.copy('bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
    mix.copy('bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
    mix.copy('bower_components/gentelella/build/css/custom.min.css', 'public/css/custom.min.css');

    mix.copy('bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
    mix.copy('bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    mix.copy('bower_components/gentelella/build/js/custom.min.js', 'public/js/custom.min.js');

    mix.copy('bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');
    mix.copy('bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');

    mix.combine([
        'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/custom.min.css'
    ], 'public/css/all.css');

    mix.combine([
        'public/js/jquery.min.js',
        'public/js/bootstrap.min.js',
        'public/js/custom.min.js'
    ], 'public/js/all.js');
});
