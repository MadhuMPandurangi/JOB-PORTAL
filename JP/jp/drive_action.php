
<?php 
 
 include('config.php');
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 { 
  $company = $_POST["company"]; 
  $package = $_POST["package"];
  $cgpa= $_POST["cgpa"];
  $disc = $_POST["disc"];
  $desig= $_POST["desig"];
 
  $sql = "INSERT INTO drive(company_name,package,cgpa,disc,desig)
  VALUES ('$company', '$package', '$cgpa','$disc','$desig')";
  
  if ($db->query($sql) === TRUE) {
      header("location:/JP/jp/upload_drive.php");
  } else {
      echo "Error: " . $sql . "<br>" . $db->error;
  }
 }
 ?>