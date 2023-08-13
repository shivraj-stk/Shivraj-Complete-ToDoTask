<?php
include '../config/config_db.php';
//team leader login details checks with database if the details matches opens the team leader dashboard if not redirects to login page 
$user_username = $_POST['user_username'];
$user_password = md5($_POST['user_password']);
$sql1 = "SELECT * FROM team_leader_tbl WHERE `user_username`='$user_username' AND `user_password`='$user_password'";
        $result1 = $conn->query($sql1);
$counttt = $result1->num_rows;
echo $counttt;

if($counttt==0)
{
        header('location:team_leader_login.php?res=11'); 

}
else
{
  session_start();
  $_SESSION["user_username"] = $user_username;
  header('location:tl_dashboard.php'); 

}
?>