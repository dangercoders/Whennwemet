<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Login With Yahoo */
require_once 'yahoo/openid.php';

$yahooid = new LightOpenID("whennwemet.com");
$yahooid->identity = 'https://me.yahoo.com';
$yahooid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$yahooid->returnUrl = 'http://whennwemet.com/yahoologin/login-yahoo.php';

if ($yahooid->mode == 'cancel') {
        echo "User has canceled authentication !";
    } elseif($yahooid->validate()) {
        $data 		= $yahooid->getAttributes();
        $email 		= $data['contact/email'];
        $firstname 	= $data['namePerson/first'];
        $lastname 	= $data['namePerson/last'];
        $loginwith 	= 'Yahoo';
        $Identity 	= $yahooid->identity;
       /* for($i=0;$i<$Identity.length;$i++){
        echo $Identity[$i];
        }*/
        $Identity	= explode("/",$yahooid->identity);
    	$userid		= $Identity[4];
    	$loginwith  = 'Yahoo';
        echo $email;
        echo $lastname;
        //echo $Identity;
        echo "userid" .$userid;
        echo "name  " .$firstname;	
    	
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login With Yahoo</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="content">
	<div class="login_left">
		<span class="linkedin"><a href="<?php echo $yahooid->authUrl() ?>"> <img border="0" src="images/login_with_yahoo.png" width="273" height="60" alt="loin with yahoo" title="loin with yahoo"></a> </span><br/>
	</div>
</div>

</body>
</html>