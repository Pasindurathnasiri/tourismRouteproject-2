<!DOCTYPE html>
<!-- saved from url=(0063)https://adminlte.io/themes/AdminLTE/pages/examples/profile.html -->
<html style="height: auto; min-height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="./AdminLTE 2 _ User Profile_files/css">
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary" style = "padding:10px">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="./AdminLTE 2 _ User Profile_files/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">User</h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="https://adminlte.io/themes/AdminLTE/pages/examples/profile.html#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          
          </div>
          <div class="col-md-8">

          <style>
          .grid-container > div {
            background-color: white;
            text-align: center;
            
            font-size: 30px;
            }
          </style>
          
            <div class="grid-container" style = "display:grid ;grid-template-areas:'header header header header header header''left main main main main right''footer footer footer footer footer footer';
                    grid-gap: 10px; color:black; grid-template-rows: 50px 245px;">

            <div class="item1" style = "grid-area: header;"></div>
            <div class="item2" style = "grid-area: left; "></div>
            <div class="item3" style = "grid-area: main;">LOGO</div>  
            <div class="item4" style = "grid-area: right;"></div>
            <div class="item5" style = "grid-area: footer;">.</div>
            </div>
          </div>
        </div>

        
        <div>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs col-md-7" >
              <li class="active" id="na"><a href="uprofile.php#profile" data-toggle="tab" style="background-color: yellow;color:black;" >Profile</a></li>
              <li id="na"><a href="uprofile.php#fans" data-toggle="tab"style="background-color: blue;color:black;">Fans</a></li>
              <li id="na"><a href="uprofile.php#sponsor" data-toggle="tab"style="background-color: green;color:black;">Sponsor/Advertisement</a></li>
            </ul>
            </div><br><br><br>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">
              <div >
        <style>
            #na{
                width:275px;
                text-align: center;
                
            }
            .grid-container1 {
                    display: grid;
                    grid-template-columns: auto auto auto ;
                    grid-template-rows: 400px 400px 400px;
                    grid-gap: 10px;
                    padding: 10px;
                            }

            .grid-container1 > div {
                    background-color: yellow;
                    text-align: center;
                    padding: 20px 0;
                    font-size: 30px;
                                    }
        </style>

        <div class="grid-container1">
            <div class="item1">Newest</div>
            <div class="item2">Sec Newest</div>
            <div class="item3">Post</div>  
            <div class="item4">Post</div>
            <div class="item5">Post</div>
            <div class="item6">Post</div>
            <div class="item7">Post</div>
            <div class="item8">Post</div>
            <div class="item9">Post</div>

        </div> 
        </div>
              </div>

              <div class="tab-pane" id="fans">
                
              <div >
        <style>
            .grid-container2 {
                    display: grid;
                    grid-template-columns: auto auto auto ;
                    grid-template-rows: 400px 400px 400px;
                    grid-gap: 10px;
                    padding: 10px;
                    
                            }

            .grid-container2 > div {
                    background-color: blue;
                    text-align: center;
                    padding: 20px 0;
                    font-size: 30px;
                                    }
        </style>

        <div class="grid-container2">
            <div class="item1">Newest</div>
            <div class="item2">Sec Newest</div>
            <div class="item3">Post</div>  
            <div class="item4">Post</div>
            <div class="item5">Post</div>
            <div class="item6">Post</div>
            <div class="item7">Post</div>
            <div class="item8">Post</div>
            <div class="item9">Post</div>

        </div>

              </div>
              </div>

              <div class="tab-pane" id="sponsor">
              <div >
        <style>
            .grid-container3 {
                    display: grid;
                    grid-template-columns: auto auto auto ;
                    grid-template-rows: 400px 400px 400px;
                    grid-gap: 10px;
                    padding: 10px;
                            }

            .grid-container3 > div {
                    background-color: green;
                    text-align: center;
                    padding: 20px 0;
                    font-size: 30px;
                                    }
        </style>

        <div class="grid-container3">
            <div class="item1">Newest</div>
            <div class="item2">Sec Newest</div>
            <div class="item3">Post</div>  
            <div class="item4">Post</div>
            <div class="item5">Post</div>
            <div class="item6">Post</div>
            <div class="item7">Post</div>
            <div class="item8">Post</div>
            <div class="item9">Post</div>

        </div>

              </div>

            </div>
          </div>

        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="./AdminLTE 2 _ User Profile_files/jquery.min.js.download"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./AdminLTE 2 _ User Profile_files/bootstrap.min.js.download"></script>
<!-- FastClick -->
<script src="./AdminLTE 2 _ User Profile_files/fastclick.js.download"></script>
<!-- AdminLTE App -->
<script src="./AdminLTE 2 _ User Profile_files/adminlte.min.js.download"></script>
<!-- AdminLTE for demo purposes -->
<script src="./AdminLTE 2 _ User Profile_files/demo.js.download"></script>


</body></html>