
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/skeleton.css">
	<link rel="stylesheet" href="../css/layout.css">
	
</head>
<body>

	<!-- Primary Page Layout -->

	<div class="container">
		<div class="form-bg">
			<form method="post">
				<h2>Login</h2>
				<p><input type="text" placeholder="Username" name="username" autocomplete="off"></p>
				<p><input type="password" placeholder="Password" name="password"></p>
                <a href="login.php" style="color:#000000; margin-left:2rem;">Back to Login</a>
				<button name="bsubmit">Register</button>
			<form>
		</div>


	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>
<?php
require 'config.php';
if (isset($_POST["bsubmit"])) {
        if(registrasi($_POST) > 0) {
         echo "<script> 
                alert('user baru berhasil di tambahkan!'); 
                </script>";
        } else {
         echo mysqli_error ($db);
        }
}
?>