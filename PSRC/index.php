<?php
session_start();

?>


<html>
<head>

	<title> Nairobi Hospital </title>
	
	
	<link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body>
	
	<div class="top">
		<div>
		 Contact Us +254 202455677 / 01 | psr@hospital.com 
		 <br>

		 <?php if (isset($_SESSION['user_name'])) {

			// If the user is logged in, display their name
			echo "Hello, " . $_SESSION['user_name'];
			
			echo "<a href='logout.php'>Logout</a>";

		} else {
			// If the user is not logged in, display a message or redirect to the login page
			echo "<a href='login_form.php'>Login</a>";
		}
		?>

		
		 


		 
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> Post surgery </font><font color="#000"> recovery care</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="index.php">HOME</a> 
							<a href="prescription.php">PRESCRIPTION</a>  
							<a href="appointment.php">APPOINTMENT</a>
							<a href="surgery.php">SURGERY</a> 
							<a href="chatlogin.php">CHAT</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
<div class="middle">
	<div class="wrapper">
		<div style="background-image:url('1.jpg');"></div>
		<div style="background-image:url('2.jpg');"></div>
		<div style="background-image:url('3.jpg');"></div>
		<div style="background-image:url('4.jpg');"></div>
		
		<p>
			<br> <br>
					Post Surgery Recovery Services  <br>
			<font size="5px"> We Care About Your Health </font>
		</p> 
		</div>
	</div>

	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000"> We are post surgery recovery care center! </font> <br> <br>
						<font color="#000"> We care about you! </font> <br> <br>

 </td>
					
		
				</tr>
			
				
			</table>
		</div>
	</div>
	
	
</body>
</html>