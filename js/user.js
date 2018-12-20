$(document).ready(function () {
$("#accountSetForm").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url: "http://www.whennwemet.com/submitmsg.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
//$('#loading').hide();
document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    document.querySelector('#pname').innerHTML=" Your Message Has Been Sent";
    document.querySelector('#dp').style.display='none';
   document.querySelector('#divname').style.display='none';
   document.querySelector('#divmsg').style.display='none';
   document.querySelector('#submit').style.display='none';
   document.querySelector('#divbtn').innerHTML='<nav class="main-nav"><ul>'
				<!-- inser more links here -->
				+'<li style="display: inline-block;"><a class="btn btn-lg btn-success cd-signin" href="#0">Sign in</a></li>'
				+'<li style="display: inline-block;"><a class="btn btn-lg btn-warning cd-signup" href="#0">Sign up</a></li></ul></nav>';
}
});
}));
});

function displayinfo(){
if(localStorage.getItem("username")!=null){
var username=localStorage.getItem("username");
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/GetMate",
    method: "POST",
   // dataType: "json",
    crossDomain: true,
    data: {username:username},
   // contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        
    },
    success: function (data) {
    if(data.userid!=null){
    document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    //alert(i);
    document.querySelector('#pname').innerHTML=data.name;
    document.querySelector('#pusername').innerHTML=data.username;
    document.querySelector('#userid').value=data.userid;
   document.querySelector('#dp').style.backgroundImage="url("+data.profilepic+")";
   	//alert(Object.keys(data.messages).length);
   	}else{
   	document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    document.querySelector('#pname').innerHTML="No User Exist  "+username;
    document.querySelector('#dp').style.display='none';
   document.querySelector('#divname').style.display='none';
   document.querySelector('#divmsg').style.display='none';
   document.querySelector('#submit').style.display='none';
   document.querySelector('#divbtn').innerHTML='<nav class="main-nav"><ul>'
				<!-- inser more links here -->
				+'<li style="display: inline-block;"><a class="btn btn-lg btn-success cd-signin" href="#0">Sign in</a></li>'
				+'<li style="display: inline-block;"><a class="btn btn-lg btn-warning cd-signup" href="#0">Sign up</a></li></ul></nav>';
     	}
    },
    error: function (jqXHR, textStatus, errorThrown) {
    document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    document.querySelector('#pname').innerHTML="No User Exist   "+username;
    document.querySelector('#dp').style.display='none';
   document.querySelector('#divname').style.display='none';
   document.querySelector('#divmsg').style.display='none';
   document.querySelector('#submit').style.display='none';
   document.querySelector('#divbtn').innerHTML='<a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Search Your First Mate</a>';
    }
});
}
}


function sendmessage(){

}