<?php

$sql = "CREATE TABLE `emailDB` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pincode` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL
)";

$host='localhost';
$username='root';
$password='';
$dbase='test_sample';

$conn = mysqli_connect($host,$username,$password,$dbase);

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
