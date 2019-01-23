<div class="container">
	<h3 class="text-heading">
		Welcome, <?php echo $nama_member; ?>		
	</h3>
	
	<p><b><?php echo date("D"); ?></b> <?php echo date("Y M d"); ?></p>
	
	

	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Newest Coffee That Just In!</h1>
						<p>Freshly roasted coffee beans from local Roastery.</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<?php foreach ($new as $key => $value): ?>

					<div class="col-lg-6 col-md-6 single-blog">
						<a href="<?php echo base_url('Member/detail_kopi/'.$value['id_kopi']);?>">
							<img class="img-fluid" src="<?php echo base_url('assets/img/coffee/'.$value['foto_1']);?>" alt="">
							<ul class="post-tags">
								<li><a href="#"><?php echo $value['profile_roast']; ?></a></li>
								<!-- <li><a href="#">Atribut B</a></li> -->
							</ul>
							<a href="<?php echo base_url('Member/detail_kopi/'.$value['id_kopi']);?>">
								<h4>
									<?php echo $value['nama_kopi']; ?>

								</h4>
							</a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<a href=""><p class="post-date">Roasted by <?php echo $value['id_roaster'] ?></p></a>
						</a>
					</div>
				<?php endforeach; ?>

				</div>
			</div>	
		</section>


		<div class="section-top-border">
			<h3 class="mb-30">You May Like Thesee...</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Kopi 01</h4>
						<a href=""><img src="<?php echo base_url();?>assets/user/img/b1.jpg" class="img-responsive"></a>
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Kopi 02</h4>
						<a href=""><img src="<?php echo base_url();?>assets/user/img/b1.jpg" class="img-responsive"></a>
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Kopi 03</h4>
						<a href=""><img src="<?php echo base_url();?>assets/user/img/b1.jpg" class="img-responsive"></a>
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Kopi 04</h4>
						<a href=""><img src="<?php echo base_url();?>assets/user/img/b1.jpg" class="img-responsive"></a>
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Kopi 05</h4>
						<a href=""><img src="<?php echo base_url();?>assets/user/img/b1.jpg" class="img-responsive"></a>
						<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
					</div>
				</div>
			</div>
		</div>
	</div>