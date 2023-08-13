<?php include '../config/config_db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <title>Announcement</title>
</head>
<body>
  <input type="hidden" value="announcement" id="current_page" name="">
  <?php include 'includes/dev_nav.php'; ?>
<?php
//To get and display the announcement data from database
$sql = "SELECT * FROM announce_tbl ORDER BY `id` DESC";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc())
   {
?>
    <div class="wrapper">
  <div class="box1" style="font-family: 'Brush Script MT', cursive;color: yellow"><?php echo $row["project_title"]; ?></div>
  <div class="box2" style="font-family: 'Brush Script MT', cursive;color: yellow"><?php echo $row["assigned_date"]; ?></div>
  <div class="box3" style="font-family: 'Brush Script MT', cursive;color: yellow"><?php echo $row["task_details"]; ?></div>
</div>
  
  <?php
  $i++;
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>

</body>
</html>
<style>
    body {
/* to display the background colour*/
      margin: 0;
      padding: 0;
      background-color: #8ce67e;
    }

    .blackboard {
      top: 0;
      left: 0;
      width: 1125px;
      height: 520px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #222;
      border: 5px solid #8B4513;
      box-sizing: border-box;
    margin-left: 68px;
    }
.announcement-text
{
font-family: 'Brush Script MT', cursive;
}
    .announcement-container {
      max-width:600px;
/*      text-align: center;*/
    }


    .announcement-text {
      color: white;
      font-family: Arial, sans-serif;
      font-size: 36px;
      text-align: center;
      padding: 20px;
      margin: 0;
    }

    .announcement-title-text {
      color: white;
      font-family: Arial, sans-serif;
      font-size: 36px;
      text-align: left;
      padding: 20px;
      margin: 0;
    }
    .anc_title
    {
      margin-left: 10px;
    }
    .wrapper {
     border: solid;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 126px 73px;
    gap: 10px;
    background-color: black;
    height: 520px;
    width: 1000px;
    margin-left: 100px;
    border-color: red;
}

.box1 {
  grid-column: 2 / 4;
  grid-row: 1;
  font-size: 36px;
}

.box2 {
  grid-column: 1;
  grid-row: 1 / 3;
  font-size: 36px;
}

.box3 {
  grid-row: 2;
  grid-column: 2 / 3;
  font-size: 36px;
}
  </style>