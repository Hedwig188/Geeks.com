<?php 
require 'modules/DBConnect.php';
?>
<div class="page-content">
    <div id="search_title">
        <div>
            <label for="sale_input">Special Sale:</label>
            <input  type="radio" name="sale" value="1">Yes
            <input  type="radio" name="sale" value="0" checked="checked">No            
        </div>
        <div>
            <label for="cat_select">Product Category:</label>
            <select id="cat_select" onchange="selectCat()">
                <option value = "" selected="selected">Select a Category</option>
                <?php
                    $sql = "select categoryName,categoryId from productcategory";
                    $res = mysql_query($sql);
                    while($row = mysql_fetch_array($res)){
                        echo '<option value = "'.$row['categoryId'].'">'.$row['categoryName'].'</option>';     
                    }
                ?>                
            </select>
        </div>
        <div>
            <label for="name_select">Product Name:</label>
            <select id="name_select" onchange="selectName()">
                <option value="">Select a Product Name</option>
            </select>
        </div>
        
        <div id="result_table">           
        </div>
        
    </div>
</div>
<?php
mysql_close($con);