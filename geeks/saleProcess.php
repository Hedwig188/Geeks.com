<?php
// define variables and set to empty values
$name = $staDate = $endDate = $discount = "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['na'])) {
        $name = test_input($_POST['na']);
    }
    if (isset($_POST['sd'])) {
        $staDate = test_input($_POST['sd']);
    }
    
    if (isset($_POST['ed'])) {
        $endDate = test_input($_POST['ed']);
    }
    
    if (isset($_POST['ds'])) {
        $discount = test_input($_POST['ds']);
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
$sql = "insert into sale (productId,startDate,endDate,discount) values ('$name','$staDate','$endDate','$discount')";
$res = mysql_query($sql);

if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Insert Success!")</script>';

    $url = "EmployeeMain.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
} else {
    echo "Sorry, there was a problem uploading your file.";
}
mysql_close($con);
?>
