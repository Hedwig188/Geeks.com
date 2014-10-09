<?php
require 'modules/DBConnect.php';
$sql = "select Id,userId,employId,FirstName,LastName,email,password,age,type from employee";
$res = mysql_query($sql, $con);
while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['userId'] . '</td>
                                    <td>' . $row['employId'] . '</td>
                                    <td>' . $row['FirstName'] . '</td>
                                    <td>' . $row['LastName'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['password'] . '</td>
                                    <td>' . $row['age'] . '</td>
                                    <td>' . $row['type'] . '</td>
                                    <td><div class="change_em" id="' . ($row['Id'] + 1) . '"><a style="cursor:pointer">Change</a></div></td>
                                    <td><div class="delete_em" id="' . $row['Id'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';
}
mysql_close($con);
?>
<!--<script src="js/tables.js"></script>-->

