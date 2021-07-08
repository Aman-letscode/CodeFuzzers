<?php
session_start();

header('location:index.html');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'random');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from reg where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
 
if($num == 1){
    echo"username Already taken ";
}
else{
    $reg = " INSERT INTO `reg` (`name`, `password`) VALUES ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful ";
    // INSERT INTO `reg` (`name`, `password`) VALUES ('bit', '111');
}
?>