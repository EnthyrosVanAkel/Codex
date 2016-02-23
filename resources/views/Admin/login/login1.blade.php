<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CODEX</title>

    <!-- Bootstrap core CSS -->

    <link href="/Admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="/Admin/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Admin/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/Admin/css/custom.css" rel="stylesheet">
    <link href="/Admin/css/icheck/flat/green.css" rel="stylesheet">


    <script src="/Admin/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login">
                <section class="login_content">
                @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <form role="form" method="POST" action="{{ url('/admin/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h1>ADMIN</h1>
                        <div>
                            <input type="email" placeholder="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        
                        <div>
                            <input type="password" placeholder="password" class="form-control" name="password">
                        </div>
                        
                        <div>
                            <input type="checkbox" name="remember"> Remember Me
						</div>

                        <div>
                           <button type="submit" class="btn btn-default submit">Login</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p>New to site?
                                <a href="{{ url('/admin/register') }}"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> CODEX</h1>

                                <p>©2015 All Rights Reserved.<br>CODEX<br>Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>