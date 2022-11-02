const input = document.getElementsByClassName("input");

Array.from(input).forEach(function (input) {
    input.addEventListener("keyup", function (event) {

        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13 || input.value.length == 1) {

            input.nextElementSibling.focus();
        }
    });
});
