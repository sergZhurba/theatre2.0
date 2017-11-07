<?php
/*
Template Name: Page Charity Template
*/
?>
<?php get_header(); ?>
	<section class="banner-section" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/lesya-theatre.png">	
		<div class="banner__info-wrapper">
			<div class="banner__logo-wrapper">
				<a class="banner__logo" href="<?php echo get_home_url(); ?>"></a>
			</div>
			<h6 class="banner__description"><?php echo get_bloginfo('name'); ?></h6>
			<h1 class="banner__date-title"><?php echo get_bloginfo('description'); ?></h1>
		</div>	
	</section>
	<div class="charity-banner__info-wrapper">
			<div class="container">
				<div class="charity-banner__content-wrapper">
					<div class="charity-banner__content-item">
						<h1 class="section-title charity-banner__content-title"><?php echo get_cat_name(14); ?></h1>
					</div>
					<div class="charity-banner__content-item">
						<?php if ( have_posts() ) : query_posts('p=188');
						while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>

				</div>
			</div>
		</div>
	<section class="charity-section">
			<div class="container">
			<?php echo category_description(6); ?>
				<div class="charity__items-wrapper">
						<?php if ( have_posts() ) : query_posts('cat=6');
						while (have_posts()) : the_post(); ?>
					<div class="charity__item-wrapper">
						<div class="charity__item-img-wrapper">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="charity__content-wrapper">
							<div class="charity__title-value-wrapper">
								<p class="charity__title"><?php the_title(); ?></p>
								<?php echo get_post_meta($post->ID, item_value, true); ?>
							</div>
							<div class="charity_progress-bar-wrapper">
								<div class="charity_progress-bar"></div>
							</div>
							<div class="charity__сommon-value-wrapper">
								<?php echo get_post_meta($post->ID, common_value, true); ?>
								<?php echo get_post_meta($post->ID, common_value_description, true); ?>
							</div>
							<div class="charity__deposit-wrapper">
								<?php echo get_post_meta($post->ID, deposit_value, true); ?>
								<?php echo get_post_meta($post->ID, deposit_value_description, true); ?>
							</div>
							<div class="charity__mount-wrapper">
								<?php echo get_post_meta($post->ID, mount_value, true); ?>
								<?php echo get_post_meta($post->ID, mount_value_description, true); ?>
							</div>
							<button class="charity__contribution" type="button">Фондувати</button>
						</div>
					</div>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
	</section>
	<section class="charity-wrapper" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/banner.png">
		<div class="charity__content">
			<h1 class="charity__title"><a class="charity__title_link" href="#"><?php echo get_cat_name(6); ?></a></h1>
		</div>
	</section>
<?php get_footer(); ?>