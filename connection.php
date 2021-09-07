<?php
	
		$dbcon=mysqli_connect('localhost','root','','information');
	
		
		$name=$_POST['name'];
		$password=$_POST['pass'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		
		
		$sql= "INSERT INTO info (id,name,password,gender,email,phone) values (null,'$name','$password','$gender','$email','$phone')";
		$insert=mysqli_query($dbcon,$sql);
		if($insert)
		{
			echo "Collect your ticket in 5 days.";
			
		}
		else
			echo "data insert  failed";
?>