<?php include '../config/config_db.php'; ?>
<?php
$id = $_GET['id'];
//get the user_tbl data to edit the entries of developer 
$query = "SELECT * from user_tbl WHERE id='$id'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_row($result);
// print "<pre>";
// print_r($row);
// print "<pre>";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>USER REGISTER PAGE</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">ToDo</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="tl_dashboard.php">Dashboard</a></li>
      <li><a href="register_list.php">Members Management</a></li>
      <li><a href="project_management.php">Project Management</a></li>
      <li><a href="task_management.php">Task Management</a></li>
      <li><a href="">Announcement</a></li>
    </ul>
  </div>
</nav>

<div class="container shivraj">

  <h3>Register Account</h3>
  
  <!-- <h3 style="color: green;">New record inserted</h3> -->
  
  
  <form action="register_update_save.php" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label>User Name</label>
      <input type="text" class="form-control" name="user_name"  value="<?php echo $row[1]; ?>">
      
    </div>
     <div class="col-md-4">
      <label>User Email</label>
      <input type="Email" class="form-control" name="user_email"  value="<?php echo $row[2]; ?>">
      
    </div>
  </div><br>
  <input type="hidden" value="<?php echo $_GET['id'] ?>" name="update_id">
  <div class="row">
    <div class="col-md-4">
      <label>User Mobile</label>
      <input type="number" class="form-control" name="user_mobile"  value="<?php echo $row[3]; ?>">
      
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
      <label>Username</label>
      <input type="text" class="form-control" id="user_username" name="user_username"  value="<?php echo $row[4]; ?>">
      
    </div>
  </div><br>
  <br>
<div class="row">
   <div class="col-md-8">
    <input type="submit" class="btn btn-success" value="Save" name="">
   </div>   
</div>
</form>
</footer>
</body>
</html>
<style type="text/css">
  .shivraj
  {
    padding-left: 360px;
    font-family: Comic Sans MS;
    color: white;
  }
  .footer_content
  {
    padding-left: 380px;
    font-family: Comic Sans MS;
    color: white;
  }
  .connect
  {
    font-family: Comic Sans MS;
    color: white;
  }
  body{
    height: 100px;
    background: #79d1e8;
  }
</style>
