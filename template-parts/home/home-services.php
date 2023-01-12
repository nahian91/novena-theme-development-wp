<?php 
	$options = get_option( 'novena_options' );
	$service_title = $options['service_title'];
	$service_subtitle = $options['service_subtitle'];
?>

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2><?php echo $service_title;?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $service_subtitle;?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
				$services = $options['services'];
				foreach($services as $service) {
					$service_icon = $service['service_icon'];
					$service_title = $service['service_title'];
					$service_desc = $service['service_desc'];
					?>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="service-item mb-4">
								<div class="icon d-flex align-items-center">
									<i class="<?php echo $service_icon?> text-lg"></i>
									<h4 class="mt-3 mb-3"><?php echo $service_title;?></h4>
								</div>

								<div class="content">
									<p class="mb-4"><?php echo $service_desc;?></p>
								</div>
							</div>
						</div>
					<?php 
				}
			?>
		</div>
	</div>
</section>