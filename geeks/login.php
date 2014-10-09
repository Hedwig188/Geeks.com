<?php session_start();
$errmsg = '';
$username = htmlspecialchars($_POST['username_input']);
$password = htmlspecialchars($_POST['userpwd_input']);
$_SESSION['un'] = htmlspecialchars($_POST['username_input']);
$_SESSION['pw'] = htmlspecialchars($_POST['userpwd_input']);
$_SESSION['time'] = time();
$res = '';
if (strlen($username) == 0) {
    $errmsg = 'Username or Password is invalid.';
}
if (strlen($password) == 0) {
    $errmsg = 'Username or Password is invalid.';
}
if (strlen($username) == 0 && strlen($password) == 0) {
    $errmsg = '';
}
if (strlen($username) > 0 && strlen($password) > 0) {
    $errmsg = '';
//    include ('modules/DBConnect.php');
    require 'modules/DBConnect.php';
    $sql = "SELECT userType FROM user WHERE userName='$username' AND userPwd=password('$password')";
    $res = mysql_query($sql,$con);
    $row = mysql_fetch_array($res);
    if (!$row) {
        $errmsg = 'Username or Password is invalid.'; //no such username or wrong pwd
    }
    directPage($row['userType']);
}



if (strlen($errmsg) > 0) {
    require 'prelogin.html';
//    echo '<label id="err">&nbsp;&nbsp;'.$errmsg.'</label>';
    echo '<script type="text/javascript">phpValidate()</script>';
    require 'postlogin.html';
} else if (!$res) {         //firt login
    require 'prelogin.html';
    require 'postlogin.html';
}
//} else {
//
//    $sql = "select ";
//}

function directPage($row) {
    if ($row == 'Adminstrator') {
        
        echo '<SCRIPT type="text/javascript">';
        echo 'window.location="AdminstratorMain.php"';
        echo '</SCRIPT>';
    } else if ($row == 'Employee') {
        
        echo '<SCRIPT type="text/javascript">';
        echo 'window.location="EmployeeMain.php"';
        echo '</SCRIPT>';
    } else if ($row == 'Manager') {
        
        echo '<SCRIPT type="text/javascript">';
        echo 'window.location="ManagerMain.php"';
        echo '</SCRIPT>';
    }
}

mysqli_close($con);

//echo '<script language="javascript">';
//echo 'alert("'.$errmsg.'");';
//echo '</script>';
?>
    

