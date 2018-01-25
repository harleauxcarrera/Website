


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



  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <!-- <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="./Skeleton.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="./Logo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>

  </div>
</div> -->

<!-- Modal for full size images on click-->
<!-- <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div> -->




<center><span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span></center>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> El Paso, TX<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 915.920.3948<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: harleauxcarrera@gmail.com<br>
      </div>

                 <!--CONTACT FORM-->
      <p> Send me a message!</p>
      <form action="./index.php" method="get">

        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">

          <div>
            <input class="w3-input w3-border" type="text" placeholder="Name"  name="name">
          </div>

          <div>
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="email">
          </div>

           <div>
            <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">
          </div>


          <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND
          </button>



      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 ">
  <!--SOCIAL MEDIA CONCACT ICONS-->
  <a href="https://www.facebook.com/profile.php?id=100009838722180"> <i class="fa fa-facebook fa-2x w3-hover-opacity"></i></a>
  <a href="http://facebook.com"> <i class="fa fa-instagram fa-2x w3-hover-opacity"></i></a>
  <a href="http://twitter.com/harleauxcarrera"> <i class="fa fa-twitter fa-2x w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/carlos-herrera-a1580676/"> <i class="fa fa-linkedin fa-2x w3-hover-opacity"></i></a>
  <a href="https://www.youtube.com/harleauxcarrera"> <i class="fa fa-youtube fa-2x  w3-hover-opacity"></i></a>
</footer>



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
