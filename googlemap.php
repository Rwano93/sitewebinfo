<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <!-- The callback parameter is required, so we use console.debug as a noop -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1ggIK45m252gtAXzRZ0SASsvSSd8ju-s&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       
element that contains the map. */
    gmp-map {
      height: 100%;}

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <gmp-map center="48.93626022338867,2.498816967010498" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="48.93626022338867,2.498816967010498" title="My location"></gmp-advanced-marker>
    </gmp-map>
  </body>
</html>