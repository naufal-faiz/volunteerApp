<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GoodDeed - {{ $title }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('vesperr/assets/img/GoodDeed.png') }}" rel="icon">
    <link href="{{ asset('vesperr/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vesperr/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('vesperr/assets/css/main.css') }}" rel="stylesheet">

    {{-- Main CSS File ColorLib --}}
    <link rel="stylesheet" href="{{ asset('colorlib/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('colorlib/css/style.css') }}">
    <style>
        .no-spinner::-webkit-outer-spin-button,
        .no-spinner::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .no-spinner {
            -moz-appearance: textfield;
        }

        .btn-register {
            width: 100%;
            height: 48px;
            background: #33A1E1;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>

<body class="index-page">
    @include('home.partials.navbar')
    <main class="main mt-3">
        @yield('content')
    </main>
    @include('home.partials.footer')


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('home.partials.loader')

    <!-- Vendor JS Files -->
    <script src="{{ asset('vesperr/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vesperr/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('vesperr/assets/js/main.js') }}"></script>
    <script src="{{ asset('colorlib/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('colorlib/js/main.js') }}"></script>

</body>

</html>
