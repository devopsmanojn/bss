
<?php
if(isset($_POST['submit']))	
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$name = $_POST['name'];		
$cus_email= $_POST['email'];
$cus_phone= $_POST['phone'];
$cus_message= $_POST['message'];

$sql = "INSERT INTO contactus".
       "(name,email,phone,message,date) ". "VALUES
('$name','$cus_email','$cus_phone','$cus_message',now())";



mysql_select_db('bss');
$retval = mysql_query( $sql, $conn );

if($retval>0)
{		
	

header("location:thanku.php"); exit(); 
}
else
{
?>

<?php
die('Could not enter data: ' . mysql_error());
}
echo "";
mysql_close($conn);
}
?>