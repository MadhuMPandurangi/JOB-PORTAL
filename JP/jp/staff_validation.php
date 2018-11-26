
<?php 
 
 include('config.php');
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 { 
  $name = $_POST["uname"]; 
  $passwd = $_POST["pwd"];
  $db1=mysqli_query($db,"SELECT uid, pwd FROM staff_login WHERE uid = '".$name."' AND  pwd = '".$passwd."'");

  if(mysqli_num_rows($db1) > 0 )
         { 
             $_SESSION["logged_in"] = true; 
             $_SESSION["naam"] = $name; 
             header("location:/JP/jp/staff.php");
         }
         else
         {
             echo 'The username or password are incorrect!';
         }
 }
 ?>