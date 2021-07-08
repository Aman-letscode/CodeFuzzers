<?php
session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'random');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from reg where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
 
if($num == 1){
    header('location:patient.php');
}
else{
    header('location:index.html');
    
}
?>