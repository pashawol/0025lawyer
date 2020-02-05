<?php 
/*
 * *****************************************************
 */
add_shortcode('mainheader', 'mainheader_func');
function mainheader_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    		<!-- start HEADER.header-->
	<header class="header block-with-lazy">

		<div class="header__video-wrap">
		<div class="header__video"><img src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/header-video.jpg" alt="#">
		</div>
		<div class="header__video-bg">
		</div>
		</div>
		<div class="side-wrapper">

		<!-- start header-block-->
		<div class="header-block" id="header-block">
			<div class="container">
				<div class="header-block__slider header-block__slider--js">
					<?php   if( have_rows('слайдер_на_главной') ):    while ( have_rows('слайдер_на_главной') ) : the_row();  ?>
					<div class="slider-slide">
						<div class="header-block__slider-block">
							<div class="header-block__title"><?php echo the_sub_field('заголовок'); ?></div>
							<div class="header-block__text"><?php echo the_sub_field('текст'); ?></div>
							<div class="header-block__btn-wrap"><a class="header-block__btn btn btn-primary link-modal" href="#modal-call" data-order="получить консультацию по: <?php echo the_sub_field('заголовок'); ?>"  data-title="Получить консультацию">получить консультацию</a>
								<div class="header-block__add">Первая консультация<span>бесплатно</span>
								</div>
							</div>
						</div>
					</div>
					<?php  endwhile;  else :  endif;    ?>
				</div>
			</div>
		</div>
		<!-- end header-block-->
		<div class="header-block__slider-dots"></div>
		</div>
		</header>
		<!-- end HEADER.header-->
    <?php
    return ob_get_clean();

}

 
/*
 * *****************************************************
 */
add_shortcode('numbers', 'numbers_func');
function numbers_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    			<!-- start s-numbers-->
			<section class="s-numbers section" id="s-numbers">
				<div class="side-wrapper">
					<div class="before"> <?php echo the_field('заголовок_02'); ?></div>
					<div class="container">
						<h2><?php echo the_field('заголовок_02'); ?></h2>
						<div class="s-numbers__row row">
						<?php   if( have_rows('блоки_02') ):    while ( have_rows('блоки_02') ) : the_row();  ?>
							<div class="s-numbers__col col-xl-3 col-sm-6">
								<div class="s-numbers__item s-numbers__item  "><?php echo the_sub_field('текст'); ?></div>
							</div>
							<?php  endwhile;  else :  endif;    ?>
						</div>
					</div>
				</div>
			</section>
			<!-- end s-numbers-->
    <?php
    return ob_get_clean();

}

 
/*
 * *****************************************************
 */
add_shortcode('values', 'values_func');
function values_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    				<!-- start s-values-->
			<div class="s-values section" id="s-values">
				<div class="side-wrapper">
					<div class="before"><?php echo the_field('заголовок_03'); ?>	</div>
					<div class="container">
						<div class="s-values__block bg-wrap"><img class="bg-img lazy"src="#" data-src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/values-bg.jpg" alt=""/>
						<img class="abs-img lazy"src="#" data-src="<?php echo the_field('изображение_03'); ?>" alt=""/>
							<div class="s-values__row row">
								<div class="col-lg">
									<div class="s-values__title">
									<?php echo the_field('заголовок_03'); ?>
									</div>
								</div>
								<div class="col-lg">
									<div class="s-values__text-block">
									<?php echo the_field('текст_03'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end s-values-->
    <?php
    return ob_get_clean();

}
 
/*
 * *****************************************************
 */
add_shortcode('advantages', 'advantages_func');
function advantages_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    			<!-- start s-advantages-->
			<section class="s-advantages bg-wrap section" id="s-advantages"><img class="bg-img lazy" src="#" data-src="<?php echo the_field('фон_04', 'option'); ?>" alt=""/>
				<div class="side-wrapper">
					<div class="container">
						<div class="s-advantages__title-wrap"><?php echo the_field('заголовок_04', 'option'); ?></div>
						<div class="s-advantages__row row">
							<?php   if( have_rows('блоки_04', 'option') ):    while ( have_rows('блоки_04', 'option') ) : the_row();  ?>
								<div class="s-advantages__col col-md-6">
									<div class="s-advantages__item">
										<div class="s-advantages__item-add">
											<div class="s-advantages__add-block">
												<div class="s-advantages__add-title"><?php echo the_sub_field('заголовок_выпадающий'); ?></div>
												<div class="s-advantages__add-text"><?php echo the_sub_field('текст'); ?></div>
											</div>
										</div>
										<div class="s-advantages__item-title"><?php echo the_sub_field('заголовок'); ?></div>
								</div>
							</div>
							<?php  endwhile;  else :  endif;    ?>
					</div>
				</div>
			</section>
			<!-- end s-advantages-->
    <?php
    return ob_get_clean();

}

/*
 * *****************************************************
 */
add_shortcode('services', 'services_func');
function services_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    			<!-- start s-services-->
			<section class="s-services section" id="s-services">
				<div class="side-wrapper">
					<div class="container">
						<h2><?php echo the_field('заголовок_05'); ?></h2>
						<?php   if( have_rows('блоки_услуг') ):    while ( have_rows('блоки_услуг') ) : the_row();  ?>
						<div class="s-services__block bg-wrap"><img class="bg-img lazy" src="#" data-src="	<?php echo the_sub_field('фон'); ?>" alt=""/>
						<?php
                $servise_img =  get_sub_field('картинка');
               
                if ($servise_img) {
									?>
						<img class="abs-img  lazy" src="#" data-src="<?php echo the_sub_field('картинка'); ?>"  alt=""/>
						<?php
						}
    				?>
							<div class="s-services__text-wrap">
								<div class="s-services__block-title"><?php echo the_sub_field('заголовок'); ?></div> 
								<?php echo the_sub_field('ссылки'); ?>
							</div>
						</div>
						<?php  endwhile;  else :  endif;    ?>
						<div class="row align-items-center">
							<div class="col h5 "> Никто не любит сюрпризов, особенно когда речь заходит о ценах! Поэтому все наши услуги имеют четкий, фиксированный ежемесячный тарифный план.</div>
							<div class="col-auto">
							<a class="header-block__btn btn btn-primary link-modal mb-2" href="#modal-call" data-order="УЗНАТЬ ЦЕНУ в услугах"  data-title="УЗНАТЬ ЦЕНУ">УЗНАТЬ ЦЕНУ</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end s-services-->
    <?php
    return ob_get_clean();

}


/*
 * *****************************************************
 */
add_shortcode('about', 'about_func');
function about_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-about-->
			<section class="s-about bg-wrap section" id="s-about"><img class="bg-img lazy" src="#" data-src="<?php echo the_field('фон_06'); ?>" alt=""/>
				<div class="side-wrapper">
					<div class="container">
						<div class="s-about__row row">
							<div class="s-about__text-col col">
								<div class="s-about__text-wrap"><?php echo the_field('текст_06'); ?></div>
							</div>
							<div class="col-md-auto">
								<div class="s-about__contact-block">
									<div class="s-about__ask">Напишите вопрос юристу:
									</div><a class="s-about__ask-link" href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a>
									<div class="s-about__ask">Задайте вопрос юристу:
									</div><a class="s-about__ask-link" href="tel:<?php echo $tel_str ;  ?>"><?php echo $tel;  ?></a><a class="s-about__btn btn btn-primary  link-modal" href="#modal-call" data-order="получить консультацию в о компании "  data-title="Получить консультацию">получить консультацию</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end s-about-->
    <?php
    return ob_get_clean();

}



/*
 * *****************************************************
 */
add_shortcode('work', 'work_func');
function work_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-how-work-->
			<section class="s-how-work section" id="s-how-work">
				<div class="side-wrapper">
					<div class="container">
					<?php echo the_field('заголовок_07'); ?>
						<div class="s-how-work__row row">
						<?php   if( have_rows('блоки_07') ):    while ( have_rows('блоки_07') ) : the_row();  ?>
							<div class="s-how-work__col col-lg-6">
								<div class="s-how-work__item">
									<div class="s-how-work__item-row row">
										<div class="s-how-work__icon-col col-md">
											<div class="s-how-work__icon-wrap"><img class="s-how-work__icon lazy" src="#" data-src="<?php echo the_sub_field('картинка'); ?>" alt="" role="presentation"/>
											</div>
										</div>
										<div class="col-md">
											<div class="s-how-work__item-title"><?php echo the_sub_field('заголовок'); ?></div>
											<div class="s-how-work__item-subtitle"><?php echo the_sub_field('текст'); ?></div>
										</div>
									</div>
								</div>
							</div>
							<?php  endwhile;  else :  endif;    ?>
						</div>
					</div>
				</div>
			</section>
			<!-- end s-how-work-->
    <?php
    return ob_get_clean();

}


/*
 * *****************************************************
 */
add_shortcode('partners', 'partners_func');
function partners_func()
{
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    		<!-- start s-partners-->
			<section class="s-partners section" id="s-partners">
				<div class="side-wrapper">
					<div class="container">
						<h2><?php echo the_field('заголовок_08'); ?></h2>
						<div class="s-partners__slider s-partners__slider--js">
						<?php   $images12 = get_field("логотипы");
							 ?>
							  <?php
					foreach ($images12 as $image) {
						// var_dump($images7)
						?>
							<div class="s-partners__wpap"><div class="s-partners__item" ><img class="res-i" src="#" data-lazy="<?php echo $image['sizes']['medium'];?>" alt=""/></div>
							</div>
							<?php
									}
							?>
						</div>
						<!-- <div class="s-partners__slider-dots">
						</div> -->
					</div>
				</div>
			</section>
			<!-- end s-partners-->
    <?php
    return ob_get_clean();

}


/*
 * *****************************************************
 */
add_shortcode('contact', 'contact_func');
function contact_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-contact-->
			<div class="s-contact section block-with-lazy" id="s-contact">
				<div class="s-contact__bg-wrapper">
					<div class="s-contact__video"><img class="lazy" src="#" data-src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/contact-video.jpg" alt=""/>
					</div>
					<div class="s-contact__layer"><img class="lazy" src="#" data-src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/contact-layer.png" alt=""/>
					</div>
				</div>
				<div class="side-wrapper">
					<div class="container">
						<div class="s-contact__row row">
							<div class="s-contact__logo-col col-lg-auto"><a class="s-contact__logo-block" href="/"><span class="s-contact__logo-border"></span><img class="res-i lazy" src="#" data-src="<?php echo the_field('логотип', 'option'); ?>" alt=""/></a>
							</div>
							<div class="s-contact__map-col col-md">
								<div class="s-contact__map-wrap"><?php echo the_field('карта', 'option'); ?>	</div>
							</div>
							<div class="s-contact__contact-col col-md-auto">
								<div class="s-contact__ask-block">
									<svg class="icon icon-mail ">
										<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#mail"></use>
									</svg>
									<div class="s-contact__ask">Напишите вопрос юристу:
									</div><a class="s-contact__link" href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a>
								</div>
								<div class="s-contact__ask-block">
									<svg class="icon icon-phone ">
										<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#phone"></use>
									</svg>
									<div class="s-contact__ask">Задайте вопрос юристу:
									</div><a class="s-contact__link" href="tel:<?php echo $tel_str ;  ?>"><?php echo $tel;  ?></a>
								</div><a class="s-contact__btn btn btn-primary  link-modal" href="#modal-call" data-order="Перезвонить с подвала"  data-title=" ОСТАВИТЬ ЗАЯВКУ">Перезвонить вам?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end s-contact-->

    <?php
    return ob_get_clean();

}



/*
 * ***************** about ************************************
 */


 
/*
 * *****************************************************
 */
add_shortcode('page_header', 'page_header_func');
function page_header_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    				<!-- start HEADER.header-->
			<header class="header block-with-lazy">
			</header>
<!-- end HEADER.header-->
 <!-- start header-block-->
 <div class="header-block bg-wrap about-header" id="header-block">
	 <!-- <img class="bg-img" src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/about-header-bg.jpg" alt=""/> -->
	 <?php echo get_the_post_thumbnail( $page->ID, 'full',  array( 'class' => "bg-img",  )); ?>
	 <div class="container">
		 <div class="header-block__slider-block">
			 <h1  ><?php echo get_the_title($page); ?></h1>
			 <p  ><?php echo get_the_excerpt()  ?> </p>
			 <div class="header-block__btn-wrap"><a class="header-block__btn btn btn-primary link-modal" href="#modal-call" data-order="получить консультацию c страницы: <?php echo get_the_title($page); ?>"  data-title="Получить консультацию">получить консультацию</a>
			 </div>
		 </div>
	 </div>
 </div>
 <!-- end header-block-->


    <?php
    return ob_get_clean();

}
/*
 * *****************************************************
 */
add_shortcode('page_header_dark', 'page_header_dark_func');
function page_header_dark_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    				<!-- start HEADER.header-->
			<header class="header block-with-lazy">
			</header>
<!-- end HEADER.header-->
 <!-- start header-block-->
 <div class="header-block bg-wrap about-header" id="header-block">
	 <!-- <img class="bg-img" src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/about-header-bg.jpg" alt=""/> -->
	 <?php echo get_the_post_thumbnail( $page->ID, 'full',  array( 'class' => "bg-img",  )); ?>
	 <div class="container">
		 <div class="header-block__slider-block">
			 <h1  class="text-body"><?php echo get_the_title($page); ?></h1>
			 <p  class="text-body"><?php echo get_the_excerpt()  ?> </p>
			 <div class="header-block__btn-wrap"><a class="header-block__btn btn btn-primary link-modal" href="#modal-call" data-order="получить консультацию c страницы: <?php echo get_the_title($page); ?>"  data-title="Получить консультацию">получить консультацию</a>
			 </div>
		 </div>
	 </div>
 </div>
 <!-- end header-block-->


    <?php
    return ob_get_clean();

}

 
/*
 * *****************************************************
 */
add_shortcode('anniversary', 'anniversary_func');
function anniversary_func()
{
	 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?> 
			<!-- start s-anniversary-->
			<section class="s-anniversary section" id="s-anniversary">
				<div class="container">
					<h2><?php echo the_field('заголовок_anniversary'); ?></h2>
					<div class="s-anniversary__main-row row">
						<div class="s-anniversary__items-col col-xl">
							<div class="s-anniversary__items-row row">
							<?php   if( have_rows('блоки_anniversary') ):    while ( have_rows('блоки_anniversary') ) : the_row();  ?>
								<div class="s-anniversary__item-col col-xl-4 col-lg col-md-4 col-sm-6">
									<div class="s-anniversary__item-wrapper">
										<div class="s-anniversary__item">
											<div class="s-anniversary__item-text"><?php echo the_sub_field('текст'); ?></div>
										</div>
									</div>
								</div>
								<?php  endwhile;  else :  endif;    ?>
							</div>
						</div>
						<div class="s-anniversary__text-col col-xl"><?php echo the_field('текст_anniversary'); ?></div>
					</div>
				</div>
			</section>
			<!-- end s-anniversary-->

    <?php
    return ob_get_clean();

}
 
 
/*
 * *****************************************************
 */
add_shortcode('info', 'info_func');
function info_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    
 
			<!-- start s-info-->
			<div class="s-info section" id="s-info">
				<div class="container">
					<div class="s-info__block bg-wrap"><img class="bg-img lazy" src="#" data-src="<?php echo the_field('картинка_info'); ?>" alt=""/>
						<div class="s-info__text-wrap"><?php echo the_field('текст_info'); ?>	</div>
					</div>

					<div class=" text-right"><a class="btn btn-primary link-modal" href="#modal-call" data-order="СВЯЗАТЬСЯ СО СПЕЦИАЛИСТОМ"  data-title="СВЯЗАТЬСЯ СО СПЕЦИАЛИСТОМ">СВЯЗАТЬСЯ СО СПЕЦИАЛИСТОМ</a>
			 </div>
				</div>
			</div>
			<!-- end s-info-->

    <?php
    return ob_get_clean();

}
  
/*
 * *****************************************************
 */
add_shortcode('mission', 'mission_func');
function mission_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    
 
			<!-- start s-mission-->
			<section class="s-mission section" id="s-mission">
				<div class="container">
					<div class="s-mission__title-row row">
						<div class="s-mission__title-col col-lg-auto">
							<h2><?php echo the_field('заголовок_mission'); ?></h2>
						</div>
						<div class="col-lg">
							<div class="s-mission__subtitle"><?php echo the_field('подзаголовок_mission'); ?></div>
						</div>
					</div>
					<div class="s-mission__text-wrap"><?php echo the_field('текст_mission'); ?>	</div>
					 
				</div>
			</section>
			<!-- end s-mission-->

    <?php
    return ob_get_clean();

}
 
 
/*
 * *****************************************************
 */
add_shortcode('values_about', 'values_about_func');
function values_about_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    
 
			<!-- start s-values-about-->
			<section class="s-values-about section" id="s-values-about">
				<div class="container">
					<h2><?php echo the_field('заголовок_values_about'); ?></h2>
					<div class="s-values-about__subtitle"><?php echo the_field('подзаголовок_values_about'); ?></div>
					<div class="s-values-about__row-wrap">
					<?php   if( have_rows('блоки_values') ):    while ( have_rows('блоки_values') ) : the_row();  ?>
						<div class="s-values-about__row row">
							<div class="s-values-about__img-col col-lg">
								<div class="s-values-about__img-wrap"><img class="lazy res-i" src="#" data-src="<?php echo the_sub_field('картинка'); ?>" alt="#"/>
								</div>
							</div>
							<div class="col-lg"><?php echo the_sub_field('текст'); ?></div>
						</div>
						<?php  endwhile;  else :  endif;    ?>
 
					</div>
				</div>
			</section>
			<!-- end s-values-about-->
    <?php
    return ob_get_clean();

}



 
 
/*
 * *********************residence*******************************
 */
 
/*
 * *****************************************************
 */

add_shortcode('description', 'description_func');
function description_func()
{
	$tel = get_field('телефон', 'option');
	$tel_str = str_replace(" ","", $tel); 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    <!-- start s-description-->
			<div class="s-description section" id="s-description">
				<div class="container">
					<div class="s-description__text-wrapper"><?php echo the_field('текст_в_2_колонки'); ?></div>
				</div>
			</div>
			<!-- end s-description-->
    <?php
    return ob_get_clean();

}
/*
 * *****************************************************
 */

add_shortcode('residence', 'residence_func');
function residence_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    <!-- start s-residence-adv-->
			<section class="s-residence-adv section" id="s-residence-adv">
				<div class="container">
					<h2><?php echo the_field('заголовок_residence'); ?></h2>
					<div class="s-residence-adv__subtitle"><?php echo the_field('подзаголовок_residence'); ?></div>
					<div class="s-residence-adv__row row">
					<?php   if( have_rows('блоки_residence') ):    while ( have_rows('блоки_residence') ) : the_row();  ?>
						<div class="s-residence-adv__col col-xl col-md-4 col-sm-6">
							<div class="s-residence-adv__item">
								<div class="s-residence-adv__icon-wrap"><img class="s-residence-adv__icon s-residence-adv__icon  lazy" src="#" data-src="<?php echo the_sub_field('картинка'); ?>" alt="" role="presentation"/>
								</div>
								<div class="s-residence-adv__item-text"><?php echo the_sub_field('текст'); ?></div>
							</div>
						</div>
						<?php  endwhile;  else :  endif;    ?> 
					</div>
				</div>
			</section>
			<!-- end s-residence-adv-->
    <?php
    return ob_get_clean();

}


/*
 * *****************************************************
 */

add_shortcode('foreigner', 'foreigner_func');
function foreigner_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-foreigner-->
			<section class="s-foreigner section" id="s-foreigner">
				<div class="container">
					<div class="s-foreigner__title">
						<h2><?php echo the_field('заголовок_foreigner'); ?></h2>
					</div>
					<div class="s-foreigner__row-wrap">
						<div class="s-foreigner__row row">
							<div class="s-foreigner__img-col col-lg">
								<div class="s-foreigner__img-wrap bg-wrap"><img class="bg-img" src="<?php echo the_field('картинка_foreigner'); ?>" alt="#"/>
								</div>
							</div>
							<div class="col-lg">
							<?php echo the_field('текст_foreigner'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end s-foreigner-->
    <?php
    return ob_get_clean();

}






/*
 * *****************************************************
 */

add_shortcode('grounds', 'grounds_func');
function grounds_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-grounds-->
			<section class="s-grounds section" id="s-grounds">
				<div class="container">

					<h2><?php echo the_field('заголовок_grounds'); ?></h2>
					<div class="s-grounds__subtitle"><?php echo the_field('подзаголовок_grounds'); ?></div>
					<div class="s-grounds__row row">
						<div class="before" style="background-image: url(<?php echo the_field('картинка_grounds'); ?>);"></div>
						<div class="col-xl-3 col-lg-4 col-md-6">
						<?php echo the_field('текст_слева-grounds'); ?>
						</div>
						<div class="s-grounds__col s-grounds__col--left col-xl-3 col-lg-4 col-md-6">
						<?php echo the_field('текст_справа_grounds'); ?>
						</div>
					</div><a class="s-grounds__btn btn btn-primary  link-modal" href="#modal-call" data-order="<?php echo the_field('текст_в_кнопке'); ?>"  data-title="<?php echo the_field('текст_в_кнопке'); ?>"><?php echo the_field('текст_в_кнопке'); ?></a>
				</div>
			</section>
			<!-- end s-grounds-->
    <?php
    return ob_get_clean();

}


/*
 * *****************************************************
 */

add_shortcode('docs', 'docs_func');
function docs_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-docs-->
			<div class="s-docs section" id="s-docs">
				<div class="container">
					<div class="s-docs__info-wrapper">
						<div class="s-docs__info-block wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s" >
							<svg class="icon icon-info ">
								<use xlink:href="<?php  echo get_template_directory_uri(); ?>/public/img/svg/sprite.svg#info"></use>
							</svg>
							<div class="s-docs__info-text">	<?php echo the_field('текста_справа_doc'); ?></div>
						</div>
						<div class="s-docs__block bg-wrap"><img class="bg-img  lazy" src="#" data-src="<?php  echo get_template_directory_uri(); ?>/public/img/@2x/docs-bg.jpg" alt=""/>
							<div class="s-docs__text-wrapper">
							<?php echo the_field('текст_doc'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end s-docs-->
    <?php
    return ob_get_clean();

}

/*
 * *****************************************************
 */

add_shortcode('content', 'content_func');
function content_func()
{
 
    global $get_template_directory_uri, $delay;
    ob_start();
    ?>
    	<!-- start s-content-->
			<div class="s-content section"  >
				<div class="container">
				<?php echo the_field('текстовый_блок'); ?>
				
				</div>
			</div>
			<!-- end s-content-->
    <?php
    return ob_get_clean();

}
