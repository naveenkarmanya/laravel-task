@extends('app')
@section('content')     

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <?php
            if (isset($Result)) {
                echo "<b style='color:blue'>" . $Result . "</b>";
            }
            ?>


            <p class="login-box-msg">Update Profile</p>

            <form  method="post" >

                <div class="form-group has-feedback">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <b class="bold"> FullName</b>: {{$Update[0]['FullName']}}
                </div>
                <div class="form-group has-feedback">

                    <b class="bold"> Address</b>:{{$Update[0]['Address']}}
                </div>
                <div class="form-group has-feedback">
                    <b class="bold"> City</b>: {{$Update[0]['City']}}

                </div>
                <div class="form-group has-feedback">
                    <b class="bold"> State</b>: {{$Update[0]['State']}}

                </div>
                <div class="form-group has-feedback">

                    <b class="bold"> Phone</b>: {{$Update[0]['Phone']}}

                </div>

                <div class="form-group has-feedback">

                    <b class="bold"> Email Address</b>:{{$Update[0]['email']}}
                </div>
                <div class="form-group has-feedback">

                    <b class="bold"> Account Number</b>:{{$Update[0]['AccountNumber']}}
                </div>



                <div class="row">
                    <div class="col-xs-8">
                        <!--          <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" class="form-control"> I agree to the <a href="#">terms</a>
                                    </label>
                                  </div>-->
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                       
            <!--    <a href="{{URL::Route('login')}}"  ><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>-->

                    </div>
                    <!-- /.col -->
                </div>


            </form>

            <!--    <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                    Facebook</a>
                  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                    Google+</a>
                </div>-->

            <!--    <a href="{{URL::route('login')}}" class="text-center">I already have a membership</a>-->
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 2.2.0 -->
    <script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>
    <script src='/js/Admin.js'></script>
    <script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
    @stop







