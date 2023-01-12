<?php
	$options = get_option( 'novena_options' );
	$about_test_box = $options['about_test_box'];
	$about_test_title = $about_test_box['about_test_title'];
?>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4"><?php echo $about_test_title;?></h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				
				<?php 
					foreach($about_test_box as $test) {
						foreach($test as $key => $single) {
							?>
								

				<h6>gfgfgfg</h6>
							<?php 
						}
					}
				?>
			</div>
		</div>
	</div>
</section>