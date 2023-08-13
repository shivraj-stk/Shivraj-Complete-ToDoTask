<?php
include '../config/config_db.php';
//To store the developer edited data in database
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_mobile = $_POST['user_mobile'];
$user_username = $_POST['user_username']; 
$update_id = $_POST['update_id'];
$sql = "UPDATE `user_tbl` SET `user_name` = '$user_name',`user_email`='$user_email',`user_mobile`='$user_mobile',`user_username`='$user_username' WHERE `id` = '$update_id'";

if ($conn->query($sql) === TRUE) {
  echo "update record successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:register_list.php');

$conn->close();
?>