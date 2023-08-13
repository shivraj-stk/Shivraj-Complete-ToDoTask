<?php include '../config/config_db.php'; ?>
<?php
  session_start();
  $id = $_SESSION["id"];
  
  $developer_name = $_SESSION["d_user_username"];
//details of specific developer are shown as per developer's name 
  $query = "SELECT * from user_tbl WHERE id='$id'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_row($result);
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
   <script src="script.js"></script>
  <title>My Profile</title>
</head>
<body>
  <input type="hidden" value="profile" id="current_page" name="">
  <?php include 'includes/dev_nav.php'; ?>
<div class="container shivraj" >
  
  <form  method="POST">
  <div class="row">
    <div class="col-md-4" style="border:5px green solid; padding-bottom:20px; padding:19px;margin-top:30px;margin-left: 97px;">  
      <h3>My Profile  <a href="edit_myprofile.php"><span class="glyphicon glyphicon-pencil" style="float: right;"></span></a></h3>
      <br>
      <label>Name</label>
      <input type="text" class="form-control" name="user_name" value="<?php echo $row[1]; ?>" readonly>
      <br>
      <label>Email</label>
      <input type="text" class="form-control" name="email" value="<?php echo $row[2]; ?>" readonly>
      
      <br>
      <label>Mobile number</label>
      <input type="text" class="form-control" name="mobile" value="<?php echo $row[3]; ?>" readonly>
      
    </div>
<br>


   <input type="hidden" value="<?php echo $id ?>" name="update_id">
 
  
  <br>

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
    background: #8ce67e;
  }
  textarea {
  width: 100%;
  height: 150px;
  font-family: Comic Sans MS;
  font-size: 14px;
  color: #333;
}

input{
  border: none;
  font-family: sans-serif;
  
}
</style>  
