<?php

include '../config.php';

if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete'];
    $sql = "DELETE FROM user_form WHERE id='$delete_id'";
    if (mysqli_query($conn, $sql)) {
        
        echo "User with ID $delete_id has been deleted.";
        header('Refresh: 2');
    } else {
        
        echo "Error deleting user with ID $delete_id: " . mysqli_error($conn);
    }
}

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:admin_page.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link href="../css/nav.css" type="text/css" rel="stylesheet">
   <link rel="stylesheet" href="print.css" media="print">

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

   <h1><button  class="print" type="button" onclick="window.print('.form-container')">Print Users</button><h1>
   <div class="container">

      <div class="content">
         <div class="form-container" style="border: 1px solid black;">
           <form class="doctor"><h1>Doctor<br> <span><?php echo $_SESSION['admin_name'] ?></span></h1><br></form>
          <form action="users.php" method="post">
    <h3>Registered Users</h3>
    <table>
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT id, name, email, user_type FROM user_form";
            $result = mysqli_query($conn, $sql);

            
            if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                           
                            <td>".$row["name"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["user_type"]."</td>
                            <td>
                                <button name='delete' type='submit' value='".$row["id"]."' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</button>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            mysqli_close($conn);
        ?>
    </table>
</form>


               

            </form>
         </div>

      </div>
   </div>

   <script>
  function printUsers() {
    
    var table = document.querySelector('table');
    var newWindow = window.open('', '_blank');
    newWindow.document.write('<html><head><title>Users</title>');
    newWindow.document.write('<link rel="stylesheet" href="../css/print.css" type="text/css">');
    newWindow.document.write('</head><body>');
    newWindow.document.write(table.outerHTML);
    newWindow.document.write('</body></html>');
    newWindow.document.close();

    
    newWindow.print();
  }
</script>

</body>
</html>




<?php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






?>