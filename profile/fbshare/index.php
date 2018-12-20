<?php
session_start();
$i=$_GET["url"];
$url='http://whennwemet.com/'.$i;
$_SESSION["usershare"]=$i;
//echo $_GET["url"];
//echo $_SERVER['REQUEST_URI'];
//echo $_GET['fb_action_ids'];
header("location: $url");
?>