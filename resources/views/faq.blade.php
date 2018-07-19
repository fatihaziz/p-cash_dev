@extends ('layout.new')
@section ('title', 'Privacy Policy')
@section ('head')
<style>

</style>
@stop
@section ('main')
    <main id="faq" class="container py-5">
        <div class="row">
            <div class="col-md-6">
                    <div class="content py-5">
                        <h2 class="b first">Frequently Asked Questions</h2>
                        <div id="faq-section">
                            <div class="list-wrapper py-4"></div>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 ml-auto d-md-block d-none">
                <img class="w-100" src="{{ asset('/assetNewDesign') }}/img/question.svg" alt="">
            </div>
        </div>
    </main>
@stop

@section('script')
<script type="text/javascript">
    
    $.getJSON("{{ asset('/assetNewDesign') }}/js/faq.json", function(data) {        
        var i=1;
        $.each(data, function(key, val) {
            var printed = `
            <div class="item">
                    <a class="b norm-text" data-toggle="collapse" href="#item-`+i+`" aria-expanded="false" aria-controls="item-`+i+`">
                        `+i+`. `+val.quest+`
                    </a>    
                    <div class="collapse" id="item-`+i+`">
                        <div class="card card-body">
                            `+val.answer+`
                        </div>
                    </div>
                </div>
            `;
            $('#faq-section .list-wrapper').append(printed);
                i++;
        });    
    });

</script>
<script type="text/javascript">
        $('#menus .nav-item').eq(1).addClass('active');
</script>
@stop