<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/plugins/iCheck/square/blue.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>SIGNUP AS A MEMBER</b></a>
    </div>

    <div class="register-box-body">
     <a href="<?php echo base_url('welcome/signup_roaster'); ?>"> <p class="login-box-msg pull-right">Signup as Roaster</p></a>
     <br>
     <br>

     <form action="../../index.html" method="post">

      <div class="form-group has-feedback">
        <label class="control-label">Your Name</label>
        <input type="text" class="form-control" placeholder="Full name..." name="nama_member">
      </div>

      <div class="form-group has-feedback">
        <label class="control-label">Choose a Username</label>
        <input type="text" class="form-control" placeholder="Username..." name="username_member">
      </div>

      <div class="form-group has-feedback">
        <label class="control-label">Password</label>
        <input type="password" class="form-control" placeholder="Password..." name="password_member">
      </div>

      <div class="form-group has-feedback">
        <label class="control-label">Description</label>
        <textarea placeholder="Describe About Yourself..." class="form-control" name="keterangan member" ></textarea> 
      </div>

      <div class="form-group has-feedback">
        <label class="control-label">Profile Photo</label>
        <input type="file" class="form-control"  name="foto_member">
      </div>

      <div class="row">

        <div class="col-xs-2 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign me up!</button>
        </div>
      </div>
    </form>



    <a href="<?php echo base_url('Welcome/login'); ?>" class="text-center">I already have a membership</a>
  </div>
</div>

<script src="<?php echo base_url();?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
