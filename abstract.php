<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
</head>
<body>


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


<div class="row mb-2">
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Distance: --- 3.1 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/MNNIT+Dispensary,+MNNIT+Allahabad+Campus,+Allahabad,+Uttar+Pradesh/@25.492687,81.7980491,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x399ab5870fc34f3d:0x2e8be3079499c0a4!2m2!1d81.8680894!2d25.4927036">MNNIT Dispensary</a>
        </h3>
        <div class="mb-1 text-muted">Opens at 8:00 AM</div>
        <p class="card-text mb-auto">MNNIT Dispensary MNNIT Allahabad Campus, Allahabad, Uttar Pradesh</p>
        <a href="#" class="text-warning">Close</a>
      </div>
      
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 1.3 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/MNNIT+Dispensary,+MNNIT+Allahabad+Campus,+Allahabad,+Uttar+Pradesh/@25.492687,81.7980491,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x399ab5870fc34f3d:0x2e8be3079499c0a4!2m2!1d81.8680894!2d25.4927036">TB Hospital</a>
        </h3>
        <div class="mb-1 text-muted">Opens 24 hours</div>
        <p class="card-text mb-auto">TB Hospital near Sangam, Allahabad, UP.</p>
        <a href="#">Open</a>
        </div>

      <i class="fa fa-phone fa-4" aria-hidden="true">09170781993</i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 2.8 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Mahalaxmi+Netralaya+And+Maternity+Centre/data=!4m5!4m4!1m0!1m2!1m1!1s0x399aca8c1998d223:0x7973783fac6f98b2?sa=X&ved=0ahUKEwjmubukiPnYAhXIvo8KHXpcDKwQ9RcIgQEwCw">Mahalaxmi Netralaya And Maternity Centre</a>
        </h3>
        <div class="mb-1 text-muted">Opens at 12:00 AM</div>
        <p class="card-text mb-auto">74/2,Stanley Road, Muirabad, katra, Allahabad, Allahabad, Uttar Pradesh 211002</p>
        <a href="#" class="text-warning">Close</a>
        </div>

      <i class="fa fa-phone fa-4" aria-hidden="true">09889611126</i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 4.1 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Vineeta+Hospital+Pvt+Ltd/data=!4m5!4m4!1m0!1m2!1m1!1s0x399aca079d1cf9f3:0xa6be6a70c8f4ba99?sa=X&ved=0ahUKEwi7wsy9iPnYAhWKNo8KHa7aDAAQ9RcIhgEwCw">Vineeta Hospital Pvt Ltd</a>
        </h3>
        <div class="mb-1 text-muted">Opens 24 hours</div>
        <p class="card-text mb-auto">10-3A, By Pass Road, Near Phaphamau Railway Station, National HIghway 96, Phaphamau, Allahabad, Uttar Pradesh 211013</p>
        <a href="#">Open</a>
        </div>

      <i class="fa fa-phone fa-4" aria-hidden="true">09336841609</i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 2.8 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Mahavir+Hospital/data=!4m5!4m4!1m0!1m2!1m1!1s0x399acaed3e3c8281:0x43a958d887a6ba0f?sa=X&ved=0ahUKEwi82_fsiPnYAhUPSo8KHUZ5AxYQ9RcIhwEwCw">Mahavir Hospital </a>
        </h3>
        
        <p class="card-text mb-auto">118/63-E/4, Stanley Rd, Beli Goan, Allahabad, Uttar Pradesh 211002</p>
       
        </div>

      
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 2.1 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Garvita+Hospital+And+Maternity+Center/@25.4689204,81.7895696,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x399aca9b99682003:0x4f87b609df63cf9a!2m2!1d81.8596099!2d25.468937">Garvita Hospital And Maternity Center</a>
        </h3>
        <div class="mb-1 text-muted">Opens 24 hours</div>
        <p class="card-text mb-auto">5-C, Katra Pani Ke Tanki, Bank Rd, Allahabad, Uttar Pradesh</p>
        <a href="#">Open</a>
        </div>

      <i class="fa fa-phone fa-4" aria-hidden="true">05322251202</i>
    </div>
  </div>
    <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 3.0 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Jeevan+Rekha+Hospital/@25.4668175,81.7737081,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x399acaecb705cc5b:0xe9f36bbcd768302e!2m2!1d81.8437484!2d25.4668341">Jeevan Rekha Hospital</a>
        </h3>
        
        <p class="card-text mb-auto">14/32, Stanley Rd, Dwarika Puri, Old Katra, Allahabad, Uttar Pradesh 211002</p>
        
        </div>

      <i class="fa fa-phone fa-4" aria-hidden="true">09307604256</i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Distance: --- 3.0 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Dwivedi+Medical+%26+Research+Centre+Pvt+Ltd/data=!4m5!4m4!1m0!1m2!1m1!1s0x399acaec78b1397d:0x3d9a43475bcfdc5c?sa=X&ved=0ahUKEwjcte7mifnYAhVJsY8KHXeRClwQ9RcIdjAL">Dwivedi Medical & Research Centre Pvt Ltd</a>
        </h3>
        <div class="mb-1 text-muted">Opens at 1:00 AM</div>
        <p class="card-text mb-auto"> 39/17 (9-A), Muir Road, Allahabad, Uttar Pradesh 211001</p>
        <a href="#" class="text-warning">Close</a>
      </div>
      <i class="fa fa-phone fa-4" aria-hidden="true">05322266916</i>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 2.6 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Akash+Hospital,+Yamunotri+Nagar,,+Marauka+Uparhar,+Uttar+Pradesh/data=!4m5!4m4!1m0!1m2!1m1!1s0x39853511f52f6633:0x502ec3861103bbde?sa=X&ved=0ahUKEwjM_Yf9ifnYAhWILo8KHf4fB_EQiBMIPTAA">Akash Hospital</a>
        </h3>
        
        <p class="card-text mb-auto">19/3 kasturba gandhi marg, kachahari, Allahabad, Uttar Pradesh 212107</p>
        
        </div>

      
    </div>
  </div>
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Distance: --- 2.1 km</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="https://www.google.co.in/maps/dir/''/Ganga+Hospital/data=!4m5!4m4!1m0!1m2!1m1!1s0x399aca940e224715:0xb852427e21314c86?sa=X&ved=0ahUKEwj98_mLivnYAhUVR48KHRdIBaEQ9RcIhAEwDg">Ganga Hospital</a>
        </h3>
        
        <p class="card-text mb-auto">17/13, Kutchery Rd, Dwarika Puri, Old Katra, Allahabad, Uttar Pradesh 211002</p>
        
        </div>

      <!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
      <i class="fa fa-phone fa-4" aria-hidden="true">09350947886</i>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuBzeYkYimIquGG5KkIcB6vFmtHMUzDFo&signed_in=true&libraries=places&callback=initMap" async defer></script>
</body>
</html>