<?php 
session_start();

if(((isset($_POST['signinemail']))&&(isset($_POST['signinpassword'])))){

 $password=strip_tags(trim($_POST['signinpassword']));
 $emailid= strip_tags(trim($_POST['signinemail']));
  $str=explode("@",$emailid);
 $username=$str[0];

$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/UserLogin'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "emailid=$emailid & password=$password",
 CURLOPT_HTTPHEADER => array(
   "accept: application/json",
   "cache-control: no-cache",
   "content-type: application/x-www-form-urlencoded"
 ),
));
 
$response = json_decode(curl_exec($curl));
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
$_SESSION["error"]='true';
$_SESSION["message"]= $err;
 echo "cURL Error #:" . $err;
} else {
if($response->error=="false"){
 $_SESSION["token"]=bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION["SESS_Emailid"]=$emailid;
//echo $_SESSION["SESS_Emailid"];
header("location: /profile");
}else{
$_SESSION["error"]=$response->error;
$_SESSION["message"]=$response->message;
echo $response->message;
}
 }
}

?>