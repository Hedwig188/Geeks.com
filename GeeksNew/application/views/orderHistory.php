<div>
    <div id="ohtitle">&nbsp;&nbsp;Your Order History</div>
    <div>
        <?php        
        echo '<div id="ohct">
                 <div class="ohct_t" style="margin-left:30px;">OrderDate</div>
                 <div class="ohct_t">OrderId</div>
                 <div class="ohct_t">Total</div>                 
              </div>';
        foreach($oh as $row){
            echo '<div class="ohbody">
                    <div class="ohbd" style="margin-left:30px;">'.$row->orderDate.'</div>
                    <div class="ohbd" style="text-decoration:underline;cursor:pointer" onclick="showOrderDetail('.$row->orderId.')">'.$row->orderId.'</div>
                    <div class="ohbd">$'.$row->total.'.00</div>                  
              </div>';
        }     
        ?>
    </div>
</div>
<?php
$this->db->close();
