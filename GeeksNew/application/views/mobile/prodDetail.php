<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <title>Product Detail</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/Geeks.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/Signin.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/prodDetail.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <div style="clear:both"></div>
            <nav id="nav">
                <p id="welcome">
                    Hello, welcome to Geeks.com!
                    <a class="nav_a" href="<?php echo base_url(); ?>index.php/main/signinon"><?php
                        if ($this->session->userdata('name')) {
                            echo $this->session->userdata('name');
                        } elseif ($this->session->userdata('email')){
                            echo $this->session->userdata('email');
                        } else {
                            echo 'Sign in or Register';
                        }                      
                        ?></a>
                    <a class="nav_a" href="<?php echo base_url(); ?>index.php/main/myAccount">My Account</a>
                    <a class="nav_a" href="javascript:void(0);" onclick ="logout()">Logout</a>
                </p>
            </nav>
            <div style="clear:both"></div>
            <div id="ad">
                <img src="<?php echo base_url(); ?>assets/image/ad2.jpg" alt="" id="ad2">
            </div>
            <div style="clear:both"></div>
            <div id="title_div">
                <div id="title">
                    <label id="l1">Geeks.com | </label>
                    <label id="p1">free shipping on all orders! </label>

                </div>                
                <div id="search">
                    <form>
                        <input type="text" id="search_input">
                        <button type="submit" id="search_btn"><i class="fa fa-search"></i></button>
                        <button type="button" id="cart"><i class="fa fa-shopping-cart"></i>CART</button>                       
                    </form>
                </div>
            </div>
            <div style="clear:both"></div>
            <div id="menu">
                <ul>
                    <li id="first"><a href="<?php echo base_url(); ?>index.php/main">ALL CATEGORY</a></li>                    
                    <li><a href="<?php echo base_url(); ?>index.php/main/sale">SALES</a></li>
                </ul>
            </div>
            <div style="clear:both"></div>
            <div>
                <div class="imgDetail">
                    <?php
                        $path = "../../../Geeks/upload/";
                        foreach($detail as $row){
                            echo '<img src="' . $path . $row->productImg . '" alt="">';
                        }
                    ?>
                </div>
                <div id="desc">
                    <?php 
                        $id = $this->session->userdata['prodId'];
                         foreach($detail as $row){
                            echo '<p>Product Name:<label id="ln" >' . $row->productName . '</label></p>
                        <p>Product Origin Price:<label id="lpop" >$' . $row->productOriginPrice . '.00<label></p>
                        <p>Final Price:<label id="lpd" >$' . round($row->productDisc * $row->productOriginPrice) . '.00<label></p>
                        <p>Product Description:<label id="lpde">' . $row->productDesc . '<label></p>';
                        }
                    echo '<img src="http://cs-server.usc.edu:50468/GeeksNew/assets/image/card.jpg" alt="">
                             <button id="cartBtn" type="button" onclick="addCart(' . $id . ')">Add to Shopping Cart<i class="fa fa-shopping-cart"></i></button><br>';
                    ?>                    
                    <img src="<?php echo base_url(); ?>assets/image/share.jpg" alt="">
                </div>                
            </div>
            <div style="clear:both"></div>
            <div id="detailBottom">
                <img src="<?php echo base_url(); ?>assets/image/pay.jpg" alt="">
                <p>&COPY;Copyright-2014 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yawei Huang Support</p>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Geeks.js"></script>
    </body>
</html>
<?php
$this->db->close();

