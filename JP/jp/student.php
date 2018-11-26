<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
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
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Welcome For Placements</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
    <p><span class="badge">2</span> Comments:</p><br>
      <hr>
      <?php 
      include('config.php');
      $query=mysqli_query($db,"SELECT * FROM drive order by posted_date desc ");
      while($row = mysqli_fetch_array($query)){
      ?>    
      <h2><?php echo $row['company_name'];?></h2>
      <h5><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $row['posted_date'];?></h5>
      <h5><span class="label label-danger"><?php echo $row['package'];?></span> <span class="label label-primary"><?php echo $row['desig'];?></span> <span class="label label-danger"><?php echo $row['cgpa'];?></span></h5><br>
      <p><?php echo$row['disc']?>;</p>
      <button type="submit" class="btn btn-success">Apply</button><br><br><br>
      <?php
      }
      ?>
      
      <br><br>
      <h4>Leave a Comment:</h4>
      <form >
        <div class="form-group" >
          <label>Comment Here:</label> <input class="form-control"  required><br>
          <label>Enter Your USN: <input class="form-control"  required></label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      
      
     
    </div>
  </div>
</div>



</body>
</html>
