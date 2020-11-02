  <!DOCTYPE html>
      <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Hotels</title>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <body>
              <div>
                  
              

                  
                      <div>
                          <?php
                          include("../sidebar.php");
                          ?>
                      </div>
                      <br>    
                  
                  <h1>&nbsp;Hotels/Restuarents</h1>

                  <div id="googleMap" style="width:100%;height:500px;"></div>

                    <script>
                    
                        function myMap() 
                        {
                            
                            var mapProp= 
                            {
                                center:new google.maps.LatLng(7.8731,80.7718),
                                zoom:7,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    
                            
                            
                    
                            if (navigator.geolocation) 
                            {
                                navigator.geolocation.getCurrentPosition(showPosition);
                            } 
                        
                    
                            var lat ;
                            var lan ;
                            
                            function showPosition(position) 
                            {
                                lat = position.coords.latitude;
                                lan = position.coords.longitude;
                                console.log(lat + "'" + lan);
                                var marker = new google.maps.Marker(
                                {
                                    position: new google.maps.LatLng(lat,lan),
                                    map: map,
                                });
                                var infowindow = new google.maps.InfoWindow(
                                {
                                    content:"My Location"
                                });
                    
                                infowindow.open(map,marker);
                    
                                // Zoom to 9 when clicking on marker
                                google.maps.event.addListener(marker,'click',function() 
                                {
                                    map.setZoom(10);
                                    map.setCenter(marker.getPosition());
                                });
                            }
                            
                            
                    
                        }
                        
                    </script>
                    
                    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyALVFbw-QwUdNkmunYR2Bt8BoVXhMTYgks&callback=myMap"></script>
                    
                    <script>
                    
                    </script>
                                      </div>
                    

                  <div class="hotels">
                  <!-- Card Start -->
                  <div class="card" style="width:80% padding:10px; margin:10px; ">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-3">
                    <img src="../images/hotel_images.jpg" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-6">
                    <h4 class="card-title">Hotel Grand Gardian</h4>
                    <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> </p>                   
                          <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>

                          <p class="text-secondary mb-0">14,954 reviews</p>
                          <div class="row px-3">
                          <h6 class="mb-1">1 bedroom &middot; 1 living &middot; 2 beds</h6>
                          </div>
                          <p class="mb-4">Kuruvita, Rathnapura &middot; 5.6 km from center</p>
                      <a href="#" class="btn btn-primary">Book</a>
                      
                    </div>
                    </div>
                    
                    </div> 
                  </div> 

                 <!-- Card End -->

           <!-- Card Start -->
           <div class="card" style="width:80% padding:10px; margin:10px; ">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-3">
                    <img src="../images/hotel_images.jpg" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-6">
                    <h4 class="card-title">Hotel Grand Gardian</h4>
                    <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> </p>                   
                          <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>

                          <p class="text-secondary mb-0">14,954 reviews</p>
                          <div class="row px-3">
                          <h6 class="mb-1">1 bedroom &middot; 1 living &middot; 2 beds</h6>
                          </div>
                          <p class="mb-4">Kuruvita, Rathnapura &middot; 5.6 km from center</p>
                      <a href="#" class="btn btn-primary">Book</a>
                      
                    </div>
                    </div>
                    
                    </div> 
                  </div> 

                 <!-- Card End -->
                            <!-- Card Start -->
                            <div class="card" style="width:80% padding:10px; margin:10px; ">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-3">
                    <img src="../images/hotel_images.jpg" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-6">
                    <h4 class="card-title">Hotel Grand Gardian</h4>
                    <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> </p>                   
                          <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>

                          <p class="text-secondary mb-0">14,954 reviews</p>
                          <div class="row px-3">
                          <h6 class="mb-1">1 bedroom &middot; 1 living &middot; 2 beds</h6>
                          </div>
                          <p class="mb-4">Kuruvita, Rathnapura &middot; 5.6 km from center</p>
                      <a href="#" class="btn btn-primary">Book</a>
                      
                    </div>
                    </div>
                    
                    </div> 
                  </div> 

                 <!-- Card End -->
                            <!-- Card Start -->
                            <div class="card" style="width:80% padding:10px; margin:10px; ">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-3">
                    <img src="../images/hotel_images.jpg" style="width:100%; height:auto;">
                    </div>
                    <div class="col-md-6">
                    <h4 class="card-title">Hotel Grand Gardian</h4>
                    <p class="rating mb-0 px-2 mr-3"><strong>8.0</strong> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> <span class="fa fa-star text-warning mr-1"></span> </p>                   
                          <p class="text-primary mb-0 mr-2 grade"><strong>Very Good</strong></p>

                          <p class="text-secondary mb-0">14,954 reviews</p>
                          <div class="row px-3">
                          <h6 class="mb-1">1 bedroom &middot; 1 living &middot; 2 beds</h6>
                          </div>
                          <p class="mb-4">Kuruvita, Rathnapura &middot; 5.6 km from center</p>
                      <a href="#" class="btn btn-primary">Book</a>
                      
                    </div>
                    </div>
                    
                    </div> 
                  </div> 

                 <!-- Card End -->
                 
                      </div>

      
              
              </div>
              <div id="footer" >
              <?php
                  include("../footer.php");
              ?>
            </div>
          </body>
      </html>
