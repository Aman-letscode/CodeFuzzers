<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="signpat.css"> -->

    <title>Health Care Doc</title>
   
    <style>
      * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password], input[type=email]:focus, input[type=phone] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #7ce5fa!important;
  
}
:-ms-input-placeholder{
  color: beige;
}
p{
  font-size: 25px;
}


input[type=text]:focus, input[type=password], input[type=email]:focus, input[type=phone] {
  background-color: rgb(132, 159, 233);
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #07696d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.btn {
  font-size: 25px;
  padding: 14px 20px;
  background-color: #11a366;
  color: black;
}
.bttn{
  font-size: 25px;
  padding: 14px 20px;
  background-color: rgb(132, 159, 233);
  color: black;

}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
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
                <a class="nav-link" href="about.html">About</a>
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

    
    <!--Midsignup-->
    <div class="container">
      <h1>Sign up for patient</h1>
      <p>
          Enter your details for sign up 
      </p>
      <form action="" method="post">
          <input type="text" name="name" id="name" placeholder="Enter your name">
          <input type="text" name="age" id="age" placeholder="Enter your age">
          <input type="text" name="gender" id="gender" placeholder="Enter your gender">
          <input type="text" name="blood_group" id="blood_group" placeholder="Enter your blood group">
          
          <input type="text" name="treatment" id="treatment" placeholder="Any other treatment going on">
          
          
          <input type="phone" name="phone" id="phone" placeholder="Enter your contact number">
          <button class="btn">Submit</button>

          
      </form>
      <a href="logpat.html">
          <button class="bttn" a >After submitting , click here to login</button>
          </a>
 
     </div>
    <!--Finish Midsignup-->
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
    
    $treatment = $_POST['treatment'];
    
    $phone = $_POST['phone'];


    // $sql="INSERT INTO `marriz`.`marriz` (`name`, `age`, `gender`, `bloodgroup`, `allergy`, `treatment`, `report`, `email`, `phone`, `dt`) VALUES ('$name', '$age', '$gender', '$blood_group', '$allergy', '$treatment', '$report', '$email', '$phone', current_timestamp());";
     

    $sql="INSERT INTO `signup`.`signup` (`name`, `age`, `gender`, `bloodgroup`, `treatment`, `phone`, `Date`) VALUES ('$name', '$age', '$gender', '$blood_group', '$treatment', '$phone', current_timestamp());";
    // echo $sql;


    if($con->query($sql) == true){
        // echo "Successfully inserted";
        echo '<span style="color:FF0000;text-align:center;">Request has been sent. Please wait for my reply!</span>';
        header('location: index.html');
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}
?>
