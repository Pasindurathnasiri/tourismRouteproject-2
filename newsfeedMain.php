<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourism Web Site - News Feed</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <style>
    body{
        background-image:url("images/background test2(1).jpg");
        background-size:200%;
    }
    </style>
    <!-- body begin -->
    <body style="font-family: Arial, Helvetica, sans-serif;">

     

        <!-- top bar start -->
        <div id="navbar" >
            <?php
                include("sidebar.php");
            ?>
        </div>
        <!-- top bar end -->

        <!-- content start  -->
        <?php
                include("NewsFeed/newsfeed.php");
       ?>

        <!-- content end -->
        <!-- footer start -->
        <div id="footer" >
            <?php
                include("footer.php");
            ?>
        </div>
        <!-- footer end -->
    </body>



</html>
