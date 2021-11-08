/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";


$(".pwstrength").pwstrength();

$("#amount").keydown(calcInvoice);
$("#amount").keyup(calcInvoice);
$("#tax").keydown(calcInvoice);
$("#tax").keyup(calcInvoice);
$("#discount").keyup(calcInvoice);
$("#discount").keydown(calcInvoice);
    
function calcInvoice(){

    document.getElementById("calcInvoice").style.display = "block";

    var subTotal = document.getElementById("amount").value;
    var tax = document.getElementById("tax").value;
    var discount = document.getElementById("discount").value;
    var total;

    var txt_tax = document.getElementById("label-tax");
    var txt_discount = document.getElementById("label-discount");
    var txt_subTotal = document.getElementById("label-subTotal");
    var txt_total = document.getElementById("label-total");
    
    discount = ((discount/100) * subTotal);
    tax = ((tax/100) * subTotal);

    total = subTotal - discount;
    total = total + tax;

    txt_tax.innerText= parseFloat(tax).toFixed(2);
    txt_discount.innerText = parseFloat(discount).toFixed(2);
    txt_subTotal.innerText=parseFloat(subTotal).toFixed(2);
    txt_total.innerText=parseFloat(total).toFixed(2);

    document.querySelector('input[name="amount"]').value = parseFloat(subTotal).toFixed(2);
    document.querySelector('input[name="tax"]').value = parseFloat(tax).toFixed(2);
    document.querySelector('input[name="discount"]').value = parseFloat(discount).toFixed(2);
    document.querySelector('input[name="total"]').value = parseFloat(total).toFixed(2);
}
