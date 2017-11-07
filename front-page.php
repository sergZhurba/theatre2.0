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
	<section class="about-fest-section">
		<div class="container">
			<h1 class="section-title"><?php echo get_cat_name(2); ?></h1>
			<div class="about-fest__content-wrapper">
				<?php if ( have_posts() ) : query_posts('p=50');
				while (have_posts()) : the_post(); ?>
				<div class="about-fest__content">
					<h3 class="about-fest__title"><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
					<?php if ( have_posts() ) : query_posts('p=52');
					while (have_posts()) : the_post(); ?>
				<div class="about-fest__content">
					<h3 class="about-fest__title"><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
					
			</div>
		</div>
	</section>
	<section class="map-section">
		<div class="container">
			<h1 class="section-title"><?php echo get_cat_name(8); ?></h1>
		</div>
		<div class="map-wrapper">
			<div class="container">
				<?php if ( have_posts() ) : query_posts('p=58');
				while (have_posts()) : the_post(); ?>
				<img class="map" src=<?php the_post_thumbnail(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="history-section">
		<div class="container">
				<?php if ( have_posts() ) : query_posts('p=61');
				while (have_posts()) : the_post(); ?>
			<h1 class="section-title"><?php echo get_cat_name(3); ?></h1>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
		</div>
		<div class="history__img-section-wrapper">
					<?php if ( have_posts() ) : query_posts('cat=17');
					while (have_posts()) : the_post(); ?>
			<div class="history__img-wrapper">
				<a href="#" class="history__img-popup_link popup-gallary">
					<?php the_post_thumbnail(); ?>
				</a>
				<div class="hidden">
						<div class="modal-box__content img-zoom">
							<img class="popup-img" src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
						</div>
				</div>
			</div>
					<? endwhile; endif; wp_reset_query(); ?>

		</div>
	</section>
	<section class="fest-creators">
		<div class="container">
			<h1 class="section-title"><?php echo get_cat_name(4); ?></h1>
		</div>
		<div class="creators__background">
			<div class="container">
				<div class="creators__wrap">
					<div class="creators__info">
					<?php if ( have_posts() ) : query_posts('p=69');
					while (have_posts()) : the_post(); ?>
						<h3 class="creators__content-title"><?php the_title(); ?></h3>
						<?php the_content(); ?>
						<? endwhile; endif; wp_reset_query(); ?>
						<div class="creators__social">
							<div class="creators__logo-wrapper">
								<a class="creators__logo" href="#"></a>
							</div>
							<div class="creators__social-icon">
					
								<?php if ( have_posts() ) : query_posts('cat=9');
								while (have_posts()) : the_post(); ?>
								
								<a class="icon <?php echo get_post_meta($post->ID, icomoon, true); ?>" title="<?php the_title(); ?>" href="<?php echo get_post_meta($post->ID, social_url_sklad, true); ?>">	
								</a>
								<? endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
					<div class="vertical-line"></div>
					<div class="creators__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/rectanlge-01.png">
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	<section class="feedback-section">
		<div class="container">
			<h1 class="section-title"><?php echo get_cat_name(5); ?></h1>
			<?php echo category_description(5); ?>
			<div class="feedback__items-wrapper">
					<?php if ( have_posts() ) : query_posts('cat=5');
					while (have_posts()) : the_post(); ?>
					<div class="feedback__item">
						<div class="feedback__img">
							<?php the_post_thumbnail(); ?>	
						</div>
						<div class="feedback__content-wrapper">
							<div class="feedback__quote-wrapper">
								<img class="feedback__brackets" src="<?php echo get_template_directory_uri(); ?>/img/brackets.png" width="40" height="40">
								<?php the_content(); ?>
							</div>
							<div class="feedback__author-wrapper">
							<h3 class="feedback__author-title"><?php the_title(); ?></h3>
							<?php echo get_post_meta($post->ID, author_description, true); ?>
						</div>
						</div>
						
					</div>
					<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="charity-wrapper" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/banner.png">
		<div class="charity__content">
			<h1 class="charity__title"><a class="charity__title_link" href="<?php echo get_page_link( 6 );?>"><?php echo get_cat_name(6); ?></a></h1>
		</div>
	</section>
<?php get_footer(); ?>