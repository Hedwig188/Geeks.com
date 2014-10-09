<?php 
foreach($editShip as $row) {
    $name = $row->sName;
    $add = $row->sAddress;
    $city = $row->sCity;
    $state = $row->sState;
    $zip = $row->sZip;
    $phone = $row->sPhone;
}
?>
<!DOCTYPE html>
<div>
    <div id="basictop">&nbsp;&nbsp;Edit Shipping Address</div>
    <form id="editshipform">
        <div>
            <label for="sName1">Name(first&last)</label><br>
            <input id="sName1" type="text" <?php echo 'value="'.$name.'"';?>><br>
            <p id="pname1">Please enter a address.</p>
        </div>
        <div>
            <label for="sAddress1">Shipping Address</label><br>
            <input id="sAddress1" type="text" <?php echo 'value="'.$add.'"';?>><br>
            <p id="paddress1">Please enter a address.</p>
        </div>
        <div>
            <label for="sCity1">City</label><br>
            <input id="sCity1" type="text" <?php echo 'value="'.$city.'"';?>><br>
            <p id="pcity1">Please enter a city.</p>
        </div>
        <div>
            <label for="sState1">State</label><br>
            <select id="sState1">
                <?php echo '<option value="'.$state.'">'.$state.'</option>'?>
                <option value="">Select a State</option> 
                <option value="AL">Alabama</option> 
                <option value="AK">Alaska</option> 
                <option value="AZ">Arizona</option> 
                <option value="AR">Arkansas</option> 
                <option value="CA">California</option> 
                <option value="CO">Colorado</option> 
                <option value="CT">Connecticut</option> 
                <option value="DE">Delaware</option> 
                <option value="DC">District Of Columbia</option> 
                <option value="FL">Florida</option> 
                <option value="GA">Georgia</option> 
                <option value="HI">Hawaii</option> 
                <option value="ID">Idaho</option> 
                <option value="IL">Illinois</option> 
                <option value="IN">Indiana</option> 
                <option value="IA">Iowa</option> 
                <option value="KS">Kansas</option> 
                <option value="KY">Kentucky</option> 
                <option value="LA">Louisiana</option> 
                <option value="ME">Maine</option> 
                <option value="MD">Maryland</option> 
                <option value="MA">Massachusetts</option> 
                <option value="MI">Michigan</option> 
                <option value="MN">Minnesota</option> 
                <option value="MS">Mississippi</option> 
                <option value="MO">Missouri</option> 
                <option value="MT">Montana</option> 
                <option value="NE">Nebraska</option> 
                <option value="NV">Nevada</option> 
                <option value="NH">New Hampshire</option> 
                <option value="NJ">New Jersey</option> 
                <option value="NM">New Mexico</option> 
                <option value="NY">New York</option> 
                <option value="NC">North Carolina</option> 
                <option value="ND">North Dakota</option> 
                <option value="OH">Ohio</option> 
                <option value="OK">Oklahoma</option> 
                <option value="OR">Oregon</option> 
                <option value="PA">Pennsylvania</option> 
                <option value="RI">Rhode Island</option> 
                <option value="SC">South Carolina</option> 
                <option value="SD">South Dakota</option> 
                <option value="TN">Tennessee</option> 
                <option value="TX">Texas</option> 
                <option value="UT">Utah</option> 
                <option value="VT">Vermont</option> 
                <option value="VA">Virginia</option> 
                <option value="WA">Washington</option> 
                <option value="WV">West Virginia</option> 
                <option value="WI">Wisconsin</option> 
                <option value="WY">Wyoming</option>
            </select>
            <p id="pstate1">Please select a state.</p>
        </div>
        <div>
            <label for="sZip1">Zip</label><br>
            <input id="sZip1" type="text" <?php echo 'value="'.$zip.'"';?>><br>
            <p id="pzip1">Please enter a zip-code.</p>
        </div>
        <div>
            <label for="sPhone1">Phone number</label><br>
            <input id="sPhone1" type="text" <?php echo 'value="'.$phone.'"';?>><br>
            <p id="pphone1">Please enter a phone number.</p>
        </div>    
        <button type="button" id="editBtn" onclick="editShip()">Save changes</button>
    </form>

</div>
