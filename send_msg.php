

<?php

$otp= mt_rand(10, 10000);
setcookie('otp', $otp);

if (isset($_REQUEST['send_msg']))
{
    $mobile= $_REQUEST['mobile'];
   
    setcookie('otp', $otp);

    $fields = array(
        "variables_values" => "$otp",
        "route" => "otp",
        "numbers" => "$mobile",
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "authorization: er01MzUlF5chE3aYnKqSvP872sImwVdRHCokxjfpOWguybtiA6HiBvmEWp0A6U1zTkVdOe8GaMth9K2X",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
      )
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else 
    {
        header('location: patotp.php');
      echo $response;
    }

}
if (isset($_POST['otp_msg']))
{
  $otp=$_POST['otp'];
   

  

  if($_COOKIE['otp'] == $otp)
  {
    header('location: patdash.php');
  }
  else{
      echo "incorrect otp";
  }

}





 ?>
