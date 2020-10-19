<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pick Taxi-Van</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0ZN__C_vxHGyqvq96SNBjSsgclzzufZ8&callback=initMap&libraries=&v=weekly"
                defer
              ></script>
              <style type="text/css">
                /* Always set the map height explicitly to define the size of the div
                 * element that contains the map. */
                #map {
                  height: 100%;
                }
          
                /* Optional: Makes the sample page fill the window. */
                html,
                body {
                  height: 100%;
                  margin: 0;
                  padding: 0;
                }
              </style>
              <script>
                let map;
          
                function initMap() {
                  map = new google.maps.Map(document.getElementById("map"), {
                    center: { lat: -34.397, lng: 150.644 },
                    zoom: 8,
                  });
                }
              </script>
        </head>
        <body>
            <div>
                
            

                
                    <div>
                        <?php
                        include("../sidebar.php");
                        ?>
                    </div>
                    <br>    
                
                <h1>&nbsp;Pick A Van</h1>

                <div class="hotels">
                <div class="map">
                   <div id="map">
   
                   </div>
                </div>
                <div class="card text-center" style="width:80% padding:10px; margin:10px; ">
                  <div class="card-body">
                    <h5 class="card-title">Van 1</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card text-center" style="width:80% padding:10px; margin:10px;">
                  <div class="card-body">
                    <h5 class="card-title">Van 2</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card text-center" style="width:80% padding:10px; margin:10px;">
                  <div class="card-body">
                    <h5 class="card-title">Van 3</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card text-center" style="width:80% padding:10px; margin:10px;">
                  <div class="card-body">
                    <h5 class="card-title">Van 4</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>

     
            
            </div>
        </body>
        
    </html>
