<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-lg-6">
  <h2>Employee Registration Form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="text">Empid:</label>
      <input type="text" class="form-control" id="empid" placeholder="Enter empid eg:E100" name="empid" required>
    </div>
    <div class="form-group">
      <label for="text">Empname:</label>
      <input type="text" class="form-control" id="empname" placeholder="Enter Name" name="empname" required>
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="gender" placeholder="enter gender"  name="gender" required>
    </div>
    <div class="form-group">
      <label for="text">Location:</label><br/>
      <textarea row=5 cols=20 name="location" required></textarea>
    </div>
    <div class="form-group">
      <label for="text">Role:</label>
      <input type="text" class="form-control" id="role" placeholder="Enter role eg:worker etc" name="role" required>
    </div>
    <div class="form-group">
      <label for="text">Salary:</label>
      <input type="number" class="form-control" id="sal" placeholder="Enter sal" name="sal" required>
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
  </form>
</div>
</div>

<div class="col-lg-12">
<table class="table table-boardered">
    <thead>
      <tr>
        <th>#</th>
        <th>Employee Id</th>
        <th>Employee Name </th>
        <th>Gender</th>
        <th>Location</th>
        <th>Role</th>
        <th>Salary</th>
        <th>Edit</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $res=mysqli_query($link,"select * from employee");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["empid"]; echo "</td>";
      echo "<td>"; echo $row["empname"]; echo "</td>";
      echo "<td>"; echo $row["gender"]; echo "</td>";
      echo "<td>"; echo $row["location"]; echo "</td>";
      echo "<td>"; echo $row["role"]; echo "</td>";
      echo "<td>"; echo $row["salary"]; echo "</td>";
      echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>" ><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
      echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
      echo "</tr>";
      

    }
    
    ?>  


    </tbody>
  </table>

</div>

</body>

<?php 
if(isset($_POST["insert"]))
{
mysqli_query($link,"insert into employee values(NULL,'$_POST[empid]','$_POST[empname]','$_POST[gender]','$_POST[location]','$_POST[role]','$_POST[sal]')"); 

?>
<script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php

}

?>
</html>
