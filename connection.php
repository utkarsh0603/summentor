<?php

$servername="localhost:3306";
$username="root";
$password="your_password";
$dbname="summentor";

$mysqli= new mysqli($servername,$username,$password,$dbname);
if($mysqli->connect_error){
die("Connection failed: " . $conn->connect_error);
}
else echo "successful" ;
?>