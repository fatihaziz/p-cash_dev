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
            $('tbody tr .brokerDescription .itemsDesc .review').each(function(){
                $a++;
                $(this).attr('data-id',$a);
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
                <a class="btn scroll" href="#broker-list">
                    Sign Up Now!
                </a>
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
                <table class="table-broker" id="brokers-table">
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
                            @foreach($brokers as $b)
                            @if ($b->local==1)
                            <tr>
                                <td class="mainCol">
                                    <div class="brokerIdentity">
                                        <div class="imgWrapper">
                                            {!! $b->img !!}
                                        </div>
                                        <h5>{{$b->name}}</h5>
                                        <div class="ratingWrap">
                                            @if ($b->rating<1)
                                                <h5>No Rating Yet</h5>
                                            @else
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            @endif
                                        </div>
                                    </div>      
                                    <div class="brokerDescription">
                                        <div class="itemsDesc">
                                            <div class="item">    
                                                <h6>
                                                        Spread
                                                        <span>start from {{ $b->spread }} pip</span>
                                                </h6>
                                            </div>
                                            <div class="item">    
                                                <h6>
                                                        Commision
                                                        <span>{{ $b->commision }}</span>
                                                </h6>
                                            </div>
                                            <div class="item">    
                                                <h6>
                                                        Minimum Deposit
                                                        <span>${{ $b->deposit }}</span>
                                                </h6>
                                            </div>
                                            <div class="item">   
                                                <button class="btn review">Review</button>
                                            </div>
                                            <div class='reviewBox'>
                                                <div class='text'>   
                                                    @if (!$b->review) 
                                                        No Review Yet
                                                    @else
                                                        {{ $b->review }}
                                                    @endif
                                                </div>
                                            </div>
                                            <div class='item action'>
                                                @if(!$b->link)
                                                    <?php $link = 'form/'.$b->id; ?>
                                                @else
                                                    <?php $link = $b->link; ?>
                                                @endif
                                                <button onclick="document.location.href='{{ $link }}'" class='btn'>Go</button>
                                            </div>
                                        </div>
                                    </div>                             
                                </td>
                                <td>
                                    <h6>start from {{ $b->spread }} pip
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        {{ $b->commision }}
                                    </h6>
                                </td>
                                <td>
                                    <h6>
                                        ${{ $b->deposit }}
                                    </h6>
                                </td>
                                <td>                                    
                                            @if (!$b->review)
                                            <h6 class='review' style="text-align: center">    
                                                No Review Yet
                                            </h6>
                                            @else
                                            <h6 class='review'>   
                                                {{ $b->review }}
                                            </h6>
                                            @endif
                                </td>
                                <td class='action'>
                                        @if(!$b->link)
                                            <?php $link = 'form/'.$b->id; ?>
                                        @else
                                            <?php $link = $b->link; ?>
                                        @endif
                                        <button onclick="document.location.href='{{ $link }}'" class='btn'>Go</button>
                                </td>
                            </tr>
                            @endif

                            @endforeach
                            @foreach($brokers as $b)
                            
                            @if ($b->local==0)
                            <tr>
                                    <td class="mainCol">
                                        <div class="brokerIdentity">
                                            <div class="imgWrapper">
                                                {!! $b->img !!}
                                            </div>
                                            <h5>{{$b->name}}</h5>
                                            <div class="ratingWrap">
                                                @if ($b->rating<1)
                                                    <h5>No Rating Yet</h5>
                                                @else
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                @endif
                                            </div>
                                        </div>      
                                        <div class="brokerDescription">
                                            <div class="itemsDesc">
                                                <div class="item">    
                                                    <h6>
                                                            Spread
                                                            <span>start from {{ $b->spread }} pip</span>
                                                    </h6>
                                                </div>
                                                <div class="item">    
                                                    <h6>
                                                            Commision
                                                            <span>{{ $b->commision }}</span>
                                                    </h6>
                                                </div>
                                                <div class="item">    
                                                    <h6>
                                                            Minimum Deposit
                                                            <span>${{ $b->deposit }}</span>
                                                    </h6>
                                                </div>
                                                <div class="item">   
                                                    <button class="btn review">Review</button>
                                                </div>
                                                <div class='reviewBox'>
                                                    <div class='text'>   
                                                        @if (!$b->review) 
                                                            No Review Yet
                                                        @else
                                                            {{ $b->review }}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class='item action'>
                                                    @if(!$b->link)
                                                        <?php $link = 'form/'.$b->id; ?>
                                                    @else
                                                        <?php $link = $b->link; ?>
                                                    @endif
                                                    <button onclick="document.location.href='{{ $link }}'" class='btn'>Go</button>
                                                </div>
                                            </div>
                                        </div>                             
                                    </td>
                                    <td>
                                        <h6>start from {{ $b->spread }} pip
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            {{ $b->commision }}
                                        </h6>
                                    </td>
                                    <td>
                                        <h6>
                                            ${{ $b->deposit }}
                                        </h6>
                                    </td>
                                    <td>                                    
                                                @if (!$b->review)
                                                <h6 class='review' style="text-align: center">    
                                                    No Review Yet
                                                </h6>
                                                @else
                                                <h6 class='review'>   
                                                    {{ $b->review }}
                                                </h6>
                                                @endif
                                    </td>
                                    <td class='action'>
                                            @if(!$b->link)
                                                <?php $link = 'form/'.$b->id; ?>
                                            @else
                                                <?php $link = $b->link; ?>
                                            @endif
                                            <button onclick="document.location.href='{{ $link }}'" class='btn'>Go</button>
                                    </td>
                                </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
            
                <div class="pagination-container">
                        <nav>
                            <ul class="pagination"></ul>
                        </nav>
                </div>
                
                <script>
                        // Pagination Script
                        var table = '#brokers-table'
                        var maxRows = 5;
                        var totalRows = $(table + ' tbody tr').length
                        var trnum = 0;
                        $(table + '  tr:gt(1)').each(function() {
                            trnum++
                            if (trnum > maxRows) {
                                $(this).hide()
                            }
                            if (trnum <= maxRows) {
                                $(this).show()
                            }
                        })
                
                        if (totalRows > maxRows) {
                            var pagenum = Math.ceil(totalRows / maxRows)
                            for (var i = 1; i <= pagenum;) {
                                $('.pagination').append('<li data-page="' + i + '">\<span>' + i++ + '<span class="sr-only">(current)</span></span>\</li>').show()
                            }
                        }
                                        
                        $('.pagination li:first-child').addClass('active')
                        $('.pagination li').on('click', function() {
                            var pageNum = $(this).attr('data-page')
                            var trIndex = 0;
                            $('.pagination li').removeClass('active')
                            $(this).addClass('active')
                            $(table + ' tr:gt(1)').each(function() {
                                trIndex++
                                if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                                    $(this).hide()
                                } else {
                                    $(this).show()
                                }
                            })
                        })
                
                    </script>
        </div>
    </main>
@stop