function validateForm() {
    return checkmobile();
}
function checkmobile() {
    var mobile = document.forms["form"]["mobile"].value;
    var mobileNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
        if(mobile.value.match(mobileNum)) {
            return true;
        }
        else {
            document.getElementById("mobile").className = document.getElementById("mobile").className + " error";
            return false;
        }
    }