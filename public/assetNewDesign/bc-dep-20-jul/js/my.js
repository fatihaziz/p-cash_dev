(function($) {

    "use strict";

    // Pagination Script
    var table = '#brokers-table'
    var maxRows = 5;
    var totalRows = $(table + ' tbody tr').length
    var trnum = 0;
    $(table + '  tr:gt(0)').each(function() {
        trnum++
        $(this).prepend('<td><h5 class="dark b">' + trnum + '</h5></td>');
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
            $('.pagination').append('<li class="page-item" data-page="' + i + '">\<span class="page-link">' + i++ + '</span>\</li>').show()
        }
    }
    $('.pagination li:first-child').addClass('active')

    var maxNum = $('.pagination li').length;
    var pageNum = 1;

    if (totalRows > maxRows) {
        $('.pagination').append('<li class="page-item paging next">\<span class="page-link"><i class="icon arrow_carrot-2right"></i></span>\</li>').show()
        $('.pagination').prepend('<li class="page-item paging prev">\<span class="page-link"><i class="icon arrow_carrot-2left"></i></span>\</li>').show()
    }

    $('.pagination').on('change', function() {
        if (pageNum == maxNum) {}
    })

    // create broker's pagination
    $('.pagination li.paging').on('click', function() {
        var typeNav = $(this).attr('class');
        var beforeChange = pageNum;
        if (typeNav == "page-item paging next") {
            pageNum++;
        } else {
            pageNum--;
        }

        scrollTo("#broker-list");

        if (pageNum >= maxNum + 1 || pageNum < 1) {
            pageNum = beforeChange;
            return false;
        }
        var trIndex = 0;
        $('.pagination li').removeClass('active')
        var currentNum = pageNum;
        $('.pagination li').eq(currentNum).addClass('active')
        $(table + ' tr:gt(0)').each(function() {
            trIndex++
            if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                $(this).hide()
            } else {
                $(this).show()
            }
        })
    });
    // FUCKINTION FOR SMOTH SCROLL
    function scrollTo(to = "#broker-list") {
        if ($(to).length !== 1) {
            window.open('http://pcashdev.site/home' + to, '_self');
        }
        var scrollTo = $(to).offset().top;
        $('html, body').animate({
            scrollTop: scrollTo
        }, 100);
    }

    // create broker's pagination
    $('.pagination li:not(.paging)').on('click', function() {
            scrollTo("#broker-list");

            pageNum = $(this).attr('data-page');
            var trIndex = 0;
            $('.pagination li').removeClass('active')
            var currentNum = pageNum;
            $('.pagination li').eq(currentNum).addClass('active')
            $(table + ' tr:gt(0)').each(function() {
                trIndex++
                if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                    $(this).hide()
                } else {
                    $(this).show()
                }
            })
        })
        // END OF PAGINATION SCRIPT

    // smooth scroll with scrolTo function
    $('.scroll').each(function() {
        $(this).on('click', function() {
            scrollTo("#broker-list");

            return false;
        });
    });


    // New Windows Brokers Form
    $('.table tbody tr').click(function(event) {
        event.preventDefault();
        var filename = $(this).attr('data-name');
        filename.replace(/\s+/g, '');
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

        PopupCenter($(this).attr("data-id"), $(this).attr("data-name"), 600, 600);
        // window.open($(this).attr("data-id"), "popupWindow", "width=600,height=600,scrollbars=yes,resizable=no");
    });

    // Download Button Trigger
    $('#fixed-sider .download').click(function(e) {
        e.preventDefault;
        window.open("manuals/download/" + $(this).attr('data-target'), '_blank');
        return false;
    });

    $('#fixed-sider button.btn').click(function(e) {
        e.preventDefault;
        var manual = window.open("manuals/" + $(this).attr('data-target'), '_blank');
        var currentWin = window.location.href = "thanks";
        // Puts focus on the newWindow
        if (window.focus) {
            currentWin.focus();
        }
        return false;
    });

    $('.close').click(function() {
        closeSide();
    });

    // script for close aside homepage
    function closeSide() {
        var aside = $('aside');
        if (aside.hasClass('visible')) {

            $('aside').removeClass('visible');
            var closebtn = $('aside .close');
            var closeicon = $('aside .close .arrow_carrot-2right');
            if (closebtn) {
                closeicon.addClass('arrow_carrot-2left');
                closeicon.filter('.arrow_carrot-2right').removeClass('arrow_carrot-2right');
            }
        } else {
            $('aside').addClass('visible');
            var closebtn = $('aside .close');
            var closeicon = $('aside .close .arrow_carrot-2left');
            if (closebtn) {
                closebtn.removeClass('hidden');
                closeicon.addClass('arrow_carrot-2right');
                closeicon.filter('.arrow_carrot-2left').removeClass('arrow_carrot-2left');
            }

        }
    }

    // open new windows
    function PopupCenter(url, title, w, h) {
        // Fixes dual-screen position                         Most browsers      Firefox
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }

    $('[data-toggle="tooltip"]').tooltip();

    // modal and mailchimp integration with ajax
    $('.modal').click(function() {
        $(this).modal('toggle');
    });
    $('.modal.success').click(function() {
        location.reload();
    });

    $('#subscribe').bootstrapValidator({
            feedbackIcons: {
                valid: 'icon_check_alt2 green input-icon',
                invalid: 'icon_close_alt2 red input-icon',
                validating: 'icon_loading darkgrey input-icon'
            },
            fields: {
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
                url: 'https://portofolio.us18.list-manage.com/subscribe/post-json?u=daaa86e60e30812f4c2d4b312&amp;id=1d843dec77&c=?',
                data: $("#subscribe").serialize(),
                cache: false,
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                error: function(err) { alert("Could not connect to the registration server."); },
                success: function(data) {
                    if (data.result != "success") {
                        console.log(data);
                        bv.resetForm();
                        $('.modal.failed').modal();
                        var scrollTo = $('#subscribe').offset().top;
                        $('html, body').animate({
                            scrollTop: scrollTo
                        }, 100);
                        // Something went wrong, parse data.msg string and display message
                    } else {
                        console.log(data);
                        $('#subsSucc').modal();
                    }
                }
            });
        });

})(jQuery);