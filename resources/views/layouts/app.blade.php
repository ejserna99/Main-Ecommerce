<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap/bootstrap.css') }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/font-awesome/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon/feather-icon.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick/slick-theme.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-style.css') }}">

    @livewireStyles

    @stack('extra-css')
</head>

<body class="">
    <!-- Header Start -->
    @livewire('site.components.header')
    <!-- Header End -->

    <!-- mobile fix menu start -->
    @livewire('site.components.mobile-menu')
    <!-- mobile fix menu end -->

    {{ $slot }}

    <!-- Footer Section Start -->
    @livewire('site.components.footer')
    <!-- Footer Section End -->

    @livewire('modals')

    @livewireScripts

    <!-- latest jquery-->
    <script src="{{ asset('js/vendors/jquery/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('js/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('js/vendors/feather/feather.min.js') }}"></script>
    <script src="{{ asset('js/vendors/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('js/vendors/lazysizes/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('js/vendors/slick/slick.js') }}"></script>
    <script src="{{ asset('js/vendors/slick/custom_slick.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('js/quantity-2.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Livewire Nootstrap Modal -->
    <script src="{{ asset('vendor/livewire-bootstrap-modal/js/modals.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @stack('extra-js')
</body>

</html>
