 <?php
 //response.addHeader("Access-Control-Allow-Origin", "*");
 //header('Access-Control-Allow-Origin: true');
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Origin: true');
$response = array();
if(isset($_FILES["file"]["type"])) {
$servername = "localhost";
$dbusername = "dangercoders";
$dbpassword = "QzrHbpr{1tkW";
$dbname = "whennwemet";
//include_once dirname(__FILE__) . '/Constants.php';
$username=strip_tags(trim($_POST["username"]));
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 1000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
$response["error"] = 'true';
$response["message"] = $_FILES["file"]["error"];
echo json_encode($response);
//echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
$filename=$_POST["username"].".".$file_extension;
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "../upload/".$filename; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath); // Moving Uploaded file
// Create connection
$conn = mysqli_connect($servername,$dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$filepath="http://whennwemet.com/profile/upload/".$filename;
$sql = "UPDATE userdata SET profilepic='$filepath' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
    $response["error"] = 'false';
    $response["message"] = "Account Setting Successfully Changed";
//header("location: /profile");
echo json_encode($response);
} else {
    mysqli_close($conn);
$response["error"] = 'true';
$response["message"] = "There Is Some Error.Please Try Later";
//header("location: /profile");
echo json_encode($response);
    //echo "Error updating record: " . mysqli_error($conn);
}
}
}
else{
$response["error"] = 'true';
$response["message"] = "Image should in jpeg or png format and less than 1 MB";
//header("location: /profile");
echo json_encode($response);
}
}else{
    $response["error"] = 'true';
$response["message"] = "There Is Some Error.Please Try Later";
//header("location: /profile");
echo json_encode($response);
}
?>