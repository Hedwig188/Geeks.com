<?php session_start();
    $data = $_SESSION['data'];
    
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Change Product</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="changeProcess.php" method="post" onsubmit="return showError()">
                    <div class="form-group ">
                        <label for="ProdName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="ProdName" id="ProdName" placeholder="Product Name" <?php echo 'value="'.$data['productName'].'"' ?>>                                                        
                            <span class="help-block" id="err1"><i class="fa fa-warning"></i>Product name only contains characters and numbers.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Category</label>
                        <div class="col-md-10">
                            <select class="form-control" id="sel" name="sel">
                                <?php echo '<option value="'.$data['productCategoryId'].'">'.$data['productCategoryId'].'</option>'?>
                                <option value="0">-------- choose --------</option>
                                <?php                                
                                require 'modules/DBConnect.php';
                                $sql = "select categoryName,categoryId from productcategory";
                                $res = mysql_query($sql,$con);                                
                                while ($row = mysql_fetch_array($res)) {
                                    echo '<option value="' . $row['categoryId'] . '">' . $row['categoryName'] . '</option>';
                                }
                                mysql_close($con);
                                ?>
                            </select>
                            <span class="help-block" id="err2"><i class="fa fa-warning"></i>Please select one category.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">File input</label>
                        <div class="col-md-10">
                            <input type="file" class="btn btn-default" id="prodImg" name="prodImg">
                            <p class="help-block">
                                <?php echo $data['productImg']?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="appendprepend">Origin Price</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input class="form-control" id="prepend" type="text" name="prepend" <?php echo 'value="'.$data['productOriginPrice'].'"'?>>                                        
                                    </div>
                                    <span class="help-block" id="err3"><i class="fa fa-warning"></i>Please input the origin Price.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Discount</label>
                        <div class="col-md-10">
                            <select class="form-control" id="dis" name="dis">
                                <?php echo '<option value="'.$data['productDisc'].'">  '.($data['productDisc']*100).'% off</option>'?>
                                <option value="1">-- choose --</option>
                                <option value="0.9">  10% off</option>
                                <option value="0.8">  20% off</option>
                                <option value="0.7">  30% off</option>
                                <option value="0.6">  40% off</option>
                                <option value="0.5">  50% off</option>
                                <option value="0.4">  60% off</option>
                                <option value="0.3">  70% off</option>
                                <option value="0.2">  80% off</option>
                                <option value="0.1">  90% off</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="desc" id="desc" placeholder="Product Description.." rows="3" ><?php echo $data['productDesc']?></textarea>
                            <span class="help-block" id="err4"><i class="fa fa-warning"></i>Please add some description.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id = "btn1" type="submit" class="btn btn-primary">Change Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>
<script src="js/forms.js"></script>