<?php 
include("header.php");
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



   </style>




<div class="container" >
 <div class="row">
  <div class="col-lg-1">
    <div class="col-md-2"></div>
 <div class="col-md-10">
	
	
		<table id="myTable" class="table table-striped">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    		        <th>User Role</th>
    		        <th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Mobile Number</th>
					<th>City</th>
					<th>Application Status</th>
					<th colspan="2">Action</th>
					
					<th colspan="2">Action</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from user";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['type']; ?> </td>
						<td> <?php echo $row['name']; ?> </td>
					
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['Passward']; ?> </td>
					<td> <?php echo $row['mobile']; ?> </td>
					
					<td> <?php echo $row['city']; ?> </td>
					<td><span > <?php echo $row['status']; ?> </span></td>
					<td><a href="edit_users.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> </td>
				<td>	<a href="delete_users.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
			
				<td><a href="approve.php?approve=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Approve</a> </td>
					<td><a href="reject.php?reject=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Reject</a> </td>
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>
</div>
