<?php
require 'modules/DBConnect.php';
$sql = "select saleId,productId,startDate,endDate,discount from sale";
$res = mysql_query($sql, $con);

while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['saleId'] . '</td>
                                    <td>' . $row['productId'] . '</td>
                                    <td>' . $row['startDate'] . '</td>                                    
                                    <td>' . $row['endDate'] . '</td>
                                    <td>' . $row['discount'] . '</td>                                    
                                    <td><div class="change" id="' . ($row['saleId'] + 1) . '"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="delete" id="' . $row['saleId'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';
}

mysql_close($con);
?>
<script src="js/tables.js"></script>