<?php 

	$options = get_option( 'novena_options' );
	$appoinment_img = $options['appoinment_img'];
	$appoinment_phone = $options['appoinment_phone'];
	$appoinment_title = $options['appoinment_title'];
	$appoinment_subtitle = $options['appoinment_subtitle'];
?>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="<?php echo $appoinment_img['url'];?>" alt="<?php echo $appoinment_img['alt'];?>" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $appoinment_phone;?></h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?php echo $appoinment_title;?></h2>
					<p class="mb-4"><?php echo $appoinment_subtitle;?></p>
					<?php echo do_shortcode('[contact-form-7 id="50" title="Appoinment"]');?>   
            	</div>
			</div>
		</div>
	</div>
</section>