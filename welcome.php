<?php 
$connection = new mysqli("localhost", "root", "", "login"); // de connection selecteerd de db login
$username = $_POST['name']; // we pakken de post waarde die in de vorige file door name="" word gezet
$password = $_POST['password']; // we pakken de post waarde die in de vorige file door name="" word gezet
$lname = $_POST['lname'];

$sql = "INSERT INTO users (username, password, lastname)VALUES('$username', '$password', '$lname')"; // insert de data

$result = $connection->query($sql); // 

if($result){ // kijken of het lukt
	echo "Done";
}else{
	echo "Error: de data is niet in de db gezet";
}

echo "Welcome ".$username." ".$lname." , your registered with the password: " . $password;


?>