<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Ultimate Erp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="adminlte/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="adminlte/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="adminlte/css/custom-style.css">
</head>
<body class="container-login100"  style="background-image: url('adminlte/img/image6.png') ">



<div class="login-box">
  <div class="login-logo">
    <b>ادارة احجز واختار طبيبك</b>
  </div>

  <div class="card">
  
    <div class="card-body login-card-body">
      <p class="login-box-msg">لوحه تسجيل الدخول </p>




 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

      <div class="input-group mb-3  form-group{{ $errors->has('email') ? ' has-error' : '' }}">

          <input id="email" 
                 type="email" 
                 name="email" 
                 class="form-control" 
                 placeholder="ایمیل"
                 value="{{ old('email') }}"
                 required autofocus
                 >

          <div class="input-group-append">

            <span class="fa fa-envelope input-group-text"></span>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>



 <div class="input-group mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
    <input id="password" name="password" type="password" class="form-control" placeholder="كلمة المرور" required>
          <div class="input-group-append">
            <span class="fa fa-lock input-group-text"></span>
             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>


                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرنى
                                    </label>
                                </div>
                            </div>
                        </div>


<center>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل الدخول 
                                </button>

                            
                            </div>
                        </div>
</center>
                    </form>




      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
