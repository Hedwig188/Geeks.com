/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$.ajaxSetup({
  async: false
}); 
base_url = 'http://cs-server.usc.edu:50468/GeeksNew/index.php';
function showDetail(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/main/getProdDetail',
        data: 'prodId=' + id,
        success:function(){
            window.location.href=base_url+"/main/getDetailPage";
        },
        error: function(data) {
            alert(data);
        }
    });
}

function showCategory(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/main/categoryP',
        data: 'catId=' + id,
        success: window.location.href = base_url+"/main/category"
    });
}

function showSale() {
    $.ajax({
        success: window.location.href = base_url+"/main/sale"
    });
}

function addCart(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/cart_ctr/cartPro',
        data: 'pId=' + id,
        success: function(){
            window.location.href = base_url+"/main/cart";
        },
        error:function(){
            alert(data);
        }
    });
}

function changePrice(j,d,o) {
    var str = "#qu"+j;
    var s = "#qua"+j;
    var q = $(str);
    var rex= /^\d+$/; 
    if (!rex.test(q.val())||q.val() == 0) {
        q.css("border","1px solid red");
        alert('invalid quantity.');
    }else{
       q.css("border","1px solid rgb(171,173,179)");
       $.ajax({
            type: 'post',
            url: base_url+'/cart_ctr/updatecart',
            data: 'q=' + q.val() + '&d=' + d + '&o=' + o,
            success: function(result) {
                $(s).html(result);
            },
            error: function() {
                alert('error!');
            }
        }); 
    }    
    
}

function calTotal(n){
    var to = new Array();
    for(i = 0;i<n;i++){
        to[i] = $("#qu"+i).val();
    }
    
    $.ajax({
        type:'post',
        url:base_url+'/cart_ctr/totalPro',
        data:{'to':to},
        success:function(result){
            $("#total").html(result);
        }
    });
}

function deleteoder(id) {
    $.ajax({
        type: 'post',
        url: base_url+'/cart_ctr/deletecartPro',
        data: 'caId=' + id,
        success: function() {
              window.location.href=base_url+'/main/cart';
        },
        error: function() {
            alert('error!');
        }
    });
    
}

$('#cart').click(function() {
    window.location.href = base_url+"/main/cart";
});

function checkoutPro(f){       
    $.ajax({        
        success:function(){
            if(f != 0){    //not login
                window.location.href=base_url+"/main/signinon"; 
            }else{
                window.location.href=base_url+"/cart_ctr/checkout";
            }
        }
    });
}

function logout(){
    $.ajax({
        type:'post',
        url:base_url+'/main/logout',
        data:"",
        success:window.location.href=base_url+"/main/signinon",
        error:function(){
            alert('logout error');
        }
    });
}

$('#logout').click(function(){
    logout();
});

$('#sdb').click(function(){
   showSale(); 
});

$('.siderbar_a').click(function(){
    showCategory($(this).attr('id'));
});

$('.aa').click(function(){
    var id = $(this).attr('id').replace('a_','');
    showCategory(id);
});

$('.ee1').click(function(){
    var id = $(this).attr('id').replace('e_','');
    showDetail(id);
});

$('.ee2').click(function(){
    var id = $(this).attr('id').replace('ee_','');
    showDetail(id);
});

function cleanup(){
    $.ajax({
       url:base_url+'/cart_ctr/cleanup', 
       success:function(data){
        if(data!==""){
            alert(data);
        }
           window.location.href=base_url+'/main/cart';
       },
       error:function(){
           alert('cleanup cart failed.');
       }
    });
}




