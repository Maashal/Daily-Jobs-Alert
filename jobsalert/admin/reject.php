
<?php
session_start();
	include('db.php');
	if(isset($_GET['reject']))
	{
		$user_id = $_GET['reject'];
		
		
	
	
	$update_user = "update bid_detail set Status='Rejected' where id = '$user_id'";
	$run_user = mysqli_query($con, $update_user);
	
	if($run_user)
	{
		echo "<script> window.alert('Bid Request rejected')</script>";
		
		echo "<script> window.open('booking_detail.php','_self')</script>";
	}
	else
	{
		echo "<script> window.alert(' not rejected')</script>";
		
		echo "<script> window.open('users.php','_self')</script>";
	}
	
}
?>