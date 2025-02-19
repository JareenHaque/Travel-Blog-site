<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
0<html>
<head>
	<title>Home</title>
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
	font-weight: normal; "> <b>  TuitionMaster </b> </h3> <img src="img/owlteacher.jpg" alt="image not found"> 
							</div>

<div class="header">
	<h2>Logged in!</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
</br>	
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> !</p>
		
</br> <p> <a href="index.php?logout='1'" style="color: red; "> <b>logout </b> </a> </p> 
</br><center> <button style=" background :  #5F9EA0; width: 120px; height: 50px;" >  <a href="index.html" style="color: ghostwhite;"> <b> Go to website <b/> </a> </button> </center>
    <?php endif ?>
</div>
		
</body>
</html>