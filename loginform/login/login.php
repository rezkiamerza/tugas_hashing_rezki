<?php
session_start();
// set cookie
if(isset($_COOKIE["login"])) {
	if($_COOKIE ["login"] == 'true' ) {
		$_SESSION['login'] = true;
	}
}

if(isset($_SESSION["login"])) {
	exit(header("Location: \loginform\index.php"));
}
require 'config.php';
 if(isset($_POST['bsubmit'])) {
	 $username=$_POST["username"];
	 $password=$_POST["password"];
	 $result=mysqli_query ($db, " SELECT * FROM `users` WHERE username = '$username'");
 
 //cek username
if (mysqli_num_rows($result) === 1 ) {
	//cek password 
	$row=mysqli_fetch_assoc($result);
	if(password_verify($password, $row["password"])) {
		//SET SESSION 
		$_SESSION["login"] = true;
		exit(header("Location: " .$url));
	}
  }
  $error=true;
 }
?>
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
				<?php if (isset($error)) : ?>
					<p style="color: red; font-style: italic; text-align:center;">Username / Password Salah!</p>
					<?php endif; ?>
				<p><input type="text" placeholder="Username" name="username" autocomplete="off"></p>
				<p><input type="password" placeholder="Password" name="password"></p>
				<a href="register.php" style="color:#000000; margin-left:2rem;">Register First !</a>
				<button type="submit" name="bsubmit"></button>
			<form>
		</div>
	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>