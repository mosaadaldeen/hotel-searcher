$(document).ready(function () {
  let hotelName = $("ul li:nth-child(2)");

  $("#search").keyup(function () {
    var value = $(this).val().toLowerCase();
    hotelName.filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      $("#result").html(hotelName);

      hotelName.click(function () {
        window.location.href = "./search.php";
        return false;
      });
    });
  });
});

function sendEmail() {
  var name = $("#name");
  var email = $("#email");
  var subject = $("#subject");
  var body = $("#body");

  if (
    isNotEmpty(name) &&
    isNotEmpty(email) &&
    isNotEmpty(subject) &&
    isNotEmpty(body)
  ) {
    $.ajax({
      url: "sendEmail.php",
      method: "POST",
      dataType: "json",
      data: {
        name: name.val(),
        email: email.val(),
        subject: subject.val(),
        body: body.val(),
      },
      success: function (response) {
        if (response.status == "success")
          $("#success").text("Email Has Been Sent!");
        else {
          alert("Please Try Again!");
        }
      },
    });
  }
}

function isNotEmpty(caller) {
  if (caller.val() == "") {
    caller.css("border", "1px solid red");
    return false;
  } else caller.css("border", "");
  return true;
}
