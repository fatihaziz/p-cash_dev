<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mx-auto" role="listbox">
          
        @foreach($brokers as $b)
            <div class="carousel-item">
                <div class="card">
                        <?php $img = str_replace(' ', '', $b->name);?>
                    <div class="img-wrapper" style="
                        background-image: url('{{ asset('/assetNewDesign') }}/img/{{ $img }}-withBG.png');
                    ">
                        <div class="card-title-wrapper">
                            <h5 class="card-title vb w-75">{{ $b->name }}</h5>
                        </div>
                    </div>
                    <div class="card-body">                            
                        <div class="list-group spec">
                            <div class="list">
                                <div class="text mx-auto d-flex flex-column justify-content-between w-100">
                                    <span class="l text-uppercase darkgrey">spread</span>
                                    <span class="b darkgrey text-capitalize">start from {{ $b->spread }} pip</span>
                                </div>
                            </div>
                            <div class="list">
                                <div class="text mx-auto d-flex flex-column justify-content-between w-100">
                                    <span class="l text-uppercase darkgrey">minimum deposit</span>
                                    <span class="b darkgrey text-capitalize">{{ '$'.$b->deposit }}</span>
                                </div>
                            </div>
                            <div class="list">
                                <div class="text mx-auto d-flex flex-column justify-content-between w-100">
                                    <span class="l text-uppercase darkgrey">commision</span>
                                    <span class="b darkgrey text-capitalize">{{ $b->commision }}</span>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="list-group user-reviews">
                            <div class="list">
                                <div class="reviewer">
                                    <h5 class="b"></h5>
                                </div>
                                <div class="text-review">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non, voluptate eos quibusdam reprehenderit nemo, harum cum rerum vitae culpa neque! Veritatis temporibus pariatur officiis eius unde est delectus sed?
                                </div>
                            </div>
                        </div>

                        <button class="btn pb btn-trans mx-auto" data-link="{{ $b->link }}" data-target="{{ $b->name }}" data-manual="{{ $b->manual }}">
                            <i class="far fa-check-circle"></i>
                            <span>Create Account!</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

        
        <div id="continueBroker" class="modal subscribe fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content container" style="
                padding: 1rem 3rem
            ">
                <div class="img-wrapper w-25 mx-auto my-2">
                        <img src="{{ asset('/assetNewDesign') }}/img/download.svg" alt="">
                    </div>
                    <h4 class="darkgrey vb text-center first">
                        Download our manual book
                    </h4>
                    <h6 class="white inverted-bg text-center">
                        We will guide you complete the steps
                    </h6>
                    <p class="darkgrey rb text-center">
                        This manual book contain every steps you must do for each broker you have choosen.
                    </p>
                    <div class="d-flex flex-column w-100 mx-auto">
                        <button class="btn btn-prim" 
                        onclick="$(this).download();
                                window.location.href = '{{ url('thanks') }}'"
                        >Download Manual</button>
                        <button class="btn btn-sec"
                        onclick="window.location.href = '{{ url('thanks') }}'"
                        >No, Thanks</button>
                    </div>

                </div>
            </div>
        </div>

        <script>
            $('.carousel-item').eq(1).addClass('active');    
        </script>    
        </div>
        <a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="icon arrow_carrot-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="icon arrow_carrot-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
      {{--  SLIDE TOUCH  --}}
      <script src="{{ asset('/assetNewDesign') }}/js/jquery.bcSwipe.min.js"></script>
      <script type="text/javascript">
        
            $('.carousel-item button').click(function(e) {
                e.preventDefault();
                var filename = $(this).attr('data-target');
                filename = filename.replace(/\s/g,'');
                var hasManual = $(this).attr('data-manual');
                window.open($(this).attr('data-link'),'_blank');
                if (hasManual == 1)
                {
                    $('#continueBroker .btn-prim').attr('link-download',filename);
                    $('#continueBroker').modal();
                }
                else
                {
                    window.location.href = "{{ url('thanks') }}";
                }
            });
        {{--  SLIDE TOUCH JS  --}}
        $(document).ready(function() {
            $('.carousel').bcSwipe({ threshold: 50 });
        });
    </script>