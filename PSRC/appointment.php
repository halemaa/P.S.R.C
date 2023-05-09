<?php

include 'config.php';


session_start();
if (isset($_POST['submit'])) {
  
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $adate = mysqli_real_escape_string($conn, $_POST['adate']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);


  $adate = $_POST['adate']; 
  $sql = "SELECT * FROM appointments WHERE adate = '$adate'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
   
    echo "Date already Booked";
  } else {
    
   $sql = "INSERT INTO appointments (fname, lname, email, phone, gender, adate, message) VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$adate', '$message')";
        mysqli_query($conn, $insert);
         header('location:index.php');

    if (mysqli_query($conn, $sql)) {
      echo "Date stored successfully.";
    } else {
      echo "Error storing date: " . mysqli_error($conn);
    }
  }






  
   

 }




?>
<html>
<head>
	<title> Nairobi Hospital </title>
	
	<link href="css/styleLR.css" type="text/css" rel="stylesheet">
	<link href="css/nav.css" type="text/css" rel="stylesheet">
</head>
<body>
	
	<div class="top">
		<div>
			Contact Us +254 202455677 / 01 | psr@hospital.com 
			<br><?php if (isset($_SESSION['user_name'])) {

			
			echo "Hello, " . $_SESSION['user_name'];
			echo "<a href='logout.php'>Logout</a>";

		} else {
			
			echo "<a href='login_form.php'>Login</a>";
		}
		?>
		</div>
	</div>
	
	<nav class="navbar">
  <div class="logo">
    <a href="#" class="logo-text">
      <span class="logo-part-1">Post Surgery</span>
      <span class="logo-part-2">Recovery Care</span>
    </a>
  </div>
  <ul class="nav-links">
    <li><a href="index.php">HOME</a> </li>
    <li><a href="prescription.php">PRESCRIPTION</a> </li>
    <li><a href="appointment.php">APPOINTMENT</a></li>
    <li><a href="surgery.php">SURGERY</a> </li>
    <li><a href="chatlogin.php">CHAT</a></li>
      

  </ul>
</nav>
		</div>
	</div>
  
	
	 
	
	
	
	
		<div class="form-container">
			
	 <form action="" method="post">
      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p><u>Make an Appointment</u></p>
     
      <input type="text" name="fname" placeholder="First Name"><br>
	 <input type="text"  name="lname"placeholder="Last Name"><br>
      <input type="email" name="email" required placeholder="enter your email"><br>
      <input type="text"name="phone" placeholder="Mobile No"><br>
      <select name="gender"><br>
      <option> -- Sex -- </option> <br>
      <option value="male"> Male </option> <br>
      <option value="female"> Female </option> </select><br>
      <label name=date >Date</label><br>
	 <input type="date" name="adate" placeholder="appointment date"><br>
	 <label name=date >Message</label><br>
	 <textarea placeholder="Message" name="message"> </textarea><br>
      <?php
      ?>

      
      <input type="submit" name="submit" value="book" class="form-btn">
      
      
   </form>

</div>
				
				
		</div>
	</div>
</body>
</html>
	
	

 