@extends ('layout.new')
@section ('title', 'Contact Us')
@section ('main')
<main id="contact">
    <div class="page-wrapper container-fluid px-0" style="padding: 8rem 0">
        <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto align-items-baseline d-flex justify-content-center">
                        <div class="imgWrap mt-5 w-100">
                            <img src="{{ asset('/assetNewDesign') }}/img/contact.svg" alt="">
                        </div>
                    </div>
                    <form action="https://portofolio.us18.list-manage.com/subscribe/post-json?u=daaa86e60e30812f4c2d4b312&amp;id=22e11d580d&c=?" target="_blank" class="ml-auto form-horizontal col-md-6" data-toggle="validator" role="form" id="contactForm" method="post">                       
                        <div class="col-md-12 mx-auto" style="
                            box-shadow: 0px 3px 9.4px 0.6px rgba(19, 19, 19, 0.1);
                            border-radius: 10px;
                            background: #fff;padding: 2rem 0">
                                <div class="col-md-8 mx-auto">
                                    <div class="row mb-4">
                                        <h2 class="b first darkgrey">Contact Us</h2>
                                        <h7 class="darkgrey">
                                           You can send us a message, we will reply it as soon as possible 
                                        </h7>
                                    </div>         
                                    <div class="row">
                                        <div class="col-md-12 pos-relative">
                                            <div class="form-group">
                                                    <label class="control-label grey b">E-Mail</label>
                                                    <input name="EMAIL" placeholder="E-Mail" class="form-control" type="text" autocomplete='email'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pos-relative">
                                            <div class="form-group">
                                                    <label class="control-label grey b">Full Name</label>
                                                    <input name="FNAME" placeholder="Full Name" class="form-control" type="text" autocomplete='name'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label class="control-label grey b">Subject</label>
                                                    <input name="SUBJECT" placeholder="Message Subject" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 m-auto">
                                            <div class="form-group">
                                                <label class="control-label grey b">Messages</label>
                                                <textarea class="form-control" name="MSG" placeholder="Messages" style="resize:none; height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mx-auto">
                                            <div class="form-group">
                                                <label class="control-label grey b">Phone</label>
                                                <input name="PHONE" placeholder="Phone Number" class="form-control" type="text" autocomplete='tel-national'>
                                            </div>      
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="my-4 mx-auto col-md-12">
                                                <button type="submit" class="w-100 btn btn-trans green text-uppercase" >
                                                    <i class="green icon aright arrow_carrot-2right dark mr-2"></i>
                                                    <span class="b">
                                                        send your message
                                                    </span>
                                                </button>          
                                        </div>
                                    </div>
                                </div>            
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <div id="contSucc" class="modal success fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content container" style="
            padding: 1rem 3rem
        ">
            <div class="img-wrapper w-25 mx-auto my-4">
                    <img src="{{ asset('/assetNewDesign') }}/img/email.svg" alt="">
                </div>
                <h4 class="darkgrey vb text-center first">
                    We Receive Your Email!
                </h4>
                <h6 class="white inverted-bg text-center">
                    Wait and we will reply your message soon!
                </h6>
                <p class="darkgrey rb text-center">
                    Thanks for reporting to us! Your report help us improving our services in the future!
                </p>
            </div>
        </div>
    </div>
    @stop

@section('script')
<script type="text/javascript">
    $('#menus .nav-item').eq(2).addClass('active');
</script>
<script type="text/javascript">
    $(function() {
        $('#contactForm').bootstrapValidator({
            {{-- message: 'This value is required',
            submitButton: '$contactForm button[type="submit"]',
            live: 'enabled', --}}
            feedbackIcons: {
                valid: 'icon_check_alt2 green input-icon',
                invalid: 'icon_close_alt2 red input-icon',
                validating: 'icon_loading darkgrey input-icon'
            },
            fields: {
                FNAME: {
                   validators: {
                       notEmpty: {
                           message: 'Please Enter your Full name'
                       }
                   }
               },
               SUBJECT: {
                   validators: {
                       notEmpty: {
                           message: 'Please Enter the message subject'
                       }
                   }
               },
               PHONE: {
                    validators: {
                        numeric: {
                            message: 'The phone no must be a number'
                        },
                        notEmpty: {
                            message: 'Please Enter your phone number'
                        }
                    }
                },
                MSG: {
                    validators: {
                        stringLength: {
                            {{-- min: 10, --}}
                            max: 100,
                            message:'Please enter at least 15 characters and no more than 100'
                        },
                        notEmpty: {
                            message: 'Please Enter Messages'
                        }
                    }
                },
                EMAIL: {
                    validators: {
                        notEmpty: {
                            message: 'Please Enter your email address'
                        },
                        emailAddress: {
                            message: 'Please Enter a valid email address'
                        }
                    }
                },         
                }
          })
          .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // Use Ajax to submit form data
            $.ajax({
                type: 'post',
                url: 'https://portofolio.us18.list-manage.com/subscribe/post-json?u=daaa86e60e30812f4c2d4b312&amp;id=22e11d580d&c=?',
                data: $("#contactForm").serialize(),
                cache       : false,
                dataType    : 'json',
                contentType: "application/json; charset=utf-8",
                error       : function(err) { alert("Could not connect to the registration server."); },
                success     : function(data) {
                    if (data.result != "success") {
                        bv.resetForm();
                        $('.modal.failed').modal();
                        var scrollTo = $('#contactForm').offset().top;
                        $('html, body').animate({
                            scrollTop: scrollTo
                        }, 100);
                        // Something went wrong, parse data.msg string and display message
                    } else {
                        $('#contSucc').modal();
                    }
                }
              });
          });
        });

</script>
@stop