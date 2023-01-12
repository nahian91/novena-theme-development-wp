<?php
	$options = get_option( 'novena_options' );
	$about_features_box = $options['about_features_box'];

?>


<section class="fetaure-page ">
	<div class="container">
		<div class="row">

			<?php 
			
				foreach ($about_features_box as $features) {
					foreach($features as $key => $single_feature) {
						$about_features_img_url = $single_feature['about_features_img']['url'];
						$about_features_img_alt = $single_feature['about_features_img']['alt'];
						$about_features_title = $single_feature['about_features_title'];
						$about_features_desc = $single_feature['about_features_desc'];
						?>
							<div class="col-lg-3 col-md-6">
								<div class="about-block-item mb-5 mb-lg-0">
									<img src="<?php echo $about_features_img_url;?>" alt="<?php echo $about_features_img_alt;?>" class="img-fluid w-100">
									<h4 class="mt-3"><?php echo $about_features_title;?></h4>
									<p><?php echo $about_features_desc;?></p>
								</div>
							</div>
						<?php 
					}
				}
			?>
		</div>
	</div>
</section>