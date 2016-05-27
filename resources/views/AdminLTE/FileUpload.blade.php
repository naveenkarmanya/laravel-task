@extends('app')
@section('content')





</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <?php
            if (isset($Result)) {
                echo "<b style='color:blue'>" . $Result . "</b>";
            }
            ?>

            @if(session()->has('logout'))
            <div class='alert-success'>{{Session::get('logout')}}</div>
            @endif
            <p class="login-box-msg">File Upload with Progress Bar</p>






            <!--@if (count($errors) > 0)
            
                <div class="alert alert-danger">
                    <h1>Errors</h1>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif-->





            <form action="{{('progress')}}"  method="post" enctype="multipart/form-data"  class="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="file" name="myfile"><br>
                <input type="submit" value="Upload File to Server">

            </form>

            <div class="progress">
                <div class="bar"></div >
                <div class="percent">0%</div >
            </div>

            <div id="status"></div>


            <!--    <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
                </div>-->
            <!-- /.social-auth-links -->


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.0 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
    <script src='/js/Admin.js'></script>




    @stop
