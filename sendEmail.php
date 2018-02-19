<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Confirmed!</title>
    <link rel="stylesheet" href="/main1.css">
  </head>
  <body>

    <div class="col-lg-12" style="text-align: center;">

      <h1>Thanks! Your email has been sent</h1>
      <a href="index.php">Go Back</a>

    </div>





<!--handle email form-->
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// echo $name;
// echo $email;
// echo $message;

$to = "harleauxcarrera@gmail.com";
$subject = "Someone's contacting me from my webpage!";
$txt = "Sender: $name\n Email Address: $email\n Message: $message";


if (ctype_space($message)) {
      echo "The string '$message' consists of whitespace characters only.\n";
  } else {
      echo "The string '$message' contains non-whitespace characters.\n";
  }





?>
  </body>
</html>
