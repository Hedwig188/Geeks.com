/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
base_url = 'http://cs-server.usc.edu:50468/GeeksNew/index.php';
$(document).ready(function() {
    $.ajax({
        url: base_url+'/account_ctr/shipInfo',
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
    $('#cart').click(function() {
        window.location.href = base_url+'/main/cart';
    });
});

$("#bi").click(function() {
    $.ajax({
        url: base_url+'/account_ctr/basicInfo',
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
});

$("#si").click(function() {
    $.ajax({
        url: base_url+'/account_ctr/shipInfo',
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
});
$("#oh").click(function() {
    $.ajax({
        url: base_url+'/account_ctr/orderHistory',
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
});



function validateBasic() {
    var f = 0;
    var rex = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ ;
    if ($("#newName").val() == "" && $("#newEmail").val() == "" && $("#newPwd").val() == "") {
        $("#newName").css("border", "1px solid red");
        $("#pn1").css("display", "block");
        $("#newEmail").css("border", "1px solid red");
        $("#pe2").css("display", "block");
        $("#newPwd").css("border", "1px solid red");
        $("#pd3").css("display", "block");
        f = 1;
    }

    if ($("#newName").val() == $("#curName").val()) {
        $("#newName").css("border", "1px solid red");
        $("#n").text("new name is the same as current.");
        $("#pn1").css("display", "block");
        f = 1;
    }
    if ($("#newEmail").val() == $("#curEmail").val()) {
        $("#newEmail").css("border", "1px solid red");
        $("#pe2").text("new email is the same as current.");
        $("#pe2").css("display", "block");
        f = 1;
    }
    if ($("newPwd").val() == $("#curPwd").val()) {
        $("#newPwd").css("border", "1px solid red");
        $("#pd3").text("new password is the same as current.");
        $("#pd3").css("display", "block");
        f = 1;
    }
    if(!rex.test($('#newEmail').val())){
        $("#newEmail").css("border", "1px solid red");
        $("#pe2").text("new email is invalid.");
        $("#pe2").css("display", "block");
        f = 1;
    }
    if (f == 1) {
        return false;
    } else {
        return true;
    }

}

function edit(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/account_ctr/editShipInfo',
        data: 'id=' + id,
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
}


function deletes(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/account_ctr/deleteShipInfo',
        data: 'id=' + id,
        success: function() {
            window.location.href = base_url+'/main/myaccount';
        },
        error: function() {
            alert('error!');
        }
    });
}
function validateShip() {
    var flag = 0;
    var pattern = new RegExp("^(?:\([2-9][0-9]{2}\)\ ?|[2-9][0-9]{2}(?:\-?|\ ?))[2-9][0-9]{2}[- ]?[0-9]{4}$");
    var rex = /^\d{5}$/;
    if ($('#sName').val() == "") {
        $('#pname').css("display", "block");
        $('#sName').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sAddress').val() == "") {
        $('#paddress').css("display", "block");
        $('#sAddress').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sCity').val() == "") {
        $('#pcity').css("display", "block");
        $('#sCity').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sState').val() == "") {
        $('#pstate').css("display", "block");
        $('#sState').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sZip').val() == "") {
        $('#pzip').css("display", "block");
        $('#sZip').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sPhone').val() == "") {
        $('#pphone').css("display", "block");
        $('#sPhone').css("border", "1px solid red");
        flag = 1;
    }
    if (!pattern.test($('#sPhone').val())) {
        $('#pphone').text("invalid phone number.");
        $('#pphone').css("display", "block");
        $('#sPhone').css("border", "1px solid red");
        flag = 1;
    }
    if(!rex.test($('#sZip').val())){
        $('#pzip').text("invalid zip number.");
        $('#pzip').css("display","block");
        $('#szip').css("border","1px solid red");
        flag = 1;
    }
    if (flag == 1) {
        return false;
    } else {
        return true;
    }
}


function validateShip1() {
    var flag = 0;
    var pattern = new RegExp("^(?:\([2-9][0-9]{2}\)\ ?|[2-9][0-9]{2}(?:\-?|\ ?))[2-9][0-9]{2}[- ]?[0-9]{4}$");
    var rex = /^\d{5}$/;
    if ($('#sName1').val() == "") {
        $('#pname1').css("display", "block");
        $('#sName1').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sAddress1').val() == "") {
        $('#paddress1').css("display", "block");
        $('#sAddress1').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sCity1').val() == "") {
        $('#pcity1').css("display", "block");
        $('#sCity1').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sState1').val() == "") {
        $('#pstate1').css("display", "block");
        $('#sState1').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sZip1').val() == "") {
        $('#pzip1').css("display", "block");
        $('#sZip1').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#sPhone1').val() == "") {
        $('#pphone1').css("display", "block");
        $('#sPhone1').css("border", "1px solid red");
        flag = 1;
    }
    if (!pattern.test($('#sPhone1').val())) {
        $('#pphone1').text("invalid phone number.");
        $('#pphone1').css("display", "block");
        $('#sPhone1').css("border", "1px solid red");
        flag = 1;
    }
    if(!rex.test($('#sZip1').val())){
        $('#pzip1').text("invalid zip number.");
        $('#pzip1').css("display","block");
        $('#szip1').css("border","1px solid red");
        flag = 1;
    }
    if (flag == 1) {
        return false;
    } else {
        return true;
    }
}

function add() {
    $.ajax({
        url: base_url+'/account_ctr/addShip',
        success: function(txt) {
            $("#aamiddle").html(txt);
        },
        error: function() {
            alert('error!');
        }
    });
}

function addShip() {
    if (validateShip()) {
        $.ajax({
            type: 'post',
            url: base_url+'/account_ctr/addshipInfoPro',
            data: 'name=' + $('#sName').val() + '&address=' + $('#sAddress').val() + '&city=' + $('#sCity').val() + '&state=' + $('#sState').val() + '&zip=' + $('#sZip').val() + '&phone=' + $('#sPhone').val(),
            success: function() {
                window.location.href = base_url+'/main/myaccount';
            },
            error: function() {
                alert('error!');
            }
        });
    }
}

function editShip() {
    if (validateShip1()) {
        $.ajax({
            type: 'post',
            url: base_url+'/account_ctr/editShipPro',
            data: 'name=' + $('#sName1').val() + '&address=' + $('#sAddress1').val() + '&city=' + $('#sCity1').val() + '&state=' + $('#sState1').val() + '&zip=' + $('#sZip1').val() + '&phone=' + $('#sPhone1').val(),
            success: function(txt) {
                window.location.href = base_url+'/main/myaccount';
            },
            error: function() {
                alert('error!');
            }
        });
    }
}

function showOrderDetail(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/account_ctr/showOrderDetail',
        data: 'oid=' + id,
        success: function(data) {
            $("#aamiddle").html(data);
        },
        error: function() {
            alert('post orderDetail error');
        }
    });
}

function sendBasic() {
    if (validateBasic()) {
        var curName = $('#curName').val();
        var newName = $('#newName').val();
        var curEmail = $('#curEmail').val();
        var newEmail = $('#newEmail').val();        
        var newPwd = $('#newPwd').val();
        
        $.ajax({
            type: 'post',
            url: base_url+'/account_ctr/sendBasic',
            data: 'curName=' + curName + '&newName=' + newName + '&curEmail=' + curEmail + '&newEmail=' + newEmail + '&newPwd=' + newPwd,
            success: function(data) {
                $("#aamiddle").html(data);
            },
            error: function() {
                alert("post basic info failed.");
            }
        });
    }
}


