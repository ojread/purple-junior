<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- template-home.php -->

	<div class="home-section home-section-1">
		<h1 class="text-center"> We Are a Digital
		Studio With Different Backgrounds But Only One Goal</h1>
		<div class="button-container">
			<button type="button" class="btn btn-default">Our Story</button>
		</div>
	</div>

	<div class="home-section home-section-2">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-4">
					<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img1.png">
					<h3>Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img2.png">
					<h3>Web Apps</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo get_template_directory_uri();?>/img/home-sect2-img3.png">
					<h3>Web Marketing</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="home-section home-section-3">
		<h2 class="text-center">Showcase</h2>
		<div>
			<?php echo do_shortcode('[ess_grid alias="showcase-grid"]'); ?>
		</div>
	</div>

	<div class="home-section home-section-4">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Web Marketing</h2>
				<span class="fa fa-heart text-center"></span>
				<img class='img-responsive imac' src="<?php echo get_template_directory_uri();?>/img/4-img1.png">
				<img class="hidden-xs hidden-sm dotted-img" src="<?php echo get_template_directory_uri();?>/img/4-dotted-line.png">
			</div>
			<div class='row'>
				<div class="digital-promo col-md-5 col-lg-4">
					<h3 class="small-caps">Digital Promotion</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
					</p>
				</div>
			</div>

			<div class="row">
				<div class='col-xs-offset-4 col-xs-4 visible-xs visible-sm text-center'>
					<img class='mobile-line' src="<?php echo get_template_directory_uri();?>/img/4-mobile-line.png" />
				</div>
				<div class="col-xs-4 col-sm-2">
					<img class="img-responsive bee-pic" src="<?php echo get_template_directory_uri();?>/img/4-img2.png">
				</div>
			</div>



			<div class="row">
				<div class='social-strategy col-md-5 col-lg-4'>
					<h3 class="small-caps">Social Media Strategy</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
					</p>
				</div>
			</div>

			<div class="row">
				<div class='col-xs-3 col-xs-offset-1'>
					<img class='frog img-responsive' src="<?php echo get_template_directory_uri();?>/img/4-img3.png">
				</div>
				<div class="col-xs-4 visible-xs visible-sm text-center">
					<img class='mobile-line' src="<?php echo get_template_directory_uri();?>/img/4-mobile-line.png" />
				</div>
				<div class="col-xs-3 col-sm-2">
					<img class='hidden-xs hidden-sm img-responsive keyboard' src="<?php echo get_template_directory_uri();?>/img/4-img4.png">
				</div>
			</div>

			<div class="row">
				<div class='col-md-5 col-lg-4 landing-pages'>
					<h3 class="small-caps">Landing Pages</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
					</p>
				</div>
			</div>

			<div class="row">
				<div class='visible-xs visible-sm text-center'>
					<img class='mobile-line' src="<?php echo get_template_directory_uri();?>/img/4-mobile-line.png" />
				</div>
			</div>

			<div class='row'>
				<div class="seo col-md-5 col-lg-4">
					<h3 class="small-caps">SEO &amp; Analytics Magement</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Curabitur volutpat orci eget dolor ultrices auctor. Morbi eget dolor nec erat rhoncus ornare eu vitae risus.
					</p>
					<img class='graph' src="<?php echo get_template_directory_uri();?>/img/graph.png" alt="" />
				</div>
			</div>
		</div>
	</div>

	<div class="home-section home-section-5 text-center">
		<div class="container">
			<div class="row">
				<h3>Our Clients</h3>
				<div class='col-sm-4'>
					<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/cisco-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/cisco-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/cisco-1.png'">
				</div>
				<div class='col-sm-4'>
					<img class='calix img-responsive' src="<?php echo get_template_directory_uri();?>/img/calix-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/calix-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/calix-1.png'">
				</div>
				<div class='col-sm-4'>
					<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/swarovski.png">
				</div>
				<div class='col-sm-4'>
					<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/silkstream-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/silkstream-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/silkstream-1.png'">
				</div>
				<div class='col-sm-4'>
					<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/theshipleopard-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/theshipleopard-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/theshipleopard-1.png'">
				</div>
				<div class='col-sm-4'>
					<img class='img-responsive' src="<?php echo get_template_directory_uri();?>/img/cadenza-1.png" onmouseover="this.src='<?php echo get_template_directory_uri();?>/img/cadenza-2.png'" onmouseout="this.src='<?php echo get_template_directory_uri();?>/img/cadenza-1.png'">
				</div>
			</div>
		</div>
	</div>

	<div class="home-section home-section-6">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Tell us how you feel today</h2>
				<div class='col-sm-10 col-sm-offset-2'>
					<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
				</div>
				<ul class='social-menu text-center'>
					<li>
						<a class="circle social-button facebook-color" href="http://www.google.com">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<li>
						<a class="circle social-button twitter-color" href="http://www.google.com">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li>
						<a class="circle social-button googleplus-color" href="http://www.google.com">
							<span class="fa fa-google-plus"></span>
						</a>
					</li>
					<li>
						<a class="circle social-button linkedin-color" href="http://www.google.com">
							<span class="fa fa-linkedin"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
