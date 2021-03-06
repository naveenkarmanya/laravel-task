
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>






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





                <form action="{{URL::route('registersubmit')}}" method="post" class="login">

                    <div class="form-group has-feedback">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <span id="phonelocation"></span>
                    </div>
                    
                    <div class="form-group has-feedback">
                       
                        <input type="text" class="form-control" placeholder="Account Number" id="AccountNumber" name="AccountNumber">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <span id="accountnumlocation"></span>
                    </div>

                    <div class="form-group has-feedback">

                        <input type="email" class="form-control" placeholder="User Name" id="email" name="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span id="emaillocation"></span></div>

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-primary btn-block btn-flat " value="Sign Up">
                            <a href="{{URL::Route('register')}}"  ><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>

                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--    <div class="social-auth-links text-center">
                      <p>- OR -</p>
                      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                    </div>-->
                <!-- /.social-auth-links -->

                <a href="{{URL::Route('forgotpassword')}}">I forgot my password</a><br>
                <a href="{{URl::Route('register')}}" class="text-center">Register a new membership</a>

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
        <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
        </script>
    </body>
</html>
