<?php include '../config/config_db.php'; ?>
<?php
//get the pm_tbl data to edit the entries of project details  
$id = $_GET['id'];
echo $id;
$query = "SELECT * from pm_tbl WHERE id='$id'";
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
  <title>Project Management</title>
</head>
<body>
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Project Management Edit</h3>
  <form action="pm_update_save.php" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label>Project Name</label>
      <input type="text" class="form-control" name="project_name"  value="<?php echo $row[1]; ?>">
      
    </div>
    <div class="col-md-4">  
      <label>Technologies</label>
      <input type="text" class="form-control" name="technologies" value="<?php echo $row[2]; ?>">
      
    </div>
   </div><br>
  <div class="row">
    <div class="col-md-4">  
      <label>Start date</label>
      <input type="date" class="form-control" name="start_date" value="<?php echo $row[3]; ?>">
      
    </div>
    <div class="col-md-4">  
      <label>End date</label>
      <input type="date" class="form-control" name="end_date" value="<?php echo $row[4]; ?>">
      
    </div>
   </div><br>
   <input type="hidden" value="<?php echo $_GET['id'] ?>" name="update_id"> 
  <div class="row">  
    <div class="col-md-4">  
      <label>Deadline</label>
      <input type="date" class="form-control" name="deadline" value="<?php echo $row[5]; ?>">

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
  textarea {
  width: 100%;
  height: 150px;
  font-family: Comic Sans MS;
  font-size: 14px;
  color: #333;
}
</style>  
