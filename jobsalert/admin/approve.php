
<?php
session_start();
	include('db.php');
	if(isset($_GET['approve']))
	{
		$user_id = $_GET['approve'];
		
		
	
	
	$update_user = "update bid_detail set Status='Approved' where id = '$user_id'";
	$run_user = mysqli_query($con, $update_user);
	
	if($run_user)
	{
		echo "<script> window.alert ('Bid Request approved')</script>";
		echo "<script>window.open('booking_detail.php','_self')</script>";
		
	}
	else
	{
		echo "<script> window.alert(' not approved')</script>";
		
		echo "Error: " . $run_user . "<br>" . mysqli_error($link);
	}
	
}
?>