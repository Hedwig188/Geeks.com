
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
        <title>Sign in on</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/mobile/Geeks.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/mobile/Signin.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
        <div data-role="page">
            <div style="clear:both"></div>
            <nav id="nav" data-role="header">                
                <p id="welcome">
                    Hello, welcome to Geeks.com!
                    <a class="nav_a" href="<?php echo base_url();?>index.php/main/myaccount">My Account</a>                                
                </p>
            </nav>
            <div style="clear:both"></div>            
            <div id="ad">
                <img src="<?php echo base_url();?>assets/image/ad2.jpg" alt="" id="ad2">
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
                    <li id="first"><a href="<?php echo base_url();?>index.php/main">ALL CATEGORY</a></li>                    
                    <li><a href="<?php echo base_url();?>index.php/main/sale">SALES</a></li>
                </ul>
            </div>
            <div style="clear:both"></div>
            <div id="signinon">
                <div id="in">
                    <div id="t1">
                        <p>Sign In</p>
                    </div>
                    <form id="f1">
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">                            
                        </div>
                        <p id="ep1">please enter your email address.</p>
                        <div>
                            <label for="pwd">Password:</label>
                            <input type="password" id="pwd" name="pwd">                            
                        </div>
                        <p id="pp1">please enter your password.</p>
                        <button type="button" id="s1">Sign In</button>
                    </form>
                    <div id="inimg">
                        <img src="<?php echo base_url();?>assets/image/signin.jpg" alt="">
                    </div>
                </div>
                <div style="clear:both"></div>
                <div id="on">
                    <div id="t2">
                        <p>Sign On a New Account</p>
                    </div>
                    <form id="f2">
                        <div>
                            <label for="email2">Email:</label>
                            <input type="email" id="email2" name="email2"> 
                        </div>
                        <p id="ep2">please enter your email address.</p>
                        <div>
                            <label for="pwd2">Password:</label>
                            <input type="password" id="pwd2" name="pwd2">                            
                        </div>
                        <p id="pp2">please enter your password.</p>
                        <div>
                            <label for="pwd3">Confirm:</label>
                            <input type="password" id="pwd3" name="pwd3">                            
                        </div>
                        <p id="pp3">please re-enter your password.</p>
                        <div>
                            <input type="checkbox" id="term"><span id="terms">I agree Geeks.com Terms and Conditions.</span>
                        </div>
                        <button type="button" id="s2">Submit</button>
                    </form>
                </div>
            </div>            
            <div style="clear:both"></div>
            <div id="bottom">
                <img src="<?php echo base_url();?>assets/image/pay.jpg" alt="">
                <p>&COPY;Copyright-2014       Yawei Huang Support</p>
            </div>
        </div>
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/Signinon.js"></script>
    </body>
</html>
