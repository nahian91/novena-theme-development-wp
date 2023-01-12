<?php 
	$options = get_option( 'novena_options' );
	$bannar_subtitle = $options['bannar_subtitle'];
	$bannar_title = $options['bannar_title'];
	$bannar_desc = $options['bannar_desc'];
	$bannar_btn_url = $options['bannar_btn']['url'];
	$bannar_btn_text = $options['bannar_btn']['text'];
?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<?php
						if($bannar_subtitle) {
							?>
								<span class="text-uppercase text-sm letter-spacing "><?php echo $bannar_subtitle;?></span>
							<?php
						}
					?>

					<?php
						if($bannar_title) {
							?>
								<h1 class="mb-3 mt-3"><?php echo $bannar_title;?></h1>
							<?php
						}
					?>

					<?php
						if($bannar_desc) {
							?>
								<p class="mb-4 pr-5"><?php echo $bannar_desc;?></p>
							<?php
						}
					?>

					<?php 
						if($bannar_btn_url) {
							?>
							<div class="btn-container ">
								<a href="<?php echo $bannar_btn_url;?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?php echo $bannar_btn_text;?> <i class="icofont-simple-right ml-2  "></i></a>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>