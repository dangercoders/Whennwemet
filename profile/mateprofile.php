<?php
session_start();
$token=$_SESSION["token"];
$uuseremailid=$_SESSION["SESS_Emailid"];
$uuserid=$_SESSION["SESS_uuserid"];
if((!isset($token))&&(!isset($uuseremailid))&&(!isset($uuserid))) {
header("location:../");
}
?>