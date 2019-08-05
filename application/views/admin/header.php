<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url();?>assets/slick/slick/slick-theme.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/range.css">
  
  <link href="<?php echo base_url();?>assets/fa/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/css/datatables.min.css"/> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fileuploader/font/font-fileuploader.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fileuploader/jquery.fileuploader.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fileuploader/jquery.fileuploader-theme-thumbnails.css"> 
  <script src="<?php echo base_url();?>assets/user/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/fileuploader/jquery.fileuploader.min.js"></script>

  


  <title></title>
</head>
<body>
	<div id="wrapper">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('administrator/Home'); ?>">SISTEM INFORMASI KOPI</a>
      </div>
    </nav>
    <nav class="navbar-side">
      <div class="user">
        <img class="img-circle profile_img" src="<?php echo base_url(); ?>/assets/img/user_ico.jpg">
        <h3>Welcome, Admin</h3>
      </div>
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          
          <li><a href="<?php echo base_url("administrator/Home") ?>"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="<?php echo base_url("administrator/Roaster") ?>"><i class="fas fa-users"></i> Roaster</a></li>
          <li><a href="<?php echo base_url("administrator/Member") ?>"><i class="fas fa-users"></i> Member</a></li>
          <li><a href="<?php echo base_url("administrator/Coffee") ?>"><i class="fas fa-users"></i> Coffee</a></li>
          <li><a href="<?php echo base_url("administrator/Home/logout") ?>" onclick="javascript: return confirm('Are you sure to logout ?')"><i class="fas fa-sign-out-alt" ></i> Logout</a></li>

        </ul>
      </div>
    </nav>
    