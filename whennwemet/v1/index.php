<?php

header('Access-Control-Allow-Origin: *');

//including the required files
require_once '../include/DbOperation.php';
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/CreateUser', function () use ($app) {
    verifyRequiredParams(array('username','name', 'emailid', 'password', 'phone'));
    $response = array();
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $password= $app->request->post('password');
    $phone = $app->request->post('phone');
    $username=strip_tags(trim($username));
    $name=strip_tags(trim($name));
 $password=strip_tags(trim($password));
 $phone=strip_tags(trim($phone));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $res = $db->CreateUser($username,$name,$emailid,$password,$phone);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "Confirmation Email Sent to " .$emailid;
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred while registereing";
        echoResponse(200, $response);
    } else if ($res == 2) {
        $response["error"] = 'true';
        $response["message"] = "Sorry, this student  already existed";
        echoResponse(200, $response);
    }
});

/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/CreateGoogleUser', function () use ($app) {
    verifyRequiredParams(array('username','name', 'emailid', 'googleid', 'profilepic'));
    $response = array();
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $googleid= $app->request->post('googleid');
    $profilepic= $app->request->post('profilepic');
    $username=strip_tags(trim($username));
    $name=strip_tags(trim($name));
 $profilepic=strip_tags(trim($profilepic));
 $googleid=strip_tags(trim($googleid));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $res = $db->CreateGoogleUser($username,$name,$emailid,$googleid,$profilepic);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "You are successfully Login";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred while Login";
        echoResponse(200, $response);
    } 
});

/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/CreateFbUser', function () use ($app) {
    verifyRequiredParams(array('username','name', 'emailid', 'fbid', 'profilepic'));
    $response = array();
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $fbid= $app->request->post('fbid');
    $profilepic= $app->request->post('profilepic');
    $username=strip_tags(trim($username));
    $name=strip_tags(trim($name));
 $profilepic=strip_tags(trim($profilepic));
 $fbid=strip_tags(trim($fbid));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $res = $db->CreateFbUser($username,$name,$emailid,$fbid,$profilepic);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "You are successfully Login";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred while Login";
        echoResponse(200, $response);
    } 
});

/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/CreateLinkUser', function () use ($app) {
    verifyRequiredParams(array('username','name', 'emailid', 'linkid', 'profilepic'));
    $response = array();
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $linkid= $app->request->post('linkid');
    $profilepic= $app->request->post('profilepic');
    $username=strip_tags(trim($username));
    $name=strip_tags(trim($name));
 $profilepic=strip_tags(trim($profilepic));
 $linkid=strip_tags(trim($linkid));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $res = $db->CreateLinkUser($username,$name,$emailid,$linkid,$profilepic);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "You are successfully Login";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred while Login";
        echoResponse(200, $response);
    } 
});

/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/CreateTwitterUser', function () use ($app) {
    verifyRequiredParams(array('username','name', 'emailid', 'twitterid', 'profilepic'));
    $response = array();
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $twitterid= $app->request->post('twitterid');
    $profilepic= $app->request->post('profilepic');
    $username=strip_tags(trim($username));
    $name=strip_tags(trim($name));
 $profilepic=strip_tags(trim($profilepic));
 $twitterid=strip_tags(trim($twitterid));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $res = $db->CreateTwitterUser($username,$name,$emailid,$twitterid,$profilepic);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "You are successfully Login";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred while Login";
        echoResponse(200, $response);
    } 
});


/* *
 * URL: http://localhost/StudentApp/v1/createstudent
 * Parameters: name, username, password
 * Method: POST
 * */
$app->post('/UpdateCredit', function () use ($app) {
    verifyRequiredParams(array('username','emailid', 'shareuser'));
    $response = array();
    $username= $app->request->post('username');
    $emailid= $app->request->post('emailid');
    $shareuser= $app->request->post('shareuser');
    $db = new DbOperation();
    $res = $db->updatecredit($username, $emailid,$shareuser);
    if ($res == 0) {
        $response["error"] = 'false';
        $response["message"] = "Credit Update successfully";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = 'true';
        $response["message"] = "Oops! An error occurred";
        echoResponse(200, $response);
    } 
});

$app->post('/CheckUser', function () use ($app) {
    verifyRequiredParams(array('emailid'));
    $response = array();
    $emailid= $app->request->post('emailid');
    $db = new DbOperation();
    $response = array();
    if ($db->CheckUser($emailid)) {
        echo 'false';
    } else {
        echo 'true';
    }
   
});

$app->post('/CheckEmailid', function () use ($app) {
    verifyRequiredParams(array('emailid'));
    $response = array();
    $emailid= $app->request->post('emailid');
    $db = new DbOperation();
    $response = array();
    if ($db->CheckUser($emailid)) {
        $response['error'] = 'false';
        $response['message'] = "This EmailId Already Register";
    } else {
       $response['error'] = 'true';
        $response['message'] = "This EmailId Is Available";
    }
    echoResponse(200, $response);
});


/* *
 * URL: http://localhost/StudentApp/v1/studentlogin
 * Parameters: username, password
 * Method: POST
 * */
$app->post('/UserLogin', function () use ($app) {
    verifyRequiredParams(array('emailid', 'password'));
    $emailid= $app->request->post('emailid');
    $password = $app->request->post('password');
    $password=strip_tags(trim($password));
// $phone=strip_tags(trim($phone));
 $emailid=strip_tags(trim($emailid));
    $db = new DbOperation();
    $response = array();
 
    if ($db->UserLogin($emailid, $password)) {
  //  echo $db->isconfirm($emailid);
    	if ($db->isconfirm($emailid)) {
        $user = $db->getUser($emailid);
        $response['error']='false';
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['apikey'] = $user['api_key'];
    } else {
    		$response['error'] = 'true';
     $response['message'] = "Please Confirm Your Account First.Check Your Email ";
        
    }
    }else{
     $response['error'] = 'true';
        $response['message'] = "Invalid username or password";
    }
    echoResponse(200, $response);
});

//Method to get user detail

$app->post('/GetUser', function () use ($app) {
    verifyRequiredParams(array('useremailid'));
    $useremailid= $app->request->post('useremailid');
    $db = new DbOperation();
    $response = array();
        $user = $db->getUser($useremailid);
        $response['userid'] = $user['userid'];
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['debit'] = $user['debit'];
        $response['apikey'] = $user['api_key'];
    echoResponse(200, $response);
});

$app->post('/deregistration', function () use ($app) {
    verifyRequiredParams(array('deregistrationcode'));
    $deregistrationcode= $app->request->post('deregistrationcode');
    $db = new DbOperation();
    $response = array();
    $user1=$db->getresetemailid($deregistrationcode);
        $user = $db->getUser($user1['emailid']);
        $response['userid'] = $user['userid'];
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['apikey'] = $user['api_key'];
        //$result=$db->deleteresetpassword($deregistrationcode);
        
    echoResponse(200, $response);
});


$app->post('/confirmation', function () use ($app) {
    verifyRequiredParams(array('confirmationcode'));
    $confirmationcode= $app->request->post('confirmationcode');
    $db = new DbOperation();
    $response = array();
    $user1=$db->getresetemailid($confirmationcode);
       // $user = $db->confirmemailid($user1['emailid']);
        if ($db->confirmemailid($user1['emailid'])) {
        $response['error'] = 'false';
        $response['message'] = "Your Account Has Been Confirmed";
    } else {
       $response['error'] = 'true';
        $response['message'] = "This Link Has Been Expired";
    }
       /* $response['userid'] = $user['userid'];
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['apikey'] = $user['api_key'];
       // $result=$db->deleteresetpassword($deregistrationcode);
        */
    echoResponse(200, $response);
});


$app->post('/GetMate', function () use ($app) {
    verifyRequiredParams(array('username'));
    $username= $app->request->post('username');
    $db = new DbOperation();
    $response = array();
        $user = $db->getMate($username);
        $response['userid'] = $user['userid'];
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['apikey'] = $user['api_key'];
    echoResponse(200, $response);
});


/* *
 * URL: http://whennwemet.com/whennwemet/v1/createassignment
 * Parameters: name, msg, receiverid
 * Method: POST
 * */
$app->post('/submitmsg',function() use ($app){
    verifyRequiredParams(array('name','msg','receiverid','senderid'));

    $name = $app->request->post('name');
    $msg = $app->request->post('msg');
    $receiverid= $app->request->post('receiverid');
    $senderid= $app->request->post('senderid');
    
    $db = new DbOperation();

    $response = array();

     $result=$db->submitmsg($name,$msg,$receiverid,$senderid);
     while($row = $result->fetch_assoc()){
      $response['emailid'] = $row['emailid'];
      $response['name'] = $row['name'];
      $response['fcmid'] = $row['fcmid'];

     }
        $response['error'] = 'false';
        $response['message'] = "Message Sent successfully";
    echoResponse(200,$response);

});


$app->post('/fcmId',function() use ($app){
    verifyRequiredParams(array('fcmid','useremailid'));

    $fcmid= $app->request->post('fcmid');
    $useremailid= $app->request->post('useremailid');
    
    $db = new DbOperation();

    $response = array();

    if($db->updatefcmid($fcmid,$useremailid)){
        $response['error'] = false;
        $response['message'] = "fcmid created successfully";
    }else{
        $response['error'] = true;
        $response['message'] = "Could not create fcm";
    }

    echoResponse(200,$response);

});


/* *
 * URL: http://whennwemet.com/whennwemet/v1/createassignment
 * Parameters: name, msg, receiverid
 * Method: POST
 * */
$app->post('/submitmsgsender',function() use ($app){
    verifyRequiredParams(array('name','msg','receiverid','senderid'));

    $name = $app->request->post('name');
    $msg = $app->request->post('msg');
    $receiverid= $app->request->post('receiverid');
    $senderid= $app->request->post('senderid');
    
    $db = new DbOperation();

    $response = array();

     $result=$db->submitmsgsender($name,$msg,$receiverid,$senderid);
     while($row = $result->fetch_assoc()){
      $response['emailid'] = $row['emailid'];
      $response['name'] = $row['name'];
     }
        $response['error'] = 'false';
        $response['message'] = "Message Sent successfully";
    echoResponse(200,$response);

});

/* *
 * URL: http://whennwemet.com/whennwemet/v1/getmessage/<student_id>
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET zyry9243
 * */
$app->get('/getmessage/:id', 'authenticateUser', function($userid) use ($app){
    $db = new DbOperation();
    $result = $db->getmsg($userid);
    $response = array();
    $response['error'] = false;
    $response['messages'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['msgid'] = $row['msgid'];
        $temp['message'] = $row['message'];
        $temp['sendername'] = $row['sendername'];
        $temp['msgtimestamp'] = $row['msgtimestamp'];
        array_push($response['assignments'],$temp);
    }
    echoResponse(200,$response);
});


/* *
 * URL: http://whennwemet.com/whennwemet/v1/getmessage/<student_id>
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET zyry9243
 * */
$app->post('/searchuser', function() use ($app){
verifyRequiredParams(array('query'));
$searchquery= $app->request->post('query');
    $db = new DbOperation();
    $searchquery = preg_replace("/[^A-Za-z0-9]/", " ", $searchquery);
//$searchquery = $db->real_escape_string($searchquery);
//echo $searchquery;
    $result = $db->searchuser($searchquery);
    $response = array();
    $response['error'] = false;
    $response['users'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['name'] = $row['name'];
        $temp['username'] = $row['username'];
        $temp['profilepic'] = $row['profilepic'];
        array_push($response['users'],$temp);
    }
    echoResponse(200,$response);
});


$app->get('/Users/:id', 'authenticateUser', function($userid) use ($app){
    $db = new DbOperation();
    $result = $db->getAllUser($userid);
    $response = array();
    $response['error'] = false;
    $response['messages'] = array();

    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['msgid'] = $row['msgid'];
        $temp['message'] = $row['message'];
        $temp['sendername'] = $row['sendername'];
        $temp['msgtimestamp'] = $row['msgtimestamp'];
        $temp['comments'] = $row['comments'];
        $temp['msglike'] = $row['msglike'];
        array_push($response['messages'],$temp);
    }

    echoResponse(200,$response);
});

$app->get('/sendmessage/:id', 'authenticateUser', function($userid) use ($app){
    $db = new DbOperation();
    $result = $db->getSendMessage($userid);
    $response = array();
    $response['error'] = false;
    $response['messages'] = array();

    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['msgid'] = $row['msgid'];
        $temp['message'] = $row['message'];
        $temp['sendername'] = $row['sendername'];
        $temp['msgtimestamp'] = $row['msgtimestamp'];
        $temp['comments'] = $row['comments'];
        $temp['guessname'] = $row['guessname'];
        $temp['comments'] = $row['comments'];
        $temp['like'] = $row['like'];
        array_push($response['messages'],$temp);
    }

    echoResponse(200,$response);
});


$app->get('/likemessage/:id', 'authenticateUser', function($userid) use ($app){
    $db = new DbOperation();
    $result = $db->getlikeMessage($userid);
    $response = array();
    $response['error'] = false;
    $response['messages'] = array();

    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['msgid'] = $row['msgid'];
        $temp['message'] = $row['message'];
        $temp['sendername'] = $row['sendername'];
        $temp['msgtimestamp'] = $row['msgtimestamp'];
        $temp['comments'] = $row['comments'];
        $temp['guessname'] = $row['guessname'];
        $temp['comments'] = $row['comments'];
        $temp['like'] = $row['like'];
        array_push($response['messages'],$temp);
    }

    echoResponse(200,$response);
});

/* *
 * URL: http://localhost/StudentApp/v1/createfaculty
 * Parameters: name, username, password, subject
 * Method: POST
 * */
$app->post('/GuessName','authenticateUser', function () use ($app) {
    verifyRequiredParams(array('guessname', 'msgid', 'userid'));
    $guessname= $app->request->post('guessname');
    $msgid= $app->request->post('msgid');
    $userid= $app->request->post('userid');

    $db = new DbOperation();
    $response = array();

    $res = $db->checkbalance($userid);
    if ($res == 0) {
        $response["response"] = "1";
        $response["error"] = 'true';
        $response["message"] = "You Don't have enough credit.Share to earn credit";
        echoResponse(201, $response);
    } else if ($res == 1) {
    	$res1 = $db->guessmate($guessname, $msgid);
    	//$res2 = $db->updateguessname($guessname, $msgid);
    	$res3 = $db->updatedebit($userid);
    	if($res1==0){
    	$response["response"] = "2";
        $response["error"] = 'true';
        $response["message"] = "You Guessed Wrong Mate";
        echoResponse(200, $response);
        }else{
        $response["response"] = "3";
        $response["error"] = 'false';
        $response["message"] = "You Find Your Mate";
        echoResponse(200, $response);
        }
    } 
});


$app->get('/updatelike/:msgid', 'authenticateUser', function($msgid) use ($app){
    $db = new DbOperation();
    $result = $db->updatelike($msgid);
    $response = array();
    if($result==1){
        $response['error'] = 'true';
        $response['message'] = "There is some error";
    }else if($result==2){
        $response['error'] = 'false';
        $response['message'] = "down";
    }else{
     $response['error'] = 'false';
        $response['message'] = "up";
    }
    echoResponse(200,$response);
});


/* *
 * URL: http://localhost/StudentApp/v1/createfaculty
 * Parameters: name, username, password, subject
 * Method: POST
 * */
$app->post('/createfaculty', function () use ($app) {
    verifyRequiredParams(array('name', 'username', 'password', 'subject'));
    $name = $app->request->post('name');
    $username = $app->request->post('username');
    $password = $app->request->post('password');
    $subject = $app->request->post('subject');

    $db = new DbOperation();
    $response = array();

    $res = $db->createFaculty($name, $username, $password, $subject);
    if ($res == 0) {
        $response["error"] = false;
        $response["message"] = "You are successfully registered";
        echoResponse(201, $response);
    } else if ($res == 1) {
        $response["error"] = true;
        $response["message"] = "Oops! An error occurred while registereing";
        echoResponse(200, $response);
    } else if ($res == 2) {
        $response["error"] = true;
        $response["message"] = "Sorry, this faculty already existed";
        echoResponse(200, $response);
    }
});


/* *
 * URL: http://localhost/StudentApp/v1/facultylogin
 * Parameters: username, password
 * Method: POST
 * */

$app->post('/facultylogin', function() use ($app){
    verifyRequiredParams(array('username','password'));
    $username = $app->request->post('username');
    $password = $app->request->post('password');

    $db = new DbOperation();

    $response = array();

    if($db->facultyLogin($username,$password)){
        $faculty = $db->getFaculty($username);
        $response['error'] = false;
        $response['id'] = $faculty['id'];
        $response['name'] = $faculty['name'];
        $response['username'] = $faculty['username'];
        $response['subject'] = $faculty['subject'];
        $response['apikey'] = $faculty['api_key'];
    }else{
        $response['error'] = true;
        $response['message'] = "Invalid username or password";
    }

    echoResponse(200,$response);
});


/* *
 * URL: http://localhost/StudentApp/v1/createassignment
 * Parameters: name, details, facultyid, studentid
 * Method: POST
 * */
$app->post('/createassignment',function() use ($app){
    verifyRequiredParams(array('name','details','facultyid','studentid'));

    $name = $app->request->post('name');
    $details = $app->request->post('details');
    $facultyid = $app->request->post('facultyid');
    $studentid = $app->request->post('studentid');

    $db = new DbOperation();

    $response = array();

    if($db->createAssignment($name,$details,$facultyid,$studentid)){
        $response['error'] = false;
        $response['message'] = "Assignment created successfully";
    }else{
        $response['error'] = true;
        $response['message'] = "Could not create assignment";
    }

    echoResponse(200,$response);

});

/* *
 * URL: http://localhost/StudentApp/v1/assignments/<student_id>
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET
 * */
$app->get('/assignments/:id', 'authenticateUser', function($emailid) use ($app){
    $db = new DbOperation();
    $result = $db->getmsg($emailid);
    $response = array();
    $response['error'] = false;
    $response['assignments'] = array();
    while($row = $result->fetch_assoc()){
        $temp = array();
        $temp['username'] = $row['username'];
        $temp['name'] = $row['name'];
        $temp['phone'] = $row['phone'];
        $temp['emailid'] = $row['emailid'];
        $temp['fbid'] = $row['fbid'];
        $temp['gplusid'] = $row['gplusid'];
        $temp['profilepic'] = $row['profilepic'];
        $temp['apikey'] = $row['api_key'];
        array_push($response['assignments'],$temp);
    }
    echoResponse(200,$response);
});



/* *
 * URL: http://localhost/StudentApp/v1/submitassignment/<assignment_id>
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: PUT
 * */

$app->put('/submitassignment/:id', 'authenticateFaculty', function($assignment_id) use ($app){
    $db = new DbOperation();
    $result = $db->updateAssignment($assignment_id);
    $response = array();
    if($result){
        $response['error'] = false;
        $response['message'] = "Assignment submitted successfully";
    }else{
        $response['error'] = true;
        $response['message'] = "Could not submit assignment";
    }
    echoResponse(200,$response);
});


/* *
 * URL: http://localhost/StudentApp/v1/students
 * Parameters: none
 * Authorization: Put API Key in Request Header
 * Method: GET
 * */


function echoResponse($status_code, $response)
{
    $app = \Slim\Slim::getInstance();
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response);
}


function verifyRequiredParams($required_fields)
{
    $error = false;
    $error_fields = "";
    $request_params = $_REQUEST;

    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $app = \Slim\Slim::getInstance();
        parse_str($app->request()->getBody(), $request_params);
    }

    foreach ($required_fields as $field) {
        if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
            $error = true;
            $error_fields .= $field . ', ';
        }
    }

    if ($error) {
        $response = array();
        $app = \Slim\Slim::getInstance();
        $response["error"] = true;
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
        echoResponse(400, $response);
        $app->stop();
    }
}

function authenticateUser(\Slim\Route $route)
{
    $headers = apache_request_headers();
    //$headers = $request->getHeaders();
    $response = array();
    $response['data'] = $headers;
    $app = \Slim\Slim::getInstance();

    if (isset($headers['Authorization'])) {
        $db = new DbOperation();
        $api_key = $headers['Authorization'];
        if (!$db->isValidUser($api_key)) {
            $response["error"] = true;
            $response["message"] = "Access Denied. Invalid Api key";
            echoResponse(401, $response);
            $app->stop();
        }
    } else {
        $response["error"] = true;
        $response["message"] = "Api key is misssing";
        echoResponse(400, $response);
        $app->stop();
    }
}


function authenticateFaculty(\Slim\Route $route)
{
    $headers = apache_request_headers();
    $response = array();
    $app = \Slim\Slim::getInstance();
    if (isset($headers['Authorization'])) {
        $db = new DbOperation();
        $api_key = $headers['Authorization'];
        if (!$db->isValidFaculty($api_key)) {
            $response["error"] = true;
            $response["message"] = "Access Denied. Invalid Api key";
            echoResponse(401, $response);
            $app->stop();
        }
    } else {
        $response["error"] = true;
        $response["message"] = "Api key is misssing";
        echoResponse(400, $response);
        $app->stop();
    }
}

$app->run();