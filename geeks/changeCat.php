<?php session_start();
require 'modules/DBConnect.php';
$id1 = $_POST['change_id'];

$sql1 = 'select categoryId,categoryName,categoryDesc from productcategory where categoryId='.$id1.'';
$result = mysql_query($sql1, $con);
$row1 = mysql_fetch_array($result);
$_SESSION['cat'] = $row1;
$_SESSION['catId'] = $id1;
mysql_close($con);

?>






