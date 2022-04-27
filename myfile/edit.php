<?php
include "connection.php";

$empid="";
$empname="";
$gender="";
$location="";
$role="";
$salary="";

$id=$_GET["id"];
$res=mysqli_query($link,"select * from employee where id=$id");
while($row=mysqli_fetch_array($res))
{
    $empid=$row["empid"];
    $empname=$row["empname"];
    $gender=$row["gender"];
    $location=$row["location"];
    $role=$row["role"];
    $salary=$row["salary"];

}


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
      <input type="text" class="form-control" id="empid" placeholder="Enter empid eg:E100" name="empid" value="<?php echo $empid; ?>">
    </div>
    <div class="form-group">
      <label for="text">Empname:</label>
      <input type="text" class="form-control" id="empname" placeholder="Enter Name" name="empname" value="<?php echo $empname; ?>">
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="gender" placeholder="enter gender"  name="gender" value="<?php echo $gender; ?>">
    </div>
    <div class="form-group">
      <label for="text">Location:</label><br/>
      <textarea row=5 cols=20 name="location" ><?php echo $location; ?></textarea>
    </div>
    <div class="form-group">
      <label for="text">Role:</label>
      <input type="text" class="form-control" id="role" placeholder="Enter role eg:worker etc" name="role" value="<?php echo $role; ?>">
    </div>
    <div class="form-group">
      <label for="text">Salary:</label>
      <input type="number" class="form-control" id="sal" placeholder="Enter sal" name="sal" value="<?php echo $salary; ?>">
    </div>
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>
</div>



</body>
<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update  employee set empid='$_POST[empid]',empname='$_POST[empname]',gender='$_POST[gender]',location='$_POST[location]',role='$_POST[role]',salary='$_POST[sal]' where id=$id");
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}

?>

</html>
