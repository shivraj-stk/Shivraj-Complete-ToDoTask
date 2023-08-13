<?php
// To delete project management data
include '../config/config_db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `pm_tbl` WHERE `id` = '$id';";

if ($conn->query($sql) === TRUE) {
  echo "deleted success";
  header('location:project_management_list.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>