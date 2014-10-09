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
                <div class="panel-title">User Reports</div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mgt1">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>User Type</th>
                            <th>User Password</th>
                            <th>User Email</th>
                            <th>Change</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="us">                                    
                        <?php require 'getUser.php'; ?>
                    </tbody>
                </table>
            </div>
            <div class="panel-heading">
                <div class="panel-title">Employee Reports</div>
            </div>
            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mgt2">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>Employee Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Age</th>
                            <th>Type</th>
                            <th>Change</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="em">                                    
                        <?php require 'getEmployee.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/tables.js"></script>
    <!--<script src="js/custom.js"></script>-->
</div>  
