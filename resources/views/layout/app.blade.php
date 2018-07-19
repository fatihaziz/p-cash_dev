<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <title>P-Cash | @yield('title')</title>
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
        {{--  <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/p-cash.id\/","name":"P-Cash","potentialAction":{"@type":"SearchAction","target":"https:\/\/p-cash.id\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>  --}}

        <meta name="keywords" content="brokers, trader, trading, forex, basecamp">
        <link rel="icon" href="{{ asset('/assets/ico.png') }}" sizes="32x32">
        <link rel="canonical" href="https://p-cash.id/">       


        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/assets/style.min.css') }}" type="text/css">
        <script defer src="{{ asset('/assets/js/fontawesome-all.js') }}"></script>
        @yield('head')
    </head>        
    <body>
        <div id="main-wrapper">
                {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif --}}
            <header>
                <nav>
                    <div class="logo">
                        <a href="{{ asset('') }}">
                            <svg id="logo" style="enable-background:new 0 0 600 175;
                            height: 56px" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 600 175" version="1.1" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <style type="text/css">
                                    .st0{fill:currentColor;}
                                </style>
                                            <path class="st0" d="m129.6 66.7h-10.1v20.6h10.2c3.8 0 6.8-0.9 9-2.7s3.3-4.3 3.3-7.4v-0.2c0-3.3-1.1-5.9-3.3-7.6-2.1-1.8-5.2-2.7-9.1-2.7z"/>
                                            <path class="st0" d="m123.9 0c-48.4 0-87.5 39.2-87.5 87.5s39.1 87.5 87.5 87.5 87.5-39.2 87.5-87.5-39.2-87.5-87.5-87.5zm39.5 76.2c0 4.6-0.8 8.6-2.5 12-1.7 3.5-4 6.4-6.9 8.7-2.9 2.4-6.5 4.1-10.6 5.3s-8.5 1.8-13.3 1.8h-10.6v22.1h-21.4v-77.3h33.2c4.9 0 9.3 0.6 13.3 1.8s7.4 3 10.2 5.3 5 5.2 6.5 8.6 2.3 7.2 2.3 11.5v0.2z"/>
                                        <path class="st0" d="m244.6 88.2v-0.2c0-21.9 16.4-40 38.7-40 13.8 0 22.1 5.1 30.1 12.4l-4.1 4.2c-6.7-6.5-14.5-11.4-26.1-11.4-18.6 0-32.6 15.1-32.6 34.6v0.2c0 19.6 14.3 34.8 32.7 34.8 11.2 0 18.8-4.3 26.6-12.1l3.9 3.8c-8.2 8.1-17 13.5-30.7 13.5-22.1 0-38.5-17.6-38.5-39.8z"/>
                                        <path class="st0" d="m364.6 48.7h5.5l36 77.9h-6.3l-9.8-21.6h-45.7l-9.8 21.7h-6l36.1-78zm23 51.1l-20.4-44.8-20.4 44.8h40.8z"/>
                                        <path class="st0" d="m421.4 115.4l3.8-4.3c8.5 7.8 16.4 11.5 27.7 11.5 11.6 0 19.6-6.5 19.6-15.4v-0.2c0-8.2-4.3-12.9-21.9-16.5-18.6-3.8-26.1-10.1-26.1-21.8v-0.2c0-11.5 10.5-20.3 24.9-20.3 11.3 0 18.7 3.1 26.5 9.4l-3.6 4.5c-7.3-6.3-14.6-8.7-23.1-8.7-11.4 0-18.9 6.5-18.9 14.6v0.2c0 8.2 4.2 13.2 22.5 16.9 17.9 3.6 25.4 10.1 25.4 21.3v0.2c0 12.5-10.7 21.1-25.6 21.1-12.4 0-21.9-4-31.2-12.3z"/>
                                        <path class="st0" d="m502.6 49.3h5.7v35.8h49.5v-35.8h5.7v77.4h-5.7v-36.3h-49.5v36.3h-5.7v-77.4z"/>
                                </svg>                                
                        </a>
                    </div>
                    <div class="nav-btn">
                        <a class="btn scroll" href="{{ url('home') }}#broker-list">   
                            Create Account
                        </a>
                    </div>
                </nav>
            </header>
            <div class="entry-wrapper">
                @yield('main')
                <footer>
                    <div class="footer-menus">
                        <ul>
                            <li><a href="{{ url('privacy') }}">
                                    Privacy Policy    
                            </a></li>
                            <li><a href="{{ url('term') }}">Term & Conditions
                                </a>
                            </li>
                            <li><a href="{{ url('faq') }}">FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-copyright">
                        &copy;2018 P-Cash Corporation - All Right Reserved
                    </div>
                </footer>
                <a class="scrolltotop scroll" href="#"><i class="fa fa-angle-double-up"></i></a>
            </div>
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
            <script>
                    $("a.scroll").click(function() {
                        var hrep = $(this).attr('href');
                        var target= hrep.split('#')[1];
                        if (hrep=="#")
                            target = null;
                        if (!target)
                            var scrollTo = 0;
                        else    
                            var scrollTo = $('#'+target).offset().top;
                        $('html, body').animate({
                            scrollTop: scrollTo
                        }, 500);

                        return false;
                      });
                    $(window).scroll(function()
                        {
                            if ($('body').scrollTop() > 500 || $(document).scrollTop() > 500) {
                                $(".scrolltotop").css('opacity','1');
                            } else {
                                $(".scrolltotop").css('opacity','0');
                            }
                        }
                    );
            </script>
        </div>
    </body>
</html>
