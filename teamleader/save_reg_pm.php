<?php
include '../config/config_db.php';
//To store the project management data in database
$project_name = $_POST['project_name'];
$technologies = $_POST['technologies'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$deadline = $_POST['deadline'];

$sql = "INSERT INTO pm_tbl(project_name,technologies,start_date,end_date,deadline)
VALUES ('$project_name', '$technologies', '$start_date','$end_date','$deadline')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:project_management_list.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//header('location:project_management.php?res='.$res);
$conn->close();
?>