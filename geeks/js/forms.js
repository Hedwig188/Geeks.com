//$(document).ready(function() {
//    // Select
//    $('.selectpicker').selectpicker();
//
//    // Wizard
//    $('#rootwizard').bootstrapWizard();
//
//    // Mask
//    if ($('[data-mask]')
//            .length) {
//        $('[data-mask]')
//                .each(function() {
//
//                    $this = $(this);
//                    var mask = $this.attr('data-mask') || 'error...',
//                            mask_placeholder = $this.attr('data-mask-placeholder') || 'X';
//
//                    $this.mask(mask, {
//                        placeholder: mask_placeholder
//                    });
//                });
//    }
//});

function showError() {
    var d1 = document.getElementById("ProdName");
    var d2 = document.getElementById("sel");
    var d3 = document.getElementById("prepend");
    var d4 = document.getElementById("desc");
    var rex = /^[A-Za-z0-9]+$/;
    var num = /^[0-9]+(.[0-9]{2})?$/;
    var flag = 0;
    if (d1.value == "") {
        d1.style.border = "red solid 1px";
        document.getElementById("err1").textContent = "Please input a product name.";
        document.getElementById("err1").style.display = "block";
        flag = 1;
    }
    if (d2.value == "") {
        d2.style.border = "red solid 1px";
        document.getElementById("err2").style.display = "block";
        flag = 1;
    }
    if (d3.value == "") {
        d3.style.border = "red solid 1px";
        document.getElementById("err3").style.display = "block";
        flag = 1;
    }
    if (d4.value == "") {
        d4.style.border = "red solid 1px";
        document.getElementById("err4").style.display = "block";
        flag = 1;
    }


    if (!rex.test(d1.value) && d1.value != "") {
        d1.style.border = "red solid 1px";
        document.getElementById("err1").textContent = "Product name only contains characters and numbers.";
        document.getElementById("err1").style.display = "block";
        flag = 1;
    }
    if (!num.test(d3.value) && d3.value != "") {
        d3.style.border = "red solid 1px";
        document.getElementById("err3").textContent = "Price only contains numbers and 2 digits.";
        document.getElementById("err3").style.display = "block";
        flag = 1;
    }

    if (flag == 1) {
        return false;
    } else {
//        window.alert("Add product success!--Click Change Product to see the details!");
        return true;
    }
}


function validateSale(){
//    alert("kkkkk");
    var f = 0;
    var d1 = document.getElementById("sd");
    var d2 = document.getElementById("ed");
    var d3= document.getElementById("na");
    var d4 = document.getElementById("ds");
    
    
    if(d1.value == ""){
        d1.style.border = "red solid 1px";
        document.getElementById("e1").textContent = "Please input the start date";
        document.getElementById("e1").style.display = "block";
        f = 1;
    }
    
    if(d2.value == ""){
        d2.style.border = "red solid 1px";
        document.getElementById("e2").textContent = "Please input the end date";
        document.getElementById("e2").style.display = "block";
        f = 1;
    }
    
    
    if(d3.value == ""){
        d3.style.border = "red solid 1px";
        document.getElementById("e3").textContent = "Please select a product";
        document.getElementById("e3").style.display = "block";
        f = 1;
    }
    
    if(d4.value == "1"){
        d4.style.border = "red solid 1px";
        document.getElementById("e4").textContent = "Please select a discount";
        document.getElementById("e4").style.display = "block";
        f = 1;
    }
    
    if(d1.value>d2.value){
        d1.style.border = "red solid 1px";
        d2.style.border = "red solid 1px";
        document.getElementById("e2").textContent = "Invalid end date";
        document.getElementById("e2").style.display = "block";
        f = 1;
        
    }
    if(f == 0){
        return true;
    }else return false;
    
}

function validateCat() {
    var d1 = document.getElementById("catName");
    var d2 = document.getElementById("catDesc");    
    var rex = /^[A-Za-z0-9]+$/;    
    var flag = 0;
    if (d1.value == "") {
        d1.style.border = "red solid 1px";
        document.getElementById("er1").textContent = "Please input a category name.";
        document.getElementById("er1").style.display = "block";
        flag = 1;
    }
    if (d2.value == "") {
        d2.style.border = "red solid 1px";
        document.getElementById("er2").style.display = "block";
        flag = 1;
    }
    
    if (!rex.test(d1.value) && d1.value != "") {
        d1.style.border = "red solid 1px";
        document.getElementById("er1").textContent = "Category name only contains characters and numbers.";
        document.getElementById("er1").style.display = "block";
        flag = 1;
    }
    
    if (flag == 1) {
        return false;
    } else {
//        window.alert("Add product success!--Click Change Product to see the details!");
        return true;
    }
}


