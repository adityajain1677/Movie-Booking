<?php
	session_start();
	if(!$_SESSION['uname']){
		
		header('location: login.php?error=You are not LOGGED in');
	
	}

?>
<html>
	<head>
		<title>CONFIRMATION</title>
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
				<p align="center">The information provided by you-</p><br>				
				<?php
					
					$conn=mysqli_connect("localhost","root","");
					mysqli_select_db($conn,"se_project");
					if(isset($_GET['submit'])){
						
						$name = $_GET['name'];
						$movie_name = $_GET['movie'];
						//echo $movie_name;
						$email = $_GET['email'];
						$mobile = $_GET['mobile_no'];
						$tickets = $_GET['tickets'];
						$show = $_GET['show_no'];
						$ticket_price = $_GET['ticket_price'];
						$amount = $tickets*$ticket_price;
						
						$find ='@';
						$find1 = '.';
						$pos = strpos($email,$find);
						$pos1 = strpos($email,$find1);
						if(empty($name) || empty($email) || empty($mobile) || empty($tickets) || empty($show))
						{
							echo "<script>
								  alert('Please fill all the details.');
								  window.open('booking_panel.php?movie=$movie_name','_self');
								  </script>";
						}
						else if(strlen($mobile)!=10)
						{
							echo "<script>
								  alert('Mobile no  should be of 10 digits.');
								  window.open('booking_panel.php?movie=$movie_name','_self');
								  </script>";
						}
						else if($pos === false || $pos1 === false)
						{
							echo "<script>
							alert('Invalid Email-id. Please Re-Enter.');
							window.open('booking_panel.php?movie=$movie_name','_self');
							</script>";
							
						}
						else						
						{		
						$q = "select `m_tickets` from `movies` where `m_name`='$movie_name' AND `m_show`='$show'";
						$run = mysqli_query($conn,$q);
						//echo "select `m_tickets` from `movies` where `m_name`='$movie_name' AND m_show='$show'";
						
						while($row=mysqli_fetch_array($run,MYSQLI_NUM)){
							
							$t = $row[0];	
							
						}
						//echo $t;
						$tickets_left = $t - $tickets;	
						//echo $tickets_left;
						$qu = "insert into ticket_booking(b_name,b_m_name,b_show,b_tickets,mobile_no,email_id) values('$name','$movie_name','$show','$tickets','$mobile','$email')";
						//echo $qu;
						$que1 = "update movies set m_tickets='$tickets_left' where `m_name`='$movie_name' AND `m_show`='$show'";
						mysqli_query($conn,$qu);
						mysqli_query($conn,$que1);
						}
						
					}
				
				?>
				<table align="center" width="400" height="200" border="4">
					<tr>
						<td align="center">Name:</td>
						<td align="center"><?php echo $name; ?></td>
					</tr>
					<tr>
						<td align="center">Email:</td>
						<td align="center"><?php echo $email; ?></td>
					</tr>
					<tr>
						<td align="center">Mobile No.:</td>
						<td align="center"><?php echo $mobile; ?></td>
					</tr>
					<tr>
						<td align="center">No. of Tickets:</td>
						<td align="center"><?php echo $tickets; ?></td>
					</tr>
					<!--<tr>
						<td align="center">Show No.:</td>
						<td align="center"><?php echo $show; ?></td>
					</tr>-->
					<tr>	
						<td align="center">Amount Payable:</td>
						<td align="center"><?php echo $amount; ?></td>
					</tr>
					<tr>	
						<td align="center"><a style="color:BLACK; text-decoration:none;" href="Payment.php?booking_name=<?php echo $name;?>&tickets=<?php echo $tickets;?>&amount=<?php echo $amount;?>&price=<?php echo $ticket_price;?>&tp=<?php echo $t;?>">Make Payment</td><td align="center"><a style="color:BLACK; text-decoration:none;" class="href" href="movies.php">Cancel</a></td>
					</tr>
				</table>
				
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