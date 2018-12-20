 $(document).ready(function() {
 if((localStorage.getItem('username')!=null)){
 var username=localStorage.getItem('username');
 
 $.ajax({
    url: 'http://whennwemet.com/whennwemet/v1/GetUser',
    type: 'POST',
    data: {username: username} ,
    contentType: "application/x-www-form-urlencoded",
    dataType: "html",
    beforeSend: function() {
          
       },
    success: function (response) {
    var data=JSON.parse(response);
    localStorage.removeItem(username);
    localStorage.setItem('uusername',data.username);
    localStorage.setItem('uemailid',data.emailid );
    localStorage.setItem('uuserid', data.userid);
    localStorage.setItem('uname', data.name);
    localStorage.setItem('uapikey', data.apikey);
    localStorage.setItem('uprofilepic', data.profilepic);
    //alert(response.error);
       //window.location.replace('profile');
    },
    error: function () {
        //$("#loader").show();
        alert(response);
    }
    }); 
   
 }else{
 localStorage.clear();
 localStorage.setItem('error',"You Are Not Login Please Login First");
 window.location.replace('http://whennwemet.com');
 }
 
 });