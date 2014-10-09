<?php

$con = mysql_connect("localhost:3306", 'root', 'wl901123');
if (!$con) {
    die("Failed to connect to MySQL: " . mysql_error());
}
mysql_select_db("hyw", $con);

$id = $_POST['delete_id'];
$query = "delete from productcategory where categoryId = $id";
$res1 = mysql_query($query);
$sql = "select categoryId,categoryName,categoryDesc from productcategory";
$res = mysql_query($sql);

while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['categoryId'] . '</td>
                                    <td>' . $row['categoryName'] . '</td>
                                    <td>' . $row['categoryDesc'] . '</td> 
                                    <td><div class="changeCat" id="' . ($row['categoryId'] + 1) . '"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="deleteCat" id="' . $row['categoryId'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';
}

mysql_close($con);
?>
