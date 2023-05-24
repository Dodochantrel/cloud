const error_message = {
    "PasswordLength": "Le mot de passe doit contenir au moins 8 caractères",
    "PasswordMatch": "Les mots de passe ne correspondent pas",
    "PasswordUppercaseLowercase" : "Le mot de passe doit contenir au moins une majuscule et une minuscule",
}

const password = document.getElementById('password');
const password_box = document.getElementById('password_box');
const password_error = document.getElementById('password_error');
const password_confirmation = document.getElementById('password_confirmation');
const confirm_password_box = document.getElementById('confirm_password_box');
confirm_password_error = document.getElementById('confirm_password_error');

const uppercaseRegex = /[A-Z]/;
const lowercaseRegex = /[a-z]/;

password.addEventListener('change', checkPassword);
password_confirmation.addEventListener('change', checkPasswordMatch);

function checkPassword() {
    if( password.value.length < 8 || !uppercaseRegex.test(password.value) || !lowercaseRegex.test(password.value) ) {
        if( password.value.length < 8 ){
            password_error.innerHTML = error_message.PasswordLength;
        }
        else{
            password_error.innerHTML = error_message.PasswordUppercaseLowercase;
        }
        password_box.classList.add('error');
    }
    else{
        password_error.innerHTML = "";
        password_box.classList.remove('error');
    }
}

function checkPasswordMatch() {
    if( password.value != password_confirmation.value ) {
        confirm_password_error.innerHTML = error_message.PasswordMatch;
        confirm_password_box.classList.add('error');
    }
    else{
        confirm_password_error.innerHTML = "";
        confirm_password_box.classList.remove('error');
    }
}

function showPassword(id) {
    const id_element = document.getElementById(id);
    if( id_element.type === "password" ) {
        id_element.type = "text";
    } else {
        id_element.type = "password";
    }
}