<?php 
$timeout=600;     
$now=time(); 
if(($now-$_SESSION['time'])> $timeout) 
{ 
     unset($_SESSION['un']);
     unset($_SESSION['pw']);     
     echo '<script type="text/javascript">window.alert("Login Timeout!")</script>';
     echo "<script type='text/javascript'>";  
     echo "window.location.href=login.php";  
     echo "</script>";
}else{     
    $_SESSION['time']=time(); 
}