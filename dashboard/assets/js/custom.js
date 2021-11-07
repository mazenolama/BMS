/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";


    $(".pwstrength").pwstrength();

    $("#invoice_status").change(calcInvoice);
    $("#amount").keydown(calcInvoice);
    $("#amount").keyup(calcInvoice);
    $("#tax").keydown(calcInvoice);
    $("#tax").keyup(calcInvoice);
    $("#discount").keyup(calcInvoice);
    $("#discount").keydown(calcInvoice);
    
function calcInvoice(){

    document.getElementById("calcInvoice").style.display = "block";

    var amount = parseFloat(document.getElementById("amount").value);
    var tax = parseFloat(document.getElementById("tax").value);
    var discount = parseFloat(document.getElementById("discount").value);
    var amount_new;

    var txt_tax = document.getElementById("label-tax");
    var txt_discount = document.getElementById("label-discount");
    var txt_subTotal = document.getElementById("label-subTotal");
    var txt_total = document.getElementById("label-total");
    
    discount = ((discount/100) * amount);
    tax = ((tax/100) * amount);

    amount_new = amount - discount;
    amount_new = amount_new + tax;
   
    txt_tax.innerText= tax.toFixed(2);
    txt_discount.innerText = discount.toFixed(2);

    txt_subTotal.innerText=amount.toFixed(2);
    txt_total.innerText=amount_new.toFixed(2);

    document.getElementsByName("amount").val= amount.toFixed(2);
    document.getElementsByName("tax").val= tax.toFixed(2);
    document.getElementsByName("discount").val = discount.toFixed(2);
    document.getElementsByName("total").val=amount_new.toFixed(2);
    
}
