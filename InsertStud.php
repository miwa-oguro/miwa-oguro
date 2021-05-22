<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "activity";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
		
	if($conn->connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}
	$sql = "insert into Student (BorrowerNo, FirstName, LastName, MiddleName, Section, DateIssued, ContactNo) 
	value ('19-20196','Miwa','Oguro','Diaz','SBIT-2F','07/09/2019','09265300826')";
	
	if($conn->query($sql) === true){
		echo "New Record created successfully!";
	}else{
		echo "Error inserting data: " . "<br>" . $conn->error;
	}
	$conn->close();
?>