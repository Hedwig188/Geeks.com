<?php
// define variables and set to empty values
$name = $description = "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['catName'])) {
        $name = test_input($_POST['catName']);
    }
    if (isset($_POST['catDesc'])) {
        $description = test_input($_POST['catDesc']);
    }
}
if (!filter_var($name, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '^[A-Za-z0-9]+$^')))) {
    echo '<script type="text/javascript">validateName()</script>';
    $f = 1.1;
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
mysql_select_db('hyw', $con);
$sql = "insert into productcategory (categoryName,categoryDesc) values ('$name','$description')";
$res = mysql_query($sql);


if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Add category success!--Click show product to see the details!")</script>';

    $url = "EmployeeMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem.";
}
mysql_close($con);
?>
