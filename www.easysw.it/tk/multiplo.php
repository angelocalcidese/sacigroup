<?php
$origine=$_REQUEST["origine"];
$giro=$_REQUEST["giro"];
$tabella = unserialize(base64_decode($_GET['tabella']));
#echo "g ddddddddddddddddddddddddddddddddddddd".$giro; 
#echo "t ".$tabella[0];  exit;
$girox=$_REQUEST["girox"];
$tabellax = unserialize(base64_decode($_GET['tabellax']));
#echo $tabellax[0]; exit;
#for ($mul = 0; $mul <= $giro; ++$mul) {
#$tabella[$mul]=str_replace("-", "", $tabella[$mul]);
#  echo $tabella[$mul];
#}
#echo "<br>";
#for ($mul = 0; $mul <= $girox; ++$mul) {
#$tabellax[$mul]=str_replace("-", "", $tabellax[$mul]);
#  echo $tabellax[$mul];
#}
#exit;
?>
<!doctype html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <title>Distance Matrix Service</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
<style>
   /**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

#container {
  height: 100%;
  display: flex;
}

#sidebar {
  flex-basis: 15rem;
  flex-grow: 1;
  padding: 1rem;
  max-width: 30rem;
  height: 100%;
  box-sizing: border-box;
  overflow: auto;
}

#map {
  flex-basis: 0;
  flex-grow: 4;
  height: 100%;
}

#sidebar {
  flex-direction: column;
} 
    </style>
  </head>
  <body>

    <div id="container" style="height: 50%; width: 75%;">
      <div id="map"></div>
      <div  width="0">
        <h3 style="font-size: 0pt;">Request</h3>
        <pre style="font-size: 0pt;" id="request"></pre>
        <h3 style="font-size: 0pt;">Response</h3>
        <pre style="font-size: 0pt;" id="response"></pre>
      </div>
    </div>
 
    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkfbsPQSEEdVzuoKdfyJf3hmvqQNEN7mw&callback=initMap&v=weekly"
      defer
    ></script>
<script>
/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// @ts-nocheck TODO remove when fixed
function initMap() {
  const bounds = new google.maps.LatLngBounds();
  const markersArray = [];
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 55.53, lng: 9.4 },
    zoom: 3,
  });
  // initialize services
  const geocoder = new google.maps.Geocoder();
  const service = new google.maps.DistanceMatrixService();
  // build request
  const origin1 = "<? echo $origine; ?>";
  //const cat001 = "genova via milano 7 cat 002";
  //const cat1022 = "varese via milano 4 cat 003";
  //const destinationC3 = "bologna via roma 4 cat 004";
  //const cat001 = 'Milano via Roma 56'; const cat-1022 = 'pavia via milano 45';

  <?
 for ($mul = 0; $mul <= $giro; ++$mul) {
  $tabella[$mul]=str_replace("-", "", $tabella[$mul]);
  echo $tabella[$mul];
}
  ?>
  
  const request = {
    origins: [origin1],
 //   destinations: [cat001, cat1022, ],
//destinations: [cat001,cat-1022,],
    <?
  for ($mul = 0; $mul <= $girox; ++$mul) {
  $tabellax[$mul]=str_replace("-", "", $tabellax[$mul]);
  echo $tabellax[$mul];
}
  ?>
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false,
  };

  // put request on page
  document.getElementById("request").innerText = JSON.stringify(
    request,
    null,
    2,
  );
  // get distance matrix response
  service.getDistanceMatrix(request).then((response) => {
    // put response
    document.getElementById("response").innerText = JSON.stringify(
      response,
      null,
      2,
    );

    // show on map
    const originList = response.originAddresses;
    const destinationList = response.destinationAddresses;

    deleteMarkers(markersArray);

    const showGeocodedAddressOnMap = (asDestination) => {
      const handler = ({ results }) => {
        map.fitBounds(bounds.extend(results[0].geometry.location));
        markersArray.push(
          new google.maps.Marker({
            map,
            position: results[0].geometry.location,
            label: asDestination ? "TP" : "TK",
          }),
        );
      };
      return handler;
    };

    for (let i = 0; i < originList.length; i++) {
      const results = response.rows[i].elements;

      geocoder
        .geocode({ address: originList[i] })
        .then(showGeocodedAddressOnMap(false));

      for (let j = 0; j < results.length; j++) {
        geocoder
          .geocode({ address: destinationList[j] })
          .then(showGeocodedAddressOnMap(true));
      }
    }
  });
}

function deleteMarkers(markersArray) {
  for (let i = 0; i < markersArray.length; i++) {
    markersArray[i].setMap(null);
  }

  markersArray = [];
}

window.initMap = initMap;

</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </body>
</html>
