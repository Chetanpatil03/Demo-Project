<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="EcoPrime_DB";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn) {
    // echo"connection successfull";
}
else {
    echo"connection unsuccessfull " .mysqli_connect_error();
}

?>