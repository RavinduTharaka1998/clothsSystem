<?php
require_once('../connection.php');


if (isset($_POST['update'])){
	
	$id = $_POST['id'];
	$c_id = $_POST['c_id'];
	$description = $_POST['description'];
    $price = $_POST['price'];
	$date = $_POST['date'];
    $address = $_POST['address'];
	

		
		$sql = "UPDATE cloth SET date = '$date', address = '$address' where order_id = '$id'";
	        
	      
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('Update successfully'); window.location.href='../mydress.php';</script>";
			}
			else
			{
				echo "<script>alert('Erorr !!! Record Update Unsuccessfully'); window.location.href='../mydress.php';</script>";
			}

}

?>