<?php
include('connection.php');

$query="CREATE TABLE emp(Empid INT AUTO_INCREMENT PRIMARY KEY,Name varchar(15),email varchar(15))";
$sql=mysqli_query($conn, $query);
if($sql){
	echo "echo table created";
}
else{
	echo "table not created";
}
mysqli_close($conn);
?>