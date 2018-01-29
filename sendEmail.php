<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $to = "harleauxcarrera@gmail.com";



        $email_subject = "This a test bruh";

        $email_body = "You have received a new message from the user $name.\n".

                                "Here is the message:\n $message".

                                mail($to,$email_subject,$email_body);


     ?>
  </body>
</html>
