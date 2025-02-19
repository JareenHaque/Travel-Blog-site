<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style ="background-image: url(http://miriadna.com/desctopwalls/images/max/Grass-ear.jpg);">

<div class="logo" style="position:absolute; left: 50px; top:50px;  height:50px ;width: 100px;"> 
							 <h3 style="	color: white;
	margin-top: 0px;
	font-style: normal;
	font-weight: 400;
  text-transform: normal;
	font-size: 28px;
	font-family: 'Lato', sans-serif;
	font-weight: normal; "> <b>  Banglaglobe </b> </h3> <img src="img/leaf.png" alt="image not found"> 
							</div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="subscribe.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username"  >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>