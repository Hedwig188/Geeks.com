<?php
require 'modules/DBConnect.php';
$id = $_POST['delete_id'];
$query = 'delete from product where productId = '.$id.'';
$res1 = mysql_query($query);
$sql = "select product.productId,product.productName,productcategory.CategoryName,product.productImg,product.productOriginPrice,product.productDisc,product.productDesc from productcategory,product where product.productCategoryId = productCategory.CategoryId";
$res = mysql_query($sql);

while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['productId'] . '</td>
                                    <td>' . $row['productName'] . '</td>
                                    <td>' . $row['CategoryName'] . '</td>                                    
                                    <td>' . $row['productImg'] . '</td>
                                    <td>' . $row['productOriginPrice'] . '</td>
                                    <td>' . $row['productDisc'] . '</td>
                                    <td>' . $row['productDesc'] . '</td>
                                    <td><div class="change_class" id="' . ($row['productId']+1) . '" onclick="changeProd()"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="delete_class" id="' . $row['productId'] . '" onclick="deleteProd()"><a style="cursor:pointer">Delete</a></div></td></tr>';
}
mysql_close($con);
?>
