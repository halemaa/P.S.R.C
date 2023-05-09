
<?php


include 'config.php';


session_start();
 





if (isset($_POST['submit'])) {
 

  $surtype= $_POST['surtype'];
  $caregiver= $_POST['caregiver'];
  
  $adate = mysqli_real_escape_string($conn, $_POST['adate']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO surgery (surtype, caregiver,adate, message) VALUES ('$surtype', '$caregiver','$adate', '$message')";

  
   
         $insert = "INSERT INTO surgery (surtype, caregiver,adate, message) VALUES ('$surtype', '$caregiver','$adate', '$message')";
         mysqli_query($conn, $insert);
         header('location:surgery.php');
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
	
	 
	
	
	
	
		<div class="form-container">
			
	 <form action="" method="post">
      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p><u>SURGERY FEEDBACK</u></p>
      <select name="surtype"><br>
      <option >--Type  of surgery--</option> <br>
      <option value="APPENDECTOMY"> APPENDECTOMY </option> <br>
      <option value="BREAST SURGERY"> BREAST SURGERY </option> 
      <option value="COLON SURGERY"> COLON SURGERY </option> 
      <option value="GALLBLADDER SURGERY"> GALLBLADDER SURGERY</option>
      <option value="GERD SURGERY"> GERD SURGERY</option>
      <option value="ENDOCRINE SURGERY"> ENDOCRINE SURGERY </option>
      <option value="ESOPHAGEAL SURGERY"> ESOPHAGEAL SURGERY </option>
      <option value="EXPLORATORY LAPAROTOMY"> EXPLORATORY LAPAROTOMY </option>
      <option value="HERNIA SURGERY"> HERNIA SURGERY </option>
      <option value="LAPAROSCOPIC SURGERY"> LAPAROSCOPIC SURGERY </option>
      <option value="LIPOMA"> LIPOMA </option>
      <option value="LIVER SURGERY"> LIVER SURGERY </option>
      <option value="PANCREAS SURGER"> PANCREAS SURGER</option>
      <option value="PLASTIC SURGERY"> DIGESTIVE TRACT </option>
      <option value="VASCULAR SURGERY"> VASCULAR SURGERY </option>
     </select>
      <select name="caregiver"><br>
      <option >--Would you like a caregiver to be assigned to you--</option> <br>
      <option value="Yes"> Yes </option> <br>
      <option value="No"> No </option> <br>
      </select>
  
      
      <label name=date > Surgery Date</label><br>
      <input type="date" name="adate" placeholder="appointment date"><br>
	    
	    <label name=date > Type Message </label><br>
	    <textarea placeholder="Message" name="message"> </textarea><br>
    
      
      <input type="submit" name="submit" value="SUBMIT  FEEDBACK" class="form-btn">
      
      
   </form>

</div>
				
				
		</div>
	</div>
</body>
</html>
 