<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="{{route('login')}}" method="post">
		{{csrf_field()}}
		<input type="text" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>


<!DOCTYPE html> -->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | User Lock Screen 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components-md.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> 
    </head>
    <!-- END HEAD -->

    <body class="login">
        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{route('login')}}" method="post">
            	{{csrf_field()}}
                <h3 class="form-title">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="email" class="form-control" name="email">
                    <label>Email</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="password" class="form-control" name="password" autocomplete="new-password">
                    <label>Password</label>
                    <span class="help-block"></span>
                </div>
                <div class="form-actions">
                	<div class="row">
                		<div class="col-md-12 text-center">
                			<button type="submit" class="btn btn-primary btn-block uppercase" id="login-button">Login</button>
                		</div>
	                	<div class="col-md-12 text-center">
                			<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                		</div>
                	</div>
	                    

                    
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <div id="register-form-content">
            </div>
            
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>
        <div id="divLoading" style="margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(102, 102, 102); z-index: 30001; opacity: 0.4; display: none;">
<p style="position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 100px;">
<img src="assets/img/loadinfo.gif" style="width: 100px">
</p>
</div>
        
		@include('footer.footer') ;
		<script src="assets/scripts/login.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#login-button').click(function(){
					$('#divLoading').show();
				});
			});	
		</script>
    </body>

</html>