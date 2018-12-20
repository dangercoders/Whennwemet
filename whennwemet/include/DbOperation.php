<?php

header('Access-Control-Allow-Origin: *');


class DbOperation
{
    private $con;
    private $con2;
    private $con3;
    
    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
        $this->con2 = $db->connect2();
        $this->con3 = $db->connect3();
       
    }
  
    //Method to join two table in difference database
    public function joindb(){
        $stmt = $this->con->prepare("SELECT * FROM userdata WHERE emailid like ?");
        $stmt->bind_param("s",$emailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
    }

    //Method to register a new student
    public function CreateUser($username,$name,$emailid,$password,$phone){
        if (!$this->isUserExists($emailid)) {
            $password = md5($password);
            $apikey = $this->generateApiKey();
            $date = date('Y-m-d H:i:s');
            $isconfirmed=0;
            if($stmt = $this->con->prepare("INSERT INTO userdata(username, name, phone, emailid,password, api_key,logintime, isconfirmed) values(?, ?, ?, ?,?,?,?,?)")){
            $stmt->bind_param("ssissssi",$username, $name, $phone, $emailid,$password,$apikey,$date,$isconfirmed);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            
            if ($result && (!$this->SendEmail($emailid,$name))) {
                return 0;
            } else {
                return 1;
            }
            
        } else {
            return 2;
        }
    }
    
    //Method to register a new Google User
    public function CreateGoogleUser($username,$name,$emailid,$googleid,$profilepic){
        if (!$this->isUserExists($emailid)) {
            $password = md5($password);
            $apikey = $this->generateApiKey();
            $date = date('Y-m-d H:i:s');
            if($stmt = $this->con->prepare("INSERT INTO userdata(username, name, emailid, gplusid, profilepic, api_key,logintime) values(?, ?, ?, ?,?,?,?)")){
            $stmt->bind_param("sssssss",$username, $name, $emailid,$googleid,$profilepic,$apikey,$date);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
            
        } else {
        	$date = date('Y-m-d H:i:s');
        	if($stmt1 = $this->con->prepare("update userdata set gplusid = ?,profilepic=?,logintime=? where username like ? and emailid like ?")){
           		 $stmt1->bind_param("sssss",$googleid,$profilepic,$date,$username,$emailid);
           		 $result1 = $stmt1->execute();
           		 }else{
           		 echo $this->con->error;
           	 }
           	 if ($result1) {
                return 0;
            } else {
                return 1;
            }
        }
    }
    
    //Method to register a new Facebook User
    public function CreateFbUser($username,$name,$emailid,$fbid,$profilepic){
        if (!$this->isUserExists($emailid)) {
            $password = md5($password);
            $apikey = $this->generateApiKey();
            $date = date('Y-m-d H:i:s');
            if($stmt = $this->con->prepare("INSERT INTO userdata(username, name, emailid, fbid, profilepic, api_key,logintime) values(?, ?, ?, ?,?,?,?)")){
            $stmt->bind_param("sssssss",$username, $name, $emailid,$fbid,$profilepic,$apikey,$date);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
            
        } else {
        $date = date('Y-m-d H:i:s');
        	if($stmt1 = $this->con->prepare("update userdata set fbid = ?,profilepic=?,logintime=? where username like ? and emailid like ?")){
           		 $stmt1->bind_param("sssss",$fbid,$profilepic,$date,$username,$emailid);
           		 $result1 = $stmt1->execute();
           		 }else{
           		 echo $this->con->error;
           	 }
           	 if ($result1) {
                return 0;
            } else {
                return 1;
            }
        }
    }
    
    //Method to register a new Linkin User
    public function CreateLinkUser($username,$name,$emailid,$linkid,$profilepic){
        if (!$this->isUserExists($emailid)) {
            $password = md5($password);
            $apikey = $this->generateApiKey();
            $date = date('Y-m-d H:i:s');
            if($stmt = $this->con->prepare("INSERT INTO userdata(username, name, emailid, linkid, profilepic, api_key,logintime) values(?, ?, ?, ?,?,?,?)")){
            $stmt->bind_param("sssssss",$username, $name, $emailid,$linkid,$profilepic,$apikey,$date);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
            
        } else {
        $date = date('Y-m-d H:i:s');
        	if($stmt1 = $this->con->prepare("update userdata set linkid= ?,profilepic=?,logintime=? where username like ? and emailid like ?")){
           		 $stmt1->bind_param("sssss",$linkid,$profilepic,$date,$username,$emailid);
           		 $result1 = $stmt1->execute();
           		 }else{
           		 echo $this->con->error;
           	 }
           	 if ($result1) {
                return 0;
            } else {
                return 1;
            }
        }
    }
    
    //Method to register a new Yahoo User
    public function CreateTwitterUser($username,$name,$emailid,$twitterid,$profilepic){
        if (!$this->isUserExists($emailid)) {
            $password = md5($password);
            $apikey = $this->generateApiKey();
            $date = date('Y-m-d H:i:s');
            if($stmt = $this->con->prepare("INSERT INTO userdata(username, name, emailid, twitterid, profilepic, api_key,logintime) values(?, ?, ?, ?,?,?,?)")){
            $stmt->bind_param("sssssss",$username, $name, $emailid,$twitterid,$profilepic,$apikey,$date);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
            
        } else {
        $date = date('Y-m-d H:i:s');
        	if($stmt1 = $this->con->prepare("update userdata set twitterid= ?,profilepic=?,logintime=? where username= ? and emailid=?")){
           		 $stmt1->bind_param("sssss",$twitterid,$profilepic,$date,$username,$emailid);
           		 $result1 = $stmt1->execute();
           		 }else{
           		 echo $this->con->error;
           	 }
           	 if ($result1) {
                return 0;
            } else {
                return 1;
            }
        }
    }
    
    
    //Send Email
    public function SendEmail($Email,$FullName){
    
    $code=rand(1000,999999);
    $code1='@$vc';
    $code2='r42sw';
    $confirmationcode=$code1."".$code."".$code2;
    $user_email='friendsforever@whennwemet.com';
    $to = $Email;
    // $to = 'shiksha000@gmail.com';
$subject = 'Confirmation Mail';
 
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
$message .='<td align="center" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; font-size:40px;"><i> Whenn We Met</i></td>';
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
$message .='<td align="left" valign="middle" style="font-family:Georgia, Times New Roman, Times, serif; color:#000000; font-size:15px;">Your confirmationtion link is: <a href="http://whennwemet.com/profile/confirm.php?confirmationcode='.$confirmationcode.'">http://whennwemet.com/profile/confirm.php?confirmationcode='.$confirmationcode.'</a>.</div>';
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
            
// Sending email
mail($to, $subject, $message, $headers);
    
     if($stmt = $this->con3->prepare("INSERT INTO deleteuser (emailid,passwordcode) values(?, ?)")){
            $stmt->bind_param("ss",$to,$confirmationcode);
            $result = $stmt->execute();
            }else{
            echo $this->con->error;
            }
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
    
    }
    
    //Method to check emailid exit or not 
    public function CheckUser($emailid){
        $stmt = $this->con->prepare("SELECT * FROM userdata WHERE emailid like ?");
        $stmt->bind_param("s",$emailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
    }

public function checkbalance($userid){
$stmt = $this->con->prepare("SELECT * FROM userdata WHERE userid=? and debit>0");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
}


public function guessmate($guessname, $msgid){
$name=$guessname.'%';
$nameln=strlen($guessname);
$stmt = $this->con2->prepare("SELECT * FROM messagedata WHERE msgid=? and sendername like ?");
        $stmt->bind_param("is",$msgid,$name);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        if($num_rows>0){
        $stmt1 = $this->con2->prepare("UPDATE messagedata set comments= ? where msgid= ?");
        $stmt1->bind_param("si",$guessname,$msgid);
	//var_dump($stmt1);
        $stmt1->execute();
        $stmt1->store_result();
        //$num_rows = $stmt->num_rows;
        $stmt1->close();
        return $num_rows>0;
        }else{
        $stmt2 = $this->con2->prepare("UPDATE messagedata set guessname =concat(comments,',',?) where msgid=?");
        $stmt2->bind_param("si",$guessname,$msgid);
        $stmt2->execute();
        $stmt2->store_result();
        //$num_rows = $stmt->num_rows;
        $stmt2->close();
        return $num_rows>0;
        }
}


public function updateguessname($guessname, $msgid){
$stmt = $this->con2->prepare("update messagedata set comments = ? where msgid= ?");
        $stmt->bind_param("si",$guessname,$msgid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
}


public function updatefcmid($fcmid,$useremailid){
$stmt = $this->con->prepare("update userdata set fcmid= ? where emailid like ?");
        $stmt->bind_param("ss",$fcmid,$useremailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
}

public function updatecredit($username, $emailid,$shareuser){
$stmt = $this->con->prepare("update userdata set debit = debit+1 where username= ? and emailid=?");
        $stmt->bind_param("ss",$username,$emailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
         $date = date('Y-m-d H:i:s');
        if($stmt1 = $this->con3->prepare("INSERT INTO shareuserdata(shareuser, referuser,logintime) values(?, ?, ?)")){
            $stmt1->bind_param("sss",$shareuser,$username,$date);
            $result1 = $stmt1->execute();
            }else{
            echo $this->con3->error;
            }
            $stmt1->close();
        return $num_rows>0;
}

public function updatedebit($userid){
$stmt = $this->con->prepare("update userdata set debit = debit-1 where userid= ?");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
}

public function updatelike($msgid){
$val="1";
$stmt1 = $this->con2->prepare("select * from messagedata where msglike = ? and msgid= ?");
        $stmt1->bind_param("ii",$val,$msgid);
        $stmt1->execute();
        $stmt1->store_result();
        $num_rows1 = $stmt1->num_rows;
        $stmt1->close();
	if($num_rows1>0){
	$val=null;
	$return=2;
	}

$stmt = $this->con2->prepare("update messagedata set msglike = ? where msgid= ?");
        $stmt->bind_param("ii",$val,$msgid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        if($return==2)
        return $return;
        else
        return $num_rows>0;
}
    //Method to let a student log in
    public function UserLogin($emailid,$password){
        $password = md5($password);
        $date = date('Y-m-d H:i:s');
        if($stmt = $this->con->prepare("SELECT * FROM userdata WHERE emailid like ? and password=?")){
        $stmt->bind_param("ss",$emailid,$password);
        $stmt->execute();
        $stmt->store_result();
        $stmt1 = $this->con->prepare("update userdata set logintime=? WHERE emailid like ? and password=?");
        $stmt1->bind_param("sss",$emailid,$password,$date);
        $stmt1->execute();
        $stmt1->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        $stmt1->close();
        return $num_rows>0;
        }else{
        return 0;
        //echo $this->con->error;
        }
    }


public function isconfirm($emailid){
$isconf=1;
$stmt = $this->con->prepare("SELECT * FROM userdata WHERE emailid like ? and isconfirmed = ?");
//echo $stmt;
        $stmt->bind_param("si",$emailid,$isconf);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
      //  return $stmt;
         return $num_rows>0;
       
}



 //Method to create a new assignment
    public function submitmsg($name,$msg,$receiverid,$senderid){
        $stmt = $this->con2->prepare("INSERT INTO messagedata (receiverid,message,sendername,senderid) VALUES (?,?,?,?)");
        $stmt->bind_param("issi",$receiverid,$msg,$name,$senderid);
        $result = $stmt->execute();
        $stmt->close();
        $stmt1 = $this->con->prepare("SELECT name, emailid,fcmid FROM userdata WHERE userid=?");
        $stmt1->bind_param("i",$receiverid);
        $stmt1->execute();
        $user = $stmt1->get_result();
        $stmt->close();
        return $user;
    }


//Method to create a new assignment
    public function submitmsgsender($name,$msg,$receiverid,$senderid){
        $stmt = $this->con2->prepare("INSERT INTO messagedata (receiverid,message,sendername,senderid) VALUES (?,?,?,?)");
        $stmt->bind_param("isss",$receiverid,$msg,$name,$senderid);
        $result = $stmt->execute();
        $stmt->close();
        $stmt1 = $this->con->prepare("SELECT name, emailid FROM userdata WHERE userid=?");
        $stmt1->bind_param("i",$receiverid);
        $stmt1->execute();
        $user = $stmt1->get_result();
        $stmt->close();
        return $user;
    }

public function getemailid($receiverid){
$stmt = $this->con->prepare("SELECT emailid FROM userdata WHERE userid=?");
        $stmt->bind_param("i",$receiverid);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user;

}

public function getresetemailid($deregistrationcode){
$stmt = $this->con3->prepare("SELECT emailid FROM deleteuser WHERE passwordcode=?");
        $stmt->bind_param("s",$deregistrationcode);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user;
}

public function deleteresetpassword($deregistrationcode){
        $stmt = $this->con3->prepare("DELETE from deleteuser WHERE passwordcode=?");
        $stmt->bind_param("s",$deregistrationcode);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
    }

public function confirmemailid($emailid){
	$isconfirmed=1;
	$stmt = $this->con->prepare("update userdata set isconfirmed= ? where emailid= ?");
        $stmt->bind_param("is",$isconfirmed,$emailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
}

    //method to register a new facultly
    public function createFaculty($name,$username,$pass,$subject){
        if (!$this->isFacultyExists($username)) {
            $password = md5($pass);
            $apikey = $this->generateApiKey();
            $stmt = $this->con->prepare("INSERT INTO faculties(name, username, password, subject, api_key) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $username, $password, $subject, $apikey);
            $result = $stmt->execute();
            $stmt->close();
            if ($result) {
                return 0;
            } else {
                return 1;
            }
        } else {
            return 2;
        }
    }

    //method to let a faculty log in
    public function facultyLogin($username, $pass){
        $password = md5($pass);
        $stmt = $this->con->prepare("SELECT * FROM faculties WHERE username=? and password =?");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
    }

    //Method to create a new assignment
    public function createAssignment($name,$detail,$facultyid,$studentid){
        $stmt = $this->con->prepare("INSERT INTO assignments (name,details,faculties_id,students_id) VALUES (?,?,?,?)");
        $stmt->bind_param("ssii",$name,$detail,$facultyid,$studentid);
        $result = $stmt->execute();
        $stmt->close();
        if($result){
            return true;
        }
        return false;
    }

    //Method to update assignment status
    public function updateAssignment($id){
        $stmt = $this->con->prepare("UPDATE assignments SET completed = 1 WHERE id=?");
        $stmt->bind_param("i",$id);
        $result = $stmt->execute();
        $stmt->close();
        if($result){
            return true;
        }
        return false;
    }

    //Method to get all the assignments of a particular student
    public function getAssignments($studentid){
        $stmt = $this->con->prepare("SELECT * FROM assignments WHERE students_id=?");
        $stmt->bind_param("i",$studentid);
        $stmt->execute();
        $assignments = $stmt->get_result();
        $stmt->close();
        return $assignments;
    }

    //Method to get student details
    public function getUser($useremailid){
        $stmt = $this->con->prepare("SELECT * FROM userdata WHERE emailid like ?");
        $stmt->bind_param("s",$useremailid);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user;
    }

//Method to get student details
    public function getMate($username){
        $stmt = $this->con->prepare("SELECT * FROM userdata WHERE username like ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $user;
    }

 //Method to get student details
    public function getmsg($userid){
        $stmt = $this->con->prepare("SELECT * FROM messagedata");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $msg= $stmt->get_result();
        $stmt->close();
        return $msg;
    }
    
    public function searchuser($searchquery){
    $searchquery="%".$searchquery."%";
    $stmt = $this->con->prepare("SELECT * FROM userdata WHERE name LIKE ? OR username LIKE ? OR  emailid LIKE ?");
        $stmt->bind_param("sss",$searchquery,$searchquery,$searchquery);
        $stmt->execute();
        $queryresult= $stmt->get_result();
        $stmt->close();
        return $queryresult;
    }
    
    //Method to fetch all students from database
    public function getAllUser($userid){
        $stmt = $this->con2->prepare("SELECT * FROM messagedata WHERE receiverid=? ORDER BY msgtimestamp DESC");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $users = $stmt->get_result();
        $stmt->close();
        return $users;
    
}
public function getSendMessage($userid){
        $stmt = $this->con2->prepare("SELECT * FROM messagedata WHERE senderid=?");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $messages = $stmt->get_result();
        $stmt->close();
        return $messages;
    }
    
    public function getlikeMessage($userid){
        $stmt = $this->con2->prepare("SELECT * FROM messagedata WHERE receiverid=? and msglike=1");
        $stmt->bind_param("i",$userid);
        $stmt->execute();
        $messages = $stmt->get_result();
        $stmt->close();
        return $messages;
    }
    
    //Method to get faculy details by username
    public function getFaculty($username){
        $stmt = $this->con->prepare("SELECT * FROM faculties WHERE username=?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $faculty = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $faculty;
    }

    //Method to get faculty name by id
    public function getFacultyName($id){
        $stmt = $this->con->prepare("SELECT name FROM faculties WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $faculty = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $faculty['name'];
    }

    //Method to check the student username already exist or not
    private function isUserExists($emailid) {
    $str=explode("@",$emailid);
    $stmt = $this->con->prepare("SELECT userid from userdata WHERE username like ? and emailid like ?");
        $stmt->bind_param("ss",$str[0],$emailid);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    //Method to check the faculty username already exist or not
    private function isFacultyExists($username) {
        $stmt = $this->con->prepare("SELECT id from faculties WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    //Checking the student is valid or not by api key
    public function isValidUser($api_key) {
        $stmt = $this->con->prepare("SELECT userid from userdata WHERE api_key = ?");
        $stmt->bind_param("s", $api_key);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    //Checking the faculty is valid or not by api key
    public function isValidFaculty($api_key){
        $stmt = $this->con->prepare("SELECT id from faculties WHERE api_key=?");
        $stmt->bind_param("s",$api_key);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows>0;
    }

    //Method to generate a unique api key every time
    private function generateApiKey(){
        return md5(uniqid(rand(), true));
    }
}