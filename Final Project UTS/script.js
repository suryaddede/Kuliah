(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      var forms = document.getElementsByClassName("needs-validation");
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();
$(document).ready(function () {
  $("#password, #confirm-password").on("keyup", function () {
    if ($("#password").val().length < 8) {
      $("#password")
        .get(0)
        .setCustomValidity("Password must be at least 8 characters long");
    } else {
      $("#password").get(0).setCustomValidity("");
    }
    if ($("#password").val() != $("#confirm-password").val()) {
      $("#confirm-password").get(0).setCustomValidity("Passwords do not match");
    } else {
      $("#confirm-password").get(0).setCustomValidity("");
    }
  });
});
$(document).ready(function() {
  $('form').submit(function(event) {
    event.preventDefault();
    if (this.checkValidity() === false) {
      event.stopPropagation();
    } else {
      alert('Success!');
      window.location.href = "https://Final-Project-UTS.degrees666.repl.co";
    }
    $(this).addClass('was-validated');
  });
});