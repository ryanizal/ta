<script type="text/javascript">
	$(document).ready(function(){
		$('.fotocls').slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
		});
	});
</script><!-- <script src="<?php echo base_url();?>assets/js/jquery.js"></script> -->
<script src="<?php echo base_url();?>assets/js/range.js"></script>
<script src="<?php echo base_url();?>assets/slick/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/js.js"></script>



<!-- <script src="<?php echo base_url();?>assets/datatables/js/datatables.js"></script> -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

<script>
	$(document).ready(function(){
		$('#dtab').DataTable(); 
	});  
</script>

</body>
</html>