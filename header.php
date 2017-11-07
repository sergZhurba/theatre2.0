<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8" />
	<title>Кіт Гаватовича</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Muli&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

	<?php wp_head(); ?>

</head>
<body>

	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<header class="header">
		<div class="container">
			<div class="header__logo-menu-wrapper">
				<div class="header__logo-wrapper">
					<a class="header__logo" href="<?php echo get_home_url(); ?>"></a>
				</div>

					<?php wp_nav_menu(array(
						
						'theme_location' => 'primary',
						'items_wrap' => '<ul class="header__menu-wrap">%3$s</ul>',
	
						)); 
					?>
				<div class="header__btn-menu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
				</div>
				<nav class="header__hidden-menu">
					<div class="header__hidden-menu-items-wrapper">
						<div class="header__hidden-menu-logo-wrapper">
								<a class="header__hidden-menu-logo" href="#"></a>
						</div>
						<?php wp_nav_menu(array(
						
						'theme_location' => 'primary',
						'items_wrap' => '<ul class="header__hidden-menu-items">%3$s</ul>',
	
							)); 
						?>
						
						<div class="header__hidden-menu-social-wrapper">
									<?php if ( have_posts() ) : query_posts('cat=15');
									while (have_posts()) : the_post(); ?>
									
									<a class="icon header-menu-social-icon <?php echo get_post_meta($post->ID, icomoon, true); ?>" title="<?php the_title(); ?>" href="<?php echo get_post_meta($post->ID, social_url, true); ?>">	
									</a>
									<? endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
				</nav>
			</div>
		</div>
</header>
	<div class="popup__window">
		<div class="popup__container">
			<div class="popup__title-area">
				<div class="popup__inner-container">
                    <div class="popup__title-container">
					    <div class="popup__title">Сходова клітка</div>
					    <div class="popup__close-btn">
						    <span class="popup__close-line"></span>
						    <span class="popup__close-line"></span>
                    </div>
				</div>
				</div>
			</div>
            <div class="popup__content">
			    <div class="popup__input-section">
				    <div class="popup__inner-container">
                        <div class="popup__input-area">
                            <div class="popup__input_sum">
                                <label class="popup__input-label" for="sum">Сума внеску в грн.</label>
                                <br/>
                                <input class="popup__input" type="text" id="sum" required/>
                            </div>
                            <div class="popup__input_name">
                                <label class="popup__input-label" for="name">Ім'я</label>
                                <br/>
                                <input class="popup__input" type="text" id="name" required/>
                            </div>
                            <div class="popup__input_email">
                                <label class="popup__input-label" for="email">Електронна пошта</label>
                                <br/>
                                <input class="popup__input" type="email" id="email" required/>
                            </div>
                            <div class="popup__input_surname">
                                <label class="popup__input-label" for="surname">Прізвище</label>
                                <br/>
                                <input class="popup__input" type="text" id="surname" required/>
                            </div>
                        </div>
                    </div>
			    </div>
			    <div class="popup__register-section">
				    <div class="popup__inner-container">
                        <div class="popup__fieldset-reg">
                            <div class="popup__legend">Швидка реєстрація</div>
                                <div class="popup__social-reg">
                                    <a href="#" class="popup__social-reg_link">
                                        <img class="popup__social-reg-img" src="http://wordpress-test-site.dev/wp-content/themes/Theatre2.0/img/social-facebook.png" alt="facebook">
                                    </a>
                                    <a href="#" class="popup__social-reg_link">
                                        <img class="popup__social-reg-img" src="http://wordpress-test-site.dev/wp-content/themes/Theatre2.0/img/social-google.png" alt="google">
                                    </a>
                                    <a href="#" class="popup__social-reg_link">
                                        <img class="popup__social-reg-img" src="http://wordpress-test-site.dev/wp-content/themes/Theatre2.0/img/social-twitter.png" alt="twitter">
                                    </a>
                                </div>


                        </div>
                    </div>
			</div>
			    <div class="popup__gift-section">
				<div class="popup__inner-container">
                    <div class="popup__fieldset-gift">
                        <div class="popup__legend">Оберіть подарунок за зроблений внесок</div>
                        <div class="popup__slick-slider">
							<div class="popup__slick-slider-item">
                            	<fieldset class="popup__slick-fieldset">
                                <legend class="legend-bottom">70 грн</legend>
                                <div class="popup__slick-content">
									Ексклюзивна листівка від театру Лесі
                                </div>
                            </fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">150 грн</legend>
									<div class="popup__slick-content">
										2 квитки до театру Лесі, або Драма UA на будь яку виставу
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">300 грн</legend>
									<div class="popup__slick-content">
										Абонемент на місяць на 1 особу до театру Лесі
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">550 грн</legend>
									<div class="popup__slick-content">
										Теплі носки hand-made від завліту театру (Оксана Данчук)
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">650 грн</legend>
									<div class="popup__slick-content">
										Торт від директорки театру Лесі/ Драми UA (Оля Мухіна/ Вікторія Швидко)
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">1000 грн</legend>
									<div class="popup__slick-content">
										Побачення з актором/актрисою театру або менеджерами Драми UA
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">2000 грн</legend>
									<div class="popup__slick-content">
										Табличка з написом “Ваше ім’я та прізвище - добра людина! Дякуємо за двері”
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">3000 грн</legend>
									<div class="popup__slick-content">
										Фото з автографом актора театру Лесі або Драми UA, абонемент до театру та таблична з Вашим ім’ям
									</div>
								</fieldset>
							</div>
							<div class="popup__slick-slider-item">
								<fieldset class="popup__slick-fieldset">
									<legend class="legend-bottom">5000 грн</legend>
									<div class="popup__slick-content">
										“Подарунковий пакет” (листівка, абонемент до театру, торт/носочки, табличка, побачення з актором)
									</div>
								</fieldset>
							</div>
                        </div>

                    </div>
                </div>
			</div>
			    <div class="popup__btn-section">
                    <button class="popup__btn" id="btn-liqpay">Оплатити через LIQPAY</button>
			</div>
            </div>


		</div>
	</div>