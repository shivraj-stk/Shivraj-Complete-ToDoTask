<?php include '../config/config_db.php'; ?>
<?php
//developer can change their status here, this page works for that
$id = $_GET['id'];
//echo $id;
$query = "SELECT * from tm_tbl WHERE id='$id'";
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
  <title>Annocement</title>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">ToDo</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="dev_dashboard.php">Dashboard</a></li>
      <li class="active"><a href="mytask.php">My task</a></li>
      <li><a href="">Announcement</a></li>
      <li><a href="">My profile</a></li>
    </ul>
  </div>
</nav>
<div class="container shivraj">
  <h3>My task edit</h3>
  <form action="mytask_update_save.php" method="POST">
  <div class="row">
    <div class="col-md-4">  
      <label>Leader name</label>
      <input type="text" class="form-control" readonly name="developer_name" value="<?php echo $row[1]; ?>">
      
    </div>
   </div><br>
   <input type="hidden" value="<?php echo $_GET['id'] ?>" name="update_id">
  <div class="row">
    <div class="col-md-8">  
      <label>Project title</label>
      <input type="text" class="form-control" readonly name="project_title" value="<?php echo $row[2]; ?>">
      <!-- <input type="textarea" class="form-control" name="employee_mobile"> -->
      
    </div>
   </div><br> 
  <div class="row"> 
    <div class="col-md-4">  
      <label>Task details</label>
      <input type="text" class="form-control" readonly name="task_details" value="<?php echo $row[3]; ?>">
      
    </div>
    <div class="col-md-4">  
      <label>Status</label>
      <select class="form-control" name="status" value="<?php echo $row[4]; ?>">
            <option>Select Status</option>
            <option>assigned</option>
            <option>Ongoing</option>
            <option>Under Testing</option>
            <option>Completed</option>
      </select>
      
    </div>
   </div><br>
  <br>
<div class="row">
   <div class="col-md-4">
    <input type="submit" class="btn btn-success" value="Save" name="">
   </div>
</div>
<a href="mytask.php">list</a> 
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
    background: #066acd;
  }
  textarea {
  width: 100%;
  height: 150px;
  font-family: Comic Sans MS;
  font-size: 14px;
  color: #333;
}
</style>  
