<?php

$servername = "remotemysql.com";
$username = "MhPhYxUSqu";
$password= "SqnTg1cKqC";
$database = "MhPhYxUSqu";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry Cannot Connect".mysqli_connect_error());
}
?>
