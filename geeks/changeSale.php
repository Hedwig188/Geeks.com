<?php session_start();
 require 'modules/DBConnect.php';
$id1 = $_POST['change_id'];
$sql1 = 'select saleId,productId,startDate,endDate,discount from sale where saleId='.$id1.'';
$result = mysql_query($sql1, $con);
$row1 = mysql_fetch_array($result);
$_SESSION['sale'] = $row1;
$_SESSION['saleId'] = $id1;
mysql_close($con);

?>






