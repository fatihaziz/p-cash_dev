                <div id="table-wrapper">
                        <table id="brokers-table" class="table">
                                <thead>
                                    <tr class="text-uppercase text-center vb grey">
                                        <th>#</th>
                                        <th>brokers</th>
                                        <th>spread</th>
                                        <th>minimum deposit</th>
                                        <th>commision</th>
                                        <th>reviews</th>
                                        <th>open account</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($brokers as $b)
                                        <tr data-name="{{ $b->name }}" data-id="{{  $b->link }}" data-manual="{{ $b->manual }}">
                                                <td>
                                                    <div class="d-sm-none">
                                                        MOBILE
                                                    </div>
                                                    <div class="logo-wrapper">
                                                        <div class="logo d-flex justify-content-center">
                                                            {{-- <img src="{{ asset('/assetNewDesign') }}/img/garuda.png" alt=""> --}}
                                                            <?php $img = str_replace(' ', '', $b->name);?>
                                                            <img src="{{ asset('/assetNewDesign') }}/img/{{ $img }}.png" alt="">
                                                        </div>
                                                    </div>
                                                    <h5 class="text-center mt-2 vvb" style="color: #2ecc71; font-size: 16px">{{$b->name}}</h5>
                                                    <div data-toggle="tooltip" title="No Rating Yet" class="rating text-center" style="color: #f1c40f">
                                                        <i class="far fa-star"></i>
                                                        
                                                        <i class="far fa-star"></i>
                                                        
                                                        <i class="far fa-star"></i>
                                                        
                                                        <i class="far fa-star"></i>
                                                        
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>start from {{ $b->spread }} pip</h5>
                                                </td>
                                                <td>
                                                    <h5>{{ '$'.$b->deposit }}</h5>
                                                </td>
                                                <td>
                                                    <h5 class="commision">{{ $b->commision }}</h5>
                                                </td>
                                                <td>
                                                    <div class="reviews-wrapper" style="min-width: 175px">
                                                        <div class="reviews-item">
                                                            <div class="tmb-wrapper">
                                                                <div class="tmb" style="
                                                                background-image: url('{{ asset('/assetNewDesign') }}/img/pp.jpg');"></div>
                                                            </div>
                                                            <div class="text">
                                                                <div class="name">
                                                                    <h5>@username</h5>
                                                                </div>
                                                                <div class="comment">
                                                                    <h5>Sangat Memuaskan!
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>                                            
                                                        
                                                        <div class="reviews-item">
                                                            <div class="tmb-wrapper">
                                                                <div class="tmb" style="
                                                                background-image: url('{{ asset('/assetNewDesign') }}/img/pp.jpg');"></div>
                                                            </div>
                                                            <div class="text">
                                                                <div class="name">
                                                                    <h5>@username</h5>
                                                                </div>
                                                                <div class="comment">
                                                                    <h5>Sangat Memuaskan!
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                        <div class="reviews-overlay">       
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-trans btn-broker">
                                                            <b class="icon aright">Go</b>   
                                                    </button>    
                                                </td>   
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                    </ul>
                            </nav>
                </div>

                <script>
                        $(function() {
                            // New Windows Brokers Form
                            $('.table tbody tr').click(function(event) {
                                event.preventDefault();
                                var filename = $(this).attr('data-name');
                                filename = filename.replace(/\s/g,'');
                                var hasManual = $(this).attr('data-manual');

                                $('#fixed-sider .download').hide();
                                if (hasManual == 1) {
                                    $('#fixed-sider .download').show();
                                    $('#fixed-sider .download').attr('data-target', filename);
                                }

                                $('#fixed-sider button.btn').attr('data-target', filename);

                                var closebtn = $('aside .close');
                                var closeicon = $('aside .close .arrow_carrot-2left');
                                if (closebtn) {
                                    closebtn.removeClass('hidden');
                                    closeicon.addClass('arrow_carrot-2right');
                                    closeicon.filter('.arrow_carrot-2left').removeClass('arrow_carrot-2left');
                                }
                                $('aside').addClass('visible');
                                $('aside .btn').click(function() {

                                });

                                $(this).PopupCenter($(this).attr("data-id"), $(this).attr("data-name"), 600, 600);
                                // window.open($(this).attr("data-id"), "popupWindow", "width=600,height=600,scrollbars=yes,resizable=no");
                            });
                        });
                </script>