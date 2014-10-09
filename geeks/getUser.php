<?php
require 'modules/DBConnect.php';
$sql = "select userId,userName,userType,userPwd,userEmail from user";
$res = mysql_query($sql, $con);
while ($row = mysql_fetch_array($res)) {
    echo '<tr><td>' . $row['userId'] . '</td>
                                                <td>' . $row['userName'] . '</td>
                                                <td>' . $row['userType'] . '</td>
                                                <td>' . $row['userPwd'] . '</td>
                                                <td>' . $row['userEmail'] . '</td>
                                                <td><div class="change_user" id="' . ($row['userId'] + 1) . '"><a style="cursor:pointer">Change</a></div></td>
                                                <td><div class="delete_user" id="' . $row['userId'] . '"><a style="cursor:pointer">Delete</a></div></td></tr>';

}
mysql_close($con);
?>
<!--<script src="js/tables.js"></script>-->