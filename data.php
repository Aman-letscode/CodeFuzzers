<?php
$server = "localhost";
$username ="root";
$password = "";
$database ="form";
 
$con  = mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("gddgggajgag " . mysqli_connect_error());
}
//  echo "yes";
$sql = "SELECT * FROM `forms`";
$result = mysqli_query($con,$sql);
$num= mysqli_num_rows($result);


// echo $num;
if($num>0)
{
    

    while($row = mysqli_fetch_assoc($result)){
        $items[] = $row;
    }
    
    $items = array_reverse($items ,true);
    
    









//     while($row=mysqli_fetch_assoc($result)
//     )
//    {  //echo var_dump($row);
//     echo $row['serial number'] . "  " . $row['date'] . "  " . $row['name'] . "  " . $row['treatment'];
//         echo "<br>";

//     }

}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

     <style>
     .table{

         background-color:black;
         color:white;
         width:100vw;
     height:100vh;
     }
     tbody { width:100vw;
     height:100vh;

     }
     thead-dark{
        width:100vw;
     height:100vh;
     
     }
     .border{
        border:2px solid white;

     }
     navbar{

        position:relative;
        left:92vw;
        color:red;
         text-decoration:none;
     }
     </style>
 </head>
 <body>
 <navbar><a href="form.php" class="form">History form</a></navbar>

<table class="table">
  <thead class="thead-light">
    <tr class="border">
      <!-- <th scope="col"  class="border">#</th> -->
      <th scope="col" class="border">Date</th>
      <th scope="col" class="border">Consulted by</th>
      <th scope="col" class="border">Treatment</th>
    </tr>
  </thead>
  <tbody> 
<?php
foreach($items as $item){
    //    echo $item['date']." - ".$item['name']." - ".$item['treatment'];
    //    echo "<br>";

?>

    
  



    <tr>
    <!-- <th scope="row" class="border"><?php echo $item['Serial number'] ?></th> -->
    <td class="border"> <?php echo $item['date'] ?></td>
    <td class="border"><?php echo $item['name'] ?></td>
    <td class="border"><?php echo $item['treatment'] ?></td>
  </tr>

<?php
   }


  ?>









    
     
  </tbody>
</table>










     
 </body>
 </html>


