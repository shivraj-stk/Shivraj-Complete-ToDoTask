<?php
//To connect the database both local and live 
if ($_SERVER['HTTP_HOST'] == 'localhost') {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_db";
}
else
{
	
$servername = "sql111.infinityfree.com";
$username = "if0_34759738";
$password = "6sEVwgalKfLL";
$dbname = "if0_34759738_todo_db";

}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
	//echo "ok";
}

//$conn->close();
?>