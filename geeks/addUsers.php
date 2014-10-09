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
                <div class="panel-title">Add User</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" action="addUserProcess.php" method="post" onsubmit="return addUser()">
                    <div class="form-group ">
                        <label for="username" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">                            
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">                                                        
                            <span class="help-block" id="name_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Name only contains characters and numbers.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="pwd" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">                            
                            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">                                                        
                            <span class="help-block" id="pwd_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the password.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="pwd2" class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-10">                            
                            <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Password">                                                        
                            <span class="help-block" id="pwd_err2" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the password again.</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">                            
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">                                                        
                            <span class="help-block" id="email_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the Email.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Usertype</label>
                        <div class="col-md-10">
                            <select class="form-control" id="type" name="type">
                                <option value="">-- choose --</option>
                                <option value="Employee">  Employee</option>
                                <option value="Adminstrator">  Adminstrator</option>
                                <option value="Manager">  Manager</option>                                
                            </select>
                            <span class="help-block" id="type_err" style="display: none;color:red;"><i class="fa fa-warning"></i>Please input the Usertype.</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id = "user_btn" type="submit" class="btn btn-primary">Add User</button>
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
<!--<script src="js/forms.js"></script>-->
<script src="js/addUsers.js"></script>



