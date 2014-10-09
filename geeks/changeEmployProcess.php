<?php session_start();
// define variables and set to empty values
$id = $_SESSION['Id3'];
$userid = $emid = $fname = $lname = $pwd1 = $pwd2 = $email = $age = $type = "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userid'])) {
        $userid = test_input($_POST['userid']);
    }
    if (isset($_POST['emid'])) {
        $emid = test_input($_POST['emid']);
    }
    if (isset($_POST['fname'])) {
        $fname = test_input($_POST['fname']);
    }
    if (isset($_POST['lname'])) {
        $lname = test_input($_POST['lname']);
    }
    if (isset($_POST['empwd1'])) {
        $pwd1 = test_input($_POST['empwd1']);
    }
    if (isset($_POST['empwd2'])) {
        $pwd2 = test_input($_POST['empwd2']);
    }
    if (isset($_POST['ememail'])) {
        $email = test_input($_POST['ememail']);
    }
    if (isset($_POST['emage'])) {
        $age = test_input($_POST['emage']);
    }
    if (isset($_POST['type1'])) {
        $type = test_input($_POST['type1']);
    }
}

if (empty($_POST)) {
    $f = 1;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($pwd1 == $pwd2) {
    require 'modules/DBConnect.php';
    $sql = "update user set userType='$type',userPwd=password('$pwd1'),userEmail='$email' where userName='$fname$lname'";
    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    }
    $sql2 = "update employee set userId='$userid',employId='$emid',FirstName='$fname',LastName='$lname',email='$email',password=password('$pwd1'),age='$age',type='$type' where Id='$id'";
    if (!mysql_query($sql2, $con)) {
        die('Error: ' . mysql_error());
    }
}
if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Add Employee success!")</script>';

    $url = "AdminstratorMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem.";
}
mysql_close($con);
?>
