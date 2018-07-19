@extends('layout.new')
@section ('title', 'Home')
@section('main')
<main>
    <div id="slider-wrapper" class="container-fluid px-0">
        <div class="m-auto" style="max-width: 1440px;
                    position: relative;">
                <div class="overlay">
                    <div class="slideshow-container" style="                    
                    background-image: url('{{ asset('/assetNewDesign') }}/img/overlay.png');
                    ">
                    {{--  SLIDER ITEM  --}}
                            <div id="printSlides">                                
                            </div>
                            
                    {{--  END  --}}
                            <a class="next" onclick="plusSlides(1)">
                                    <i class="icon aright invert arrow_carrot-2right dark"></i>
                            </a>
                        
                            <nav class="navigate">
                            </nav>
                        </div>
                        <br>
                    </div>
                <div>
                    <div class="bg"
                    style="
                    background: url('{{ asset('/assetNewDesign') }}/img/bg.png');
                    ">                        
                </div>    
            </div>
        </div>
    </div>
    <div id="broker-list" class="container-fluid px-0">
        <div class="container px-0">
            <div class="text-center py-5">
                    <h1 class="vvb first" style="dg">
                            Brokers List
                    </h1>
                    <p class="grey col-md-6 m-auto">
                            Compare all existing brokers with their respective advantages so that you can feel seamless experience in choosing one
                    </p>
            </div>
            <div class="mx-auto px-0" id="brokerLoad">
            </div>       
            <div id="loading">
                <div id="spinner"></div>
            </div>
        </div>
    </div>
</main>
<aside id="fixed-sider" class="">
    <div class="close hidden">
        <i class="icon arrow_carrot-2left"></i>
    </div>
    <div class="content">
        <h3 class="darkgrey b text-center pt-4">Langkah - Langkah Menjadi Trader</h3>
        <div class="line"></div>
            <div class="list-wrapper py-4">
                <div class="item">
                    <div class="list-title">
                        <h6>Mengisikan formulir sesuai petunjuk</h6>
                    </div>
                    <div class="img-wrapper w-50 mx-auto my-4">
                            <img src="{{ asset('/assetNewDesign') }}/img/window.svg" alt="">
                        </div>
                    <p class="text-justify">
                        <b class="rb">
                            Anda perlu mengisikan informasi yang diperlukan pada jendela tersebut, sehingga anda dapat melanjutkan ke langkah berikutnya.
                            <a href="#" class="download">Download Manual Book disini</a>
                        </b>
                    </p>
                </div>
                <div class="item">
                    <div class="list-title">
                        <h6>Memverifikasi data yang anda isikan</h6>
                    </div>
                    <div class="img-wrapper w-50 mx-auto my-4">
                            <img src="{{ asset('/assetNewDesign') }}/img/verif.svg" alt="">
                        </div>
                    <p class="text-justify">
                        <b class="rb">
                            Pastikan informasi yang anda isikan telah benar. 
                        </b>
                    </p>
                </div>
                <div class="item">
                    <div class="list-title">
                        <h6>Mengisikan deposito pada akun trading anda</h6>
                    </div>
                    <div class="img-wrapper w-50 mx-auto my-4">
                            <img src="{{ asset('/assetNewDesign') }}/img/dollar.svg" alt="">
                        </div>
                    <p class="text-justify">
                        <b class="rb">
                            Anda perlu menyetorkan uang deposito kepada <b class="b">broker</b>. Bila anda kurang yakin dengan langkah ini, anda dapat bertanya pada <a href="{{ url('contact') }}" target="_blank">Customer Service</a> kami.
                        </b>
                    </p>
                </div>
            </div>
        <button class="btn mx-auto btn-trans dark">
            <i class="icon ml-2 invert aright arrow_carrot-2right"></i>
            <span class="green b">
                Lanjutkan
            </span>
        </button>
    </div>
</aside>
@stop
@section('script')
<script type="text/javascript">
    $(function() {
        var loaded = false;
            $(window).scroll(function() {
                if ($(window).scrollTop() > 500 && loaded == false)
                {
                        if(window.innerWidth > 500)
                        {
                            $(this).loadBroker('{{ url('brokers') }}/table','table');
                        }
                        else
                        {
                            $(this).loadBroker('{{ url('brokers') }}/card','card');        
                        }
                        loaded = true;
                }
                if ($(window).scrollTop() > 500 && $(window).scrollTop() < 550)
                {
                    $(window).resize(function()
                    {
                        var windowStatus = 0;
                        var windowStatusOld = 2;
                        if(window.innerWidth > 500)
                        {
                            var windowStatus = 0;
                        }
                        else
                        {
                            var windowStatus = 1; 
                        }

                        if (windowStatus===0 && windowStatus===windowStatusOld)
                        {
                            $(this).loadBroker('{{ url('brokers') }}/table','table');
                        }
                        else if(windowStatus===1 && windowStatus===windowStatusOld){
                            $(this).loadBroker('{{ url('brokers') }}/card','card');   
                        }
                        windowStatusOld = windowStatus; 
                    });
                }
        });

        if($(window).scrollTop() >= 500)
        {
            if(window.innerWidth > 500)
            {
                $(this).loadBroker('{{ url('brokers') }}/table','table');
            }
            else
            {
                $(this).loadBroker('{{ url('brokers') }}/card','card');        
            }
        }
    });

    function cta()
    {
        var scrollTo = $("#broker-list").offset().top;
        $("html, body").animate({
        scrollTop: scrollTo
        }, 100);
    }             
    
        // Slider Printing
        $.getJSON("{{ asset('/assetNewDesign') }}/js/slider.json", function(data) {
            var opening = "\
            <div class='mySlides fade'>\
            <div class='text col-md-7'>";
            var ending = "<button class='cta btn btn-trans darkgrey' onclick='cta();'><i class='icon aright arrow_carrot-2right'></i><span class='b'>Create Trading Account Now!</span></button><button class='cta btn-primary btn d-md-none' onclick='cta();'><span class='b'>Create Account!</span></button></div></div>";
            $.each(data, function(key, val) {
            subTitle = "", title = "", text = "";
            if (val.title != "\r") {
                title = '<h1 class="vvb text-uppercase">' + val.title + '</h1>';
            }
            if (val.subTitle != "\r") {
                subTitle = '<h5 class="inverted-bg vb first">' + val.subTitle + '</h5>';
            }
            if (val.text != "\r") {
                text = '<p>' + val.text + '</p>';
            }
            $('#printSlides').append(opening + title + subTitle + text + ending);
                });
            });

    $(function() {
        {{-- What is this? its for fucking carousel that cant loaded when first loaded, even use $(document).ready something, its still dont work, then got this solution  --}}    
        setTimeout(function(){ 
            var slideIndex = 1;    
                showSlides(1);  
                // Add Navigator on Slider
                for(var i=0; i<$('.mySlides').length;i++)
                {
                    $('.navigate').append('<span class="dot" onclick="currentSlide(' + (i+1) + ')"></span>');
                }
                $('.navigate span').eq(0).addClass('active');   
                $('#menus .nav-item').eq(0).addClass('active');
        }, 500);   
    });
    
    var slideIndex = 1;    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = $('.mySlides');
        var dots = $('.dot');
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides.eq(i).css('display', 'none');
            slides.eq(i).removeClass('show');
        }
        for (i = 0; i < dots.length; i++) {
            dots.eq(i).removeClass('active');
        }
        slides.eq(slideIndex - 1).css('display', 'block');
        slides.eq(slideIndex - 1).addClass('show');
        dots.eq(slideIndex - 1).addClass('active');

        // Effect for Background Move
        var minX = -370;
        var maxX = 100
        var totalX = maxX - minX;
        var range = totalX / slides.length * (slideIndex);

            $('.bg').animate({
                'background-position-x': maxX - range,
                specialEasing: {
                    'background-position-x': "easeOutBounce",
                },
            }, 300, function() {
                $('.next').click(function() {

                });
            });     
        }
</script>
<script type="text/javascript">
    $(function() {
    });
</script>
<script type="text/javascript">
    $(function() {
        var i=1;
        $('.list-title').each(function(){
            $(this).prepend('<h6>'+i+'. </h6>');
            i++;
        });   
    });

</script>

@stop