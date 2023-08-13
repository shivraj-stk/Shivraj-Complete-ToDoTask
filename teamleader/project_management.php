<!-- To create a interface for adding project management details -->
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
  <title>Project Management</title>
</head>
<body>
  <?php include 'includes/tl_nav.php'; ?>
<div class="container shivraj">
  <h3>Project Management</h3>
  <form action="save_reg_pm.php" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label>Project Name</label>
      <input type="text" class="form-control" name="project_name">
      
    </div>
    <div class="col-md-4">  
      <label>Technologies</label>
      <input type="text" class="form-control" name="technologies">
      
    </div>
   </div><br>
  <div class="row">
    <div class="col-md-4">  
      <label>Start date</label>
      <input type="date" class="form-control" name="start_date">
      
    </div>
    <div class="col-md-4">  
      <label>End date</label>
      <input type="date" class="form-control" name="end_date">
      
    </div>
   </div><br> 
  <div class="row">  
    <div class="col-md-4">  
      <label>Deadline</label>
      <input type="date" class="form-control" name="deadline">

    </div>
   </div><br>
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
  textarea {
  width: 100%;
  height: 150px;
  font-family: Comic Sans MS;
  font-size: 14px;
  color: #333;
}
</style>  
