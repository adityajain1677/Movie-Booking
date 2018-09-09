<?php
session_start();


?>
<!--<html>
	<head>
		<Title>LOGIN PANEL</title>
	</head>
	<body>
		<form align="center" action="login.php" method="POST">
			Username:<input type="text" name="uname">
			Password:<input type="password" name="pass"><br><br>
			<input align="center" type="submit" value="login" name="submit">
		
		</form>
	</body>
</html>
-->
<html>
	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" href="css11.css">
	</head>
	<body>
		<div class="container">
			<header class="header">
					
					<img align="left" src="logo_3.jpg" width="70" style="height:100%;">
					<!--<li><button class="button"><a href="Sign-Up.html">Sign-Up</a></button></li>
					<li><button class="button"><a href="login.php">Login</a></button></li>-->
					<li><button class="button"><a href="index.php">Home</a></button></li>
					<li><button class="button"><a href="movies.php">Movies</a></button></li>
					<li><button class="button"><a href="about.php">About</a></button></li>	
					
				
			</header>
			<section class="section">
				<form action="login.php" method="POST" align="center">
					<fieldset class="fieldset_login">
						<legend>LOGIN PANEL</legend>
						<table width="100" height="100" align="center">
							<tr>
								<td align="right">Username:</td>
								<td><input type="text" name="uname"></td>
							</tr>
							<tr>	
								<td align="right">Password:</td>
								<td><input type="password" name="pass"></td>
							</tr>	
							<tr>
								<td><input type="submit" name="submit" value="Login" ></td>
							</tr>
							<!--<tr>	
								<p>Not Registered ,Click on <a href="register.php">Register</a> to book Tickets.</p>
							</tr>-->
							
						</table>
						<p align="center">Not Registered ,Click on <a href="register.php">Register</a> to book Tickets.</p>
					</fieldset>
				</form>	
			</section>
			<footer class="footer"> 
				<div class="footer1">
					<ul class="footer_ul">
						<li>See The New Trailors on <a href="http://www.youtube.com" color="white">YOUTUBE</a></li>
						<li>Follow Us On <a href="http://www.twitter.com" color="white">TWITTER</a></li>
						<li>Follow Us On <a href="http://www.facebook.com" color="white">FACEBOOK</a></li>
					</ul>
					<ul class="footer_li">
						<li>Call Us : +919876543210</li>
						<li></li>
					</ul>
				</div>
				<div class="footer2">
					<font color="white">All rights Reserved | Developed by 10-11-43</font>
				</div>
			</footer>
		</div>		
	</body>
</html>
<?php
	
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"se_project");
	if(isset($_POST['submit'])){
		$username =$_POST['uname'];
		$password = $_POST['pass'];
		
		
		$sql = "SELECT * FROM `login_users` WHERE `username` = '$username' AND `password` = '$password'";
		$run = mysqli_query($conn,$sql);
	
		if($row = mysqli_fetch_array($run,MYSQLI_NUM)){
			$id = $row['id'];
			//$username =  ;
			$_SESSION['uname']=$_POST['uname'];
			        echo "<script>
					window.open('index.php?logged=You are successfully logged in.','_self');
					</script>";
			exit();		
		}
		else{
			echo 	"<script>
					alert('Wrong Username or Password. Please Re-Enter.');
					window.open('login.php','_self');
					</script>";
			exit();	
			
		}	
		
	}
?>