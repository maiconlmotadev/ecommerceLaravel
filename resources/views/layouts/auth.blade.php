<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
        @yield('css')
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="">
                <a ><{{ config('app.name') }}</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    @yield('content')
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('js')
    </body>
    </html>
