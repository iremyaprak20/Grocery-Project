let signupBtn =document.getElementById("signupBtn");
let signinBtn =document.getElementById("signinBtn");
let nameField =document.getElementById("nameField");
let phoneField = document.getElementById("phoneField")
let title =document.getElementById("title");

function switchToLogin() {
    nameField.style.maxHeight = "0";
    phoneField.style.maxHeight = "0";
    title.innerHTML ="Log In";
    signupBtn.classList.add("disable");
    signupBtn.type = 'button';
    document.getElementById("Name").required = false;
    document.getElementById("phone").required = false;
    if(!signinBtn.classList.contains("disable")) {
        signinBtn.type = 'submit';
    }
    signinBtn.classList.remove("disable");
    document.title = "Log In";
    location.href="#login";
}

function switchToSignup() {
    nameField.style.maxHeight = "60px";
    phoneField.style.maxHeight = "60px";
    title.innerHTML ="Sign Up";
    signinBtn.classList.add("disable");
    signinBtn.type = 'button';
    document.getElementById("Name").required = true;
    document.getElementById("phone").required = true;
    if(!signupBtn.classList.contains("disable")) {
        signupBtn.type = 'submit';
    }
    signupBtn.classList.remove("disable");
    document.title = "Sign Up";
    location.href="#signup";
}

if(window.location.href.indexOf("#login") > -1) {
    switchToLogin();
}


signinBtn.onclick = switchToLogin;
signupBtn.onclick = switchToSignup;
