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
        <title>cart</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/Geeks.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div style="clear:both"></div>
        <div id="full">
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
                    <a class="nav_a" href="<?php echo base_url(); ?>index.php/main/myaccount">My Account</a>                    
                    <a class="nav_a" href="javascript:void(0);" onclick ="logout()">Logout</a>
                </p>
            </nav>
            <div style="clear:both"></div>
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
                    <li id="first"><a href="<?php echo base_url(); ?>index.php/main">ALL CATEGORY</a></li>                    
                    <li><a href="<?php echo base_url(); ?>index.php/main/sale">SALES</a></li>
                </ul>
            </div>
            <div style="clear:both"></div>
            <div id="cartBody">
                <p id="cartTitle">&nbsp;&nbsp;Your currently shopping cart</p>
                <ul id="tableTitle">
                    <li id="it">Your Item</li>
                    <li>Item Price</li>
                    <li>Quality</li>
                    <li>Price</li>
                    <li>Operation</li>
                </ul>
                <?php
                $f = 0;
                if ($this->session->userdata('Id')) {
                    $num = sizeof($cProd);
                    echo '<div id="tableContent" onchange="calTotal(' . $num . ')">';
                    $path = "../../../Geeks/upload/";
                    $j = 0;
                    $total = 0;
                    foreach ($cProd as $row) {
                        echo '<div class="tableDetail">
                                <div class="divimg"><a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')"><img class="op" src="' . $path . $row->productImg . '" alt="" border="0"></a></div>
                                <div class="it1"><a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')">' . $row->productName . '</a></div>
                                <div class="it1">$' . round($row->productDisc * $row->productOriginPrice) . '.00</div>
                                <div class="it1"><input id="qu' . $j . '" type="text" value="' . $row->quantity . '" onchange="changePrice(' . $j . ',' . $row->productDisc . ',' . $row->productOriginPrice . ',' . $num . ')"></div>                           
                                <div class="it1" id="qua' . $j . '">$' . $row->quantity * round(($row->productDisc * $row->productOriginPrice)) . '.00</div>
                                <div class="it1"><a href="javascript:void(0);" onclick ="deleteoder(' . $row->catId . ')">delete</a></div>
                            </div>';
                        $j++;
                        $total+=$row->quantity * round(($row->productDisc * $row->productOriginPrice));
                        $this->session->set_userdata('total', $total);
                    }
                } else {  //no customerId, not login
                    $num = sizeof($tProd);
                    echo '<div id="tableContent" onchange="calTotal(' . $num . ')">';
                    $path = "../../../Geeks/upload/";
                    $j = 0;
                    $total = 0;
                    foreach ($tProd as $row) {
                        echo '<div class="tableDetail">
                                <div class="divimg"><a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')"><img class="op" src="' . $path . $row->productImg . '" alt="" border="0"></a></div>
                                <div class="it1"><a href="javascript:void(0);" onclick="showDetail(' . $row->productId . ')">' . $row->productName . '</a></div>
                                <div class="it1">$' . round($row->productDisc * $row->productOriginPrice) . '.00</div>
                                <div class="it1"><input id="qu' . $j . '" type="text" value="' . $row->quantity . '" onchange="changePrice(' . $j . ',' . $row->productDisc . ',' . $row->productOriginPrice . ',' . $num . ')"></div>                           
                                <div class="it1" id="qua' . $j . '">$' . $row->quantity * round(($row->productDisc * $row->productOriginPrice)) . '.00</div>
                                <div class="it1"><a href="javascript:void(0);" onclick ="deleteoder(' . $row->tmpId . ')">delete</a></div>
                            </div>';
                        $j++;
                        $total+=$row->quantity * round(($row->productDisc * $row->productOriginPrice));
                    }
                    $this->session->set_userdata('total', $total);
                    $this->session->set_userdata('tmp', 1);
                    $f = $this->session->userdata('tmp');
                }
                ?>
            </div>                
        </div>
        <div style="clear:both"></div>
        <div id="total_div">
            <div id="total">Total:$<?php echo $total ?>.00</div>
            <div id="fee">Shipping fees:Free</div>
            <button id="cp" type="button" onclick ="cleanup()">Clean up Cart</button>
            <button id="checkout" type="button" onclick="checkoutPro<?php echo '(' . $f . ')' ?>">Checkout</button>

        </div>
        <div style="clear:both"></div>
        <div id="yml">
            <div id="yml_t">You may like</div>
            <div>
                <?php
                $path = "../../../Geeks/upload/";
                foreach($like as $row3) {
                            echo '<div class="e" style="font-size:12px;text-align:center;">
                                  <a href="javascript:void(0);" onclick="showDetail(' . $row3->productId . ')"><img class="op" src="' . $path . $row3->productImg . '" alt="" border="0" style="height:120px;width:120px;"></a><br>
                                  <a href="javascript:void(0);" onclick="showDetail(' . $row3->productId . ')">' . $row3->productName . '</a>
                                  <p style="font-weight:bold;color:rgb(228,57,60);">$' . round($row3->productDisc * $row3->productOriginPrice) . '.00</p>
                               </div>';
                }
                ?>
            </div>
        </div>
        <div style="clear:both"></div>
        <div id="bt">
            <img src="<?php echo base_url(); ?>assets/image/pay.jpg" alt="">
            <p>&COPY;Copyright-2014       Yawei Huang Support</p>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/Geeks.js"></script>    
</body>
</html>

