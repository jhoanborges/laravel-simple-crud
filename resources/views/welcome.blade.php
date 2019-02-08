<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jhoan Borges</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{url('css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{url('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{url('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('css/style.red.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
        <link rel="stylesheet" href="{{url('css/jquery.dataTables.min.css')}}">
            <link rel="stylesheet" href="{{url('css/animate.css')}}">

    <!-- Favicon-->
    {{--<link rel="shortcut icon" href="{{url('img/favicon.ico')}}">--}}

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

@yield('content')




    <!-- JavaScript files-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{url('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{url('js/front.js')}}"></script>
        <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/loadingoverlay.min.js')}}"></script>

          <script src="{{url('js/wow.min.js')}}"></script>

              <script>
              new WOW().init(
  {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                );
              </script>

        @include('sweetalert::alert')
        @yield('extra-js')
  </body>
</html>
