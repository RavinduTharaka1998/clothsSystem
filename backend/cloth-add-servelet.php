<?php

   require_once('../connection.php');

   if (isset($_POST['add'])) {

    $c_id          =  $_POST['c_id'];
    $description   =  $_POST['description'];
    $price       =  $_POST['price'];
    $date       =  $_POST['date'];
	$address       =  $_POST['address'];
	
	
	
						$sql = "INSERT INTO cloth(cloth_id,description,price,date,address) VALUES(?,?,?,?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('System Erorr???? SQL statement faild!');</script>";
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "sssss", $c_id ,$description,$price, $date,$address);
							
							mysqli_stmt_execute($stmt);

						    echo "<script>alert('Your order is Success. Thank you!!!'); window.location.href='../mydress.php';</script>";
						}

				
					}				
?>