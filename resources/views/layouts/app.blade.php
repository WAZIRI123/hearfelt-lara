<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/heartfelt-ico.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/heartfelt-ico.ico') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Heartfelt') }} - @yield('title')</title>

   
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/imagelightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    @stack('styles')
</head>
<body cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1266.0" data-gr-ext-installed="">
    
    <x-header />
    <x-navigation/>
    <x-side-modal/>
    
    <main>
            @yield('content')
        </main>

    <!-- JavaScript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/imagelightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/js/rev-slider-custom.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
