<?php
/*
Template Name: Page Participant Template
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
	<section class="participant-section">
		<div class="container">
			<div class="participant__max-img-section-wrapper">
						<?php if ( have_posts() ) : query_posts('cat=12');
						while (have_posts()) : the_post(); ?>
				<div class="participant__max-img-wrapper">
					<a href="#" class="participant__img-popup_link popup-content">
						<?php the_post_thumbnail(); ?>
					</a>
					<?php echo get_post_meta($post->ID, caption_title, true); ?>
				 <div class="hidden">
							<div class="modal-box__content img-zoom">
								<img class="popup-img" src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
								<div class="modal-box__description">
									<h2 class="modal-box__title"><?php the_title(); ?></h2>
									<?php the_content(); ?>
								</div>
							</div>
					</div>
				</div>
						<? endwhile; endif; wp_reset_query(); ?>

			</div>
			<div class="participant__less-img-section-wrapper">
						<?php if ( have_posts() ) : query_posts('cat=13');
						while (have_posts()) : the_post(); ?>
						<div class="participant__less-img-wrapper">
							<a href="#" class="participant__less-img-popup_link popup-content">
								<?php the_post_thumbnail(); ?>
							</a>
							<?php echo get_post_meta($post->ID, caption_title, true); ?>
							<div class="hidden">
								<div class="modal-box__content img-zoom">
									<img class="popup-img" src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
									<div class="modal-box__description">
										<h2 class="modal-box__title"><?php the_title(); ?></h2>
										<?php the_content(); ?>
									</div>
								</div>
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