$(document).ready(function() {
  $("#password, #verify").keyup(function() {
    // instantiate passwords
    var password = $("#password").val();
    var verify = $("#verify").val();

    if (password == verify) {
      $("#error").text("");
      $("#error").hide();
      $("#user_submit").attr("disabled", false);
    }

    if (password != verify) {
      $("#error").text("Passwords do not match.");
      $("#error").show();
      $("#user_submit").attr("disabled", "disabled");
      return;
    }
  });
});