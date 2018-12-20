<?php

//including the required files
require_once '../include/DbOperation.php';
require '.././libs/Slim/Slim.php';


\Slim\Slim::registerAutoloader();

//Creating a slim instance
$app = new \Slim\Slim();

//Method to display response
function echoResponse($status_code, $response)
{
    //Getting app instance
    $app = \Slim\Slim::getInstance();

    //Setting Http response code
    $app->status($status_code);

    //setting response content type to json
    $app->contentType('application/json');

    //displaying the response in json format
    echo json_encode($response);
}


function verifyRequiredParams($required_fields)
{
    //Assuming there is no error
    $error = false;

    //Error fields are blank
    $error_fields = "";

    //Getting the request parameters
    $request_params = $_REQUEST;

    //Handling PUT request params
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        //Getting the app instance
        $app = \Slim\Slim::getInstance();

        //Getting put parameters in request params variable
        parse_str($app->request()->getBody(), $request_params);
    }

    //Looping through all the parameters
    foreach ($required_fields as $field) {

        //if any requred parameter is missing
        if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
            //error is true
            $error = true;

            //Concatnating the missing parameters in error fields
            $error_fields .= $field . ', ';
        }
    }

    //if there is a parameter missing then error is true
    if ($error) {
        //Creating response array
        $response = array();

        //Getting app instance
        $app = \Slim\Slim::getInstance();

        //Adding values to response array
        $response["error"] = true;
        $response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';

        //Displaying response with error code 400
        echoResponse(400, $response);

        //Stopping the app
        $app->stop();
    }
}

//Method to authenticate a student 
function authenticateUser(\Slim\Route $route)
{
    //Getting request headers
    $headers = apache_request_headers();
    $response = array();
    $app = \Slim\Slim::getInstance();

    //Verifying the headers
    if (isset($headers['Authorization'])) {

        //Creating a DatabaseOperation boject
        $db = new DbOperation();

        //Getting api key from header
        $api_key = $headers['Authorization'];

        //Validating apikey from database
        if (!$db->isValidUser($api_key)) {
            $response["error"] = true;
            $response["message"] = "Access Denied. Invalid Api key";
            echoResponse(401, $response);
            $app->stop();
        }
    } else {
        // api key is missing in header
        $response["error"] = true;
        $response["message"] = "Api key is misssing";
        echoResponse(400, $response);
        $app->stop();
    }
}
$app->run();




//this method will create a student
//the first parameter is the URL address that will be added at last to the root url
//The method is post
$app->post('/CreateUser', function () use ($app) {

    //Verifying the required parameters
    verifyRequiredParams(array('username','name', 'emailid', 'password','phone'));

    //Creating a response array
    $response = array();

    //reading post parameters
    $username= $app->request->post('username');
    $name = $app->request->post('name');
    $emailid= $app->request->post('emailid');
    $password= $app->request->post('password');
    $phone = $app->request->post('phone');

    //Creating a DbOperation object
    $db = new DbOperation();

    //Calling the method createStudent to add student to the database
    $res = $db->CreateUser($username,$name,$emailid,$password,$phone);

    //If the result returned is 0 means success
    if ($res == 0) {
        //Making the response error false
        $response["error"] = false;
        //Adding a success message
        $response["message"] = "You are successfully registered";
        //Displaying response
        echoResponse(201, $response);

    //If the result returned is 1 means failure
    } else if ($res == 1) {
        $response["error"] = true;
        $response["message"] = "Oops! An error occurred while registereing";
        echoResponse(200, $response);

    //If the result returned is 2 means user already exist
    } else if ($res == 2) {
        $response["error"] = true;
        $response["message"] = "Sorry, this email already existed";
        echoResponse(200, $response);
    }
});



//Login request
$app->post('/UserLogin',function() use ($app){
    //verifying required parameters
    verifyRequiredParams(array('emailid','password'));

    //getting post values
    $emailid = $app->request->post('emailid');
    $password = $app->request->post('password');

    //Creating DbOperation object
    $db = new DbOperation();

    //Creating a response array
    $response = array();

    //If username password is correct
    if($db->UserLogin($emailid,$password)){

        //Getting user detail
        $user = $db->getUser($emailid);

        //Generating response
        $response['error'] = false;
        $response['username'] = $user['username'];
        $response['name'] = $user['name'];
        $response['phone'] = $user['phone'];
        $response['emailid'] = $user['emailid'];
        $response['fbid'] = $user['fbid'];
        $response['gplusid'] = $user['gplusid'];
        $response['profilepic'] = $user['profilepic'];
        $response['apikey'] = $user['api_key'];

    }else{
        //Generating response
        $response['error'] = true;
        $response['message'] = "Invalid username or password";
    }

    //Displaying the response
    echoResponse(200,$response);
});

/* *
 * URL: http://whennwemet.com/whennwemet/v1/submitmsg
 * Parameters: name, msg, receiverid
 * Method: POST
 * */
$app->post('/submitmsg',function() use ($app){
    verifyRequiredParams(array('name','msg','receiverid'));

    $name = $app->request->post('name');
    $msg = $app->request->post('msg');
    $receiverid = $app->request->post('receiverid');
    
    $db = new DbOperation();

    $response = array();

    if($db->submitmsg($name,$msg,$receiverid)){
        $response['error'] = false;
        $response['message'] = "Message Sent successfully";
    }else{
        $response['error'] = true;
        $response['message'] = "Could Not Sent Message Please Try Again!";
    }

    echoResponse(200,$response);

});

?>