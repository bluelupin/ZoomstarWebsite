<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- title --}}
    <title>ZoomStar</title>
    <link href="{{ asset('images/zoomstar.png') }}" rel="icon">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{--  images --}}
    {{-- <link href="{{ asset('storage/favicon.png') }}" rel="icon"> --}}
    {{-- <link href="{{ asset('storage/apple-touch-icon.png') }}" rel="icon"> --}}
    {{-- styles --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/materialdesignicons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    {{-- header --}}
     @include('includes.sidebar')
     {{-- content --}}
     @yield('content')
     {{-- footer --}}
     @include('includes.footer')
    <a href="#" class="back-to-top"><i class="mdi mdi-arrow-up"></i></a>
     <!-- Scripts -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.scrollTo.js') }}"></script> --}}
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/validate.js') }}"></script> --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>