<?php
// define variables and set to empty values
$name = $pwd1=$pwd2=$email=$type= "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $name = test_input($_POST['username']);
    }
    if (isset($_POST['pwd'])) {
         $pwd1= test_input($_POST['pwd']);
    }
    if (isset($_POST['pwd2'])) {
         $pwd2= test_input($_POST['pwd2']);
    }
    if (isset($_POST['email'])) {
         $email= test_input($_POST['email']);
    }
    if (isset($_POST['type'])) {
         $type= test_input($_POST['type']);
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
if($pwd1 == $pwd2){
require 'modules/DBConnect.php';
$sql = "insert into user (userName,userType,userPwd,userEmail) values ('$name','$type',password('$pwd1'),'$email')";
$res = mysql_query($sql);

}else {echo "error";}
if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Add User success!")</script>';

    $url = "AdminstratorMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem.";
}
mysql_close($con);
?>
