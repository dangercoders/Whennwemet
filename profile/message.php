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

<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <link rel="stylesheet" href="css/sidebar.css">
    <meta charset="utf-8" />
    <title>Whennwemet</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />


    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    


    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script src="https://connect.facebook.net/en_US/all.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
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
.btn-space {
    margin-right: 5px;
}

.fa {
    font-size: 20px;
    cursor: pointer;
    user-select: none;
}

.fa:hover {
  color: darkblue;
}
.btn-space {
    margin-right: 25px;
}
</style>
</head>
<body onload="receivedmessage()">
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
            <li><a class="waves-effect" onclick="logout();">Logout</a></li>
        </ul>
        <div class="top-bar">
            <button data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></button>
        </div>
        <div class="container">
  
  <ul class="nav nav-pills nav-justified" id="tabs">
    <li class="active" id="received"><a data-toggle="pill" href="#home">Received</a></li>
    <li id="send"><a data-toggle="pill" href="#menu1">Send</a></li>
   <!-- <li id="like"><a data-toggle="pill" href="#menu2">Like</a></li>-->
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
      <div class="list-group" id="viewmessage">

  
</div>    </div>
    <div id="menu1" class="tab-pane fade">
    <br>
         <div class="list-group" id="sendmessage">
    </div>  </div>
   <!-- <div id="menu2" class="tab-pane fade">
    <br>
     <div class="list-group" id="likemessage">
    </div>
  </div>-->
</div>

    </div>
 </div>
 
 
 <!-- Button trigger modal -->

<!-- Modal -
<div class="modal fade" id="exampleModal"  name="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="message"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
 
 -->
 <!-- Modal Structure -->
  <div id="exampleModal" name="exampleModal" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p id="message"></p>
          </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
 
 
<script>

  window.fbAsyncInit = function() {
	FB.init({
	  appId            : '2021272528104107',
	  autoLogAppEvents : true,
	  xfbml            : true,
	  version          : 'v2.10'
	});
	FB.AppEvents.logPageView();
  };
 
  (function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/en_US/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


$('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href") // activated tab
if(target=='#home'){
  receivedmessage();
 }
 else if(target=='#menu1'){
 sendmessage();
 }
 else if(target=='#menu2'){
 likemessage();
 }
  });
  
function submitAndShare(msgid)
{
	var message=document.getElementById("rmp"+msgid).innerHTML;
	//alert(message);
	// get the selected answer
	
	title = '';
				description = message;
				image = 'http://whennwemet.com/img/logo.jpg';
	

	// and finally share it
	
	shareOverrideOGMeta(window.location.href,
						title,
						description,
						image);
	
	return false;
}
 
function shareOverrideOGMeta(overrideLink, overrideTitle, overrideDescription, overrideImage)
{
	FB.ui({
		method: 'share_open_graph',
		action_type: 'og.shares',
		action_properties: JSON.stringify({
			object: {
				'og:url': overrideLink,
				'og:title': overrideTitle,
				'og:description': overrideDescription,
				'og:image': overrideImage
			}
		})
	},
	function (response) {
	// Action after response
	});
}
  
function likemessage(){
var apikey= <?php echo json_encode($_SESSION["SESS_uapikey"]);?>;
var userid= <?php echo json_encode($_SESSION["SESS_uuserid"]);?>;
//var apikey=localStorage.getItem('uapikey');
//var userid=localStorage.getItem('uuserid');
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/likemessage/"+userid,
    method: "GET",
    dataType: "json",
    crossDomain: true,
    contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", apikey);
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    document.querySelector('#likemessage').innerHTML = "";
    for(var i=0;i<(Object.keys(data.messages).length);i++){
    //alert(i);
    document.querySelector('#likemessage').innerHTML+='<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'
    						    +'<div class="d-flex w-100 justify-content-between">'
                                                    +'<h5 class="mb-1">'+ data.messages[i].sendername +'</h5>'
                                                    +'<small class="text-muted">'+ data.messages[i].msgtimestamp +'</small>'
                                                    +'</div>'
                                                    +'<p class="mb-1">'+ data.messages[i].message +'.</p>'
	                                            +'<br>'
	                                         //   +'<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-share-alt"></span>Share</button>'
	                                    //  +'<button type="button" class="btn btn-warning" data-toggle="collapse" href="#'+ data.messages[i].msgid +'">GuessMate</button>'
                                                    +'</a>'
                                                 /*   +'<div class="collapse" id="'+ data.messages[i].msgid +'">'
                                                    +'<br>'
                                                    +'<div class="list-group">'
                                                    +'<br>'
                                                    +'<form class="form-inline" id="guessform">'
                                                    +'<label class="sr-only" for="inlineFormInput">Name</label>'
                 +'<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput'+ data.messages[i].msgid +'" placeholder="Guess Your First Mate" required>'
                                            +'<input type="hidden" id="hidden" value="'+ data.messages[i].msgid +'">'                                  			                                					
                                                    +'<input type="submit" class="btn btn-primary" onclick="guessmate('+ data.messages[i].msgid +')">'
                                                    +'</form>'
                                                    +'</div>'
                                                    +'</div>'; */
                                                    }
	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
});
}  
function sendmessage(){
var apikey= <?php echo json_encode($_SESSION["SESS_uapikey"]);?>;
var userid= <?php echo json_encode($_SESSION["SESS_uuserid"]);?>;
//var apikey=localStorage.getItem('uapikey');
//var userid=localStorage.getItem('uuserid');
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/sendmessage/"+userid,
    method: "GET",
    dataType: "json",
    crossDomain: true,
    contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", apikey);
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    document.querySelector('#sendmessage').innerHTML = "";
    for(var i=0;i<(Object.keys(data.messages).length);i++){
    //alert(i);
    document.querySelector('#sendmessage').innerHTML+='<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'
    						    +'<div class="d-flex w-100 justify-content-between">'
                                                    +'<h5 class="mb-1">'+ data.messages[i].sendername +'</h5>'
                                                    +'<small class="text-muted">'+ data.messages[i].msgtimestamp +'</small>'
                                                    +'</div>'
                                                    +'<p class="mb-1">'+ data.messages[i].message +'.</p>'
	                                            +'<br>'
	                                           // +'<button type="button" class="btn btn-warning" onclick="share(); return false;"><span class="glyphicon glyphicon-share-alt"></span>Share</button>'
	                                     // +'<button type="button" class="btn btn-warning" data-toggle="collapse" href="#'+ data.messages[i].msgid +'">GuessMate</button>'
                                                    +'</a>'
                                                  //  +'<div class="collapse" id="'+ data.messages[i].msgid +'">'
                                                  //  +'<br>'
                                                  //  +'<div class="list-group">'
                                                  //  +'<br>'
                                                   // +'<form class="form-inline" id="guessform">'
                                                   // +'<label class="sr-only" for="inlineFormInput">Name</label>'
               //  +'<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput'+ data.messages[i].msgid +'" placeholder="Guess Your First Mate" required>'
                                        //    +'<input type="hidden" id="hidden" value="'+ data.messages[i].msgid +'">'                                  			                                					
                                            //        +'<input type="submit" class="btn btn-primary" onclick="guessmate('+ data.messages[i].msgid +')">'
                                              //      +'</form>'
                                                  //  +'</div>'
                                                  //  +'</div>';
                                                    }
	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
});
}




function receivedmessage(){
var apikey= <?php echo json_encode($_SESSION["SESS_uapikey"]);?>;
var userid= <?php echo json_encode($_SESSION["SESS_uuserid"]);?>;
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/Users/"+userid,
    method: "GET",
    dataType: "json",
    crossDomain: true,
    contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", apikey);
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    document.querySelector('#viewmessage').innerHTML = "";
       for(var i=0;i<(Object.keys(data.messages).length);i++){
    //alert(i);
    document.querySelector('#viewmessage').innerHTML+='<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'
    						    +'<div class="d-flex w-100 justify-content-between">'
                                                    +'<h5 class="mb-1">'+ data.messages[i].comments +'</h5>'
                                                    +'<small class="text-muted">'+ data.messages[i].msgtimestamp +'</small>'
                                                    +'</div>'
                                                    +'<p class="mb-1" id="rmp'+data.messages[i].msgid +'">'+ data.messages[i].message +'.</p>'
	                                            +'<br>'
	                     // +'<button type="button" onclick="return submitAndShare('+ data.messages[i].msgid +');" class="btn btn-primary btn-space"><span class="glyphicon glyphicon-share-alt"></span>Share</button>'
	                                      +'<i class="fa fa-share-alt btn-space" onclick="return submitAndShare('+ data.messages[i].msgid +');"></i>'
										  +'<i class="fa fa-user-secret btn-space" data-toggle="collapse" href="#'+ data.messages[i].msgid +'"></i>'
										  //+'<button type="button" class="btn btn-primary btn-space" data-toggle="collapse" href="#'+ data.messages[i].msgid +'">GuessMate</button>'
									//+'<i onclick="return updatelike('+ data.messages[i].msgid +');" class="fa fa-thumbs-up" id="likebtnd'+data.messages[i].msgid +'" style="display: none"></i>'
									  +'<i onclick="return updatelike('+ data.messages[i].msgid +');" class="fa fa-thumbs-up" id="likebtnu'+data.messages[i].msgid +'" style="display: line-block"></i>'
	                                     // +'<button type="button" onclick="return updatelike('+ data.messages[i].msgid +');" class="btn btn-primary btn-space"  id="likebtn'+data.messages[i].msgid +'">Like</button>' 
	                                      
                                                    +'</a>'
                                                    +'<div class="collapse" id="'+ data.messages[i].msgid +'">'
                                                    +'<br>'
                                                    +'<div class="list-group">'
                                                    +'<br>'
                                                    +'<form class="form-inline" id="guessform'+data.messages[i].msgid +'">'
                                                    +'<label class="sr-only" for="inlineFormInput">Name</label>'
                 +'<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput'+ data.messages[i].msgid +'" placeholder="Guess Your First Mate" required>'
                                            +'<input type="hidden" id="hidden" value="'+ data.messages[i].msgid +'">'                                  			                                					
                                                    +'<input type="submit" class="btn btn-primary" onclick="guessmate('+ data.messages[i].msgid +')">'
                                                    +'</form>'
                                                    +'</div>'
                                                    +'</div>';
                                                    if(data.messages[i].msglike=="1") {
													if ( document.getElementById("likebtnu"+data.messages[i].msgid).classList.contains('fa-thumbs-up') )
                                                         document.getElementById("likebtnu"+data.messages[i].msgid).classList.toggle('fa-thumbs-down');
                                                    //document.getElementById("likebtnu"+data.messages[i].msgid).style.display="none";
													//document.getElementById("likebtnd"+data.messages[i].msgid).style.display="line-block";
                                                    }
                                                    }	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
});
}

function updatelike(msgid){
var apikey= <?php echo json_encode($_SESSION["SESS_uapikey"]);?>;
var userid= <?php echo json_encode($_SESSION["SESS_uuserid"]);?>;
//var apikey=localStorage.getItem('uapikey');
//var userid=localStorage.getItem('uuserid');
 var forminput=document.getElementById("inlineFormInput"+msgid).value;
 var formhidden=document.getElementById("hidden").value;
 //alert(forminput+msgid+userid);
 $.ajax({
    url: "http://whennwemet.com/whennwemet/v1/updatelike/"+msgid,
    method: "GET",
   // dataType: "json",
    crossDomain: true,
   // contentType: "application/json; charset=utf-8",
    //data:{guessname: forminput,msgid: msgid,userid: userid},
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", apikey);
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data,xhr) {
    if ( document.getElementById("likebtnu"+msgid).classList.contains('fa-thumbs-up') )
         document.getElementById("likebtnu"+msgid).classList.toggle('fa-thumbs-down');
   //swal("WhennWeMet", data.message);
   //document.getElementById("likebtn"+msgid).style.display = "none";
      //$(".exampleModal").openModal();
  // $('#exampleModal').modal('show');
  //document.getElementById('exampleModal').style.display = "block";
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#exampleModal').modal();
  });
  // $(".exampleModal").modal();
   
}
});
return false;
}

function guessmate(msgid){
document.getElementById('guessform'+msgid).onsubmit= function(e){
     e.preventDefault();
}
//alert(msgid);
var apikey= <?php echo json_encode($_SESSION["SESS_uapikey"]);?>;
var userid= <?php echo json_encode($_SESSION["SESS_uuserid"]);?>;
//var apikey=localStorage.getItem('uapikey');
//var userid=localStorage.getItem('uuserid');
 var forminput=document.getElementById("inlineFormInput"+msgid).value;
 var formhidden=document.getElementById("hidden").value;
 //alert(forminput+msgid+userid);
 $.ajax({
    url: "http://whennwemet.com/whennwemet/v1/GuessName",
    method: "POST",
   // dataType: "json",
    crossDomain: true,
   // contentType: "application/json; charset=utf-8",
    data:{guessname: forminput,msgid: msgid,userid: userid},
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", apikey);
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data,xhr) {
   document.getElementById("message").innerHTML=data.message;
   swal("WhennWeMet", data.message);
      //$(".exampleModal").openModal();
  // $('#exampleModal').modal('show');
  //document.getElementById('exampleModal').style.display = "block";
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#exampleModal').modal();
  });
  // $(".exampleModal").modal();
   
}
});
}
</script> 
</body>
</html>
