<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title id="title">Email Confirmed!</title>
    <link rel="stylesheet" href="/main1.css">
  </head>
  <body>
    <div class="col-lg-12" style="text-align: center;">
      <h1 id="myHeading">Thanks! Your email has been sent</h1>
      <a href="index.php">Go Back</a>
    </div>

    <?php
    //save form values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    //set up mail() parameters
    $to = "harleauxcarrera@gmail.com";
    $subject = "Someone's contacting me from my webpage!";
    $txt = "Sender: $name\n Email Address: $email\n Message: $message";


    if (ctype_space($message)) {
  ?>
    <script>
          document.getElementById("myHeading").innerHTML = "Please enter a valid message input";
          document.getElementById("title").innerHTML = "Invalid Input";
    </script>;
      <?php
        echo "only whitespace";
          } else {
              mail($to, $subject, $txt);
              }
        ?>
  </body>
</html>
