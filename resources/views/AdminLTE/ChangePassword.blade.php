@extends('app')
@section('content')



   
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <?php
                    if (isset($Result)) {
                        echo "<b style='color:blue'>".$Result."</b>";
                    }
                    ?>
                <p class="login-box-msg">Update Password</p>





                <form action="{{URL::route('UpdatePassword')}}" method="post" id="admin" >

                    <div class="form-group has-feedback">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="text" class="form-control" placeholder="Old Password" id="oldpassword" name="oldpassword">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span id="emaillocation"></span></div>
                    <div class="form-group has-feedback">

                        <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <span id="passwordlocation"></span>
                    </div>
                    
                    <div class="form-group has-feedback">

                        <input type="password" class="form-control" placeholder="Conform Password" id="conformpassword" name="conformpassword">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <span id="passwordlocation"></span>
                    </div>


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
                            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Update">
                           
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

 @stop
