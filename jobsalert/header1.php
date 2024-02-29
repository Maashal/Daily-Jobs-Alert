<?php

session_start();

	
include('db.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>System</title>

 
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/js/bootstrap.min.js" rel="stylesheet" type="text/javascript">
  <link href="assets/js/jquery.js" rel="stylesheet" type="text/javascript">
  

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
  
  
  
  <script>
	$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
	
	</script>
  
  <style>
  body, h1, h2, h3, h4, h5, a {
	  font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
	  color:#fff !important;
	  
  }
  
  body {
	  
	  background: #050a1b;  
  }

	
	  footer{background-color: #000; padding: 25px; color:#fff;}
       ul, li{list-style-type: none;}
       .list{margin-top: 15px;}
	  footer, a {
		  
		  text-decoration: none !important;
		  color: #fff !important;
	  }
	  
	  
	  .copyright {
		      
		  
   background-color: #000000e3;
    color: #fff;
    padding: 15px;
	  }
	  .section-heading h2{
	text-align:center;
	color:white;
	font-family:Monotype Corsiva;
	
}




  .card-product:after {
    content: "";
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .price-new, .card-product .price {
    margin-right: 5px; }
  .card-product .price-old {
    color: #999; }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      object-fit: cover; }
      
      .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }
	
	
	
	.col-lg-12 {
		
		border:1px solid#fff;
		    padding: 15px;
	}
	
	
	.qty {
		

    position: absolute;
    right: 116px;
    top: 0px;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    border-radius: 50%;
    font-size: 15px;
    color: #FFF;
    background-color: #250225;
	}
	
	
	
	
	
	
	
	
	
	</style>

</head>

<body>

<div class="container">
			<div class="row">
			<div class="col-lg-12" style="background-color:#03284c">
            
			<h2 style="color:#fff; text-align:center">Welcome to Daily Jobs Alerts </h2>
			
</div>
</div>
</div>




			<div class="container">
			<div class="row">
			<div class="col-lg-12">
			
<nav class="navbar navbar-inverse" style="background: darkslateblue; margin: 18px; font-size:30px">
  
    
   
    <ul class="nav navbar-nav">
    	<div class="col-sm-6" style="float: right;">
        <form class="navbar-form" role="search" method="post" action="search.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>

		<li><a href="index.php">Home</a></li>
		
		
        
		
        
     <?php 
     if (isset($_SESSION['email'])) {
		echo '
			<li style="float: right;"><a href="order_details.php">Order Details</a></li>
			<li style="float: right;"><a href="feedback.php">Give Feedback</a></li>
			<li style="float: right;"><a href="logout.php">Logout</a></li>';
      }
	  
	  else {
      
      echo '
      <li><a href="login.php">User Login</a></li>
      <li><a href="register.php">Register</a></li>
<li><a href="admin/login.php">Admin Login</a></li>



      ';
	  }
		 ?>
		 
		 
		 
    </ul>
   
  </div>
</nav>

		</div>
	</div>
</div>

