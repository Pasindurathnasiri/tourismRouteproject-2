<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourism Web Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <!-- body begin -->
    <body style="font-family: Arial, Helvetica, sans-serif;">

        <!-- corosal start -->
        <div class="col-md-12 d-flex justify-content-around" style ="margin: 0; padding: 0;">
            <?php
                include("courosal.php");
            ?>
        </div>
        <!-- corosal end -->

        <!-- top bar start -->
        <div id="navbar" >
            <?php
                include("sidebar.php");
            ?>
        </div>
        <!-- top bar end -->

        <!-- content start -->
        <div class="col-md-12  d-flex justify-content-between" style="padding: 0; margin: 0;" >
            <div class="col-md-1"> 
            <!-- nothing here -->
            </div>

            <!-- login start -->
            <div class="col-md-6">
                <?php
                    include("login.php");
                ?>
            </div>
            <!-- login end -->

            <!-- add start -->
            <div class="col-md-3 justify-content-rite" style="height: 100%; ">
                <?php
                    include("add.php");
                ?>
            </div>
            <!-- add end -->
        </div>
        <!-- content end -->

        <!-- footer start -->
        <div id="footer" >
            <?php
                include("footer.php");
            ?>
        </div>
        <!-- footer end -->
    </body>


    
    <!-- <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() 
        {
            if (window.pageYOffset >= sticky) 
            {
                navbar.classList.add("sticky")
            } 
            else 
            {
                navbar.classList.remove("sticky");
            }
        }
    </script> -->

</html>
