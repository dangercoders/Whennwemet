<?php
session_start();
if(isset($_GET['deregistrationcode'])) {
$deregistrationcode=$_GET['deregistrationcode'];
$curl = curl_init();
$url='http://whennwemet.com/whennwemet/v1/deregistration'; 
curl_setopt_array($curl, array(
 CURLOPT_URL => $url,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "deregistrationcode=$deregistrationcode",
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
    $_SESSION["SESS_Emailid"]=$response->emailid;
    ?>
    <!DOCTYPE html>

<html lang="en">
<head>
   
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/gen_validatorv4.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/accountsetting.js"></script>
<script type="text/javascript" src="js/fileupload.js"></script>
    <style>
    
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
        <!-- Account Setting -->
        
    <div class="container">
	
	<ul class="nav nav-pills nav-justified" id="tabs">
    <li class="active" id="received"><a data-toggle="pill" href="#home">Profile Image</a></li>
    <li id="send"><a data-toggle="pill" href="#menu1">Change Password</a></li>
  </ul>
	
	  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
      <div class="list-group" id="viewmessage">
	    <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="comment-tabs">
                    <form class="form-horizontal" id="accountSetForm" role="form" enctype="multipart/form-data" method="POST" action="fileupload.php">
                        <div class="form-group">
                            <div class="col-sm-10">                                
                                <div class="custom-input-file" id="preview">
                                <img id="previewing" src="<?php echo $_SESSION["SESS_uprofilepic"]; ?>" style="width:120px; height:120px;"/>
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="file" id="file">
                                    </label>
                                </div>
                                <div id="message"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?php echo $_SESSION["SESS_uname"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">User name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="username" id="username" placeholder="" value="<?php echo $_SESSION["SESS_uusername"]; ?>"readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?php echo $_SESSION["SESS_Emailid"]; ?>" readonly>
                            </div>
                        </div>  
                       <!-- <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                            </div>
                        </div>  -->
                      <!--  <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit" value="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
		</div>
	</div>
    <div id="menu1" class="tab-pane fade">
    <br>
			<div class="list-group" id="sendmessage">
	  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="comment-tabs">
                    <form class="form-horizontal" id="accountSetForm1" role="form" method="post" action="changepassword.php" >
                      <!--  <div class="form-group">
                            <div class="col-sm-10">                                
                                <div class="custom-input-file" id="preview">
                                <img id="previewing" src="" style="width:120px; height:120px;"/>
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="file" id="file">
                                    </label>
                                </div>
                                <div id="message"></div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name1" id="name1" placeholder="" value="<?php echo $_SESSION["SESS_uname"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">User name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="username1" id="username1" placeholder="" value="<?php echo $_SESSION["SESS_uusername"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email1" id="email1" placeholder="" value="<?php echo $_SESSION["SESS_Emailid"]; ?>" readonly>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit1" value="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
			</div>
	</div>
    <!--<div id="menu2" class="tab-pane fade">
    <br>
     <div class="list-group" id="likemessage">
    </div>
  </div>-->
</div>
	
 <!-- <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="comment-tabs">
                    <form class="form-horizontal" id="accountSetForm" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-sm-10">                                
                                <div class="custom-input-file" id="preview">
                                <img id="previewing" src="" style="width:120px; height:120px;"/>
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="file" id="file">
                                    </label>
                                </div>
                                <div id="message"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">User name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="username" id="username" placeholder="" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="" readonly>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit" value="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
	</div>
  -->
        <!-- Account Seting -->
    </div>
    
</body>
</html>
<?php
    }else{?>
    <html>
    <body>
    <h1>This Link Has Been Expired!</h1>
    </body>
    </html>
    <?php
    }
}
?>




<?php
}else{?>
    <html>
    <body>
    <h1>This Link Has Been Expired!</h1>
    </body>
    </html>
    <?php
}
?>


