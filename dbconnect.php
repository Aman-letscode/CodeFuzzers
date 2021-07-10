<?php

$servername = "localhost";
$username = "MhPhYxUSqu";
$password= "g461ABoIH0";
$database = "MhPhYxUSqu";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry Cannot Connect".mysqli_connect_error());
}
?>
