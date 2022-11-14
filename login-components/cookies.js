// function setcookie() {

//     var email = document.getElementById("email").value;
//     var password = document.getElementById("password").value;

//     document.cookie="password"+password+";path=http://localhost/Exam-Portal/";
//     document.cookie="email"+email+";path=http://localhost/Exam-Portal/";
// }

// function getCookies(){
//     // console.log(document.cookie);

//     var userEmail=getCookie("email");
//     var userPassword=getCookie("password");

//     document.getElementById("email").value=userEmail;
//     document.getElementById("password").value=userPassword;
// }

// function getCookie(cname) {
//     var name = cname + "=";
//     var ca = document.cookie.split(';');
//     for(var i=0; i<ca.length; i++) {
//        var c = ca[i];
//        while (c.charAt(0)==' ') c = c.substring(1);
//        if(c.indexOf(name) == 0)
//           return c.substring(name.length,c.length);
//     }
//     return "";
// }

// const rmCheck = document.getElementById("rememberMe"),
//     emailInput = document.getElementById("email");

// if (localStorage.checkbox && localStorage.checkbox !== "") {
//     rmCheck.setAttribute("checked", "checked");
//     emailInput.value = localStorage.username;
// } else {
//     rmCheck.removeAttribute("checked");
//     emailInput.value = "";
// }

// function lsRememberMe() {
//     if (rmCheck.checked && emailInput.value !== "") {
//         localStorage.username = emailInput.value;
//         localStorage.checkbox = rmCheck.value;
//     } else {
//         localStorage.username = "";
//         localStorage.checkbox = "";
//     }
// }
