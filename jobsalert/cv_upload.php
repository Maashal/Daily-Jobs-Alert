
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Upload CV</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">User Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control"  placeholder="Enter name" name="title" value="<?php echo $_SESSION['name']; ?>" required>
          
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">User Email:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Enter name" name="description" required value="<?php echo $_SESSION['email']; ?>">
      </div>
    </div>
	
	 
    
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Upload CV:</label>
      <div class="col-sm-3">
        <input type="file" class="form-control" name="image">
      </div>
    </div>
    
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btn">Upload</button>OR
        <a href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-warning">Send Via Email</a>
      </div>
    </div>
  </form>
</div>
</div>
 </div>
 <?php
if (isset($_POST['btn'])) {
    
    
    $title = $_POST['title'];
	$description = $_POST['description'];
	 $img=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname, "uploads/$img");
	
    
    
    
    $xyz = "insert into Resume_cv (title,description,image) values ('$title', '$description', '$img')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> window.alert ('Resume successfully added') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>