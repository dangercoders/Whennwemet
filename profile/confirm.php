<?php
session_start();
if(isset($_GET['confirmationcode'])) {
$confirmationcode=$_GET['confirmationcode'];
//echo $confirmationcode;
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/confirmation'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "confirmationcode=$confirmationcode",
 CURLOPT_HTTPHEADER => array(
   "accept: application/json",
   "cache-control: no-cache",
   "content-type: application/x-www-form-urlencoded"
 ),
));
 //$response = curl_exec($curl);
$response = json_decode(curl_exec($curl));
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
 echo "cURL Error #:" . $err;
} else {
$_SESSION["error"]='false';
    $_SESSION["message"]="Account Setting Successfully Changed";
header("location: ../");
//require_once dirname(__FILE__) . '../home.html';
    }
    }else{
    $_SESSION["error"]='false';
    $_SESSION["message"]="Account Setting Successfully Changed";
    }
   header("location: ../");
    

?>







