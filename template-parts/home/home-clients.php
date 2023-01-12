<?php 
	$options = get_option( 'novena_options' );
	$client_title = $options['client_title'];
	$client_subtitle = $options['client_subtitle'];
	$clients = $options['clients'];
?>

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<?php 
						if($client_title) {
							?>
								<h2><?php echo $client_title;?></h2>
							<?php 
						}
					?>
					<div class="divider mx-auto my-4"></div>
					<?php 
						if($client_subtitle) {
							?>
								<p><?php echo $client_subtitle;?></p>
							<?php
						}
					?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<?php
				if($clients) {
					foreach($clients as $client) {
						$client_logo = $client['client_logo'];
						?>
							<div class="col-lg-2">
								<div class="client-thumb">
									<img src="<?php echo $client_logo['url'];?>" alt="<?php echo $client_logo['alt'];?>" class="img-fluid">
								</div>
							</div>
		
						<?php 
					}
				}			
			?>
		</div>
	</div>
</section>