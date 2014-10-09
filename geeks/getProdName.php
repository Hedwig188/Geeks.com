<?php
require 'modules/DBConnect.php';
if (isset($_POST['catId']) && isset($_POST['sale'])) {
    $cid = $_POST['catId'];
    $sale = $_POST['sale'];
    echo '<option value = "">Select a Product Name</option>';
    if ($sale == 0) {//not sale
        $sql = "select productName,product.productId from product,orderdetail where productCategoryId = $cid and product.productId = orderdetail.productId";
        $res = mysql_query($sql);
        while ($row = mysql_fetch_array($res)) {
            echo '<option value = "' . $row['productId'] . '">' . $row['productName'] . '</option>';
        }
    }
    if ($sale == 1) {
        $sql1 = "select orderdetail.productId from orderdetail,sale where orderdetail.productId=sale.productId";
        $res1 = mysql_query($sql1);
        while ($row1 = mysql_fetch_array($res1)) {
            $pid = $row1['productId'];
            $sql = "select productName from product where productId = $pid and productCategoryId = $cid";
            $res = mysql_query($sql);
            while ($row = mysql_fetch_array($res)) {
                echo '<option value = "' . $pid. '">' . $row['productName'] . '</option>';
            }
        }
    }
}
mysql_close($con);
