$(document).ready(function() {
    $("#loginForm").submit(function(event) {
        event.preventDefault();

        var username = $("#username").val();
        var password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "controllers/login.php",
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response === "success") {
                    // Redirect or perform any other action on successful login
                    window.location.href = "dashboard.php";
                } else {
                    $("#message").text(response);
                }
            },
            error: function() {
                $("#message").text("An error occurred.");
            }
        });
    });
});
