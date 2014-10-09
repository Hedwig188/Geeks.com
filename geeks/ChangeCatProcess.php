<?php session_start();

// define variables and set to empty values
$id2 = $_SESSION['catId'];
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
$sql = "update productcategory set categoryName ='$name', categoryDesc='$description' where categoryId = '$id2'";
$res = mysql_query($sql);

if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Change category success!--Click show product to see the details!")</script>';

    $url = "EmployeeMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem.";
}
mysql_close($con);
?>
