

function deleteProd() {
    $(".delete_class").click(function() {
        var del_id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'deleteDB.php',
            data: 'delete_id=' + del_id,
            success: function(data) {                
                    $('#t1').load('getProducts.php');
//                    window.alert("delete product success!");
                $('#div1').load('tables.php');
            }
        });
    });
}

function changeProd() {    
    $(".change_class").click(function() {
        var cha_id = ($(this).attr('id') - 1);
        $.ajax({
            type: 'POST',
            url: 'changeProd.php',
            data: 'change_id=' + cha_id,
            success: function(data) {               
                    $('#div1').load('changeResult.php');
            }
        });
    });
}

function deleteSale() {
    $(".delete").click(function() {
        var del_id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'deleteSale.php',
            data: 'delete_id=' + del_id,
            success: function(data) {                
                    $('#t2').load('getSales.php');
//                    window.alert("delete sales success!");
               $('#div1').load('tables.php');
            }
        });
    });
}

function changeSale() {
    $(".change").click(function() {
        var cha_id = ($(this).attr('id') - 1);
        $.ajax({
            type: 'POST',
            url: 'changeSale.php',
            data: 'change_id=' + cha_id,
            success: function(data) {                
                    $('#div1').load('changeSaleResult.php');
            }
        });
    });
}

function deleteCat() {
    $(".deleteCat").click(function() {
        var del_id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'deleteCat.php',
            data: 'delete_id=' + del_id,
            success: function(data) {                
                    $('#ca2').load('getCategory.php');
//                    window.alert("delete category success!");
                $('#div1').load('tables.php');
            }
        });
    });
}

function changeCat() {
    $(".changeCat").click(function() {
        var cha_id = ($(this).attr('id') - 1);
        $.ajax({
            type: 'POST',
            url: 'changeCat.php',
            data: 'change_id=' + cha_id,
            success: function(data) {                
                    $('#div1').load('changeCatResult.php');
            }
        });
    });
}

function deleteUser() {
    $(".delete_user").click(function() {
        var del_id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'deleteUser.php',
            data: 'delete_id=' + del_id,
            success: function() {                
                    $('#us').load('getUser.php');
                    window.alert("Delete User Success!");
                    $('#admin_div').load('showInfo.php');
            }
        });
    });
}

function changeUser() {    
    $(".change_user").click(function() {
        var cha_id = ($(this).attr('id') - 1);        
        $.ajax({
            type: 'POST',
            url: 'changeUser.php',
            data: 'change_id=' + cha_id,
            success: function() {                      
                    $('#admin_div').load('changeUserResult.php');
            }
        });
    });
}

function delelteEm() {
    $(".delete_em").click(function() {
        var del_id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'deleteEmploy.php',
            data: 'delete_id=' + del_id,
            success: function(data) {                
                    $('#em').load('getEmployee.php');
                    window.alert("delete Employee success!");
                    $('#admin_div').load('showInfo.php');
            }
        });
    });
}

function changeEm() {
    $(".change_em").click(function() {
        var cha_id = ($(this).attr('id') - 1);
//        window.alert(cha_id);
        $.ajax({
            type: 'POST',
            url: 'changeEmployee.php',
            data: 'change_id=' + cha_id,
            success: function(data) {                
                    $('#admin_div').load('changeEmployResult.php');                
            }
        });
    });
}

$(document).ready(function() {    
    deleteProd();
    changeProd();
    deleteSale();
    changeSale();
    deleteCat();
    changeCat();
    deleteUser();
    changeUser();
    changeEm();
    delelteEm();
    $('#mm1').dataTable();
    $('#mm2').dataTable();
    $('#mm3').dataTable();
    $('#mm4').dataTable();
    $('#mm5').dataTable();
    $('#ta1').dataTable();
    $('#ta2').dataTable();
    $('#ta3').dataTable();
    $('#mgt1').dataTable();
    $('#mgt2').dataTable();

});