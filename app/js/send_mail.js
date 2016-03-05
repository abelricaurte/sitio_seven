$(function() {
    $('.error').hide();
    $(".button").click(function() {
     // validate and process form here
      
      $('.error').hide();
        var company = $("input#company").val();
        if (company == "") {
        $("input#company").focus();
        return false;
      }
        var name = $("input#name").val();
        if (name == "") {
        $("input#name").focus();
        return false;
      }
        var country = $("input#country").val();
        if (country == "") {
        $("input#country").focus();
        return false;
      }

        var email = $("input#email").val();
        if (email == "") {
        $("input#email").focus();
        return false;
      }
        var message = $("input#message").val();
        if (message == "") {
        $("input#message").focus();
        return false;
      }

      var dataString = 'company='+ company + '&name=' + name + '&country=' + country + '&email=' + email + '&message=' + message;
      //alert (dataString);return false;
      $.ajax({
        type: "POST",
        url: "email.php",
        data: dataString,
        success: function() {
          $('#contact_form').html("<div id='message'></div>");
          $('#message').html("<h2>Contact Form Submitted!</h2>")
          .append("<p>We will be in touch soon.</p>")
          .hide()
          .fadeIn(1500, function() {
            $('#message').append("");
          });
        }
      });
      return false;

    });
  });
