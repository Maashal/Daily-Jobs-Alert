<?php include ('header.php'); ?>



		

<table class="table table-bordered" style="width:50%" align="center">
  <tr>
    <th>Serial Number</th>
    <th>Builder Name</th> 
    <th>Builder Email</th>
    <th>Project Location</th> 
    <th>Project Name</th>
    <th>Project Budject</th>  
    <th>Mobile</th> 
   
    <th>Address</th>
     <th>Bid Amount</th>
    <th>Payment Method</th>
    <th>Account Number</th>
	<th>Bid Status</th>
	<th colspan="2">Action</th>
    
  </tr>
  

  
	   
	<?php
		
		$qry = "select * from bid_detail  ";
		
		$run = mysqli_query($con, $qry);
		$i = 0;
		
		$run2 = mysqli_num_rows($run);
		
		if (!$run2 > 0) {
			
			echo"<h3>Record not found.</h3>";
		}
		else {
		
		while($row = mysqli_fetch_array($run))
		{
			
			$id = $row ['id'];
			$name = $row ['name'];
			$email = $row ['email'];
			$location = $row ['location'];
			$p_name = $row ['p_name'];
			$bb_ject = $row ['bb_ject'];
			$mobile = $row ['mobile'];
			$city = $row ['city'];
			$bid_cash = $row ['bid_cash'];
			$category = $row ['category'];
			$card = $row ['card'];
			$status = $row ['status']; 
			
			
			
			$i++

	?>
  <tr align="center">
	<td><?php echo $id;?> </td>
	<td><?php echo $name;?></td>	
    <td><?php echo $email; ?></td>
    <td><?php echo $location; ?></td>
    <td><?php echo $p_name; ?></td>
    <td><?php echo $bb_ject; ?></td>
    <td><?php echo $mobile; ?></td>
    <td><?php echo $city; ?></td>
    <td><?php echo $bid_cash; ?></td>
    <td><?php echo $category; ?></td>
    <td><?php echo $card; ?></td>
	<td> <span><?php echo $status; ?> </span> </td>
	<td><a href="approve.php?approve=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Approve</a> </td>
					<td><a href="reject.php?reject=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Reject</a> </td>
	
   	
	
  </tr>
		<?php }} ?>
</table>




</div>
</div>
</div>




