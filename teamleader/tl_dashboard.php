<?php include '../config/config_db.php'; ?>
<?php 
$sql = "SELECT * FROM user_tbl";
$sql1 = "SELECT * FROM pm_tbl";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
$result1 = $conn->query($sql1);
$rowcount1=mysqli_num_rows($result1);
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
  <script src="script.js"></script>
  <title>Home</title>
</head>
<body>
  <input type="hidden" value="dashboard" name="" id="current_page">
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Dashboard</h3>
  <div class="developer-container">
    <div class="developer-box">
      <!-- To display the total number of developer -->
      <h1>TOTAL Developer: <?php echo $rowcount; ?></h1>
    </div>
  </div>
  <div class="project-container">
    <div class="project-box">
      <!-- To display the total number of projects -->
      <h1>TOTAL Projects: <?php echo $rowcount1; ?></h1>
    </div>
  </div>
</div>   
</body>
</html>
<style type="text/css">
  .shivraj {
    font-family: Comic Sans MS;
    color: white;
  }

  .developer-container {
    float: left;
    margin-right: 20px;
  }

  .developer-box {
    background-color: cyan;
    padding: 10px;
    font-size: 24px;
    color: white;
  }

  .project-container {
    float: left;
    margin-left: 20px;
  }

  .project-box {
    background-color: red;
    padding: 10px;
    font-size: 24px;
    color: white;
  }

  body {
    height: 100px;
    background: #79d1e8;
  }
</style>