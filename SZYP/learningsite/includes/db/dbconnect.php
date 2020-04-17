<?php
$mysqli = new mysqli("localhost", "root", "", "learningsite");
if($mysqli->connect_error) {
	exit('Error connecting to database: ' . $mysqli->connect_error); //Should be a message a typical user could understand in production
}
$mysqli->set_charset("utf8mb4");

?>
