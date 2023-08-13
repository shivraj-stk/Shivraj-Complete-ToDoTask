<?php
include '../config/config_db.php';
//This helps to save the announcement data team leader have given
$project_title = $_POST['project_title'];
$task_details = $_POST['task_details'];
$assigned_date = $_POST['assigned_date'];
$update_id = $_POST['update_id'];
$sql = "UPDATE `announce_tbl` SET `project_title` = '$project_title',`task_details`='$task_details',`assigned_date`='$assigned_date' WHERE `id` = '$update_id'";

if ($conn->query($sql) === TRUE) {
  echo "update record successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:announcement_list.php');

$conn->close();
?>