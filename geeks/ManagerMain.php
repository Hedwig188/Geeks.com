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
        <title>Geeks.com Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/forms.css" rel="stylesheet">
        <link href="css/ManagerMain.css" rel ="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">myGeeks Manager</a></h1>
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
                        <ul class="nav" id="menuBar" >
                            <!-- Main menu -->
                            <li id="1" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>                
                            <li id="2" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-list"></i>Show Report</a></li>
                            <li id="3" onclick="getPage(this.id)"><a style="cursor:pointer"><i class="glyphicon glyphicon-list"></i>Order Report</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-10" id="Mgt_div">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Product Reports</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mm1">
                                <thead>
                                    <tr>
                                        <th>Product Id</th>
                                        <th>Product Name</th>
                                        <th>Product Category</th>
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                        <th>Product Discount</th>
                                        <th>Product Description</th>
                                    </tr>
                                </thead>
                                <tbody id="prod">                                    
                                    <?php
                                    require 'modules/DBConnect.php';
                                    $sql = "select product.productId,product.productName,productcategory.CategoryName,product.productImg,product.productOriginPrice,product.productDisc,product.productDesc from productcategory,product where product.productCategoryId = productcategory.CategoryId";
                                    $res = mysql_query($sql, $con);

                                    while ($row = mysql_fetch_array($res)) {
                                        echo '<tr><td>' . $row['productId'] . '</td>
                                                    <td>' . $row['productName'] . '</td>
                                                    <td>' . $row['CategoryName'] . '</td>                                    
                                                    <td>' . $row['productImg'] . '</td>
                                                    <td>' . $row['productOriginPrice'] . '</td>
                                                    <td>' . $row['productDisc'] . '</td>
                                                    <td>' . $row['productDesc'] . '</td></tr>';
                                    }
                                    mysql_close($con);
                                    ?>  
                                </tbody>
                            </table>                            
                        </div>
                        <div class="panel-heading">
                            <div class="panel-title">Sales Reports</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mm2">
                                <thead>
                                    <tr>
                                        <th>Sale Id</th>
                                        <th>Product Id</th>
                                        <th>Product Category</th>
                                        <th>Start Date</th>
                                        <th>Discount</th> 
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php
                                    require 'modules/DBConnect.php';
                                    $sql = "select saleId,productId,startDate,endDate,discount from sale";
                                    $res = mysql_query($sql, $con);

                                    while ($row = mysql_fetch_array($res)) {
                                        echo '<tr><td>' . $row['saleId'] . '</td>
                                    <td>' . $row['productId'] . '</td>
                                    <td>' . $row['startDate'] . '</td>                                    
                                    <td>' . $row['endDate'] . '</td>
                                    <td>' . $row['discount'] . '</td></tr>';
                                    }
                                    mysql_close($con);
                                    ?>
                                </tbody>
                            </table>
                            <div class="panel-heading">
                                <div class="panel-title">Category Reports</div>
                            </div>
                            <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mm3">
                                    <thead>
                                        <tr>
                                            <th>Category Id</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <?php
                                        require 'modules/DBConnect.php';
                                        $sql = "select categoryId,categoryName,categoryDesc from productcategory";
                                        $res = mysql_query($sql, $con);

                                        while ($row = mysql_fetch_array($res)) {
                                            echo '<tr><td>' . $row['categoryId'] . '</td>
                                    <td>' . $row['categoryName'] . '</td>
                                    <td>' . $row['categoryDesc'] . '</td></tr>';
                                        }
                                        mysql_close($con);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-heading">
                                <div class="panel-title">User Reports</div>
                            </div>
                            <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mm4">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th>User Type</th>
                                            <th>User Password</th>
                                            <th>User Email</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <?php
                                        require 'modules/DBConnect.php';
                                        $sql = "select userId,userName,userType,userPwd,userEmail from user";
                                        $res = mysql_query($sql, $con);

                                        while ($row = mysql_fetch_array($res)) {
                                            echo '<tr><td>' . $row['userId'] . '</td>
                                                <td>' . $row['userName'] . '</td>
                                                <td>' . $row['userType'] . '</td>
                                                <td>' . $row['userPwd'] . '</td>
                                                <td>' . $row['userEmail'] . '</td></tr>';
                                        }
                                        mysql_close($con);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-heading">
                                <div class="panel-title">Employee Reports</div>
                            </div>
                            <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="mm5">
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
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <?php
                                        require 'modules/DBConnect.php';
                                        $sql = "select userId,employId,FirstName,LastName,email,password,age,type from employee";
                                        $res = mysql_query($sql, $con);

                                        while ($row = mysql_fetch_array($res)) {
                                            echo '<tr><td>' . $row['userId'] . '</td>
                                    <td>' . $row['employId'] . '</td>
                                    <td>' . $row['FirstName'] . '</td>
                                    <td>' . $row['LastName'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['password'] . '</td>
                                    <td>' . $row['age'] . '</td>
                                    <td>' . $row['type'] . '</td></tr>';
                                        }
                                        mysql_close($con);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

            <link href="js/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery.js"></script>
            <!-- jQuery UI -->
            <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script src="js/datatables/js/jquery.dataTables.min.js"></script>
            <script src="js/datatables/dataTables.bootstrap.js"></script>
            <script src="js/custom.js"></script>
            <script src="js/tables.js"></script>
            <script src="js/ManagerMain.js"></script>
            

    </body>
</html>