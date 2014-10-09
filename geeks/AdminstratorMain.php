<?php session_start();
if(!isset($_SESSION['pw'])||!isset($_SESSION['un'])){
     echo '<script type="text/javascript">window.alert("Please login first!")    
            window.location.href="login.html"</script>';      
}else{
    require 'timeout.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Geeks.com Adminstrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">        
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">           
        <!-- bootstrap-datetimepicker -->        
        <script src="js/forms.js"></script>
        <script src="js/AdminstratorMain.js"></script>
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <!--<script src="js/tables.js"></script>-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">myGeeks Admin</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">	                          
                                            <li><a href="login.html">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav" id="menuBar2" >
                            <!-- Main menu -->
                            <li id="li1" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>                
                            <li id="li2" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-list"></i>Add User</a></li>                    
                            <li id="li3" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-tasks"></i>Add Employee</a></li>
                            <li id="li4" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-tasks"></i>Show Information</a></li>                                                       
                        </ul>
                    </div>
                </div>
                <div class="col-md-10" id="admin_div">
                    <?php require 'calender.php';
                    ?>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="copy text-center">
                    <p id="copyright">Copyright&COPY;2014     Yawei Huang Support</p>
                </div>
            </div>
        </footer>        
    </body>
</html>
