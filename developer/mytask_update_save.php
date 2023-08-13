<?php
include '../config/config_db.php';
//After updating the data in my task this updates data to the database
$developer_name	 = $_POST['developer_name'];
$project_title = $_POST['project_title'];
$task_details = $_POST['task_details'];
$status= $_POST['status'];


$update_id = $_POST['update_id'];

$sql = "UPDATE `tm_tbl` SET `developer_name` = '$developer_name' ,`project_title` = '$project_title', `task_details` = '$task_details',`status` = '$status' WHERE `id` = '$update_id'";

if ($conn->query($sql) === TRUE) {
  echo "update record successfully";
  header("Location:mytask.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>