<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from employee where id=$id");

?>

<script type="text/javascript">
window.location="index.php";
</script>
