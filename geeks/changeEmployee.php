<?php session_start();
require 'modules/DBConnect.php';
$id3 = $_POST['change_id'];

$sql = 'select userId,employId,FirstName,LastName,email,password,age,type from employee where Id='.$id3.'';
$res = mysql_query($sql, $con);
$row = mysql_fetch_array($res);
$_SESSION['employ'] = $row;
//echo '<script type="text/javascript">window.alert("'.$row.'")</script>';

$_SESSION['Id3'] = $id3;
mysql_close($con);
?>






