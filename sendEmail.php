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






    <?php
$to = "harleauxcarrera@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
  </body>
</html>
