@extends ('layout.new')
@section('title','Thanks You')
@section('head')
@stop
@section('main')
<main id="thanks">
    <div class="page-wrapper container-fluid px-0" style="padding: 8rem 0">
        <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto align-items-center d-flex justify-content-center">
                        <div class="imgWrap w-100">
                            <img class="w-100" src="{{ asset('/assetNewDesign') }}/img/done.png" alt="">
                        </div>
                    </div>
                    <div class="ml-auto col-md-6">
                        <h1 class="first dark vb" style="
                        font-size: 52px;
                    ">Awesome!</h1>
                        <h5 class="inverted-bg white vb text-capitalize w-fill first">your account will ready</h5>
                        <p class="py-2 vl darkgrey" style="font-size: 20px">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        </p>
                            <button onclick="window.open('https://portofolio.co.id','_blank')" class="green btn btn-trans" style="font-size: 20px">
                                <i class="green icon aright arrow_carrot-2right dark mr-2"></i>
                                <span style="
                                font-size: 24px;
                            ">
                                    Back to Portofolio
                                </span>
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
@section('script')
@stop