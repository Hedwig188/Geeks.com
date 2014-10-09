/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
sid = "";
tmp = "";
$.ajaxSetup({
  async: false
});
base_url = 'http://cs-server.usc.edu:50468/GeeksNew/index.php';
$(document).ready(function() {
    $.ajax({
        data:"",
        url: base_url+'/checkout_ctr/shipInfoSelect',
        success: function(txt) {
            $("#shipInfo").html(txt);
        },
        error: function() {
            alert('error~');
        }
    });
    $('#complete_btn').click(function() {
        if (validateBill()) {
            var name = $('#bill_name').val();
            var type = $('#bill_type').select().val();
            var card = $('#bill_card').val();
            var exp = $('#bill_mon').select().val() + $('#bill_year').select().val();
            var address = $('#bill_address').val();
            var city = $('#bill_city').val();
            var state = $('#bill_state').select().val();
            var zip = $('#bill_zip').val();
            var phone = $('#bill_phone').val();
            if (sid == "") {
                alert("You should select an shipping address.");
            } else {
                $.ajax({
                    type: 'post',
                    url: base_url+'/checkout_ctr/saveBillPro',
                    data: {'name': name,'type':type, 'card': card, 'exp': exp, 'address': address, 'city': city, 'state': state, 'zip': zip, 'phone': phone,'sid':sid},
                    success: function(result) {
                        $("#checkout_content").html(result);
                    },
                    error: function() {
                        alert("submit order error!");
                    }
                });
            }
        }
    });
    
    $('#cart').click(function() {
        window.location.href = base_url+'/main/cart';
    });
    
});

function clickShip(id){
    var str = '#'+id;    
    $(str).css("border", "2px solid black");
    if(tmp != ""){
        $(tmp).css("border", "1px solid rgb(205,205,205)");
    }
    tmp = str;
    sid = id;
}


function add1() {
    $.ajax({
        url: base_url+'/account_ctr/addShip',
        success: function(txt) {
            $("#shipInfo").html(txt);
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
            success: function(txt) {
                window.location.href=base_url+'/cart_ctr/checkout';
            },
            error: function() {
                alert('add ship info error!');
            }
        });
    }
}

function validateShip() {
    var flag = 0;
    var pattern = new RegExp("^(?:\([2-9][0-9]{2}\)\ ?|[2-9][0-9]{2}(?:\-?|\ ?))[2-9][0-9]{2}[- ]?[0-9]{4}$");
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
    if (flag == 1) {
        return false;
    } else {
        return true;
    }
}

function validateBill() {
    var flag = 0;
    var r1 = /^\d{16}$/;
    var r2 = /^(?:\([2-9][0-9]{2}\)\ ?|[2-9][0-9]{2}(?:\-?|\ ?))[2-9][0-9]{2}[- ]?[0-9]{4}$/;
    var r3 = /^[0-9]*$/;
    if ($('#bill_name').val() == "") {
        $('#bn').css("display", "block");
        $('#bill_name').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_card').val() == "") {
        $('#bcn').css("display", "block");
        $('#bill_card').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_address').val() == "") {
        $('#ba').css("display", "block");
        $('#bill_address').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_city').val() == "") {
        $('#bc').css("display", "block");
        $('#bill_city').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_state').val() == "") {
        $('#bs').css("display", "block");
        $('#bill_state').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_zip').val() == "") {
        $('#bz').css("display", "block");
        $('#bill_zip').css("border", "1px solid red");
        flag = 1;
    }
    if ($('#bill_phone').val() == "") {
        $('#bpn').css("display", "block");
        $('#bill_phone').css("border", "1px solid red");
        flag = 1;
    }
    if (!r1.test($('#bill_card').val())) {
        $('#bcn').text("invalid card number.");
        $('#bcn').css("display", "block");
        $('#bill_card').css("border", "1px solid red");
        flag = 1;
    }
    if (!r2.test($('#bill_phone').val())) {
        $('#bpn').text("invalid phone number.");
        $('#bpn').css("display", "block");
        $('#bill_phone').css("border", "1px solid red");
        flag = 1;
    }
    if (!r3.test($('#bill_zip').val())) {
        $('#bz').text("invalid zip code.");
        $('#bz').css("display", "block");
        $('#bill_zip').css("border", "1px solid red");
        flag = 1;
    }


    if (flag == 1) {
        return false;
    } else {
        return true;
    }

}




