	<footer class="footer">
		<div class="container">
			<h1 class="section-title"><?php echo get_cat_name(7); ?></h1>
			<div class="footer__content-wrapper">
				<?php if ( have_posts() ) : query_posts('p=85');
				while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
				<div class="footer__social-info">
					<?php if ( have_posts() ) : query_posts('cat=15');
					while (have_posts()) : the_post(); ?>
								
					<a class="icon <?php echo get_post_meta($post->ID, icomoon, true); ?>" title="<?php the_title(); ?>" href="<?php echo get_post_meta($post->ID, social_url, true); ?>">	
					</a>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
		<div class="footer__copyright">
			<div class="container">
				<div class="footer__copyright-content">
					&copy <?php echo date("Y"); ?> Театральний фестиваль "Кіт Гаватовича".
				</div>
			</div>
		</div>

	</footer>


	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/parallax.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    <?php wp_footer(); ?>

</body>
</html>