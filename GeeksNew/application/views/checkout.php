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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Geeks.css">
        <link rel ="stylesheet" href="<?php echo base_url(); ?>assets/css/myAccount.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/checkout.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div>
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
            <div id="checkout_content">
                <div id="left">
                    <div id="shipInfo">                        
                    </div>
                    <div id="payInfo">
                        <div id="payTitle">&nbsp;&nbsp;Your payment Information</div>
                        <div class="pay_div">
                            <label for="bill_name">* Name(first and last):</label>
                            <input id="bill_name" type="text">
                            <p id="bn">Please enter the name.</p>
                        </div>                    
                        <div class="pay_div">
                            <label for="bill_type">* Payment Type:</label>
                            <select id="bill_type">
                                <option selected="selected" value="Visa">Visa</option>
                                <option value="MasterCard">MasterCard</option>
                                <option value="Discover">Discover</option>                            
                            </select>
                            <img src="<?php echo base_url(); ?>assets/image/card.jpg">
                        </div>
                        <div class="pay_div">
                            <label for="bill_card">* Card Number</label>
                            <input id="bill_card" type="text">
                            <p id="bcn">Please enter card number.</p>
                        </div>
                        <div class="pay_div">
                            <label>* Expiration Date:</label>
                            <select id="bill_mon">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option selected="selected" value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select id="bill_year">
                                <option selected="selected" value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>                            
                            </select>
                        </div>                        
                        <div class="pay_div">
                            <label for="bill_address">* Billing Address:</label>
                            <input id="bill_address" type="text">
                            <p id="ba">Please enter billing address.</p>
                        </div>
                        <div class="pay_div">
                            <label for="bill_city">* City:</label>
                            <input id="bill_city" type="text">
                            <p id="bc">Please enter the city.</p>
                        </div>
                        <div class="pay_div">
                            <label for="bill_state">* State:</label>
                            <select id="bill_state"> 
                                <option value="" selected="selected">Select a State</option> 
                                <option value="AL">Alabama</option> 
                                <option value="AK">Alaska</option> 
                                <option value="AZ">Arizona</option> 
                                <option value="AR">Arkansas</option> 
                                <option value="CA">California</option> 
                                <option value="CO">Colorado</option> 
                                <option value="CT">Connecticut</option> 
                                <option value="DE">Delaware</option> 
                                <option value="DC">District Of Columbia</option> 
                                <option value="FL">Florida</option> 
                                <option value="GA">Georgia</option> 
                                <option value="HI">Hawaii</option> 
                                <option value="ID">Idaho</option> 
                                <option value="IL">Illinois</option> 
                                <option value="IN">Indiana</option> 
                                <option value="IA">Iowa</option> 
                                <option value="KS">Kansas</option> 
                                <option value="KY">Kentucky</option> 
                                <option value="LA">Louisiana</option> 
                                <option value="ME">Maine</option> 
                                <option value="MD">Maryland</option> 
                                <option value="MA">Massachusetts</option> 
                                <option value="MI">Michigan</option> 
                                <option value="MN">Minnesota</option> 
                                <option value="MS">Mississippi</option> 
                                <option value="MO">Missouri</option> 
                                <option value="MT">Montana</option> 
                                <option value="NE">Nebraska</option> 
                                <option value="NV">Nevada</option> 
                                <option value="NH">New Hampshire</option> 
                                <option value="NJ">New Jersey</option> 
                                <option value="NM">New Mexico</option> 
                                <option value="NY">New York</option> 
                                <option value="NC">North Carolina</option> 
                                <option value="ND">North Dakota</option> 
                                <option value="OH">Ohio</option> 
                                <option value="OK">Oklahoma</option> 
                                <option value="OR">Oregon</option> 
                                <option value="PA">Pennsylvania</option> 
                                <option value="RI">Rhode Island</option> 
                                <option value="SC">South Carolina</option> 
                                <option value="SD">South Dakota</option> 
                                <option value="TN">Tennessee</option> 
                                <option value="TX">Texas</option> 
                                <option value="UT">Utah</option> 
                                <option value="VT">Vermont</option> 
                                <option value="VA">Virginia</option> 
                                <option value="WA">Washington</option> 
                                <option value="WV">West Virginia</option> 
                                <option value="WI">Wisconsin</option> 
                                <option value="WY">Wyoming</option>
                            </select>
                            <p id="bs">Please select a state.</p>
                        </div>
                        <div class="pay_div">
                            <label for="bill_zip">* Zip:</label>
                            <input id="bill_zip" type="text">
                            <p id="bz">Please enter the zip.</p>
                        </div>
                        <div class="pay_div">
                            <label for="bill_phone">* Phone Number:</label>
                            <input id="bill_phone" type="text">
                            <p id="bpn">Please enter phone number.</p>
                        </div>
                    </div>
                    <div id="complete">
                        <div id="complete_title">&nbsp;&nbsp;Complete Your Order</div>
                        <div id="complete_content">By placing your order, you agree to Geeks.com's Privacy Policy and Terms of Use.</div>
                        <button id="complete_btn">Submit My Order</button>
                    </div>
                </div>
                <div id="right">
                    <img src="<?php echo base_url(); ?>assets/image/ping.jpg" alt="">                    
                </div>
            </div>
        </div>
        <div id="check_bo">
            <img src="<?php echo base_url(); ?>assets/image/pay.jpg" alt="">
            <p>&COPY;Copyright-2014       Yawei Huang Support</p>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src ="<?php echo base_url(); ?>assets/js/Geeks.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/checkout.js"></script>
    </body>
</html>
