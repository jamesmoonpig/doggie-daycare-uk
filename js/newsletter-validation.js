$("#submit-newsletter").click(function(event) {
    event.preventDefault();

    if (validateFormNewsletter()) {

        $('.form-newsletter').fadeOut(500);

        $('#success-container-newsletter').fadeOut(500);

        setTimeout(function() {
            document.getElementById("success-container-newsletter").innerHTML = "Thanks. ";
        }, 500);

        $('#success-container-newsletter').fadeIn(500);

        $(".form-newsletter").submit();
    }
});

function validateFormNewsletter() {
    var noError = true;
    var varName = document.forms["form-newsletter"]["nlname"].value;
    var varEmail = document.forms["form-newsletter"]["nlemail"].value;

    if (varName == null || varName == "") {
        document.getElementById("name-validation-newsletter").innerHTML = "Please complete this field";
        noError = false;
    } else {
        document.getElementById("name-validation-newsletter").innerHTML = "";
    }

    if (varEmail == null || varEmail == "" || varEmail.indexOf('@') === -1 || varEmail.indexOf('.') === -1) {
        document.getElementById("email-validation-newsletter").innerHTML = "Please provide a valid email address";
        noError = false;
    } else {
        document.getElementById("email-validation-newsletter").innerHTML = "";
    }

    return noError;
}