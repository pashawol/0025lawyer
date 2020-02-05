<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
 
 
	<?php wp_head(); ?>
</head>
<?php $tel = get_field('телефон', 'option');
											$tel_str = str_replace(" ","", $tel); ?>
<!-- <body  > -->
<body <?php body_class( $class ); ?> >
<!--[if lt IE 11]><p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p><![endif]-->
	<div class="main-wrapper">
			<div class="menu-mobile menu-mobile--js">
				<div class="menu-mobile__inner">
					<div class="container">
						<div class="menu-mobile__block">
							<div class="menu-mobile__top-row row">
								<div class="col-auto"><a class="menu-mobile__logo-block" href="/"><span class="menu-mobile__logo-border"></span><img class="res-i" src="<?php echo the_field('логотип', 'option'); ?>" alt=""/></a>
								</div>
								<div class="col-4 d-none d-lg-block">
									<div class="menu-mobile__title"><?php echo get_bloginfo('name'); ?>
									</div>
								</div>
								<div class="col d-none d-md-block">
									<div class="menu-mobile__adress"><span>Адрес: </span>ул. Дзирнаву 37-15, Рига, Латвия
									</div>
								</div>
								<div class="col-auto">
									<div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
									</div>
								</div>
							</div>
							<div class="menu-mobile__menu-row row">
								<div class="col-lg">
									<!-- <ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
									<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Главная</a></li>
									<li class="menu-item menu-item-has-children">
										<a href="#" itemprop="url">регистрация компаний в&nbsp;европе</a>
										<ul class="submenu">
												<li class="submenu-item" itemprop="item"><a href="#" itemprop="url">Регистрация компаний в Швеции</a></li>
												<li class="submenu-item" itemprop="item"><a href="#" itemprop="url">Регистрация компаний в Англии</a></li>
												<li class="submenu-item" itemprop="item"><a href="#" itemprop="url">Регистрация компаний в Польше</a></li>
												<li class="submenu-item" itemprop="item"><a href="#" itemprop="url">Регистрация компаний в Эстонии</a></li>
											</ul>
										</li>
										<li class="menu-item" itemprop="item"><a href="#" itemprop="url">О компнии</a></li>
										<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Контакты</a></li>
									</ul> -->

									<?php
										wp_nav_menu( array( 
												'theme_location' => 'my-custom-menu'
												 ) ); 
										?>
								</div>
								<div class="col-lg-auto">
									<div class="menu-mobile__adress d-md-none"><span>Адрес: </span><?php echo the_field('адрес', 'option'); ?></div>
									<div class="menu-mobile__ask-block">
										<div class="menu-mobile__ask">Напишите вопрос юристу:
										</div><a class="menu-mobile__ask-link" href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a>
									</div>
									<div class="menu-mobile__ask-block">
										<div class="menu-mobile__ask">Задайте вопрос юристу:
										</div><a class="menu-mobile__ask-link" href="tel:<?php echo $tel_str ;  ?>"><?php echo $tel;  ?></a>
									</div>
									<div class="soc">
									<?php   if( have_rows('соц_сети', 'option') ):    while ( have_rows('соц_сети', 'option') ) : the_row();  ?>
									<a class="soc__item soc__item--<?php echo the_sub_field('название'); ?>" href="<?php echo the_sub_field('ссылка'); ?>" target="_blank">
										<svg class="icon icon-<?php echo the_sub_field('название'); ?> ">
											<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#<?php echo the_sub_field('название'); ?>"></use>
										</svg></a>
										<?php  endwhile;  else :  endif;    ?> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-right"></div>
				</div>
			</div>
			<!--  мобильное меню-->
		
						<!-- start top-nav-->
						<div class="top-nav block-with-lazy">
							<div class="container">
								<div class="top-nav__row row">
									<div class="col-auto"><a class="top-nav__logo-block" href="/"><span class="top-nav__logo-border"></span><img class="res-i" src="<?php echo the_field('логотип', 'option'); ?>" alt=""/></a>
									</div>
									<div class="col d-none d-xl-block">
										<div class="top-nav__title"><?php echo   get_bloginfo('name'); ?>
										</div>
										<div class="top-nav__subtitle"><?php echo get_bloginfo('description'); ?>
										</div>
									</div>
									<div class="col-xl-auto col d-none d-md-block">
										<div class="top-nav__ask">Напишите вопрос юристу:
										</div><a class="top-nav__link" href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a>
									</div>
									<div class="col-xl-auto col d-none d-md-block">
										<div class="top-nav__ask">Задайте вопрос юристу:
										</div>
									
										<a class="top-nav__link" href="tel:<?php echo $tel_str ;  ?>"><?php echo $tel;  ?></a>
									</div>
									<div class="col-auto">
										<div class="top-nav__icon-row row">
											<div class="col-auto d-md-none"><a class="top-nav__icon-link" href="mailto:<?php echo the_field('email', 'option'); ?>">
												<svg class="icon icon-mail ">
													<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#mail"></use>
												</svg></a>
											</div>
											<div class="col-auto d-md-none"><a class="top-nav__icon-link" href="tel:<?php echo $tel_str ;  ?>">
												<svg class="icon icon-phone ">
													<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#phone"></use>
												</svg></a>
											</div>
											<div class="col-auto">
												<div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end top-nav-->
