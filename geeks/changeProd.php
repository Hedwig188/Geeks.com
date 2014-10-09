<?php session_start();
 require 'modules/DBConnect.php';
$id = $_POST['change_id'];
$sql = 'select productName,productCategoryId,productImg,productOriginPrice,productDisc,productDesc from product where productId='.$id.'';
$result = mysql_query($sql, $con);
$row = mysql_fetch_array($result);
$_SESSION['data'] = $row;
//print_r($_SESSION['data']);
$_SESSION['id'] = $id;
mysql_close($con);

?>






