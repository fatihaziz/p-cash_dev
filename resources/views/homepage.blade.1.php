@extends('layout.app')

@section('title', 'Home')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<script>
        $(document).ready(function()
        {
            var a=0;
            $('.row:not(.header)').each(function()
            {
                a++;
               $(this).attr('data-id',a);
            });
            $('.row:not(.header)').click(function () { 
                $id = $(this).attr('data-id');
                window.location.href = "/form/"+$id;
             });


             var $a = 0;
            $('tbody tr').each(function(){
                $a++;
                $(this).append("<td class='action'><button class='btn' onclick='document.location.href=`form/"+$a+"`'>Go!</button></td>");
            });

            var $a = 0;
           $('tbody tr .brokerDescription .itemsDesc').each(function(){
               $a++;
               $(this).append("<div class='item action'><button onclick='document.location.href=`form/"+$a+"`' class='btn'>Go</button></div>");
           });
           var $a = 0;

          $('tbody tr .brokerDescription .itemsDesc .review').each(function(){
              $a++;
              $(this).attr('data-id',$a);
          });
          var $a = 0;

          $('tbody tr .brokerDescription .itemsDesc').each(function(){
            $a++;
            $(this).append("<div class='reviewBox'><div class='text'>No Review</div></div>");
        });
            var $a = 0;
            $('tbody tr .brokerDescription .itemsDesc .reviewBox').each(function(){
                $a++;
                $(this).attr('data-id',$a);
            });
            
            $('tbody tr .brokerDescription .itemsDesc .review').click(function () { 
                $id = $(this).attr('data-id');
                $('tbody tr .brokerDescription .itemsDesc .reviewBox').each(function(){
                    if($(this).attr('data-id') == $id)
                        {
                            if($(this).hasClass('show'))
                                $(this).removeClass('show');
                            else
                                $(this).addClass('show');
                        }
                });
             });

             //Toggling 
             $('tbody tr .brokerDescription .itemsDesc .reviewBox').click(function(){
                if($(this).hasClass('show'))
                    $(this).removeClass('show');
                else
                    $(this).addClass('show');
            });

        });
</script>
@endsection
@section('main')
<main id="hompage">
        <div id="banner">
            <div id="banner-text">
                <h2>
                    We Provide You The Best Brokers and Seamless Trading Platform
                </h2> 
                <p>
                    We provide you the best brokers on our list as its platform improvement is currently on the works to give you finest trading experience.
                </p>
                <button class="btn" onclick="document.location.href='#broker-list'">
                    Sign Up Now!
                </button>
            </div>
            <div id="banner-video">
                <img src="{{ asset('/assets/banner.jpg') }}" alt="">
            </div>
        </div>
        <div id="broker-list">
            <h2>
                Brokers List
            </h2>
            <p>
                    Compare all existing brokers with their respective advantages so that you can feel seamless experience in choosing one
            </p>
            <div class="table-wrapper">
                <table class="table-broker">
                    <thead>
                        <tr>
                            <th rowspan="2" class="mainCol" style="
                            min-width: 17em;
                            ">
                            <div class="imgWrapper">
                                <img
                                src="{{ asset('assets/bull.png') }}" alt="">
                            </div>
                                <h5>
                                    Brokers
                                </h5>

                            </th>
                            <th colspan="3">
                                <i class="fa fa-list"></i>
                                <h5>
                                    Descriptions
                                </h5>
                            </th>
                            <th rowspan="2" style="
                                min-width: 20em;
                            ">
                                <i class="fa fa-comment-dots"></i>
                                <h5>Review</h5>
                            </th>
                            <th rowspan="2">
                                <i class="fa fa-location-arrow"></i>
                                <h5>Action</h5>
                            </th>
                        </tr>
                        <tr>
                            <th>Spread</th>
                            <th>Commision</th>
                            <th>Minimum Deposit</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="mainCol">
                                    <div class="brokerIdentity">
                                        <div class="imgWrapper">
                                            <img src="https://mifx.com/images/monexlogo.svg">
                                        </div>
                                        <h5>MONEX</h5>
                                        <div class="ratingWrap">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="brokerDescription">
                                        <div class="itemsDesc">
                                            <div class="item">    
                                                <h6>
                                                        Spread
                                                        <span>Floating</span>
                                                </h6>
                                            </div>
                                            <div class="item">    
                                                <h6>
                                                        Commision
                                                        <span>$ 2 / lot</span>
                                                </h6>
                                            </div>
                                            <div class="item">    
                                                <h6>
                                                        Minimum Deposit
                                                        <span>$ 500</span>
                                                </h6>
                                            </div>
                                            <div class="item">   
                                                <button class="btn review">Review</button>
                                            </div>
                                        </div>
                                    </div>                             
                                </td>
                                <td>
                                    <h6>
                                        Floating
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        $2 / lot
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        $500
                                    </h6>
                                </td>
                                <td>
                                    <h6 class='review'>
                                        No Review
                                    </h6>
                                </td>                                
                            <tr>
                                    <td class="mainCol">
                                        <div class="brokerIdentity">
                                            <div class="imgWrapper">
                                                <img src="http://garudaberjangka.com/wp-content/themes/Avada/assets/images/logo.png">
                                            </div>
                                            <h5>Garuda Berjangka</h5>
                                            <div class="ratingWrap">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brokerDescription">
                                            <div class="itemsDesc">
                                                <div class="item">    
                                                    <h6>
                                                            Spread
                                                            <span>Floating</span>
                                                    </h6>
                                                </div>
                                                <div class="item">    
                                                    <h6>
                                                            Commision
                                                            <span>$ 10 / lot</span>
                                                    </h6>
                                                </div>
                                                <div class="item">    
                                                    <h6>
                                                            Minimum Deposit
                                                            <span>$ 100</span>
                                                    </h6>
                                                </div>
                                                <div class="item">   
                                                    <button class="btn review">Review</button>
                                                </div>
                                            </div>
                                        </div>                              
                                    </td>
                                    <td>
                                        <h6>
                                            Floating
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $10 / lot
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $100
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class='review'>
                                            No Review
                                        </h6>
                                    </td>
                                </tr>                                
                            <tr>
                                    <td class="mainCol">
                                        <div class="brokerIdentity">
                                            <div class="imgWrapper">
                                                <img src="http://soegeefx.com/wp-content/uploads/2018/02/SOEGEEFUTURESPT-18Pt.png">
                                            </div>
                                            <h5>Soegee Futures</h5>
                                            <div class="ratingWrap">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="brokerDescription">
                                                <div class="itemsDesc">
                                                    <div class="item">    
                                                        <h6>
                                                                Spread
                                                                <span>Floating</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Commision
                                                                <span>$ 10 / lot</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Minimum Deposit
                                                                <span>$ 100</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">   
                                                        <button class="btn review">Review</button>
                                                    </div>
                                                </div>
                                            </div>                               
                                    </td>
                                    <td>
                                        <h6>
                                            Floating
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $10 / lot
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $100
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class='review'>
                                            No Review    
                                        </h6>
                                    </td>
                                </tr>
                                
                                <tr>
                                        <td class="mainCol">
                                            <div class="brokerIdentity">
                                                <div class="imgWrapper black">
                                                    <img src="https://cdn.gkinvest.co.id/LP/img/ContentInvest_v1/logo.png">
                                                </div>
                                                <h5>GKInvest</h5>
                                                <div class="ratingWrap">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brokerDescription">
                                                <div class="itemsDesc">
                                                    <div class="item">    
                                                        <h6>
                                                                Spread
                                                                <span>Fix</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Commision
                                                                <span>>$ 5 / lot</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Minimum Deposit
                                                                <span>$ 200</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">   
                                                        <button class="btn review">Review</button>
                                                    </div>
                                                </div>
                                            </div>                                
                                        </td>
                                        <td>
                                            <h6>
                                                Floating
                                            </h6>
                                        </td>
                                        <td>
                                            <h6>
                                                >$5 / lot
                                            </h6>
                                        </td>
                                        <td>
                                            <h6>
                                                $200
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class='review'>
                                               No Review
                                            </h6>
                                        </td>
                                    </tr>
                                <tr>
                                    <td class="mainCol">
                                        <div class="brokerIdentity">
                                            <div class="imgWrapper">
                                                <img src="https://cdnr.gkfxprime.com/NFCA/ENG/img/banner/logoPopup.png?v=1.0.142">
                                            </div>
                                            <h5>GKFX Prime</h5>
                                            <div class="ratingWrap">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="brokerDescription">
                                                <div class="itemsDesc">
                                                    <div class="item">    
                                                        <h6>
                                                                Spread
                                                                <span>Floating</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Commision
                                                                <span>$ 7 / lot</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Minimum Deposit
                                                                <span>$ 200</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">   
                                                        <button class="btn review">Review</button>
                                                    </div>
                                                </div>
                                            </div>                        
                                    </td>
                                    <td>
                                        <h6>
                                            Floating
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $7 / lot
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $200
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class='review'>
                                            No Review    
                                        </h6>
                                    </td>
                                </tr>
                            <tr>
                                    <td class="mainCol">
                                        <div class="brokerIdentity">
                                            <div class="imgWrapper">
                                                <img src="http://www.javafx.co.id/assets/images/logo.png">
                                            </div>
                                            <h5>Java FX</h5>
                                            <div class="ratingWrap">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="brokerDescription">
                                                <div class="itemsDesc">
                                                    <div class="item">    
                                                        <h6>
                                                                Spread
                                                                <span>Floating</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Commision
                                                                <span>$ 10 / lot</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">    
                                                        <h6>
                                                                Minimum Deposit
                                                                <span>$ 200</span>
                                                        </h6>
                                                    </div>
                                                    <div class="item">   
                                                        <button class="btn review">Review</button>
                                                    </div>
                                                </div>
                                            </div>                            
                                    </td>
                                    <td>
                                        <h6>
                                            Floating
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $10 / lot
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            $200
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 class='review'>
                                            No Review
                                        </h6>
                                    </td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop