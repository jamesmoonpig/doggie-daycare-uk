$("#submit-contact").click(function(event) {
    event.preventDefault();

    if (validateFormContact()) {

        $('.form-contact').fadeOut(500);

        $('#success-container-contact').fadeOut(500);

        setTimeout(function() {
            document.getElementById("success-container-contact").innerHTML = "Thank you for your submission";
        }, 500);

        $('#success-container-contact').fadeIn(500);

        $(".form-newsletter").submit();
    }
});

function validateFormContact() {
    var noError = true;
    var varName = document.forms["form-contact"]["iname"].value;
    var varEmail = document.forms["form-contact"]["iemail"].value;
    var varPhone = document.forms["form-contact"]["iphone"].value;
    var varMessage = document.forms["form-contact"]["imessage"].value;

    if (varName == null || varName == "") {
        document.getElementById("name-validation-contact").innerHTML = "Please complete this field";
        noError = false;
    } else {
        document.getElementById("name-validation-contact").innerHTML = "";
    }

    if (varEmail == null || varEmail == "" || varEmail.indexOf('@') === -1 || varEmail.indexOf('.') === -1) {
        document.getElementById("email-validation-contact").innerHTML = "Please provide a valid email address";
        noError = false;
    } else {
        document.getElementById("email-validation-contact").innerHTML = "";
    }

    if (varPhone == null || varPhone == "" || varPhone.length != 11 || varPhone.indexOf(0) != '0') {
        document.getElementById("phone-validation-contact").innerHTML = "Please provide a valid phone number";
        noError = false;
    } else {
        document.getElementById("phone-validation-contact").innerHTML = "";
    }

    if (varMessage == null || varMessage == "") {
        document.getElementById("message-validation-contact").innerHTML = "Please provide a message";
        noError = false;
    } else {
        document.getElementById("message-validation-contact").innerHTML = "";
    }

    return noError;
}