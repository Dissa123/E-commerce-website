let fname = document.getElementById("fn");
let email = document.getElementById("em");
let password = document.getElementById("pass");

function validate(value){
    if (fname.value == "" || email.value == "" || password.value == "" || dis.value == "" || city.value ==""){
        alert("Please Check Your details..");
        return false;
    }else{
        return true;
    }
}