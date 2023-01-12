<?php 
	$options = get_option( 'novena_options' );
	$testimonial_title = $options['testimonial_title'];
	$testimonial_subtitle = $options['testimonial_subtitle'];
?>

<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $testimonial_title;?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $testimonial_subtitle;?></p>
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
						$testimonial_img = $testimonial['testimonial_img'];
						$testimonial_name = $testimonial['testimonial_name'];
						$testimonial_desg = $testimonial['testimonial_desg'];
						$testimonial_desc = $testimonial['testimonial_desc'];
					?>
					<div class="testimonial-block style-2  gray-bg">
						<i class="icofont-quote-right"></i>

						<div class="testimonial-thumb">
							<img src="<?php echo $testimonial_img['url'];?>" alt="<?php echo $testimonial_img['alt'];?>" class="img-fluid">
						</div>

						<div class="client-info ">
							<h4><?php echo $testimonial_name;?></h4>
							<span><?php echo $testimonial_desg;?></span>
							<p>
								<?php echo $testimonial_desc;?>
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