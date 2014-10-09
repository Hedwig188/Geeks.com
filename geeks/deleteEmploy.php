<?php
require 'modules/DBConnect.php';
$id = $_POST['delete_id'];
$name = $_POST['delete_name'];
$query = "delete from employee where Id = $id";
mysql_query($query,$con);
mysql_close($con);
?>
