<html>
<body>


<?php

echo nl2br("This dude: ". $_GET["name"] ."\nSays: " . $_GET["message"] . "\nRespond to: " .$_GET["email"]); 
// the message






// send email (to, subject, message)
mail("harleauxcarrera@gmail.com","yooo",$msg);


?>




</body>
</html>