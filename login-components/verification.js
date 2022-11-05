// function to activate the form
function activateForm() {
    let form = document.getElementById("form");
    form.action = "./index.php";
}

const email = document.getElementById("email");
// password already exists in togglePassword.js file

// regex
var emailFormat =
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// must have first letter capital and atleast on special symbol
var passwordFormat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

function verifyEmail() {
    if (email.matches(emailFormat)) {
        return true;
    } else {
        return false;
    }
}

function verifyPassword() {
    if (password.matches(passwordFormat)) {
        return true;
    } else {
        return false;
    }
}

// only activate form if both email and password are valid
if(verifyEmail()==true && verifyPassword()==true){
    activateForm();
}



document.getElementById('login-btn').onclick=()=>{
    verifyEmail();
    verifyPassword();
}

// change styling depending upon verification
if (verifyEmail() == true) {
    email.style.border = "1px solid green";
} else {
    email.style.border = "1px solid #fb344f";
}

if (verifyPassword() == true) {
    password.style.border = "1px sold green";
} else {
    password.style.border = "1px solid #fb344f";
}

