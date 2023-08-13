<?php
include '../config/config_db.php';
?>
<!-- //This part of the code helps the team leader to add the announcements  -->
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
  <title>Announcement</title>
</head>
<body>
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Announcement</h3>
  <form action="save_reg_annocement.php" method="POST">
  <div class="row">
    <div class="col-md-4">  
      <label>Announcement title</label>
      <input type="text" class="form-control" name="project_title">
      
    </div>
   </div><br>
  <div class="row">
    <div class="col-md-8">  
      <label>Announcement detail</label>
      <textarea id="task-details" name="task_details"></textarea>
      <!-- <input type="textarea" class="form-control" name="employee_mobile"> -->
      
    </div>
   </div><br> 
  <div class="row"> 
    <div class="col-md-4">  
      <label>Assigned date</label>
      <input type="date" class="form-control" name="assigned_date">
      
    </div>
   </div><br>
  <br>
<div class="row">
   <div class="col-md-4">
    <input type="submit" class="btn btn-success" value="Save" name="">
   </div>
</div>
<a href="announcement_list.php">list</a> 
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
  textarea {
  width: 100%;
  height: 150px;
  font-family: Comic Sans MS;
  font-size: 14px;
  color: #333;
}
</style>  
