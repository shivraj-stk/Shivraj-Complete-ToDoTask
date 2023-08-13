<?php include '../config/config_db.php'; ?>
<?php 
session_start();
$id = $_SESSION["id"];
$developer_name = $_SESSION["d_user_username"];
// echo $developer_name;
$sql1 = "SELECT * FROM tm_tbl WHERE `developer_name`='$developer_name'";
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
  <input type="hidden" value="dashboard" id="current_page" name="">
<?php include 'includes/dev_nav.php'; ?>

<div class="container shivraj">
  <h3>Developer Dashboard</h3>
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
/* Styles for interface */
  .shivraj {
    font-family: Comic Sans MS;
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
    background: #8ce67e;
  }
</style>