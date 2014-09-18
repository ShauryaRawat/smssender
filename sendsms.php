SENDING SMS MESSAGES
<?
# Connect to the database
mysql_connect('localhost','john','pass');

Function send_sms($phone,$message) {
   $sql = "insert into ozekismsout (receiver,msg,status) values ('$phone','$msg','send')";
   mysql('dbname',$sql);
};

send_sms("+362012234567","Hello World!");
?>