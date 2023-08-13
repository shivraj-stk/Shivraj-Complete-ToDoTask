<?php
// to add developer data
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
  <title>USER REGISTER PAGE</title>
</head>
<body>
<?php include 'includes/tl_nav.php'; ?>

<div class="container shivraj">

  <h3>Register Account</h3>
  
  <!-- <h3 style="color: green;">New record inserted</h3> -->
  
  
  <form action="save_reg_register.php" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label>User Name</label>
     
      <input type="text" class="form-control" name="user_name">
      
    </div>
     <div class="col-md-4">
      <label>User Email</label>
      <?php
  if($t==1)
  {
  ?>
      <label style="color: red;">already used</label>
      <?php
    }
  ?>
      <input type="Email" class="form-control" name="user_email">
      
    </div>
    
  </div><br>
  <div class="row">
    <div class="col-md-4">
      <label>User Mobile</label>
       <?php
  if($t==2)
  {
  ?>
      <label style="color: red;">already used</label>
      <?php
    }
  ?>
      <input type="number" class="form-control" name="user_mobile">
      
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-4">
      <label>Username</label>
       <?php
  if($t==3)
  {
  ?>
      <label style="color: red;">already used</label>
      <?php
    }
  ?>
      <input type="text" class="form-control" id="user_username" name="user_username">
      
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-4">  
      <label>Password</label>
     
     
      
      <input type="Password" class="form-control" name="user_password">
      
    </div>
   </div><br>
  <div class="row">
    <div class="col-md-4">  
      <label>Confirm Password</label>
       <?php
  if($t==4)
  {
  ?>
      <label style="color: red;">password not match</label>
      <?php
    }
  ?>
      <input type="Password" class="form-control" name="user_confirm_password">

    </div>  
  </div>
  <br>
<div class="row">
   <div class="col-md-8">
    <input type="submit" class="btn btn-success" value="Save" name="">
   </div>   
</div>
</form>
</footer>
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
    background: #79d1e8;
  }
</style>
