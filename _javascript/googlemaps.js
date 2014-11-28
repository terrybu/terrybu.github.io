    'use strict';
    $(document).ready(drawMap);
    var map; 
    function drawMap() {
        var mapOptions = {
          center: new google.maps.LatLng(40.749006287, -73.950),
          zoom: 12
        };
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
      var markerLocation = new google.maps.LatLng(40.78151, -73.91499);
      var marker = new google.maps.Marker({
      position: markerLocation,
      map: map,
      title: 'Terry is Here!'
      });
    }