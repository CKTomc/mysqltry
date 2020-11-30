<?php
$server='localhost';
$user='root';
$password='';
$conn= new mysqli(server,user,password)
if ($conn->connect_error) {die('Connection failed!' . $conn->connect_error);}
echo 'Successfully connected.';
?>
