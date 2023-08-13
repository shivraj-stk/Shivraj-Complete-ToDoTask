<?php
// To delete the entries of each developer details 
include '../config/config_db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `user_tbl` WHERE `id` = '$id';";

if ($conn->query($sql) === TRUE) {
  echo "deleted success";
  header('location:register_list.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>