<?php
// delete button is exeucuted 
include '../config/config_db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `announce_tbl` WHERE `id` = '$id';";

if ($conn->query($sql) === TRUE) {
  echo "deleted success";
  header('location:announcement_list.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>