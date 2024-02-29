<?php 

include ('header.php');

if (isset($_POST['btn'])){
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$num=$_POST['phone'];
	$city=$_POST['city'];


	
	$xyz ="INSERT into users (name, email, password, mobile, city) values ('$name', '$email', '$pass', '$num', '$city')";
	
	$sql =mysqli_query($con, $xyz);
	
	if ($sql) {
		
		
		echo "<script>window.alert('Your account has been successfully register.')";
						echo "<script>window.open('index.php','_self')</script>";
		
	}
	
	else {
		
		echo "<script> alert ('Invalid Email or Password')</script>";
	}
	
	
	
}




?>

		<style>

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.form-control {
    height: auto!important;
padding: 8px 12px !important;
}

.main-center{
 
 	margin: 50px auto;
 	max-width: 400px;
    padding: 30px 40px;
	background:#009edf57;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}


		
		
		
		
		</style>

	</head>

	
		
				<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Create an account</h5>
					<form method="post">
						
						<div class="form-group" style="width: 300px;">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						
						
							<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						
						

						<div class="form-group">
							<label for="number" class="cols-sm-2 control-label">Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="username"  placeholder="Enter your Mobile Number"/>
								</div>
							</div>
						</div>

				
				<div class="form-group">
							<label for="number" class="cols-sm-2 control-label">City</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="city" placeholder="Enter your City Name"/>
								</div>
							</div>
						</div>
                        
                
					
					
					

						<div class="form-group ">
							<button type="submit" id="button" class="btn btn-success btn-lg btn-block login-button" name="btn">Submit</button>
							<a href="index.php" id="button" class="btn btn-danger btn-lg btn-block">Cancel</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

	