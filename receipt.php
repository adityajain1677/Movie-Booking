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
					<img align="left" src="logo_3.jpg" width="70" style="height:100%;">
					<!--<li><button class="button"><a href="Sign-Up.html">Sign-Up</a></button></li>
					<li><button class="button"><a href="login.php">Login</a></button></li>-->
					<li><button class="button"><a href="index.php">Home</a></button></li>
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
					$price = $_GET['price'];
					$t = $_GET['t'];
					
					$card_no = $_POST['card_no'];
					$pin = $_POST['pass'];
					$cvv = $_POST['cvv'];
					$val = $_POST['validity'];
					
					
					
					
				?>
				
				<table align="center" border="1" style="margin-top:100px;">
					<tr>
						<td align="center" colspan="2">RECEIPT</td>
					</tr>
					<tr>
						<td>RECEIPT NO.</td>
						<td><?php echo "D0";echo rand(100000,999999);?></td>
					</tr>
					<tr>
						<td>NAME</td>
						<td><?php echo $name;?></td>
					</tr>
					<tr>
						<td>NO. OF TICKETS</td>
						<td><?php echo $tickets;?></td>
					</tr>
					<tr>
						<td>AMOUNT PAID</td>
						<td><?php echo $amount;?></td>
					</tr>
					<tr>
						<td>SEAT NO.</td>
						<td><?php 
						
						for($i=1;$i<=$tickets;$i++)
							  {
								   if($price==100)
								   {
									   echo "S";
								   }
								   else if($price==200)
									   echo "G";
								   else 
									   echo "P";
							   
								   echo 100-$t+$i;
								   if($i!=$tickets)
										echo ",";
								
							  }	
							  ?></td>
					</tr>
				</table>
				<button  width=300 style="margin-left:650px ;margin-top:10px;">Print</button>
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