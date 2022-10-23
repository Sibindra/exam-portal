const togglePassword = document.getElementById("togglePassword");

togglePassword.onclick = () => {
    const password = document.getElementById("password");
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
