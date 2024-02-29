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
	
	<h3>Manage Posted Jobs Detail</h3>
	<br>
		<table id="myTable"  border="1px">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    		      
    		       
					<th>Job Type</th> 
					<th>Working Time/Duration</th> 
					<th>Job Catogory</th> 
					<th>Applying Fee</th>
					<th>Advistisment Image</th>
					<th colspan="2">Action</th>
				
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
				<?php
					
					
					$xyz = "select * from posted_project";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						
						
					<td> <?php echo $row['type']; ?> </td>
					<td> <?php echo $row['duration']; ?> </td>
					<td> <?php echo $row['category']; ?> </td>
					<td> <?php echo $row['Budject']; ?> </td>
					
					
					<td><img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"> </td>
					<td><a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
							<td><a href="edit_product.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Update</td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>