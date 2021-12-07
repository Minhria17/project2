

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="assets/dist/img/favicon.png">

  <title>Login User</title>
  <base href="{{asset('')}}assets/">
  <!-- Bootstrap CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="dist/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="dist/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="dist/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="dist/css/style.css" rel="stylesheet">
  <link href="dist/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

  <form class="login-form" method="POST"  action="{{ route('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @csrf
      <div class="login-wrap">
        <h2 style="text-align: center;">USER</h2><br>
        
        <h4 style="text-align: center;">
        <?php
          use Carbon\Carbon;
          echo Carbon::now('Asia/Ho_Chi_Minh');
        ?>
        </h4>
        <div class="input-group">
          <span style="background-color: #0099FF;" class="input-group-addon"><i></i></span>
          <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span style="background-color: #0099FF;" class="input-group-addon"><i></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        
      </div>
    </form>
    


</body>

</html>





