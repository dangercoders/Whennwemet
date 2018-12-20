<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: true');
if(isset($_FILES["file"]["type"]))
{
$servername = "localhost";
$dbusername = "dangercoders";
$dbpassword = "QzrHbpr{1tkW";
$dbname = "whennwemet";
//include_once dirname(__FILE__) . '/Constants.php';
$response = array();
//$password=md5($_POST["newPassword"]);
$username=$_POST["username"];
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo $_FILES["file"]["error"];
$response["error"] = true;
$response["message"] = $_FILES["file"]["error"];
$_SESSION["error"]='true';
    $_SESSION["message"]=$_FILES["file"]["error"];
echo json_encode($response);
//echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
$filename=$_POST["username"].".".$file_extension;
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$filename; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath); // Moving Uploaded file
// Create connection
//echo "sdsds";
$conn = mysqli_connect($servername,$dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$filepath="http://whennwemet.com/profile/upload/".$filename;
$sql = "UPDATE userdata SET profilepic='$filepath' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
  // echo "Record updated successfully";
} else {
    //echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
$_SESSION["error"]='false';
    $_SESSION["message"]="Account Setting Successfully Changed";
$response["error"] = false;
$response["message"] = "Account Setting Successfully Changed";
header("location: index.php");
//echo json_encode($response);
/*echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>"; */
}
}
}
else
{
$_SESSION["error"]='true';
    $_SESSION["message"]="Invalid file Size or Type";
$response["error"] = true;
$response["message"] = "Invalid file Size or Type";
header("location: index.php");
echo json_encode($response);
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}

?>