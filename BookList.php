<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "activity";
	
	$conn = new mysqli ($servername, $username, $password,$dbname);
	
	if($conn->connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}
	
	$sql = "create table Books (
		ISBN varchar(15) primary key,
		Title varchar(50) not null,
		Author varchar(50) not null,
		Year int(4) not null,
		Genre varchar(20) not null)";
		
	if($conn->query($sql) === true) {
		echo "Table created successfully";
	}else{
		echo "Error creating table: " . $conn->error;
	}
	$conn->close();