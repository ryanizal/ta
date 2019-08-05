  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/user/img/fav.png">
    <meta name="author" content="codepixer">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>Coffee</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/linearicons.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/nice-select.css">          
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/main.css">
  </head>
  <body class="menu-area">

    <header id="header" id="home">
      <div class="header-top">
        <div class="container">
          <div class="row justify-content-end">

          </div>                  
        </div>
      </div>          
      <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="<?php echo base_url('Welcome'); ?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">

              <li class="menu-has-children"><a href="<?php echo base_url('Welcome/login'); ?>">Login</a>

              </ul>
            </nav>            
          </div>
        </div>
      </header>
      
      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="container">
        <!-- <section class="sample-text-area"> -->
          <div class="row">
            <a href="<?php echo base_url('Welcome/signup'); ?>"><p class="pull-right genric-btn info circle arrow">Back to Signup Member</p></a>
            <div class="col-lg-12 col-md-12 single-menu">
              <h3 class="mb-30 text-center">Register a Roastery</h3>
              <!-- <a href="<?php echo base_url('Welcome/signup_roaster'); ?>"><p class="pull-right">I am a Roaster</p></a> -->
              <br>
              <form method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <?php if ($eror):?>
                    <div class="alert alert-danger col-md-12"><?php echo $eror; ?></div>
                  <?php endif ?>
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="text" name="username_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="email" name="email_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="password" name="password_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Roastery's Name</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="text" name="nama_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">About Your Rosatery</label>
                  <div class="col-sm-12">
                    <textarea class="single-input" name="deskripsi_roaster"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Your Address</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="text" name="alamat_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Roastery's on Map  <i class="fas fa-question-circle" data-toggle="tooltip" title="Just copy your Roastery's google maps link. If you dont have it, just skip it."></i></label>
                  <div class="col-sm-12">
                    <input class="single-input" name="lokasi"></input>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-12">
                    <input class="single-input" type="text" name="telp_roaster">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Profile Picture</label>
                  <div class="col-sm-12">
                    <input class="" type="file" name="foto_roaster">
                  </div>
                </div>
                
                <br>
                <div class="col-lg-2 col-md-2 pull-right">
                  <button type="submit" class="genric-btn info circle arrow">Signup</button>
                </div>
              </div>
            </div>
            <!-- </section> -->
          </div>
        </div>
      </div>



      <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
      </script>
      <script src="<?php echo base_url();?>assets/user/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="<?php echo base_url();?>assets/user/js/vendor/bootstrap.min.js"></script>      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?php echo base_url();?>assets/user/js/easing.min.js"></script>      
      <script src="<?php echo base_url();?>assets/user/js/hoverIntent.js"></script>
      <script src="<?php echo base_url();?>assets/user/js/superfish.min.js"></script> 
      <script src="<?php echo base_url();?>assets/user/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo base_url();?>assets/user/js/jquery.magnific-popup.min.js"></script> 
      <script src="<?php echo base_url();?>assets/user/js/owl.carousel.min.js"></script>      
      <script src="<?php echo base_url();?>assets/user/js/jquery.sticky.js"></script>
      <script src="<?php echo base_url();?>assets/user/js/jquery.nice-select.min.js"></script>      
      <script src="<?php echo base_url();?>assets/user/js/parallax.min.js"></script>  
      <script src="<?php echo base_url();?>assets/user/js/waypoints.min.js"></script>
      <script src="<?php echo base_url();?>assets/user/js/jquery.counterup.min.js"></script>          
      <script src="<?php echo base_url();?>assets/user/js/mail-script.js"></script> 
      <script src="<?php echo base_url();?>assets/user/js/main.js"></script>  
    </body>
    </html>