<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>
<?php/*
	
	mysql_connect("localhost","root","");
	mysql_select_db("se_project");
	
	$login_record = $_POST['uname'];
	$query = "select * from login_users where uname='$login_record'";
	$run = mysql_query($query);
	while($row=mysql_fetch_array($run)){
		$name = $row['First_Name'];
	}
*/
?>
<html>
	<head>
		<title>Index Page</title>
		<link rel="stylesheet" href="css11.css">
		<script type="text/javascript">
			var imagecount = 1;
			var total = 8;
			
			function slide(x){
				var image = document.getElementById('img');
				imagecount = imagecount + x;
				if(imagecount > total){imagecount = 1;}
				if(imagecount < 1){imagecount = total;}
				image.src = "images/img"+imagecount+".jpg";
			}
			window.setInterval(function slideA(){
				var image = document.getElementById('img');
				imagecount = imagecount + 1;
				if(imagecount > total){imagecount = 1;}
				if(imagecount < 1){imagecount = total;}
				image.src = "images/img"+imagecount+".jpg";
			},3000);
		</script>
	</head>
	<body onLoad="slideA()">
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
			<section class="section">
				<!--<div id="section1">
					<fieldset class="fieldset1">
						<!--<legend class="legend1">Latest Blockbusters</legend>-->
						<!--<ul class="fieldset1_legend">
							<p class="legend1">LATEST BLOCKBUSTER</p>
							<li><a href="https://www.youtube.com/watch?v=xe1LrMqURuw">Batman V Superman : Dawn of Justice</a></li>
							<li><a href="https://www.youtube.com/watch?v=mMjPokU5-0w">Rocky Handsome</a></li>
							<li><a href="https://www.youtube.com/watch?v=pnSqqTrqQFE">Jai Gangaajal</a></li>
							<li><a href="https://www.youtube.com/watch?v=s7YYt9_KfsM">Kapoor & Sons</a></li>
							<li><a href="https://www.youtube.com/watch?v=E1a981dTcRc">Tera Surroor</a></li>
						<ul>
					</fieldset>
					<fieldset class="fieldset2">
						<!--<legend class="legend2">Upcoming Movies</legend>-->
						
						<!--<ul class="fieldset2_legend">
							<p class="legend2">UPCOMING MOVIES</p>
							<li><a href="https://www.youtube.com/watch?v=Sxz-Y-c2UUc">God's Not Dead 2 </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=5mkm22yO-bs">The Jungle Book </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=8WwBc-BPCu4">Akira </a>(Kannada)</li>
							<li><a href="https://www.youtube.com/watch?v=PfBVIHgQbYk">X-Men Apolocalypse </a>(English)</li>
							<li><a href="https://www.youtube.com/watch?v=QgxvDORKzec">M.S. Dhoni: The Untold Story </a>(Hindi)</li>
						</ul>
					</fieldset>
				</div>-->
				
				<div id="section2">
					<img src="images/img1.jpg" id="img">
					<div id="left_holder"><img onClick="slide(-1)" class="left" src="images/scroll_left.jpg"/></div>
					<div id="right_holder"><img onClick="slide(1)"  class="right" src="images/scroll_right.jpg"/></div>
				</div>
				
				<br><br><br><br><br><br><br><br>
				<!--<div class="section_right">
					Welcome <?php echo $_SESSION['uname']; ?><br><br><br><br>Click on MOVIES tab to book tickets...
				</div>-->
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