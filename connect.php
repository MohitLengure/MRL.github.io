<?php
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$Mobile=$_POST['Mobile'];
			$email=$_POST['email'];
			$Meassage=$_POST['Meassage'];
			$Gender=$_POST['Gender'];


			//database connection
			$con= new mysqli('localhost','root','','register');
			if($conn->connect_error)
			{
				die('Connection Failed : '.$conn->connect_error);
			}
			else
			{
				$stmt=$conn->prepare("insert into record(fname,lname,Mobile,email,Meassage,Gender) values(?, ?, ?, ?, ?, ?)");
				$stmt->blind_param("ssisss",$fname,$lname,$Mobile,$email,$Meassage,$Gender);
				$stmt->execute();
				echo"Registraction Successfully";
				$stmt->close();
				$conn->close();
			}
		
		?>

	