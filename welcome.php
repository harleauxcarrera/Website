<html>
<body>


<?php

echo nl2br("This dude: ". $_GET["name"] ."\nSays: " . $_GET["message"] . "\nRespond to: " .$_GET["email"]);
// the message


 $email = "harleauxcarrera@gmail.com";
 $subject = "Test";
 $message = "Hey there hows it going";





$mail=mail($email, $subject,$message );
if($mail){
  echo "\nThank you for using our mail form";
}else{
  echo "Mail sending failed.";
}


?>




</body>
</html>
