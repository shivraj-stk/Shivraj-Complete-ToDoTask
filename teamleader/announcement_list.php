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
  

<style>
#announce {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 10%;
}

#announce td, #announce th {
  border: 1px solid #ddd;
  padding: 8px;
}

#announce tr
{
  background-color: white;
}

#announce th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFFFFF;
  color: #000000;
}
body{
    height: 100px;
    background: #79d1e8;
  }
h1{
  color: white;
}
</style>
</head>
<body>
  <input type="hidden" value="announcement" name="" id="current_page">
 <?php include 'includes/tl_nav.php'; ?>


<h1 align="center">Announcement List <a href="announcement.php"><img src="img/add-512.png" height="40"></a></h1>


<table id="announce" align="center">
  <tr>
    <th>Sno</th>
    <th>Announcement Title</th>
    <th>Announcement details</th>    
    <th>Assigned Date</th>
    <th>Action</th>
  </tr>
<?php
$sql = "SELECT * FROM announce_tbl";
$result = $conn->query($sql);


    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';

  
?>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc())
   {
?>
  <tr id="<?php echo $row["id"] ?>">
    <td><?php echo $i; ?></td>
    <td><?php echo $row["project_title"]; ?></td>
    <td><?php echo $row["task_details"]; ?></td>
    <td><?php echo $row["assigned_date"]; ?></td>
    <td><a href="announcement_edit.php?id=<?php echo $row["id"]; ?>"><img src="img/editicon.png" height="40"></a>/ <a><button><img src="img/deleteicon.png" height="40" class="remove"></button></a></td>
  </tr>
  <?php
  $i++;
  }
} else {
  echo "0 results";
}
$conn->close();
  ?>
<!-- <a href="logout.php"><input type="submit" class="btn btn-success" value="LOGOUT">   -->
</table>
<p id="demo"></p>

</body>
</hannouncel>

</html>
<script type="text/javascript">

$(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'project_management_delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>



</script>