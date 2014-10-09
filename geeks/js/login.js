/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function formValidate() {
    var name = document.getElementById("username_input");
    var pwd = document.getElementById("userpwd_input");
    if (!name.value === "" && !pwd.value === "") {
        return true;
    } else if (name.value === "") {
        name.style.border = "#e6393d solid 1px";
        pwd.style.border = "#e6393d solid 1px";
        document.getElementById("err").textContent = "&nbsp;&nbsp;Please fill in the username.";
        document.getElementById("err").style.display = "block";
        return false;
    } else if (pwd.value === "") {
        name.style.border = "#e6393d solid 1px";
        pwd.style.border = "#e6393d solid 1px";
        document.getElementById("err").textContent = "&nbsp;&nbsp;Please fill in the password";
        document.getElementById("err").style.display = "block";
        return false;
    }
}

function check() {
    var name = document.getElementById("username_input");
    var pwd = document.getElementById("userpwd_input");
    if (!isNaN(name.value)) {
            name.value = "";            
            name.style.border = "#e6393d solid 1px";
            pwd.style.border = "#e6393d solid 1px";
            document.getElementById("err").style.display = "block";
    }

}
function phpValidate() {
        var name = document.getElementById("username_input");
        var pwd = document.getElementById("userpwd_input");
        name.style.border = "#e6393d solid 1px";
        pwd.style.border = "#e6393d solid 1px";
        document.getElementById("err").textContent = "\n\
    a";
        document.getElementById("err").style.display = "block";
    
}

