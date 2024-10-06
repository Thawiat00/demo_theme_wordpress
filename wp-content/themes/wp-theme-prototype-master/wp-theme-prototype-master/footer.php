			<!-- footer-->
			<footer class="footer">
				<div class="sitemap">	
					<div class="container">

						<div class="row">
						<!--footer 1 -->
						<div class="col-3">
							<h4>
							ABOUT STARBUGS
							</h4>

							<?php wp_nav_menu( array(
							'theme_location' => 'about' ,//
							'menu_class' => 'sitemap-link',
							'container' => false
							))?>

							<!-- 
							<ul class="sitemap-link">
								<li><a href="#">Our Heritage</a></li>
								<li><a href="#">Our Company</a></li>
								<li><a href="#">Responsibility</a></li>
								<li><a href="#">Career Center</a></li>
							</ul>
							-->
						</div>
						<!--footer 2 -->
						<div class="col-3">
							<h4>
							COFFEE & TEA AT HOME						
							</h4>

							<?php wp_nav_menu( array(
							'theme_location' => 'story' ,//
							'menu_class' => 'sitemap-link',
							'container' => false

							) ) ?>


							<!-- 
							<ul class="sitemap-link">
								<li>Coffee Story</li>
								<li>Coffee & Tea at HOME</li>
								<li>How to Brew</li>
								<li>Coffee Workshop</li>
							</ul>
							-->
						</div>
						<!--footer 3 -->
						<div class="col-3">

							<?php wp_nav_menu( array(
							'theme_location' => 'sitemap' ,//
							'menu_class' => 'sitemap-link',
							'container' => false

							) ) ?>


							<!-- 
							<ul class="sitemap-link">
								<li>STARBUCKS REWARDS</li>
								<li>Membership</li>
								<li>More information</li>
								<li>ADDITIONAL INFORMATION</li>
								<li>Help Center</li>
							</ul>
							-->
						</div>
						<!--footer 4 -->
						<div class="col-3">
							<ul class="footer-social-link">
								<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook_1.png" alt="facebook">
								</a>
								</li>
								<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter_1.png" alt="twitter">
								</a>
								</li>
								<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/img/icon-line_1.png" alt="line">
								</a>
								</li>
							</ul>
							<p>This is a demo website that on workshop</p>
						</div>
						</div>

					</div>
				
				</div>
				<div class="copyright">

					<div class="container">

					<div class="row">
						

						<!--copyright 1 -->
						<div class="col-6">
							
							<?php wp_nav_menu( array(
							'theme_location' => 'footer' ,//
							'menu_class' => 'copyright-link',
							'container' => false

							) ) ?>

							<!-- 
							<ul class="copyright-link">
								<li><a href="#">Homepage</a></li>
								<li><a href="#">Menus</a></li>
								<li><a href="#">Promotions</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
							-->
						</div>
						<!--copyright 2 -->
						<div class="col-6">
							<p class="copyright-text">Test workshop | custom theme</p>
						</div>

					</div>

					</div>

					
				</div>
			</footer>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>