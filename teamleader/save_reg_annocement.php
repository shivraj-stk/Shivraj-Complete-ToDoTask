<?php
include '../config/config_db.php';
//To store the announcement data in database
$project_title = $_POST['project_title'];
$task_details = $_POST['task_details'];
$assigned_date = $_POST['assigned_date'];

$sql = "INSERT INTO announce_tbl(project_title,task_details,assigned_date)
VALUES ('$project_title', '$task_details','$assigned_date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:announcement.php?res='.$res);
$conn->close();
?>