<!DOCTYPE html>

<html lang="en">
<head>


      
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
    <meta charset="utf-8" />
    <title>Whennwemet</title>
    <script src="scripts/jquery.js"></script>


    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />


<meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
<link rel="stylesheet" href="css/sidebar.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
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
 <link rel="stylesheet" href="css/tabmenu.css">
</head>
<body >
    <!-- Side Navigation Menu-->

    <div>
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <div class="background">

                    </div>
                    <div><img class="circle" src="user.png"></div>
                    <div><span class="white-text name"></span></div>
                    <div><span class="white-text id"></span></div>
                </div>
            </li>
            <li><a href="map - Copy.html">Locate Bus</a></li>
            <li><a href="getdetails.html">Get bus Detail</a></li>
            <li><a href="bookbus.html">Book Bus</a></li>
            <li><a href="payment.html">Payment</a></li>
            <li><a href="#password" onclick="document.querySelector('#newpass').value='';document.querySelector('#cnewpass').value='';">Change Password</a></li>


            <li><div class="divider"></div></li>
            <li><a class="waves-effect" onclick="logout();">Logout</a></li>
        </ul>
        <div class="top-bar">
            <button data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></button>
        </div>
    </div>
    <br><br>
    
    <div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
      
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                <li><a href="#account-settings" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Account settings</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                       
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                                
                      
                      
                            </ul>  
                        </div>
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                  <ul class="media-list">
                      <li class="media">
                       
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                      
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="account-settings">
                    <form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10">                                
                                <div class="custom-input-file">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Vilma palma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">Nick name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Vilma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="vilma@mail.com">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
	</div>
  </div>
</body>
</html>
