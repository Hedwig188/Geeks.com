<?php
require 'modules/DBConnect.php';
$sql = "select categoryId,categoryName,categoryDesc from productcategory";
$res = mysql_query($sql, $con);

while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['categoryId'] . '</td>
                                    <td>' . $row['categoryName'] . '</td>
                                    <td>' . $row['categoryDesc'] . '</td>                               
                                    <td><div class="changeCat" id="' . ($row['categoryId'] + 1) . '"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="deleteCat" id="' . $row['categoryId'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';
}

mysql_close($con);
?>
<script src="js/tables.js"></script>