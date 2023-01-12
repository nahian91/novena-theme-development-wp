<?php 
  $options = get_option( 'novena_options' );
  $about_title = $options['about_title'];
  $about_desc = $options['about_desc'];
  $about_signature = $options['about_signature'];
print_r($about_signature);
?>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo $about_title;?></h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo $about_desc;?></p>
				<img src="<?php echo $about_signature['url'];?>" alt="<?php echo $about_signature['alt'];?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>