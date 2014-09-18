//------START OF SMS--------------  

//Code using fopen  
error_reporting(0);  

//Change your configurations here.  
//---------------------------------  
$message=your message;  

$username="username";  
$password="password";  
$sender="SENDER";  
$domain="example.com";  
$priority="A"; //"A- Promotional SMS,  T-Transactional SMS"  
$mobile=mobile number;  

$username=urlencode($username);  
$password=urlencode($password);  
$sender=urlencode($sender);  
$message=urlencode($message);  

$parameters="username=".$username."&password=".$password."&sendername=".$sender."&mobile=".$mobile."&message=".$message."&routetype=".$priority;  

$fp = fopen("http://$domain/SMS_API/sendsms.php?$parameters", "r");  

$response = stream_get_contents($fp);  
fpassthru($fp);  
fclose($fp);  

//-----END OF SMS----------  