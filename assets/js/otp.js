
$(function() {
'use strict';

const inputs = document.querySelectorAll('#otp > *[id]');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('keydown', function(event) {
            if (event.key === "Backspace") {
            inputs[i].value = '';
            if (i !== 0)
                inputs[i - 1].focus();
            } 
            else {
                if (i === inputs.length - 1 && inputs[i].value !== '') {
                    return true;
                } 
                else if (event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 96  && event.keyCode <= 105) {
                    inputs[i].value = event.key;
                    if (i !== inputs.length - 1){
                        inputs[i + 1].focus();
                    }
                    event.preventDefault();
                } 
            }
        });
    }
})
