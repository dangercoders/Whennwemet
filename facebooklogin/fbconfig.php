<?php
session_start();
// added in v4.0.0

require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '2021272528104107','a5c5c03f3b02e39004d0f92c35a6dd66' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://whennwemet.com/facebooklogin/fbconfig.php' );
    
    /*try {
  $accessToken = $helper->getAccessToken();
  echo $accessToken;
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
    */
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me?fields=name,first_name,last_name,email,link,gender,locale,picture' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	    //$friends=$graphObject->getProperty('friends');
	    $picture='https://graph.facebook.com/'.$fbid.'/picture?type=large';
	    $response = array();
      $response["user"] = array();
       $user= array();
       /*
       $request = new FacebookRequest(
  $session,
  'GET',
  '/me/taggable_friends'
);
*/
 $str=explode("@",$femail);
 $username=$str[0];
 $curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/CreateFbUser'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "username=$username & name=$fbfullname & emailid=$femail & fbid=$fbid & profilepic=$picture",
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
$_SESSION["SESS_Emailid"]=$femail;
//echo $_SESSION["SESS_Emailid"];
header("location: ../profile");
}else{
$_SESSION["error"]=$response->error;
$_SESSION["message"]=$response->message;
}
 }

} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>