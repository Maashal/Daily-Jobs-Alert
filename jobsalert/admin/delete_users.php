<?php

include ('db.php');

$delete= $_GET['delete'];

$abc = "delete from user where id= '$delete'";

$sql = mysqli_query($con, $abc);

if ($sql) {
	
	echo "<script>window.alert ('Your Selected Record deleted')</script>";
	header("location:users.php");
}

else {
	
	echo "not";
}


?>