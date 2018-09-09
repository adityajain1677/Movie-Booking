<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>

<html>
	<head>
		<title>PAYMENT</title>
		<link rel="stylesheet" href="css11.css">
	</head>
	<body>
		<div class="container">
			<header class="header">	
					<img align="left" src="logo_3.jpg" width="70" style="height:100%;">
					<!--<li><button class="button"><a href="Sign-Up.html">Sign-Up</a></button></li>
					<li><button class="button"><a href="login.php">Login</a></button></li>-->
					<li><button class="button"><a href="index1.php">Home</a></button></li>
					<li><button class="button"><a href="movies.php">Movies</a></button></li>
					<li><button class="button"><a href="about.php">About</a></button></li>	
					<li class="user" >Welcome <?php echo $_SESSION['uname']; ?></li>
					<li><button class="button"><a href="logout.php">Logout</a></logout></li>
			</header>
			<section class="section">
				<?php
				
					$name = $_GET['booking_name'];
					$tickets = $_GET['tickets'];
					$amount = $_GET['amount'];
					$price =  $_GET['price'];
					$t = $_GET['tp'];
				?>
				<form action="receipt.php?booking_name=<?php echo $name;?>&tickets=<?php echo $tickets;?>&amount=<?php echo $amount;?>&price=<?php echo $price;?>&t=<?php echo $t;?>" align="center" method="POST">
					<table align="center">
						<tr>
							<td>ATM CARD NUMBER</td>
							<td><input type="text" name="card_no" required></td>
						</tr>
						<tr>
							<td>ATM PIN NUMBER</td>
							<td><input type="password" name="pass" required></td>
						</tr>
						<tr>						
							<td>CVV NUMBER</td>
							<td><input type="password" name="cvv" required></td>
						<tr>	
							<td>VALIDITY</td>
							<td><input type="text" name="validity" required></td>
						<tr>
						<tr>
							<td colspan="5" align="center"><input type="submit" name="submit" value="PAY"></td>
						</td>	
					</table>
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