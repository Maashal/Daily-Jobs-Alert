<?php 
include("header.php");
include ("db.php");
?>


  <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
		table, th, td {
	text-align: center;
}
    </style>



<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>



<div class="container">
	<div class="row" style="margin: 50px">
	<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Manage New Job Category</h3>
	<br>
		<table id="myTable"  border="2px">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    		        <th>Category Name</th>
    		        <th>Department Name</th>
					
					<th>Job Advitisement</th>
					<th colspan="3">Action</th>
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from job_category";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['title']; ?> </td>
					<td> <?php echo $row['description']; ?> </td>
					
					<td><img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"> </td>
					
					
				
					<td><a href="edit_category.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Update</td>
					<td><a href="delete_category.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
					
					
						
					
					
				</tr>
				
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>