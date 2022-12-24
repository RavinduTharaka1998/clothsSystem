<?php
	include_once '../connection.php';
			
			if(!empty($_POST["email"])){

				
				
				$query = "SELECT * FROM customer WHERE email = '".$_POST["email"]."'";
				$result = mysqli_query($conn,$query);
				$count = mysqli_num_rows($result);
				
				if($count>0){
					
					echo"<span style = 'color:red !important;'>email is not available</span>";
				    echo"<script>$('#signup').prop('disable',true);</script>";
				}
				else{
					
					echo"<span style = 'color:green !important;'>email is available</span>";
				    echo"<script>$('#signup').prop('disable',true);</script>";
				}
			}else{
				echo"<span style = 'color:blue'>email is empty</span>";
			}
?>