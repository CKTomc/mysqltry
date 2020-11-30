<?php
$server='localhost';
$user='root';
$password='';
$conn= new mysqli($server,$user,$password);
if ($conn->connect_error) {die('Connection failed!' . $conn->connect_error);}
echo 'Successfully connected.';
$sql='select name,email from users';
$result=$conn->query($sql);
if ($result->num_rows > 0)
 {
 	while($row=$result->fetch_assoc()){
 		echo $row['name'] . $row['email'] . '<br>';
 	}
 }
 else { echo 'No entries found.';}
 $conn->close();
?>

//$last_id=$conn->insert_id; for getting last inserted row
