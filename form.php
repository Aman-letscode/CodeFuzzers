<?php
$insert=false;
if(isset($_POST['name'])) {
$server = "localhost";
$username ="root";
$password = "";
$database ="form";
 
$con  = mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("gddgggajgag " . mysqli_connect_error());
}
// echo "yes";

$date =$_POST['date'];
$name =$_POST['name'];
$treatment =$_POST['treatment'];
$sql = "INSERT INTO `form`.`forms` ( `date`, `name`, `treatment`) VALUES ( '$date', '$name', '$treatment');";
// echo $sql;
if($con-> query($sql)==true){
    // echo "data inserted sucessfully ";

    $insert=true;
}
else
{


    echo "Error:$sql <br> $con->error";
}






$con->close(); 
}

?>  

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

.container1{

position: absolute;
    width: 100%;
    height:100%;
    z-index:-1;
    opacity:0.7;
    
   
}
h2{

    color: black;
}
.cotainer{
    margin-top: 10vh;
    color: black;
}

.form-control{background: transparent;
border:2px solid black;}
.form-group{
    background: transparent;
    
}


.submitmessage{

  color: brown;
  justify-content: center;
}
.medihis{
    position: relative;
    left:8vw;
color:black;
font-weight:bolder;
font-size:large;

}
</style>


</head>
<body >
<img src="bill-oxford-8u_2imJaVQs-unsplash.jpg" alt="" class="container1">
<?php
    
    
?>
<div class="container">
  
  <h2>Horizontal form</h2>
  <a href="data.php" class="medihis">MED-HISTORY</a>
  <form class="form-horizontal" action="form.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color: black;">Date of starting the treatment:</label>
      <div class="col-sm-10">
        <input type="date" maxlength="10" placeholder="dd/mm/yyyy" name="date"
    oninput="this.value = DDMMYYYY(this.value, event)"  class="form-group"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color: black;" >Consulted by:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"     id="pwd" placeholder="Enter Docter name" name="name">

      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd" style="color: black; font-weight: bold;">Treatment:</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="pwd" placeholder="Treatment type" name="treatment">
          
        </div>
      </div>
      






    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember" style="color: black;"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="form-group"  style="color: black;">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
 
