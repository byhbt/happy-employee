<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Happy Employee') }}</title>
    <link href="/css/all.css" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Happy Employee</span></a>
                </div>
                <div class="clearfix"></div>
                <br />
                @include('layouts.sidebar')
                <div class="sidebar-footer hidden-small">
                    @include('layouts.sidebar-footer')
                </div>
            </div>
        </div>
        @include('layouts.nav-header')
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <footer>
            <div class="pull-right">
                Happy Employee
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
<!-- Scripts -->
<script src="/js/all.js"></script>
</body>
</html>
