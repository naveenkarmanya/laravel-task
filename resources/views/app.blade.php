<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--        [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->



        <!--        <link href="/css/bootstrap.min.css" type="text/css">
-->                <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css">

        <style>
            html, body {
                min-height: 100%;
                padding: 0;
                margin: 0;
                font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            iframe {
                display: block;
                overflow: auto;
                border: 0;
                margin: 0;
                padding: 0;
                margin: 0 auto;
            }
            .frame {
                height: 49px;
                margin: 0;
                padding: 0;
                border-bottom: 1px solid #ddd;
            }
            .frame a {
                color: #666;
            }
            .frame a:hover {
                color: #222;
            }
            .frame .buttons a {
                height: 49px;
                line-height: 49px;
                display: inline-block;
                text-align: center;
                width: 50px;
                border-left: 1px solid #ddd;
            }
            .frame .brand {
                color: #444;
                font-size: 20px;
                line-height: 49px;
                display: inline-block;
                padding-left: 10px;
            }
            .frame .brand small {
                font-size: 14px;
            }
            a,a:hover {
                text-decoration: none;
            }
            .container-fluid {
                padding: 0;
                margin: 0;
            }
            .text-muted {
                color: #999;
            }
            .ad {
                text-align: center;
                position: fixed;
                bottom: 0;
                left: 0;
                background: #222;
                background: rgba(0,0,0,0.8);
                width: 100%;
                color: #fff;
                display: none;
            }
            #close-ad {
                float: left;
                margin-left: 10px;
                margin-top: 10px;
                cursor: pointer;
            }


            .form 
            { 
                display: block; 
                margin: 20px auto;
                background: #eee;
                border-radius: 10px; 
                padding: 15px ;
            }

            .progress
            {
                position:relative;
                width:318px; 
                border: 1px solid #ddd; 
                padding: 1px; 
                border-radius: 3px; 
            }
            .bar
            { 
                background-color: #B4F5B4;
                width:0%; 
                height:20px;
                border-radius: 3px;
            }
            .percent {
                position:absolute;
                display:inline-block; 
                top:0px; 
                left:43%;
            }
        </style>





    </head>
    <body class="skin-blue sidebar-mini sidebar-open" data-spy="scroll" data-target=".navbar" data-offset="50">
        <div class="wrapper">


            @include('includes.header')
            @include('includes.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->






            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->
<!--        <script src="/js/jquery.min.js" type="text/javascript" ></script>-->
       
<!--         jQuery 2.1.3 
-->        <script src="{{ asset('/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script><!--
         jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
$.widget.bridge('uibutton', $.ui.button);
        </script>

        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->


        <script src="{{ asset('/dist/js/demo.js') }}" type="text/javascript"></script>


        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script src='/js/googlemap.js' type="text/javascript"></script>



        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>



        <script src='/js/progress.js' type="text/javascript"></script>
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css">
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="/js/datatable.js" type="text/javascript"></script>

        <script>
$(document).ready(function () {
//    $('#timeZone').dataTable({
//        "sPaginationType": "full_numbers"
//
//    });
    var table = $('#timeZone').DataTable();
    $('#timeZone tbody').on('click', '#edit', function () {
//        var data = table.row( this ).data();
        var data = table.row($(this).parents('tr')).data();
        //alert( data[0] +"'s salary is: "+ data[2] )
        //alert(data);
        window.location.href = '/dataTimeZone/' + data[0];
        //alert( 'You clicked on '+data[1]+'\'s row' );
    });
    var table2 = $('#timeZone').DataTable();
    $('#timeZone tbody').on('click', '#delete', function () {
//        var data = table.row( this ).data();
        var data = table2.row($(this).parents('tr')).data();
        //alert( data[0] +"'s salary is: "+ data[2] )
        //alert(data);
        window.location.href = '/dataTimeZoneDelete/' + data[0];
        //alert( 'You clicked on '+data[1]+'\'s row' );
    });
    $('#timeZone tbody').on('click', '#view', function () {
//        var data = table.row( this ).data();
        var data = table2.row($(this).parents('tr')).data();
        //alert( data[0] +"'s salary is: "+ data[2] )
        //alert(data);
        window.location.href = '/ViewdataTimeZone/' + data[0];
        //alert( 'You clicked on '+data[1]+'\'s row' );
    });
});
        </script>





    </body>
</html>