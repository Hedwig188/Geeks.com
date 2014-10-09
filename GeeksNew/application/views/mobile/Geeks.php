<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <title>Geeks.com</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile/Geeks.css">        
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
                        } elseif ($this->session->userdata('email')) {
                            echo $this->session->userdata('email');
                        } else {
                            echo 'Sign in or Register';
                        }
                        ?></a>
                    <a class="nav_a" href="<?php echo base_url(); ?>index.php/main/myaccount">My Account</a>                    
                    <a class="nav_a" id="logout" href="javascript:void(0);">Logout</a>
                </p>
            </nav>
            <div style="clear:both"></div>
            <div>
                <div id="ad">
                    <img src="<?php echo base_url(); ?>assets/image/ad2.jpg" alt="" id="ad2">
                </div>
                <div id="title_div">
                    <div id="title">
                        <label id="l1">Geeks.com </label>
                        <label id="p1">free shipping on all orders! </label>

                    </div>                    
                    <div id="search">
                        <input type="text" id="search_input">
                        <button type="submit" id="search_btn"><i class="fa fa-search"></i></button>
                        <button type="button" id="cart"><i class="fa fa-shopping-cart"></i>CART</button>                       
                    </div>
                </div>
                <div style="clear:both"></div>
                <div id="menu">
                    <ul>
                        <li id="first"><a href="">ALL CATEGORY</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/main/sale">SALES</a></li>
                    </ul>
                </div>
                <div style="clear:both"></div>
                <div id="content">
                    <div id="sidebar">
                        <?php
                        foreach ($cat as $row) {
                            echo '<div><a class="siderbar_a" href="javascript:void(0);" id="'.$row->categoryId .'">&nbsp;' . $row->categoryName . '</a><i class="fa fa-angle-right"></i></div>';
                        }
                        ?>                   
                        <div><a class="siderbar_a1" id="sdb" href="javascript:void(0);">&nbsp;Special Sales</a><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div id="gallery">
                        <img src="<?php echo base_url(); ?>assets/image/gallery.jpg" alt="">
                    </div>
                    <div id="prot">
                        <img src="<?php echo base_url(); ?>assets/image/protection.jpg" alt="">
                    </div>
                    <div style="clear:both"></div>
                    <div id="slides">
                        <img src="<?php echo base_url(); ?>assets/image/1.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/image/2.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/image/3.jpg" alt="">
                    </div>                    
                </div>
                <div style="clear:both"></div>
                <div id="floor">
                    <?php
                    foreach ($cat as $row) {
                        echo '<div style="clear:both"></div>';
                        echo '<div class="row">
                            <div class="f">
                                <a class="aa" href="javascript:void(0);" id="a_' . $row->categoryId . '">' . $row->categoryName . '</a>
                            </div>
                            <div class="e1">';
                        $path = "../../../Geeks/upload/";
                        $i = 0;
                        foreach ($products as $row2) {
                            if ($row2->productCategoryId == $row->categoryId) {
                                echo '<div class="e">
                                  <a class="ee1" href="javascript:void(0);" id="e_' . $row2->productId . '"><img class="op" src="' . $path . $row2->productImg . '" alt="" border="0"></a><br>
                                  <a class="ee2" href="javascript:void(0);" id="ee_' . $row2->productId . '">' . $row2->productName . '</a>
                                  <p>$' . round($row2->productDisc * $row2->productOriginPrice) . '.00</p>
                               </div>';
                                $i++;
                            }
                            if ($i > 4) {
                                break;
                            }
                        }
                    }

                    echo '</div></div>';
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
        <script src="<?php echo base_url(); ?>assets/js/jquery.slides.min.js"></script>
        <script>
                            $(function() {
                                $('#slides').slidesjs({
                                    width: 940,
                                    height: 528,
                                    play: {
                                        active: true,
                                        auto: true,
                                        interval: 4000,
                                        swap: true
                                    }
                                });
                            });
        </script>
    </body>
</html>

