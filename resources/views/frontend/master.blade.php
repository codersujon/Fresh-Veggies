<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fresh Veggies</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('frontend') }}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/{{ asset('frontend') }}/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    {{-- MAIN CONTENT START --}}

    @yield('main-content')
    
    {{-- END MAIN CONTENT --}}

    <!--copyright section start -->
    <div class="copyright_section">
        <p class="copyright_text">Copyright 2023 - {{ date('Y') }} All Right Reserved <a href="https://codersujon.com">CoderS</a></p>
    </div>
    <!--copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>
    <!-- javascript -->
    <script src="{{ asset('frontend') }}/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
