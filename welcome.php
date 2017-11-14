<html>
<body>


<?php

echo nl2br("This dude: ". $_GET["name"] ."\nSays: " . $_GET["message"] . "\nRespond to: " .$_GET["email"]);
// the message








$mail=mail("harleauxcarrera@gmail.com", "Test message","hey there hows it going" );
if($mail){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed.";
}


?>




</body>
</html>
