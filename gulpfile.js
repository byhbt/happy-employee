var elixir = require('laravel-elixir');
elixir(function (mix) {
    mix.copy('bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');
    mix.copy('bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');

    mix.combine([
        'bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css',
        'bower_components/gentelella/build/css/custom.css'
    ], 'public/css/all.css');

    mix.combine([
        'bower_components/gentelella/vendors/jquery/dist/jquery.min.js',
        'bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/gentelella/vendors/iCheck/icheck.min.js',
        'bower_components/gentelella/vendors/moment/min/moment.min.js',
        'bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js',
        'bower_components/gentelella/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
        'resources/assets/js/gentelella.js',
        'resources/assets/js/app.js'
    ], 'public/js/all.js');
});
