<div class="container">
  <!-- <section class="sample-text-area"> -->
    <div class="row single-menu">
      <div class="col-lg-11 col-md-11">
        <h3 class="mb-30 text-center">Edit Profile Roastery</h3>
        <!-- <a href="<?php echo base_url('Welcome/signup_roaster'); ?>"><p class="pull-right">I am a Roaster</p></a> -->
        <br>
        <form method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-12">
              <input class="single-input" type="text" name="username_roaster" value="<?php echo $username_roaster; ?>">
            </div> 
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-12">
              <input class="single-input" type="password" name="password_roaster" value="<?php echo $password_roaster; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-12">
              <input class="single-input" type="text" name="nama_roaster" value="<?php echo $nama_roaster; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">About Your Rosatery</label>
            <div class="col-sm-12">
              <textarea class="single-input" name="deskripsi_roaster" ><?php echo $deskripsi_roaster; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Your Address</label>
            <div class="col-sm-12">
              <input class="single-input" type="text" name="alamat_roaster" value="<?php echo $alamat_roaster; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-12">
              <input class="single-input" type="text" name="telp_roaster" value="<?php echo $telp_roaster; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Profile Picture</label>
            <div class="col-sm-12">
              <img src="<?php echo base_url('assets/img/roaster/'.$foto_roaster); ?>" class="img-responsive" width="100" height="100">
              <input class="" type="file" name="foto_roaster">
            </div>
          </div>
          <br>
          <div class="col-lg-3 col-md-3 pull-right">
              <script>
              function goBack() 
              {
                window.history.back()
              }
              
            </script>
            <button onclick="goBack()" class="genric-btn danger circle">Cancel</button>
            <button onclick="javascript: return confirm('Are you sure ?')" type="submit" class="genric-btn success circle">Update</button>
          </div>
        </div>
      </div>
      <!-- </section> -->
    </div>
  </div>
</div>