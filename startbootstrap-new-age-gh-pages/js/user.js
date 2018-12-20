function displayinfo(){
if(localStorage.getItem("username")!=null){
var username=localStorage.getItem("username");
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/GetUser",
    method: "POST",
   // dataType: "json",
    crossDomain: true,
    data: {username:username},
   // contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
       // xhr.setRequestHeader("Authorization", "ae2251c4f3c31767503347556799bdae");
       // xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    if(data.userid!=null){
    document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    //alert(i);
    document.querySelector('#pname').innerHTML=data.name;
    document.querySelector('#pusername').innerHTML=data.username;
   document.querySelector('#dp').style.backgroundImage="url(img/"+data.profilepic+")";
   	//alert(Object.keys(data.messages).length);
   	}else{
   	document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    document.querySelector('#pname').innerHTML="No User Exist"+username;
    document.querySelector('#dp').style.display='none';
   document.querySelector('#divname').style.display='none';
   document.querySelector('#divmsg').style.display='none';
   document.querySelector('#submit').style.display='none';
   document.querySelector('#divbtn').innerHTML='<a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>';   	}
    },
    error: function (jqXHR, textStatus, errorThrown) {
    document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    document.querySelector('#pname').innerHTML="No User Exist"+username;
    document.querySelector('#dp').style.display='none';
   document.querySelector('#divname').style.display='none';
   document.querySelector('#divmsg').style.display='none';
   document.querySelector('#submit').style.display='none';
   document.querySelector('#divbtn').innerHTML='<a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Search Your First Mate</a>';
    }
});
}
}