<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "anirban bhowmick";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("conection fail". mysqli_connect_error());
}else{
    //echo"cconection successfully";
}



?>