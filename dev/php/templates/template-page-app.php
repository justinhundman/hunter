<?php
/*
Template Name: Page-app
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridContainer wrapper-content u-gridRow">
			<div class="u-gridRow u-gridCol8">
				<div class=" u-gridCol12">
					<h2><?php the_title(); ?></h2>
					<div class="wrapper-content-left u-gridRow">
						<p class=" u-gridCol12">
							Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.
							Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 
							<a href="https://play.google.com/store/apps/details?id=com.wAdministratiekantoorHunter">Download de app hier</a>
						</p>
						 <a class="u-gridCol6 text-align-center" href"https://play.google.com/store/apps/details?id=com.wAdministratiekantoorHunter">
						 	<img class="app-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
						 	<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg"/>

						 </a>
						 <a class="u-gridCol6" href"https://play.google.com/store/apps/details?id=com.wAdministratiekantoorHunter"> <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/Unitag_QRCode_Hunter.png"/></a>
					</div>	
					<div class="content-border"></div>
					<div class="button-wrapper"></div>
				</div>
			</div>
			<div class="iphoneback u-gridCol4 "> 
				<img class="iphone-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone6plus_gold_portrait1.png"/>
			</div>
		</div> 	
	<?php endwhile; endif; ?> 
	

<?php get_footer(); ?>
