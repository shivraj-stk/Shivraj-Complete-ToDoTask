<?php
include '../config/config_db.php';
//login details checks with database if the details matches opens the developer dashboard if not redirects to login page 
$user_username = $_POST['user_username'];
$user_password = md5($_POST['user_password']);
// echo $user_password;
// exit;
$sql1 = "SELECT * FROM user_tbl WHERE `user_username`='$user_username' AND `user_password`='$user_password'";

        $result1 = $conn->query($sql1);
		$counttt = $result1->num_rows;
		echo $counttt;

		$qry = "SELECT * FROM `user_tbl` WHERE `user_name`='$user_username'";
		$rs = mysqli_query($conn,$qry);
		$getRowAssoc = mysqli_fetch_assoc($rs);
		$id = $getRowAssoc['id'];

if($counttt==0)
{
        header('location:login_form.php?res=11'); 

}
else
{
  session_start();
  $_SESSION["id"] = $id;
  $_SESSION["d_user_username"] = $user_username;
  header('location:dev_dashboard.php'); 

}
?>