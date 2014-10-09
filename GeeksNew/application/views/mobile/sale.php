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
        <title>sales</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/Geeks.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body style="width:100%">
        <div id="full">
            <div style="clear:both"></div>
            <nav id="nav">
                <p id="welcome">
                    Hello, welcome to Geeks.com!
                    <a class="nav_a" href="<?php echo base_url(); ?>/index.php/main/signinon"><?php
                        if ($this->session->userdata('name')) {
                            echo $this->session->userdata('name');
                        } elseif ($this->session->userdata('email')) {
                            echo $this->session->userdata('email');
                        } else {
                            echo 'Sign in or Register';
                        }
                        ?></a>
                    <a class="nav_a" href="<?php echo base_url(); ?>/index.php/main/myAccount">My Account</a>                    
                    <a class="nav_a" href="javascript:void(0);" onclick ="logout()">Logout</a>
                </p>
            </nav>
            <div style="clear:both"></div>
            <div>
                <div id="ad">
                    <img src="<?php echo base_url(); ?>assets/image/ad2.jpg" alt="" id="ad2">
                </div>
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
                        <li id="first"><a href="<?php echo base_url(); ?>/index.php/main">ALL CATEGORY</a></li>
                        <li><a href="#">SALES</a></li>
                    </ul>
                </div>
                <div style="clear:both"></div>
                <div id="floor">
                    <div id="sale">
                        <img src="<?php echo base_url(); ?>assets/image/sale1.jpg" alt="">
                    </div>
                    <div>                    
                        <div class="e1">
                            <?php
                            $path = "../../../Geeks/upload/";
                            foreach ($sale as $row) {
                                echo '<div class="e">
                                        <a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')"><img  class="op" src="' . $path . $row->productImg . '" alt="" border="0"></a><br>
                                        <a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')">' . $row->productName . '</a>
                                        <p>$' . round($row->productDisc * $row->productOriginPrice) . '.00</p>
                                  </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div id="catbt">
                <img src="<?php echo base_url(); ?>assets/image/pay.jpg" alt="">
                <p>&COPY;Copyright-2014       Yawei Huang Support</p>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Geeks.js"></script>    
    </body>
</html>
<?php
$this->db->close();
