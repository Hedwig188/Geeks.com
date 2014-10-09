<?php
if (!$this->session->userdata('Id')) {
    echo '<script type="text/javascript">;  
            window.location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/signinon";  
          </script>';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Account</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Geeks.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/myAccount.css">        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
        <nav id="nav">            
            <p id="welcome">
                Hello, welcome to Geeks.com!
                <a class="nav_a" href="<?php echo base_url(); ?>index.php/main/signinon"><?php
                    if ($this->session->userdata('name')) {
                        echo $this->session->userdata('name');
                    } elseif ($this->session->userdata('email')) {
                        echo $this->session->userdata('email');
                    } else {
                        echo 'Sign in or Register';
                    }
                    ?></a>
                <a class="nav_a" href="#">My Account</a>                
                <a class="nav_a" href="javascript:void(0);" onclick ="logout()">Logout</a>
            </p>
        </nav>

        <div id="ad">
            <img src="<?php echo base_url(); ?>assets/image/ad2.jpg" alt="" id="ad2">
        </div>
        <div id="title_div">
            <div id="title">
                <label id="l1">Geeks.com | </label>
                <label id="p1">free shipping on all orders! </label>
            </div>
            <div id="football">
                <img src="<?php echo base_url(); ?>assets/image/online-shopping.gif" alt="">
            </div>
            <div id="search">
                <form>
                    <input type="text" id="search_input">
                    <button type="submit" id="search_btn"><i class="fa fa-search"></i></button>
                    <button type="button" id="cart"><i class="fa fa-shopping-cart"></i>CART</button>                       
                </form>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li id="first"><a href="<?php echo base_url(); ?>index.php/main">ALL CATEGORY</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/main/frontpage">INDEX</a></li>
                <li><a href="">NEW ARRIVALS</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/main/sale">SALES</a></li>
            </ul>
        </div>
        <div id="acontent">
            <div id="aleft">
                <div id="bi">&nbsp;&nbsp;Basic Information<i class="fa fa-angle-right"></i></div>                 
                <div id="si">&nbsp;&nbsp;Shipping Information<i class="fa fa-angle-right"></i></div>
                <div id="oh">&nbsp;&nbsp;Order History<i class="fa fa-angle-right"></i></div>
            </div>
            <div id="amiddle">
                <div id="tmiddle">Your Account at Geeks.com - Hello <?php echo $this->session->userdata('email') ?>!</div>
                <div id="aamiddle"></div>
            </div>
            <div id="aright">
                <img src="<?php echo base_url(); ?>assets/image/AccountAd.jpg" alt="">
            </div>
        </div>        
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/myAccount.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Geeks.js"></script>
    </body>
</html>
