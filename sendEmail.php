<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">

      <h1>Thanks! Your email has been sent</h1>
      <a href="index.php">Go Back</a>

    </div>





<!--handle email form-->
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo $name;
echo $email;
echo $message;

$to = "harleauxcarrera@gmail.com";
$subject = "Someone's contacting me from my webpage!";
$txt = "Sender: $name\n Email Address: $email\n Message: $message";


mail($to,$subject,$txt);
?>
  </body>
</html>
