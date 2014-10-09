<?php
$con = mysql_connect("cs-server.usc.edu:1220", 'root', 'wl901123');
if (!$con) {
    echo "Failed to connect to MySQL: " . mysql_error();
}
mysql_select_db('hyw', $con);
