<?php include '../config/config_db.php'; ?>
<?php
// This part of code works when edit button is clicked in list page 
$id = $_GET['id'];
echo $id;
$query = "SELECT * from announce_tbl WHERE id='$id'";
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
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Announcement edit</h3>
  <form action="announce_update_save.php" method="POST">
  <div class="row">
    <div class="col-md-4">  
      <label>Announcement title</label>
      <input type="text" class="form-control" name="project_title" value="<?php echo $row[1]; ?>">
      
    </div>
   </div><br>
   <input type="hidden" value="<?php echo $_GET['id'] ?>" name="update_id">
  <div class="row">
    <div class="col-md-8">  
      <label>Announcement detail</label>
      <textarea id="task-details" name="task_details" value=""><?php echo $row[2]; ?></textarea>
      <!-- <input type="textarea" class="form-control" name="employee_mobile"> -->
      
    </div>
   </div><br> 
  <div class="row"> 
    <div class="col-md-4">  
      <label>Assigned date</label>
      <input type="date" class="form-control" name="assigned_date" value="<?php echo $row[3]; ?>">
      
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
