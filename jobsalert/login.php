<?php
include('db.php');
;


if (isset($_POST['login']))
 
{
	
	$user=$_POST['email'];
	$pass=$_POST['password'];
	
	
	$xyz="select * from  users where email='$user' and password='$pass' ";
	
	$sql=mysqli_query($con, $xyz);
	
	$row=mysqli_num_rows($sql);
	
	$rows = mysqli_fetch_array($sql);
	$id = $rows ['id'];
	$name = $rows ['name'];
	$user = $rows ['email'];
	$tid = $rows ['T_id'];
	
	
	
	if ($row>0) {
		$_SESSION['id']= $id;
		$_SESSION['email']= $user;
		$_SESSION['password']= $pass;
		$_SESSION['name']= $name;
		
		header("location:index1.php");
		
	}
	
	else {
		echo "Error: " . $row . "<br>" . mysqli_error($con);
		echo "<script>alert('Email/Password Invalid try again')</script>";
	}
	
	
	
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

.top{
	margin-top: 18%;
}

.caja{
	border-radius: 5px;
}

	body {
		
	background-color:white;	
		
	}

</style>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<section>
			<div class="panel panel-primary top caja" style="background-color: gray;">
			  <div class="panel-body">
			    <h3 class="text-center"><font color="red"> User Login</font></h3>
				<hr>
			    
			    <form method="post">
			    	<div >
					 
					  <input type="text" name="email" class="form-control" placeholder="Enter Email" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					<div >
					 
					  <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					 <input type="submit" class="btn btn-success btn-block" value="Submit" name="login">
<a href="index.php" class="btn btn-danger btn-block"> Cancel </a>
			    </form>
			  </div>
			</div>
		</section>
	</div>
	
</div>