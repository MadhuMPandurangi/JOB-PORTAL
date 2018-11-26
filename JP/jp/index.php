<head>
  <link rel="stylesheet" media="screen" href="css/style.css"/>
  <link rel="stylesheet" media="screen" href="css/style1.css"/>
  
</head>



<body>


<!-- particles.js container -->
<div id="particles-js">
  <img class="image1" src="images/jobportal.png" />
  <button class="button" onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:500;left:100"><span>Student</span></button>
  <button onclick="document.getElementById('id02').style.display='block'" class="button" style="position:absolute;top:500;left:625"><span>TPO</span></button>
  <button onclick="document.getElementById('id03').style.display='block'" class="button" style="position:absolute;top:500;left:1125"><span>Staff</span></button>
</div>



<!-- Student login code-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/JP/jp/student_validation.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/jobportal.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<!-- TPO login code-->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/JP/jp/tpo.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/jobportal.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        

      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



<!-- Staff login code-->
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/JP/jp/staff_validation.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/jobportal.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>




</body>


<!-- scripts -->
<script src="../particles.js"></script>
 <script src="js/app.js"></script>
 <script src="js/btn.js"></script>
