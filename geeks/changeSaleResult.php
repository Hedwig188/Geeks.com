<?php session_start();
    $sale = $_SESSION['sale'];
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
<script src="js/mask/jquery.maskedinput.min.js"></script>
<div class="col-md-6">
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Add Special Sale</div>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <form action="saleProcessResult.php" method="post" onsubmit="return true">
                <div>
                    <h4>Product Name</h4>
                    <p>

                        <select class="form-control" id="sel" name="na">
                            <?php echo '<option value="' . $sale['productId'] . '">' . $sale['productId'] . '</option>'?>
                            <option value="0">-------- choose --------</option>
                            <?php
                            $con = mysql_connect("localhost:3306", 'root', 'wl901123');
                            if (!$con) {
                                echo "Failed to connect to MySQL: " . mysql_error();
                            }
                            mysql_select_db('hyw');
                            $sql = "select productName,productId from product";
                            $res = mysql_query($sql, $con);
                            while ($row = mysql_fetch_array($res)) {
                                echo '<option value="' . $row['productId'] . '">' . $row['productName'] . '</option>';
                            }
                            mysql_close($con);
                            ?>
                        </select>


                    </p>
                </div>
                <div>
                    <h4>Discount</h4>
                    <p>
                        <select class="form-control" id="dis" name="ds">
                            <?php echo '<option value="' . $sale['discount'] . '">' . $sale['discount'] . '</option>'?>
                            <option value="1">-------- choose --------</option>
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
                    </p>
                </div>
                
                <div>
                    <P><label for="h-input">Start Date</label>
                    <div class="input-group">
                        <input type="date" name="sd" class="form-control mask-date" <?php echo 'value="'.$sale['startDate'].'"' ?>>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </P>
                    <p class="note">
                        Data format **/**/****
                    </p>
                </div>
                <div>
                    <p><label for="h-input">End Date</label>
                    <div class="input-group">
                        <input type="date" name="ed" class="form-control mask-date" <?php echo 'value="'.$sale['endDate'].'"' ?>>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div></p>
                    <p class="note">
                        Data format **/**/****
                    </p>
                </div>
                <div >
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id = "btn3" type="submit" class="btn btn-primary">Change to Special Sale</button>
                    </div>
                </div>
            </form>
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

    

    <script src="js/moment/moment.min.js"></script>

    <script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>

    <!-- bootstrap-datetimepicker -->
    <link href="js/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
    <script src="js/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
</div>
