<?php

$sql = "CREATE TABLE `mycomplaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `img` LONGBLOB
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
