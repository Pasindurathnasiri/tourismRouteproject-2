<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Air</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <div>
                <?php
                include("../sidebar.php");
                ?>
            </div>
            <br>    
            
            <h1>&nbsp;Air Modes</h1>
            <!-- map -->

            <div id="googleMap" style="width:100%;height:500px;"></div>

            <script>
                function myMap() {
                var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?AIzaSyALVFbw-QwUdNkmunYR2Bt8BoVXhMTYgks&callback=myMap"></script>

        </div>

    </body>
</html>
