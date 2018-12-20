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


function fbShare(username)
{
	var message='Do You Remember When We First Time';
	//alert(message);
	// get the selected answer
	var link='http://whennwemet.com/profile/fbshare/'+username;	
	title = '';
				description = message;
				image = 'http://whennwemet.com/img/logo.jpg';
	

	// and finally share it
	
	shareOverrideOGMeta(link,title,	description,image);
	
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


function whatupshare(username){

 
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

        if( isMobile.any() ) {
            var text = "Do You Remember When We First Time";
            var url = 'http://whennwemet.com/profile/fbshare/'+username;
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("Please share this article in mobile device");
        }
}


function tweetCurrentPage(username)
    { 
    var link='http://whennwemet.com/profile/fbshare/'+username;
    //alert(url);
    var url2='window.location.href';
    window.open("https://twitter.com/share?url="+encodeURIComponent(link)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; 
    }
    
    

