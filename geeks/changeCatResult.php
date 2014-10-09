<?php session_start();
$cat = $_SESSION['cat'];
?>
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
                <div class="panel-title">Change Category</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" action="CatChangeProcess.php" method="post" onsubmit="return validateCat()">
                    <div class="form-group ">
                        <label for="ProdName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="catName" id="catName" placeholder="Category Name" <?php echo 'value="'.$cat['categoryName'].'"' ?>>                                                        
                            <span class="help-block" id="er1" style="display:none;color:red;"><i class="fa fa-warning"></i>Product name only contains characters and numbers.</span>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="catDesc" id="catDesc" placeholder="Category Description.." rows="3"><?php echo $cat['categoryDesc']?></textarea>
                            <span class="help-block" id="er2" style="display:none;color:red;"><i class="fa fa-warning"></i>Please input the category description.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id = "addCat" type="submit" class="btn btn-primary">Change Category</button>
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



