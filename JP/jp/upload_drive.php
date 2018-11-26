<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="screen" href="css/style.css"/>
  <link rel="stylesheet" media="screen" href="css/style1.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    .button {  
    border-radius: 20px;
    background-color: #FF3333;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 15px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  .button span:after {
    content: 'Student';
    position: absolute;
    opacity: 0;
    bottom:-20px;
    right:10px;
    left:10px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }

   .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>TPO PAGE</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="/JP/jp/tpo.php">Home</a></li>
        <li class="active"><a href="/JP/jp/upload_drive.php">Upload Drive Details</a></li>
        <li><a href="/JP/jp/student_not_placed.php">Students not Placed</a></li>
        <button onclick="document.getElementById('id04').style.display='block'" class="button" ><span>Register New</span></button>
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
    <div class="container">
  <h2>UPLOAD DRIVE DETAILS</h2>
  <form class="form-horizontal" action="/JP/jp/drive_action.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="company">Company Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="desig">Designation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="desig" placeholder="Enter Designation" name="desig">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="package">Package:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="package" placeholder="Enter package" name="package">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cgpa">Minimum CGPA/Percentage:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cgpa" placeholder="Enter CGPA/Percentage" name="cgpa">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="disc">Discription:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="disc" placeholder="Enter Discription" name="disc">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" style="background-color:#FF3333"><span style="color:#fff">Submit</span></button>
      </div>
    </div>
  </form>
</div>
    </div>
  </div>
</div>

<!-- student registration code -->
<div id="id04" class="modal">
  
  <form class="modal-content animate" action="/JP/jp/student_reg.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/jobportal.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="First name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="branch"><b>Branch</b></label>
      <input type="text" placeholder="Enter Branch" name="branch" required>

      <label for="company"><b>Company</b></label>
      <input type="text" placeholder="Enter Company"  name="company" required >

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="Enter Phone" name="phone" required>

      <label for=""><b>I SEM MARKS</b></label>
      <input type="text" placeholder="Enter I SEM MARKS" name="1sem" required>

      <label for=""><b>II SEM MARKS</b></label>
      <input type="text" placeholder="Enter II SEM MARKS" name="2sem" required>

      <label for=""><b>III SEM MARKS</b></label>
      <input type="text" placeholder="Enter III SEM MARKS" name="3sem" required>

      <label for=""><b>IV SEM MARKS</b></label>
      <input type="text" placeholder="Enter IV SEM MARKS" name="4sem" required>

      <label for=""><b>V SEM MARKS</b></label>
      <input type="text" placeholder="Enter V SEM MARKS" name="5sem" required>

      <label for=""><b>VI SEM MARKS</b></label>
      <input type="text" placeholder="Enter VI SEM MARKS" name="6sem" required>

      <label for=""><b>VII SEM MARKS</b></label>
      <input type="text" placeholder="Enter VII SEM MARKS" name="7sem" required>

      <label for=""><b>VIII SEM MARKS</b></label>
      <input type="text" placeholder="Enter VIII SEM MARKS" name="8sem" required>

      <label for=""><b>AVERAGE MARKS</b></label>
      <input type="text" placeholder="Enter AVERAGE MARKS" name="avg" required>
        
      <button type="submit">Register</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
