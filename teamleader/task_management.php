<!-- To create a interface for adding task management details -->
<?php
include '../config/config_db.php';
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
  <title>Task Management</title>
</head>
<body>
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Task Management</h3>
  <form action="save_reg_tm.php" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label>Developer Name</label>
      <select class="form-control" name="developer_name">
            <option>Select developer</option>
<?php
$sql = "SELECT * FROM user_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc())
   {
    ?>
            <option value="<?php echo $row["user_name"]; ?>"><?php echo $row["user_name"]; ?></option>

         <?php
  $i++;
  }
} else {
  echo "0 results";
}
//$conn->close();
  ?>
        </select>
      
    </div>
    <div class="col-md-4">  
      <label>Project title</label>
      <select class="form-control" name="project_title">
            <option>Select project</option>
<?php
$sql1 = "SELECT * FROM pm_tbl";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row1= $result1->fetch_assoc())
   {
    print_r($row1);
    ?>
            <option value="<?php echo $row1["project_name"]; ?>"><?php echo $row1["project_name"]; ?></option>

         <?php
  $i++;
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>
        </select>
      
    </div>
   </div><br>
  <div class="row">
    <div class="col-md-8">  
      <label>Task details</label>
      <textarea id="task-details" name="task_details"></textarea>
      <!-- <input type="textarea" class="form-control" name="employee_mobile"> -->
      
    </div>
   </div><br> 
  <div class="row">  
    <div class="col-md-4">  
      <label>Status</label>
      <select class="form-control" name="status">
            <option>Select Status</option>
            <option value="assigned">Assigned</option>
            <option value="ongoing">Ongoing</option>
            <option value="testing">Under Testing</option>
            <option value="completed">Completed</option>
      </select>

    </div>
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

select[name="status"] {
    padding: 5px;
}

option[value="assigned"] {
    background-color: blue;
    color: white;
}

option[value="ongoing"] {
    background-color: yellow;
}

option[value="testing"] {
    background-color: cyan;
}

option[value="completed"] {
    background-color: lime;
}
</style>  
