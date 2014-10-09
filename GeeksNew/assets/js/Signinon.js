/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
base_url = 'http://cs-server.usc.edu:50468/GeeksNew/index.php';
$('#cart').click(function() {
    window.location.href = base_url + '/main/cart';
});

$('#s1').click(function(){
   signin(); 
});

$('#s2').click(function(){
   signon(); 
});

function signin() {
    if (validateIn()) {
        var email = $('#email').val();
        var pwd = $('#pwd').val();
        $.ajax({
            type: 'post',
            url: base_url + '/signinon_ctr/signinPro',
            data: 'email=' + email + '&pwd=' + pwd,
            success: function(d) {
                if (d == 1) {
                    location.href = "http://cs-server.usc.edu:50468/GeeksNew/index.php/main/cart";
                } else if (d == 2) {
                    location.href = "http://cs-server.usc.edu:50468/GeeksNew/index.php/main/";
                } else if (d == 3) {                    
                    location.href = "http://cs-server.usc.edu:50468/GeeksNew/index.php/main/signinon/";
                    alert("invalid login...");
                }
            },
            error: function(res) {
                alert(res);
            }
        });
    }
}

function signon() {
    if (validateOn()) {
        var email1 = $('#email2').val();
        var pwd2 = $('#pwd2').val();
        var pwd3 = $('#pwd3').val();
        $.ajax({
            type: 'post',
            url: base_url + '/signinon_ctr/signonPro',
            data: 'email2=' + email1 + '&pwd2=' + pwd2 + '&pwd3=' + pwd3,
            success: function(d) {
                if (d == 2) {
                    alert("Email Address Exist!");
                    location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/signinon";
                } else if (d == 3) {
                    location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/cart";
                } else if (d == 4) {
                    location.href="http://cs-server.usc.edu:50468/GeeksNew/index.php/main/";
                }
            },
            error: function(res) {
                alert(res);
            }
        });
    }
}


function validateIn() {
    var f = 0;
    var d1 = $("#email");
    var d2 = $("#pwd");
    var rex = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (d1.val() == "") {
        d1.css("border","1px solid red");
        $("#ep1").show();
        f = 1;
    }
    if (d2.val() == "") {
        d2.css("border","1px solid red");
        $("#pp1").show();
        f = 1;
    }

    if (!rex.test(d1.val()) && d1.val() != "") {
        d1.css("border","1px solid red");
        $("#ep1").text("Invalid Email Address.");
        $('#ep1').show();
        f = 1;
    }
    if (f == 1) {
        return false;
    } else {
        return true;
    }
}


function validateOn() {
    var f = 0;
    var d1 = $("#email2");
    var d2 = $("#pwd2");
    var d3 = $("#pwd3");
    var d4 = $("#term");
    var rex = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (d1.val() == "") {
        d1.css("border","1px solid red");
        $("#ep2").show();
        f = 1;
    }
    if (d2.val() == "") {
        d2.css("border","1px solid red");
        $("#pp2").show();
        f = 1;
    }
    if (d3.val() == "") {
        d3.css("border","1px solid red");
        $("#pp3").show();
        f = 1;
    }
    if (!rex.test(d1.val()) && d1.val() != "") {
        d1.css("border","1px solid red");
        $("#ep2").text("Invalid Email Address.");
        f = 1;
    }

    if (d2.val() != d3.val()) {
        d3.css("border","1px solid red");
        $("#pp3").text("two password not the same.");
        $("#pp3").show();
        f = 1;
    }

    if (!d4.attr('checked',true)) {
        $("#terms").css("color","red");
        f = 1;
    }
    if (f === 1) {
        return false;
    } else {
        return true;
    }
}




