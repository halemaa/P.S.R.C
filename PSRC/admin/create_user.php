<?php

include '../config.php';


session_start();


if(!isset($_SESSION['admin_name'])){
   header('location:dashboard.php');
}

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

  
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:create_user.php');
      }
   }

;


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Nairobi Hospital </title>

  
   <link href="../css/nav.css" type="text/css" rel="stylesheet">

</head>
<body>

 
   
   
   
</head>
<body>
   
    <div class="top">
      <div>
       Contact Us +254 202455677 / 01 | psr@hospital.com 
       <br>
       <i class="fa fa-user"></i>
          Hello, <?php echo $_SESSION['admin_name']; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
       <a href="../login_form.php">Logout</a>
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
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="create_user.php">Create User</a></li>
    <li><a href="medicine.php">Orders</a></li>
    <li><a href="users.php">Users</a></li>
    <li><a href="surgeryf.php">Surgery feedback</a></li>
    <li><a href="reserve.php">Appointments</a></li>
    <li><a href="../chatlogin.php">Chat</a></li>

  </ul>
</nav>

     
   <div class="form-container">
      <form action="" method="post" name="for1">
         <h3>Register User</h3>
         
      </form>

      <form action="" method="POST" >
          
          <input type="text" name="name" required placeholder="enter their name">

   
          <input type="email" name="email" required placeholder="enter E-mail Address">

          
          <input type="password" name="password" required placeholder="Assign a Password">

          <label>User Type:</label>
          <select name="user_type"required placeholder="Choose UserType">
          <option value="user">User</option>
          <option value="admin">Admin</option>
          </select><br><br>

          <input type="submit" name="submit" value="create user" class="form-btn">
          </form>
      
          
      





   </div>
      
      
   


   <?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






?>