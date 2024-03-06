$(document).ready(function () {
    $("#eye-icon").click(function () {
        var inputContrasena = $("#password");
        var eyeIcon = $("#eye-icon");

        if (inputContrasena.attr("type") === "password") {
            inputContrasena.attr("type", "text");
            eyeIcon.removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
            inputContrasena.attr("type", "password");
            eyeIcon.removeClass("fa-eye-slash").addClass("fa-eye");
        }
    });
});
