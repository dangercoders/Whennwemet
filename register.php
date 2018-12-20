<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if(((isset($_POST['signupusername']))&&(isset($_POST['signupemailid']))&&(isset($_POST['signuppassword'])))||(isset($_POST['signupmobile']))){

 $name=strip_tags(trim($_POST['signupusername']));
 $password=strip_tags(trim($_POST['signuppassword']));
 $phone=strip_tags(trim($_POST['signupmobile']));
 $emailid=strip_tags(trim($_POST['signupemailid']));
 $str=explode("@",$emailid);
 $username=$str[0];
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/CreateUser'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "username=$username & name=$name & emailid=$emailid & password=$password & phone=$phone",
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
if(isset($_SESSION["usershare"])){
$shareuser=$_SESSION["usershare"];
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/UpdateCredit'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "username=$username & emailid=$emailid & shareuser=$shareuser",
 CURLOPT_HTTPHEADER => array(
   "accept: application/json",
   "cache-control: no-cache",
   "content-type: application/x-www-form-urlencoded"
 ),
));
 
$response1 = json_decode(curl_exec($curl));
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
$_SESSION["error"]='true';
$_SESSION["message"]= $err;
 echo "cURL Error #:" . $err;
} else {
if($response1->error=="false"){
 unset($_SESSION["usershare"]);
header("location: /profile");
}else{
$_SESSION["error"]=$response1->error;
$_SESSION["message"]=$response1->message;
echo $response1->message;
}
 }
 
}else{
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