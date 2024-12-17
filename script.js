$(document).ready(function () {
    $('#registrationForm').submit(function (e) {
        e.preventDefault(); // Prevent page reload

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (response) {
                $('#successMessage').html(response);
                $('#registrationForm')[0].reset(); // Reset the form
            },
            error: function () {
                alert('An error occurred. Please try again.');
            }
        });
    });
});
