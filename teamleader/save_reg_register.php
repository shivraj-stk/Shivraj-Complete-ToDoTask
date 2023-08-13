<?php
include '../config/config_db.php';
//To store the developer data in database
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_mobile = $_POST['user_mobile'];
$user_username = $_POST['user_username'];
$user_password = $_POST['user_password'];
$user_confirm_password = $_POST['user_confirm_password'];

$sql1 = "SELECT * FROM user_tbl WHERE `user_email`='$user_email'";
				$result1 = $conn->query($sql1);
$duplicate_mail = $result1->num_rows;

$sql2 = "SELECT * FROM user_tbl WHERE `user_mobile`='$user_mobile'";
				$result2 = $conn->query($sql2);

$duplicate_mobile = $result2->num_rows;

$sql3 = "SELECT * FROM user_tbl WHERE `user_username`='$user_username'";
				$result3 = $conn->query($sql3);

$duplicate_username = $result3->num_rows;

				$duplicate_mail = $result1->num_rows;

				if($duplicate_mail==0)
				{
						if($duplicate_mobile==0)
						{
								if($duplicate_username==0)
								{
									if($user_password==$user_confirm_password)
									{
									echo "no duplicate values...";
									//exit;
									//just paste the inster query;
									$user_password = md5($user_password);
					$sql = "INSERT INTO user_tbl(user_name,user_email, user_mobile,user_username,user_password)
				VALUES ('$user_name', '$user_email', '$user_mobile','$user_username','$user_password')";
				if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
									}
									else
									{
										echo "password not match..";
										$res=4;
									}

								}
								else
								{
								echo "duplicate username";
								$res=3;

								}
						}
						else
						{
								echo "duplicate mobile";
								$res=2;
						}


				}
				else
				{
					echo "duplicate mail";
					$res=1;
				}
				header('location:user_register.php?res='.$res); 



?>