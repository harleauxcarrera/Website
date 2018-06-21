<?php

$servername = "localhost";
$username = "harleauxcarrera";
$password = "please313";
$dbname = "desertNoize";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$name = $_POST['name'];
$email = $_POST['email'];

echo $name;
echo $email;

$sql = "INSERT INTO subs (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Desert Noize</title>
    <link rel="icon" href="./resources/icons/cacti.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Chewy|Cinzel+Decorative|Leckerli+One|Merienda+One|Six+Caps" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
   <!-- put first the jquery path, otherwise the bootstrap.js won't work-->
   <script src="js/jquery/jquery-3.1.0.js"></script>
   <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  </head>


  <body>


      <div class="row" id="headerTop">
        <div>
          <h1>Desert Noize</h1>
          <h3>
            El Paso's connection to the local music/arts scene. <br>
            Coming Soon <br>
          </h3>

          <div class="form-section">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="" action="index.html" method="post">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
          <br>
          <br>
            <h4>Keep an eye out. </h4>
            <img src="./resources/img/thirdeye.png" id="thirdeysse">


        </div>
      </div>


      <div class="container"><!--Modal open-->
        <!-- Trigger the modal with a button -->


        <!-- Modal -->
        <div class="modal fade modal-container" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Subscribe for news and events</h3>
              </div>
              <div class="modal-body">

                <form class="" action="index.php" method="post">
                  <input type="text" class = "form-control form" name="name" value="" placeholder="Name..." required>
                  <br>
                  <input type="email" class = "form-control form" name="email" value="" placeholder="Email..." required>
                  <button type="submit" class="btn btn-default sub">Submit</button>
                </form>

              </div>

            </div>

          </div>
        </div>

      </div><!--Modal close-->




  </body>
</html>
