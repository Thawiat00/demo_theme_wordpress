<?php 
/**  
*Template Name: homepage 
*/ 
?>

<?php get_header(); ?>
	<?php get_template_part('views/slider'); ?>
	<!-- feature-->
	<section class="feature-block">
				<div class="container">

				<h3>Enjoy Summer Set</h3>
				<div class="row">
					<!--feature left -->
					<div class="col-6">
						<a href="#" class="large-image">
							<img src="<?php echo get_template_directory_uri() ?>/img/gridimage1_large.png" alt="feature_largepic1">
						</a>
					</div>
					<!--feature right -->
					<div class="col-6">
						<div class="row">

							<!--small feature -->
						<div class="col-6" >
							<a href="#" class="small-image">
							<img src="<?php echo get_template_directory_uri() ?>/img/gridimage2_1small.jpg" alt="feature_smallpic2_1">
							</a>
						</div>
								<!--small feature -->
						<div class="col-6" >
							<a href="#" class="small-image">
							<img src="<?php echo get_template_directory_uri() ?>/img/gridimage3_small.jpg" alt="feature_smallpic3">
							</a>
						</div>
								<!--small feature -->
						<div class="col-6" >
							<a href="#" class="small-image">
							<img src="<?php echo get_template_directory_uri() ?>/img/gridimage4_small.jpg" alt="feature_smallpic4">
							</a>
						</div>
								<!--small feature -->
						<div class="col-6" >
							<a href="#" class="small-image">
							<img src="<?php echo get_template_directory_uri() ?>/img/gridimage5_small.jpg" alt="feature_smallpic5">
							</a>
						</div>

						</div>
					</div>
				</div>
				<div class="freature-banner">
				<a href="">
				<img src="<?php echo get_template_directory_uri() ?>/img/footer-banner.jpg" alt="feature_banner">
				</a>
				</div>

				</div>
				
	</section>
<?php get_footer(); ?>