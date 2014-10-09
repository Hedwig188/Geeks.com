The entire project is about online-shopping,customer can buy different category products.

For mobiles, I used the user_agent in codeIgniter. Instead of rewriting my code all over
the place, I just loaded a different view folder and a different css folder. What will happen
is that I just had CodeIgniter load a different view with the same name from another folder
everytime when using $this->load->view("xxx"). I created a new folder in view folder called /mobile
and just create views with the same exact naming conventions and it will load the the view accordingly
by extending the Loader.php class. Just the same thing that I did in the css folder.
In my application/core folder I created a MY_Loader.php and put the override function inside.
I removed some unnecessary things to make the mobile client more clear.

So please test my mobile version website by using iphone5/5s or the chrome emulator.

For the purpose of avoid SQL injection, I used a function called safe() in each controller. And also used
active record in CI.
For avoiding xss, I used the post helper in CI($this->input->post('xxx')),and in the config, I set 
$config['global_xss_filtering'] = TRUE;


PS:Do not open GeeksFront and Geeks back in one browser at the same time, the session maybe conflict.
Firefox is the default browser that I chose.


summary of each web page:(GeeksNew)
1) views folder:
Geeks.php:The main page. You can see special sale product if you click the menu 'SALES'.Here I used a jquery frame to show the 
advertise on the top.(related javascript:js/jquery.slides.min.js) Also, if you click the image of each product, you can see the 
details about that product.

productDetail.php:show the product image, productName, product price and description in one page.You can add this item to the 
shopping cart.

Signinon.php:login and register page.

myAccount.php:All about the customer information, including edit basic information,add/edit/delete shipping information,show order
history.

sale.php:all the products in the special sale category.

category.php:display all the things in every category, including special sale products. Also, if you click the image of each 
product, you can see the details about that product.

cart.php:all actions about adding things into the shopping cart.Whether the customer login or not will not affect his action that 
add stuffs into the shopping carts. When the customer not login, all the stuff is stored in table 'tmp'.This table will be cleaned
up if the customer login in and all the stuffs will be add into table 'cart'.

checkout.php:select/add shipping information, add payment information when buy products. It will show 'thank you for your purchase'
if all the things are done right. It will store the billing information, but not store the card information because it is not 
safe.

BasicInfo.php,BasicInfoPro.php:all the relative operations about edit customers' basic information that will stored in table 
'customer';

editShipInfo.php,editShipInfoPro.php:retrive the shipping information from table 'ship' and edit them.

orderHistory.php:see the summary of the orders. If you click the oderId, you can see the detail about that order.

temp.php/redirect.php:just for passing the parameter to ajax.

saveBillPro.php:save billing informations into table 'orderdetail'.

ShipInfo.php/shipInfoSelect.php:show shipping information in table 'ship' of that customer.

ShowOrderDetail.php:show order details.

totalPro.php/updatecartPro.php:calculate and update the total money in cart.

the profiles in the subfolder /mobile are the same.

2)controllers folder:
main.php:validation session, post and passing parameters between Geeks.php and main_model.

cart_ctr.php:validation session, post and passing parameters between cart.php and cart_model.

account_ctr.php:validation session, post and passing parameters between myaccount.php and account_model.

checkout_ctr.php:validation session, post and passing parameters between checkout.php and checkout_model.

signinon_ctr.php:validation session, post and passing parameters between Signinon.php and signinon_model.

3)models folder:

main_model.php:operate db for Geeks.php.

cart_model.php:operate db for cart.php.

account_model.php:operate db for myaccount.php.

checkout_model.php:operate db for checkout.php.

signinon_model.php:operate db for Signinon.php.
 
2.Database design:
-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `productId` int(5) NOT NULL,
  `catId` int(5) NOT NULL auto_increment,
  `quantity` int(5) NOT NULL,
  `customerId` int(5) NOT NULL,
  PRIMARY KEY  (`catId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `cName` varchar(20) default NULL,
  `cId` int(11) NOT NULL auto_increment,
  `cEmail` varchar(30) NOT NULL,
  `cPwd` varchar(100) NOT NULL,
  PRIMARY KEY  (`cId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `ooder`
-- ----------------------------
DROP TABLE IF EXISTS `ooder`;
CREATE TABLE `ooder` (
  `customerId` int(5) NOT NULL,
  `orderDate` varchar(30) NOT NULL,
  `total` int(5) NOT NULL,
  `bAddress` varchar(100) NOT NULL,
  `sAddress` varchar(100) NOT NULL,
  `orderId` int(5) NOT NULL auto_increment,
  PRIMARY KEY  (`orderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for `orderdetail`
-- ----------------------------
DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE `orderdetail` (
  `productId` int(5) NOT NULL,
  `orderId` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `odId` int(5) NOT NULL auto_increment,
  PRIMARY KEY  (`odId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productId` int(11) NOT NULL auto_increment,
  `productCategoryId` int(11) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productDesc` varchar(300) NOT NULL,
  `productImg` varchar(100) default NULL,
  `productOriginPrice` double(10,0) NOT NULL,
  `productDisc` float(8,1) NOT NULL,
  PRIMARY KEY  (`productId`),
  KEY `productCategoryId` (`productCategoryId`),
  CONSTRAINT `productCategoryId` FOREIGN KEY (`productCategoryId`) REFERENCES `productcategory` (`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `productcategory`
-- ----------------------------
DROP TABLE IF EXISTS `productcategory`;
CREATE TABLE `productcategory` (
  `categoryId` int(11) NOT NULL auto_increment,
  `categoryName` varchar(50) NOT NULL,
  `categoryDesc` varchar(100) default NULL,
  PRIMARY KEY  (`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `sale`
-- ----------------------------
DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale` (
  `saleId` int(11) NOT NULL auto_increment,
  `productId` int(11) NOT NULL,
  `startDate` varchar(20) NOT NULL,
  `endDate` varchar(20) NOT NULL,
  `discount` double(10,1) NOT NULL,
  PRIMARY KEY  (`saleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `ship`
-- ----------------------------
DROP TABLE IF EXISTS `ship`;
CREATE TABLE `ship` (
  `sName` varchar(20) NOT NULL,
  `sId` int(11) NOT NULL auto_increment,
  `sAddress` varchar(100) NOT NULL,
  `sCity` varchar(30) NOT NULL,
  `sState` varchar(30) NOT NULL,
  `sPhone` decimal(15,0) NOT NULL,
  `sZip` decimal(10,0) NOT NULL,
  `cId` int(5) NOT NULL,
  PRIMARY KEY  (`sId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tmp`
-- ----------------------------
DROP TABLE IF EXISTS `tmp`;
CREATE TABLE `tmp` (
  `quantity` int(3) NOT NULL,
  `productId` int(5) NOT NULL,
  `tmpId` int(5) NOT NULL auto_increment,
  PRIMARY KEY  (`tmpId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userId` int(11) NOT NULL auto_increment,
  `userType` varchar(15) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userPwd` varchar(50) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  PRIMARY KEY  (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
