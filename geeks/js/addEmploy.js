/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addEmpoly(){
    var d1 = document.getElementById("userid");
    var d2 = document.getElementById("emid");
    var d3 = document.getElementById("fname");
    var d4 = document.getElementById("lname");
    var d5 = document.getElementById("empwd1");
    var d6 = document.getElementById("empwd2");
    var d7 = document.getElementById("ememail");
    var d8 = document.getElementById("emage");    
    var d9 = document.getElementById("type1");
    
    var rex = /^[A-Za-z]+$/;
    var num = /^[0-9]+(.[0-9]{2})?$/;
    var flag = 0;
    if (d1.value == "") {
        d1.style.border = "red solid 1px";
        document.getElementById("userid_err").textContent = "Please input a user id.";
        document.getElementById("userid_err").style.display = "block";
        flag = 1;
    }
    if (d2.value == "") {
        d2.style.border = "red solid 1px";
        document.getElementById("emid_err").textContent = "Please input a employee id.";
        document.getElementById("emid_err").style.display = "block";
        flag = 1;
    }
    if (d3.value == "") {
        d3.style.border = "red solid 1px";
        document.getElementById("emfname_err").textContent = "Please input the first name.";
        document.getElementById("emfname_err").style.display = "block";
        flag = 1;
    }
    if (d4.value == "") {
        d4.style.border = "red solid 1px";
        document.getElementById("emlname_err").textContent = "Please input the last name.";
        document.getElementById("emlname_err").style.display = "block";
        flag = 1;
    }

    if (d5.value == "") {
        d5.style.border = "red solid 1px";
        document.getElementById("empwd_err").style.display = "block";
        flag = 1;
    }
    if (d6.value == "") {
        d6.style.border = "red solid 1px";
        document.getElementById("empwd_err2").style.display = "block";
        flag = 1;
    }
    if (d7.value == "") {
        d7.style.border = "red solid 1px";        
        document.getElementById("ememail_err").style.display = "block";
        flag = 1;
    }

    if (d8.value == "") {
        d8.style.border = "red solid 1px";
        document.getElementById("emage_err").style.display = "block";
        flag = 1;
    }
    if (d9.value == "") {
        d9.style.border = "red solid 1px";
        document.getElementById("emtype_err").style.display = "block";
        flag = 1;
    }  
    
    
    if (!num.test(d1.value) && d1.value != "") {
        d1.style.border = "red solid 1px";
        document.getElementById("userid_err").style.display = "block";
        flag = 1;
    }
    if (!num.test(d2.value) && d2.value != "") {
        d2.style.border = "red solid 1px";
        document.getElementById("emid_err").style.display = "block";
        flag = 1;
    }
    if (!rex.test(d3.value) && d3.value != "") {
        d3.style.border = "red solid 1px";
        document.getElementById("emfname_err").style.display = "block";
        flag = 1;
    }
    if (!rex.test(d4.value) && d4.value != "") {
        d4.style.border = "red solid 1px";
        document.getElementById("emlname_err").style.display = "block";
        flag = 1;
    }
    if(d5.value!=d6.value){
        d5.style.border = d6.style.border = "red solid 1px";
        document.getElementById("empwd_err2").textContent = "Two passwords not the same";        
        document.getElementById("empwd_err2").style.display = "block";
        flag = 1;
    }
    if (!num.test(d8.value) && d8.value != "") {
        d1.style.border = "red solid 1px";
        document.getElementById("emage_err").textContent = "Age only contains numbers";
        document.getElementById("emage_err").style.display = "block";
        flag = 1;
    }
    if (flag == 1) {
//        window.alert();
        return false;
    } else {        
        return true;
    }
}
    

