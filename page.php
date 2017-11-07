<?php
/*
Template Name: Page Template
*/
?>
<?php get_header(); ?>
	<section class="banner-section" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/banner.png">
		<div class="banner__info-wrapper">
			<div class="banner__logo-wrapper">
				<a class="banner__logo" href="<?php echo get_home_url(); ?>"></a>
			</div>
			<h6 class="banner__description"><?php echo get_bloginfo('name'); ?></h6>
			<h1 class="banner__date-title"><?php echo get_bloginfo('description'); ?></h1>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section class="charity-wrapper" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/banner.png">
		<div class="charity__content">
			<h1 class="charity__title"><a class="charity__title_link" href="#"><?php echo get_cat_name(6); ?></a></h1>
		</div>
	</section>
<?php get_footer(); ?>