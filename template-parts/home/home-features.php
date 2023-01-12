<?php 
	$options = get_option( 'novena_options' );
	$feature_switch = $options['feature_switch'];
?>

<?php 
	if($feature_switch == true) {
		?>
		<section class="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature-block d-lg-flex">
							<div class="feature-item mb-5 mb-lg-0">
								<div class="feature-icon mb-4">
									<i class="<?php echo $options['feature1_icon'];?>"></i>
								</div>
								<span><?php echo $options['feature1_subtitle'];?></span>
								<h4 class="mb-3"><?php echo $options['feature1_title'];?></h4>
								<p class="mb-4"><?php echo $options['feature1_desc'];?></p>
								<a href="<?php echo $options['feature1_btn']['url'];?>" class="btn btn-main btn-round-full"><?php echo $options['feature1_btn']['text'];?></a>
							</div>
						
							<div class="feature-item mb-5 mb-lg-0">
								<div class="feature-icon mb-4">
									<i class="<?php echo $options['feature2_icon'];?>"></i>
								</div>
								<span><?php echo $options['feature2_subtitle'];?></span>
								<h4 class="mb-3"><?php echo $options['feature2_title'];?></h4>
								<ul class="w-hours list-unstyled">
									<?php
										$feature_hours = $options['feature2_hours'];
										foreach($feature_hours as $feature) {
										?>
											<li class="d-flex justify-content-between"><?php echo $feature['feature2_hours_day'];?> <span><?php echo $feature['feature2_hours_time'];?></span></li>
										<?php
									}
									?>
								</ul>
							</div>
						
							<div class="feature-item mb-5 mb-lg-0">
								<div class="feature-icon mb-4">
									<i class="<?php echo $options['feature3_icon'];?>"></i>
								</div>
								<span><?php echo $options['feature3_subtitle'];?></span>
								<h4 class="mb-3"><?php echo $options['feature3_title'];?></h4>
								<p><?php echo $options['feature3_desc'];?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
?>
