/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    


function getPage(str) {
    var s = "";
    if (str == "1") {
        s = "calender.php";
        $("#Mgt_div").load(s);
    } else if (str == "2") {
        window.location.href = 'ManagerMain.php';
    } else if (str == "3") {
        s = "orderReport.php";
        $("#Mgt_div").load(s);        
    }
}


function selectCat() {
    var s = document.getElementById("cat_select");
    var c = document.getElementsByName("sale");
    var sale = "";
    var cat = "";
    for (i = 0; i< c.length;i++){
        if(c[i].checked){
            sale = c[i].value;
        }
    }
    for (i = 0; i < s.length; i++) {
        if (s[i].selected) {
            $('#name_select').empty();
            cat = s[i].value;
        }
    }
    $.ajax({
                type: 'post',
                url: 'getProdName.php',
                data: 'catId=' + cat+'&sale='+sale,
                success: function(data) {
                    document.getElementById("name_select").innerHTML = data;
                },
                error: function() {
                    alert('get product name failed.');
                }
    });
    $.ajax({
                type: 'post',
                url: 'getTable.php',
                data: 'catId=' + cat+"&sale="+sale,
                success: function(data) {
                    document.getElementById("result_table").innerHTML = data;
                },
                error: function() {
                    alert('get table failed.');
                }
    });
}

function selectName(){
    var n = document.getElementById("name_select");
    var pid ="";
    for(i = 0;i<n.length;i++){
        if(n[i].selected){
            pid = n[i].value;
            $.ajax({
               type:'post',
               url:'getTable.php',
               data:'pid='+pid,
               success:function(data){
                   document.getElementById("result_table").innerHTML = data;
               },
               error:function(){
                   alert('get table failed.');
               }
            });
        }
    }
}



