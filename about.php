<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>
<html>
	<head>
		<title>ABOUT</title>
		<link rel="stylesheet" href="css11.css">
	</head>
	<body>
		<div class="container" >
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
			<section  class="section" >
				<img src="images/developers.png"  class=about_img>
				<div style="font:italic 20px Brush Script MT Italic;">
				   <div style="text-decoration:underline;">Co-founders:</div>
				   
					   <li>Siddhant Patel</li>  
                       <li>Vipanshu Jain</li>
                       <li>Shubham Gupta</li>	
					
				<h1 style="background-color:RED;" align="center">TICKET KARO.COM</h1> is an online ticket booking system to provide another way for the customer to buy cinema ticket.This system is basicaly aimed to provide the customer the complete information of the movie ,according to which the customers can book the tickets.The Goals of our system are :
                   
                      
				   <li>To provide a anytime anyplace service for the custemer</li> 
                    <li>To minimize the number of staff at the ticket box</li> 
                    <li>To promote the film on internet</li> 
                    <li>To obtain statistical information from the booking record</li> 					
				    <div style= "float:right;">	
               		  <h1 style="text-decoration:underline;"> Contact</h1>
					   <div>C.V.Raman Bhawan,MANIT BHOPAL(MP)</div>
					   <div> Mob No. +918349677620/+919755729189/+917747941450</div>
					</div>		
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