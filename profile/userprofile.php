<?php
session_start();
$token=$_SESSION["token"];
$uuseremailid=$_SESSION["SESS_Emailid"];
$uuserid=$_SESSION["SESS_uuserid"];
if((!isset($token))&&(!isset($uuseremailid))&&(!isset($uuserid))) {
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
    <script type="text/javascript" src="js/facebookshare.js"></script>
     
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
<style>
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.team{
    padding:75px 0;
}
h6.description{
	font-weight: bold;
	letter-spacing: 2px;
	color: #999;
	border-bottom: 1px solid rgba(0, 0, 0,0.1);
	padding-bottom: 5px;
}
.profile{
	margin-top: 25px;
}
.profile h1{
	font-weight: normal;
	font-size: 20px;
	margin:10px 0 0 0;
}
.profile h2{
	font-size: 14px;
	font-weight: lighter;
	margin-top: 5px;
}
.profile .img-box{
	opacity: 1;
	display: block;
	position: relative;
}
.profile .img-box:after{
	content:"";
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
.img-box ul{
	position: absolute;
	z-index: 2;
	bottom: 50px;
	text-align: center;
	width: 100%;
	padding-left: 0px;
	height: 0px;
	margin:0px;
	opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
	-webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
	font-size: 20px;
	letter-spacing: 10px;
}
.img-box ul li{
	width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
	display: inline-block;
}
.img-box a{
	color:#fff;
}
.img-box:hover:after{
	opacity: 1;
}
.img-box:hover ul{
	opacity: 1;
}
.img-box ul a{
	-webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
	border-color: #fff;
	color: #88C425;
}
a{
    color:#88C425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}
</style>
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
            
            


            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="logout.php">Logout</a></li>
        </ul>
        <div class="top-bar">
            <button data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></button>
        </div>
    </div>
    <br><br>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        
          <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="<?php echo $_SESSION["SESS_uprofilepic"]; ?>" class="img-responsive">
                <ul class="text-center">
                  <a href="javascript:fbShare('<?php echo $_SESSION["SESS_uusername"]; ?>')"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="javascript:tweetCurrentPage('<?php echo $_SESSION["SESS_uusername"]; ?>')"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="https://plus.google.com/share?url=http://whennwemet.com/profile/fbshare/<?php echo $_SESSION["SESS_uusername"]; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><li><i class="fa fa-google"></i></li></a>
               <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://whennwemet.com/profile/fbshare/<?php echo $_SESSION["SESS_uusername"]; ?>" target="_blank" ><li><i class="fa fa-linkedin"></i></li></a>
                  <a href="javascript:whatupshare('<?php echo $_SESSION["SESS_uusername"]; ?>')"><li><i class="fa fa-whatsapp"></i></li></a>
                </ul>
              </div>
              <h1><?php echo $_SESSION["SESS_uname"]; ?></h1>
              <h2><?php echo $_SESSION["SESS_uusername"]; ?></h2>
              <p><?php echo $_SESSION["SESS_Emailid"]; ?></p>
            </div>
               </div>    
     </div>
    </div>
  </div>
</section>
        
        
</body>
</html>