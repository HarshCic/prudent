<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
        
<style>
    html,
body {
  margin: 0;
  padding: 0;
}

#map {
  height: 500px;
  margin: 10px auto;
  width: 100%;
}
    </style>        
        <title>PRUDENT</title>
    </head>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="home.php" class="navigation__link"><span>01.</span>Home</a></li>
                    <!-- <li class="navigation__item"><a href="signup.php" class="navigation__link"><span>02.</span>LogIn / SignUp</a></li> -->
                    <li class="navigation__item"><a href="self.php" class="navigation__link"><span>02.</span>Self Help</a></li>
                    <li class="navigation__item"><a href="specialist.php" class="navigation__link"><span>03.</span>Find a Specialist</a></li>
                    <li class="navigation__item"><a href="about.php" class="navigation__link"><span>04.</span>About Us</a></li>
                    </ul>
            </nav>
        </div>
        
        <div id="map"></div>
       <script>
        var map;

function initMap() {
  if (navigator.geolocation) {
    try {
      navigator.geolocation.getCurrentPosition(function(position) {
        var myLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        setPos(myLocation);
      });
    } catch (err) {
      var myLocation = {
        lat: 23.8701334,
        lng: 90.2713944
      };
      setPos(myLocation);
    }
  } else {
    var myLocation = {
      lat: 23.8701334,
      lng: 90.2713944
    };
    setPos(myLocation);
  }
}

function setPos(myLocation) {
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLocation,
    zoom: 10
  });

  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch({
    location: myLocation,
    radius: 5000,
    types: ['hospital']
  }, processResults);

}

function processResults(results, status, pagination) {
  if (status !== google.maps.places.PlacesServiceStatus.OK) {
    return;
  } else {
    createMarkers(results);

  }
}

function createMarkers(places) {
  var bounds = new google.maps.LatLngBounds();
  var placesList = document.getElementById('places');

  for (var i = 0, place; place = places[i]; i++) {
    var image = {
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(25, 25)
    };

    var marker = new google.maps.Marker({
      map: map,
      icon: image,
      title: place.name,
      animation: google.maps.Animation.DROP,
      position: place.geometry.location
    });

    bounds.extend(place.geometry.location);
  }
  map.fitBounds(bounds);
}  </script>


        <footer class="footer">
            <div class="footer__logo-box">
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="about.php" class="footer__link">About Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Credits</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        lorem ipsum <a href="#" class="footer__link">lorem ipsum</a> for his online course <a href="#" class="footer__link">lorem ipsum lorem ipsum</a>.
                        Copyright &copy; by lorem ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                        has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuBzeYkYimIquGG5KkIcB6vFmtHMUzDFo&signed_in=true&libraries=places&callback=initMap" async defer></script>
    </body>
</html>