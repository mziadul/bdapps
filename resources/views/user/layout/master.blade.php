<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '454171063190193');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src=https://www.facebook.com/tr?id=454171063190193&ev=PageView&noscript=1
  /></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-47WL0K5P9V"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-47WL0K5P9V');
  </script>

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
    <link rel="stylesheet" href="{{ asset('assets/user/fonts/nunito/stylesheet.css') }}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet"> --}}
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
