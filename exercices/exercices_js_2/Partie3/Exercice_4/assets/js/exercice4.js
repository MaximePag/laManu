function checkPassword(){
    let firstInput = document.getElementById("password");
    let secondInput = document.getElementById("confirmPassword");
    if (firstInput.value == secondInput.value){
        firstInput.style.border = "3px green solid";
        secondInput.style.border = "3px green solid";
    }
    else{
        firstInput.style.border = "3px red solid";
        secondInput.style.border = "3px red solid";
    }
}