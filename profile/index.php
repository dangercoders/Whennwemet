<?php
session_start();
$token=$_SESSION["token"];
$uuseremailid=$_SESSION["SESS_Emailid"];
if((isset($token)&&(isset($uuseremailid)))) {
$uuseremailid=$_SESSION["SESS_Emailid"];
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/GetUser'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "useremailid=$uuseremailid",
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
    if(isset($response->userid)){
    $_SESSION["SESS_uuserid"]=$response->userid;
    $_SESSION["SESS_uusername"]=$response->username;
    $_SESSION["SESS_uname"]=$response->name;
    $_SESSION["SESS_uprofilepic"]=$response->profilepic;
    $_SESSION["SESS_uapikey"]=$response->apikey;
    $_SESSION["SESS_udebit"]=$response->debit;
    }else{
    $_SESSION["error"]='true';
    $_SESSION["message"]="Something Went Wrong";
    }
}

}else{
	$_SESSION["error"]='true';
    $_SESSION["message"]="You Are Not Login Please Login First";
header("location:../");
}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <!--  <link rel="stylesheet" href="css/bootstrap.min.css">


      <link rel="stylesheet" href="css/bootstrap-theme.min.css">

      <script src="js/bootstrap.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <link rel="stylesheet" href="css/sidebar.css">
    <meta charset="utf-8" />
    <title>Whennwemet</title>
    <script src="scripts/jquery.js"></script>


    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />


    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Load custom js -->
	
	<script type='text/javascript'>
    var __ac = {};
    __ac.uid = "dc90ae5d1dd87850f0585bc5d1bbbadb";
    __ac.server = "secure.chatrify.com";
    

    (function() {
    var ac = document.createElement('script'); ac.type = 'text/javascript'; ac.async = true;
    ac.src = 'https://cdn.chatrify.com/go.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ac, s);
    })();
</script>
    
    <style>
    input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}





.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1.7em;
    font-weight: 700;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
setTimeout(function (){
  $('.button-collapse').sideNav({
                                            menuWidth: 240, // Default is 240
                                            edge: 'left', // Choose the horizontal origin
                                            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                                            draggable: false // Choose whether you can drag to open on touch screens
                                        }
                                        );
},1000)

    </script>

</head>
<body >
    <!-- Side Navigation Menu-->

    <div>
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <div class="background">

                    </div>
                    <div><img class="circle" src="<?php echo $_SESSION["SESS_uprofilepic"]; ?>"></div>
                    <div><span class="white-text name"></span></div>
                    <div><span class="white-text id"></span></div>
                </div>
            </li>
            <li><a href="accountsetting.php">Setting</a></li>
            <li><a href="index.php">Search</a></li>
            <li><a href="message.php">Meassage</a></li>
            <li><a href="fbconnect.php">Connect Facebook</a></li>
            <li><a href="userprofile.php">Share Profile <div><p><?php echo $_SESSION["SESS_udebit"]; ?></p></div></a></li>
            <li><a href="logout.php">LogOut</a></li>
            
            


            
        </ul>
        <div class="top-bar">
            <button data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></button>
        </div>
    </div>
    <br><br>
    <input type="text" name="search" placeholder="Search.." id="search" autocomplete="off">

               
        <br><br>
        
        <ul id="results"></ul>
</body>
</html>