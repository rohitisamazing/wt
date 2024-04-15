$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: 'check_login.php',
            method: 'POST',
            data: { username: username, password: password },
            success: function(response) {
                $('#response').html(response);
            }
        });
    });
});
