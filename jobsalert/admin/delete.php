<?php

include ('db.php');

$delete= $_GET['delete'];

$abc = "delete from event_detail where id= '$delete'";

$sql = mysqli_query($con, $abc);

if ($sql) {
	
	echo "<script> window.alert ('Your Selected Record deleted')</script>";
	header("location:manage_detail.php");
}

else {
	
	echo "not";
}


?>