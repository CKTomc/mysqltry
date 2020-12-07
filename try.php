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
$sql="insert into users values ('khad', 'kkk@gmail.com')";
$sql.="inset into users values('kiki','ccc@gmail.com')";
if ($conn->multiple_query($sql) === TRUE){
echo 'New data inserted!';
$statement=$conn->prepare("insert into users values('koko','www@gmail.com')");
$statement->bind_param('ss',$name,$email);
$name='Khad'
$email='khad@gmail.com'
$statement->execute();
$statement->close();
$conn->close();
?>

//$last_id=$conn->insert_id; for getting last inserted row
//prepare statements protect against sql injections
