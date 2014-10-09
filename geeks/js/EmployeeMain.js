/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




function getPage(str) {
    var s = "";
    if (str == 1) {
        s = "calender.php";
    } else if (str == 2) {
        s = "forms.php";
    } else if (str == 3) {
        s = "categories.php";
    } else if(str == 4){
        s = "tables.php";
    }else{
        s = "sales.php";
    }
    $("#div1").load(s);
}


