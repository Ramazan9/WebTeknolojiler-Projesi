$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: './php/savecontact.php',
            data: formData,
            success: function(response) {
                alert(response);
                // Clear form fields
                $('#contactForm')[0].reset();
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
});
