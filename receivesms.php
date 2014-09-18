RECEIVING SMS MESSAGES
<?
# Connect to the database
mysql_connect('localhost','john','pass');

$sql = "select sender,msg from ozekismsin";
$res =  mysql('dbname',$sql);
$count = mysql_num_rows($res);

for ($x=0;$x<$count;$x++) {
   list ($num,$message) =mysql_fetch_row($res); 
   echo "$num - $message <br>";
}
?>