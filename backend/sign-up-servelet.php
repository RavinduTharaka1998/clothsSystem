<?php

   require_once('../connection.php');

    if (isset($_POST['signup'])){

    $name     =  $_POST['name'];
    $email      =  $_POST['email'];
    $password      =  $_POST['password'];

						$pass = password_hash($password, PASSWORD_DEFAULT);

						$sql = "INSERT INTO customer(name,email,password) VALUES(?,?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('SQL statement faild!');</script>";
							header("location:../signup.php");
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "sss", $name,$email,$pass);
							
							mysqli_stmt_execute($stmt);
							
							echo "<script>alert('Registration Successful..Hi!! $name'); window.location.href='../sign-in.php';</script>";
						}
		
	}
					
?>