<!doctype html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P-Cash | @yield('title')</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="description" content="We Provide You The Best Brokers and Seamless Trading Platform. We provide you the best brokers on our list as its platform improvement is currently on the works to give you finest trading experience.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homepage | P-Cash">
    <meta property="og:description" content="We Provide You The Best Brokers and Seamless Trading Platform. We provide you the best brokers on our list as its platform improvement is currently on the works to give you finest trading experience.">
    <meta property="og:url" content="https://p-cash.id/">
    <meta property="og:site_name" content="P-Cash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="We Provide You The Best Brokers and Seamless Trading Platform. We provide you the best brokers on our list as its platform improvement is currently on the works to give you finest trading experience.">
    <meta name="twitter:title" content="Homepage | P-Cash">

    <meta name="keywords" content="brokers, trader, trading, forex, basecamp">

    <link rel="icon" href="https://p-cash.id/assets/ico.png" sizes="32x32">
    <link rel="canonical" href="https://p-cash.id/">

    <!-- Fonts -->
    <link href="{{ asset('/assetNewDesign') }}/css/montserrat.css" rel="stylesheet">
    <link href="{{ asset('/assetNewDesign') }}/css/raleway.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assetNewDesign') }}/css/validator.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assetNewDesign') }}/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assetNewDesign') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assetNewDesign') }}/css/styles.css" />

    <script src="{{ asset('/assetNewDesign') }}/js/jquery-3.3.1.min.js"></script>
    @yield('head')

</head>

<body>
    <div id="main-wrapper">
        <header class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="navbar-brand logo">
                        <a href="{{ url('') }}">
                            <svg id="logo" style="enable-background:new 0 0 600 175;" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 600 175" version="1.1" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0{fill:currentColor;}
                                </style>
                                            <path class="st0" d="m129.6 66.7h-10.1v20.6h10.2c3.8 0 6.8-0.9 9-2.7s3.3-4.3 3.3-7.4v-0.2c0-3.3-1.1-5.9-3.3-7.6-2.1-1.8-5.2-2.7-9.1-2.7z"></path>
                                            <path class="st0" d="m123.9 0c-48.4 0-87.5 39.2-87.5 87.5s39.1 87.5 87.5 87.5 87.5-39.2 87.5-87.5-39.2-87.5-87.5-87.5zm39.5 76.2c0 4.6-0.8 8.6-2.5 12-1.7 3.5-4 6.4-6.9 8.7-2.9 2.4-6.5 4.1-10.6 5.3s-8.5 1.8-13.3 1.8h-10.6v22.1h-21.4v-77.3h33.2c4.9 0 9.3 0.6 13.3 1.8s7.4 3 10.2 5.3 5 5.2 6.5 8.6 2.3 7.2 2.3 11.5v0.2z"></path>
                                        <path class="st0" d="m244.6 88.2v-0.2c0-21.9 16.4-40 38.7-40 13.8 0 22.1 5.1 30.1 12.4l-4.1 4.2c-6.7-6.5-14.5-11.4-26.1-11.4-18.6 0-32.6 15.1-32.6 34.6v0.2c0 19.6 14.3 34.8 32.7 34.8 11.2 0 18.8-4.3 26.6-12.1l3.9 3.8c-8.2 8.1-17 13.5-30.7 13.5-22.1 0-38.5-17.6-38.5-39.8z"></path>
                                        <path class="st0" d="m364.6 48.7h5.5l36 77.9h-6.3l-9.8-21.6h-45.7l-9.8 21.7h-6l36.1-78zm23 51.1l-20.4-44.8-20.4 44.8h40.8z"></path>
                                        <path class="st0" d="m421.4 115.4l3.8-4.3c8.5 7.8 16.4 11.5 27.7 11.5 11.6 0 19.6-6.5 19.6-15.4v-0.2c0-8.2-4.3-12.9-21.9-16.5-18.6-3.8-26.1-10.1-26.1-21.8v-0.2c0-11.5 10.5-20.3 24.9-20.3 11.3 0 18.7 3.1 26.5 9.4l-3.6 4.5c-7.3-6.3-14.6-8.7-23.1-8.7-11.4 0-18.9 6.5-18.9 14.6v0.2c0 8.2 4.2 13.2 22.5 16.9 17.9 3.6 25.4 10.1 25.4 21.3v0.2c0 12.5-10.7 21.1-25.6 21.1-12.4 0-21.9-4-31.2-12.3z"></path>
                                        <path class="st0" d="m502.6 49.3h5.7v35.8h49.5v-35.8h5.7v77.4h-5.7v-36.3h-49.5v36.3h-5.7v-77.4z"></path>
                            </svg>
                        </a>
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menus" aria-controls="menus" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="menus">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-primary scroll">Create Account</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
        </header>
        
        @yield('main')
        
        <footer id="footer" class="container-fluid px-0">
            <div class="container col-md-7 py-5">
                <h2 class="white text-center first my-3">Subscribe Our Newsletter</h2>
                <h6 class="white vvl text-center mb-5">Get our newest informations and get some befenefits from being our subscriber! Also you can unsubscribe whenever you want</h6>
                <form action="https://portofolio.us18.list-manage.com/subscribe/post-json?u=daaa86e60e30812f4c2d4b312&amp;id=1d843dec77&c=?" target="_blank" class="ml-auto form-horizontal container pb-md-5" data-toggle="validator" role="form" id="subscribe" method="post">
                            <div class="col-md-12 mx-auto">
                                <div class="row">
                                    <div class="col-md-6 mb-auto pos-relative">
                                                <input name="EMAIL" placeholder="Put Your Email Here" class="form-control" type="text" autocomplete='email'>
                                    </div>
                                    <div class="col-md-6 mb-auto">
                                            <button type="submit" class="w-100 btn text-uppercase py-3">
                                                <span class="b">
                                                    subscribe now!
                                                </span>
                                            </button>          
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
            <div class="container-fluid line">

            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 text-center mx-auto white mt-2 mb-4">               
                            <a href="{{ url('') }}">
                                <svg id="logo" style="enable-background:new 0 0 600 175;" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 600 175" version="1.1" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <style type="text/css">
                                        .st0{fill:currentColor;}
                                    </style>
                                                <path class="st0" d="m129.6 66.7h-10.1v20.6h10.2c3.8 0 6.8-0.9 9-2.7s3.3-4.3 3.3-7.4v-0.2c0-3.3-1.1-5.9-3.3-7.6-2.1-1.8-5.2-2.7-9.1-2.7z"></path>
                                                <path class="st0" d="m123.9 0c-48.4 0-87.5 39.2-87.5 87.5s39.1 87.5 87.5 87.5 87.5-39.2 87.5-87.5-39.2-87.5-87.5-87.5zm39.5 76.2c0 4.6-0.8 8.6-2.5 12-1.7 3.5-4 6.4-6.9 8.7-2.9 2.4-6.5 4.1-10.6 5.3s-8.5 1.8-13.3 1.8h-10.6v22.1h-21.4v-77.3h33.2c4.9 0 9.3 0.6 13.3 1.8s7.4 3 10.2 5.3 5 5.2 6.5 8.6 2.3 7.2 2.3 11.5v0.2z"></path>
                                            <path class="st0" d="m244.6 88.2v-0.2c0-21.9 16.4-40 38.7-40 13.8 0 22.1 5.1 30.1 12.4l-4.1 4.2c-6.7-6.5-14.5-11.4-26.1-11.4-18.6 0-32.6 15.1-32.6 34.6v0.2c0 19.6 14.3 34.8 32.7 34.8 11.2 0 18.8-4.3 26.6-12.1l3.9 3.8c-8.2 8.1-17 13.5-30.7 13.5-22.1 0-38.5-17.6-38.5-39.8z"></path>
                                            <path class="st0" d="m364.6 48.7h5.5l36 77.9h-6.3l-9.8-21.6h-45.7l-9.8 21.7h-6l36.1-78zm23 51.1l-20.4-44.8-20.4 44.8h40.8z"></path>
                                            <path class="st0" d="m421.4 115.4l3.8-4.3c8.5 7.8 16.4 11.5 27.7 11.5 11.6 0 19.6-6.5 19.6-15.4v-0.2c0-8.2-4.3-12.9-21.9-16.5-18.6-3.8-26.1-10.1-26.1-21.8v-0.2c0-11.5 10.5-20.3 24.9-20.3 11.3 0 18.7 3.1 26.5 9.4l-3.6 4.5c-7.3-6.3-14.6-8.7-23.1-8.7-11.4 0-18.9 6.5-18.9 14.6v0.2c0 8.2 4.2 13.2 22.5 16.9 17.9 3.6 25.4 10.1 25.4 21.3v0.2c0 12.5-10.7 21.1-25.6 21.1-12.4 0-21.9-4-31.2-12.3z"></path>
                                            <path class="st0" d="m502.6 49.3h5.7v35.8h49.5v-35.8h5.7v77.4h-5.7v-36.3h-49.5v36.3h-5.7v-77.4z"></path>
                                </svg>
                            </a>
                    </div>
                </div>
                <div class="row">                    
                                <ul class="menus container-fluid d-flex justify-content-center pb list-unstyled list-inline white">
                                    <li class="list-inline-item active">
                                        <a class="nav-link" href="{{ url('privacy') }}">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="nav-link">|</i>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="nav-link ">|</i>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link" href="{{ url('term') }}">Term & Conditions</a>
                                    </li>
                                </ul>
                                <p class="small white text-justify pb">
                                        Transaksi melalui instrumen finansial yang ditawarkan di situs ini mengandung resiko substansial; sangat beresiko untuk dilakukan. Jika Anda melakukan transaksi menggunakan instrumen finansial yang ditawarkan oleh situs ini, kemungkinan Anda akan kehilangan sebagian atau keseluruhan dana di akun Anda. Sebelum Anda memutuskan untuk memulai transaksi menggunakan instrumen finansial yang ditawarkan oleh situs ini, ada baiknya Anda membaca ketentuan layanan dan informasi mengenai pembahasan resiko.
                                </p>
                </div>
            </div>
            <div class="container-fluid white copy px-0 text-center b">
                &copy;2018 <i class="fa fa-circle" style="font-size: 5px; vertical-align: middle"></i> P-Cash Corporation.
            </div>
        </footer>
    </div>
    
    <div id="subsSucc" class="modal subscribe fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content container" style="
            padding: 1rem 3rem
        ">
            <div class="img-wrapper w-25 mx-auto my-2">
                    <img src="{{ asset('/assetNewDesign') }}/img/email.svg" alt="">
                </div>
                <h4 class="darkgrey vb text-center first">
                    You are almost done!
                </h4>
                <h6 class="white inverted-bg text-center">
                    Check you inbox now! We have present for you
                </h6>
                <p class="darkgrey rb text-center">
                    Open the email for confirming that you are actually not a robot.
                </p>
            </div>
        </div>
    </div>

    <div class="modal failed fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content container" style="
                padding: 1rem 3rem
            ">
                    <div class="img-wrapper w-25 mx-auto my-4">
                        <img src="{{ asset('/assetNewDesign') }}/img/cancel.svg" alt="">
                    </div>
                    <h4 class="darkgrey vb text-center first">
                        It seems there is an error here...
                    </h4>
                    <h6 class="white inverted-bg text-center">
                        Try another email or check your connection!
                    </h6>
                    <p class="darkgrey rb text-center">
                        Dont be afraid! You still can email us directly to <b class="pb">pcash.cs@gmail.com</b>
                    </p>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('/assetNewDesign') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/assetNewDesign') }}/js/modernizr.min.js"></script>
    <script src="{{ asset('/assetNewDesign') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assetNewDesign') }}/js/all.js"></script>
    <script src="{{ asset('/assetNewDesign') }}/js/bootstrapValidator.min.js"></script>
    <script src="{{ asset('/assetNewDesign') }}/js/my.js"></script>
    
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>  --}}

    @yield('script')

    {{-- GA Filtering --}}
    <?php 
    $a = url('');

    if (strpos($a, 'https://p-cash.id') !== false) {
        $isOnline = true;
    }
    else
    {
        $isOnline = false;
    }

    ?>
    @if($isOnline)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116835401-5"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-116835401-5');
        </script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b288b1261a2e64e5fb59713/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    @endif

</html>