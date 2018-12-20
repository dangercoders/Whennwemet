$(document).ready(function() {
$("#tabs li").click(function() {
$("#tabs li.active").removeClass("active")
    $(this).addClass("active")
 $activetab=$("#tabs").find(".active").attr('id'); 
 var x = document.querySelector('#sendmessage');
 var y = document.querySelector('#likemessage');
 var z = document.querySelector('#viewmessage');
 if($activetab=='received'){
    /*if (x.style.display === 'block') {
        x.style.display = 'none';
    } else if (y.style.display === 'block') {
        y.style.display = 'none';
    } */
 receivedmessage();
 }
/*else if($activetab=='send'){
if (z.style.display === 'block') {
      z.style.display = 'none';
    } else if (y.style.display === 'block') {
        y.style.display = 'none';
    }
    document.querySelector('#menu1').style.display = 'block';
sendmessage();
}*/
else if ($activetab=='like'){
/*if (x.style.display === 'block') {
        x.style.display = 'none';
    } else if (z.style.display === 'block') {
        z.style.display = 'none';
    } */
likemessage();
}
})
}
function sendmessage(){
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/sendmessage/2",
    method: "GET",
    dataType: "json",
    crossDomain: true,
    contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", "ae2251c4f3c31767503347556799bdae");
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    document.querySelector('#sendmessage').innerHTML = "";
    for(var i=0;i<Object.keys(data.messages).length;i++){
    //alert(i);
    document.querySelector('#sendmessage').innerHTML+='<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'
    						    +'<div class="d-flex w-100 justify-content-between">'
                                                    +'<h5 class="mb-1">'+ data.messages[i].sendername +'</h5>'
                                                    +'<small class="text-muted">'+ data.messages[i].msgtimestamp +'</small>'
                                                    +'</div>'
                                                    +'<p class="mb-1">'+ data.messages[i].message +'.</small>'
	                                            +'<br>'
	                                            +'<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-share-alt"></span>Share</button>'
	                                      +'<button type="button" class="btn btn-warning" data-toggle="collapse" href="#'+ data.messages[i].msgid +'">GuessMate</button>'
                                                    +'</a>'
                                                    +'<div class="collapse" id="'+ data.messages[i].msgid +'">'
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
                                                    +'</div>';
                                                    }
	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
});
}




function receivedmessage(){
$.ajax({
    url: "http://whennwemet.com/whennwemet/v1/Users/2",
    method: "GET",
    dataType: "json",
    crossDomain: true,
    contentType: "application/json; charset=utf-8",
    cache: false,
    beforeSend: function (xhr) {
        /* Authorization header */
        xhr.setRequestHeader("Authorization", "ae2251c4f3c31767503347556799bdae");
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data) {
    document.querySelector('#viewmessage').innerHTML = "";
    for(var i=0;i<Object.keys(data.messages).length;i++){
    //alert(i);
    document.querySelector('#viewmessage').innerHTML+='<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'
    						    +'<div class="d-flex w-100 justify-content-between">'
                                                    +'<h5 class="mb-1">'+ data.messages[i].sendername +'</h5>'
                                                    +'<small class="text-muted">'+ data.messages[i].msgtimestamp +'</small>'
                                                    +'</div>'
                                                    +'<p class="mb-1">'+ data.messages[i].message +'.</small>'
	                                            +'<br>'
	                                            +'<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-share-alt"></span>Share</button>'
	                                      +'<button type="button" class="btn btn-warning" data-toggle="collapse" href="#'+ data.messages[i].msgid +'">GuessMate</button>'
                                                    +'</a>'
                                                    +'<div class="collapse" id="'+ data.messages[i].msgid +'">'
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
                                                    +'</div>';
                                                    }
	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {

    }
});
}


function guessmate(msgid){
document.getElementById('guessform').onsubmit= function(e){
     e.preventDefault();
}
//alert(msgid);
var userid="2";
 var forminput=document.getElementById("inlineFormInput"+msgid).value;
 var formhidden=document.getElementById("hidden").value;
 alert(forminput+msgid+userid);
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
        xhr.setRequestHeader("Authorization", "ae2251c4f3c31767503347556799bdae");
        //xhr.setRequestHeader("X-Mobile", "false");
    },
    success: function (data,xhr) {
    alert(xhr.status);
}
});
}