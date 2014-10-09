<div id="table_title">
    <div class="tcc">product Id</div>
    <div class="tcc">quantity</div>
    <div class="tcc">product price</div>
    <div class="tcc">customer Id</div>
    <div class="tcc">order date</div>
    <div class="tcc">billing address</div>
    <div class="tcc">shipping address</div>
    <div class="tcc">total</div>    
</div>
<?php
require 'modules/DBConnect.php';

if (isset($_POST['pid'])) {
    $_SESSION['sum'] = $sum = 0;
    $pid = $_POST['pid'];
    $sql = "select productId,quantity,price,customerId,orderDate,total,bAddress,sAddress from ooder,orderdetail where productId = $pid and ooder.orderId = orderdetail.orderId";
    $res = mysql_query($sql);
    while ($row = mysql_fetch_array($res)) {
        echo '<div class="table_c">
                <div class="tcc">' . $row['productId'] . '</div>
                <div class="tcc">' . $row['quantity'] . '</div>
                <div class="tcc">' . $row['price'] . '</div>
                <div class="tcc">' . $row['customerId'] . '</div>
                <div class="tcc">' . $row['orderDate'] . '</div>
                <div class="tcc">' . $row['bAddress'] . '</div>
                <div class="tcc">' . $row['sAddress'] . '</div>
                <div class="tcc">' . $row['total'] . '</div>                  
            </div>';
        $sum+=$row['total'];
    }
    $_SESSION['sum'] = $sum;
} elseif (isset($_POST['catId']) && isset($_POST['sale'])) {
    $_SESSION['sum'] = $sum = 0;
    $cid = $_POST['catId'];
    $sale = $_POST['sale'];
    if ($sale == 0) {//not sale
        if ($cid == "") {
            $sql = "select product.productId from product,orderdetail where product.productId = orderdetail.productId";
        } else {
            $sql = "select product.productId from product,orderdetail where product.productId = orderdetail.productId and product.productCategoryId = $cid";
        }
        $res = mysql_query($sql);
        while ($row = mysql_fetch_array($res)) {
            $id = $row['productId'];
            $sql1 = "select productId,quantity,price,customerId,orderDate,total,bAddress,sAddress from ooder,orderdetail where productId = $id and ooder.orderId = orderdetail.orderId";
            $res1 = mysql_query($sql1);
            while ($row1 = mysql_fetch_array($res1)) {
                echo '<div class="table_c">
                            <div class="tcc">' . $row1['productId'] . '</div>
                            <div class="tcc">' . $row1['quantity'] . '</div>
                            <div class="tcc">' . $row1['price'] . '</div>
                            <div class="tcc">' . $row1['customerId'] . '</div>
                            <div class="tcc">' . $row1['orderDate'] . '</div>
                            <div class="tcc">' . $row1['bAddress'] . '</div>
                            <div class="tcc">' . $row1['sAddress'] . '</div>
                            <div class="tcc">' . $row1['total'] . '</div>                  
                        </div>';
                $sum+=$row1['total'];
            }
            
        }
        $_SESSION['sum'] = $sum;
    }
    if ($sale == 1) {
        $sql1 = "select orderdetail.productId from orderdetail,sale where orderdetail.productId=sale.productId";
        $res1 = mysql_query($sql1);
        while ($row1 = mysql_fetch_array($res1)) {
            $pid = $row1['productId'];
            if ($cid == "") {
                $sql3 = "select productId from product where productId = $pid";
            } else {
                $sql3 = "select productId from product where productId = $pid and productCategoryId = $cid";
            }
            $res3 = mysql_query($sql3);
            while ($row3 = mysql_fetch_array($res3)) {
                $sql2 = "select productId,quantity,price,customerId,orderDate,total,bAddress,sAddress from ooder,orderdetail where productId = $pid and ooder.orderId = orderdetail.orderId";
                $res2 = mysql_query($sql2);
                while ($row2 = mysql_fetch_array($res2)) {
                    echo '<div class="table_c">
                            <div class="tcc">' . $row2['productId'] . '</div>
                            <div class="tcc">' . $row2['quantity'] . '</div>
                            <div class="tcc">' . $row2['price'] . '</div>
                            <div class="tcc">' . $row2['customerId'] . '</div>
                            <div class="tcc">' . $row2['orderDate'] . '</div>
                            <div class="tcc">' . $row2['bAddress'] . '</div>
                            <div class="tcc">' . $row2['sAddress'] . '</div>
                            <div class="tcc">' . $row2['total'] . '</div>                  
                        </div>';
                    $sum+=$row2['total'];
                }
                
            }
            $_SESSION['sum'] = $sum;
        }
        
    }
} elseif (isset($_POST['sale'])) {
    $_SESSION['sum'] = $sum = 0;
    $cid = $_POST['catId'];
    $sale = $_POST['sale'];
    if ($sale == 0) {//not sale
        $sql = "select product.productId from product,orderdetail where product.productId = orderdetail.productId";
        $res = mysql_query($sql);
        while ($row = mysql_fetch_array($res)) {
            $id = $row['productId'];
            $sql1 = "select productId,quantity,price,customerId,orderDate,total,bAddress,sAddress from ooder,orderdetail where productId = $id and ooder.orderId = orderdetail.orderId";
            $res1 = mysql_query($sql1);
            while ($row1 = mysql_fetch_array($res1)) {
                echo '<div class="table_c">
                            <div class="tcc">' . $row1['productId'] . '</div>
                            <div class="tcc">' . $row1['quantity'] . '</div>
                            <div class="tcc">' . $row1['price'] . '</div>
                            <div class="tcc">' . $row1['customerId'] . '</div>
                            <div class="tcc">' . $row1['orderDate'] . '</div>
                            <div class="tcc">' . $row1['bAddress'] . '</div>
                            <div class="tcc">' . $row1['sAddress'] . '</div>
                            <div class="tcc">' . $row1['total'] . '</div>                  
                        </div>';
                $sum+=$row1['total'];
            }            
        }
        $_SESSION['sum'] = $sum;
    }
    if ($sale == 1) {
        $sql1 = "select orderdetail.productId from orderdetail,sale where orderdetail.productId=sale.productId";
        $res1 = mysql_query($sql1);
        while ($row1 = mysql_fetch_array($res1)) {
            $pid = $row1['productId'];
            $sql2 = "select productId,quantity,price,customerId,orderDate,total,bAddress,sAddress from ooder,orderdetail where productId = $pid and ooder.orderId = orderdetail.orderId";
            $res2 = mysql_query($sql2);
            while ($row2 = mysql_fetch_array($res2)) {
                echo '<div class="table_c">
                            <div class="tcc">' . $row2['productId'] . '</div>
                            <div class="tcc">' . $row2['quantity'] . '</div>
                            <div class="tcc">' . $row2['price'] . '</div>
                            <div class="tcc">' . $row2['customerId'] . '</div>
                            <div class="tcc">' . $row2['orderDate'] . '</div>
                            <div class="tcc">' . $row2['bAddress'] . '</div>
                            <div class="tcc">' . $row2['sAddress'] . '</div>
                            <div class="tcc">' . $row2['total'] . '</div>                  
                        </div>';
                $sum+=$row2['total'];
            }           
        }
        $_SESSION['sum'] = $sum;
    }
}

echo '<div id="sum">Total:$'.$_SESSION['sum'].'.00</div>';
mysql_close($con);
