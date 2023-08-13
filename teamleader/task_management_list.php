<?php include '../config/config_db.php'; ?>
<!-- This part of the code is creating task management list -->
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

/*#tm tr:hover {background-color: yellow;}*/

#tm th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFFFFF;
  color: #000000;
}
body{
    height: 100px;
    background: #79d1e8;
  }
h1{
  color: white;
}
</style>
</head>
<body>
<input type="hidden" value="task" name="" id="current_page">
 <?php include 'includes/tl_nav.php'; ?>


<h1 align="center">Task Management List <a href="task_management.php"><img src="img/add-512.png" height="40"></a></h1>


<table id="tm" align="center">
  <tr>
    <th>Sno</th>
    <th>Developer Name</th>
    <th>Project Title</th>
    <th>Leader Name</th>
    <th>Task Details</th>    
    <th>Assigned Date</th>
    <th>Status</th>
  </tr>
<?php
$sql = "SELECT * FROM tm_tbl";
$result = $conn->query($sql);


    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';

  
?>
<?php
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
    <td><?php echo $row["developer_name"]; ?></td>
    <td><?php echo $row["task_details"]; ?></td>
    <td><?php echo $row["assigned_date"]; ?></td>
    <td><?php if($row["status"]=="assigned")
    echo '<p style="color:blue;">assigned</p>';
  ?><?php if($row["status"]=="ongoing")
    echo '<p style="color:yellow;">ongoing</p>';
  ?><?php if($row["status"]=="Under Testing")
    echo '<p style="color:cyan;">under testing</p>';
  ?><?php if($row["status"]=="testing")
  echo '<p style="color:blue;">testing</p>';
?>
  <?php if($row["status"]=="completed")
    echo '<p style="color:green;">completed</p>';
  ?></td> 

  </tr>
  <?php
  $i++;
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>
<!-- <a href="logout.php"><input type="submit" class="btn btn-success" value="LOGOUT">   -->
</table>

</body>
</html>


