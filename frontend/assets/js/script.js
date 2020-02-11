$(document).ready(function() {
  $("#password, #verify").keyup(function() {
    // instantiate passwords
    var password = $("#password").val();
    var verify = $("#verify").val();

    // check if passwords match
    // if yes, hide error message
    if (password == verify) {
      $("#error").text("");
      $("#error").hide();
      $("#user_submit").attr("disabled", false);
    }

    // if passwords do not match, show error message
    if (password != verify) {
      $("#error").text("Passwords do not match.");
      $("#error").show();
      $("#user_submit").attr("disabled", "disabled");
      return;
    }
  });

  if ($("#login-error").text() != "") {
    $("#login-error").show();
  }

  if ($("#login-error").text() == "") {
    $("#login-error").hide();
  }
});