<?php
   if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password= "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    // echo "Success connecting to the db ";
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $allergy = $_POST['allergy'];
    $treatment = $_POST['treatment'];
    $report = $_POST['report'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone = $_POST['aadhar'];
    $phone = $_POST['disease'];
    $phone = $_POST['dob'];


    $sql="INSERT INTO `marriz`.`marriz` (`name`, `age`, `gender`, `bloodgroup`, `allergy`, `treatment`, `report`, `email`, `phone`, `dt`) VALUES ('$name', '$age', '$gender', '$blood_group', '$allergy', '$treatment', '$report', '$email', '$phone', current_timestamp());";
     
    // echo $sql;


    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>