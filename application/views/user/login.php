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
            <a href="<?php echo base_url('Welcome') ?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">

              <li class="menu-has-children"><a href="<?php echo base_url('Welcome/signup'); ?>">Signup</a>

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

      <!-- <section class="sample-text-area"> -->
        <section class="form-group mt-80" >

          <div class="container">
            <div style="display:flex;  align-items: center; justify-content: center;">
              <!-- <div class="row"> -->


                <div class="col-lg-5 single-menu">
                  <h3 class="mb-30">Login as Member</h3>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <a href="<?php echo base_url('Welcome/login_roaster'); ?>"><p class="pull-right genric-btn info small circle arrow">I'm a Roaster</p></a>
                  <form method="post">
                    <div class="form-group">
                      <label class="col-sm-1 ">Username</label>
                      <div class="col-sm-11">
                        <input type="text" name="username_member" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-1 control-label">Password</label>
                    </div>
                    <div class="col-sm-11">
                      <input type="password" name="password_member" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required class="form-control">
                    </div>
                    <br>
                    <div class="col-lg-3 col-md-3 pull-right">
                      <button type="submit" class="genric-btn info circle arrow">Login</button>
                    </div>
                  </div>
                  <!-- </div> -->


                </div>
              </div>
            </div>
          </section>
          <!--   </section> -->



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