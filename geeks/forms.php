<link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- styles -->
<link href="css/styles.css" rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="js/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
<link href="js/select/bootstrap-select.min.css" rel="stylesheet">
<link href="js/tags/css/bootstrap-tags.css" rel="stylesheet">

<link href="css/forms.css" rel="stylesheet">
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Add Product</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="formProcess.php" method="post" onsubmit="return showError()">
                    <div class="form-group ">
                        <label for="ProdName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="ProdName" id="ProdName" placeholder="Product Name">                                                        
                            <span class="help-block" id="err1"><i class="fa fa-warning"></i>Product name only contains characters and numbers.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Category</label>
                        <div class="col-md-10">
                            <select class="form-control" id="sel" name="sel">
                                <option value="0">-------- choose --------</option>
                                <?php                                
                                require 'modules/DBConnect.php';
                                $sql = "select categoryName,categoryId from productcategory";
                                $res = mysql_query($sql, $con);
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
                                Please choose a image.
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
                                        <input class="form-control" id="prepend" type="text" name="prepend">                                        
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
                            <textarea class="form-control" name="desc" id="desc" placeholder="Product Description.." rows="3"></textarea>
                            <span class="help-block" id="err4"><i class="fa fa-warning"></i>Please input the product description.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id = "btn1" type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="js/form-helpers/js/bootstrap-formhelpers.min.js"></script>

<script src="js/select/bootstrap-select.min.js"></script>

<script src="js/tags/js/bootstrap-tags.min.js"></script>

<script src="js/mask/jquery.maskedinput.min.js"></script>

<script src="js/moment/moment.min.js"></script>

<script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- bootstrap-datetimepicker -->
<link href="js/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<script src="js/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/forms.js"></script>



