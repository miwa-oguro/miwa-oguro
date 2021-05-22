<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "activity";
	
	$conn = new mysqli ($servername, $username, $password,$dbname);
	
	if($conn->connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}
	
	$sql = "create table Student (
		BorrowerNo varchar(10) primary key,
		FirstName varchar(50) not null,
		LastName varchar(50) not null,
		MiddleName varchar(50) not null,
		Section varchar(10) not null,
		DateIssued varchar(10) not null,
		ContactNo varchar(11) not null)";
		
	if($conn->query($sql) === true) {
		echo "Table created successfully";
	}else{
		echo "Error creating table: " . $conn->error;
	}
	$conn->close();
?>
	