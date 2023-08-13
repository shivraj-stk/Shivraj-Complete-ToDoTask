<?php
//this code belongs to developer login form
error_reporting(0);
$t=0;
$t = $_GET['res'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
</head>
<body>
<div class="container shivraj">
  <h3>Developer Login</h3>
  <?php
  if($t==11)
  {
  ?>
  <h2 style="color: red;">check your username and password</h2>
  <?php
}
?>
  <form action="login_check.php" method="POST">
   <div class="row"> 
    <div class="col-md-4">  
      <label>Username</label>
      <input type="text" class="form-control" name="user_username">

    </div>
   </div><br>
  <div class="row">
    <div class="col-md-4">  
      <label>Password</label>
      <input type="Password" class="form-control" name="user_password">

    </div> 
  </div>
  <br>
<div class="row">
   <div class="col-md-8">
    <input type="submit" class="btn btn-success" value="Login" name="">
   </div>
</div>
</form>
    
  </div>
  </div>
  </div>
</body>
</html>
<style type="text/css">
  .shivraj
  {
    padding-left: 360px;
    font-family: Comic Sans MS;
    color: white;
  }
  .footer_content
  {
    padding-left: 380px;
    font-family: Comic Sans MS;
    color: white;

  }
  .connect
  {
    font-family: Comic Sans MS;
    color: white;
  }
  body{
    height: 100px;
    background: #066acd;
  }
</style>