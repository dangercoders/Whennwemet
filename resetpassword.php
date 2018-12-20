<?php 
/*** begin our session ***/
if(isset($_POST['resetemail']))
{
$servername = "localhost";
$dbusername = "dangercoders";
$dbpassword = "QzrHbpr{1tkW";
$dbname = "shareuserdatabase";
$dbname2 = "whennwemet";
$response = array();
$con=mysqli_connect("$servername","$dbusername","$dbpassword","$dbname2");
$resetemail =mysqli_real_escape_string ($con, $_POST['resetemail']);
$sql="SELECT * From userdata where emailid='$resetemail'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
while($row = mysqli_fetch_assoc($result)) { 
    // Gather all $row values into local variables 
    $Email= $row["emailid"];  
    $FullName= $row["name"];
    }
    $code=rand(1000,999999);
    $code1='@$vc';
    $code2='r42sw';
    $deregistrationcode=$code1."".$code."".$code2;
    $user_email='friendsforever@whennwemet.com';
    $to = $Email;
    // $to = 'shiksha000@gmail.com';
$subject = 'Deregistration Mail';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: <shubhamagarwal.co.in>' . "\r\n"; 
// Create email headers
$headers .= 'From: '.$user_email."\r\n".
    'Reply-To: '.$user_email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message

$message =  '<html xmlns="http://www.w3.org/1999/xhtml">';
$message .= '<head>';
$message .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$message .= '</head>';
$message .= '<body>';
$message .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$message .= ' <tr>';
$message .=  '<td align="center" valign="top" bgcolor="#f6f3e4" style="background-color:#f6f3e4;"><br>';
$message .= ' <br>';
$message .= ' <table width="800" border="0" cellspacing="0" cellpadding="0">';
$message .= '  <tr>';
$message .= '<td align="center" valign="top" style="padding-left:13px; padding-right:13px; background-color:#ffffff;"><table width="100%" border="0"            cellspacing="0" cellpadding="0">';
$message .= '          <tr>';
$message .= ' <td><table width="84" border="0" cellspacing="0" cellpadding="0">';
$message .= '<tr>';
$message .= '<td align="left" valign="middle" style="padding-top:15px;"><img src="http://whennwemet.com/img/logo.jpg" width="150" height="100"></td>';
$message .='        </tr>';
$message .='         </table></td>';
$message .=' </tr>';
$message .='          <tr>';
$message .='             <div><br>';
$message .='             </div>';
$message .='<td align="center" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; font-size:40px;"><i> WhennWeMet</i></td>';
$message .='  </tr>';
/*$message .='     <tr>';
$message .=' <td align="center" valign="middle" style="padding-top:7px;"><table width="240" border="0" cellspacing="0" cellpadding="0"> <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .=' </tr>'; */
$message .=' </table></td>';
$message .=' </tr>';

/*$message .=' <tr>';
$message .='<td align="center" valign="middle" style="padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/header.jpg" width="800" height="243" style="display:block;"></td>';
$message .=' </tr>'; */

$message .=' <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .=' </tr>';
$message .='  <tr>';
$message .='<td align="center" valign="middle" style="font-family: CinzelDecorative-Regular.ttf,Georgia, Times New Roman, Times, serif; color:#000000; font-size:24px; padding-bottom:5px;"><i>Hello ,'.$FullName.'</i>';
$message .='  <tr>';
$message .='<td align="left" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; color:#000000; font-size:15px;">You deregistration link is: <a href="http://whennwemet.com/profile/forgot.php?deregistrationcode='.$deregistrationcode.'">http://whennwemet.com/profile/forgot.php?deregistrationcode='.$deregistrationcode.'</a>.</div>';
$message .='  <tr>';
$message .='<td align="center" valign="middle" style="padding-bottom:15px; padding-top:15px;"><img src="http://shubhamagarwal.co.in/DOMS/Student/images/divider.gif" width="800" height="28"></td>';
$message .='  </tr>';
$message .='         <tr>';
$message .='<td align="left" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; font-size:12px; color:#000000;">';
$message .='<div style="color:#b30467; font-size:15px;"><b>Contact Us</b></div>';
$message .='               <br>';
             
              
$message .='               <div><br>';
 $message .='               WhennWemMet<br>';
$message .='friendsforever@whennwemet.com,   <br>';
$message .='Andheri East,<br>';
$message .='Mumbai ';
$message .='400069<br>';
$message .='<br>';
$message .='<br>';
$message .='<br>';
$message .='              </div></td>';
$message .='          </tr>';
$message .='        </table></td>';
$message .='      </tr>';
$message .='    </table>';
$message .='    <br>';
$message .='    <br></td>';
$message .='  </tr>';
$message .='  <tr>';
$message .='    <td align="center" valign="top">&nbsp;</td>';
$message .='  </tr>';
$message .='</table> ';
$message .='</body>';
$message .='</html>';
            mysqli_close($con);
// Sending email
mail($to, $subject, $message, $headers);
$con1=mysqli_connect("$servername","$dbusername","$dbpassword","$dbname");
$sql="INSERT INTO deleteuser (emailid,passwordcode)
  VALUES ('$resetemail', '$deregistrationcode')";
  if (mysqli_query($con1, $sql)) {
    $response["error"] = 'false';
$response["message"] = "Reset Email Has Been Sent To ".$resetemail;
echo json_encode($response);
                              
} else {
$response["error"] = 'true';
$response["message"] = mysqli_error($con1);
echo json_encode($response);
    
}


                       } 
  
else
{
$response["error"] = 'true';
$response["message"] = "No Emailid Exit";
echo json_encode($response);
}
}
?>