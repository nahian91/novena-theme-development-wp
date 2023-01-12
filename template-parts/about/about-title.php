<?php 
  $options = get_option( 'novena_options' );
  $about_title = $options['about_title'];
  $about_heading = $about_title['about_heading'];
  $about_desc = $about_title['about_desc'];
  $about_signature = $about_title['about_signature'];
?>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo $about_heading;?></h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo $about_desc;?></p>
				<img src="<?php echo $about_signature['url'];?>" alt="<?php echo $about_signature['alt'];?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>