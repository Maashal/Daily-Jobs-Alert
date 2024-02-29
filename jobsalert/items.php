<?php 
include ('header.php');


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo "<script> window.alert('Item Added in Cart')</script>";
			echo "<script> window.history.go(-1)</script>";
			
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="home.php"</script>';
			}
		}
	}
}

?>

		
			<div class="row">
			
		
			<?php
			
		
				$query = "SELECT * FROM posted_project where category='".$_GET['view']."' ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-3" style="text-align: center; background-color: whitesmoke; padding: 20px; border-radius: 10px; margin-bottom: 50px;text-align: center; background-color: whitesmoke; padding: 20px; border-radius: 10px; margin-bottom: 50px !important;     margin: 0px 30px">
				<img src="admin/uploads/<?php echo $row["image"]; ?>" class="img-responsive" style="max-width: 85%; margin-left: auto; margin-right: auto; height: 160px;" /><br />

				
				</div></form>
			</div>	<h4 class="text-info" style="color:#000 !important">Job Name<?php echo $row["title"]; ?></h4>

					

					
						<h4 class="text-danger" >Type<?php echo $row["type"]; ?></h4>
						<h4 class="text-danger" style="color:#000 !important">Experiance required<?php echo $row["duration"]; ?></h4>
						<h4 class="text-danger" style="color:#000 !important">Job Salery<?php echo $row["Budject"]; ?></h4>
						<p class="text-danger" style="color:#000 !important">Job Description<?php echo $row["cription"]; ?></p>

						<form method="post" action="items.php?id=<?php echo $row["id"]; ?>">

						<a href="login.php">	<span class="btn btn-danger btn-sm">Apply For Job</span></a>

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
		
		</div>
	</div>
	

