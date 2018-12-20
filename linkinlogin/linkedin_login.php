<?php
require('http.php');
require('oauth_client.php');
require('config.php');

if ($_GET["oauth_problem"] <> "") {
  // in case if user cancel the login. redirect back to home page.
  $_SESSION["e_msg"] = $_GET["oauth_problem"];
  header("location:index.php");
  exit;
}

$client = new oauth_client_class;


$client->debug = false;
$client->debug_http = true;
$client->redirect_uri = REDIRECT_URL;

$client->client_id = API_KEY;
$application_line = __LINE__;
$client->client_secret = SECRET_KEY;

if (strlen($client->client_id) == 0 || strlen($client->client_secret) == 0)
  die('Please go to LinkedIn Apps page https://www.linkedin.com/secure/developer?newapp= , '.
			'create an application, and in the line '.$application_line.
			' set the client_id to Consumer key and client_secret with Consumer secret. '.
			'The Callback URL must be '.$client->redirect_uri).' Make sure you enable the '.
			'necessary permissions to execute the API calls your application needs.';

/* API permissions
 */
$client->scope = SCOPE;
if (($success = $client->Initialize())) {
  if (($success = $client->Process())) {
    if (strlen($client->authorization_error)) {
      $client->error = $client->authorization_error;
      $success = false;
    } elseif (strlen($client->access_token)) {
      $success = $client->CallAPI(
					'http://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url,public-profile-url,formatted-name)', 
					'GET', array(
						'format'=>'json'
					), array('FailOnAccessError'=>true), $user);
    }
  }
  $success = $client->Finalize($success);
}
if ($client->exit) exit;
if ($success) {
$str=explode("@",$user->emailAddress);
 $username=$str[0];
 $curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/CreateLinkUser'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "username=$username & name=$user->formattedName & emailid=$user->emailAddress & linkid=$user->id & profilepic=$user->pictureUrl",
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
$_SESSION["SESS_Emailid"]=$user->emailAddress;
header("location:../profile");
exit;
}else{
$_SESSION["error"]=$response->error;
$_SESSION["message"]=$response->message;
}
 }
 }else {
 $_SESSION["error"]='true';
$_SESSION["message"]=$client->error;
}
//header("location:../profile");
//exit;
?>