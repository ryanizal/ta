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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/font-awesome.min.css">
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
          <a href="index.html"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
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
          <div class="col-lg-12 col-md-12 single-menu">
            <a href="<?php echo base_url('Welcome/signup_roaster'); ?>"><p class="pull-right genric-btn info circle arrow">I'm a Roaster</p></a>
            <h3 class="mb-30 text-center">Register a new membership</h3>
            <br>
            <form method="post" enctype="multipart/form-data" class="form-horizontal">
             <?php if ($eror):?>
              <div class="alert alert-danger col-md-12"><?php echo $eror; ?></div>
            <?php endif ?>
            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-12">
                <input class="single-input" type="text" name="username_member">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-12">
                <input class="single-input" type="email" name="email_member">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-12">
                <input class="single-input" type="password" name="password_member">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Full Name</label>
              <div class="col-sm-12">
                <input class="single-input" type="text" name="nama_member">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">About You</label>
              <div class="col-sm-12">
                <textarea name="keterangan_member" class="single-input"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Profile Picture</label>
              <div class="col-sm-12">
                <input class="" type="file" name="foto_member">
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