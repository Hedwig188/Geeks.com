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
                <div class="panel-title">Add Employee</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" action="addEmployProcess.php" method="post" onsubmit="return addEmpoly()">
                    <div class="form-group ">
                        <label for="userid" class="col-sm-2 control-label">User Id</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="userid" id="userid" placeholder="User Id">                                                        
                            <span class="help-block" id="userid_err" style="display: none;color:red;"><i class="fa fa-warning"></i>User Id only contains numbers.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="emid" class="col-sm-2 control-label">Employee Id</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="emid" id="emid" placeholder="Employee Id">                                                        
                            <span class="help-block" id="emid_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Employee Id only contains numbers.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="fname" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">                                                        
                            <span class="help-block" id="emfname_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Name only contains characters.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="lname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">                                                        
                            <span class="help-block" id="emlname_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Name only contains characters.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="empwd1" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">                            
                            <input type="password" class="form-control" name="empwd1" id="empwd1" placeholder="Password">                                                        
                            <span class="help-block" id="empwd_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the password.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="empwd2" class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-10">                            
                            <input type="password" class="form-control" name="empwd2" id="empwd2" placeholder="Password">                                                        
                            <span class="help-block" id="empwd_err2" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the password again.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="ememail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">                            
                            <input type="email" class="form-control" name="ememail" id="ememail" placeholder="Email Address">                                                        
                            <span class="help-block" id="ememail_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the Email.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="emage" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">                            
                            <input type="number" class="form-control" name="emage" id="emage" min="1" max="120">                                                        
                            <span class="help-block" id="emage_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the Age.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">User type</label>
                        <div class="col-md-10">
                            <select class="form-control" id="type1" name="type1">
                                <option value="">-- choose --</option>
                                <option value="Employee">  Employee</option>
                                <option value="Adminstrator">  Adminstrator</option>
                                <option value="Manager">  Manager</option>                                
                            </select>
                            <span class="help-block" id="emtype_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the UserType.</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id = "em_btn" type="submit" class="btn btn-primary">Add Employee</button>
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
<script src="js/moment/moment.min.js"></script>

<script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- bootstrap-datetimepicker -->
<link href="js/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
<script src="js/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/addEmploy.js"></script>



