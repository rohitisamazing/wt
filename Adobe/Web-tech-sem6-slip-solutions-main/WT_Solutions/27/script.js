$(document).ready(function() {
    $('#voterForm').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val().toUpperCase();
        var age = $('#age').val();
        var nationality = $('#nationality').val();
        $.ajax({
            url: 'validate_voter.php',
            method: 'POST',
            data: { name: name, age: age, nationality: nationality },
            success: function(response) {
                $('#response').html(response);
            }
        });
    });
});
