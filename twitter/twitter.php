<?php
/**
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
/*ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
*/
require_once('oauth/twitteroauth.php');
require_once('twitter_class.php');

//if(isset($_GET['connect']) && $_GET['connect'] == 'twitter'){
	$objTwitterApi = new TwitterLoginAPI;
	$return = $objTwitterApi->login_twitter('twitter');
	if($return['error']){
		echo $return['error'];
	}else{
	//echo $return['url'];
		header('location:'.$return['url']);
		exit;
	}
	
//}
/*
		//if($_REQUEST['connected']){ 
			$objTwitterApi = new TwitterLoginAPI;
			$return = $objTwitterApi->view();
		 $str=explode("@",$return['email']);
 $username=$str[0];
 $curl = curl_init();
 $emailid=$return['email'];
 $twitterid=$return['id'];
 $profilepic=$return['profile_image_url'];
 $name=$return['name'];
$url='http://whennwemet.com/whennwemet/v1/CreateTwitterUser'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "username=$username & name=$name & emailid=$emailid & twitterid=$twitterid & profilepic=$profilepic",
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
$_SESSION["SESS_Emailid"]=$return['email'];
//echo $_SESSION["SESS_Emailid"];
header("location: ../profile");
}else{
$_SESSION["error"]=$response->error;
$_SESSION["message"]=$response->message;
}
 }
			
	
	//} 
*/	?>

