<?php

include '../config.php';


session_start();


if(!isset($_SESSION['admin_name'])){
   header('location:dashboard.php');
}

   $sql = "SELECT COUNT(*) AS tot_users FROM user_form";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $tot_users = $row['tot_users'];
  
   $sql = "SELECT COUNT(*) AS tot_users FROM user_form";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $tot_users = $row['tot_users'];



   $sql = "SELECT user_type, COUNT(*) AS num_users FROM user_form WHERE user_type IN ('admin', 'user') GROUP BY user_type";
   $result = mysqli_query($conn, $sql);
   if (!$result) {
      die('Error counting users: ' . mysqli_error($conn));
   }
   $num_users = array();
   while ($row = mysqli_fetch_assoc($result)) {
      $num_users[$row['user_type']] = $row['num_users'];
   }


   

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Nairobi H Admin page</title>

  
   <link href="../admin/dash2.css" type="text/css" rel="stylesheet">
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


   <div class="h1">
      <h1 >DASHBOARD</h1>
   </div>
   
   
      
      <div class="form-container">
         
         <form action="" method="post" action="reserve.php">
               <div class="box users">
         <h2><a href="users.php">Users</a></h2>
         
         <p><a href="users.php"></a><br><p><a href="users.php">Number of Total users: <?php echo $tot_users; ?></a></p>
      </div>
      <div class="box appointments">
         <h2><a href="reserve.php">Appointments</a></h2>
         <p>View and manage appointments</p>
      </div><br>

        
        
         </form>
         <form action="" method="post" action="reserve.php">
           <div class="box analytics">
            <h2><a href="users.php">Admins</a></h2>
            <p><a href="users.php"></a><br><p> <a href="users.php"> Number of registered Admins: <?php echo isset($num_users['admin']) ? $num_users['admin'] : 0; ?>   </a></p>
        </div>
        <div class="box settings">
            <h2><a href="medicine.php">ORDERS</a></h2>
            <p>Medicines Orders</p>
        </div>
              </form>
        


 


   <?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






?>