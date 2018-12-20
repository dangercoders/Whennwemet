<?php
#API access key from Google API's Console
    define( 'API_ACCESS_KEY', 'AAAAuBML32s:APA91bFSMkhJd_HixE5t2hyjCjBkqrKFj9ctnE8B_nw0BcUwbLctHJbBaVJDo4-jHJMSI-BY_8cAg0iNKDSFkheWotVeUasfr3phw_e140Pd-62P6RIWewLiWJZLVvrXx4QgjuhbqTCh' );
    $registrationIds = 'f7dvuPUy9Qc:APA91bEJVuL7Dbm-x0ffOqSHVWHoUHw648ZL7YJY9_dqNqeExnmqWTOKX0Uv5Fvf0xonJ3INSrHf0rLhyx3uARW7bbfgyG2uiE0MwwadVR2S3vF1sTOAOfcjHvdfsmW1ndxjpbJTmNsx';
#prep the bundle
     $msg = array
          (
		'body' 	=> 'Body  Of Notification',
		'title'	=> 'Title Of Notification',
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
#Echo Result Of FireBase Server
echo $result;