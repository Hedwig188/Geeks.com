<?php
require 'modules/DBConnect.php';
$id = $_POST['delete_id'];
$query = "delete from user where userId = $id";
mysql_query($query,$con);
mysql_close($con);
?>
