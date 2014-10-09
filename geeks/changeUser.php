<?php session_start();
require 'modules/DBConnect.php';
$id = $_POST['change_id'];

$sql = 'select userName,userPwd,userType,userEmail from user where userId='.$id.'';
$result = mysql_query($sql, $con);
$row = mysql_fetch_array($result);
$_SESSION['user'] = $row;
$_SESSION['userId'] = $id;
mysql_close($con);
?>






