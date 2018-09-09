<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>
<?php

	$movie = $_GET['movie'];
	//echo $movie;
?>
<html>
	<head>
		<title>BOOKING PANEL</title>
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
			<section class="section">
				<p><?php echo $movie; ?></p><hr color="black">
				<?php
					
					$conn=mysqli_connect("localhost","root","");
					mysqli_select_db($conn,"se_project");
					
					$movie = $_GET['movie'];
					$query = "select * from movies where m_name = '$movie'";
					
					$run = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($run,MYSQLI_NUM)){
						
						$movie_des = $row[4];

					}
					
				?>
				<p><?php echo $movie_des; ?></p>
				
				<hr color="black">
				<br>
				<form action="confirmation.php" method="GET">
					<table  height="200" width="500" align="center" border="3">
						<tr>
							<td align="center" colspan="2">Booking Panel</td>
						</tr>
						<tr>
							<td align="right">Name:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td align="right">Email:</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td align="right">Mobile No.:</td>
							<td><input type="text" name="mobile_no"></td>
						</tr>
						<tr>
							<td align="right">No. of Tickets:</td>
							<td><input type="number" name="tickets"></td>
						</tr>
						<tr>
							<td align="right">Ticket Price:</td>
							<td>
							<select type="number" name="ticket_price">
								<option value="100">100 (Silver)</option>
								<option value="200">200 (Gold)</option>
								<option value="300">300 (Platinum)</option>
							</td>
						</tr>
						<tr>
							<input type="hidden" name="movie" value="<?php echo $movie;?>">
							<td align="right">Show No.:</td>
							
							<td>
							<select type="number" name="show_no">
								<option value="1">9:00AM</option>
								<option value="2">2:00PM</option>
								<option value="3">9:00PM</option>
							</td>
						</tr>
						<tr>
							
							<td align="center" colspan="2"><input type="submit" name="submit"></td>
						</tr>
					</table>
				</form>
				<?php
					/*mysql_connect("localhost","root","");
					mysql_select_db("se_project");
					
						
					if(isset($_GET['submit'])){
						$name = $_GET['fname'];
						$movie_name = $_GET['movie'];
						//echo $movie_name;
						$email = $_GET['email'];
						$mobile = $_GET['mobile_no'];
						$tickets = $_GET['tickets'];
						$show = $_GET['show_no'];
											
					}*/
				
				?>
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