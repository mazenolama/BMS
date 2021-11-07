/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";


    $(".pwstrength").pwstrength();

    function calcTaxDiscount() {
      
      var Discount = parseFloat(document.getElementById("Discount").value);
      var Rate_VAT = parseFloat(document.getElementById("Rate_VAT").value);
      var Value_VAT = parseFloat(document.getElementById("Value_VAT").value);
      var Amount_collection =parseFloat(document.getElementById("Amount_collection").value);
      
      if (typeof Amount_collection === 'undefined' || !Amount_collection) {

          alert('يرجي ادخال مبلغ التحصيل ');

      } 
      else {
          var newDiscount = (Discount/ 100) * Amount_collection;
          var total =null;
          var newVAT =   (Rate_VAT/ 100) * Amount_collection;
          console.log("VAT = ",newVAT)
          
          sumq = parseFloat(newVAT).toFixed(2);
          sumt = parseFloat(newDiscount).toFixed(2);newDisc

          document.getElementById("Value_VAT").value = sumq;
          document.getElementById("newDisc").value = sumt;

          total =Amount_collection + newVAT;
          total =total - newDiscount;

          total = parseFloat(total).toFixed(2);
          document.getElementById("Total").value = total;
      }
  }
