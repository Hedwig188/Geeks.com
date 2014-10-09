<?php
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
if (!filter_var($name, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '^[A-Za-z0-9]+$^')))) {
    echo '<script type="text/javascript">validateName()</script>';
    $f = 1.1;
}

if (!filter_var($price, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '^[0-9]+(.[0-9]{2})?$^')))) {
    echo '<script type="text/javascript">validatePrice()</script>';
    $f = 1.2;
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

$target = "upload/".$_FILES['prodImg']['name'];
if ((($_FILES['prodImg']['type'] == "image/gif")
|| ($_FILES['prodImg']['type'] == "image/jpeg")
|| ($_FILES['prodImg']['type'] == "image/pjpeg"))
&& ($_FILES['prodImg']['size'] < 600000))
  {
  if ($_FILES['prodImg']['error'] > 0)
    {
    echo "Error: " . $_FILES['prodImg']['error'] . "<br />";
    }
  
  }
else
  {
  echo "Invalid file";
  }

  require 'modules/DBConnect.php';
$sql = "insert into product (productCategoryId,productName,productDesc,productImg,productOriginPrice,productDisc) values ('$category','$name','$description','$image','$price','$discount')";
$res = mysql_query($sql);

if (move_uploaded_file($_FILES['prodImg']['tmp_name'], $target)) {
    if ($f == 0) {
    echo '<script type="text/javascript">window.alert("Add product success!--Click Show Product to see the details!")</script>';
    }
    $url = "EmployeeMain.php";  
    echo "<script type='text/javascript'>";  
    echo "window.location.href='$url'";  
    echo "</script>";

} else {
    echo "Sorry, there was a problem uploading your file.";
}
mysql_close($con);
?>
