<?php


include 'config.php';


session_start();
 





if (isset($_POST['submit'])) {
  

  $pain= $_POST['pain'];
  $amount= $_POST['amount'];
  
  $adate = mysqli_real_escape_string($conn, $_POST['adate']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO prescription (pain, amount,adate, message) VALUES ('$pain', '$amount', '$adate', '$message')";

  
   
         $insert = "INSERT INTO prescription (pain, amount,adate, message) VALUES ('$pain', '$amount', '$adate', '$message')";
         mysqli_query($conn, $insert);
         header('location:prescription.php');
      }
   
   
   

 




?>
<html>
<head>
	<title> Nairobi Hospital </title>
	
	<link href="css/nav.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	<div class="top">
      <div>
       Contact Us +254 202455677 / 01 | psr@hospital.com 
       <br>
       <i class="fa fa-user"></i>
          Hello, <?php echo $_SESSION['user_name']; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
       <a href="login_form.php">Logout</a>
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
      <p><u>ORDER A PRESCRIPTION</u></p>
      <select name="pain"><br>
      <option >--Painkillers--</option> <br>
      <option value="piriton"> piriton </option> <br>
      <option value="bruphen"> Bruphen </option> </select>
      <select name="amount"><br>
      <option >--Amount--</option> <br>
      <option value="1"> 1 </option> <br>
      <option value="2"> 2 </option>
       <option value="3"> 3 </option>
        <option value="4"> 4 </option> </select><br>
      
      <label name=date >Picking Date</label><br>
      <input type="date" name="adate" placeholder="appointment date"><br>
	    
	    <label name=date >Message</label><br>
	    <textarea placeholder="Message" name="message"> </textarea><br>
    
      
      <input type="submit" name="submit" value="Order" class="form-btn">
      
      
   </form>

</div>
				
				
		</div>
	</div>
</body>
</html>