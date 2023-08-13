<?php include '../config/config_db.php'; ?>
<?php
//details are reflected in my task after team leader assigned the task, this page helps to get the data from team leader's task management
  session_start();
  $id = $_SESSION["id"];
  $developer_name = $_SESSION["d_user_username"];
// echo $developer_name;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="script.js"></script>

<style>
#tm {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 10%;
}

#tm td, #tm th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tm tr
{
  background-color: white;
}

#tm th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFFFFF;
  color: #000000;
}
body{
    height: 100px;
    background: #8ce67e;
  }
h1{
  color: white;
}
</style>
</head>
<body>
  <input type="hidden" value="task" id="current_page" name="">
 <?php include 'includes/dev_nav.php'; ?>
<h1 align="center">My Task List </h1>


<table id="tm" align="center">
  <tr>
    <th>Sno</th>
    <th>Leader Name</th>
    <th>Project Title</th>
    <th>Task details</th>   
    <th>Status</th>
    <th>Action</th>
  </tr>
<?php
$sql = "SELECT * FROM tm_tbl WHERE `developer_name`= '$developer_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc())
   {
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["developer_name"]; ?></td>
    <td><?php echo $row["project_title"]; ?></td>
    <td><?php echo $row["task_details"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
    <td><a href="mytask_edit.php?id=<?php echo $row["id"]; ?>"><img src="editicon.png" height="40"></a>
  </tr>
  <?php
  $i++;
  }
}
else {
  echo "You are not assigned for any task";
}
$conn->close();
  ?>
<!-- <a href="logout.php"><input type="submit" class="btn btn-success" value="LOGOUT">   -->
</table>

</body>
</html>