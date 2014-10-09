<!DOCTYPE html>
<div>
    <div id="basictop">&nbsp;&nbsp;Your Shipping Address</div>
    <form id="shipform">
        <?php         
        $name = $address = $city = $state = $zip = $phone = "";
        foreach($ship as $row) {
            $name = $row->sName;
            $address = $row->sAddress;
            $city = $row->sCity;
            $state = $row->sState;
            $zip = $row->sZip;
            $phone = $row->sPhone;
            echo '<div class="c_s" id="'.$row->sId.'" onclick="clickShip('.$row->sId.')">            
                    <label>' . $name . '</label><br>
                    <label>' . $address . '</label><br>
                    <label>' . $city . '</label><br>
                    <label>' . $state . '</label><br>
                    <label>' . $zip . '</label><br>
                    <label>' . $phone . '</label><br>                    
                 </div>';
        }
        ?> 
        
        <button type="button" id="addShip" onclick="add1()">Add new ship address</button>
    </form>
</div>
