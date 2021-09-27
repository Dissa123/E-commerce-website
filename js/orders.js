let name = document.getElementById("na");
let phone = document.getElementById("pn");
let province = document.getElementById("province");
let dis = document.getElementById("dis");
let city = document.getElementById("city");
let pm = document.getElementById("pay");
let submit = document.querySelector("btn");

function validate(value){
    if (name.value == "" || phone.value == "" || province.value == "" || dis.value == "" || city.value ==""){
        alert("Please Check Your details..");
        return false;
    }else{
        return true;
    }
}