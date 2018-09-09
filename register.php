<!--<html>
	<head>
		<Title>REGISTRATION PANEL</title>
	</head>
	<body>
		<form align="center" action="register.php" method="POST"><br>
			FIRST NAME:<input type="text" name="fname"><br>
			LAST NAME:<input type="text" name="lname"><br>
			EMAIL:<input type="text" name="email"><br>
			USERNAME*:<input type="text" name="uname"><bt>
			PASSWORD*:<input typr="password" name="pass"><br><br>
			<input align="center" type="submit" value="Register" name="register">	
		</form>
	</body>
</html>
-->
<html>
	<head>
		<title>Registration Panel</title>
		<link rel="stylesheet" href="css11.css">
	</head>
	<body>
		<div class="container">
			<header class="header">
					
					<img align="left" src="logo_3.jpg" width="70" style="height:100%;">
					<!--<li><button class="button"><a href="Sign-Up.html">Sign-Up</a></button></li>
					<li><button class="button"><a href="login.php">Login</a></button></li>-->
					<li><button class="button"><a href="index.php">Home</a></button></li>
					<li><button class="button"><a href="movies_events.html">Movies</a></button></li>
					<li><button class="button"><a href="about.html">About</a></button></li>
					
				
			</header>
			<section class="section">
				<form action="register.php" method="POST" align="center">
					<fieldset class="fieldset_login">
						<legend>REGISTRATION PANEL</legend>
						<table width="100" height="100" align="center">
							<tr>
								<td align="right">First_Name:</td>
								<td><input type="text" name="fname"></td>
							</tr>
							<tr>
								<td align="right">Last_Name:</td>
								<td><input type="text" name="lname"></td>
							</tr>
							<tr>
								<td align="right">Gender:</td>
								<td><input type="radio" name="gender" value="Male">Male<br><input type="radio" name="gender" value="Female">Female<br></td>
							</tr>
							<tr>
								<td align="right">E-Mail_Id:</td>
								<td><input type="email" name="email" required></td>
							</tr>
							<tr>
								<td align="right">Username:</td>
								<td><input type="text" name="uname"></td>
							</tr>
							<tr>	
								<td align="right">Password:</td>
								<td><input type="password" name="pass"></td>
							</tr>	
							<tr>
								<td ><input type="submit" name="register" value="Register"></td>
							</tr>
						</table>
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

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "se_project");
	
	if(isset($_POST['register'])){
		
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		
		if(empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email))
		{
			echo "<script>
				  alert('Please fill all the details.');
				  window.open('register.php','_self');
				  </script>";
		}
		else
		{
		/*$find ='@';
		$find1 = '.';
		$pos = strpos($email,$find);
		$pos1 = strpos($email,$find1);
		if($pos === false || $pos1 === false)
		{
			echo "<script>
				  alert('Invalid Email-id. Please Re-Enter.');
				  window.open('register.php','_self');
				  </script>";
		}
		else*/
		{
			$sql = "SELECT * FROM `login_users` WHERE `username` = '$username'";
			$run = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_array($run))
			{
				$id = $row['id'];
						echo "<script>
						alert('Username Already Exist. Please Re-Enter.');
						window.open('register.php','_self');
						</script>";
				exit();
			}			
			else
			{ 
				$que="insert into login_users(First_Name,Last_Name,Gender,Email,username,password) values('$firstname','$lastname','$gender','$email','$username','$password')";
			
				if(mysqli_query($conn, $que))
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('User Registered. Now you can Login.')
							window.location.href='login.php'
							</SCRIPT>");
					exit();	
				}
				exit();		
			}
		}
			
			
		}
		
	}

?>