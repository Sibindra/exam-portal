document.onkeydown = function (e) {
    e = e || window.event;
    keycode = e.which || e.keyCode;
    if (keycode == 13) {
        // '13' is the keycode for "enter"
        e.preventDefault();
        submitForm();
    }
};


function submitForm(){
    window.location.href="../Payment/Payment.html"
}