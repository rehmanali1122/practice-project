<?php
$server = "localhost";
$username = "root";
$database = "project";
$password = "";

// Create connection
$connection = new mysqli($server,$username,$password,$database);

// Check connection
if ($connection->connect_error) {
  echo "error ". $connnection->connect_error;
}
else{
	$id = $_GET['name'];
	$fname = $_GET['email'];
	$lname =$_GET['message'];
	$sql = "INSERT INTO `contact_form`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
	
	if ($connection->query($sql)) {	
		$sql = " SELECT * FROM  'contact_form' order by name DESC";
		$result = $connect->query($sql);
		$result = $result->fetch_array();
		echo "<pre>";
		print_r($result);
		die;
		foreach ($result as $key => $value) {
			echo $value;
		}
	}
}


?>