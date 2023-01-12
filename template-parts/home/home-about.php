<?php 
	$options = get_option( 'novena_options' );
	$about_img1 = $options['about_img1'];
	$about_img2 = $options['about_img2'];
	$about_img3 = $options['about_img3'];
	$about_title = $options['about_title'];
	$about_desc = $options['about_desc'];
	$about_btn = $options['about_btn'];
	$about_switch = $options['about_switch'];
?>

<?php
	if($about_switch == true) {
		?>
		<section class="section about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 col-sm-6">
						<div class="about-img">
							<img src="<?php echo $about_img1['url'];?>" alt="<?php echo $about_img1['alt'];?>" class="img-fluid">
							<img src="<?php echo $about_img2['url'];?>" alt="<?php echo $about_img2['alt'];?>" class="img-fluid mt-4">
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="about-img mt-4 mt-lg-0">
							<img src="<?php echo $about_img3['url'];?>" alt="<?php echo $about_img3['alt'];?>" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="about-content pl-4 mt-4 mt-lg-0">
							<h2 class="title-color"><?php echo $about_title;?></h2>
							<p class="mt-4 mb-5"><?php echo $about_desc;?></p>

							<?php
								if($about_btn['url']) {
									?>
										<a href="<?php echo $about_btn['url'];?>" class="btn btn-main-2 btn-round-full btn-icon"><?php echo $about_btn['text'];?><i class="icofont-simple-right ml-3"></i></a>
									<?php 
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php 
	}
?>

