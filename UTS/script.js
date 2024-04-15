$(document).ready(function() {
    $('#loginForm').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        success: function(response) {
          alert(response);
        }
      });
    });
  });
  