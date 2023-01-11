<?php 

/*
Template Name: Home Template
*/

get_header();?>

<?php $options = get_option( 'novena_options' ); ?>
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "><?php echo $options['bannar_subtitle'];?></span>
					<h1 class="mb-3 mt-3"><?php echo $options['bannar_title'];?></h1>
					<p class="mb-4 pr-5"><?php echo $options['bannar_desc'];?></p>
					<div class="btn-container ">
						<a href="<?php echo $options['bannar_btn']['url'];?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?php echo $options['bannar_btn']['text'];?> <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="<?php echo $options['about_img1']['url'];?>" alt="<?php echo $options['about_img1']['alt'];?>" class="img-fluid">
					<img src="<?php echo $options['about_img2']['url'];?>" alt="<?php echo $options['about_img1']['alt'];?>" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="<?php echo $options['about_img3']['url'];?>" alt="<?php echo $options['about_img1']['alt'];?>" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color"><?php echo $options['about_title'];?></h2>
					<p class="mt-4 mb-5"><?php echo $options['about_desc'];?></p>

					<a href="<?php echo $options['about_btn']['url'];?>" class="btn btn-main-2 btn-round-full btn-icon"><?php echo $options['about_btn']['text'];?><i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative" style="background-image:url('<?php echo $options['counter_img']['background-image']['url'];?>')">
			<div class="row">
				<?php
				$counters = $options['counters'];
				foreach($counters as $counter) {
					?>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="<?php echo $counter['counter_icon'];?>"></i>
							<span class="h3 counter" data-count="<?php echo $counter['counter_number'];?>">0</span><?php echo $counter['counter_prefix'];?>
							<p><?php echo $counter['counter_title'];?></p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2><?php echo $options['service_title'];?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['service_subtitle'];?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
				$services = $options['services'];
				foreach($services as $service) {
					?>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="service-item mb-4">
								<div class="icon d-flex align-items-center">
									<i class="<?php echo $service['service_icon'];?> text-lg"></i>
									<h4 class="mt-3 mb-3"><?php echo $service['service_title'];?></h4>
								</div>

								<div class="content">
									<p class="mb-4"><?php echo $service['service_desc'];?></p>
								</div>
							</div>
						</div>
					<?php 
				}
			?>
		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="<?php echo $options['appoinment_img']['url'];?>" alt="<?php echo $options['appoinment_img']['alt'];?>" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $options['appoinment_phone'];?></h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?php echo $options['appoinment_title'];?></h2>
					<p class="mb-4"><?php echo $options['appoinment_subtitle'];?></p>
					<?php echo do_shortcode('[contact-form-7 id="50" title="Appoinment"]');?>   
            	</div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $options['testimonial_title'];?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['testimonial_subtitle'];?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">

				<?php
					$testimonials = $options['testimonials'];
					foreach($testimonials as $testimonial) {
					?>
					<div class="testimonial-block style-2  gray-bg">
						<i class="icofont-quote-right"></i>

						<div class="testimonial-thumb">
							<img src="<?php echo $testimonial['testimonial_img']['url'];?>" alt="<?php echo $testimonial['testimonial_img']['alt'];?>" class="img-fluid">
						</div>

						<div class="client-info ">
							<h4><?php echo $testimonial['testimonial_name'];?></h4>
							<span><?php echo $testimonial['testimonial_desg'];?></span>
							<p>
								<?php echo $testimonial['testimonial_desc'];?>
							</p>
						</div>
					</div>
					<?php 
				}
 				?>
			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $options['client_title'];?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['client_subtitle'];?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<?php
			$clients = $options['clients'];
			foreach($clients as $client) {
				?>
					<div class="col-lg-2">
						<div class="client-thumb">
							<img src="<?php echo $client['client_logo']['url'];?>" alt="<?php echo $client['client_logo']['alt'];?>" class="img-fluid">
						</div>
					</div>

				<?php 
			}
			?>
		</div>
	</div>
</section>
<?php get_footer();?>