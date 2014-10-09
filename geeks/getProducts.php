<?php
require 'modules/DBConnect.php';
$sql = "select product.productId,product.productName,productcategory.CategoryName,product.productImg,product.productOriginPrice,product.productDisc,product.productDesc from productcategory,product where product.productCategoryId = productcategory.CategoryId";

$res = mysql_query($sql,$con);

while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['productId'] . '</td>
                                    <td>' . $row['productName'] . '</td>
                                    <td>' . $row['CategoryName'] . '</td>                                    
                                    <td>' . $row['productImg'] . '</td>
                                    <td>' . $row['productOriginPrice'] . '</td>
                                    <td>' . $row['productDisc'] . '</td>
                                    <td>' . $row['productDesc'] . '</td>
                                    <td><div class="change_class" id="' . ($row['productId']+1) . '"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="delete_class" id="' . $row['productId'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';
}
mysql_close($con);
?>
<script src="js/tables.js"></script>