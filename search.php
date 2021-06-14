<?php 
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['body'];
$to = "mohammadsd97@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $body;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>

		<h4 class="sent-notification"></h4>

    <div class=" form col-sm-6 col-sm-offset-2 mt-5 text-center mx-auto">
              <h2>Send an Email</h2>
            <form class="form" method="post" action="" class="text-center form" >
              <input type="hidden" data-form-email="true">
                <input type="text" class="form-control mb-3" id="name" name="name" required="" placeholder="Name*" data-form-field="Name">
                <input type="email" class="form-control mb-3" id="email" name="email" required="" placeholder="Email*" data-form-field="Email">
                <input type="text" class="form-control mb-3" id="subject" name="subject" required="" placeholder="Subject*" data-form-field="Name">
                <textarea class="form-control mb-3" id="body" name="body" placeholder="Message" rows="7" data-form-field="Message"></textarea>
              <button type="submit" class="btn btn-lg btn-danger" onclick="sendEmail()" value="Send An Email">Send email</button>
            </form>
          </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="./main.js"></script>

</body>
</html>
      