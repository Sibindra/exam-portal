// function to activate the form
function activateForm() {
    let form = document.getElementById("form");
    form.action = "./index.php";
}

const email = document.getElementById("email");
// password already exists in togglePassword.js file

// regex
var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

function verifyEmail() {
    if (email.value.match(emailFormat)) {
        email.style.border = "1px solid green";
        return true;
    } else {
        email.style.border = "1px solid #fb344f";
        return false;
    }
}

function verifyPassword() {
    if (password.value.match(passwordFormat)) {
        password.style.border = "1px sold green";
        activateForm();
    } else {
        disableRefresh();
        password.style.border = "1px solid #fb344f";
    }
}

document.getElementById("login-btn").onclick = () => {
    verifyEmail();
    verifyPassword();
};
