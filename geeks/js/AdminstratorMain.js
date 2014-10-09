/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getPage(str) {
    var s = "";
    if (str == "li1") {
        s = "calender.php";
    } else if (str == "li2") {
        s = "addUsers.php";
    } else if (str == "li3") {
        s = "addEmploy.php";
    } else{
        s = "showInfo.php";
    }
    $("#admin_div").load(s);
}
