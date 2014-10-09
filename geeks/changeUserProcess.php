<?php session_start();
// define variables and set to empty values
$id = $_SESSION['userId'];
$name = $type = $pwd1 = $pwd2 = $email = "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $name = test_input($_POST['username']);
    }
    if (isset($_POST['type'])) {
        $type = test_input($_POST['type']);
    }
    if (isset($_POST['pwd'])) {
        $pwd1 = test_input($_POST['pwd']);
    }
    if (isset($_POST['pwd2'])) {
        $pwd2 = test_input($_POST['pwd2']);
    }
    if (isset($_POST['email'])) {
        $email = test_input($_POST['email']);
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

require 'modules/DBConnect.php';
if($pwd1 == $pwd2){
$sql = "update user set userName ='$name', userType='$type',userPwd = password('$pwd1'),userEmail = '$email' where userId = '$id'";
$res = mysql_query($sql);
}else{
    echo 'error!';
}

if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Change User success!")</script>';

    $url = "AdminstratorMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem.";
}
mysql_close($con);
?>
