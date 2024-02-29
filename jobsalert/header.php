<?php

include ('db.php');

session_start();

?>

<style type="text/css">
    
.container {

    border: 1px solid#fff;
}

body {

    background-color: #00547e !important;
}


</style>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="background-color: #00547E !important;
    border-bottom: 4px solid #04A3ED;">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Virtual University Of Pakistan </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    

                     
					
					<?php 
					
					if (isset($_SESSION['name'])){
					
			echo	'	 
			<li class="nav-item active">
                        <a class="nav-link text-white" href="index1.php">Home</a>
                    </li>
			<li class="nav-item">
                        <a class="nav-link text-white" href="#">Welcom '.$_SESSION['name'].'</a>
                    </li>
			
			
			<li class="nav-item">
                        <a class="nav-link text-white" href="cv_upload.php">Apply for Job</a>
                    </li>
					
				
				
					 <li class="nav-item active">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>';
					}
					
					else {
				echo	'	
                 <li class="nav-item active">
                        <a class="nav-link text-white" href="index.php">Home</a><li class="nav-item active">
                        <a class="nav-link text-white" href="login.php" target="_blank">Login</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link text-white" href="admin/login.php">Admin Login</a>
                    </li>

                 
					<li class="nav-item active">
                        <a class="nav-link text-white" href="register.php">Register</a>
                    </li>
					
					';
						
					}
					
					?>
					
				
                </ul>
            </div>
        </div>
    </nav><br><br><br><center>
 <div class="col-sm-6" style="align-items: center;">
        <form class="navbar-form" role="search" method="post" action="search.php">
        <div class="input-group">
            <input type="text" required class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-success btn-block" type="submit" name="submit"><i class="glyphicon glyphicon-search">Search</i></button>
            </div>
        </div>
        </form></div></center>
    </div>

    <!-- Navigation -->