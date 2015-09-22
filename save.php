<?php
$server = "localhost";
$username = "";
$password = "";
$database = "Test";

$con = mysql_connect($server) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);
$locationID = 1;
$email = mysql_real_escape_string($_POST["email"]);
$comment = mysql_real_escape_string($_POST["comment"]);

$sql = "INSERT INTO emails VALUES ($locationID, '$email', '$comment')";

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Comment added";
}

mysql_close($con);
?>