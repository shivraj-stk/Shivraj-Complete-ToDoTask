<?php
include '../config/config_db.php';
//if details have a change it updates here 
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$update_id = $_POST['update_id'];

$sql = "UPDATE `user_tbl` SET `user_name` = '$user_name' ,`user_email` = '$email', `user_mobile` = '$mobile' WHERE `id` = '$update_id'";

if ($conn->query($sql) === TRUE) {
  echo "update record successfully";
  header("Location:myprofile.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>