<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('themeassets/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('themeassets/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('themeassets/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        {{-- <div class="bg-overlay"></div> --}}
        <div class="wrapper-page">
            @yield('login')
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('themeassets/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('themeassets/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('themeassets/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('themeassets/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('themeassets/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('themeassets/assets/js/app.js')}}"></script>

    </body>
</html>
