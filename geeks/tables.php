<!-- jQuery UI -->
<link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- styles -->
<link href="css/styles.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/tables.css">
<link href="js/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/datatables/dataTables.bootstrap.js"></script>
<div class="row">
    <div class="col-md-10" >
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Product Table</div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="ta1" name="ta1">
                    <thead>
                        <tr>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Discount</th>
                            <th>Product Description</th>
                            <th>Change</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="t1">
                        <?php
                        require 'getProducts.php';
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-10" >
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Sales Table</div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="ta2" name="ta2">
                    <thead>
                        <tr>
                            <th>Sale Id</th>
                            <th>Product Id</th>
                            <th>Product Category</th>
                            <th>Start Date</th>
                            <th>Discount</th>                            
                            <th>Change</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="t2">
                        <?php
                        require 'getSales.php';
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-10" >
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Category Table</div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="ta3" name="ta3">
                    <thead>
                        <tr>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>                                                       
                            <th>Change</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="ca2">
                        <?php
                        require 'getCategory.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
</div>

