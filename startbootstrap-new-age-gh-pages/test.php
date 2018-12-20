<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
	<!-- Load jQuery library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="js/custom.js"></script>
	
    <title>WhennWeMet.com</title>
    
<style>
/*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout { 
    position: absolute; 
    top: -3px;
    right: 0;
}
.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
    background-size: 120px;
    border-radius: 120px;
}
input[type="file"]{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;    
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;    
    background-color: rgba(0,0,0,.3);
    border-radius: 50px;
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
</style>    
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

</style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

  <body id="page-top" onload="displayinfo()">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
            <form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
                        <div class="form-group">
                            <div class="col-sm-10">                                
                                <div class="custom-input-file" id="dp">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                           
                            <div class="col-sm-10">
                              <p id="pname"></p>
                            </div>
                        </div>  
                        <div class="form-group">
                          
                            <div class="col-sm-10">
                              <p id="pusername"></p>
                            </div>
                        </div>  
                        <div class="form-group">
                            
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                            <textarea class="form-control" name="message" id="message" row="" placeholder="Send Me Cool Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Send</button>
                            </div>
                        </div>            
                    </form>
            
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Discover what all the buzz is about!</h2>
            <p>Our app is available on any mobile device! Download now to get started!</p>
            <div class="badges">
              <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
              <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Unlimited Features, Unlimited Fun</h2>
          <p class="text-muted">Check out what you can do with this app theme!</p>
          <hr>
        </div>
        <input type="text" name="search" placeholder="Search.." id="search" autocomplete="off">

               
        <br><br>
        
        <ul id="results"></ul>
    </section>

    <section class="cta">
   
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start building.</h2>
          <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Lets Get Started!</a>
        </div>
      </div>
      
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2017 Start Bootstrap. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
<script>
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
    document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    //alert(i);
    document.querySelector('#pname').innerHTML=data.name;
    document.querySelector('#pusername').innerHTML=data.username;
   document.querySelector('#dp').style.backgroundImage="url(img/"+data.profilepic+")";
   	//alert(Object.keys(data.messages).length);
    },
    error: function (jqXHR, textStatus, errorThrown) {
document.querySelector('#pname').innerHTML = "";
    document.querySelector('#pusername').innerHTML = "";
    //alert(i);
    document.querySelector('#pname').innerHTML="No User Exist"+username;
    //document.querySelector('#pusername').innerHTML=data.username;
   document.querySelector('#dp').style.display='none';
    }
});
}
}
</script>
   <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
