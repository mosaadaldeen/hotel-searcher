$(document).ready(function () {
  let hotelName = $("ul li:nth-child(2)");

  $("#search").keyup(function () {
    var value = $(this).val().toLowerCase();
    hotelName.filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      $("#result").html(hotelName);

      hotelName.click(function (event) {
        let userId = event.target.dataset.userid;
        console.log(userId);
        window.location.href = "./search.php/" + userId;
        return false;
      });
    });
  });
});

$(".form").submit(function (event) {
  event.preventDefault();
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
        $("#myForm")[0].reset();
        $(".sent-notification").text("Message Sent Successfully.");

        if (response.success === "no_errors")
          location.href = "http://127.0.0.1:8080/thankyou.html";
      },
    });
  }
}

function isNotEmpty(string) {
  if (string.val() == "") {
    string.css("border", "1px solid red");
    return false;
  } else string.css("border", "");
  return true;
}
