<?php
session_start();

switch ($_POST["action"]) {
  case "send_otp":

  $curl = curl_init();
  $api = "YOUR API KEY";  // Enter your API key get one on https://2factor.in
  $mobile_number = $_POST['mobile_number'];
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $utm_medium = $_POST['utm_medium'];
  $utm_source = $_POST['utm_source'];
  $utm_campaign = $_POST['utm_campaign'];
  $otp = rand(100000, 999999);
  $_SESSION['session_mobile_number'] = $mobile_number;
  $_SESSION['session_customer_name'] = $customer_name;
  $_SESSION['session_customer_email'] = $customer_email;
  $_SESSION['session_utm_medium'] = $utm_medium;
  $_SESSION['session_utm_source'] = $utm_source;
  $_SESSION['session_utm_campaign'] = $utm_campaign;
  $_SESSION['session_otp'] = $otp;


  $url = "http://2factor.in/API/V1/".$api."/SMS/".$mobile_number."/".$otp;

  try{

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);



    if ($err) {
      /* Display error */
      echo "cURL Error #:" . $err;
    } else {

      $obj = json_decode($response);
      $status = $obj->{'Status'};


      if ($status == "Success") {
        // Display sent OTP for development purpose - DELETE IN PRODUCTION
        echo "<br>OTP: ";
        echo $otp;
        //

        require_once ("verification-form.php");


      }

      else {
        echo "Status:";
        echo $status;
        echo "<br>Details:";
        echo $obj->{'Details'};

        echo "<input type='button' class='btnSubmit' value='Retry' onclick='window.location.reload()'>";

      }


    };


    exit();


  }catch(Exception $e){
   die('Error: '.$e->getMessage());
 }
 break;

 case "verify_otp":
 $otp = $_POST['otp'];



 if ($otp == $_SESSION['session_otp']) {
   unset($_SESSION['session_otp']);

   $mobile_number = $_SESSION['session_mobile_number'];
   $customer_name = $_SESSION['session_customer_name'];
   $customer_email = $_SESSION['session_customer_email'];
   $utm_medium =  $_SESSION['session_utm_medium'];
   $utm_source = $_SESSION['session_utm_source'];
   $utm_campaign = $_SESSION['session_utm_campaign'];


   require_once ("order-form.php");
 } else {
  echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
}
break;
}



?>