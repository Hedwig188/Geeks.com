<?php
foreach($od as $row) {
        echo '<div id="oi">Your Order Information</div>
            <div class="oic">Order Number:' . $row->orderId . '</div>
            <div class="oic">Order Date:' . $row->orderDate . '</div>
            <div class="oic">Shipped to:' . $row->sAddress . '</div>
            <div class="oic">Billed to:' . $row->bAddress . '</div>';   
    }        
    $path = "../../../Geeks/upload/";
    $j = 0;
    $total = 0;    
    echo '<div id="od">
             <div id="odtbb">
             <div id="odt">&nbsp;&nbsp;Your Order Details</div>
             <div class="odtb">name</div>
             <div class="odtb">quantity</div>
             <div class="odtb">price</div>
             </div>';
    foreach($odp as $row1) {        
        echo '<div class="tableDetail">
                    <div class="divimg"><a href="javascript:void(0);" onclick="showDetail(' . $row1->productId . ')"><img class="op" src="' . $path . $row1->productImg . '" alt="" border="0"></a></div>
                    <div class="it1" style="margin-left:0;"><a href="javascript:void(0);" onclick="showDetail(' . $row1->productId. ')">' . $row1->productName . '</a></div>
                    <div class="it1">' . $row1->quantity . '</div>                           
                    <div class="it1" id="qua' . $j . '">$' . $row1->quantity * round(($row1->productDisc * $row1->productOriginPrice)) . '.00</div>
              </div>';
        $j++;
        $total+=$row1->quantity * round(($row1->productDisc * $row1->productOriginPrice));       
    }
    echo '<div id="total_div">
            <div id="total">Total:$'.$total.'.00</div>
            <div id="fee">Shipping fees:Free</div>
        </div></div>';

