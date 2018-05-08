<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <title>Login</title>

  <!-- Bootstrap CSS -->
  {!! Html::style('css/bootstrap.min.css') !!}
  <!-- bootstrap theme -->
  {!! Html::style('css/bootstrap-theme.css') !!}
  <!--external css-->
  <!-- font icon -->
  {!! Html::style('css/elegant-icons-style.css') !!}
  {!! Html::style('css/font-awesome-login.css') !!}
  <!-- Custom styles -->
  {!! Html::style('css/style-login.css') !!}
  {!! Html::style('css/style-responsive.css') !!}

</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="{{ route('login') }}" method="POST">
      {{ csrf_field() }}

      <div class="login-wrap">
        <p class="login-img"><i class="fa fa-lock" aria-hidden="true"></i></p>

        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <br>
        <p style="color: #000;">Kamu lupa password???<br>KASIAN BANGET</p>
      </div>
    </form>
    
  </div>


</body>

</html>
