<?php
require_once('../connection.php');

session_start();
if (isset($_POST['signin'])){
          
			$email = $_POST['email'];
			$password=$_POST['password'];
			
			$_SESSION["status"] = false;
			
			$select_user = "select *from customer where email = '$email'";
			
			
			$run_qry = mysqli_query($conn,$select_user);
			if(mysqli_num_rows($run_qry)>0){
				
				while($row = mysqli_fetch_assoc($run_qry)){
					
					if(password_verify($password,$row['password'])){
						 
						 $_SESSION["name"] = $row['name'];
						 $_SESSION["status"] = true;
						 
						 echo "<script>window.location.href='../dashboard.php';</script>";
					}
					else{
                        
						echo "<script>alert('invalid Login Details'); window.location.href='../sign-in.php';</script>";
					}
				}
			}else{
                
				echo "<script>alert('invalid Login Details'); window.location.href='../sign-in.php';</script>";
			}
  
}
?>