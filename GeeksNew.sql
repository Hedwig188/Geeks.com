/*
Navicat MySQL Data Transfer

Source Server         : kkk
Source Server Version : 50041
Source Host           : cs-server.usc.edu:1220
Source Database       : hyw

Target Server Type    : MYSQL
Target Server Version : 50041
File Encoding         : 65001

Date: 2014-07-25 21:32:34
*/

SET FOREIGN_KEY_CHECKS=0;
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
-- Records of cart
-- ----------------------------
INSERT INTO cart VALUES ('11', '57', '1', '2');
INSERT INTO cart VALUES ('32', '58', '1', '20');

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
-- Records of customer
-- ----------------------------
INSERT INTO customer VALUES ('hyw', '2', 'yaweihua@usc.edu', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES ('yyo', '6', 'yy@qq.com', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES ('ll', '7', 'chd', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES ('kk', '8', 'kk@o.com', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES ('axl', '9', '1310168593@qq.com', '*8902A42DA46F35B5B99B8AFC3C020641F20BD417');
INSERT INTO customer VALUES (null, '20', 'yami@qq.com', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES (null, '21', 'arjun@gmail.com', '*EFBBB30EB7B3C691AEA9CB11E2251B32D0B0D9B0');
INSERT INTO customer VALUES (null, '22', 'ivy@usc.edu', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');
INSERT INTO customer VALUES (null, '23', 'mo@usc.edu', '*E6CC90B878B948C35E92B003C792C46C58C4AF40');

-- ----------------------------
-- Table structure for `employee`
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `userId` int(11) NOT NULL,
  `employId` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(3) default NULL,
  `Id` int(10) NOT NULL auto_increment,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO employee VALUES ('1001', '1001', 'Yawei', 'Huang', 'yaweihua@usc.edu', '*58D24DFDC5B5D55D6F6A25496AB51B74AA0FF7C9', '23', '25', 'Employee');
INSERT INTO employee VALUES ('1003', '1003', 'Xiaoya', 'Hang', 'xiaoyaha@usc.edu', '*45F2C3B4476FFF9AE3E6335C54339C17B96DB83B', '24', '27', 'Manager');

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
-- Records of ooder
-- ----------------------------
INSERT INTO ooder VALUES ('6', '2014-07-11 17:32:03', '599', 'ol', '890 30th street', '14');
INSERT INTO ooder VALUES ('2', '2014-07-12 22:45:39', '24', '5th street', 'zhuguangrou', '15');
INSERT INTO ooder VALUES ('7', '2014-07-12 22:52:35', '22', '2728 Ellendale Pl', '2728 Ellendale Pl', '16');
INSERT INTO ooder VALUES ('8', '2014-07-12 23:06:56', '10', 'alskdfj', '3th sldkfj', '17');
INSERT INTO ooder VALUES ('8', '2014-07-13 18:56:33', '4', 'alsdkfj', '3th sldkfj', '18');
INSERT INTO ooder VALUES ('6', '2014-07-14 11:10:43', '5', 'askdjf', '99887 4th street', '19');
INSERT INTO ooder VALUES ('6', '2014-07-22 16:04:45', '10', 'lkjlkj', 'sdaflkdjsf', '20');
INSERT INTO ooder VALUES ('6', '2014-07-22 16:06:19', '10', 'oostne', 'Noalsdkfj', '21');
INSERT INTO ooder VALUES ('6', '2014-07-22 16:17:27', '66', 'nvbmnv', 'Noalsdkfj', '22');
INSERT INTO ooder VALUES ('2', '2014-07-24 18:04:59', '10', 'choking', '879 chongqing road', '23');
INSERT INTO ooder VALUES ('21', '2014-07-25 11:44:16', '0', 'la', 'sdf', '24');
INSERT INTO ooder VALUES ('20', '2014-07-25 13:20:59', '76', 'ckdnxm', 'aosjcnck', '25');

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
-- Records of orderdetail
-- ----------------------------
INSERT INTO orderdetail VALUES ('24', '3', '1', '2', '1');
INSERT INTO orderdetail VALUES ('25', '3', '1', '6', '2');
INSERT INTO orderdetail VALUES ('17', '14', '1', '599', '3');
INSERT INTO orderdetail VALUES ('11', '15', '1', '2', '4');
INSERT INTO orderdetail VALUES ('15', '15', '2', '10', '5');
INSERT INTO orderdetail VALUES ('23', '15', '1', '2', '6');
INSERT INTO orderdetail VALUES ('39', '16', '2', '2', '7');
INSERT INTO orderdetail VALUES ('18', '16', '1', '18', '8');
INSERT INTO orderdetail VALUES ('9', '17', '1', '10', '9');
INSERT INTO orderdetail VALUES ('24', '18', '2', '2', '10');
INSERT INTO orderdetail VALUES ('31', '19', '1', '5', '11');
INSERT INTO orderdetail VALUES ('31', '20', '2', '5', '12');
INSERT INTO orderdetail VALUES ('22', '22', '3', '7', '13');
INSERT INTO orderdetail VALUES ('28', '22', '2', '20', '14');
INSERT INTO orderdetail VALUES ('10', '22', '1', '5', '15');
INSERT INTO orderdetail VALUES ('34', '23', '1', '10', '16');
INSERT INTO orderdetail VALUES ('11', '24', '0', '2', '17');
INSERT INTO orderdetail VALUES ('9', '25', '5', '10', '18');
INSERT INTO orderdetail VALUES ('39', '25', '3', '2', '19');
INSERT INTO orderdetail VALUES ('27', '25', '1', '20', '20');

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
-- Records of product
-- ----------------------------
INSERT INTO product VALUES ('9', '2', 'FacialTissue', 'Kleenex Ultra Facial Tissue, 120 Count (Pack of 6)', 'tissue.jpg', '10', '1.0');
INSERT INTO product VALUES ('10', '2', 'Calender', 'AT-A-GLANCE 2014 Monthly Desk, Wall Calendar, 11 x 8.5 Inch Page Size (PM170-28)', 'calender.jpg', '5', '0.9');
INSERT INTO product VALUES ('11', '2', 'Bowl', 'Gerber Graduates BPA Free Bunch-A-Bowls with Lids, Colors May Vary', 'bowl.jpg', '2', '1.0');
INSERT INTO product VALUES ('12', '2', 'Cup', 'Coffee Cup', 'cup.jpg', '14', '0.4');
INSERT INTO product VALUES ('14', '1', 'MacBook', 'Apple® - MacBook Air® (Latest Model) - 13.3\" Display - Intel Core i5 - 4GB Memory - 128GB Flash Storage', 'macbook.jpg', '1099', '1.0');
INSERT INTO product VALUES ('15', '1', 'Mouse', 'Razer - Naga Expert MMO Gaming Mouse', 'mouse.jpg', '20', '0.5');
INSERT INTO product VALUES ('17', '1', 'Iphone', 'Apple - iPhone 5s 16GB Cell Phone - Space Gray (Verizon Wireless)', 'iphone.jpg', '599', '1.0');
INSERT INTO product VALUES ('18', '3', 'NikeTshirt', 'NBA size L Blue', 'nikeT.jpg', '20', '0.9');
INSERT INTO product VALUES ('19', '3', 'AdidasShoes', 'size 9 black and yellow', 'adidas.jpg', '50', '1.0');
INSERT INTO product VALUES ('21', '3', 'TheNorthFaceJacket', 'Size M black man', 'nf.jpg', '69', '1.0');
INSERT INTO product VALUES ('22', '4', 'Paper', 'Letter Paper Del', 'paper.jpg', '7', '1.0');
INSERT INTO product VALUES ('23', '4', 'NoteBook', 'Premium Notebook black', 'notebook.jpg', '8', '0.3');
INSERT INTO product VALUES ('24', '4', 'BookMark', '6 pieces angry bird', 'bookmark.jpg', '2', '1.0');
INSERT INTO product VALUES ('25', '4', 'PencilBox', 'Angry Birds yellow iron', 'pencilbox.jpg', '6', '1.0');
INSERT INTO product VALUES ('26', '1', 'CanonCamera', 'Canon - EOS Rebel T3 DSLR Camera with 18-55mm IS Lens - Black', 'canon.jpg', '659', '0.6');
INSERT INTO product VALUES ('27', '3', 'NewBalanceBag', 'Black for male', 'bag.jpg', '20', '1.0');
INSERT INTO product VALUES ('28', '1', 'Earphone', 'AKG - Over-the-Ear Headphones - Black/Silver', 'earphone.jpg', '20', '1.0');
INSERT INTO product VALUES ('29', '2', 'Cleanup', 'Green 2 pair', 'tb.jpg', '30', '0.7');
INSERT INTO product VALUES ('30', '3', 'Purse', 'SEPTWOLVES black', 'purse.jpg', '25', '0.8');
INSERT INTO product VALUES ('31', '4', 'Chair', 'Flash Furniture Mid-Back Black Mesh Computer Chair', 'chair.jpg', '50', '0.1');
INSERT INTO product VALUES ('32', '1', 'LG TV', 'LG - 47\" Class (46-9/10\" Diag.) - LED - 1080p - 60Hz - HDTV', 'tv.jpg', '399', '0.9');
INSERT INTO product VALUES ('33', '1', 'GPS', 'TomTom - Start 50M 5\" GPS with Lifetime Map Updates', 'gps.jpg', '70', '0.9');
INSERT INTO product VALUES ('34', '2', 'Apple Sharper', '30 seconds to cut the fruits', 'apple.jpg', '10', '1.0');
INSERT INTO product VALUES ('35', '2', 'LED Light', 'Nite Ize - TwistLit LED Bike Light', 'light.jpg', '10', '0.8');
INSERT INTO product VALUES ('36', '3', 'Only T-shirt', 'Only T-shirt female  size S white', 'only.jpg', '37', '1.0');
INSERT INTO product VALUES ('37', '3', 'Only Dress', 'Only Dress color organge size XL', 'dress.jpg', '49', '1.0');
INSERT INTO product VALUES ('38', '4', 'HP printer', 'HP - Officejet Pro 8610 e-All-in-One Network-Ready Wireless All-In-One Printer', 'printer.jpg', '149', '0.7');
INSERT INTO product VALUES ('39', '4', 'COMIX knife', 'Skil - Retractable Folding Utility Knife', 'knife.jpg', '2', '1.0');

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
-- Records of productcategory
-- ----------------------------
INSERT INTO productcategory VALUES ('1', 'Electronics', 'Electronic Products');
INSERT INTO productcategory VALUES ('2', 'HomeKitchen', 'Daily life used products');
INSERT INTO productcategory VALUES ('3', 'ClothingAccessories', 'Clothes...');
INSERT INTO productcategory VALUES ('4', 'OfficeProduct', 'Office used products');

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
-- Records of sale
-- ----------------------------
INSERT INTO sale VALUES ('22', '9', '09/09/2014', '09/10/2014', '0.3');
INSERT INTO sale VALUES ('23', '18', '08/08/2014', '09/08/2014', '0.9');
INSERT INTO sale VALUES ('24', '38', '07/08/2014', '07/15/2014', '0.7');
INSERT INTO sale VALUES ('25', '12', '07/06/2014', '07/15/2014', '0.4');
INSERT INTO sale VALUES ('26', '15', '07/06/2014', '07/15/2014', '0.5');
INSERT INTO sale VALUES ('27', '23', '07/06/2014', '07/15/2014', '0.3');
INSERT INTO sale VALUES ('28', '31', '07/06/2014', '07/15/2014', '0.1');

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
-- Records of ship
-- ----------------------------
INSERT INTO ship VALUES ('Ivy Huang', '1', '2718 Ellendale Pl', 'Los Angeles', 'California', '1233211999', '90007', '1');
INSERT INTO ship VALUES ('Yawei Huang', '2', '2900 30th street', 'Los Angeles', 'California', '12311129394', '90007', '1');
INSERT INTO ship VALUES ('aslkd', '3', 'salkdfj', 'asldkjf', 'CT', '2133211928', '80009', '1');
INSERT INTO ship VALUES ('LeiWan', '4', '3000 4th street', 'LA', 'CA', '2133211555', '887754', '6');
INSERT INTO ship VALUES ('rui yan', '9', '879 chongqing road', 'Chongqing', 'CT', '2133211775', '50004', '2');
INSERT INTO ship VALUES ('wl', '11', 'zhuguangrou', 'shenzhen', 'DE', '2312134567', '50089', '2');
INSERT INTO ship VALUES ('Alice Hang', '12', '2728 Ellendale Pl', 'LA', 'CO', '2133211789', '899765', '7');
INSERT INTO ship VALUES ('kk', '13', '3th sldkfj', 'LA', 'CO', '2133865543', '899553', '8');
INSERT INTO ship VALUES ('Jin Huang', '16', 'Noalsdkfj', 'ewr', 'CO', '2133218866', '90234', '6');
INSERT INTO ship VALUES ('arjunp', '17', 'sdf', 'asdf', 'AL', '2138220000', '90007', '21');
INSERT INTO ship VALUES ('Fisk', '18', 'aosjcnck', 'disks', 'CA', '2133218475', '889964', '20');
INSERT INTO ship VALUES ('djsjfk', '21', 'cnejdkd', 'cnsnd', 'CA', '2134846485', '48488', '7');

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
-- Records of tmp
-- ----------------------------

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

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('1', 'Adminstrator', 'hyw', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'ss@cc.com');
INSERT INTO user VALUES ('2', 'Employee', 'wl', '*45F2C3B4476FFF9AE3E6335C54339C17B96DB83B', 'ss2@cc.com');
INSERT INTO user VALUES ('3', 'Manager', 'ivy', '*5123B8EB86D02AD7E83D62C32CF127D04050CB69', 'ss3@cc.com');
INSERT INTO user VALUES ('6', 'Adminstrator', 'fhw', '*5123B8EB86D02AD7E83D62C32CF127D04050CB69', 'haowenfa@usc.edu');
INSERT INTO user VALUES ('7', 'Manager', 'qh', '*3917ADBD4035C1227D2C71118B98632914CFCFC0', 'qinghu@usc.edu');
