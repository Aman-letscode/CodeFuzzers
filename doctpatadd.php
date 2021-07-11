<?php
include 'dbconnect.php';
$insert=false;
if(isset($_POST['name'])) {

$date =$_POST['date'];
$name =$_POST['name'];
$treatment =$_POST['treatment'];
$Status =$_POST['Status'];
$file_temp = $_FILES["Prescriptions"]["tmp_name"];
$file_new = $_FILES["Prescriptions"]["name"];
$sql = "INSERT INTO `MhPhYxUSqu`.`historyform` ( `date`, `name`, `treatment`, `Status`, `Prescriptions`) VALUES ( '$date', '$name', '$treatment', '$Status', '$file_new');";
// echo $sql;
move_uploaded_file($file_temp,'doc/'.$file_new);
if($conn-> query($sql)==true){
    // echo "data inserted sucessfully ";

    $insert=true;
    echo '<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
        <title>Health Care Doc</title>
       
      </head>
      <body>
        <script>
          document.getElementsByTagName("h1")[0].style.border="5px solid white";
        </script>
        <h1 class="bg-info text-white">HealthCare Managment</h1>
    
    
    <header>
        <!--NAVIGATION BAR-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                      <img src="logo0.png" alt="" width="60" height="48" class="d-inline-block align-text-top">
                      Health Care Doc
                    </a>
                  </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link active" href="about.html">About</a>
                  </li>
                 
                  <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="hospital.html">Hospitals</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="patienthistory.html">Patient History</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="insurance.html">Insurances</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="ambulancenearme.html">Ambulance Near Me</a></li>
                    </ul>
                  </li>
                </ul>
               
              </div>
            </div>
          </nav>
        </header>
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    <div class="text-center">
    
        <img src="tick.jpg" height="200">
        
        
        <h6>Record added Successfully!!</h6>
      <br>
      <br>
      <h4 class="text-center">Return to <button type="submit" class="btn btn-danger btn-sm"><a href="doctpathis.php"><h4 class="text-white">Medical History</h4></a></button> 
    
    </div>
    
    
        <!-- Footer -->
    <footer class="page-footer font-small bg-info pt-4">
    
      <!-- Footer Links -->
      <div class="container-fluid text-center p-md-3">
    
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-3">
    
            <!-- Content -->
            <a class="nav-link text-white" href="index.html">
              <img src="logo0.png" alt="" width="60" height="48">
              Health Care Doc
            </a>
            <p>It is often said that nothing happens unless there is a dream first. At the genesis of the HealthCare Managment System story, there was a dream. A dream so powerful, that it helped transform the medical landscape in India.We Are Providing You Data of Your Medical History.<br>Join Us And Grow More.<a href="#">Read More</a></p>
            <a href="#"></a><i class="fab fa-facebook-square"></i></a>
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none pb-3">
    
          <!-- Grid column -->
          <div class="col-md-3">
             <div class="text-right">
            <!-- Links -->
            <h5 class="text-white">Important Links</h5>
    
            <ul class="list-unstyled">
              <li>
                <a href="privacypolicy.html" class="text-dark" >Privacy Policy</a>
              </li>
              <li>
                <a href="reviews.html" class="text-dark">Reviews</a>
              </li>
              <li>
                <a href="contact.html" class="text-dark">Contacts</a>
              </li>
              <li>
                <a href="socialmedia.html" class="text-dark">Social Media</a>
              </li>
            </ul>
          </div>
          </div>
          <div class="col-md-3">
            <h5 class="text-white">Our Services</h5>
            <ul class="list-unstyled">
              <li>
                <a href="hospital.html" class="text-dark" >Hospitals</a>
              </li>
              <li>
                <a href="patienthistory.html" class="text-dark">Patient History</a>
              </li>
              <li>
                <a href="insurance.html" class="text-dark">Insurance</a>
              </li>
              <li>
                <a href="ambulancenearme.html" class="text-dark">Ambulance Near you</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="text-white">Reach Us</h5>
            <ul class="list-unstyled">
              <li>
                <a class="p1 text-dark" href="tel:+919322348443" ><i class="fas fa-mobile-alt"></i>+91-9322348443</a>
              </li>
              <li>
                <a href="#!" class="p1 text-dark">HealthCare@gmail.com</a>
              </li>
             
            </ul>
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
         
          <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
    
      
    
    
    
      </div>    
      
        <!-- Copyright -->
        <div class="container-fluid bg-dark text-white text-center py-3">© 2021 Copyright:
          <a href="https://mdbootstrap.com/"> HealthCare Managment</a>
        </div>
        <!-- Copyright -->
      
      </footer>
    </div>
      <!-- Footer -->
      </body>
    </html>';
}
else
{


    echo "Error:$sql <br> $conn->error";
}




$conn->close(); 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Health Care Doc</title>

    <style>
        div.doctpatdashtop{
          background-color: darkgray;
        }
      </style>


   
  </head>
  <body>
    <script>
      document.getElementsByTagName("h1")[0].style.border="5px solid white";
    </script>
    <h1 class="bg-info text-white">HealthCare Managment</h1>


<header>
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                  <img src="logo0.png" alt="" width="60" height="48" class="d-inline-block align-text-top">
                  Health Care Doc
                </a>
              </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="about.html">About</a>
              </li>
             
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="hospital.html">Hospitals</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="patienthistory.html">Patient History</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="insurance.html">Insurances</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="ambulancenearme.html">Ambulance Near Me</a></li>
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    </header>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
<br>
    <div class="doctpatdashtop">
        <div class="breadcrumps-section">
          <div class="container my-4row">
            <div class="col-md-12">
              <h2>Dashboard</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-items"><a href="index.html" class="text-dark">Home </a></li>
                <li class="breadcrumb-items"><a href="logdoct.html" class="text-dark"> > Log in as doctor </a></li>
                <li class="breadcrumb-items"> <a href="doctpathis.php" class="text-dark"> > Medical History </a></li>
                <li class="breadcrumb-items active">  > Add Data</li>  
            </ol>
            </div>
          </div>
        </div>
      </div>

    <br>
<div class="container">
    <form action="doctpatadd.php" method="POST" name="myForm" enctype="multipart/form-data" required>

      <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date:</label>
        <div class="col-sm-10">
           <input type="date" id="date" name="date" required>
        </div>
    </div>
        <br>

        <div class="form-group row">
          <label for="consulted" class="col-sm-2 col-form-label">Consultated By :-</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="consult" placeholder="Consultated by" name="name" required>
          </div>
      </div>
      <br>

        <div class="form-group row">
            <label for="treatment" class="col-sm-2 col-form-label">Treatment :-</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="treatment" placeholder="Enter the Treatment" name="treatment" required>
            </div>
        </div>
        <br>
        
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status :-</label>
            <div class="col-sm-10">
                <input type="text"  name="Status" class="form-control" id="status" placeholder="Enter Status" required>
  
            </div>
        </div>
        <br>
        
      
        <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Prescriptions:</label>
        <div class="col-sm-10">
           <input type="file" id="date" name="Prescriptions" required>
        </div>
    </div>
        

    <br>
        
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="text-white bg-dark" >ADD</button>
            </div>
        </div>
        <br>
    </form>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small bg-info pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center p-md-3">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3">

        <!-- Content -->
        <a class="nav-link text-white" href="index.html">
          <img src="logo0.png" alt="" width="60" height="48">
          Health Care Doc
        </a>
        <p>It is often said that nothing happens unless there is a dream first. At the genesis of the HealthCare Managment System story, there was a dream. A dream so powerful, that it helped transform the medical landscape in India.We Are Providing You Data of Your Medical History.<br>Join Us And Grow More.<a href="#">Read More</a></p>
        <a href="#"></a><i class="fab fa-facebook-square"></i></a>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3">
         <div class="text-right">
        <!-- Links -->
        <h5 class="text-white">Important Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="privacypolicy.html" class="text-dark" >Privacy Policy</a>
          </li>
          <li>
            <a href="reviews.html" class="text-dark">Reviews</a>
          </li>
          <li>
            <a href="contact.html" class="text-dark">Contacts</a>
          </li>
          <li>
            <a href="socialmedia.html" class="text-dark">Social Media</a>
          </li>
        </ul>
      </div>
      </div>
      <div class="col-md-3">
        <h5 class="text-white">Our Services</h5>
        <ul class="list-unstyled">
          <li>
            <a href="hospital.html" class="text-dark" >Hospitals</a>
          </li>
          <li>
            <a href="patienthistory.html" class="text-dark">Patient History</a>
          </li>
          <li>
            <a href="insurance.html" class="text-dark">Insurance</a>
          </li>
          <li>
            <a href="ambulancenearme.html" class="text-dark">Ambulance Near you</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="text-white">Reach Us</h5>
        <ul class="list-unstyled">
          <li>
            <a class="p1 text-dark" href="tel:+919322348443" ><i class="fas fa-mobile-alt"></i>+91-9322348443</a>
          </li>
          <li>
            <a href="#!" class="p1 text-dark">HealthCare@gmail.com</a>
          </li>
         
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
     
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  



  </div>    
  
    <!-- Copyright -->
    <div class="container-fluid bg-dark text-white text-center py-3">© 2021 Copyright:
      <a href="https://mdbootstrap.com/"> HealthCare Managment</a>
    </div>
    <!-- Copyright -->
  
  </footer>
</div>
  <!-- Footer -->

  </body>
</html>
