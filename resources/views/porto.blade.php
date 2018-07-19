<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">  
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>   
    
    <script>
            $(document).ready(function() {
                var table = $('#mytable').DataTable( {
                    buttons: [
                        {
                            extend: 'copy',
                            text: 'Copy to Clipboard'
                        },
                        {
                            extend: 'excel',
                            text: 'Download to Excel'
                        },
                        'colvis',
                    ],
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return 'Details for '+data[1]+' (ID:'+data[0]+')' ;
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                                tableClass: 'table'
                            } )
                        }
                    }
                } );
             
                table.buttons().container()
                    .appendTo( '#table-cont .col-md-6:eq(0)' );
            } );
    </script>
    <style>
        #main-wrapper
        {
            background: none;
            background: #fff;
        }
        main
        {
            background: #fff;
        }

        #mytable_wrapper .col-sm-12
        {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        #mytable_wrapper .col-sm-12.col-md-4
        {
            justify-content: flex-end;
        }
        .modal-dialog
        {
            max-width: 90vw !important;
        }
    </style>

</head>
<body>
    <main>
        <div id="table-cont" class="container" style="margin: 3em auto;">
            @include('portouser')
        </div>
    </main>
    <script>
            $(document).ready(function() {
                    var count = 0;
                    $('.col-sm-12.col-md-6').each(function()
                    {
                        if(count>0)
                        {
                            $(this).removeClass('col-md-6');
                            $(this).addClass('col-md-4');
                        }
                        else
                        {
                            $(this).removeClass('col-md-6');
                            $(this).addClass('col-md-8');
                        }
                        count++;
                    });
                });
    </script>
</body>
</html>