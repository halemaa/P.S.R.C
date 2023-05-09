<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<html>
<head>
  <title> Nairobi Hospital </title>
  
  <link href="css/styleLR.css" type="text/css" rel="stylesheet">
  
</head>
<body>
  
 

  
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <?php 
          if ($row['user_id'] == 1) { 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$_SESSION['unique_id']}");
          } else { 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = 1");
          }
          if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
              echo '<a href="chat.php?user_id='.$row['unique_id'].'">
                      <div class="content">
                        <img src="php/images/'.$row['img'].'" alt="">
                        <div class="details">
                          <span>'.$row['fname']. " " . $row['lname'].'</span>
                          <p>'.$row['status'].'</p>
                        </div>
                      </div>
                    </a>';
            }
          } else {
            echo '<p class="no-users">No users available</p>';
          }
         ?>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
