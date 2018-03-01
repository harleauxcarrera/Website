


<!DOCTYPE html>
<html>
<head>

  <title>Carlos Herrera</title>
  <link rel="icon" href="./Pics/icon.png"><!--tab icon-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main1.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

<style media="screen">
p{
  color: white;
  font-family: 'Oswald', sans-serif;
  font-size: 18px;
}

h1{
  color: white;
  font-family: 'Oswald', sans-serif;
  text-shadow:
		-2px -2px 0 #000,
		2px -2px 0 #000,
		-2px 2px 0 #000,
		2px 2px 0 #000;
}
#aboutMe{
  background-color: white;
}

#Contact{
padding: 36px 36px;
 background-image: url("http://m.rgbimg.com/cache1och38/users/z/ze/zela/600/mqhZ0dy.jpg");
 border: none;
}

#myForm input {
  color: black;
}
#profilePic{
  margin: 10px 10px;
  margin-bottom: 100px;
  width: 50%;
  border-radius: 10px;
}



</style>
</head>

<body>



  <!--Social media links on  right side navbar-->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
   <a href="https://www.facebook.com/profile.php?id=100009838722180"> <i class="fa fa-facebook fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="http://facebook.com" > <i  class="fa fa-instagram fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="https://twitter.com/HarleauxCarrera"> <i class="fa fa-twitter fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;" ></i></a>
    <a href="https://www.linkedin.com/in/carlos-herrera-a1580676/"> <i class="fa fa-linkedin fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="https://www.youtube.com/harleauxcarrera"> <i class="fa fa-youtube fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
  </div>
</div>

<!-- First Parallax Image with Logo Text removed from class:w3-display-container -->
<div class="bgimg-1" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small"></span> CARLOS HERRERA</span>
</div>
</div>



<div class= "bgimg-3" id = "aboutMe" class="row">

  <div class="col-md-4">
    <img id = "profilePic" src="Profile2.jpg" alt="">
  </div>

  <div class="col-md-4">
    <h1>Education</h1>
  </div>

  <div class="col-md-4">
    <h1>Experience</h1>
  </div>

</div>

  <div id = "Contact" class="row">

    <!--Contact Form-->
    <div id= "myForm" class="col-lg-12">
    	<center><h1> Send me a message!</h1></center>
    	<form action="./sendEmail.php" method="POST" style="width: 100%; margin: auto;">
    		      <div>
    		          <input class="w3-input w3-border" type="text" placeholder="Name"  name="name"required>
    		      </div>
    		      <div>
    		          <input class="w3-input w3-border" type="email" placeholder="Email"  name="email" required>
    		      </div>
    		      <div>
    		          <input  id ="messageInput" class="w3-input w3-border" type="textarea" placeholder="Message"  name="message" required>
    		      </div>
    		      <button class="w3-button w3-black w3-right  w3-section" type="submit" >
    		          <i class="fa fa-paper-plane"></i> SEND
    		      </button>
    	 </form>
    </div>
  </div>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(31.7708544, -106.50462160000001);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}


</script>
<!--created API key for javascript in google API console to be able to use the google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqBZyEr4W2HKhbljzC6NMJy2o9ewZdgJY&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
