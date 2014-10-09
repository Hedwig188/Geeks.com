<?php

session_start();
$id = $_SESSION['id'];
// define variables and set to empty values

$name = $category = $image = $price = $discount = $description = "";
$f = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ProdName'])) {
        $name = test_input($_POST['ProdName']);
    }
    if (isset($_POST['sel'])) {
        $category = test_input($_POST['sel']);
    }
    if (isset($_FILES['prodImg']['name'])) {
        $image = ($_FILES['prodImg']['name']);
    }
    if (isset($_POST['prepend'])) {
        $price = test_input($_POST['prepend']);
    }
    if (isset($_POST['dis'])) {
        $discount = test_input($_POST['dis']);
    }
    if (isset($_POST['desc'])) {
        $description = test_input($_POST['desc']);
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

if ($_FILES['prodImg']['name'] != "") {
    $target = "upload/" . $_FILES['prodImg']['name'];
    if ((($_FILES['prodImg']['type'] == "image/gif") || ($_FILES['prodImg']['type'] == "image/jpeg") || ($_FILES['prodImg']['type'] == "image/pjpeg")) && ($_FILES['prodImg']['size'] < 600000)) {
        if ($_FILES['prodImg']['error'] > 0) {
            echo "Error: " . $_FILES['prodImg']['error'] . "<br />";
        }
    } else {
        echo "Invalid file";
    }


    $sql = "update product set productCategoryId='$category',productName='$name',productDesc='$description',productImg='$image',productOriginPrice='$price',productDisc='$discount' where productId='$id'";
    if (move_uploaded_file($_FILES['prodImg']['tmp_name'], $target)) {
        echo "add image success";
    } else {
        echo "Sorry, there was a problem uploading your file.";
    }
} else {
    $sql = "update product set productCategoryId='$category',productName='$name',productDesc='$description',productOriginPrice='$price',productDisc='$discount' where productId='$id'";
}

$res = mysql_query($sql, $con);
if ($f == 0) {
        echo '<script type="text/javascript">window.alert("Add product success!--Click Change Product to see the details!")</script>';
        }
        $url = "EmployeeMain.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";

mysql_close($con);
?>
