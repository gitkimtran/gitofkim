<?php
$conn_string="host=ec2-34-202-88-122.compute-1.amazonaws.com port=5432 dbname=dtokodjt9s8gb user=qhztgqwwakujbx password=92c35db102213f343ea0c2bee359f3dcd9c6d2bd0b5090254430cc327ab3a046";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
