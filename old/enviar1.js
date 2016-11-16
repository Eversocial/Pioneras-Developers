$(document).ready(function() {
   $("#phpcomparteform").submit(function(e) {
       e.preventDefault();
       var nombre = $("#nombre");
       var apellido = $("#apellido");
       var usertwitter  = $("#usertwitter");
       var email = $("#email");
       var charla = $("#charla");
       var descriptionconference = $("#descriptionconference");
       var descriptionabout = $("#descriptionabout");
       var recursos = $("#recursos");

       var flag = false;
       if (nombre.val() == "") {
           nombre.closest(".form-group").addClass("has-error");
           nombre.focus();
           flag = false;
           return false;
       } else {
           nombre.closest(".form-group").removeClass("has-error").addClass("has-success");
       } if (email.val() == "") {
           email.closest(".form-group").addClass("has-error");
           email.focus();
           flag = false;
           return false;
       } else {
           email.closest(".form-group").removeClass("has-error").addClass("has-success");
           flag = true;
            $('input[type="submit"]').attr('disabled','disabled');
       }
       var dataString = "nombre=" + nombre.val() + "&apellido" + apellido.val() + "&usertwitter" + usertwitter.val() + "&email=" + email.val() + "&charla" + charla.val() + "&apellido" + apellido.val() + "&descriptionconference" + descriptionconference.val();
       $(".loading").fadeIn("slow").html("<p>Loading...</p>");
       $.ajax({
           type: "POST",
           data: dataString,
           url: "contact.php",
           cache: false,
           success: function (d) {
               $(".form-group").removeClass("has-success");
            if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
$('.loading').fadeIn('slow').html('<p><font style="color:#51D026 ;">Mensaje enviado con éxito</font></p>').delay(3000).fadeOut('slow');
    else
    $('.loading').fadeIn('slow').html('<p><font style="color:#F44A4A ;">Oops. Something went wrong.</font></p>').delay(3000).fadeOut('slow');

           }
       });
       return false;
   });
   $("#reset").click(function () {
       $(".form-group").removeClass("has-success").removeClass("has-error");
   });
})
