<?php
include '../config/config_db.php';
//To store the project management edited data in database
$project_name = $_POST['project_name'];
$technologies = $_POST['technologies'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$deadline = $_POST['deadline'];
$update_id = $_POST['update_id'];
$sql = "UPDATE `pm_tbl` SET `project_name` = '$project_name',`technologies`='$technologies',`start_date`='$start_date',`end_date`='$end_date',`deadline`='$deadline' WHERE `id` = '$update_id'";

if ($conn->query($sql) === TRUE) {
  echo "update record successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:project_management_list.php');

$conn->close();
?>