
                 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
-->  <!--
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form  method="post" action="{{URL::Route('loginsubmit')}}">
          
      <div class="form-group has-feedback">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <b class="bold"> FullName</b>: <input type="hidden" class="form-control name disabled" name="fullname" id="fullname" placeholder="Full name" value="{{$data['FullName']}}">{{$data['FullName']}}
        </div>
      <div class="form-group has-feedback">
        
          <b class="bold"> Address</b>:<input type='hidden' class="form-control name" name="textarea" id="textarea" placeholder="Address" value='{{$data['Address']}}'>{{$data['Address']}}
        </div>
      <div class="form-group has-feedback">
          <b class="bold"> City</b>: <input type="hidden" class="form-control password" name="city" id="city" placeholder="City" value="{{$data['City']}}">{{$data['City']}}
        
      </div>
      <div class="form-group has-feedback">
          <b class="bold"> State</b>: <input type="hidden" class="form-control retypepassword" name="state" id="state" placeholder="State" value="{{$data['State']}}">{{$data['State']}}
        
      </div>
         <div class="form-group has-feedback">
        
             <b class="bold"> Phone</b>: <input type="hidden" class="form-control" placeholder="Phone" id="phone" name="phone" value="{{$data['Phone']}}">{{$data['Phone']}}
        
      </div>
    
      <div class="form-group has-feedback">
          
          <b class="bold"> Email Address</b>:<input type="hidden" class="form-control" placeholder="User Name" id="email" name="email" value="{{$data['email']}}">{{$data['email']}}
        </div>
        
        <div class="form-group has-feedback">
          
          <b class="bold">Account Number</b>:<input type="hidden" class="form-control" placeholder="Account Number" id="AccountNumber" name="AccountNumber" value="{{$data['AccountNumber']}}">{{$data['AccountNumber']}}
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
            <input type="submit" class="btn btn-primary btn-block btn-flat register" value="Conform">
    <a href="{{URL::Route('login')}}"  ><input type="button" class="btn btn-primary btn-block btn-flat" value="BACK"></a>
        
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
</body>
</html>

         
         
        
        

    

