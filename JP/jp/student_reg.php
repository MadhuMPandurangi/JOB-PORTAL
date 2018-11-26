<?php 
 
include('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $name = $_POST["uname"]; 
 $passwd = $_POST["pwd"];
 $fname=$_POST["fname"];
 $lname = $_POST["lname"];
 $branch = $_POST["branch"];
 $company = $_POST["company"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $sem1 = $_POST["1sem"];
 $sem2 = $_POST["2sem"];
 $sem3 = $_POST["3sem"];
 $sem4 = $_POST["4sem"];
 $sem5 = $_POST["5sem"];
 $sem6 = $_POST["6sem"];
 $sem7 = $_POST["7sem"];
 $sem8 = $_POST["8sem"];
 $avg = $_POST["avg"];
 


 $sql = "INSERT INTO student 
VALUES ('$name', '$passwd', '$fname','$lname','$branch','$company','$email','$phone','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$avg')";

if ($db->query($sql) === TRUE) {
    header("location:/JP/jp/tpo.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


}
?>