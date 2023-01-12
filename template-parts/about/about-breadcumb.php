<?php 
  $options = get_option( 'novena_options' );
  $about_breadcumb_subtitle = $options['breadcumb_subtitle'];
  $about_breadcumb_title = $options['breadcumb_title'];
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <?php 
            if($about_breadcumb_subtitle) {
              ?>
                <span class="text-white"><?php echo $about_breadcumb_subtitle;?></span>
              <?php 
            }
            if($about_breadcumb_title) {
              ?>
                <h1 class="text-capitalize mb-5 text-lg"><?php echo $about_breadcumb_title;?></h1>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>