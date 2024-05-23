<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="bdapps Android Academy">
    <meta name="keywords" content="bdapps,Android,Academy 2024">
    <title>{{ !isset($title) ? 'bdapps Android Academy' : 'bdapps Android Academy - '.$title }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/user/logo/favicon.ico') }}">

    <meta property="og:title" content="bdapps Android Academy">
    <meta property="og:url" content="http://nh22.bdapps.com/">
    <meta property="og:description" content="bdapps Android Academy">
    <meta property="og:image" content="http://nh22.bdapps.com/v2/assets/logos/main-logo.png">
    <meta property="og:type" content="website" />


    <link rel="stylesheet" href="{{ asset('assets/user/bootstrap/css/bootstrap.min.css') }}">

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('assets/user/fonts/Ample Soft Pro/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!--slick-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/slick/slick-theme.css') }}"/>
    <!-- -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{ asset('assets/user/css/styles.css?v=1.3') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/mediaStyles.css') }}">

    @yield('extra-head-script')

   

</head>
<body>

    @include('user.layout.header')
 
    @yield('content')
    
    @include('user.layout.footer')


    <script src="{{ asset('assets/user/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/user/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="{{ asset('assets/user/js/slick-slider.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.17.2/standard-all/ckeditor.js"></script>
    
    @yield('extra-foot-script')
    
  </body>
</html>
