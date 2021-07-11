<?php 

$server = "root";
$user = "root";
$pass = "";
$database = "asd";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
