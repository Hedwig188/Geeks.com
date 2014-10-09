/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addUser(){
    var d1 = document.getElementById("username");
    var d2 = document.getElementById("pwd");
    var d3 = document.getElementById("pwd2");
    var d4 = document.getElementById("email");
    var d5 = document.getElementById("type");
    
    var rex = /^[A-Za-z0-9]+$/;    
    var flag = 0;
    if (d1.value == "") {
        d1.style.border = "red solid 1px";
        document.getElementById("name_err").textContent = "Please input a username.";
        document.getElementById("name_err").style.display = "block";
        flag = 1;
    }
    if (d2.value == "") {
        d2.style.border = "red solid 1px";
        document.getElementById("pwd_err").style.display = "block";
        flag = 1;
    }
    if (d3.value == "") {
        d3.style.border = "red solid 1px";
        document.getElementById("pwd_err2").style.display = "block";
        flag = 1;
    }
    if (d4.value == "") {
        d4.style.border = "red solid 1px";
        document.getElementById("email_err").style.display = "block";
        flag = 1;
    }

    if (d5.value == "") {
        d5.style.border = "red solid 1px";
        document.getElementById("type_err").style.display = "block";
        flag = 1;
    }
    if (!rex.test(d1.value) && d1.value != "") {
        d1.style.border = "red solid 1px";
        document.getElementById("name_err").textContent = "Username only contains characters and numbers.";
        document.getElementById("name_err").style.display = "block";
        flag = 1;
    }
    if(d2.value!=d3.value){
        d2.style.border = d3.style.border = "red solid 1px";
        document.getElementById("pwd_err2").textContent = "Two passwords not the same";        
        document.getElementById("pwd_err2").style.display = "block";
        flag = 1;
    }
    if (flag == 1) {
//        window.alert();
        return false;
    } else {        
        return true;
    }
}
    

