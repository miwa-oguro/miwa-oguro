<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "activity";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
		
	if($conn->connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}
	$sql = "insert into Books (ISBN, Title, Author, Year, Genre) value
							   ('9781455869749', 'The Fault in Our Stars', 'John Green', 2012, 'Novel')";
	
	if($conn->query($sql) === true){
		echo "New Record created successfully!";
	}else{
		echo "Error inserting data: " . "<br>" . $conn->error;
	}
	$conn->close();
?>