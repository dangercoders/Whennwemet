<?php
session_start();
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

/* * ***** google related activities start ** */
define("API_KEY", "81lnk7994soc0b");
define("SECRET_KEY", "df6vYH6y7OToUTh5");
/* make sure the url end with a trailing slash */
//define("SITE_URL", "http://whennwemet.com/linkinlogin/");
define("SITE_URL", "http://whennwemet.com/linkinlogin/");
/* the page where you will be redirected for authorzation */
define("REDIRECT_URL", SITE_URL."linkedin_login.php");
/* Set the scope */
define("SCOPE", 'r_basicprofile r_emailaddress' );

define("LOGOUT_URL", SITE_URL."logout.php");
/* * ***** google realted activities end ** */

?>