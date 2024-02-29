<!DOCTYPE html>
<?php include('header.php');
include('db.php'); ?>

<div class="row" style="margin: 50px">
	<div class="col-md-3"></div>
 <div class="col-md-7">
				
	
	<?php
	
		if(isset($_GET['edit']))
		  {
				$edit_id = $_GET['edit'];	
					
			$qry = "select * from job_category where id='$edit_id' ";
			$run = mysqli_query($con, $qry);
			if(!$run)
			{
				echo "<script> alert('query not executed') </script>";
			}
			
			while($row=mysqli_fetch_array($run))
			{
										
					$id 			= $row ['id'];
					$title 			= $row ['title'];
					$description	= $row ['description'];

					
				
				
			}
		  }
		?>
			
							<form  method="post" width="85%" enctype="multipart/form-data" align="center">
					<table align="center" width="450" height="500" style="padding-top:20px; padding:10px 10px;">
						<tr>
							<td colspan="2" align="center"> <h1 style="font-family:arial;">Edit  Detail </h1></td>
							
						</tr>
						
						<tr>
							<td>Category Name</td>
							<td>	<input type="text" class="form_item" name="title" value="<?php echo $title; ?>" required> </td>						 
						</tr>
						
						
						
						<tr>
							<td >Department</td>
							<td>	<input type="text" class="form_item" name="description" value="<?php echo $description; ?>" required> </td>	
						</tr>
						
					
						
					 <tr> 
						<td colspan="2" align="right"> <input class="sub"  type="submit" name="register" value="Update Record"> </td>
					 </tr>
					
					</table>
						
					</form>
	
		</div>
			</div>
		</div>	
		
	
	
	</body>

</html>				
					
					
					
<?php 
		if(isset($_POST['register']))
		{
			
			 $title = $_POST['title'];
	
			$description = $_POST['description'];
			
			
			
			
	$qry = "update job_category set title='$title',description='$description' where id ='$edit_id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Record updated successfully')</script>";
						echo "<script>window.open('manage_newjobcategory.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>
		