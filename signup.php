<!DOCTYPE html>
<html>
  <head>
    <title>Freelance Project Manager - Organize Tasks, Complete Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/compiled.fpm.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Freelance Project Manager</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			            	<form id="fpm-signup" name="fpm-signup" method="POST">
				                <h4>Developer Sign Up</h4>
				                <h6 class="text-default">Registration is FREE</h6>
				                <input class="form-control" id="signup-email" type="text" placeholder="E-mail address">
				                <input class="form-control" id="signup-password" type="password" placeholder="Password">
				                <input class="form-control" id="signup-confirm" type="password" placeholder="Confirm Password">
					            <div class="success">
				               		<span class="success_text"></span>
				             	</div>
				                <div class="action">
				                    <a class="btn btn-primary signup" id="signup-btn" href="index.php">Sign Up</a>
				                </div>
			                </form>                
			            </div>
			        </div>

			        <div class="already">
			            <p>Have an account already?</p>
			            <a href="index.php">Login</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/signup.js"></script>
  </body>
</html>