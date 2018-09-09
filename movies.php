<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>
<html>
	<head>
		<title>MOVIES</title>
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
						
					<li class="user">Welcome <?php echo $_SESSION['uname']; ?></li>
					<li><button class="button"><a href="logout.php">Logout</a></logout></li>
			</header>
			<section class="section_movie" >
			   <div class="left_movies" >
				   <h3 style="text-decoration:underline;">BOOKING AVAILABLE FOR</h3>
					<ul class="fieldset1_legend">
						<li><a href="booking_panel.php?movie=Batman V Superman : Dawn of Justice">Batman V Superman : Dawn of Justice</a></li>
						<li><a href="booking_panel.php?movie=Rocky Handsome">Rocky Handsome</a></li>
						<li><a href="booking_panel.php?movie=Ki and Ka">Ki and Ka</a></li>
						<li><a href="booking_panel.php?movie=Kapoor and Sons">Kapoor and Sons</a></li>
						<li><a href="booking_panel.php?movie=Kung Fu Panda 3">Kung Fu Panda 3</a></li>
						
					</ul>
				</div>	
				<div id="section_movie">
					<!--<fieldset class="fieldset2">
						<!--<legend class="legend2">Upcoming Movies</legend>-->
						
						<ul class="fieldset2_legend">
							<h3 class="legend2">UPCOMING MOVIES (VIEW TRAILORS)<h3>
							<li><a href="https://www.youtube.com/watch?v=Sxz-Y-c2UUc">God's Not Dead 2 </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=5mkm22yO-bs">The Jungle Book </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=8WwBc-BPCu4">Akira </a>(Kannada)</li>
							<li><a href="https://www.youtube.com/watch?v=PfBVIHgQbYk">X-Men Apolocalypse </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=QgxvDORKzec">M.S. Dhoni: The Untold Story </a>(Hindi)</li>
						</ul>
					
				</div>
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