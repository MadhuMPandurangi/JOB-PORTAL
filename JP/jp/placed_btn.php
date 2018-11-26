<?php 
 
include('config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $usn = $_POST["usn"]; 
 $company = $_POST["company"]; 
 
 
 $sql = "update student set company='$company' where usn='$usn' ";

if ($db->query($sql) === TRUE) {
    header("location:/JP/jp/student_not_placed.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


}
?>