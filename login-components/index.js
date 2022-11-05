// password toggle function

const password = document.getElementById("password");

togglePassword.onclick = () => {
    const on = document.getElementById("eye-on");
    const off = document.getElementById("eye-off");

    if (password.type == "password") {
        password.type = "text";
        on.style.display = "block";
        off.style.display = "none";
    } else {
        password.type = "password";
        on.style.display = "none";
        off.style.display = "block";
    }
};

// email and password validation
const email = document.getElementById("email");

const login = document.getElementById("login-btn");

const Emsg = document.getElementById("email-msg");

const Pmsg = document.getElementById("password-msg");

login.onclick= validation();


function validation(){
    var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passwordFormat= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

    if (email.value.match(mailFormat) && password.value.match(passwordFormat)) {
        // valid email and password
        email.style.border = "1px solid green";
        password.style.border = "1px solid green";

        return true;


    } else if (email.value.match(mailFormat) && password.value.unmatch(passwordFormat)) {
        // valid email invalid password
        email.style.border = "1px solid green";
        password.style.border = "1px solid #fb344f";

        return false;
    } else if (password.value.match(passwordFormat) && email.value.unmatch(emailFormat)) {
        // valid password invalid email
        email.style.border = "1px solid #fb344f";
        password.style.border = "1px sold green";


        return false;
    } else {
        // invalid email and password
        email.style.border = "1px solid #fb344f";
        password.style.border = "1px solid #fb344f";

        return false;
    }
};

// dont run form if validation fails
const form=document.getElementById('form');

if (validation()==true){
    form.action="./index.php";

    console.log("works")
}