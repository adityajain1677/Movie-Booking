<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>

<html>
	<head>
		<title>CONTACT</title>
		<link rel="stylesheet" href="css11.css">
	</head>
	<body>
		<div class="container">
			<header class="header">	
					<img align="left" src="logo_3.jpg" width="70" height="63">
					<!--<li><button class="button"><a href="Sign-Up.html">Sign-Up</a></button></li>
					<li><button class="button"><a href="login.php">Login</a></button></li>-->
					<li><button class="button"><a href="index.php">Home</a></button></li>
					<li><button class="button"><a href="movies.php">Movies</a></button></li>
					<li><button class="button"><a href="about.php">About</a></button></li>
					<li><button class="button"><a href="contact.php">Contact</a></button></li>	
					<li class="user" >Welcome <?php echo $_SESSION['uname']; ?></li>
					<li><button class="button"><a href="logout.php">Logout</a></logout></li>
			</header>
			<section class="section">
				
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