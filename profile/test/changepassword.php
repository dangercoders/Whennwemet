 <?php
 $response = array();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: true');
if(isset($_POST["newPassword"])){
$servername = "localhost";
$dbusername = "dangercoders";
$dbpassword = "QzrHbpr{1tkW";
$dbname = "whennwemet";
$response = array();
$password=md5(strip_tags(trim($_POST["newPassword"])));
$username=strip_tags(trim($_POST["username1"]));

// Create connection
$conn = mysqli_connect($servername,$dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE userdata SET password='$password' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    $response["error"] = 'false';
    $response["message"] = "Account Setting Successfully Changed";
//header("location: /profile");
echo json_encode($response);
   // echo "Record updated successfully";
} else {
    //echo "Error updating record: " . mysqli_error($conn);
    mysqli_close($conn);
    $response["error"] = 'true';
    $response["message"] = "There is Some Error.Please try later";
    echo json_encode($response);
}
}else{
    $response["error"] = 'true';
    $response["message"] = "There is Some Error.Please try later";
    echo json_encode($response);
}
?>