
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Post New Jobs</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Job Type:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Enter Type " name="type" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Working Time/Duration:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Enter Duration " name="duration" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Offered Salery:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Enter Offered Salery" name="Budject" required>
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Catogery Name:</label>
      <div class="col-sm-3">
       
	   <select name="category" class="form-control">
   <option value="">Choose Category
   <?php 
		$cate="select * from job_category";
	   
		$view = mysqli_query($con, $cate);
		
	   while ($row=mysqli_fetch_assoc($view))
		
{			
			
			$title= $row['title'];

   
   echo '<option value="'.$title.'">'.$title.'</option> ';
		
	   }
		
		?>
  
   

     
     </select>
	   
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Job Description:</label>
      <div class="col-sm-3">
        <textarea type="text" class="form-control" placeholder="Enter Duration " name="cription" required>
        </textarea>
      </div>
    </div>
    

	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Advistisment Image:</label>
      <div class="col-sm-3">
        <input type="file" class="form-control" name="image">
      </div>
    </div>
    
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btn">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
 </div>
 <?php
if (isset($_POST['btn'])) {
    
    
   
    $type = $_POST['type'];
    $duration = $_POST['duration'];
     $Budject = $_POST['Budject'];
	$category = $_POST['category'];
  $cription = $_POST['cription'];
	 $img=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname, "uploads/$img");
	
    
    
    
    $xyz = "insert into posted_project (title,type,duration,Budject,category,cription,image) values ('$title','$type','$duration','$Budject','$category','$cription','$img')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> window.alert ('New Jobs Posted successfully') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>