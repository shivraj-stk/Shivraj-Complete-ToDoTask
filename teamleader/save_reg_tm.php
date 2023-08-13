<?php
include '../config/config_db.php';
//To store the task management data in database
$developer_name = $_POST['developer_name'];
$project_title = $_POST['project_title'];
$task_details = $_POST['task_details'];
$status = $_POST['status'];
$assigned_date = $_POST['assigned_date'];

$sql = "INSERT INTO tm_tbl(developer_name,project_title,task_details,status,assigned_date)
VALUES ('$developer_name', '$project_title', '$task_details','$status','$assigned_date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:task_management.php?res='.$res);
$conn->close();
?>