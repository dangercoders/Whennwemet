<?php
header('Access-Control-Allow-Origin: *');
if((($_POST['name']!=null)||($_POST['name']!=''))&&(($_POST['message']!=null)||($_POST['message']!=''))){
if(($_POST['senderid']!=null)||($_POST['senderid']!='')){
$senderid=$_POST['senderid'];
}else{
$senderid=0;
}

$sendername=$_POST['name'];
$msg=$_POST['message'];
$receiverid=$_POST['userid'];
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/submitmsg'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "name=$sendername & msg=$msg & receiverid=$receiverid & senderid=$senderid",
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
 echo "cURL Error #:" . $err;
} else {

$user_email='friendsforever@whennwemet.com';
//$user_email='shubhamagarwal@whennwemet.com';
    $to = $response->emailid;
    // $to = 'shiksha000@gmail.com';
$subject = "New Message From Your FirstMate";
 $FullName=$response->name;
 $fcmid=$response->fcmid;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: <shubhamagarwal.co.in>' . "\r\n"; 
// Create email headers
$headers .= 'From: '.$user_email."\r\n".
    'Reply-To: '.$user_email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message

$message =  '<html xmlns="http://www.w3.org/1999/xhtml">';
$message .= '<head>';
$message .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$message .= '</head>';
$message .= '<body>';
$message .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$message .= ' <tr>';
$message .=  '<td align="center" valign="top" bgcolor="#f6f3e4" style="background-color:#f6f3e4;"><br>';
$message .= ' <br>';
$message .= ' <table width="800" border="0" cellspacing="0" cellpadding="0">';
$message .= '  <tr>';
$message .= '<td align="center" valign="top" style="padding-left:13px; padding-right:13px; background-color:#ffffff;"><table width="100%" border="0"            cellspacing="0" cellpadding="0">';
$message .= '          <tr>';
$message .= ' <td><table width="84" border="0" cellspacing="0" cellpadding="0">';
$message .= '<tr>';
$message .= '<td align="left" valign="middle" style="padding-top:15px;"><img src="http://whennwemet.com/img/logo.jpg" width="300" height="100"></td>';
$message .='        </tr>';
$message .='         </table></td>';
$message .=' </tr>';
$message .='          <tr>';
$message .='             <div><br>';
$message .='             </div>';
$message .='<td align="center" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; font-size:40px;"><i> Whenn We Met</i></td>';
$message .='  </tr>';
$message .='     <tr>';
$message .=' <td align="center" valign="middle" style="padding-top:7px;"><table width="240" border="0" cellspacing="0" cellpadding="0"> <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .=' </tr>';
$message .=' </table></td>';
$message .=' </tr>';
/*
$message .=' <tr>';
$message .='<td align="center" valign="middle" style="padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/header.jpg" width="800" height="243" style="display:block;"></td>';
$message .=' </tr>';

$message .=' <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .=' </tr>'; */
$message .='  <tr>';
$message .='<td align="center" valign="middle" style="font-family: CinzelDecorative-Regular.ttf,Georgia, Times New Roman, Times, serif; color:#000000; font-size:24px; padding-bottom:5px;"><i>Hello ,'.$FullName.'</i>';
$message .='  <tr>';
$message .='<td align="left" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; color:#000000; font-size:15px;">Your First Mate Send You  Message </br><p>'.$msg.'</p><a href="http://whennwemet.com/profile/message.php"> Guess Your Mate </a></div>';
$message .='  <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .='  </tr>';
$message .='         <tr>';
$message .='<td align="left" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#000000;">';
$message .='<div style="color:#b30467; font-size:15px;"><b>Contact Us</b></div>';
$message .='               <br>';
             
              
$message .='               <div><br>';
 $message .='               WhennWeMet<br>';
$message .='friendsforever@whennwemet.com,   <br>';
$message .='Andheri East,Mumbai,<br>';
$message .='8077921769 ';
$message .='400069<br>';
$message .='<br>';
$message .='<br>';
$message .='<br>';
$message .='              </div></td>';
$message .='          </tr>';
$message .='        </table></td>';
$message .='      </tr>';
$message .='    </table>';
$message .='    <br>';
$message .='    <br></td>';
$message .='  </tr>';
$message .='  <tr>';
$message .='    <td align="center" valign="top">&nbsp;</td>';
$message .='  </tr>';
$message .='</table> ';
$message .='</body>';
$message .='</html>';
            
// Sending email
mail($to, $subject, $message, $headers);

if($response->fcmid!=null){
 //$response->fcmid;
#API access key from Google API's Console
  //  define( 'API_ACCESS_KEY', 'AAAAEa4vszE:APA91bFtudP0zvohvcCZTOUE1r3ZhLstW9VazJlqm2tesNizeiHLQuTlK4JoWtcfDdf5rUxr4qWUQCTON3QG4i_fk9GdRbgFKCEsZ2Upo_88uVO31q8hA15a91KilzK9WN0ifyP3CCgL' );
  define( 'API_ACCESS_KEY', 'AAAAuBML32s:APA91bFSMkhJd_HixE5t2hyjCjBkqrKFj9ctnE8B_nw0BcUwbLctHJbBaVJDo4-jHJMSI-BY_8cAg0iNKDSFkheWotVeUasfr3phw_e140Pd-62P6RIWewLiWJZLVvrXx4QgjuhbqTCh' );
    $registrationIds =$response->fcmid;
    //echo $registrationIds;
#prep the bundle
     $msg = array
          (
		'body' 	=> $msg,
		'title'	=> 'New Message From Your Mate',
             	'icon'	=> 'myicon',/*Default Icon*/
              	'sound' => 'mySound'/*Default sound*/
          );
	$fields = array
			(
				'to'		=> $registrationIds,
				'notification'	=> $msg
			);
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
		//echo $result;
#Echo Result Of FireBase Server
}


$response = array();
$response['error']='false';
$response['message']='Your Message Has Been Send To First Mate';
echo json_encode($response);
} 
}
else{
$response = array();
$response['error']='false';
$response['message']='Your Message Could Not Be Send.Please Try Again';
echo json_encode($response);
}
?>