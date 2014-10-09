<!DOCTYPE html>
<div>
    <div id="basictop">&nbsp;&nbsp;Your Shipping Address</div>
    <form id="shipform">
        <?php        
        $name = $address = $city = $state = $zip = $phone = "";
        foreach($ship as $row){
            $name = $row->sName;
            $address = $row->sAddress;
            $city = $row->sCity;
            $state = $row->sState;
            $zip = $row->sZip;
            $phone = $row->sPhone;
            echo '<div id="d' . $row->sId . '">            
                    <label>' . $name . '</label><br>
                    <label>' . $address . '</label><br>
                    <label>' . $city . '</label><br>
                    <label>' . $state . '</label><br>
                    <label>' . $zip . '</label><br>
                    <label>' . $phone . '</label><br>
                    <span onclick="edit('.$row->sId.')">Edit</span>
                    <span onclick="deletes('.$row->sId.')">Delete</span>
                 </div>';
        }
        ?> 
        <button type="button" id="addShip" onclick="add()">Add new ship address</button>
    </form>
</div>

